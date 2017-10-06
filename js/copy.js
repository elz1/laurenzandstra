const $ = require('jquery');

function copyToClipboard(element) {
  var temp = $('<input>');
  $('body').append(temp);
  temp.val($(element).text()).select();
  document.execCommand('copy');
  temp.remove();
}

export default function copySSH() {
  $( '#copy' ).click(function() {
    copyToClipboard('#ssh');
    $('.isa_success').fadeIn().delay(3000).fadeOut();
  });
}