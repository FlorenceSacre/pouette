<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css"/>
@extends('style.style')

@section('content')
    <form action="{{route('upload.video')}}" method="post" enctype="multipart/form-data" class="form-add">
        {{csrf_field()}}
        <div>
            <div>
                <label for="titre">Titre</label>
                <input type="text" name="titre" value="{{old('titre')}}" placeholder="Titre">
            </div>
            <div>
                <fieldset>
                    <legend>Choisi dans quelle catégorie ta vidéo appartient</legend>
                    <div>
                        <input type="checkbox" id="paysage" name="categorie[]" value="voyage">
                        <label for="categorie[]" id="categorie">Paysage</label>
                    </div>
                    <div>
                        <input type="checkbox" id="animaux" name="categorie[]" value="animaux">
                        <label for="categorie[]" id="categorie">Animaux</label>
                    </div>
                    <div>
                        <input type="checkbox" id="hiver" name="categorie[]" value="hiver">
                        <label for="categorie[]" id="categorie">Hiver</label>
                    </div>
                </fieldset>
            </div>
            <div>
                <label for="video">Ajouter une vidéo</label>
                <input type="file" name="video" id="video" />
            </div>
            <div id="image">
                <label for="image">Ajouter une image miniature</label>
                <input type="file" name="image" id="image" />
            </div>
            <input type="submit" value="envoyer" />
        </div>
    </form>
@endsection