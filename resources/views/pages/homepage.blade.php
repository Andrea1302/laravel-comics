
@extends('layouts.main-layout')
@section('head')
    <link rel="stylesheet" href="{{asset('css/mainHomepage.css')}}">
    <link rel="stylesheet" href="{{asset('css/topFooterHomepage.css')}}">


    {{-- <script src="{{ asset('js/footerHomepage.js') }}"></script> --}}


@endsection
@section('content')
    @include('components.mainHomePage')
@endsection