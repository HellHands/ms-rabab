<?php 

class MonitoringForms201516Controller extends AppController {
	public $helpers = array('Form', 'Html', 'Js', 'Time');   
	/*public $components = array(
        'Auth' => array(
            'loginAction' => array(
                'controller' => 'monitoring_forms_201516',
                'action' => 'login'
                ),
	        'loginRedirect' => array(
                'controller' => 'monitoring_forms_201516',
                'action' => 'index'
		        ),
		    'logoutRedirect' => array(
		    	'controller' => 'users',
		    	'action' => 'login'                
		    	)
        	),
        'Session',
        'Acl'
        );*/	

	public $uses = array(
		'codes_for_districts', 
		'codes_for_district_and_tehsils',
		'codes_for_ucs',
		'codes_for_school_conditions',
		'codes_for_school_statuses',
		'codes_for_school_levels',
		'codes_for_school_genders',
		'codes_for_school_drinkingwater_facilities',
		'monitoring_forms201516s',
		'codes_for_school_prefixes',
		'codes_for_closuer_major_reasons',
		'codes_for_dp_designations'
		);
	
	public function beforeFilter()
	{		
		$this->layout = "formlayout";	
		
	}

	// Index function starts here!
	function index()
	{
		$district_ids = $this->codes_for_districts->find(
			'list', array(
				'fields' => array(
					'DistrictID',
					'District'					
					)
				)
			);
		

		$this->set('districts', $district_ids);
		$conditions = $this->get_conditions();
		$this->set('conditions', $conditions);
		$levels = $this->get_levels();
		$this->set('levels', $levels);
		$genders = $this->get_genders();
		$this->set('genders', $genders);
		$prefixes = $this->get_school_prefixes();
		$this->set('prefixes', $prefixes);
		$major_reasons = $this->get_school_closure_major_reasons();
		$this->set('reasons', $major_reasons);
		$dp_designations = $this->get_dp_designations();
		$this->set('dpdesignations', $dp_designations);

		$this->set('title', 'Form - RSU');	
	}
	/*
	function login()
	{
		if ($this->request->is('post')) {
			print_r($this->request->data);
			
	        if ($this->Auth->login()) {
	        	$this->Flash->setFlash('success');
	            return $this->redirect($this->Auth->redirect());
	        }
	        $this->Flash->error(__('Invalid username or password, try again'));
	    }
	}

	public function logout() {
	    return $this->redirect($this->Auth->logout());
	}*/

	function get_tehsils($did = NULL)
	{
		if(!(is_null(@$did)))
		{
		
			$tehsil_tbl = $this->codes_for_district_and_tehsils;
			$tehsil_ids = $tehsil_tbl->find(
				'all', array(
					'conditions' => array(
						'codes_for_district_and_tehsils.district_id' => $did	
						),
					'fields' => array(
						'tehsil',
						'tehsil_id',
						'district_id'
						)				
					)
				);

			echo "<option value='e'>Choose One</option>";
			foreach($tehsil_ids as $t) {
	   			echo "<option value={$t['codes_for_district_and_tehsils']['tehsil_id']}>" . $t['codes_for_district_and_tehsils']['tehsil'] . "</option>";
			}
		}else{		
			echo "<option value='e'>Choose One</option>";
		}

		$this->autoRender = false;
	}

	function get_ucs($tid = NULL)
	{
		if(!(is_null($tid)))
		{
			$uc_tbl = $this->codes_for_ucs;
			$uc_ids = $uc_tbl->find(
				'all', array(
					'conditions' => array(
						'codes_for_ucs.tehsil_id' => $tid
						),
					'fields' => array(
						'uc_id',
						'uc_name',
						'tehsil_id'
						)
					)
				);
			//debug(json_encode($uc_ids, JSON_PRETTY_PRINT));
			echo "<option value='e'>Choose One</option>";
			foreach($uc_ids as $u) {

	   			echo "<option value={$u['codes_for_ucs']['uc_id']}>" . $u['codes_for_ucs']['uc_name'] . "</option>";
			}
		}else{
			echo "<option value='e'>Choose One</option>";
		}

		$this->autoRender = false;
	}
	
	function get_conditions()
	{
		
		$cond_tbl = $this->codes_for_school_conditions;
		$cond_ids = $cond_tbl->find(
			'list', array(
				'fields' => array(
					'condition_id',
					'condition'					
					)
				)
			);
		//debug(json_encode($cond_ids, JSON_PRETTY_PRINT));		exit();
		
		return $cond_ids;

	}

