<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="favicon.ico" sizes="600x600" type="image/png">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('inc.nav')
        <main class="container py-4">
            @include('inc.messages')
            @yield('content')
        </main>
        <footer class="footer mt-2">
          <p class="footer-text">Copyright &copy; 2018 {{config('app.name', 'FictionalCode')}} </p>
        </footer>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
    CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
