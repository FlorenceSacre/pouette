<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css"/>
@extends('style.style')

@section('content')
    <body class="index">
    <div id="container">
        <div id="content">
            <p>Votre abonnement est complet</p>
            <a href="{{route('home')}}"><button type="button">Retour à la page home</button></a>
        </div><!-- end content -->
    </div><!-- end container -->
    </body>
@endsection