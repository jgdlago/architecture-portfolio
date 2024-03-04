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
                /*
                 * Palete de cores
                 */
                'my-soft-beige': '#F5F5DC',
                'my-light-gray': '#D3D3D3',
                'my-light-brown': '#D2B48C',
                'my-dark-gray': '#808080',

                'my-moss-green': '#ADFF2F',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
