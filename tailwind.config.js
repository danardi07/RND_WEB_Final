/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/views/**/*.blade.php', // scan semua blade termasuk layout
    './resources/js/**/*.js',           // scan semua file JS di dalam resources/js
  ],
  theme: {
    extend: {
      animation: {
        fadeIn: 'fadeIn 1s ease-out forwards',
        fadeInUp: 'fadeInUp 1s ease-out forwards',
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: 0 },
          '100%': { opacity: 1 },
        },
        fadeInUp: {
          '0%': { opacity: 0, transform: 'translateY(40px)' },
          '100%': { opacity: 1, transform: 'translateY(0)' },
        },
      },
    },
  },
  plugins: [],
};
