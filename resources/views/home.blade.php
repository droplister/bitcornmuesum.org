@extends('layouts.app')

@section('title', 'Bitcorn Museum')

@section('header')
    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">About</h4>
                        <p class="text-muted">The Bitcorn Museum website is a digital gallery experience of the avant-corne art permanently on display at this address: <a href="https://bitcorns.com/farms/1BitcornCropsMuseumAddressy149ZDr" class="text-white" target="_blank">1BitcornCropsMuseumAddressy149ZDr</a>.</p>
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
                <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
                    <i class="fa fa-university mr-2"></i>
                    <strong>Bitcorn Museum</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Avant-corne</h1>
            <p class="lead text-muted">Rare, certified, bitcorn.</p>
        </div>
    </section>
    <div class="container mb-5">
        <div class="row">
            @foreach($chunk as $cards)
            <div class="col">
                <ul>
                    @foreach($cards as $card)
                    <li><a href="{{ route('card', ['card' => $card['name']]) }}">{{ $card['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>
@endsection
