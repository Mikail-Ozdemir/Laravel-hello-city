@extends('app')

@section('title',)


@section('content')
    <img src="{{ asset('/images/dreapeaufrancais.png') }}" alt="French Flag">

    <h1>Hello from Strasbourg!</h1>

    <p>It's currently {{ date('h:i A') }} .</p>

@endsection
