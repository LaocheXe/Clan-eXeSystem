<?php

// Generated e107 Plugin Admin Area 

require_once('../../class2.php');
if (!getperms('P')) 
{
	e107::redirect('admin');
	exit;
}

// e107::lan('rosterexe',true);


class rosterexe_adminArea extends e_admin_dispatcher
{

	protected $modes = array(	
	
		'other1'	=> array(
			'controller' 	=> 'rostercat_exe_ui',
			'path' 			=> null,
			'ui' 			=> 'rostercat_exe_form_ui',
			'uipath' 		=> null
		),
		
		'other2'	=> array(
			'controller' 	=> 'mos_exe_ui',
			'path' 			=> null,
			'ui' 			=> 'mos_exe_form_ui',
			'uipath' 		=> null
		),
		
		'other3'	=> array(
			'controller' 	=> 'request_exe_ui',
			'path' 			=> null,
			'ui' 			=> 'request_exe_form_ui',
			'uipath' 		=> null
		),
		
		'other4'	=> array(
			'controller' 	=> 'rtype_exe_ui',
			'path' 			=> null,
			'ui' 			=> 'rtype_exe_form_ui',
			'uipath' 		=> null
		),
		
		'other5'	=> array(
			'controller' 	=> 'servicerecords_exe_ui',
			'path' 			=> null,
			'ui' 			=> 'servicerecords_exe_form_ui',
			'uipath' 		=> null
		),
		
		'other6'	=> array(
			'controller' 	=> 'promotions_exe_ui',
			'path' 			=> null,
			'ui' 			=> 'promotions_exe_form_ui',
			'uipath' 		=> null
		),
		

		'main'	=> array(
			'controller' 	=> 'roster_exe_ui',
			'path' 			=> null,
			'ui' 			=> 'roster_exe_form_ui',
			'uipath' 		=> null
		),
		

	);	
	
	
	protected $adminMenu = array(

		'other1/list'		=> array('caption'=> 'Roster Catagory List', 'perm' => 'P'),
		'other1/create'		=> array('caption'=> 'Create Roster Catagory', 'perm' => 'P'),
		'opt1'              => array('divider'=> true),
		'other2/list'		=> array('caption'=> 'MOS', 'perm' => 'P'),
		'other2/create'		=> array('caption'=> 'Create MOS', 'perm' => 'P'),
		'opt1'              => array('divider'=> true),
		'other3/list'		=> array('caption'=> 'Current Request', 'perm' => 'P'),
		'other3/create'		=> array('caption'=> 'Create Request Record', 'perm' => 'P'),
		'other4/list'		=> array('caption'=> 'Request Type', 'perm' => 'P'),
		'other4/create'		=> array('caption'=> 'Create Request Type', 'perm' => 'P'),
		'opt1'              => array('divider'=> true),
		'other5/list'		=> array('caption'=> 'Service Records', 'perm' => 'P'),
		'other5/create'		=> array('caption'=> 'Create Service Records', 'perm' => 'P'),
		'opt1'              => array('divider'=> true),
		'other6/list'		=> array('caption'=> 'Promotions', 'perm' => 'P'),
		'other6/create'		=> array('caption'=> 'Create Promotion', 'perm' => 'P'),
		'opt1'              => array('divider'=> true),
		'other2/list'		=> array('caption'=> 'MOS', 'perm' => 'P'),
		'main/list'			=> array('caption'=> 'Roster', 'perm' => 'P'),
		'main/create'		=> array('caption'=> 'Add to Roster', 'perm' => 'P'),

		// 'main/custom'		=> array('caption'=> 'Custom Page', 'perm' => 'P')
	);

	protected $adminMenuAliases = array(
		'main/edit'	=> 'main/list'				
	);	
	
