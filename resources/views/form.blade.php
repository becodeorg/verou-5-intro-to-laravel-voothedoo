@extends('layouts.layout')

@section('title')
    Form
@endsection

@section('main')
    <form action="{{ route('submitForm') }}" method="POST">
        @csrf
        <label for="name">Enter Your Name</label>
        <input type="text" name="name" id="name">
        <label for="age">Enter your Age</label>
        <input type="number" name="age" id="age">
        <button type="submit">Submit</button>
    </form>
@endsection
