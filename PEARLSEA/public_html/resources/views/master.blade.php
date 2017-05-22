<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <meta id="token" name="token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{asset('/images/favicon.ico') }}">
    <title>PEARL SEA HOTEL</title>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Playfair+Display:400,400italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/cs-select.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/freepik.hotels.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/nivo-lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/nivo-lightbox-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset('/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('/js/respond.min.js') }}"></script>
    <![endif]-->
    <script src="{{ asset('/js/modernizr.custom.min.js') }}"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
</head>
<body>
<div class="preloader"></div>
@include('header_section')
@include('hotline_section')
@yield('content_section')
@include('footer_section')



<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/js/jssor.slider.mini.js') }}"></script>
<script src="{{ asset('/js/classie.js') }}"></script>
<script src="{{ asset('/js/selectFx.js') }}"></script>
<script src="{{ asset('/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('/js/starrr.min.js') }}"></script>
<script src="{{ asset('/js/nivo-lightbox.min.js') }}"></script>
<script src="{{ asset('/js/jquery.shuffle.min.js') }}"></script>
{{--<script src="http://maps.google.com/maps/api/js?sensor=true') }}"></script>--}}
{{--<script src="{{ asset('/js/gmaps.min.js') }}"></script>--}}
<script src="{{ asset('/js/jquery.parallax-1.1.3.js') }}"></script>
<script src="{{ asset('/js/script.js') }}"></script>
<script src="{{ asset('/js/validate.js') }}"></script>
<script src="{{ asset('/js/jquery-dateFormat.min.js') }}"></script>
<script src="{{ asset('/js/utils.js') }}"></script>
</body>

</html>