	protected $menuTitle = 'Roster';
}




				
class rostercat_exe_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Roster';
		protected $pluginName		= 'rosterexe';
	//	protected $eventName		= 'rosterexe-rostercat_exe'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'rostercat_exe';
		protected $pid				= 'rocat_id';
		protected $perPage			= 25; 
		protected $batchDelete		= true;
	//	protected $batchCopy		= true;		
		protected $sortField		= 'rocat_order';
		protected $sortParent       = 'rocat_parent';
		protected $orderStep		= 25;
	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
		protected $listQry      	= "SELECT a. *, CASE WHEN a.rocat_parent = 0 THEN a.rocat_order ELSE b.rocat_order + (( a.rocat_order)/1000) END AS Sort FROM `#rostercat_exe` AS a LEFT JOIN `#rostercat_exe` AS b ON a.rocat_parent = b.rocat_id ";
	
		protected $listOrder		= 'Sort,rocat_order';
	
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'rocat_id' =>   array ( 'title' => LAN_ID, 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'rocat_name' =>   array ( 'title' => LAN_TITLE, 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'rocat_tags' =>   array ( 'title' => 'Tags', 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'rocat_description' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'rocat_image' =>   array ( 'title' => LAN_IMAGE, 'type' => 'image', 'data' => 'str', 'width' => 'auto', 'help' => '', 'readParms' => 'thumb=80x80', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'rocat_parent' =>   array ( 'title' => 'Parent', 'type' => 'dropdown', 'data' => 'int', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'rocat_sub'         =>   array ( 'title' => 'SubCat of', 'type' => 'dropdown', 'data' => 'int', 'width' => 'auto', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'center', 'thclass' => 'center',  ),
		  'rocat_order' =>   array ( 'title' => LAN_ORDER, 'type' => 'number', 'data' => 'int', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'options' =>   array ( 'title' => LAN_OPTIONS, 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1', 'sort'=>1  ),
		);		
		
		protected $fieldpref = array('rocat_name', 'rocat_parent', 'Sort', 'rocat_order');
		
		public $rocatParents = array();
		
		private function checkOrder()
		{
			$sql = e107::getDb();
			$sql2 = e107::getDb('sql2');
			$count = $sql->select('rostercat_exe', 'rocat_id', 'rocat_order = 0');

			if($count > 1)
			{
				$sql->gen("SELECT rocat_id,rocat_name,rocat_parent,rocat_order FROM `#rostercat_exe` ORDER BY COALESCE(NULLIF(rocat_parent,0), rocat_id), rocat_parent > 0, rocat_order ");

				$c = 0;
				while($row = $sql->fetch())
				{
					if($row['rocat_parent'] == 0)
					{
						$c = $c + 100;
					}
					else
					{
						$c = $c+1;
					}

					$sql2->update('rostercat_exe', 'rocat_order = '.$c.' WHERE rocat_id = '.$row['rocat_id'].' LIMIT 1');
				}

			}
		}
	
		public function init()
		{
			// Set drop-down values (if any). 
			//$this->fields['rocat_parent']['writeParms']['optArray'] = array('rocat_parent_0','rocat_parent_1', 'rocat_parent_2'); // Example Drop-down array. 
			$this->checkOrder();
			if($this->getAction() == 'edit')
			{
				$this->fields['rocat_order']['noedit'] = true;
			}
			$data = e107::getDb()->retrieve('rostercat_exe', 'rocat_id,rocat_name,rocat_parent', 'rocat_id != 0',true);
			$this->rocatParents[0] = "(New Parent)";
			$rocatSubParents = array();

			foreach($data as $val)
			{
				$id = $val['rocat_id'];

				if($val['rocat_parent'] == 0)
				{
					$this->rocatParents[$id] = $val['rocat_name'];
				}
				else
				{
					$rocatSubParents[$id] = $val['rocat_name'];
				}

			}

			$this->fields['rocat_parent']['writeParms'] = $this->rocatParents;
			$this->fields['rocat_sub']['writeParms']['optArray'] = $rocatSubParents;
			$this->fields['rocat_sub']['writeParms']['default'] = 'blank';
		}

		
		// ------- Customize Create --------
		public function afterSort($result, $selected)
		{
			return;
			$sql = e107::getDb();
			$data2 = $sql->retrieve('rostercat_exe','rocat_id,rocat_name,rocat_parent,rocat_order','rocat_parent = 0',true);
			foreach($data2 as $val)
			{
				$id = $val['rocat_id'];
				$parent[$id] = $val['rocat_order'];

			}
			$previous = 0;

			$data = $sql->retrieve('rostercat_exe','*','rocat_parent != 0 ORDER BY rocat_order',true);
			foreach($data as $row)
			{
				$p = $row['rocat_parent'];

				if($p != $previous)
				{
					$c = $parent[$p];
				}

				$c++;
				$previous = $p;
				
				$sql->update('rostercat_exe','rocat_order = '.$c.' WHERE rocat_id = '.intval($row['rocat_id']).' LIMIT 1');
			}			
		}
		
		public function beforeCreate($new_data,$old_data)
		{
			$sql = e107::getDb();
			$parentOrder = $sql->retrieve('rostercat_exe','rocat_order','rocat_id='.$new_data['rocat_parent']." LIMIT 1");

			$new_data['rocat_order'] = $parentOrder + 50;
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
		
			
	/*	
		// optional - a custom page.  
		public function customPage()
		{
			$text = 'Hello World!';
			return $text;
			
		}
	*/
			
}
				


class rostercat_exe_form_ui extends e_admin_form_ui
{
	function rocat_name($curVal,$mode,$parm)
	{
			$frm = e107::getForm();
			if($mode == 'read')
			{
				$parent 	= $this->getController()->getListModel()->get('rocat_parent');
				$id			= $this->getController()->getListModel()->get('rocat_id');

				$level = 1;

				$linkQ = e_SELF."?searchquery=&filter_options=page_chapter__".$id."&mode=page&action=list";
				$level_image = $parent ? '<img src="'.e_IMAGE_ABS.'generic/branchbottom.gif" class="icon" alt="" style="margin-left: '.($level * 20).'px" />&nbsp;' : '';

				return ($parent) ?  $level_image.$curVal : $curVal;
			}

			if($mode == 'write')
			{
				return $frm->text('rocat_name',$curVal,255,'size=xxlarge');
			}

			if($mode == 'filter')
			{
				return;
			}
			if($mode == 'batch')
			{
				return;
			}

			if($mode == 'inline')
			{
				$parent 	= $this->getController()->getListModel()->get('rocat_parent');
				if(empty($parent))
				{
					return array('inlineType'=>'text');
				}

				return false;
			}
		}

		// Custom Method/Function
		function rocat_parent($curVal,$mode)
		{
			$frm = e107::getForm();

			switch($mode)
			{
				case 'read': // List Page
					return $curVal;
					break;

				case 'write': // Edit Page
					return $frm->text('rocat_parent',$curVal);
					break;

				case 'filter':
				case 'batch':
				//	return  $array;
					break;
		}
	}
}		
		

				
class roster_exe_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Roster';
		protected $pluginName		= 'rosterexe';
	//	protected $eventName		= 'rosterexe-roster_exe'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'roster_exe';
		protected $pid				= 'rost_id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
	//	protected $batchCopy		= true;		
	//	protected $sortField		= 'somefield_order';
	//	protected $orderStep		= 10;
	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'rost_id DESC';
	
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'rost_id' =>   array ( 'title' => LAN_ID, 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'rank_id' =>   array ( 'title' => 'Rank', 'type' => 'dropdown', 'data' => 'int', 'width' => '5%', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'user_id' =>   array ( 'title' => 'User', 'type' => 'dropdown', 'data' => 'int', 'width' => '5%', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'rocat_id' =>   array ( 'title' => 'Roster Catagories', 'type' => 'dropdown', 'data' => 'int', 'width' => '5%', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
/*		  'pos_id' =>   array ( 'title' => 'Position', 'type' => 'dropdown', 'data' => 'int', 'width' => '5%', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'award_id' =>   array ( 'title' => 'Awards', 'type' => 'method', 'data' => 'str', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'badge_id' =>   array ( 'title' => 'Badges', 'type' => 'method', 'data' => 'str', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'medal_id' =>   array ( 'title' => 'Medals', 'type' => 'method', 'data' => 'str', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'patch_id' =>   array ( 'title' => 'Patches', 'type' => 'method', 'data' => 'str', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'pin_id' =>   array ( 'title' => 'Pins', 'type' => 'method', 'data' => 'str', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'qual_id' =>   array ( 'title' => 'Qualifications', 'type' => 'method', 'data' => 'str', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'ribbon_id' =>   array ( 'title' => 'Ribbons', 'type' => 'method', 'data' => 'str', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'train_id' =>   array ( 'title' => 'Trainings', 'type' => 'method', 'data' => 'str', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
*/		  

		  'enlistment_date' =>   array ( 'title' => 'Enlistment Date',  'type' => 'datestamp', 'data' => 'int', 'width' => 'auto', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'induction_date' =>   array ( 'title' => 'Induction Date',  'type' => 'datestamp', 'data' => 'int', 'width' => 'auto', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'recruiter_id' =>   array ( 'title' => 'Recruiter', 'type' => 'dropdown', 'data' => 'int', 'width' => '5%', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'recruiting_medium' =>   array ( 'title' => 'Recruiting Medium', 'type' => 'text', 'data' => 'int', 'width' => '5%', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'application_id' =>   array ( 'title' => 'Application', 'type' => 'dropdown', 'data' => 'int', 'width' => '5%', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'status_id' =>   array ( 'title' => 'Status', 'type' => 'dropdown', 'data' => 'int', 'width' => '5%', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'mos_id' =>   array ( 'title' => 'MOS', 'type' => 'dropdown', 'data' => 'int', 'width' => '5%', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'serial' =>   array ( 'title' => 'Serial', 'type' => 'text', 'data' => 'int', 'width' => '5%', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'supervisor' =>   array ( 'title' => 'Supervisor', 'type' => 'dropdown', 'data' => 'int', 'width' => '5%', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
//		  'admin_unit' =>   array ( 'title' => 'Roster Catagories', 'type' => 'dropdown', 'data' => 'int', 'width' => '5%', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
//		  'timezone' =>   array ( 'title' => 'Roster Catagories', 'type' => 'dropdown', 'data' => 'int', 'width' => '5%', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
//		  'country' =>   array ( 'title' => 'Roster Catagories', 'type' => 'dropdown', 'data' => 'int', 'width' => '5%', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),

		  'options' =>   array ( 'title' => LAN_OPTIONS, 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array('rank_id', 'user_id', 'rocat_id'/*, 'pos_id'*/);
		

	//	protected $preftabs        = array('General', 'Other' );
		protected $prefs = array(
		); 

	
		public function init()
		{
			// Set drop-down values (if any). 
			//$this->fields['rank_id']['writeParms']['optArray'] = array('rank_id_0','rank_id_1', 'rank_id_2'); // Example Drop-down array. 
			//$this->fields['rocat_id']['writeParms']['optArray'] = array('rocat_id_0','rocat_id_1', 'rocat_id_2'); // Example Drop-down array. 
			//$this->fields['pos_id']['writeParms']['optArray'] = array('pos_id_0','pos_id_1', 'pos_id_2'); // Example Drop-down array. 
			$sql = e107::getDb();
			$this->user_id[0] = 'Select User';
			if($sql->select("user", "*")) { while ($row = $sql->fetch()) {
				$this->user_id[$row['user_id']] = $row['user_name']; } 	} 
        		$this->fields['user_id']['writeParms'] = $this->user_id;
				
			$sql2 = e107::getDB()->retrieve('ranks_exesystem', 'rank_id,rank_fullname,rank_parent', 'rank_id != 0',true);
			$this->rank_id[0] = 'Select Rank';
			foreach($sql2 as $val)
			{
				$id = $val['rank_id'];

				if($val['rank_parent'] >= 1)
				{
					$this->rank_id[$id] = $val['rank_fullname'];
				}
			}
			$this->fields['rank_id']['writeParms'] = $this->rank_id;
	
			$sql3 = e107::getDB();
			$this->rocat_id[0] = 'Select Section';
			if($sql3->select("rostercat_exe", "*")) { while ($row3 = $sql3->fetch()) {
				$this->rocat_id[$row3['rocat_id']] = $row3['rocat_name']; }  }
				$this->fields['rocat_id']['writeParms'] = $this->rocat_id;	
	
	        $sql4 = e107::getDB();
			$this->status_id[0] = 'Select Status';
			if($sql4->select("status_exesystem", "*")) { while ($row4 = $sql4->fetch()) {
				$this->status_id[$row4['status_id']] = $row4['status']; }  }
				$this->fields['status_id']['writeParms'] = $this->status_id;	
				
			$sql5 = e107::getDB();
			$this->application_id[0] = 'Select Application';
			if($sql5->select("application_exe", "*")) { while ($row5 = $sql5->fetch()) {
				$this->application_id[$row5['application_id']] = $row5['application_id']; }  }
				$this->fields['application_id']['writeParms'] = $this->application_id;
				
			$sql6 = e107::getDB();
			$this->mos_id[0] = 'Select MOS';
			if($sql6->select("mos_exe", "*")) { while ($row6 = $sql6->fetch()) {
				$this->mos_id[$row6['mos_id']] = $row6['mos']; }  }
				$this->fields['mos_id']['writeParms'] = $this->mos_id;
				
			$sql7 = e107::getDB();
			$this->supervisor[0] = 'Select Supervisor';
			if($sql7->select("user", "*")) { while ($row7 = $sql6->fetch()) {
				$this->supervisor[$row7['user_id']] = $row7['user_name']; }  }
				$this->fields['user_id']['writeParms'] = $this->supervisor;
				
			$sql8 = e107::getDb();
			$this->recruiter_id[0] = 'Select Recruiter';
			if($sql8->select("user", "*")) { while ($row8 = $sql8->fetch()) {
				$this->recruiter_id[$row8['user_id']] = $row8['user_name']; } 	} 
        		$this->fields['user_id']['writeParms'] = $this->recruiter_id;
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data,$old_data)
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
		
			
	/*	
		// optional - a custom page.  
		public function customPage()
		{
			$text = 'Hello World!';
			return $text;
			
		}
	*/
			
}
				


class roster_exe_form_ui extends e_admin_form_ui
{

	
	// Custom Method/Function 
	function award_id($curVal,$mode)
	{
		$frm = e107::getForm();		
		 		
		switch($mode)
		{
			case 'read': // List Page
				return $curVal;
			break;
			
			case 'write': // Edit Page
				return $frm->text('award_id',$curVal, 255, 'size=large');
			break;
			
			case 'filter':
			case 'batch':
				return  array();
			break;
		}
	}

	
	// Custom Method/Function 
	function badge_id($curVal,$mode)
	{
		$frm = e107::getForm();		
		 		
		switch($mode)
		{
			case 'read': // List Page
				return $curVal;
			break;
			
			case 'write': // Edit Page
				return $frm->text('badge_id',$curVal, 255, 'size=large');
			break;
			
			case 'filter':
			case 'batch':
				return  array();
			break;
		}
	}

	
	// Custom Method/Function 
	function medal_id($curVal,$mode)
	{
		$frm = e107::getForm();		
		 		
		switch($mode)
		{
			case 'read': // List Page
				return $curVal;
			break;
			
			case 'write': // Edit Page
				return $frm->text('medal_id',$curVal, 255, 'size=large');
			break;
			
			case 'filter':
			case 'batch':
				return  array();
			break;
		}
	}

	
	// Custom Method/Function 
	function patch_id($curVal,$mode)
	{
		$frm = e107::getForm();		
		 		
		switch($mode)
		{
			case 'read': // List Page
				return $curVal;
			break;
			
			case 'write': // Edit Page
				return $frm->text('patch_id',$curVal, 255, 'size=large');
			break;
			
			case 'filter':
			case 'batch':
				return  array();
			break;
		}
	}

	
	// Custom Method/Function 
	function pin_id($curVal,$mode)
	{
		$frm = e107::getForm();		
		 		
		switch($mode)
		{
			case 'read': // List Page
				return $curVal;
			break;
			
			case 'write': // Edit Page
				return $frm->text('pin_id',$curVal, 255, 'size=large');
			break;
			
			case 'filter':
			case 'batch':
				return  array();
			break;
		}
	}

	
	// Custom Method/Function 
	function qual_id($curVal,$mode)
	{
		$frm = e107::getForm();		
		 		
		switch($mode)
		{
			case 'read': // List Page
				return $curVal;
			break;
			
			case 'write': // Edit Page
				return $frm->text('qual_id',$curVal, 255, 'size=large');
			break;
			
			case 'filter':
			case 'batch':
				return  array();
			break;
		}
	}

	
	// Custom Method/Function 
	function ribbon_id($curVal,$mode)
	{
		$frm = e107::getForm();		
		 		
		switch($mode)
		{
			case 'read': // List Page
				return $curVal;
			break;
			
			case 'write': // Edit Page
				return $frm->text('ribbon_id',$curVal, 255, 'size=large');
			break;
			
			case 'filter':
			case 'batch':
				return  array();
			break;
		}
	}

	
	// Custom Method/Function 
	function train_id($curVal,$mode)
	{
		$frm = e107::getForm();		
		 		
		switch($mode)
		{
			case 'read': // List Page
				return $curVal;
			break;
			
			case 'write': // Edit Page
				return $frm->text('train_id',$curVal, 255, 'size=large');
			break;
			
			case 'filter':
			case 'batch':
				return  array();
			break;
		}
	}

}

class mos_exe_ui extends e_admin_ui
{	
		protected $pluginTitle		= 'MOS System';
		protected $pluginName		= 'rosterexe';
	//	protected $eventName		= 'unitexe-awards_exesystem'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'mos_exe';
		protected $pid				= 'mos_id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
	//	protected $batchCopy		= true;		
	//	protected $sortField		= 'somefield_order';
	//	protected $orderStep		= 10;
	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'mos_id DESC';
	
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'mos_id' =>   array ( 'title' => LAN_ID, 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'mos' =>   array ( 'title' => LAN_TITLE, 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'mos_description' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'options' =>   array ( 'title' => LAN_OPTIONS, 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array('mos');
		
	
		public function init()
		{
			// Set drop-down values (if any). 
		}
		
		// ------- Customize Create --------
		public function beforeCreate($new_data,$old_data)
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
			
}

class mos_exe_form_ui extends e_admin_form_ui
{

}

class rtype_exe_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Request System';
		protected $pluginName		= 'rosterexe';
	//	protected $eventName		= 'unitexe-awards_exesystem'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'retype_exe';
		protected $pid				= 'rtype_id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
	//	protected $batchCopy		= true;		
	//	protected $sortField		= 'somefield_order';
	//	protected $orderStep		= 10;
	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'rtype_id DESC';
	
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'rtype_id' =>   array ( 'title' => LAN_ID, 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'request' =>   array ( 'title' => LAN_TITLE, 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'rtype_description' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'options' =>   array ( 'title' => LAN_OPTIONS, 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array('request');
		
	
		public function init()
		{
			// Set drop-down values (if any). 
	
		}
		
		// ------- Customize Create --------
		public function beforeCreate($new_data,$old_data)
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
			
}
				
class rtype_exe_form_ui extends e_admin_form_ui
{

}	

class requests_exe_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Requests System';
		protected $pluginName		= 'rosterexe';
	//	protected $eventName		= 'unitexe-awards_exesystem'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'awards_exesystem';
		protected $pid				= 'request_id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
	//	protected $batchCopy		= true;		
	//	protected $sortField		= 'somefield_order';
	//	protected $orderStep		= 10;
	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'request_id DESC';
	
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'request_id' =>   array ( 'title' => LAN_ID, 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'user_id' =>   array ( 'title' => LAN_TITLE, 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'date' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'description' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'rtype_id' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'status_id' =>   array ( 'title' => LAN_IMAGE, 'type' => 'image', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => 'thumb=80x80', 'writeParms' => 'size=xxlarge&media=featurebox&video=1', 'class' => 'left', 'thclass' => 'left',  ),
		  'accepted_id' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'options' =>   array ( 'title' => LAN_OPTIONS, 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array();
		
	
		public function init()
		{
			// Set drop-down values (if any). 
	
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data,$old_data)
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
			
}
				


class requests_exe_form_ui extends e_admin_form_ui
{

}	

class servicerecords_exe_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Service Records System';
		protected $pluginName		= 'rosterexe';
	//	protected $eventName		= 'unitexe-awards_exesystem'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'service_records_exe';
		protected $pid				= 'sr_id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
	//	protected $batchCopy		= true;		
	//	protected $sortField		= 'somefield_order';
	//	protected $orderStep		= 10;
	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'sr_id DESC';
	
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'sr_id' =>   array ( 'title' => LAN_ID, 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'user_id' =>   array ( 'title' => LAN_TITLE, 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'date' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'entry' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'type' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'award' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'rank' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'citation' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'discharge_grade' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'position' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'rocat_id' =>   array ( 'title' => LAN_IMAGE, 'type' => 'image', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => 'thumb=80x80', 'writeParms' => 'size=xxlarge&media=featurebox&video=1', 'class' => 'left', 'thclass' => 'left',  ),
		  'display' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'options' =>   array ( 'title' => LAN_OPTIONS, 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array('award_name', 'award_image');
		
	
		public function init()
		{
			// Set drop-down values (if any). 
	
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data,$old_data)
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
			
}
				


class servicerecords_exe_form_ui extends e_admin_form_ui
{

}	

class promotions_exe_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Promotion System';
		protected $pluginName		= 'rosterexe';
	//	protected $eventName		= 'unitexe-awards_exesystem'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'promotions_exe';
		protected $pid				= 'promo_id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
	//	protected $batchCopy		= true;		
	//	protected $sortField		= 'somefield_order';
	//	protected $orderStep		= 10;
	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'promo_id DESC';
	
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'promo_id' =>   array ( 'title' => LAN_ID, 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'user_id' =>   array ( 'title' => LAN_TITLE, 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'current_rank' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'promo_rank' =>   array ( 'title' => LAN_IMAGE, 'type' => 'image', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => 'thumb=80x80', 'writeParms' => 'size=xxlarge&media=featurebox&video=1', 'class' => 'left', 'thclass' => 'left',  ),
		  'reason' =>   array ( 'title' => LAN_TITLE, 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'who_promo' =>   array ( 'title' => LAN_TITLE, 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'date' =>   array ( 'title' => LAN_TITLE, 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'options' =>   array ( 'title' => LAN_OPTIONS, 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array('award_name', 'award_image');
		
	
		public function init()
		{
			// Set drop-down values (if any). 
	
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data,$old_data)
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
			
}
				
class promotions_exe_form_ui extends e_admin_form_ui
{

}	

		
		
		
new rosterexe_adminArea();

require_once(e_ADMIN."auth.php");
e107::getAdminUI()->runPage();

require_once(e_ADMIN."footer.php");
exit;

?>