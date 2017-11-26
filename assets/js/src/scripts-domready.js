/**
 * Miscellaneous stuffs
 */
// Dependencies
// const $ = require('jquery')

$(document).ready(function () {
  $('#nav-about').on('click', function (e) {
    $('body').addClass('chatting')

    e.preventDefault()
  })
})
