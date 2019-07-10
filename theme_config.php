<?php

if (!defined('e107_INIT')) { exit; }    

e107::themeLan('admin','bootstrap4', true);

if(isset($_POST['importThemeDemo']))
{
	$xmlArray = array();
	e107::getDebug()->log("Retrieving demo data from xml file");
	$themepath = e_THEME."bootstrap4/install/install.xml"; 
	$xmlArray = e107::getSingleton('xmlClass')->loadXMLfile($themepath); 
	$ret = e107::getSingleton('xmlClass')->e107Import($xmlArray);
	if($ret)
	{
		$mes = e107::getMessage();
		$mes->add("Importing Theme Demo Content:", E_MESSAGE_SUCCESS);
	}
	
	$mes->render();
}

// Dummy Theme Configuration File.
class theme_config implements e_theme_config
{

	function __construct()
	{
 
	}


	function config()
	{
		// v2.2.2  
		$bootswatch = array(
			"cerulean"=> 'Cerulean',
			"cosmo"=> 'Cosmo',
            "cyborg"=> 'Cyborg',
            "darkly"=> 'Darkly',
            "flatly"=> 'Flatly',
            "journal"=> 'Journal',
            "litera"=> 'Litera',
            "lumen"=> 'Lumen',
            "lux"=> 'Lux',
            "materia"=> 'Materia', 
            "minty"=> 'Minty', 
            "pulse"=> 'Pulse', 
            "sandstone"=> 'Sandstone',
            "simplex"=> 'Simplex',
            "sketchy"=> 'sketchy', 
            "slate"=> 'Slate',
            "solar"=> 'Solar',
            "spacelab"=> 'Spacelab',
            "superhero"=> 'Superhero',
            "united"=> 'United',
            "yeti"=> 'Yeti',
		);
		
		$previewLink = " <a class='btn btn-default btn-secondary e-modal' data-modal-caption=\"Use the 'Themes' menu to view the selection.\" href='http://bootswatch.com/default/'>".LAN_PREVIEW."</a>";

		$fields = array(
			'bootswatch'        => array('title'=>LAN_THEMEPREF_03, 'type'=>'dropdown', 'writeParms'=>array('optArray'=> $bootswatch, 'post'=>$previewLink, 'default'=>LAN_DEFAULT)),
			'map'  	=> array('title' => LAN_THEMEPREF_05, 'type'=>'textarea', 'writeParms'=>array('size'=>'block-level'),'help'=>''),	
			'inlinecss'  	=> array('title' => LAN_THEMEPREF_01, 'type'=>'textarea', 'writeParms'=>array('size'=>'block-level'),'help'=>''),
			'inlinejs'  	=> array('title' => LAN_THEMEPREF_02, 'type'=>'textarea', 'writeParms'=>array('size'=>'block-level'),'help'=>''),	
			'cardmenu_look' => array('title' => LAN_THEMEPREF_04, 'type'=>'boolean', 'writeParms'=>array('default'=>1),'help'=>''),			
 	
		);
		return $fields;
	}

	function help()
	{
		/* only if install.xml exists */
		/* check if all required plugins are installed */
		
		$text = "<div class='center buttons-bar'><form method='post' action='".e_SELF."?".e_QUERY."' id='core-db-import-form'>";
		$text .=  e107::getForm()->admin_button('importThemeDemo', 'Install Demo', 'other');
		$text .= '</form></div>';
 
	 	return $text;
	}
	
	function process()
	{
	 	return '';
	}

}

