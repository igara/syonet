var elixir = require('laravel-elixir');
elixir.config.sourcemaps = false;
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    var bootstrapPath = 'node_modules/bootstrap-sass/assets';
    var jQueryPath = 'node_modules/jquery/dist/jquery.js';
    mix.sass('bootstrap/bootstrap.scss', 'public/css/bootstrap')
            .copy(bootstrapPath + '/fonts', 'public/fonts/')
            .copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'public/js/bootstrap')
            .copy(jQueryPath, 'public/js/jQuery');
    
    mix.sass('chat/chat.scss', 'public/css/chat');
});

elixir(function (mix) {
    mix.babel('test.js');
});