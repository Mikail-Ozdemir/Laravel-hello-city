@extends('app')

@section('title', 'About Us | ' . config('app.name'))


@section('content')
    <img src="{{ asset('/images/drapeaualsacienpng.png') }}" class="md-12 rounded shadow-md h-32" alt="alsacien Flag">

    <h2 class=" mb-5 text-gray-700">
        Built with me and my <span class="text-pink-500"> brain </span>.
    </h2>

    <p>
        <a href="{{ route('home') }}" class="text-indigo-500 hover:text-indigo-800 underline">
            Revenir à la page d'acceuil
        </a>
    </p>
@endsection
