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
        if (toggleBurger.classList.contains('sm:hidden')) {
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