const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  purge: [
      './templates/**/*.twig'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
        '2xl': '6rem',
      }
    },
    extend: {
      colors:{
        primary: {
          DEFAULT: '#007FDE',
          lighter: '#008FEE'
        }
      },
      fontFamily: {
        'sans': ['Roboto', ...defaultTheme.fontFamily.sans],
        'display': ['Montserrat', 'sans-serif']
      }
    },
  },
  variants: {
    extend: {
      backgroundColor: ['responsive', 'dark', 'group-hover', 'focus-within', 'hover', 'focus', 'even'],
      grayscale: ['hover', 'focus'],
    },
  },
  plugins: [],
}
