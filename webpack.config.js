var Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('web/build/')
    .setPublicPath('/build')
    .enableSassLoader()
    .cleanupOutputBeforeBuild()
    .configureUrlLoader({
        fonts: { limit: 102400 },
        images: { limit: 10240 }
    })
    .addEntry('common', './assets/js/common.js')
    .addEntry('custom', './assets/js/custom.js')
    .autoProvidejQuery()
    .enableVersioning()
    .enableVersioning(Encore.isProduction())
    .enableBuildNotifications()
    
;

module.exports = Encore.getWebpackConfig();
