<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css"/>
@extends('style.style')

@section('content')
    <form action="{{route('upload.video')}}" method="post" enctype="multipart/form-data" class="form-add">
        {{csrf_field()}}
        <div id="formulaire">
            <fieldset id="titre">
                <legend id="titre-form">Ajouter une vidéo</legend>
            </fieldset>
            <div>
                <label for="titre">Titre</label>
                <input type="text" name="titre" value="{{old('titre')}}" placeholder="Titre">
            </div>
            <div>
                <fieldset>
                    <legend>Choisir la ou les catégories de la vidéo</legend>
                    <div>
                        <input type="checkbox" id="paysage" name="categorie[]" value="voyage" />
                        <label for="categorie[]" id="categorie">Paysage</label>
                    </div>
                    <div>
                        <input type="checkbox" id="animaux" name="categorie[]" value="animaux" />
                        <label for="categorie[]" id="categorie">Animaux</label>
                    </div>
                    <div>
                        <input type="checkbox" id="hiver" name="categorie[]" value="hiver" />
                        <label for="categorie[]" id="categorie">Hiver</label>
                    </div>
                </fieldset>
            </div>
            <div>
                <label for="videoBQ" id="videoBQ">Ajouter une vidéo de basse qualité</label>
                <input type="file" name="videoBQ" />
            </div>
            <div>
                <label for="videoHQ" id="videoHQ">Ajouter une vidéo de haute qualité</label>
                <input type="file" name="videoHQ" />
            </div>
            <div>
                <label for="image" id="image">Ajouter une image miniature</label>
                <input type="file" name="image" />
            </div>
            <input type="submit" value="Envoyer" />
        </div>
    </form>
@endsection