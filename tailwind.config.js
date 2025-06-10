/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",             // Archivos PHP en la raíz del proyecto
    "./includes/**/*.php", // Archivos PHP dentro de la carpeta includes
    "./assets/js/**/*.js"  // Archivos JS dentro de assets/js
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}