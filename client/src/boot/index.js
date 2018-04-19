/* SilverWare LinkedIn Boot
===================================================================================================================== */

import $ from 'jquery';

$(function() {
  
  // Set Language:
  
  var lang = 'en_US';
  
  if ($('body').is('[data-linkedin-lang]')) {
    lang = $('body').data('linkedin-lang');
  }
  
  // Load LinkedIn Platform (this is awful, but then, so is LinkedIn JavaScript... not even valid or compliant!):
   
  $('body').prepend('<script src="//platform.linkedin.com/in.js" type="text/javascript">lang: ' + lang + '</script>');
  
});
