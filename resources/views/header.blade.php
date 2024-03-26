<header class="relative flex items-center justify-between px-6 py-4">
    <!-- Circled Image (Top Left) -->
    <a href="#">
        <img src="{{ asset('img/image.png') }}" alt="Logo" class="w-16 h-16 rounded-full border-4 border-white">
    </a>

    <!-- Logo (Central) -->
    <div>
        <img src="{{ asset('img/image.png') }}" alt="Logo" class="w-32 h-32">
    </div>

    <!-- Menu (Top Right) -->
    <div>
        <button>
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2 4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4C22 4.55228 21.5523 5 21 5H3C2.44772 5 2 4.55228 2 4ZM21 8H3C2.44772 8 2 8.44772 2 9C2 9.55228 2.44772 10 3 10H21C21.5523 10 22 9.55228 22 9C22 8.44772 21.5523 8 21 8ZM21 15H3C2.44772 15 2 15.4477 2 16C2 16.5523 2.44772 17 3 17H21C21.5523 17 22 16.5523 22 16C22 15.4477 21.5523 15 21 15Z"></path>
            </svg>
        </button>
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
<style>
    /* Custom CSS */
    @keyframes tilt {
        0% {
            transform: rotate(-2deg) translateX(0);
        }

        50% {
            transform: rotate(-1deg) translateX(-5px);
        }

        100% {
            transform: rotate(-2deg) translateX(0);
        }
    }

    /* Apply animation to the tilted text */
    .tilted-text {
        animation: tilt 5s infinite alternate;
    }
</style>