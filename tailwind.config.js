const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['quasimoda', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                      'flowers': "url('/images/3415.jpg')"
            },
            colors: {
                   'company-main': '#007836',
                   'site-gray': '#D4DBE3',
                   'site-white': '#EBEDF0',
                   'site-black': '#36383B',
                   'blueline': '#2982C5',
                 },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
