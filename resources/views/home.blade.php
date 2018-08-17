@extends('layouts.app')

@section('title', 'Bitcorn Museum')

@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Avant-corne</h1>
            <p class="lead text-muted">Rare, certified, bitcorn.</p>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    @foreach($cards as $card)
                    <li><a href="{{ route('card', ['card' => $card['name']]) }}">{{ $card['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
