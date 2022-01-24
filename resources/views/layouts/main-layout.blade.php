<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jumbotron.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}"> --}}
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('head')
    <title>Document</title>
</head>
<body>
    @include('components.header')
    @include('components.jumbotronHomepage')
    <main>
    @yield('content')
    </main>
    @include('components.footer')

</body>
</html>