import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                obsidian: '#080914',
                'cinematic-navy': '#101229',
                'surface-dark': '#171936',
                'warm-white': '#F7F6F3',
                coral: '#FF4D42',
                'coral-hover': '#E94239',
                'lavender-text': '#B8BDE0',
                'muted-text': '#8D91A8',
                brand: {
                    primary: '#2D2658',
                    secondary: '#40376F',
                    coral: '#FF5A68',
                    coralHover: '#E84554',
                    pink: '#FADDE3',
                    bg: '#F8F6F1',
                    surface: '#F4F2F7',
                    lavender: '#ECE9F3',
                    text: '#252238',
                    muted: '#726E8D',
                },
            },
            fontFamily: {
                sans: ['Outfit', ...defaultTheme.fontFamily.sans],
                serif: ['Cormorant Garamond', ...defaultTheme.fontFamily.serif],
            },
        },
    },
    plugins: [],
};
