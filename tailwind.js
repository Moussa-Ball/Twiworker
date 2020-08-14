const { input } = require("@tailwindcss/custom-forms/src/defaultOptions");

module.exports = {
    purge: ["./resources/views/**/*.blade.php", "./resources/css/**/*.css"],
    theme: {
        fontFamily: {
            "gotham-rounded": ["Gotham Rounded"],
            "gotham-rounded-book": ["Gotham Rounded Book"],
            "sans": ['Open Sans', 'sans-serif'],
        },
        extend: {
            minWidth: {
                "10rem": "10rem"
            },
            width: {
                "39px": "39px"
            },
            height: {
                "39px": "39px"
            },
            spacing: {
                "80": "20rem",
                "108": "27rem",
                "160": "40rem",
                "300": "300rem",
                feed: "350px",
                "300px": "300px",
                "350px": "350px",
                "400px": "400px",
                "15px": "15px"
            },
            backgroundColor: {
                body: "#f1f1f1",
                footer: "#0E1021",
                google: "#DD4B39",
                primary: "#293fdf",
                another: "#53D121",
                message: "#E0E0E0",
                facebook: "#3B5999",
                header: "#eeeeee",
                input: "#F9F9F9"
            },
            textColor: {
                primary: "#293fdf",
                another: "#53D121"
            },
            borderColor: {
                primary: "#293fdf",
                message: "#E0E0E0"
            },
            backgroundOpacity: {
                "10": "0.1",
                "20": "0.2",
                "95": "0.95"
            },
            inset: {
                "2": "20px"
            },
            fontSize: {
                xxs: "0.68rem",
                link: "13px",
                "footer-link": "15px",
                "footer-title": "0.875rem"
            },
            boxShadow: {
                dropdown: "0 0 6px rgba(50 ,50 , 50, .25)",
                "btn-hover": "0 0 6px rgba(20 ,20 , 20, .45)"
            },
            transitionProperty: {
                height: "height"
            }
        }
    },
    variants: {
        backgroundColor: [
            "responsive",
            "hover",
            "focus",
            "even",
            "odd",
            "before",
            "after"
        ],
        textColor: [
            "responsive",
            "hover",
            "focus",
            "group-hover",
            "before",
            "after"
        ],
        position: ["responsive", "before", "after"],
        display: ["responsive", "before", "after"],
        height: ["responsive", "before", "after"],

        borderOpacity: ["responsive", "hover", "focus", "before", "after"],
        borderColor: ["responsive", "hover", "focus", "before", "after"],
        borderCollapse: ["responsive", "before", "after"],
        borderRadius: ["responsive", "before", "after"],
        borderStyle: ["responsive", "before", "after"],
        borderWidth: ["responsive", "before", "after"],
        inset: ["responsive", "before", "after"],
        transitionProperty: ["responsive", "hover", "focus", "before", "after"]
    },
    plugins: [
        require("@tailwindcss/custom-forms"),
        require("tailwindcss-pseudo-elements"),
        // This plugin is useful in combination with tailwindcss-aspect-ratio.
        require("tailwindcss-aspect-ratio")({
            ratios: {
                "16/9": [16, 9],
                "4/3": [4, 3],
                "3/2": [3, 2],
                "1/1": [1, 1]
            },
            variants: ["before", "responsive"]
        }),
        function({ addUtilities }) {
            addUtilities({ ".empty-content": { content: "''" } }, ["before"]);
        }
    ]
};
