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