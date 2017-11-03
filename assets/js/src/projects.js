/**
 * Projects
 */

// Dependencies
var $ = require('jquery')
// var initWater = require('./water')
require('../vendor/magnetic-scroll')

var dataProject, dataBg, projects

projects = $('.project-link')

// Click on project
projects.on('click', function (e) {
  // Get some datas
  dataProject = $(this).data('project')
  dataBg = $(this).data('bg')

  // Set project img in background
  // initWater(dataBg)

  // Prepare zoom state
  $('body').addClass('zoomed')
  // Prevent Scrollify
  $.scrollify.destroy()

  setTimeout(function () {
    // Hide projects thumbs
    $('#projects-wrapper').fadeOut()
  }, 200)

  setTimeout(function () {
    // Prepare zoom section
    $('#project-zoom-tpl').fadeIn().addClass('active')
    // Open project
    $('[data-zoom="' + dataProject + '"]').fadeIn()
  }, 400)

  setTimeout(function () {
    // Reset window scroll
    window.scrollTo(0, 0)
  }, 600)

  e.preventDefault()
})

// Click to close project
$('#close-project').on('click', function (e) {
  $('#project-zoom-tpl').fadeOut().removeClass('active')
  $('[data-zoom]').fadeOut()
  // Remove project img
  // Show projects preview
  $('#projects-wrapper').fadeIn()
  // Remove zoomed state
  $('body').removeClass('zoomed')
  // Init scrollify
  $.scrollify({
    section: '.magnetic',
    scrollSpeed: 700
  })

  e.preventDefault()
})