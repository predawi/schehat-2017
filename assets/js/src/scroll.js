/**
 * Scroll events
 */

// Dependencies
var $ = require('jquery')
require('../vendor/scrollify')

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
    $.scrollify({
      section: '.magnetic',
      scrollSpeed: 700,
      setHeights: false,
      before: function () {
        if ($.scrollify.currentIndex() > 0) {
          $('body').addClass('scrolled')
        } else {
          $('body').removeClass('scrolled')
        }

        if ($.scrollify.currentIndex() === $('.project ').length) {
          $('body').addClass('lastScroll')
        } else {
          $('body').removeClass('lastScroll')
        }
        $('.magnetic').removeClass('current')
        $.scrollify.current().addClass('current')
      }
    })
  }
}

/**
 * [data-nav] Scroll to section on click in main nav
 */
$('[data-nav]').on('click', function (e) {
  if ($(this).data('nav') === 'work') $.scrollify.move(1)
  e.preventDefault()
})

module.exports = activateMagnetism