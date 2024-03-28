<div class="fixed z-50 flex flex-col pointer-events-auto top-6 right-5 js-dashboard border-2 border-dark hover:border-primary">
    <span class="items-center justify-center w-10 h-10 cursor-pointer lg:hidden hover:border-dark" id="toggle_burger">
        <i class="w-2.5 h-1 mr-4 transform pointer-events-none">
            <svg viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path stroke="currentColor" stroke-width="2" d="M14 1H0M14 6H0M14 11H0"></path>
            </svg>
        </i>
    </span>

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

<script>
    const dashboardButton = document.getElementById('dashboardButton');
    const menuContainer = document.getElementById('menuContainer');
    const dashIcon = document.getElementById('dash_icon');
    const toggleBurger = document.getElementById('toggle_burger');
    const dashboardText = document.getElementById('dashboardText')

    dashboardButton.addEventListener('click', () => {
    
        menuContainer.classList.toggle('lg:block');
    
        const lgBlockPresent = menuContainer.classList.contains('lg:block');
        dashIcon.textContent = lgBlockPresent ? '-' : '+';

        //toggle hamburger icon
        if(toggleBurger.classList.contains('sm:hidden')){
            toggleBurger.classList.toggle('sm:hidden')
            largeScreenMenu.classList.toggle('hidden');
            menuContainer.classList.toggle('hidden');
            dashboardText.classList.toggle('hidden');
        }

    });


    //mobile menu
    const largeScreenMenu = document.getElementById('large_screen_menu');


    toggleBurger.addEventListener('click', () => {
        toggleBurger.classList.toggle('sm:hidden')
        largeScreenMenu.classList.remove('hidden');

        //remove teh hidden class
        //because else it wont show on mobile
        //hidden class was added to hide it on mobile by default
        menuContainer.classList.toggle('hidden');
        dashboardText.classList.toggle('hidden');
    });
</script>