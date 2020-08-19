@extends('style.template')

@section('content')
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">Fiche d'utilisateur</div>
            <div class="panel-body">
                <p>Nom et prénom : {{ $user->name }}</p>
                <p>Adresse : {{ $user->street }}</p>
                <p>Code postal : {{ $user->postcode }}</p>
                <p>Ville : {{ $user->city }}</p>
                <p>Pays : {{ $user->country_id }}</p>
                <p>Email : {{ $user->email }}</p>
                <p>Role : {{ $user->role }}</p>
                @if($user->admin == 1)
                    Administrateur
                @endif
            </div>
        </div>
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>
    </div>
@endsection