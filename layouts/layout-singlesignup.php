<?php 
 
/* by default it is set true, cancel it, it's fixed with custom headers,  with true, it ignores the rest of layouts */
/* in case this layout is used for login page */ 
define('e_IFRAME','0');   

$LAYOUT['singlesignup'] = '
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
               {SETSTYLE=singlesignup}
               {---}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>';