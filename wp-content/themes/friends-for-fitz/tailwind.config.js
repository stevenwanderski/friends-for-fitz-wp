const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './**/*.php',
    './resources/css/*.css',
    './resources/js/*.js',
    './safelist.txt'
  ],
  theme: {
    container: {
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '0rem'
      },
    },
    fontFamily: {
      'sans': ['Roboto Flex', 'Arial', 'system-ui', 'sans-serif'],
      'display': ['Grenze'],
    },
    extend: {
      colors: {
        green: {
          DEFAULT: '#2DB150',
          md: '#BCE5C9',
          lt: '#EAF7EE'
        },
        yellow: {
          DEFAULT: '#F7D167',
          lt: '#FEF9EB'
        },
        gray: {
          lt: '#E5E5E5'
        }
      },
    },
    screens: {
      'xs': '480px',
      'sm': '600px',
      'md': '782px',
      'lg': '1000px',
      'xl': '1200px',
      '2xl': '1440px'
    }
  },
  plugins: [
    tailpress.tailwind
  ]
};
