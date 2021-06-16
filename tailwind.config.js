module.exports = {
  purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',],
  darkMode: false, // or 'media' or 'class'
  theme: {
      extend: {
          colors: {
              green: {
                  light: '#9DC88D',
                  mid: '#4d774e',
                  dark: '#164a41',
              },
              yellow: {
                  light: '#f1b24a',
                  dark: '#d0993c',
              },
              white: {
                  light: '#FFFFFF',
              }
          },
      },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
