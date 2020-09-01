<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css"/>
@extends('style.style')

@section('content')
    <body class="search">
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
            <div class="image-header img-search"></div>
        </header>
        <div id="content">
            <nav class="navcategorie">
                <ul>
                    <li><a href="{{URL('paysage')}}">Paysage</a></li>
                    <li><a href="{{URL('animaux')}}">Animaux</a></li>
                    <li><a href="{{URL('hiver')}}">Hiver</a></li>
                </ul>
            </nav>

                     @if(request()->input('q'))
                         <?php
                         $videos = DB::table('video')->where('titre', 'LIKE', '%' . $q . '%')->get(); ?>
                         <h3 id="result-search">{{$videos->count()}} résultat(s) pour la recherche "{{request()->q}}"</h3>
                         @foreach ($videos as $video)
                                 <section id="galerie-search">
                             <a href='{{route('video',['id'=>$video->id])}}'><img src="{{asset($video->image)}}" width="320px" class="search-img" /></a>
                             <h6 id="search-cat">{{$video->categorie}}</h6>
                             <h3 id="search-titre">{{$video->titre}}</h3>
                                 </section>
                         @endforeach
                     @endif

        </div><!-- end content -->
    </div><!-- end container -->
    </body>
@endsection