$(document).ready(function() {
/* wrap <a> tags around current paging number */
$('li.current').wrapInner('<a href="#"></a>'); 
/* datepicker */
$('#datepicker').datepicker({ dateFormat: "yy-mm-dd" });
});
