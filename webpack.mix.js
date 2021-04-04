const mix = require("laravel-mix");
var path = require("path");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.override(webpackConfig => {
    webpackConfig.resolve.modules = [
        "node_modules",
        __dirname + "/vendor/spatie/laravel-medialibrary-pro/resources/js"
    ];
});

mix.webpackConfig({
    resolve: {
        modules: [
            path.resolve(__dirname),
            path.resolve("./node_modules/"),
            path.resolve("./resources/"),
            path.resolve("./resources/js")
        ]
    }
});

mix.js("resources/js/app.js", "public/js")
    .postCss("resources/css/tailwind.css", "public/css", [
        require("tailwindcss")
    ])
    .sass("resources/scss/app.scss", "public/css")
    .vue();
