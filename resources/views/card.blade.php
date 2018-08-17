@extends('layouts.app')

@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            <div class="frame my-5">
                <img src="{{ asset('/gilded-frame.png') }}" class="img-responsive gilded" />
                <img src="{{ $card['card'] }}" class="img-responsive artwork" />
            </div>
            <h1 class="jumbotron-heading">{{ $card['name'] }}</h1>
            <p class="lead text-muted">{{ $card['burned'] }} of {{ $card['issued'] }}</p>
            <p>
                <a href="{{ route('home') }}" class="btn btn-secondary my-2">&laquo; Back</a>
                <a href="{{ $card['link'] }}" class="btn btn-primary my-2" target="_blank">More &raquo;</a>
            </p>
        </div>
    </section>
@endsection
