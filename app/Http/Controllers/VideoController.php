<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function index($id) {
        //$v = DB::table('video')->where('id',$id)->first();
        //$comvideos = DB::table('video')->join('comments', 'video.comments_id', '=', 'id_comments')->where('id',$id)->get();
        //$comusers = DB::table('video')->join('users', 'users.comments_id', '=', 'id_comments')->where('id' , $id)->get();
        $v = DB::table('video')
            ->leftjoin('comments', 'video.comments_id', '=', 'comments.id_comments')
            ->leftjoin('users', 'users.comments_id', '=', 'comments.id_comments')
            ->where('video.id', $id)
            ->where('comments.id_comments', 'comments.id_comments')
            ->get();
        return view('video.index',['v'=>$v]);
    }
    public function search() {
        $q = request()->input('q');
        return view('video.search',compact('q'));
    }
}