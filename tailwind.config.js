import defaultTheme from "tailwindcss/defaultTheme";

export default {
    content: ["./resources/views/**/*.blade.php", "./resources/js/**/*.js"],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                font: {
                    primary: "#3A5BA9",
                    secondary: "#2E425F",
                    tertiary: "#949494",
                    danger: "#F33746",
                },
                btn: {
                    primary: {
                        DEFAULT: "#3A5BA9",
                        hover: "#1A1E82",
                    },
                },
                checkbox: {
                    primary: {
                        checked: "#1FA37E",
                        unchecked: "#ADB1B9",
                    },
                },
                primary: "#3A5BA9",
                success: "#1FA37E",
                danger: "#F33746",
                natural: "#ADB1B9",
            },
        },
    },
    plugins: [],
};
