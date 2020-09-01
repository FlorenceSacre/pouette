<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css"/>
@extends('style.style')

@section('content')
    <body class="subscriptionOk">
    <div id="container">
        <div id="content">
            <p class="abonnement-complet">Votre abonnement est complet</p>
            <a href="{{route('login')}}"><button type="button" class="previous">Vous pouvez vous connecter</button></a>
        </div><!-- end content -->
    </div><!-- end container -->
    </body>
@endsection