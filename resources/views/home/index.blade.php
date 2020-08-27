<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css"/>
@extends('style.style')

@section('content')
    <body class="home">
        <div id="container">
            <header>
                        <div id="topbar">
                            <a href="{{URL('home')}}"><img src="{{asset('images/logo.png')}}" width="80px" /></a>
                        <form action="{{route('video.search')}}" role="search" class="form-search">
                            {{ csrf_field() }}
                            <input type="text" name="q" />
                            <button type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    <nav>
                        <ul>
                            <li><a href="{{URL('../subscribe')}}">S'abonner</a></li>
                            <li><a href="{{URL('../login')}}">Connexion</a></li>
                            @if(Auth::user())
                                <li><a href="{{route('logout')}}">@php $user = Auth::user()->name;
                                echo $user; @endphp</a></li>
                            @else
                                <li><a>@php echo 'Visiteur'; @endphp</a></li>
                            @endif
                        </ul>
                    </nav>
                    </div>
                    <h3>Découvrez une collection de vidéos uniques et enrichissantes</h3>
            </header>
            <div id="content">
                <nav class="categorie">
                    <ul>
                        <li><a href="{{URL('paysage')}}">Paysage</a></li>
                        <li><a href="{{URL('animaux')}}">Animaux</a></li>
                        <li><a href="{{URL('hiver')}}">Hiver</a></li>
                    </ul>
                </nav>
                <section id="galerie">
                    <?php
                        $videos = DB::table('video')->selectRaw('min(id) as id,image')->groupBy('image')->get(); ?>
                        @foreach ($videos as $video)
                            <a href="{{route('video',['id'=>$video->id])}}"><img src="{{asset($video->image)}}" width="320px" /></a>
                        @endforeach
                </section>
            </div><!-- end content -->
        </div><!-- end container -->
    </body>
@endsection