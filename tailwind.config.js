/** @type {import('tailwindcss').Config} */

const colors = require("tailwindcss/colors")

module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
        colors:{
            ...colors,
            'primary-1': "#0d1b2a",
            'primary-2': '#1b263b',
            'secondary-1': '#415a77',
            'secondary-2': '#778da9',
            'compliment': '#e0e1dd',
        },
      extend: {},
    },
    plugins: [],
  }
