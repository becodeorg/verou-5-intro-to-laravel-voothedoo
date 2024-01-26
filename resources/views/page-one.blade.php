@extends('layouts.layout')

@section('title')
    Page 1
@endsection

@section('main')
    <h1>Page 1</h1>
    <a href="{{ route('page2') }}">To Page 2</a>
@endsection
