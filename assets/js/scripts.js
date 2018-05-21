/**
 * Main scripts file
 */

var lazySizes = require('lazysizes')
var lazySizesBgset = require('lazysizes/plugins/bgset/ls.bgset')
require('picturefill')

require('./src/ie_message')
require('./src/projects')
require('./src/scripts-domready')
require('./src/scroll')
require('./src/relocate')

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