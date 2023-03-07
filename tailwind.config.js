import { fontFamily as _fontFamily } from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export const content = [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
];
export const theme = {
    extend: {
        fontFamily: {
            sans: ['Figtree', ..._fontFamily.sans],
        },
    },
};

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
    theme: {
      extend: {},
    },
    plugins: [],
  }

export const plugins = [require('@tailwindcss/forms')];
