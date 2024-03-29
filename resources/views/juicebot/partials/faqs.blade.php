<section class="flex p-8 flex-col items-center md:items-start md:pl-[6rem] gap-y-6">
    <h3 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl text-juiceGreen">FAQs</h3>
    <div class="w-full relative flex flex-col py-3 max-w-[60rem] border-b-[3px] border-white">
        <button class="flex justify-between items-center faq-button">
            <span class="text-lg text-start md:text-xl font-extrabold text-white faq-title">What is JuiceBot?</span>
            <div class="w-min">
                <svg class="transition-all duration-300" width="30" height="25" viewBox="0 0 37 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.5 32L0.746478 0.5L36.2535 0.500004L18.5 32Z" fill="#00D000"></path>
                </svg>
            </div>
        </button>
        <div class="text-sm md:text-base text-juiceGreen font-semibold opacity-0 w-full h-0 faq-answer">
            JuiceBot is a trading bot designed to make buying and selling cryptocurrency simple, straightforward and rewarding.
        </div>
    </div>
    <div class="w-full relative flex flex-col py-3 max-w-[60rem] border-b-[3px] border-white">
        <button class="flex justify-between items-center faq-button">
            <span class="text-lg text-start md:text-xl font-extrabold text-white faq-title">But what is $JUICE?</span>
            <div class="w-min">
                <svg class="transition-all duration-300" width="30" height="25" viewBox="0 0 37 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.5 32L0.746478 0.5L36.2535 0.500004L18.5 32Z" fill="#00D000"></path>
                </svg>
            </div>
        </button>
        <div class="text-sm md:text-base text-juiceGreen font-semibold opacity-0 w-full h-0 faq-answer">
            $JUICE is the native token and driving force behind JuiceBot. Rewards, a points system and gamified farming of $JUICE is available to all JuiceBot users.
        </div>
    </div>
    <div class="w-full relative flex flex-col py-3 max-w-[60rem] border-b-[3px] border-white">
        <button class="flex justify-between items-center faq-button">
            <span class="text-lg text-start md:text-xl font-extrabold text-white faq-title">How do I use JuiceBot?</span>
            <div class="w-min">
                <svg class="transition-all duration-300" width="30" height="25" viewBox="0 0 37 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.5 32L0.746478 0.5L36.2535 0.500004L18.5 32Z" fill="#00D000"></path>
                </svg>
            </div>
        </button>
        <div class="text-sm md:text-base text-juiceGreen font-semibold opacity-0 w-full h-0 faq-answer">
            JuiceBot is available to all Telegram users and will be accessible as a web application in the future.
        </div>
    </div>
    <div class="w-full relative flex flex-col py-3 max-w-[60rem] border-b-[3px] border-white">
        <button class="flex justify-between items-center faq-button">
            <span class="text-lg text-start md:text-xl font-extrabold text-white faq-title">Why should I stake my $JUICE?</span>
            <div class="w-min">
                <svg class="transition-all duration-300" width="30" height="25" viewBox="0 0 37 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.5 32L0.746478 0.5L36.2535 0.500004L18.5 32Z" fill="#00D000"></path>
                </svg>
            </div>
        </button>
        <div class="text-sm md:text-base text-juiceGreen font-semibold opacity-0 w-full h-0 faq-answer">$JUICE stakers earn more juicy rewards...</div>
    </div>
    <div class="w-full relative flex flex-col py-3 max-w-[60rem] border-b-[3px] border-white">
        <button class="flex justify-between items-center faq-button">
            <span class="text-lg text-start md:text-xl font-extrabold text-white faq-title">Where do I learn more about JuiceBot?</span>
            <div class="w-min">
                <svg class="transition-all duration-300" width="30" height="25" viewBox="0 0 37 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.5 32L0.746478 0.5L36.2535 0.500004L18.5 32Z" fill="#00D000"></path>
                </svg>
            </div>
        </button>
        <div class="text-sm md:text-base text-juiceGreen font-semibold opacity-0 w-full h-0 faq-answer">Reach out via <a class="text-juiceOrange hover:text-white" href="mailto:info@juicebot.app">email</a> or join our community <a class="text-juiceOrange hover:text-white" href="https://t.me/JuiceBotApp">Telegram.</a></div>
    </div>
</section>

<script>
    // Select all FAQ buttons
    const faqButtons = document.querySelectorAll('.faq-button');

    // Add event listeners to each FAQ button
    faqButtons.forEach(button => {
        button.addEventListener('click', () => {
            const answer = button.closest('.w-full').querySelector('.faq-answer');
            const isExpanded = !answer.classList.contains('opacity-0');

            // Toggle the answer visibility
            answer.classList.toggle('opacity-0');
            answer.classList.toggle('h-0');

            // Toggle the arrow direction
            const arrowPath = button.querySelector('path');
            if (isExpanded) {
                // Collapse animation: Reset the arrow to point down
                arrowPath.setAttribute('d', 'M18.5 32L0.746478 0.5L36.2535 0.500004L18.5 32Z');
            } else {
                // Expand animation: Rotate the arrow to point up
                arrowPath.setAttribute('d', 'M18.5 0L0.746478 31.5H36.2535L18.5 0Z');
            }
        });
    });
</script>


