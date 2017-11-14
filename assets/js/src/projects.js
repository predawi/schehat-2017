/**
 * Projects
 */

// Dependencies
var $ = require('jquery')
var activateMagnetism = require('./scroll')

// var initWater = require('./water')
require('../vendor/magnetic-scroll')

var dataProject, dataBg, projects
var mediaQuery = window.matchMedia('(min-width: 1024px)')

projects = $('.project-link')

// Click on project
projects.on('click', function (e) {
  // Get some datas
  dataProject = $(this).data('project')
  dataBg = $(this).data('bg')

  // Set project img in background
  // initWater(dataBg)
  $('#background-holder').css('background-image', 'url(../assets/img/' + dataBg + ')')

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
  $('#background-holder').css('background-image', 'none')
  // Show projects preview
  $('#projects-wrapper').fadeIn()
  // Remove zoomed state
  $('body').removeClass('zoomed')
  // Init scrollify
  // Test media query
  activateMagnetism(mediaQuery)

  e.preventDefault()
})