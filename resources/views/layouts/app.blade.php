<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-body h-screen antialiased leading-none">
    <div id="app">
        <navbar :auth="{{ (Auth::check()) ? 'true' : 'false' }}" token="{{ csrf_token() }}"></navbar>
        <main role="main">
            @yield('content')
        </main>
        <footerr></footerr>
    </div>
</body>
</html>
