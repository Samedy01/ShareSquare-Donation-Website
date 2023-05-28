/** @type {import('tailwindcss').Config} */
import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                mainColor: '#FF4238',
                secondaryColor: '#FFE3E1',
                strokeColor: '#DDDDDF',
                primaryTextColor: '#333238',
                lightGrayColor: '#F5F6F8',
                textColorWithLightBg: '#43536D',
                successColor: '#31B6A7',
                promptTextColor: '#7B8794',
            },
            fontSize: {
                'xxs': '0.5rem', // Extra-small font size
                'xs': '0.75rem', // Small font size
                'sm': '0.85rem',
                'base': '1rem', // Base font size
                'lg': '1.125rem', // Large font size
                'xl': '1.25rem', // Extra-large font size
                '2xl': '1.5rem', // Double extra-large font size
                // ...add more custom font sizes as needed
            },
        },
    },
    plugins: [
        require('flowbite/plugin'),
    ],
}
