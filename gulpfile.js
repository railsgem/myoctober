var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');


elixir.config.assetsPath = 'themes/railsgem/assets/';
elixir.config.publicPath = 'themes/railsgem/assets/compiled/';

elixir(function(mix){

    mix.sass('style.scss');

    mix.scripts([
        'jquery.js',
        'app.js'
    ]);

    mix.livereload([
        'themes/railsgem/assets/compiled/css/style.css',
        'themes/railsgem/**/*.htm',
        'themes/railsgem/assets/compiled/js/*.js'
    ])
})
