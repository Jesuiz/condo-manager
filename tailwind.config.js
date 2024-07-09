import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import colors from 'tailwindcss/colors';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            gray: colors.gray,
            red: colors.red,
            yellow: colors.yellow,
            orange: colors.orange,
            green: colors.green,
            blue: colors.blue,
            indigo: colors.indigo,
            purple: colors.purple,
            pink: colors.pink,
            sky: colors.sky,
            stone: colors.stone,
            neutral: colors.neutral,
            slate: colors.slate,
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
