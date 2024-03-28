<div class="fixed z-10 flex flex-col pointer-events-auto top-6 right-5 js-dashboard border-2 lg:border-dark hover:border-primary">
    <span class="items-center justify-center w-10 h-10 cursor-pointer md:hidden hover:border-dark" id="toggle_burger">
        <i class="w-2.5 h-1 mr-4 transform pointer-events-none">
            <svg viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path stroke="currentColor" stroke-width="2" d="M14 1H0M14 6H0M14 11H0"></path>
            </svg>
        </i>
    </span>
    <div class="flex items-stretch justify-between text-xs font-black uppercase font-display lg:bg-dark md:bg-transparent hover:bg-primary md:text-dark lg:text-white false" id="dashboardButton">
        <span class="flex w-full h-10 px-4 items-center select-none cursor-[grab] touch-none md:h-10 hidden md:flex" id="dashboardText">Dashboard<span class="pl-4 inline-block" id="dash_icon">-</span></span>
    </div>
    <div class="flex flex-col p-6 border-2 border-t-0 border-solid md:pt-5 md:pl-6 md:pr-5 hidden lg:visible" id="menuContainer">
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

<script>
    const dashboardButton = document.getElementById('dashboardButton');
    const menuContainer = document.getElementById('menuContainer');
    const dashIcon = document.getElementById('dash_icon');

    dashboardButton.addEventListener('click', () => {
        menuContainer.classList.toggle('hidden');
        const isHidden = menuContainer.classList.contains('hidden');
        dashIcon.textContent = isHidden ? '+' : '-';
    });
</script>