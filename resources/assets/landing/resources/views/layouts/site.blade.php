<?
  header('Content-Type: text/html; charset=utf-8');

//Включение всех ошибок и предупреждений
  ini_set('error_reporting', E_ALL);
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>{{ config('app.name') }}</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('assets/css/mdb.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link rel="icon" href="{{ asset('favicon.ico') }}">

  {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>--}}

  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <style>
    html,
    body,
    header,
    .jarallax {
      height: 100%;
    }

    /*@media (min-width: 560px) and (max-width: 767px) {*/
    @media (max-width: 767px) {
      html,
      body,
      header,
      .jarallax {
        height: 500px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #23242a!important;
      }
      .navbar {
        box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12) !important;
      }
    }
  </style>
</head>

<body class="construction-lp white">

<!-- Navigation & Intro -->
<header>
  {{--@if(session('status'))
  <div class="alert alert-success mt-5" role="alert">
    {{session('status')}}
  </div>
  @endif
  @include('admin.errors')--}}

  @yield('head')
</header>
<!-- Navigation & Intro -->

<!-- Main content -->
<main>
  @yield('content')
</main>
<!-- Main content -->

<!-- Footer -->
<footer class="page-footer footer-tiles text-center text-md-left pt-4 mt-4">
  @yield('footer')
</footer>
<!-- Footer -->

<!--  SCRIPTS  -->
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/js/mdb.min.js') }}"></script>
{{--<script src="{{ asset('assets/js/my_jquery.js') }}"></script>--}}

<script>
  //Animation init
  new WOW().init();

  //Modal
  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
  })

  // Material Select Initialization
  $(document).ready(function() {
    $('.mdb-select').material_select();
  });

  // MDB Lightbox Init
  $(function () {
    $("#mdb-lightbox-ui").load("{{ asset('assets/mdb-addons/mdb-lightbox-ui.html') }}");
  });


</script>

</body>

</html>
