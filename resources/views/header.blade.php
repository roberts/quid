<header class="relative flex items-center justify-between px-6 py-4">
    <!-- Circled Image (Top Left) -->
    <a href="#">
        <img src="{{ asset('img/image.png') }}" alt="Logo" class="w-16 h-16 rounded-full border-4 border-white">
    </a>

    <!-- Logo (Central) -->
    <div>
        <div class="absolute transform -translate-x-1/2 pointer-events-auto touch-none cursor-grab w-15 h-15 top-3 left-1/2 md:w-20 md:h-20 md:top-5 js-logo" style="color: rgb(31, 31, 31);"><div class="pointer-events-none"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80"><path class="logo_svg__fill-primary" fill-rule="evenodd" clip-rule="evenodd" d="M80 0H0v80h80V0ZM20.624 15.191v15.12h1.716c3.34 0 4.797-2.28 4.797-7.571s-1.458-7.572-4.797-7.572h-1.716v.023Zm2.257 21.8H9.948V8.512H22.88c10.864 0 15.497 4.28 15.497 14.227S33.745 36.99 22.88 36.99Zm35.32-10.912h-4.844l2.563-14.368L58.2 26.08Zm1.011 6.185.73 4.726h11.263L66.737 8.513H46.28L40.705 36.99h10.7l.846-4.726h6.961Zm9.999 10.022v28.477h-10.7v-11.71h-5.526v11.71h-10.7V42.286h10.7v9.617h5.526v-9.617h10.7ZM23.986 71.205c9.148 0 13.052-2.893 13.052-9.594 0-7.096-6.389-8.739-10.974-9.918-2.573-.662-4.579-1.177-4.57-2.428 0-1.34.8-1.952 2.516-1.952 2.093 0 3.08.87 3.08 2.775h9.595c0-6.279-3.786-8.96-12.652-8.96-8.865 0-12.65 2.893-12.65 9.595 0 6.014 5.422 7.532 9.861 8.776 3.077.861 5.682 1.59 5.682 3.593 0 1.34-.94 1.952-2.94 1.952-2.351 0-3.456-.87-3.456-2.775h-9.595c0 6.255 3.904 8.936 13.051 8.936Z" fill="currentColor"></path><path class="logo_svg__fill-primary" fill-rule="evenodd" clip-rule="evenodd" d="M80 0H0v80h80V0ZM20.624 15.191v15.12h1.716c3.34 0 4.797-2.28 4.797-7.571s-1.458-7.572-4.797-7.572h-1.716v.023Zm2.257 21.8H9.948V8.512H22.88c10.864 0 15.497 4.28 15.497 14.227S33.745 36.99 22.88 36.99Zm35.32-10.912h-4.844l2.563-14.368L58.2 26.08Zm1.011 6.185.73 4.726h11.263L66.737 8.513H46.28L40.705 36.99h10.7l.846-4.726h6.961Zm9.999 10.022v28.477h-10.7v-11.71h-5.526v11.71h-10.7V42.286h10.7v9.617h5.526v-9.617h10.7ZM23.986 71.205c9.148 0 13.052-2.893 13.052-9.594 0-7.096-6.389-8.739-10.974-9.918-2.573-.662-4.579-1.177-4.57-2.428 0-1.34.8-1.952 2.516-1.952 2.093 0 3.08.87 3.08 2.775h9.595c0-6.279-3.786-8.96-12.652-8.96-8.865 0-12.65 2.893-12.65 9.595 0 6.014 5.422 7.532 9.861 8.776 3.077.861 5.682 1.59 5.682 3.593 0 1.34-.94 1.952-2.94 1.952-2.351 0-3.456-.87-3.456-2.775h-9.595c0 6.255 3.904 8.936 13.051 8.936Z" fill="currentColor"></path></svg></div></div>
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