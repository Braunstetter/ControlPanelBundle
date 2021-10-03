const colors = require('tailwindcss/colors')

module.exports = {
  purge: ['./../views/**/*.{twig, html.twig}'],
  darkMode: 'media',
  mode: 'jit',
  theme: {
    extend: {
      colors: {
        gray: colors.blueGray,
      },
      minWidth: {
        '1/2': '50%'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
