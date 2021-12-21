@extends('app')

@section('title',)


@section('content')
    <img src="{{ asset('/images/dreapeaufrancais.png') }}" alt="French Flag" class="md-12 rounded shadow-md h-32">

    <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-blue-700">Hello from Strasbourg!</h1>

    <p class="text-lg text-gray-800">It's currently {{ date('h:i A') }} .</p>

@endsection
