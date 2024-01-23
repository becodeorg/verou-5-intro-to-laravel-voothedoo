@extends('layouts.layout')

@section('main')
    <form action="">
        <label for="name">Enter Your Name</label>
        <input type="text" name="name" id="name">
        <label for="age">Enter your Age</label>
        <input type="number" name="age" id="age">
        <button type="submit">Submit</button>
    </form>
@endsection
