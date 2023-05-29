@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="myRow mt-5">
            <div class="col-6 p-4">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="w-100 h-100">
            </div>

            <div class="col-6 text-white position-relative p-4">
                <h1>{{ $comic['title'] }}</h1>
                <p>{{ $comic['description'] }}</p>

                <h6>
                    Prezzo: <strong>{{ $comic['price'] }}</strong>
                </h6>
                <h6>
                    Serie: <strong>{{ $comic['series'] }}</strong>
                </h6>

                <div class="mt-5">
                    <span class="text-uppercase">
                        <strong>{{ $comic['type'] }}</strong>
                    </span>
                </div>

                <div class="position-absolute bottom-0">
                    <button class="btn btn-primary"><a href="{{ route('home') }}"
                            class="text-decoration-none text-white">Torna
                            alla
                            lista</a></button>
                </div>
            </div>
        </div>

    </div>
@endsection
