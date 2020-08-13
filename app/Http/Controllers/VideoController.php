<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function index($id) {
        $v = DB::table('video')->where('id',$id)->first();
        $comvideos = DB::table('comments')->where('video_id',$id)->get();
        //$comusers = DB::table('comments')->join('users', 'users.users_id', '=', 'comments.id_comments')->where('comments.video_id', $id)->get(['name']);
        return view('video.index',['v'=>$v,'comvideos'=>$comvideos]);
    }
    public function search() {
        $q = request()->input('q');
        return view('video.search',compact('q'));
    }
}