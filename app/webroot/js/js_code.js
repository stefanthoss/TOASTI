$(function() {
  console.log('started jQuery');

  /* wrap <a> tags around current paging number */
//  $('li.active').wrapInner('<a href="#" />');

  /* datepicker */
  $('#datepicker').datepicker({ dateFormat: "yy-mm-dd" });
});
