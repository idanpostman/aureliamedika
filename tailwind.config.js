/** @type {import('tailwindcss').Config} */
export default {
  content: [ "./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",
  "./node_modules/flowbite/**/*.js"],
  theme: {
    extend: {
        colors: {
            primary: '#780000',
            secondary: '#003049',
            dark: '#0f172a',
          },
          screens: {
            '2xl' : '1320px'
          }
    },
  },
  plugins: [ require('flowbite/plugin')
],
}

