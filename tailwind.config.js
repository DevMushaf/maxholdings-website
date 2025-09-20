/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './storage/framework/views/*.php',
  ],
  theme: {
    colors: {
      primary: '#FF2212',
      secondary: '#55403F',
      black: {
        DEFAULT: '#2F2523',
        75: 'rgb(47 37 35 / 0.75)',
        50: 'rgb(47 37 35 / 0.5)',
        25: 'rgb(47 37 35 / 0.25)',
        10: 'rgb(47 37 35 / 0.1)',
        5: 'rgb(47 37 35 / 0.05)',
      },
      error: '#EE1210',
      white: '#ffffff',
      transparent: 'transparent',
    },
    fontFamily: {
      'inter': ['Inter', 'sans-serif'],
      'poppins': ['Poppins', 'sans-serif'],
      'sans': ['Inter', 'sans-serif'],
    },
    fontSize: {
      'hero': 'clamp(2.5rem, 5vw, 4rem)',
      'xs': '0.75rem',
      'sm': '0.875rem',
      'base': '1rem',
      'lg': '1.125rem',
      'xl': '1.25rem',
      '2xl': '1.5rem',
      '3xl': '1.875rem',
      '4xl': '2.25rem',
    },
    extend: {
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
}