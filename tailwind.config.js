/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './vendor/razorui/blade-application-ui/resources/views/components/**/*.blade.php',

    ],
    theme: {
        extend: {
            fontFamily: {
                'open-sans': ["open-sans", "open-sans"],
                'domine': ["domine", "domine"]
            },
            colors: {
                'green-custom': "#009B4D",
                'yellow-custom': "#FFCC00",
                'ivory-custom': "#FAF5E9",
                'l-blue': "#6BCFFF",
                'm-blue': "#4CB9ED",
                'd-cyan': "#2378A1",
                'l-orange': "#F3992C",
                'd-orange': "#AD6915"
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}

