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

    // bootstrapとjQueryをpublic配下に設置する
    var bootstrapPath = 'node_modules/bootstrap-sass/assets';
    var jQueryPath = 'node_modules/jquery/dist/jquery.min.js';
    mix.sass('bootstrap/bootstrap.scss', 'public/css/bootstrap');
    mix.copy(bootstrapPath + '/fonts', 'public/fonts/');
    mix.copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'public/js/bootstrap');
    mix.copy(jQueryPath, 'public/js/jQuery');

    // sassからcssに変換させる。
    mix.sass('chat/chat.scss', 'public/css/chat');

    // resource下のtest.jsをes6からes5に変換させる。
    mix.babel('test.js');

    // mermaidをpublic下に設置する。
    var mermaidJSPath = 'node_modules/mermaid/dist';
    mix.copy(mermaidJSPath + '/mermaid.js', 'public/js/mermaid');
    mix.copy(mermaidJSPath + '/mermaid.css', 'public/css/mermaid');

});
