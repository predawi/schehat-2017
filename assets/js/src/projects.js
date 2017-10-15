/**
 * Projects
 */

// Dependencies
var $ = require('jquery')
require('../vendor/magnetic-scroll')

var dataProject, dataBg, projects

projects = $('.project-link')

projects.on('click', function (e) {
  dataProject = $(this).data('project')
  dataBg = $(this).data('bg')

  $.scrollify.destroy()

  $('body').addClass('zoomed')

  $('#projects-wrapper').fadeOut()
  $('#background-holder').css('background-image', 'url(' + dataBg + ')')
  setTimeout(function () {
    $('#project-zoom-tpl').fadeIn().addClass('active')
    window.scrollTo(0, 0)
    $('[data-zoom="' + dataProject + '"]').fadeIn()
  }, 300)

  e.preventDefault()
})

$('#close-project').on('click', function (e) {
  $('#project-zoom-tpl').fadeOut().removeClass('active')
  $('[data-zoom]').fadeOut()

  $('#background-holder').css('background-image', 'url()')

  $('#projects-wrapper').fadeIn()

  $('body').removeClass('zoomed')

  $.scrollify({
    section: '.magnetic',
    scrollSpeed: 700
  })

  e.preventDefault()
})