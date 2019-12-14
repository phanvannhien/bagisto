const mix = require("laravel-mix");

if (mix == 'undefined') {
    const { mix } = require("laravel-mix");
}

require("laravel-mix-merge-manifest");

if (mix.inProduction()) {
    var publicPath = 'publishable/assets';
} else {
    var publicPath = "../../../public/themes/nhienphan/assets";
}

mix.setPublicPath(publicPath).mergeManifest();
mix.disableNotifications();

mix.js([__dirname + "/assets/js/app.js"], "js/shop.js")
    .copyDirectory(__dirname + "/assets/images", publicPath + "/images")
    .sass(__dirname + "/assets/sass/app.scss", "css/shop.css")
    .options({
        processCssUrls: false
    });

if (mix.inProduction()) {
    mix.version();
}
