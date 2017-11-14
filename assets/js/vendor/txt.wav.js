(function() {
  'use strict';

  var textWaveElements = document.getElementsByClassName('txtwav');

  function spanWrapHelper(el, text, fontClass) {
    for(var i = 0; i < text.length; i++) {
      var span = document.createElement('span');
      span.innerHTML = text[i] === ' ' ? '&nbsp;' : text[i];
      span.className += ' ' + fontClass;
      el.appendChild(span);
    }
  }

  for (var i = 0, length = textWaveElements.length; i < length; i++) {
    var el = textWaveElements[i],
      text = el.textContent.trim(),
      fontClass = el.getAttribute('data-font');

    el.innerHTML = '';
    spanWrapHelper(el, text, fontClass);
  }
}());
