@include('partials.hamburger')
<div class="fixed z-50 flex flex-col pointer-events-auto top-6 right-5 js-dashboard border-2 border-dark hover:border-primary">

    <!-- complete large screen menu -->
    <div id="large_screen_menu">
        <div class="flex items-stretch justify-between text-xs font-black uppercase font-display bg-dark hover:bg-primary text-white false" id="dashboardButton">
            <span class="flex w-full h-10 px-4 items-center select-none cursor-[grab] touch-none lg:h-10 hidden lg:flex" id="dashboardText">Dashboard<span class="pl-4 inline-block" id="dash_icon">-</span></span>
        </div>
        <div class="flex flex-col p-6 border-2 border-t-0 border-solid md:pt-5 md:pl-6 md:pr-5 hidden lg:block" id="menuContainer">
            <nav class="flex flex-col mb-8 md:mb-6">
                <ul class="flex flex-col text-lg font-bold leading-loose uppercase md:space-y-4 font-display md:text-lg md:leading-normal cursor-[grab]">


                    <li class="flex items-center justify-between w-full cursor-[grab] transition-transform duration-300 transform">
                        <a class="text-primary" href="{{route('home')}}">Home</a>
                        <div class="opacity-100 w-2 h-2 rounded-full -md:ml-16 bg-primary transform -md:-translate-y-0.5 -translate-y-[2px] md:w-2 md:h-2"></div>
                    </li>
                    <li class="flex items-center justify-between w-full cursor-[grab] transition-transform duration-300 transform">
                        <a class=" text-dark hover:pl-2" href="{{route('page')}}">Page</a>
                        <div class="opacity-0 w-2 h-2 rounded-full -md:ml-16 bg-primary transform -md:-translate-y-0.5 -translate-y-[2px] md:w-2 md:h-2"></div>
                    </li>
                    <li class="flex items-center justify-between w-full cursor-[grab] transition-transform duration-300 transform">
                        <a class=" text-dark hover:pl-2" href="/work">Work</a>
                        <div class="opacity-0 w-2 h-2 rounded-full -md:ml-16 bg-primary transform -md:-translate-y-0.5 -translate-y-[2px] md:w-2 md:h-2"></div>
                    </li>
                    <li class="flex items-center justify-between w-full cursor-[grab] transition-transform duration-300 transform">
                        <a class=" text-dark hover:pl-2" href="/crew">Crew</a>
                        <div class="opacity-0 w-2 h-2 rounded-full -md:ml-16 bg-primary transform -md:-translate-y-0.5 -translate-y-[2px] md:w-2 md:h-2"></div>
                    </li>
                    <li class="flex items-center justify-between w-full cursor-[grab] transition-transform duration-300 transform">
                        <a class=" text-dark hover:pl-2" href="/careers">Careers</a>
                        <div class="opacity-0 w-2 h-2 rounded-full -md:ml-16 bg-primary transform -md:-translate-y-0.5 -translate-y-[2px] md:w-2 md:h-2"></div>
                    </li>
                    <li class="flex items-center justify-between w-full cursor-[grab] transition-transform duration-300 transform">
                        <a class=" text-dark hover:pl-2" href="/stories">Stories</a>
                        <div class="opacity-0 w-2 h-2 rounded-full -md:ml-16 bg-primary transform -md:-translate-y-0.5 -translate-y-[2px] md:w-2 md:h-2"></div>
                    </li>
                    <li class="flex items-center justify-between w-full cursor-[grab] transition-transform duration-300 transform">
                        <a class=" text-dark hover:pl-2" href="/contact">Contact</a>
                        <div class="opacity-0 w-2 h-2 rounded-full -md:ml-16 bg-primary transform -md:-translate-y-0.5 -translate-y-[2px] md:w-2 md:h-2"></div>
                    </li>
                </ul>

            </nav>
        </div>
    </div>
</div>

@include('partials.side-menu-js')