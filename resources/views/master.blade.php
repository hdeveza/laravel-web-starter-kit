<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>


    <!-- Fallback to homescreen for Chrome <39 on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="">
    <link rel="icon" sizes="192x192" href="#">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="">
    <link rel="apple-touch-icon" href="#">



    <!-- 
    <meta name="theme-color" content="#3372DF">
    SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->


    <!-- Page styles -->

    <link rel="stylesheet" href="{{{ asset('/css/main.css') }}}">


    <!-- Carousel -->
    <link rel="stylesheet" href="{{{ asset('/css/carousel.css') }}}">



  </head>
  <body>
    <header class="app-bar promote-layer">
      <div class="app-bar-container">
        <button class="menu"><img src="{{{ asset('img/hamburger.svg') }}}" alt="Menu"></button>
        <h1 class="logo">
                <!-- 
                <img src="images/maxx-logo-marca.png" alt="">
                 -->
        </h1>
        <section class="app-bar-actions">
        <!-- Put App Bar Buttons Here -->
        <!-- e.g <button><i class="icon icon-star"></i></button> -->
        </section>
      </div>
    </header>

    <nav class="navdrawer-container promote-layer">
      <h4>Navegação</h4>
      <ul>
        <li><a href="{{ url('/') }}">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
        <li><a href="#">Link 4</a></li>
        <li><a href="#">Link 5</a></li>
      </ul>
    </nav>


<main>

<!--
|--------------------------------------------------------------------------
|22/04/2015
|--------------------------------------------------------------------------
|
| Content page
| 
| 
|
-->

@yield('content')

</main>


<footer class="app-bar">
 
<div class="container-e g--centered"><!-- centraliza -->  
<div class="g--third">
  <h5 class="centered">Links úteis</h5>
  <nav>
    <ul>
      <li><a href="{{ url('/') }}">Link</a></li>
      <li><a href="{{ url('/') }}">Link</a></li>
      <li><a href="{{ url('/') }}">Link</a></li>
      <li><a href="{{ url('/') }}">Link</a></li>
      <li><a href="{{ url('/') }}">Link</a></li>
    </ul>
  </nav>
</div>

<div class="g--third centered">

    <h5 class="">Localização</h5>
      <span class="small street-address">Av. Maracanã, Nº 81 - </span>
      <span class="small region">Rio de Janeiro - RJ </span>
      <span class="small postal-code">20271-110</span> 
      <span class="geo">
      <span class="latitude">
      <span class="value-title" title="-22.910964"></span></span>
      <span class="longitude">
      <span class="value-title" title="-43.221872"></span>

</div>

<div class="g--third g--last">
    <h5 class="centered">Blog</h5>
    <nav>
    <ul class="">
      <li><a href="{{ url('/') }}">Link</a></li>
      <li><a href="{{ url('/') }}">Link</a></li>
      <li><a href="{{ url('/') }}">Link</a></li>
      <li><a href="{{ url('/') }}">Link</a></li>
      <li><a href="{{ url('/') }}">Link</a></li>
    </ul>
  </nav>
</div>

</div>  
</footer>

    <!-- customizado -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
    <!-- build:js scripts/main.min.js -->
    <script src="{{{ asset('js/main.js') }}}"></script>
    

    <!-- endbuild -->

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-XXXXX-X', 'auto');
      ga('send', 'pageview');
    </script>
    <!-- Built with love using Web Starter Kit -->
  </body>
</html>
