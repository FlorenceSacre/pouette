<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css"/>
@extends('style.style')

@section('content')
    <body class="index">
    <div id="container">
        <header>
            <div id="topbar">
                <!--<h1 id="logo-florence-sacré"><a href="index.html">Florence Sacré</a></h1>-->
                <form action="{{route('video.search')}}" role="search">
                    {{ csrf_field() }}
                    <input type="text" name="q" value="{{request()->q ?? ''}}" />
                    <button type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </form>
                <nav>
                    <ul>
                        <li><a href="{{URL('../login')}}">Connexion</a></li>
                    <!--<li><a href="{{URL('../register')}}">Inscription</a></li>-->
                        <li><a href="{{URL('../subscribe')}}">S'abonner</a></li>
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
            <div id="img-header">
                <h2>Vidéos</h2>
            </div><!-- end img-header -->
        </header>
        <div id="content">
            <nav class="categorie">
                <ul>
                    <li><a href="{{URL('paysage')}}">Voyage</a></li>
                    <li><a href="{{URL('animaux')}}">Animaux</a></li>
                    <li><a href="{{URL('urbex')}}">Urbex</a></li>
                    <li><a href="{{URL('hiver')}}">Hiver</a></li>
                </ul>
            </nav>
            <section>
                @if(!Auth::user())
                    <?php
                    $videos = DB::table('video')->where('titre', 'LIKE', '%' . $q . '%')->get(); ?>
                    @foreach ($videos as $video)
                        <a href='{{route('video',['id'=>$video->id])}}'><img src="{{asset($video->image)}}" width="300px" /></a>
                    @endforeach
                @endif
            </section>
        </div><!-- end content -->
    </div><!-- end container -->
    </body>
@endsection