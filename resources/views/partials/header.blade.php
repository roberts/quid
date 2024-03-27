<header class="relative flex items-center justify-between px-6 py-4">
    <!-- Circled Image (Top Left) -->
    <a href="#">
        <img src="{{ asset('img/image.png') }}" alt="Logo" class="w-16 h-16 rounded-full border-4 border-white">
    </a>

    <!-- Logo (Central) -->
    <div>
        @include('partials.logo')
    </div>

    <!-- Menu (Top Right) -->
    <div>
        @include('partials.side-menu')
    </div>
</header>

<section class="relative h-screen flex items-start">
    <!-- Hero Text -->
    <div class="text-left pl-32 pt-16">
        <h1 class="text-3xl font-bold leading-tight text-blue-500">
            THIS IS DASH
        </h1>
        <div class="relative">
            <h2 class="text-12xl tilted-text font-bold leading-tighter inline-block relative z-10 bg-blue-500 p-2 text-white">
                ALMOST THE
            </h2>
            <h2 class="text-12xl font-bold leading-tighter inline-block relative z-10">
                BEST TECH
            </h2>
            <h2 class="text-12xl font-bold leading-tighter inline-block relative z-10">
                COMPANY
            </h2>
            <!-- Hidden text for overlapping effect -->
            <h2 class="text-12xl font-bold leading-tighter absolute left-0 top-0 text-transparent inline-block z-20">
                ALMOST THE
            </h2>
        </div>
    </div>
</section>