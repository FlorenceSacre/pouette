<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;

class AddVideoController extends Controller
{
    public function __invoke() {
        request()->validate([
            'titre' => ['required'],
            'categorie' => ['required'],
            'video' => ['required'],
            'image' => ['required'],
        ]);
    }
    public function showUploadForm() {
        return view('add.index');
    }
    public function storeFile(Request $request) {
        if($request->has('video')) {
            if($request->has('image')) {
                if (isset($_POST['categorie'])) {
                    foreach ($_POST['categorie'] as $categorie) {
                        $filenamevideo = $request->video->getClientOriginalName();
                        $request->video->storeAs('public/videos', $filenamevideo);
                        $filenameimage = $request->image->getClientOriginalName();
                        $request->image->storeAs('public/images', $filenameimage);
                        $video = New video;
                        $video->titre = request('titre');
                        $video->categorie = $categorie;
                        $video->video = 'storage/app/public/videos/' . $filenamevideo;
                        $video->image = 'storage/app/public/images/' . $filenameimage;
                        $video->save();
                    }
                }
            }
        }
    }
}