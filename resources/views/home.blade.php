@extends('home.master')

@section('content')
    <div class="container">
        <img src="{{ asset('assets/one-movies/images/pic2.jpg') }}" class="img-thumbnail rounded-circle">
        <h2 class="display-4">Selamat Datang :{{ Auth::user()->name }}</h2>
    </div>
@endsection
