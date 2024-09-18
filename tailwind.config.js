/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],  // Menggunakan default font dan Inter var
      },
      colors: {
        primary: '#227377',  // Warna primary kustom
      },
    },
  },
  plugins: [],
}
