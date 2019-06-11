<?php 

// instead featurebox menuarea and insert shortcode via menu manager
$LAYOUT['homepage'] =  '
  {FEATUREBOX}    
  <!-- Page Content -->
  <div class="container">
   {ALERTS} 
   {SETSTYLE=section}
   {MENU=1}
  </div>
';