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

        <header>
            <div class="collapse bg-dark" id="navbarHeader">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 py-4">
                            <h4 class="text-white">About</h4>
                            <p class="text-muted">The Bitcorn Museum website is a digital gallery experience of the avant-corne art permanently on display at this blockchain address: 1BitcornCropsMuseumAddressy149ZDr.</p>
                        </div>
                        <div class="col-sm-4 offset-md-1 py-4">
                            <h4 class="text-white">Contact</h4>
                            <ul class="list-unstyled">
                                <li><a href="https://t.me/bitcorns" class="text-white" target="_blank">Telegram</a></li>
                                <li><a href="https://twitter.com/bitcorncrops" class="text-white" target="_blank">Twitter</a></li>
                                <li><a href="mailto:bitcorncrops@gmail.com" class="text-white">E-mail</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-dark bg-dark box-shadow">
                <div class="container d-flex justify-content-between">
                    <a href="#" class="navbar-brand d-flex align-items-center">
                        <i class="fa fa-university mr-1"></i>
                        <strong>Bitcorn Museum</strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Wikplayer https://www.wikplayer.com -->
    <script type="text/javascript" src="https://www.wikplayer.com/code.js" 
    data-config="{'skin':'skins/wikfull/plainBlack/skin.css','volume':50,'autoplay':true,'shuffle':true,'repeat':1,'showcomment':false,'marqueetexton':false,'placement':'bottom','showplaylist':false,'playlist':[{'title':'Piano%20Sonata%20No.%2011','url':'https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DoszouIHmDqc'},{'title':'Requiem%20in%20D%20Minor','url':'https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DE6SWlwN4opk'},{'title':'The%20Marriage%20of%20Figaro','url':'https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DKfEQuj7tbKE'},{'title':'Peque%C3%B1a%20Serenata%20Nocturna','url':'https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3Dw_Us01bkQgo'},{'title':'Serenade%20No.%206','url':'https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DuVVu-g8AybA'},{'title':'Laudate%20Dominum','url':'https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DCp5-4jyp_JM'}]}" ></script>
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