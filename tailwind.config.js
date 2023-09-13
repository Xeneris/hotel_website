/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        fontFamily: {
            'open-sans': ["open-sans", "open-sans"],
            'domine': ["domine", "domine"]
        },
    },
    plugins: [],
}

