module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {
      inset: ["group-hover"],
    },
  },
  plugins: [
    require('daisyui'),
  ],
}
