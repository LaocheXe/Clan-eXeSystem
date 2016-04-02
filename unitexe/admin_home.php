<?php

// Generated e107 Plugin Admin Area 

require_once('../../class2.php');
if (!getperms('P')) 
{
	e107::redirect('admin');
	exit;
}



class clanexe_adminArea extends e_admin_dispatcher
{

	protected $modes = array(	
	
		'main'	=> array(
			'controller' 	=> 'clanexe_home_ui',
			'path' 			=> null,
			'ui' 			=> 'clanexe_home_form_ui',
			'uipath' 		=> null
		),
		

	);	
	
	
	protected $adminMenu = array(

		'main/list'			=> array('caption'=> LAN_MANAGE, 'perm' => 'P'),
		'main/catagorize'		=> array('caption'=> 'List Catagories', 'perm' => 'P'),
		'main/create'		=> array('caption'=> 'List Creations', 'perm' => 'P')

		// 'main/custom'		=> array('caption'=> 'Custom Page', 'perm' => 'P')
	);

	protected $adminMenuAliases = array(
		'main/edit'	=> 'main/list'				
	);	
	
	protected $menuTitle = 'Clan eXeSystem';
}

				
class clanexe_home_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Clan eXeSystem';
		protected $pluginName		= 'clanexe';
	//	protected $eventName		= 'clanexe-clanexe_awards'; // remove comment to enable event triggers in admin. 		
	//	protected $table			= 'clanexe_awards';
	//	protected $pid				= 'id';
	//	protected $perPage			= 10; 
	//	protected $batchDelete		= true;
	//	protected $batchCopy		= true;		
	//	protected $sortField		= 'somefield_order';
	//	protected $orderStep		= 10;
	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	

		
		
		
		protected $fieldpref = array('name', 'img');

	//	protected $preftabs        = array('General', 'Other' );
		protected $prefs = array(
		); 

	
		public function init()
		{
			// Set drop-down values (if any). 
	
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data)
		{
			return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}		
		
		public function catagorizePage()
		{
			$mainadmin = e_SELF.'/../admin_catagorize.php';
  
    		header("location:".$mainadmin); exit; 
		}
		
		public function createPage()
		{
			$mainadmin = e_SELF.'/../admin_create.php';
  
    		header("location:".$mainadmin); exit; 
		}	
	/*	
		// optional - a custom page.  
		public function customPage()
		{
			$text = 'Hello World!';
			return $text;
			
		}
	*/
			
}
				


class clanexe_home_form_ui extends e_admin_form_ui
{

}		
		
		
new clanexe_adminArea();

require_once(e_ADMIN."auth.php");
e107::getAdminUI()->runPage();

require_once(e_ADMIN."footer.php");
exit;

?>