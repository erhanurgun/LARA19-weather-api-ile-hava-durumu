<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="{{ __('app.author') }}">
    <meta name="description"
          content="{{ $desc ?? __('app.description') }}">
    <title>{{ $title ?? config('app.name') }} | {{ __('app.title') }}</title>
    <link rel="shortcut icon" href="{{ asset(config('app.assets')) }}/img/favicon.ico" type="image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <!-- Styles -->
    {{--<link rel="stylesheet" href="{{ asset(config('app.assets')) }}/assets/css/app.css">--}}
    @stack('styles')
</head>
<body class="antialiased">

<main class="container">
    @yield('content')
</main>

@stack('scripts')
</body>
</html>
