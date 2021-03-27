module.exports = {
    darkMode: false, // or 'media' or 'class'
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue"
    ],
    theme: {
        extend: {
            colors: {
                "footer-bg": "#191919"
            }
        }
    },
    variants: {
        extend: {}
    },
    plugins: []
};
