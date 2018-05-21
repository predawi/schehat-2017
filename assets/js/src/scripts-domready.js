/**
 * Miscellaneous stuffs
 */
// Dependencies
const $ = require('jquery')
const Rellax = require('../vendor/rellax')

$(document).ready(function () {
  // Setup parallax for projects thumbnails
  var rellax = new Rellax('.rellax')

  $('#nav-about').on('click', function (e) {
    $('body').addClass('chatting')

    e.preventDefault()
  })

  $('.header__logo-link').on('click', function (e) {
    if ($('body').hasClass('chatting')) {
      $('body').removeClass('chatting')
      e.preventDefault()
    }
  })
})
