/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    screens: {
        'sm': '640px',
        // => @media (min-width: 640px) { ... }

        'md': '1024px',
        // => @media (min-width: 1024px) { ... }

        'lg': '1280px',
        // => @media (min-width: 1280px) { ... }
      },
    extend: {},
  },
  plugins: [require('flowbite/plugin')],
}
