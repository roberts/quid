/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontSize: {
        '12xl': '12rem',
        '10xl': '10rem',
      },
      lineHeight: {
        'tighter': '0.90', // You can adjust the value as needed
      },
      colors: {
        primary: '#0050f5',
        lightPink: '#f2e8de',
      },

      spacing: {
        '24rem': '24rem',
        '32rem': '32rem',
        '70p': '70%',
      },
      height: {
        '600': '37.5rem', // 1rem = 16px, so 600px = 600/16 = 37.5rem
      },
    },
  },
  plugins: [],
}
