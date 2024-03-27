<header class="relative flex items-center justify-between px-6 py-4">
    <!-- Circled Image (Top Left) -->
    <a href="/" class="fixed top-4 left-4 z-50">
        <img src="{{ asset('logo.png') }}" alt="Logo" class="h-15 md:h-20 rounded-full">
    </a>

    <!-- Logo (Central) -->
    <div class="fixed top-1 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50">
        @include('partials.logo')
    </div>

    <!-- Menu (Top Right) -->
    <div>
        @include('partials.side-menu')
    </div>
</header>

<section class="relative h-screen flex items-start">
    <!-- Hero Text -->
    <div class="text-left pl-32 pt-32">
        <h1 class="text-3xl font-bold leading-tight text-primary">
            THIS IS DASH
        </h1>
        <div class="relative">
            <h2 class="text-4xl md:text-8xl lg:text-12xl tilted-text font-bold leading-tighter lg:inline-block relative z-10 bg-primary p-2 text-white">
                ALMOST THE
            </h2>
            <h2 class="text-4xl md:text-8xl lg:text-12xl font-bold leading-tighter lg:inline-block relative z-10">
                BEST TECH
            </h2>
            <h2 class="text-4xl md:text-8xl lg:text-12xl font-bold leading-tighter lg:inline-block relative z-10">
                COMPANY
            </h2>
            <!-- Hidden text for overlapping effect -->
            <h2 class="text-4xl md:text-8xl font-bold leading-tighter absolute left-0 top-0 text-transparent lg:inline-block z-20">
                ALMOST THE
            </h2>
        </div>

    </div>
</section>