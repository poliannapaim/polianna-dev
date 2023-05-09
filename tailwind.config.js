/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors: {
      'woody-brown': '#453637',
      'terra-cotta': '#BF5E66',
      'soft-pink': '#FFB5B5',
      'pale-pink': '#FFD9DC',
      'transparent': 'transparent',
    },
    extend: {
      backgroundImage: {
        'circle': "url('/storage/app/public/images/background.svg')",
        'mobile': "url('/storage/app/public/images/background-mobile.svg')",
        'top': "url('/storage/app/public/images/top.svg')",
        'logo': "url('/storage/app/public/images/logo.svg')",
        'eu': "url('/storage/app/public/images/eu.png')",
      },
      width: {
        '35vw': '35vw',
        '60vw': '60vw',
        '90vw': '90vw',
      }
    },
    backgroundPosition: {
      'custom': 'center top',
      'center': 'center',
    },
    fontFamily: {
      'sans': ['Poppins', ...defaultTheme.fontFamily.sans],
    },
    letterSpacing: {
      'widest': '0.75em'
    },
    lineHeight: {
      '12': '3rem'
    },
    dropShadow: {
      'h1': '2px 2px 0px rgba(255, 181, 181, 1)',
    },
    boxShadow: {
      'button-light': '6px 6px 0px rgba(255, 181, 181, 1)',
      'button-dark': '6px 6px 0px rgba(191, 94, 102, 1)',
    }
  },
  plugins: [],
}

