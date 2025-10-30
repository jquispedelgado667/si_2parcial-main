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
            colors: {
                brand: {
                    50: '#ecfdf6',
                    100: '#d0f8e7',
                    200: '#a2f0d2',
                    300: '#6ee5ba',
                    400: '#38d495',
                    500: '#19b37b',
                    600: '#0f8f63',
                    700: '#0d7251',
                    800: '#0b5740',
                    900: '#073227',
                },
                aurora: {
                    50: '#fff7ed',
                    100: '#ffe5c7',
                    200: '#ffcf97',
                    300: '#ffb166',
                    400: '#ff9240',
                    500: '#fb6f1a',
                    600: '#d94d0f',
                    700: '#b1330e',
                    800: '#8a2911',
                    900: '#581809',
                },
            },
            fontFamily: {
                sans: ['"Manrope"', ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                glow: '0 18px 45px rgba(15, 143, 99, 0.25)',
            },
        },
    },

    plugins: [forms],
};
