<header class="flex flex-col relative">
    <nav class="flex relative p-4 px-5 md:px-9 lg:px-14 xl:px-20">
        <div class="flex w-full items-center justify-between md:justify-end z-[2]"><a class="md:hidden" href="/">
                <img alt="Logo" loading="lazy" width="2880" height="2880" decoding="async" data-nimg="1" class="w-[22vw] -ml-2" style="color:transparent"
                src="{{asset('img/quid.png')}}"></a>
            <div class="flex gap-x-3">
                <a target="_blank" href="https://x.com/Quidpixels"><img alt="X" loading="lazy" width="128" height="128" decoding="async" data-nimg="1" 
                class="w-[10vw] h-[10vw] md:w-[4vw] md:h-[4vw]" style="color:transparent" src="{{asset('img/juicebot/twitter.webp')}}">
                </a>
                <a target="_blank" href="https://t.me/Quidpixels">
                    <img alt="Telegram" loading="lazy" width="128" height="128" decoding="async" data-nimg="1" class="w-[10vw] h-[10vw] md:w-[4vw] md:h-[4vw]" style="color:transparent" 
                    src="{{asset('img/juicebot/telegram.webp')}}"></a>
            </div>
        </div>
        <img alt="Slime Shape" loading="lazy" width="3200" height="1800" decoding="async" data-nimg="1" class="absolute top-0 z-[0] left-0 w-full" 
        style="color:transparent" src="{{asset('img/QUIDWEB/waves_header.png')}}">
    </nav>
    <div class="w-full flex flex-col gap-y-4 text-white mt-[22vw]">
        <div class="w-full flex">
            <div class="flex flex-col gap-y-4 w-full md:w-2/3">
                <h3 class="text-white text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl px-3">Quidpixels is a</h3>
                <h3 class="text-white text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl pl-[6rem] max-w-2xl leading-relaxed md:block">Web3 Production Crew</h3>
                <div class="w-full md:w-1/2 flex px-[7rem] gap-x-5 md:gap-x-12 justify-evenly md:justify-start mb-8">
                    <a target="_blank" href="https://t.me/Quidpixels">
                        <button class="green-btn uppercase px-3 py-2 relative text-white min-w-[8rem] md:min-w-[12rem] before:content-[attr(data-text)] before:h-[calc(100%-20px)] before:block before:absolute before:z-[2] before:w-2 before:top-1/2 before:-translate-y-1/2 before:left-[calc(100%-2px)] after:conent-[attr(data-text)] after:h-[calc(100%-20px)] after:block after:absolute after:z-[2] after:w-2 after:top-1/2 after:-translate-y-1/2 after:right-[calc(100%-2px)] disabled:opacity-70 bg-juiceGreen before:bg-juiceGreen after:bg-juiceGreen">
                            <h6 class="text-white text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl">
                                <img src="{{asset('img/QUIDWEB/join_tg_Button.png')}}" />
                            </h6>
                        </button>
                    </a>
                </div>
            </div>
            <div class="hidden md:block w-1/3">
                <img alt="Logo" loading="lazy" width="2880" height="2880" decoding="async" data-nimg="1" class="w-[40vw] mx-auto -mt-[10vw] -ml-[5vw]" style="color:transparent" 
                src="{{asset('img/quid.png')}}">
            </div>
        </div>
    </div>
</header>