<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\DB;

use App\Repositories\UserRepository;

class UserController extends Controller
{

    public function __invoke() {
        request()->validate([
            'name' => ['required'],
            'street' => ['required'],
            'postcode' => ['required'],
            'city' => ['required'],
            'country' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
    }
    protected $userRepository;

    protected $nbrPerPage = 5;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function index() {
        $users = $this->userRepository->getPaginate($this->nbrPerPage);
        $links = $users->render();

        return view('user.index', compact('users', 'links'));
    }

    public function create() {
        return view('user.create');
    }

    public function store(UserCreateRequest $request) {
        dd($request->all());
        $user = $this->userRepository->store($request->all());

        return redirect('user')->withOk("L'utilisateur " . $user->name . " a été créé");
    }

    public function show($id) {
        $user = $this->userRepository->getById($id);

        $pays = DB::table('users')->join('country', 'country.id', '=', 'users.country_id')->where('users.id', $id)->first();

        return view('user.show',  compact('user','pays'));
    }

    public function edit($id) {
        $user = $this->userRepository->getById($id);

        return view('user.edit',  compact('user'));
    }

    public function update(UserUpdateRequest $request, $id) {
        $this->userRepository->update($id, $request->all());

        return redirect('user')->withOk("L'utilisateur " . $request->input('name') . " a été modifié");
    }

    public function destroy($id) {
        $this->userRepository->destroy($id);

        return redirect()->back();
    }
}