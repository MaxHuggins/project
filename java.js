$(function() {
  $('.highlight').codemirror({
    mode: 'javascript',
    runmode: true
  });
  var editor1 = $('.editor').codemirror({
    mode: 'javascript',
    lineNumbers: true
  });
});