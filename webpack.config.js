var Encore = require("@symfony/webpack-encore");

Encore
    // the project  where assets are compiled
    .setOutputPath('public/build')
    // the public path used by yhe server to access to previous directory
    .setPublicPath('/build')
    //
    .cleanupOutputBeforeBuild()
    //
    //.enableSingleRuntimeChunk()
    .enableSourceMaps(!Encore.isProduction())
    // uncomment to defne the assets of the projects
    .addEntry('js/app', [
        './node_modules/jquery/dist/jquery.slim.js',
        './node_modules/popper.js/dist/popper.min.js',
        './node_modules/bootstrap/dist/js/bootstrap.min.js',
        './node_modules/holderjs/holder.min.js'
    ])
    .addStyleEntry('css/app', [
        './node_modules/bootstrap/dist/css/bootstrap.min.css',
        './assets/css/app.css'
    ])

    // uncomment if you use Sass/SCSS files
    //.enableSassLoader('')
    // uncomment for legacy
    //.autoProvidejQuery()
;

module.exports = Encore.getWebpackConfig();
