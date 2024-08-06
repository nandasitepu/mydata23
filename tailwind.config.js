const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                grape: ['Grape Nuts', "cursive"],
                bebas: ['Bebas Neue', "sans-serif"],
                bunge: ['Bunge Shade', "regular"],
            },
            listStyleType: {
                none: 'none',
                disc: 'disc',
                decimal: 'decimal',
                square: 'square',
                roman: 'upper-roman',
                alphabet: 'lower-alpha',
              },
              animation: {
                wiggle: 'wiggle 1s ease-in-out infinite',
              },
              keyframes: {
                typing: {
                  "0%": {
                    width: "0%",
                    visibility: "hidden"
                  },
                  "100%": {
                    width: "100%"
                  }
                },
                blink: {
                  "50%": {
                    borderColor: "transparent"
                  },
                  "100%": {
                    borderColor: "white"
                  }
                }
              },
              animation: {
                typing: "typing 2s steps(20) infinite alternate, blink .7s infinite"
              }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('flowbite/plugin'),
        require('@tailwindcss/typography'),
    ],

};
