@extends('layouts.app')

@section('title')
    Crea il tuo fumetto
@endsection

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="w-50 text-white mt-5">
            <h1>Crea il tuo personalissimo fumetto!</h1>
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                {{-- Title --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title">
                    <div id="title" class="form-text">Inserisci il nome del tuo fumetto</div>
                </div>

                {{-- Description --}}
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <input type="textarea" class="form-control" id="description" name="description">
                    <div id="description" class="form-text">Inserisci la descrizione</div>
                </div>

                {{-- Image --}}
                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                    <div id="thumb" class="form-text">Inserisci l'url dell'immagine</div>
                </div>

                {{-- Price --}}
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price">
                    <div id="price" class="form-text">Inserisci qui il prezzo del fumetto</div>
                </div>

                {{-- Series --}}
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series">
                    <div id="series" class="form-text">Inserisci la serie del fumetto</div>
                </div>

                {{-- Type --}}
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="type" name="type">
                    <div id="type" class="form-text">Inserisci il tipo di fumetto</div>
                </div>

                {{-- Sell Date --}}
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di Vendita</label>
                    <input type="text" class="form-control" id="type" name="sale_date">
                    <div id="type" class="form-text">Inserisci la data di vendita YYYY-MM-DD</div>
                </div>

                <button type="submit" class="btn btn-primary">Crea</button>

            </form>
        </div>

    </div>
@endsection
