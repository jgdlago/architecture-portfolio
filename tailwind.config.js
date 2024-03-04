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
                 * Paleta de cores
                 *
                 * Tema claro
                 */
                'beige': '#F5F5DC', // Fundo
                'light-gray': '#D3D3D3', // Fundo alternativo
                'light-brown': '#A52A2A', // Texto
                'light-green': '#90EE90', // Destques
                'white': '#FFFFFF',
                /*
                 * Tema escuro
                 */
                'dark-brown': '#654321', // Fundo
                'dark-gray': '#696969', // Fundo alternativo
                'dark-green': '#006400', // texto
                'black': '#000000',
                /*
                 * Cores de destaque
                 */
                'deep-green': '#008000', // Destaues | Links ou botões
                'rich-brown': '#8B4513' // Links ou botões
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
