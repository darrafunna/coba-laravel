@extends('layouts.main')
@section('container')
    <h1>About Developer</h1>
    <br>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200">
    <h3>{{ $name }}</h3>
    <p>Hi, it's nice to meet you! Thank you for visiting this website. Enjoy it! </p>
@endsection