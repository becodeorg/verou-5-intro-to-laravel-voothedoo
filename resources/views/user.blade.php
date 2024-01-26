@extends('layouts.layout')

@section('title')
    Hello, {{ $user->name }}!
@endsection

@section('main')
    <h1>User Name: {{ $user->name }}</h1>
    <h2>User Age: {{ $user->age }}</h2>
@endsection
