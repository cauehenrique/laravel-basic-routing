const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js").postCss(
    "resources/css/app.css",
    "public/css",
    [
        //
    ]
);

mix.browserSync({
    ui: false,
    proxy: "http://127.0.0.1:8000",
});
