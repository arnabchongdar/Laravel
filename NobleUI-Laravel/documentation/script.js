(function($) {
  'use strict';

  $('body').scrollspy({ target: '#sidebarNav' })
  function qsa(sel) {
      return Array.apply(null, document.querySelectorAll(sel));
  }
  qsa(".code-editable").forEach(function (editorEl) {
    CodeMirror.fromTextArea(editorEl, {
      theme: "dracula",
      lineNumbers: true
    });
  });
  qsa(".code-non-editable").forEach(function (editorEl) {
      CodeMirror.fromTextArea(editorEl, {
        mode: "javascript",
        theme: "xq-light",
        lineNumbers: false,
        readOnly: true,
        maxHighlightLength: 0,
        workDelay: 0
      });
    });   
    
  // Buy Now button. 
  $("body").prepend('\
    <div class="buy-now-wrapper">\
      <a href="https://1.envato.market/nobleui_laravel" target="_blank" class="btn btn-primary text-white font-weight-bold btn-icon-text">\
        Buy Now\
      </a>\
      <a href="https://nobleui.com/laravel/#products" target="_blank" class="btn btn-danger text-white font-weight-bold btn-icon-text">\
        View Demos\
      </a>\
    </div>\
  ');

})(jQuery);    