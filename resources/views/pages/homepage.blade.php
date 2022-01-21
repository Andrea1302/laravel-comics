
@extends('layouts.main-layout')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/headerHomepage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jumboHomepage.css')}}">
@endsection
@section('content')
    @include('components.mainHomePage')
@endsection