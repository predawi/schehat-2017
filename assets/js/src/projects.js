/**
 * Projects
 */

// Dependencies
var $ = require('jquery')
var waypoint = require('../vendor/waypoint')

// var initWater = require('./water')

var dataProject, dataBg, projects
var mediaQuery = window.matchMedia('(min-width: 1024px)')
mediaQuery.addListener(setWaypoints)

projects = $('.project__link')

// Click on project
projects.on('click', function (e) {
  // Get some datas
  dataProject = $(this).data('project')
  dataBg = $(this).data('bg')

  // Set project img in background
  // initWater(dataBg)
  $('#background-holder').css('background-color', dataBg)

  // Prepare zoom state
  $('body').addClass('zoomed')

  setTimeout(function () {
    // Hide projects thumbs
    $('#projects-wrapper').fadeOut()
  }, 0)

  setTimeout(function () {
    // Prepare zoom section
    $('#project-zoom-tpl').fadeIn().addClass('active')
    // Open project
    $('[data-zoom="' + dataProject + '"]').fadeIn()
  }, 50)

  setTimeout(function () {
    $('body').addClass('appeared')
  }, 100)

  setTimeout(function () {
    // Reset window scroll
    window.scrollTo(0, 0)
  }, 150)

  setTimeout(function () {
    setWaypoints(mediaQuery, dataProject)
  }, 600)

  e.preventDefault()
})

// Click to close project
$('#nav-back-to-work').on('click', function (e) {
  // Destroy waypoints
  var len = 0
  for (var o in waypoint) {
    len++
  }
  for (var $i = 0; $i < len; $i++) {
    waypoint[$i].destroy()
  }
  // Reset and stop videos
  $('.project-zoom-tpl.active video')[0].pause()
  $('.project-zoom-tpl.active video')[0].currentTime = 0
  // Hide zoom section
  $('#project-zoom-tpl').fadeOut().removeClass('active')
  $('[data-zoom]').fadeOut()
  // Remove project img
  $('#background-holder').css('background-color', 'none')
  // Show projects preview
  $('#projects-wrapper').fadeIn()
  // Remove zoomed state
  $('body').removeClass('zoomed appeared')

  e.preventDefault()
})

var elStrat = []
function setWaypoints (mediaQuery, dataProject) {
  if (mediaQuery.matches) {
    $('[data-zoom="' + dataProject + '"] video').each(function (index) {
      elStrat[index] = $(this)

      // Attach waypoint to circles
      waypoint[index] = new Waypoint({
        element: $(this),
        offset: '75%',
        handler: function () {
          $('[data-zoom="' + dataProject + '"] video').each(function (index) {
            $(this)[0].pause()
          })
          elStrat[index][0].play()
        }
      })
    })
  }
}