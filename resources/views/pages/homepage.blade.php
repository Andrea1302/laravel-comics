
@extends('layouts.main-layout')
@section('head')
<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
@endsection
@section('content')
    @include('components.mainHomePage')
@endsection