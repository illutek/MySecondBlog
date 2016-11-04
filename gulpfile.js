const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir(function(mix)
{
    mix
        .sass('app.scss', './public/css/app.css')
        .sass('admin.scss', './public/css/admin.css')

    mix.styles([
        //"bootstrap.min.css"
    ]);

    mix.scripts([
        "app.js"
    ]);
});