<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51352352-1', 'auto');
  ga('send', 'pageview');

</script>

<?php

// =============================================================================
// HEADER.PHP
// -----------------------------------------------------------------------------
// The site header. Variable output across different stacks.
//
// Content is output based on which Stack has been selected in the Customizer.
// To view and/or edit the markup of your Stack's index, first go to "views"
// inside the "framework" subdirectory. Once inside, find your Stack's folder
// and look for a file called "wp-header.php," where you'll be able to find the
// appropriate output.
// =============================================================================

?>

<?php x_get_view( x_get_stack(), 'wp', 'header' ); ?>