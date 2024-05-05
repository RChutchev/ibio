const mix = require("laravel-mix");
var dotenv = require('dotenv').config({path:'../../.env'});

mix.js("resources/js/app.js", "public/js")
    .vue()
    .postCss("resources/css/app.css", "public/css", [
        require("postcss-import"),
        require("tailwindcss"),
    ])
    .webpackConfig(require("./webpack.config"));

mix.js("resources/js/page.js", "public/js");
mix.css("resources/css/page.css", "public/css");
mix.js("resources/js/carousel.js", "public/js");
mix.css("resources/css/carousel.css", "public/css");

mix.copy("resources/img/home", "public/images/home");

mix.postCss('resources/css/admin.css', 'public/css', [
    require('tailwindcss')('tailwind-admin.config.js'),
])

if (mix.inProduction()) {
    mix.version();
}

mix.disableSuccessNotifications();
