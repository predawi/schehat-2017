/**
 * Scroll events
 */

// Dependencies
var $ = require('jquery')

/**
 * [data-nav] Scroll to section on click in main nav
 */
$('[data-nav]').on('click', function (e) {
  if ($(this).data('nav') === 'work') $('body').addClass('scrolled')
  $('body').addClass('scrolled')
  setTimeout(() => {
    $('.intro--above').hide()
  }, 300)
  e.preventDefault()

  if ($('body').hasClass('chatting')) {
    $('body').removeClass('chatting')
    e.preventDefault()
  }
})

$(window).scroll(function () {
  $('body').addClass('scrolled')
  setTimeout(() => {
    $('.intro--above').hide()
  }, 300)
})