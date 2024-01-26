@extends('layouts.layout')

@section('title')
    Hello, {{ $user->name }}!
@endsection

@section('main')
    <h1>User Name: {{ $user->name }}</h1>
    <h2>User Age: {{ $user->age }}</h2>
    <form action="{{ route('destroyUser', ['id' => $user->id]) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Delete User</button>
    </form>
@endsection
