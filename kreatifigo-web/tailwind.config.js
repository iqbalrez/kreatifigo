/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'black': '#0f0f0f',
        'white': '#f0f0f0',
        'blue': '#2C11B6'
      },
    },
  },
  plugins: [],
}