	function get_statuses($cid = NULL)
	{
		if(!(is_null(@$cid)))
		{
		
			$status_tbl = $this->codes_for_school_statuses;
			$status_ids = $status_tbl->find(
				'all', array(
					'conditions' => array(
						'codes_for_school_statuses.conditionid' => $cid	
						),
					'fields' => array(
						'statusid',
						'status'						
						)				
					)
				);

			echo "<option value='e'>Choose</option>";
			foreach($status_ids as $s) {
	   			echo "<option value={$s['codes_for_school_statuses']['statusid']}>" . $s['codes_for_school_statuses']['status'] . "</option>";
			}
		}else{		
			echo "<option value='e'>Choose</option>";
		}

		$this->autoRender = false;
	}

	function get_levels()
	{
		$levels_tbl = $this->codes_for_school_levels;
		$level_ids = $levels_tbl->find(
			'list', array(
				'fields' => array(
					'levelid',
					'level'					
					)
				)
			);
		//debug(json_encode($cond_ids, JSON_PRETTY_PRINT));		exit();
		
		return $level_ids;	
	}

	function get_genders()
	{
		$genders_tbl = $this->codes_for_school_genders;
		$gender_ids = $genders_tbl->find(
			'list', array(
				'fields' => array(
					'genderid',
					'gender'					
					)
				)
			);
		
		return $gender_ids;
	}

	function get_drinkingwater_facilities()
	{
		$water_tbl = $this->codes_for_school_drinkingwater_facilities;
		$water_ids = $water_tbl->find(
			'list', array(
				'fields' => array(
					'drinkingID',
					'facility_name'					
					)
				)
			);
		
		return $water_ids;
	}

	function get_school_prefixes()
	{
		$prefix_tbl = $this->codes_for_school_prefixes;
		$prefix_ids = $prefix_tbl->find(
			'list', array(
				'fields' => array(
					'id',
					'prefix'
					)
				)
			);

		return $prefix_ids;
	}

	function get_school_closure_major_reasons()
	{
		$reasons_tbl = $this->codes_for_closuer_major_reasons;
		$reasons_ids = $reasons_tbl->find(
			'list', array(
				'fields' => array(
					'Resonid',
					'Reason'
					)
				)
			);

		return $reasons_ids;

	}

	function get_dp_designations()
	{
		$dpdes_tbl = $this->codes_for_dp_designations;
		$dpdes_ids = $dpdes_tbl->find(
			'list', array(
				'fields' => array(
					'DPDesigID',
					'DPDesignation'
					)
				)
			);

		return $dpdes_ids;
	}
	
	public function beforeSave($id = NULL) {
		
		$count = $this->monitoring_forms201516s->find("count", array(
	        "conditions" => array("semis_code" => $id)
	    ));
	    if ($count == 0) {
	        return true;
	    }
	    return false;	
	}
	

	function add()
	{

		$this->layout = "formlayout";
		if($this->request->is('post'))
		{
			//debug(json_encode($this->request->data, JSON_PRETTY_PRINT));
			//exit();
			$this->request->data['mnform']['school_prefix'] = $this->request->data['school_prefix'];
			$this->request->data['mnform']['closure_major_reason'] = $this->request->data['closure_major_reason'];
			$this->request->data['mnform']['dpdesignation'] = $this->request->data['dpdesignation'];

			$semis_code = $this->request->data['mnform']['semis_code'];
			if($this->beforeSave($semis_code))
			{
				$req = $this->request->data['mnform'];
				
				if ($this->monitoring_forms201516s->save($req)) 
				{		            
		            $this->Session->setFlash('inserted');
		            
	        	}else{
	        		$this->Session->setFlash('not inserted');        	
	        	}	

			}else{
				$message = "<span class=\"glyphicon glyphicon-warning-sign\"></span>" .$semis_code. "</span> already exists!<br><br>Please visit: <a href={$this->webroot}mnform>Monitoring Form 2015-16</a>";
				$this->Session->setFlash($message);				
			}	       				
		}else{
			$message = "<span class=\"glyphicon glyphicon-warning-sign\"></span> No data to insert, please visit: <a href={$this->webroot}mnform>Monitoring Form 2015-16</a>";
			$this->Session->setFlash($message);
		}
	}

}




?>