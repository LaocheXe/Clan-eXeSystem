<?php
if (!defined('e107_INIT')) { exit; }


class unitexe_dashboard // include plugin-folder in the name.
{
	
	function chart()
	{
		return false;
	}
	
	
	function status() // Status Panel in the admin area
	{
		// Will be used to show how many applications, and loa's, or request have been sent
		$var[0]['icon'] 	= "<img src='' alt='' />";
		$var[0]['title'] 	= "My Title";
		$var[0]['url']		= e_PLUGIN_ABS."unitexe/unitexe.php";
		$var[0]['total'] 	= 10;

		return $var;
	}	
	
	
	function latest() // Latest panel in the admin area.
	{
		// Will be used to show any current applications that have not been accepted/denied
		$var[0]['icon'] 	= "<img src='' alt='' />";
		$var[0]['title'] 	= "My Title";
		$var[0]['url']		= e_PLUGIN_ABS."unitexe/unitexe.php";
		$var[0]['total'] 	= 10;

		return $var;
	}	
	
	
}
?>