const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        screens: {
            sm: '576px',
            md: '768px',
            lg: '92px',
            xl: '1200px'
        },
        container: {
            center: true,
            padding: '1rem'
        },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                poppins: "'Poppins', sans-serif",
                roboto: "'Roboto', sans-serif"
            },
            colors: {
                'primary' : '#FD3D57'
            }
        },
    },
    variants: {
        extends: {
            display: ['grpup-hover']
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
