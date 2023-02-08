/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        "black":"#20202a",
        "light-black":"#2C2C3A",
        "gray":"#F0F0F0",
        "green": "#2CA58D",
      },
    },
  },
  plugins: [],
}
