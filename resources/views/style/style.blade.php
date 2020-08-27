<!doctype html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="author" content="Florence Sacré" />
    <meta name="copyright" content="©2020 Florence Sacré" />
    <meta name="description" content="Travail de fin d'étude de Florence Sacré" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="TFE, EICVN, Design, Développement, Web, Florence Sacré, ecommerce, vidéo" />
    <title>Video | Florence Sacré</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">


    <!-- Grille -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/hugrid.css')}}" />
    <script type="text/javascript" src="{{asset('javascript/jquery-1.6.2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('javascript/hugrid.js')}}"></script>
    <script type="text/javascript">
    definegrid = function() {
    var browserWidth = $(window).width();
    if (browserWidth >= 1080)
    {
    pageUnits = 'px';
    colUnits = 'px';
    pagewidth = 1010;
    columns = 9;
    columnwidth = 90;
    gutterwidth = 25;
    pagetopmargin = 0;
    rowheight = 25;
    gridonload = 'off';
    makehugrid();
    }
    if (browserWidth <= 768)
    {
    pageUnits = 'px';
    colUnits = 'px';
    pagewidth = 605;
    columns = 6;
    columnwidth = 80;
    gutterwidth = 25;
    pagetopmargin = 0;
    rowheight = 25;
    gridonload = 'off';
    makehugrid();
    }
    if (browserWidth <= 400)
    {
    pageUnits = 'px';
    colUnits = 'px';
    pagewidth = 319;
    columns = 2;
    columnwidth = 147;
    gutterwidth = 25;
    pagetopmargin = 0;
    rowheight = 25;
    gridonload = 'off';
    makehugrid();
    }
    };
    $(document).ready(function() {
    definegrid();
    setgridonload();
    });
    $(window).resize(function() {
    definegrid();
    setgridonresize();
    });
    </script>
</head>
<body>
{{--@if(!empty($errors))--}}
{{--@if($errors->any())--}}
{{--<ul class="alert alert-danger" style="list-style-type: none">--}}
{{--@foreach($errors->all() as $error)--}}
{{--<li>{!! $error !!}</li>--}}
{{--@endforeach--}}
{{--</ul>--}}
{{--@endif--}}
{{--@endif--}}
@yield('content')
@if(request()->input('q'))
    <h4>{{$videos->count()}} résultat(s) pour la recherche "{{request()->q}}"</h4>
@endif
</body>
</html>