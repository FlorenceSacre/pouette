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
            'videoBQ' => ['required'],
            'videoHQ' => ['required'],
            'image' => ['required'],
        ]);
    }
    public function showUploadForm() {
        return view('add.index');
    }
    public function storeFile(Request $request) {
        if($request->has('videoBQ')) {
            if($request->has('videoHQ')) {
                if($request->has('image')) {
                    if (isset($_POST['categorie'])) {
                        foreach ($_POST['categorie'] as $categorie) {
                            $filenamevideoBQ = $request->videoBQ->getClientOriginalName();
                            $request->videoBQ->storeAs('public/videos', $filenamevideoBQ);
                            $filenamevideoHQ = $request->videoHQ->getClientOriginalName();
                            $request->videoHQ->storeAs('public/videos', $filenamevideoHQ);
                            $filenameimage = $request->image->getClientOriginalName();
                            $request->image->storeAs('public/images', $filenameimage);
                            $video = New video;
                            $video->titre = request('titre');
                            $video->categorie = $categorie;
                            $video->videoBQ = 'storage/app/public/videos/' . $filenamevideoBQ;
                            $video->videoHQ = 'storage/app/public/videos/' . $filenamevideoHQ;
                            $video->image = 'storage/app/public/images/' . $filenameimage;
                            $video->save();
                        }
                    }
                }
            }
        }
    }
}