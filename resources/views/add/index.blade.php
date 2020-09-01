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
                <input type="text" name="titre" value="{{old('titre')}}" placeholder="Titre" required />
            </div>
            <div>
                <fieldset>
                    <legend id="choixcategorie">Choisir la ou les catégories de la vidéo</legend>
                    <div>
                        <input type="checkbox" id="categorie" name="categorie[]" value="paysage" />
                        <label for="categorie" class="cat-paysage">Paysage</label>
                    </div>
                    <div>
                        <input type="checkbox" id="categorie" name="categorie[]" value="animaux" />
                        <label for="categorie" class="cat-animaux">Animaux</label>
                    </div>
                    <div>
                        <input type="checkbox" id="categorie" name="categorie[]" value="hiver" />
                        <label for="categorie" class="cat-hiver">Hiver</label>
                    </div>
                </fieldset>
            </div>
            <div>
                <label for="videoBQ" id="videoBQ">Ajouter une vidéo de basse qualité</label>
                <input type="file" name="videoBQ" required  />
            </div>
            <div>
                <label for="videoHQ" id="videoHQ">Ajouter une vidéo de haute qualité</label>
                <input type="file" name="videoHQ" required />
            </div>
            <div>
                <label for="image" id="image">Ajouter une image miniature</label>
                <input type="file" name="image" required />
            </div>
            <input type="submit" value="Envoyer" />
        </div>
    </form>
    <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>"><button type="button" class="previous prev-add">Retour à la page précédente</button></a>
@endsection