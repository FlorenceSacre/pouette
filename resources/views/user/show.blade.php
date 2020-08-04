@extends('style.template')

@section('content')
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">Fiche d'utilisateur</div>
            <div class="panel-body">
                <p>Pseudo : {{ $user->username }}</p>
                <p>Nom : {{ $user->lastname }}</p>
                <p>Prénom : {{ $user->firstname }}</p>
                <p>Date d'anniversaire : {{ $user->birthday }}</p>
                <p>Code postal : {{ $user->postal_code }}</p>
                <p>Ville : {{ $user->city }}</p>
                <p>Pays : {{ $user->country }}</p>
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