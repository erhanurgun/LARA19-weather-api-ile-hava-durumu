<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="{{ __('@erhanurgun, Erhan ÜRGÜN') }}">
    <meta name="description"
          content="{{ $desc ?? __('Laravel 10.x ve Weather API ile geliştirilen bir hava durumu projesi...') }}">
    <title>{{ $title ?? config('app.name') }} | {{ __('Hava Durumu') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <!-- Styles -->
    {{--<link rel="stylesheet" href="{{ asset('') }}/assets/css/app.css">--}}
    @stack('styles')
</head>
<body class="antialiased">

<main class="container">
    @yield('content')
</main>

@stack('scripts')
</body>
</html>
