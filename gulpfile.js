var elixir = require('laravel-elixir');

elixir(function (mix) {
    mix.sass('main.scss')
        .coffee('module.coffee');
});
