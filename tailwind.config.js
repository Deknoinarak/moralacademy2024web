/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,json}"],
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
      },
      flex: {
        "5": "0 0 20%"
      }
    },
  },
  plugins: [require("daisyui")],
  daisyui: {
    themes: [],
  },
};
