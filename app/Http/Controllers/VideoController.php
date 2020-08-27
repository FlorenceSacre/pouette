<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function index($id) {
        $v = DB::table('video')->where('id',$id)->first();
        $comvideos = DB::table('comments')->join('users', 'users.id', '=', 'comments.users_id')->where('comments.video_id', $id)->get();
        $categ = DB::table('video')->where('id',$id)->pluck('categorie')->first();
        return view('video.index',['v'=>$v,'comvideos'=>$comvideos,'categ'=>$categ]);
    }
    public function search() {
        $q = request()->input('q');
        return view('video.search',compact('q'));
    }
    public function storeCom($id, Request $request) {
        if (Auth::check()){
            $comments = New Comments;
            $comments->comment = request('com');
            $comments->users_id = Auth::id();
            $comments->video_id = $id;
            $comments->save();
        }
        return redirect()->back();
    }
}