<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function index($id) {
        $v = DB::table('video')->where('id' , $id)->first();
        return view('video.index',compact('v'));
    }
    public function search() {
        $q = request()->input('q');
        return view('video.search',compact('q'));
    }
}
