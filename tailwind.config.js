/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./build/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        'main' : {
          white: '#F5EDF0',
          yellow: '#FFD447',
        }
      }
    },
  },
  plugins: [],
}
