<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Quidpixels')</title>
    <!-- Include any common CSS files or CDN links here -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="manifest" href="img/favicons/site.webmanifest">
    <meta name="msapplication-TileColor" content="#0050f5">
    <meta name="theme-color" content="#0050f5">
</head>
<body style="background-image: url('{{ asset('img/download.png') }}');" class="bg-lightPink">
    <!-- Main Content Area -->
    <div class="container-fluid">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <!-- Your footer content goes here -->
    </footer>

    <!-- Include any common JavaScript files or CDN links here -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>