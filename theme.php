<?php

	if(!defined('e107_INIT'))
	{
		exit();
	}

// e107::lan('theme');

	e107::meta('viewport', 'width=device-width, initial-scale=1.0');
//e107::meta('apple-mobile-web-app-capable','yes');

	e107::css("url", "https://bootswatch.com/4/slate/bootstrap.min.css");


	$inlinecss = e107::pref('theme', 'inlinecss', false);
	if($inlinecss)
	{
		e107::css("inline", $inlinecss);
	}
	$inlinejs = e107::pref('theme', 'inlinejs');
	if($inlinejs)
	{
		e107::js("footer-inline", $inlinejs);
	}

	define('BODYTAG', '<body id="page-top" class="layout-' . THEME_LAYOUT . '" />');
	e107::js("theme", 'custom.js', 'jquery');


	class bootstrap4_theme
	{

		/**
		 * @param string $text
		 * @return string without p tags added always with bbcodes
		 * note: this solves W3C validation issue and CSS style problems
		 * use this carefully, mainly for custom menus, let decision on theme developers
		 */

		function remove_ptags($text = '') // FIXME this is a bug in e107 if this is required.
		{

			$text = str_replace(array("<!-- bbcode-html-start --><p>", "</p><!-- bbcode-html-end -->"), "", $text);

			return $text;
		}


		function tablestyle($caption, $text, $mode, $options = array())
		{

			$style = varset($options['setStyle'], 'default');
			
			//this should be displayed only in e_debug mode
      echo "\n<!-- tablestyle initial:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->\n\n";


			if($mode == 'wmessage')
			{
				$style = '';
			}
 
			
			if($style === 'listgroup' && empty($options['list']))
			{
				$style = 'cardmenu';
			}

 
			if($style === 'cardmenu' && $options['list'] == 1 )
			{
				$style = 'listgroup';
			}
			
			/* Changing card look via prefs */
			if(!e107::pref('theme', 'cardmenu_look') && $style == 'cardmenu')
			{
				$style = 'menu';
			}

			echo "\n<!-- tablestyle:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->\n\n";

			echo "\n<!-- \n";

			echo json_encode($options, JSON_PRETTY_PRINT);

			echo "\n-->\n\n";

			switch($style)
			{

				/*  case 'home':
					  echo $caption;
					  echo $text;
				  break;

				  case 'menu':
					  echo $caption;
					  echo $text;
				  break;

				  case 'full':
					  echo $caption;
					  echo $text;
				  break;
		*/

				case 'bare':
					echo $this->remove_ptags($text);
					break;


				case 'nocaption':
				case 'main':
					echo $text;;
					break;


				case 'menu':
					echo '<div class=" mb-4">';
					if(!empty($caption))
					{
						echo '<h5 >' . $caption . '</h5>';
					}
					echo $text;
					echo '</div>';
					break;


				case 'cardmenu':
					echo '<div class="card mb-4">';
					if(!empty($caption))
					{
						echo '<h5 class="card-header">' . $caption . '</h5>';
					}
					echo '<div class="card-body">';
					echo $text;
					echo '</div>
						</div>';
					break;


				case 'listgroup': 
					echo '<div class="card mb-4">';
					if(!empty($caption))
					{
						echo '<h5 class="card-header">' . $caption . '</h5>';
					}
					echo $text;

					if(!empty($options['footer'])) // XXX @see news-months menu.
			        {
			            echo '<div class="card-footer">
		                      '.$options['footer'].'
		                    </div>';
			        }


					echo '</div>';
					break;

			   default:

					// default style
					// only if this always work, play with different styles

					if(!empty($caption))
					{
						echo '<div class="my-4">' . $caption . '</div>';
					}
					echo $text;

					return;
			}

		}

	}
