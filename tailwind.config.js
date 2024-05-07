/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php,json}"],
  theme: {
    extend: {},
  },
  daisyui: {
    themes: [],
  },
  plugins: [require("daisyui")],
};
