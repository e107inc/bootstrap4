<?php 

/* by default it is set true, cancel it, it's fixed with custom headers,  with true, it ignores the rest of layouts */
define('e_IFRAME','0');   

 
$LAYOUT['singlelogin'] = '
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            {SETSTYLE=singlelogin}
            {ALERTS}
	          {---}
          </div>
        </div>
      </div>
    </div>
  </div>
';