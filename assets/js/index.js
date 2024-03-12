// webpack.config.js
var Encore = require('@symfony/webpack-encore');

Encore
    // ...
    .addEntry('app', './src/index.js')
    // ...
;

module.exports = Encore.getWebpackConfig();