<?php
/***********************************/
//       www.defiantz.org          // 
//          ranks.php              //
//		   created by              //
//          LaocheXe               //
/***********************************/
if(!defined('e107_INIT'))
{
	require_once('../../class2.php');
}
if(!e107::isInstalled('unitexe'))
{
	header('location:'.e_BASE.'index.php');
	exit;	
}
require_once(HEADERF);

$sql  = e107::getDB();
$text = '';

//$sql->('ranks_exesystem', 'rank_id, rank_fullname, rank_shortname, rank_description, rank_image, rank_parent, rank_order');
/*
rank_id` int(10) NOT NULL AUTO_INCREMENT,
  `rank_fullname` varchar(250) NOT NULL,
  `rank_shortname` varchar(5) NOT NULL,
  `rank_description` text,
  `rank_image` varchar(255) DEFAULT NULL,
  `rank_parent` int(10) unsigned NOT NULL DEFAULT '0',
  `rank_order` int(10) unsigned NOT NULL DEFAULT '0',
 */

if($sql->select('ranks_exesystem', 'rank_id rank_fullname, rank_shortname, rank_description, rank_image, rank_parent, rank_order', true))
{
	//$rows = $sql->select('ranks_exesystem', '*');
	foreach($sql as $row)
	{
		if($row['rank_parent'] == '0')
		{
			$text .= $row['rank_fullname'].' '.$row['rank_id'];
		}
		else if($row['rank_parent'] == '1')
		{
			$text .= $row['rank_fullname'].' '.$row['rank_id'];
		}
		else if($row['rank_parent'] == '2')
		{
			$text .= $row['rank_fullname'].' '.$row['rank_id'];
		}
	}
}
e107::getRender()->tablerender('CAPTION', $text);
require_once(FOOTERF);






?>
