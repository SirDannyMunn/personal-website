
/* Imports */

let mix = require('laravel-mix');
// let tailwindcss = require("tailwindcss");
// let glob = require("glob-all");
// let PurgecssPlugin = require("purgecss-webpack-plugin");
require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

/* Compilation configurations */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .tailwind()
   .purgeCss();

mix.copy('node_modules/animate.css/animate.css', 'public/css/vendor.css');

mix.browserSync('portfolio.test:8000');

/* CSS Purging */

// class TailwindExtractor {
//     static extract(content) {
//         return content.match(/[A-Za-z0-9-_:\/]+/g) || [];
//     }
// }

// mix.postCss('resources/assets/sass/app.scss', 'public/css', [
//     tailwindcss('./tailwind.js')
// ]);

// mix.options({
//     postCss: [tailwindcss("./tailwind.js")]
// });

if (mix.inProduction()) {
    mix.version();
}
