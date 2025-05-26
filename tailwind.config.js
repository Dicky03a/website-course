import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'obito-green': {
                    50:  '#e6f9f0',
                    100: '#c0f0d8',
                    200: '#8be1b8',
                    300: '#4fd18e',
                    400: '#22b96b',
                    500: '#0e9e53',
                    600: '#088043',
                    700: '#066637',
                    800: '#064f2c',
                    900: '#053f24',
                }
            }
        },
    },

    plugins: [forms],
};
