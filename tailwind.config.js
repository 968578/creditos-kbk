/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {},
    fontFamily: {
      'oswald': ['Oswald', 'sans-serif'],
      'body': ['"Open Sans"'],
      'mukta': ['Mukta', 'sans-serif'],
      'raleway': ['Raleway', 'sans-serif'],

    }
  },
  plugins: [],
}
