/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js}"],
  theme: {
    extend: {
      keyframes: {
        "line-up": {
          "0%": { transform: "translateY(-100px)" },
          "100%": { transform: "translateY(0)" },
        },
      },
      animation: {
        "line-up": 'line-up 1s ease-in-out',
      }
    },
  },
  plugins: [require("daisyui")],
  daisyui: {
    themes: [],
  },
};
