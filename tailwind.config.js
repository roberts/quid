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
        lightPink: '#f2e8de',
      },
    },
  },
  plugins: [],
}
