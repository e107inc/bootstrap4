<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * e107 Bootstrap Theme Shortcodes. 
 *
*/


class theme_shortcodes extends e_shortcode
{

	/**
	 * Special Header Shortcode for dynamic menuarea templates.
	 * @shortcode {---HEADER---}
	 * @return string
	 */
	function sc_header()
	{
		return "<!-- Dynamic Header template -->\n";
	}


	/**
	 * Special Footer Shortcode for dynamic menuarea templates.
	 * @shortcode {---FOOTER---}
	 * @return string
	 */
	function sc_footer()
	{
		return "<!-- Dynamic Footer template -->\n";
/*
		return '
			<footer class="footer py-4 bg-dark text-white">
			<div class="container">       		
				<div class="content">         			
					<div class="row">           				
						<div class="col-md-3">   <h4>Navigation</h4>{NAVIGATION: type=main&layout=alt} 
							{MENUAREA=14}
						</div>
						<div class="col-md-3">   <h4>Follow Us</h4>{XURL_ICONS: template=footer}
							{MENUAREA=15}
						</div>           				
						<div class="col-md-3">  
							{MENUAREA=16}
						</div>           				
						<div class="col-md-3">  
							{MENUAREA=17}
						</div>                 			
					</div>       		
				</div>       		
				<hr>   	 
				<div class="container">    {NAVIGATION: type=main&layout=footer} </div>
				<div class="container">      
					<p class="m-0 text-center text-white">{SITEDISCLAIMER}</p>
				</div>    
				<!-- /.container -->
				</div>
		</footer>';*/


	}






}






