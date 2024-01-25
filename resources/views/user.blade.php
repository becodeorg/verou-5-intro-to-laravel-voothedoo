@extends('layouts.layout')

@section('main')
    <h1>User Name: {{ $user->name }}</h1>
    <h2>User Age: {{ $user->age }}</h2>
@endsection
