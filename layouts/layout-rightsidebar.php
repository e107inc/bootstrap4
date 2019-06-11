<?php

//https://github.com/BlackrockDigital/startbootstrap-blog-home
//https://github.com/BlackrockDigital/startbootstrap-modern-business/blob/master/blog-home-1.html
//https://github.com/BlackrockDigital/startbootstrap-modern-business/blob/master/blog-post.html

$LAYOUT['rightsidebar'] =  '   
{SETSTYLE=default}
<!-- Page Content -->
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Blog Home One
      <small>Subheading</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">Blog Home 1</li>
    </ol>
    
	<div class="row">
		<div class="col-md-8">
			{ALERTS}
			{---}
		</div>
		<div class="col-md-4">
			<div class="menu"> 
				{SETSTYLE=cardmenu}
				{MENU=1}  
			</div>
		</div>
	</div>
</div> ';