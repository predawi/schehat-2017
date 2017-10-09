/**
 * Scroll events
 */

// Dependencies
var $ = require('jquery')
require('../vendor/magnetic-scroll')

// Test media query
var mediaQuery = window.matchMedia('(min-width: 1024px)')
mediaQuery.addListener(activateMagnetism)

if ($('.no-touchevents').length) {
  activateMagnetism(mediaQuery)
}

/**
 * [activateMagnetism] Activate magnetic scroll on desktop
 */
function activateMagnetism (mediaQuery) {
  if (mediaQuery.matches) {
    $.magneticScroll({
      speed: 700,
      timeout: 500
    })
  }
}