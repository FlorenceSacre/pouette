<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css"/>
@extends('style.style')

@section('content')
    <body class="video">
        <div class="container">
            <header>
                <div id="topbar">
                    <h1 id="logo-florence-sacré"><a href="{{URL('home')}}">e-play</a></h1>
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
                        <figure>
                            <img src="{{asset($v->image)}}" width="600px" />
                            <figcaption>Pour voir ce contenu, abonnez-vous</figcaption>
                            <a href="{{URL('../subscribe')}}"><button type="button">Abonnez-vous</button></a>
                        </figure>
                        <h3>{{$v->titre}}</h3>
                        <h3>{{$v->categorie}}</h3>
                        <a href="#">Retour à la page précédente</a>
                    @endif

                    @can('isSubscriber')
                        <video controls width="800">
                            <source src="{{asset($v->videoBQ)}}" type="video/mp4">
                        </video>
                        <h3>{{$v->titre}}</h3>
                        <h3>{{$v->categorie}}</h3>
                        <br /><br /><br /><br /><br />
                        <h3>Vous aimerez aussi</h3>
                        <?php
                        $videos = DB::table('video')->get(); ?>
                        @foreach ($videos as $video)
                            <video controls width="300">
                                <source src="{{asset($video->videoBQ)}}" type="video/mp4">
                            </video>
                        @endforeach
                        <br /><br /><a href="#">Retour à la page précédente</a>
                    @endcan

                    @can('isSubscriberUnlimited')
                        <video controls width="800">
                            <source src="{{asset($v->videoHQ)}}" type="video/mp4">
                        </video>
                        <h3>{{$v->titre}}</h3>
                        <h3>{{$v->categorie}}</h3>
                        <br /><br /><br /><br /><br />
                        <h3>Vous aimerez aussi</h3>
                        <?php
                        $videos = DB::table('video')->get(); ?>
                        @foreach ($videos as $video)
                            <video controls width="300">
                                <source src="{{asset($video->videoHQ)}}" type="video/mp4">
                            </video>
                        @endforeach

                        <br /><br /><a href="#">Retour à la page précédente</a>
                    @endcan
                </section>
            </div><!-- end content -->
        </div><!-- end container -->
    </body>
@endsection