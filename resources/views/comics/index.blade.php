@extends('layouts.app')

@section('title')
    DC Comics
@endsection

@section('content')
    @include('partials.jumbotron')

    @if (session()->has('message'))
        <div class="bg-success p-3 m-2 text-white text-center text-uppercase">
            {{ session()->get('message') }}
        </div>
    @endif




    <div class="container d-flex justify-content-center">
        @include('partials.main')
    </div>

    @include('partials.mainNav')
@endsection
