@extends('layouts.layout')

@section('main')
    <h1>{{ $responseFeedback }}</h1>
    <a href="{{ route('form') }}">Go Back!</a>
@endsection
