@extends('layouts.layout')

@section('title')
    Page 2
@endsection

@section('main')
    <h1>Page 2</h1>
    <a href="{{ route('page1') }}">To Page 1</a>
@endsection
