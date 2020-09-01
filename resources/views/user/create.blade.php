@extends('style.template')

@section('content')
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">Création d'un utilisateur</div>
            <div class="panel-body">
                <div class="col-sm-12">
                    {!! Form::open(['url' => 'user.store', 'method' => 'post', 'class' => 'form-horizontal panel']) !!}
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
                        <div class="radio">
                            <label>
                                {!! Form::radio('pays', 1, true) !!} Allemagne<br />
                                {!! Form::radio('pays', 2, false) !!} Autriche<br />
                                {!! Form::radio('pays', 3, false) !!} Belgique<br />
                                {!! Form::radio('pays', 4, false) !!} Croatie<br />
                                {!! Form::radio('pays', 5, false) !!} Espagne<br />
                                {!! Form::radio('pays', 6, false) !!} Finlande<br />
                                {!! Form::radio('pays', 7, false) !!} Grèce<br />
                                {!! Form::radio('pays', 8, false) !!} Irlande<br />
                                {!! Form::radio('pays', 9, false) !!} Italie<br />
                                {!! Form::radio('pays', 10, false) !!} Portugal
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
                    <label>Role</label>
                    <div class="form-group">
                        <div class="radio">
                            <label>
                                {!! Form::radio('role', 1, true) !!} Subscriber<br />
                                {!! Form::radio('role', 2, false) !!} Subunlimited
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