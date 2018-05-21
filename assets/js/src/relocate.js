/**
 * Relocate
 */
// Dependencies
const $ = require('jquery')

if (!matchMedia('only screen and (min-width: 1024px)').matches) {
  moveElementsMobile()
} else {
  moveElementsDesktop()
}

function moveElementsMobile (breakpoint) {
  $('#menu').insertAfter('#about-section')
}

function moveElementsDesktop (breakpoint) {
  $('#menu').insertBefore('#visual-bg')
}