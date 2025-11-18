/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#1E40AF',   // Contoh warna biru custom
        secondary: '#9333EA', // Contoh warna ungu custom
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'], // Tambahkan font custom
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
}
