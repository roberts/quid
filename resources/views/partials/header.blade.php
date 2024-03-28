<header class="relative flex items-center justify-between px-6 py-4">
    <!-- Circled Image (Top Left) -->
    <a href="{{route('home')}}" class="fixed top-4 left-4 z-50">
        <img src="{{ asset('img/image.png') }}" alt="Logo" class="w-16 h-16 rounded-full border-4 border-white">
    </a>

    <!-- Logo (Central) -->
    <a href="{{route('home')}}" class="fixed top-1 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50">
        @include('partials.logo')
    </a>

    <!-- Menu (Top Right) -->
    <div>
        @include('partials.side-menu')
    </div>
</header>