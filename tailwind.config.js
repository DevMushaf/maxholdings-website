/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './storage/framework/views/*.php',
  ],
  theme: {
    extend: {
      colors: {
        primary: '#FF2212',
        secondary: '#55403F',
        black: {
          DEFAULT: '#2F2523',
          75: 'rgba(47, 37, 35, 0.75)',
          50: 'rgba(47, 37, 35, 0.5)',
          25: 'rgba(47, 37, 35, 0.25)',
          10: 'rgba(47, 37, 35, 0.1)',
          5: 'rgba(47, 37, 35, 0.05)',
        },
        error: '#EE1210',
      },
      fontFamily: {
        'inter': ['Inter', 'sans-serif'],
        'poppins': ['Poppins', 'sans-serif'],
      },
      fontSize: {
        'hero': 'clamp(2.5rem, 5vw, 4rem)',
      },
      container: {
        center: true,
        padding: {
          DEFAULT: '1rem',
          sm: '1.5rem',
          lg: '2rem',
        },
      },
    },
  },
  plugins: [],
}