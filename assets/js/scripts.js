/**
 * Main scripts file
 */

var lazySizes = require('lazysizes')
var lazySizesBgset = require('lazysizes/plugins/bgset/ls.bgset')
// var flag = require('./src/flag')
require('picturefill')

// require('./src/button-href')
require('./src/ie_message')
require('./src/projects')
require('./src/scripts-domready')
// require('./src/select')
require('./src/scroll')

/**
 * LazySizes configuration
 * https://github.com/aFarkas/lazysizes/#js-api---options
 */
lazySizes.customMedia = {}

/**
 * LazySizesBgset configuration
 * https://github.com/aFarkas/lazysizes/tree/gh-pages/plugins/bgset#lazysizes-bgset-extension---responsive-background-images
 */
lazySizesBgset.customMedia = {}

// flag()