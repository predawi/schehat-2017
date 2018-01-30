/**
 * Miscellaneous stuffs
 */
// Dependencies
const $ = require('jquery')
const Rellax = require('../vendor/rellax')

$(document).ready(function () {
  // Setup parallax for projects thumbnails
  var rellax = new Rellax('.rellax')

  let conversationalForm = window.cf.ConversationalForm.startTheConversation({
    formEl: document.getElementById('cf-form'),
    context: document.getElementById('about-section__chat'),
    submitCallback: function () {
      // be aware that this prevents default form submit.
      // let formData = conversationalForm.getFormData()
      let formDataSerialized = conversationalForm.getFormData(true)
      // console.log('Formdata:', formData)
      // console.log('Formdata, serialized:', formDataSerialized)

      $.ajax({
        type: 'POST',
        url: 'email.php',
        data: formDataSerialized,
        success: function (msg) {
          console.log('email sent')
          conversationalForm.addRobotChatResponse(
            'Got it, thanks !'
          )
          $('cf-input[tag-type="text"]').addClass('transparent')
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
          console.log(textStatus)
          console.log(errorThrown)
        }
      })
    }
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
