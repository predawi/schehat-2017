/**
 * Miscellaneous stuffs
 */
// Dependencies
const $ = require('jquery')

$(document).ready(function () {
  $('#cf-form').conversationalForm({

  })

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
