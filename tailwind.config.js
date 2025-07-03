/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    // Tambahkan juga path untuk Livewire jika Anda menggunakannya
    // "./app/View/Components/**/*.php",
    // "./app/Livewire/**/*.php",
  ],
  theme: {
    extend: {
        fontFamily: {
            // Pastikan ini sesuai dengan @font-face yang Anda gunakan jika font eksternal
            poppins: ['Poppins', 'sans-serif'], 
        },
        colors: {
            primary: '#3B82F6',
            secondary: '#10B981',
            dark: '#1E293B',
        }
    },
  },
  plugins: [],
}