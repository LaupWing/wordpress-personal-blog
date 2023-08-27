/** @type {import('tailwindcss').Config} */
module.exports = {
   content: [
      "./**/*.php",
      "./src/**/*.jsx"
   ],
   safelist: [
      "current-menu-item",
      "menu-item",
      "current_page_parent"
   ],
   theme: {
      fontFamily: {
         sans: ["Wix Madefor Text", "sans-serif"],
         cursive: ["Fugaz One", "cursive"]
      },
      extend: {

      },
   },
   plugins: [
      require("@tailwindcss/forms")
   ],
}
