<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css"/>
@extends('style.style')

@section('content')
    <body class="video">
        <div class="container">
            <header>
                <div id="topbar">
                    <a href="{{URL('home')}}"><img src="{{asset('images/logo.png')}}" width="80px" /></a>
                    <nav>
                        <ul>
                            <li><a href="{{URL('../subscribe')}}">S'abonner</a></li>
                            <li><a href="{{URL('../login')}}">Connexion</a></li>
                            @if(Auth::user())
                                {{--<li><a href="{{route('logout')}}">@php $user = Auth::user()->name;--}}
                                {{--echo $user; @endphp</a></li>--}}
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @else
                                <li><a>@php echo 'Visiteur'; @endphp</a></li>
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
                        <br /><br /><a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>"><button type="button" class="previous prev-video-sub">Retour à la page précédente</button></a>
                    @endcan

                    @can('isSubscriberUnlimited')
                        <video controls width="800">
                            <source src="{{asset($v->videoHQ)}}" type="video/mp4">
                        </video>
                        <h6 id="catvideo">{{$v->categorie}}</h6>
                        <h2 id="titrevideo">{{$v->titre}}</h2>
                        <h2>Commentaires</h2>
                        <form action="{{ action('VideoController@storeCom',['id'=>$v->id])}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <label for="com">Commentaires</label>
                            <input type="text" name="com" />
                            <input type="submit" value="Envoyer" />
                        </form>

                        @foreach($comvideos as $comvideo)
                            <h3 id="namecom">{{$comvideo->name}}</h3>
                            <h3 id="commentaire">{{$comvideo->comment}}</h3>
                        @endforeach
                        <h3>Vous aimerez aussi</h3>
                        <?php
                        $videos = DB::table('video')->get(); ?>
                        @foreach ($videos as $video)
                            <video controls width="300">
                                <source src="{{asset($video->videoHQ)}}" type="video/mp4">
                            </video>
                        @endforeach

                        <br /><br /><a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">Retour à la page précédente</a>
                    @endcan
                </section>
            </div><!-- end content -->
        </div><!-- end container -->
    </body>
@endsection