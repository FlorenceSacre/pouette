@extends('style.template')

@section('content')
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">Modification d'un utilisateur</div>
            <div class="panel-body">
                <div class="col-sm-12">
                    {!! Form::model($user, ['route' => ['user', $user->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
                    <div class="form-group {!! $errors->has('username') ? 'has-error' : '' !!}">
                        {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Pseudo']) !!}
                        {!! $errors->first('username', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('lastname') ? 'has-error' : '' !!}">
                        {!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                        {!! $errors->first('lastname', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('firstname') ? 'has-error' : '' !!}">
                        {!! Form::text('firstname', null, ['class' => 'form-control', 'placeholder' => 'Prénom']) !!}
                        {!! $errors->first('firstname', '<small class="help-block">:message</small>') !!}
                    </div>
                    <label>Genre</label>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                {!! Form::checkbox('male', 1, null) !!} Homme<br />
                                {!! Form::checkbox('female', 2, null) !!} Femme
                            </label>
                        </div>
                    </div>
                    <label>Date d'anniversaire</label>
                    <div class="form-group {!! $errors->has('birthday') ? 'has-error' : '' !!}">
                        {!! Form::date('birthday', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('birthday', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                        {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Mot de passe']) !!}
                        {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirmation mot de passe']) !!}
                    </div>
                    <label>Role</label>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                {!! Form::checkbox('customer', 1, null) !!} Client<br />
                                {!! Form::checkbox('provider', 2, null) !!} Fournisseur<br />
                                {!! Form::checkbox('customer and provider', 3, null) !!} Client et fournisseur
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                {!! Form::checkbox('admin', 1, null) !!} Administrateur
                            </label>
                        </div>
                    </div>
                    {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>
    </div>
@endsection