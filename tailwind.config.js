/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        // Warna Custom
        brown1: '#8D7B68',
        brown2: '#A4907C',
        brown3: '#C8B6A6',
        brown4: '#F1DEC9',
        gold: '#FFD700',
        silver: '#C0C0C0',
        bronze: '#CD7F32'
      },
      fontFamily: {
        poppins : ['"poppins"', 'sans-serif'],
        openSans : ['"Open Sans"', 'sans-serif'],
      },
      scale: {
        '200': '2',
      }
    },
  },
  plugins: [],
}
