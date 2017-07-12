<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2014 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

if (!defined('e107_INIT')) { exit; }

// v2.x Standard 
class unitexe_user // plugin-folder + '_user'
{		
		
	function profile($udata)  // display on user profile page.
	{
			// WIP - LaocheXe			Was: 'text' - changed to 'image' - url e_PLUGIN_ABS might need to be updated, unitexe/unitexe.php will be changed to rank.php?then rank value
			// More to come - LaocheXe
		$var = array(
			0 => array('label' => "Rank:", 'image' => "", 'url'=> e_PLUGIN_ABS."unitexe/unitexe.php")
		);
		
		return $var;
	}
	
}