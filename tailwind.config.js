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
        'tighter': '0.90',
      },
      colors: {
        primary: '#0050f5',
        lightPink: '#f2e8de',
        dark: '#1f1f1f'
      },

      spacing: {
        '24rem': '24rem',
        '32rem': '32rem',
        '70p': '70%',
      },
      height: {
        '60rem': '60rem',
      },
    },
  },
  plugins: [],
}
