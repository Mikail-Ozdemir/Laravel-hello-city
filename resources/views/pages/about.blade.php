@extends('app')

@section('title', 'About Us | ' . config('app.name'))


@section('content')
    <img src="{{ asset('/images/drapeaualsacienpng.png') }}" alt="alsacien Flag">

    <p>Built with me and my brain.</p>

    <p><a href="{{ route('home') }}">Revenir à la page d'acceuil</a></p>
@endsection
