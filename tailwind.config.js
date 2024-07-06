import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import {
    sky,
    stone,
    neutral,
    gray,
    slate,
    restColors
} from 'tailwindcss/colors';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors: {
            restColors,
            sky,
            stone,
            neutral,
            gray,
            slate,
        },
        extend: {
            scale: {
                '120': '1.2',
                '125': '1.25',
                '130': '1.3',
                '140': '1.4',
            },
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                'xs': '0.70rem',
            },
        },
    },

    plugins: [forms],
};
