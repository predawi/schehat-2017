/**
 * Projects
 */

// Dependencies
var $ = require('jquery')
var CanvasSlideshow = require('./water')
require('../vendor/magnetic-scroll')

var dataProject, dataBg, projects

projects = $('.project-link')

// Click on project
projects.on('click', function (e) {
  // Get some datas
  dataProject = $(this).data('project')
  dataBg = $(this).data('bg')
  // Prevent Scrollify
  $.scrollify.destroy()
  // Prepare zoom state
  $('body').addClass('zoomed')
  // Hide projects thumbs
  $('#projects-wrapper').fadeOut()
  // Set project img in background
  // Select all your images

  var spriteImagesSrc = []
  spriteImagesSrc.push(dataBg)

  var initCanvasSlideshow = new CanvasSlideshow({
    sprites: spriteImagesSrc,
    displacementImage: 'http://localhost/schehat/assets/img/water.jpg',
    autoPlay: true,
    autoPlaySpeed: [10, 3],
    displaceScale: [200, 70],
    fullScreen: true,
    stageWidth: 800,
    stageHeight: 600,
    displaceAutoFit: false
  })

  setTimeout(function () {
    // Prepare zoom section
    $('#project-zoom-tpl').fadeIn().addClass('active')
    // Reset window scroll
    window.scrollTo(0, 0)
    // Open project
    $('[data-zoom="' + dataProject + '"]').fadeIn()
  }, 300)

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