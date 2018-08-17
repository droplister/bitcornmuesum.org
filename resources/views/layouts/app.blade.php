<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="d-none d-md-block">
            @yield('header')

            <main class="py-4">
                @yield('content')
            </main>
        </div>
        <div class="d-block d-md-none">
            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">Desktop Only</h1>
                    <p class="lead text-muted">Our Apologies</p>
                </div>
            </section>
        </div>
    </div>    
    <script>
        // Existing code unchanged.
        window.onload = function() {
          var context = new AudioContext();
          // Setup all nodes
          ...
        }

        // One-liner to resume playback when user interacted with the page.
        document.querySelector('button').addEventListener('click', function() {
          context.resume().then(() => {
            console.log('Playback resumed successfully');
          });
        });
    </script>
    <!-- Wikplayer https://www.wikplayer.com -->
    <script type="text/javascript" src="https://www.wikplayer.com/code.js" 
    data-config="{'skin':'skins/wikfull/plainBlack/skin.css','volume':50,'autoplay':true,'shuffle':true,'repeat':1,'showcomment':false,'marqueetexton':false,'placement':'bottom','showplaylist':false,'playlist':[{'title':'Classical%20Music','url':'https%3A%2F%2Fbitcornmuseum.org%2Fstorage%2Fmusic.mp3'}]}"></script>
    <!-- Wikplayer code end -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112477384-10"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-112477384-10');
    </script>
</body>
</html>