<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your Website')</title>
    <!-- Include any common CSS files or CDN links here -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-image: url('{{ asset('img/download.png') }}');">
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