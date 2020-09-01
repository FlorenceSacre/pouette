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
                        <input type="text" class="input-text" name="q" value="{{request()->q ?? ''}}" />
                        <input type="image" src="{{asset("/images/search.png")}}" class="search-input" />
                    </form>
                    <nav>
                        <ul>
                            <li><a href="{{URL('../subscribe')}}">S'abonner</a></li>
                            @if(Auth::user())
                                <li class="nav-logout">
                                    <a onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            @else
                                <li><a href="{{URL('../login')}}">Connexion</a></li>
                            @endif
                            @if(Auth::user())
                                <li class="nav-name">@php $user = Auth::user()->name;
                                echo $user; @endphp</li>
                            @else
                                <li class="nav-name">@php echo 'Visiteur'; @endphp</li>
                            @endif
                        </ul>
                    </nav>
                </div>
                <div class="image-header img-home">
                    <h3 id="slogan">Découvrez une collection de vidéos uniques et enrichissantes</h3>
                </div>
            </header>
            <div id="content">
                <nav class="navcategorie">
                    <ul>
                        <li><a href="{{URL('paysage')}}">Paysage</a></li>
                        <li><a href="{{URL('animaux')}}">Animaux</a></li>
                        <li><a href="{{URL('hiver')}}">Hiver</a></li>
                    </ul>
                </nav>
                <section id="galerie">
                    @if(!Auth::user())
                        <?php
                        $videos = DB::table('video')->selectRaw('min(id) as id,image')->groupBy('image')->get(); ?>
                        @foreach ($videos as $video)
                            <a href="{{route('video',['id'=>$video->id])}}"><img src="{{asset($video->image)}}" width="320px" /></a>
                        @endforeach
                    @endif
                    @can('isSubscriber')
                        <?php
                        $videos = DB::table('video')->selectRaw('min(id) as id,image')->groupBy('image')->take(18)->get(); ?>
                        @foreach ($videos as $video)
                            <a href="{{route('video',['id'=>$video->id])}}"><img src="{{asset($video->image)}}" width="320px" /></a>
                        @endforeach
                    @endcan

                    @can('isSubscriberUnlimited')
                         <?php
                         $videos = DB::table('video')->selectRaw('min(id) as id,image')->groupBy('image')->get(); ?>
                         @foreach ($videos as $video)
                             <a href="{{route('video',['id'=>$video->id])}}"><img src="{{asset($video->image)}}" width="320px" /></a>
                         @endforeach
                    @endcan
                </section>
            </div><!-- end content -->
        </div><!-- end container -->
    </body>
@endsection