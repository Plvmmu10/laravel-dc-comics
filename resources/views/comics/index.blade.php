@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="d-flex justify-content-center">
            <button class="btn btn-success"><a href="{{ route('comics.create') }}" class="text-decoration-none text-white">Crea
                    il tuo
                    fumetto!</a></button>
        </div>
        <div class="row mt-5">
            @foreach ($comics as $comic)
                <div class="col-4 p-2 ">
                    <div class="card border-0">
                        <div class="card-header border-0">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="img-fluid w-100 h-100">
                        </div>

                        <div class="card-body position-relative">
                            <h4>{{ $comic['title'] }}</h4>
                            <div class="position-absolute bottom-0">
                                <button class="btn btn-primary"><a href="{{ route('comics.show', $comic->id) }}"
                                        class="text-decoration-none text-white">Info</a></button>
                                <button class="btn btn-warning"><a href="{{ route('comics.edit', $comic->id) }}"
                                        class="text-decoration-none text-white">Modifica</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </div>
@endsection
