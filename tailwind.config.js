/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          50: '#F0F3FA',
          100: '#D5DEEF',
          200: '#B1C9EF',
          300: '#8AAEE0',
          400: '#638ECB',
          500: '#395886',
        }
      }
    },
  },
  plugins: [],
}