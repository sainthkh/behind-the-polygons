/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      width: {
        '150': '37.5rem',
      },
      margin: {
        '40': '10rem',
      },
    },
    colors: {
      black: '#131312',
      white: '#E5F1ED',
      blue: '#35579B',
    }
  },
  plugins: [],
}
