const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');


mix.styles([
    'public/assets/one-movies/css/bootstrap.css',
    'public/assets/one-movies/css/contactstyle.css',
    'public/assets/one-movies/css/faqstyle.css',
    'public/assets/one-movies/css/flexslider.css',
    'public/assets/one-movies/css/font-awesome.min.css',
    'public/assets/one-movies/css/jquery.slidey.min.css',
    'public/assets/one-movies/css/medile.css',
    'public/assets/one-movies/css/jnews.css',
    'public/assets/one-movies/css/owl.carousel.css',
    'public/assets/one-movies/css/popuo-box.css',
    'public/assets/one-movies/css/single.css',
    'public/assets/one-movies/css/style.css'
],
    'public/assets/one-movies/css/all.css').version();


mix.scripts([
    'public/assets/one-movies/js/bootstrap.min.js',
    'public/assets/one-movies/js/easing.js',
    'public/assets/one-movies/js/jquery-2.1.4.min.js',
    'public/assets/one-movies/js/jquery.dotdotdot.min.js',
    'public/assets/one-movies/js/jquery.flexslider.js',
    'public/assets/one-movies/js/jquery.magnific-popup.js',
    'public/assets/one-movies/js/jquery.slidey.js',
    'public/assets/one-movies/js/move-top.js',
    'public/assets/one-movies/js/owl.carousel.js',
    'public/assets/one-movies/js/simplePlayer.js',
],
    'public/assets/one-movies/js/all.js').version();

mix.webpackConfig(webpack => {
    return {
        plugins: [
            new webpack.ProvidePlugin({
                $: 'jquery',
                jQuery: 'jquery',
                jquery: 'jquery',
                'window.jQuery': 'jquery'
            })
        ]
    };
})
