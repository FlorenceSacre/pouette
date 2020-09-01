<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css"/>
@extends('style.style')

@section('content')
    <body class="video">
        <div id="container">
            <header>
                <div id="topbar">
                    <a href="{{URL('home')}}"><img src="{{asset('images/logo.png')}}" width="80px" /></a>
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
            </header>
            <div id="content">
                <section>
                    @if(!Auth::user())
                        <img class="img-preview" src="{{asset($v->image)}}" width="600px" />
                        <div id="fig">
                            <figure>
                                <figcaption><p>Pour voir ce contenu, abonnez-vous</p>
                                <a href="{{URL('../subscribe')}}"><button type="button" class="button-subscribe">Abonnez-vous</button></a></figcaption>
                            </figure>
                        </div>
                        <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>"><button type="button" class="previous prev-video">Retour à la page précédente</button></a>
                    @endif

                    @can('isSubscriber')
                        <video controls width="830" class="vid-subscriber">
                            <source src="{{asset($v->videoBQ)}}" type="video/mp4">
                        </video>
                        <h6 id="catvideo">{{$v->categorie}}</h6>
                        <h2 id="titrevideo">{{$v->titre}}</h2>
                        <h2 id="titrecom">Commentaires</h2>
                        <form action="{{ action('VideoController@storeCom',['id'=>$v->id])}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="text" name="com" placeholder="Ajouter un commentaire" />
                            <input type="submit" value="Ajouter" />
                        </form>
                        @foreach($comvideos as $comvideo)
                            <h3 id="namecom">{{$comvideo->name}}</h3>
                            <h3 id="commentaire">{{$comvideo->comment}}</h3>
                        @endforeach
                        <h2 id="titresouhait">Vous aimerez aussi</h2>
                        <section id="galerie">
                            <?php
                            $videos = DB::table('video')->where('categorie', $categ)->take(3)->get(); ?>
                            @foreach ($videos as $video)
                                <a href="{{route('video',['id'=>$video->id])}}"><img src="{{asset($video->image)}}" width="320px" /></a>
                            @endforeach
                        </section>
                        <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>"><button type="button" class="previous prev-video-sub">Retour à la page précédente</button></a>
                    @endcan

                    @can('isSubscriberUnlimited')
                        <video controls width="830" class="vid-subscriber">
                            <source src="{{asset($v->videoHQ)}}" type="video/mp4">
                        </video>
                        <h6 id="catvideo">{{$v->categorie}}</h6>
                        <h2 id="titrevideo">{{$v->titre}}</h2>
                        <h2 id="titrecom">Commentaires</h2>
                        <form action="{{ action('VideoController@storeCom',['id'=>$v->id])}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="text" name="com" />
                            <input type="submit" value="Envoyer" />
                        </form>
                        @foreach($comvideos as $comvideo)
                            <h3 id="namecom">{{$comvideo->name}}</h3>
                            <h3 id="commentaire">{{$comvideo->comment}}</h3>
                        @endforeach
                        <h2 id="titresouhait">Vous aimerez aussi</h2>
                        <section id="galerie">
                            <?php
                            $videos = DB::table('video')->where('categorie', $categ)->take(3)->get(); ?>
                            @foreach ($videos as $video)
                                <a href="{{route('video',['id'=>$video->id])}}"><img src="{{asset($video->image)}}" width="320px" /></a>
                            @endforeach
                        </section>
                        <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>"><button type="button" class="previous prev-video-sub">Retour à la page précédente</button></a>
                    @endcan
                </section>
            </div><!-- end content -->
        </div><!-- end container -->
    </body>
@endsection