<?php

if (!defined('e107_INIT')) { exit; }    

e107::themeLan('admin','bootstrap4', true);

// Dummy Theme Configuration File.
class theme_config implements e_theme_config
{

	function __construct()
	{
		
	}


	function config()
	{
		// v2.1.4 format.

		$fields = array(
			'contact_map'  	=> array('title' => LAN_THEMEPREF_03, 'type'=>'textarea', 'writeParms'=>array('size'=>'block-level'),'help'=>''),			 
		);

		return $fields;

	}

	function help()
	{
	 	return '';
	}
	
	function process()
	{
	 	return '';
	}
}

