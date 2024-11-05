/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            center: true,
            padding: "1rem",
        },
        fontFamily: {
            sans: ["ABC", "Inter", "sans-serif"],
            serif: ["Mohr", "Merriweather", "serif"],
        },
        extend: {
            colors: {
                blue: "#2025ea",
                pink: "#fe14cd",
                green: "#015a2a",
                white: "#ffffff",
                black: "#000000",
                gray: "#F8F6F8",
            },
            fontSize: {
                "8xl": "6rem",
                "9xl": "7.5rem",
                "10xl": "9rem",
            },
            animation: {
                "spin-slow": "spin 5s linear infinite",
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
