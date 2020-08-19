@extends('style.template')

@section('content')
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">Création d'un utilisateur</div>
            <div class="panel-body">
                <div class="col-sm-12">
                    {!! Form::open(['route' => 'user.store', 'class' => 'form-horizontal panel']) !!}
                    <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('street') ? 'has-error' : '' !!}">
                        {!! Form::text('street', null, ['class' => 'form-control', 'placeholder' => 'Adresse']) !!}
                        {!! $errors->first('street', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('postcode') ? 'has-error' : '' !!}">
                        {!! Form::text('postcode', null, ['class' => 'form-control', 'placeholder' => 'Code postal']) !!}
                        {!! $errors->first('postcode', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('city') ? 'has-error' : '' !!}">
                        {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Ville']) !!}
                        {!! $errors->first('city', '<small class="help-block">:message</small>') !!}
                    </div>
                    <label>Pays</label>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                {!! Form::checkbox('belgique', 1, null) !!} Belgique<br />
                                {!! Form::checkbox('italie', 2, null) !!} Italie<br />
                                {!! Form::checkbox('espagne', 3, null) !!} Espagne<br />
                                {!! Form::checkbox('portugal', 4, null) !!} Portugal
                            </label>
                        </div>
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
                                {!! Form::checkbox('subscriber', 1, null) !!} Subscriber<br />
                                {!! Form::checkbox('subunlimited', 2, null) !!} Subunlimited
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