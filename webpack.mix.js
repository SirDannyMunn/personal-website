
/* Imports */

let mix = require('laravel-mix');
let tailwindcss = require("tailwindcss");
let glob = require("glob-all");
let PurgecssPlugin = require("purgecss-webpack-plugin");

/* Compilation configurations */

mix.options({
    // uglify: true,
    postCss: [tailwindcss("./tailwind.js")]
});

require('laravel-mix-tailwind');
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .tailwind();

mix.copy('node_modules/animate.css/animate.css', 'public/css/vendor.css');

mix.browserSync('portfolio.test:8000');

/* CSS Purging */

class TailwindExtractor {
    static extract(content) {
        return content.match(/[A-Za-z0-9-_:\/]+/g) || [];
    }
}

if (mix.inProduction()) {

    mix.version();

    mix.webpackConfig({
        plugins: [
            new PurgecssPlugin({

                paths: glob.sync([
                    path.join(__dirname, "resources/views/**/*.blade.php"),
                    path.join(__dirname, "resources/assets/js/**/*.vue")
                ]),
                extractors: [
                    {
                        extractor: TailwindExtractor,

                        extensions: ["html", "js", "php", "vue"]
                    }
                ]
            })
        ]
    });
}
