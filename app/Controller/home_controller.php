<?php

class HomeController extends AppController
{
	var $uses = array('Cluster','School','Teacher','TeacherQualification','TeacherInterest','TeacherExperience','TeacherAchievement','TeacherSkill',
	'Region','Taluka','Uc','SurveyOfSchool','GuideSpecific','Staff','StaffAttendance','SchoolManagementCommitee','SchoolIdentification', 'Univ2012', 'Univ2012a', 'SemisHsTeacher201314',
	'SchoolFacility','Record','EnrollmentAttendance','BasicInformation','MprBasic','MprSchoolInfo','ClassroomObservation','semisCodesDistrictTehsil', 'SemisHsEnrollment201314',
	'SemisCodeDistrict','SemisCodeUc','semisUniversal2010', 'NotifiedCluster','SemisTeachers2010','SemisCodeSchoolGender', 'CodesForDistrictAndTehsil', 'CodesForUc', 'energyMis',
	'SemisCodeTeachersTraining','ClusterForReport', 'SemisEnrollment2010', 'SemisCodeSchoolLevel', 'SemisCodeSchoolGender', 'DdoBudgetPfra',  'DdoInfo', 'SsBudget', 
	'SsBudget2', 'BudgetHead', 'DdoBudget', 'Benazirabad', 'SemisHsUniversal201314', 'codesForBank', 'codesForTypeOfPost', 'codesForTeachersDesignation', 'codesForTeachersTraining', 
	'codesForTeachersQualification' , 'SemisUniversal201415', 'SemisTeacher201415', 'SemisConsolidationUniv201415', 'SemisEnrollment201415', 'CodesForTappa', 'CodesForDeh', 'User', 'codes_for_districts', 
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
		'codes_for_dp_designations',
		'codes_for_tappas');
	
	/* var $uses = array('Cluster','School','Teacher','TeacherQualification','TeacherInterest','TeacherExperience','TeacherAchievement','TeacherSkill',
	'Region','Taluka','Uc','SurveyOfSchool','GuideSpecific','Staff','StaffAttendance','SchoolManagementCommitee','SchoolIdentification',
	'SchoolFacility','Record','EnrollmentAttendance','BasicInformation'); */
	
	var $paginate   = array('limit' => 200);
	
	var $components = array('Acl', 'Auth', 'Session','RequestHandler');
	var $helpers    = array('Html','Form', 'Js', 'Number', 'Js' => array('Jquery'));
	
	function beforeFilter() {
		
		$usadmin = $this->Auth->user('superuser');

		$uname   = $this->Auth->user('username');
		$us_id   = $this->Auth->user('id');
		
		$this->set('superadmin', $usadmin);
			
		if($usadmin == 1)
		{
			$this->set('superadmin',$usadmin);
			$this->set('uname',$uname);
		}
		if($usadmin == 2)
		{
			$this->set('superadmin',$usadmin);
			$this->set('uname',$uname);
		}
		
		if($usadmin == 3 || $usadmin == 4)
		{
			
			
			$districts = $this->SemisCodeDistrict->find('all');
			$this->set('districts',$districts);	
			// $this->layout = "defaultsemis";
			
			$tehsils = $this->CodesForDistrictAndTehsil->find('all');
			$this->set('tehsils',$tehsils);	
			
			$this->set('usadmin',$usadmin);
			
			$user_name = $this->Auth->user('username');
			$this->set('user_name',$user_name);
			$user_district = $this->Auth->user('district');
			$this->set('user_district',$user_district);
			$user_tehsil = $this->Auth->user('tehsil');
			$this->set('user_tehsil',$user_tehsil);
			$user_cnic_number = $this->Auth->user('cnic_number');
			$this->set('user_cnic_number',$user_cnic_number);
			$user_contact_number = $this->Auth->user('contact_number');
			$this->set('user_contact_number',$user_contact_number);
			$user_email_address = $this->Auth->user('email_address');
			$this->set('user_email_address',$user_email_address);
			$user_designation = $this->Auth->user('designation');
			$this->set('user_designation',$user_designation);
			$user_qualification = $this->Auth->user('qualification');
			$this->set('user_qualification',$user_qualification);
			$user_bank_name = $this->Auth->user('bank_name');
			$this->set('user_bank_name',$user_bank_name);
			$user_account_title = $this->Auth->user('account_title');
			$this->set('user_account_title',$user_account_title);
			$user_account_number = $this->Auth->user('account_number');
			$this->set('user_account_number',$user_account_number);
			$user_bank_branch = $this->Auth->user('bank_branch');
			$this->set('user_bank_branch',$user_bank_branch);
			$user_bank_branch_code = $this->Auth->user('bank_branch_code');
			$this->set('user_bank_branch_code',$user_bank_branch_code);
			
			$this->set('superadmin',$usadmin);
			$this->set('usadmin',$usadmin);
			$this->set('uname',$uname);
			$this->set('usadmin',$usadmin);
			
		}

		/*if($usadmin == 6){
			$this->set('superadmin', $usadmin);
			$this->set('usadmin', $usadmin);
			$this->set('uname', $uname);
			$this->layout="formlayout";
		}*/

		if($usadmin == 7){
			$this->set('superadmin', $usadmin);
			$this->set('usadmin', $usadmin);
			$this->set('uname', $uname);				
			//$this->index();
		}

		if($usadmin == 8){
			$this->set('superadmin', $usadmin);
			$this->set('usadmin', $usadmin);
			$this->set('uname', $uname);	
			//$this->index();
		}

		if($usadmin == 9){
			$this->set('superadmin', $usadmin);
			$this->set('usadmin', $usadmin);
			$this->set('uname', $uname);
		}

		if($usadmin == 10){
			$this->set('superuser', $usadmin);
			$this->set('usadmin', $usadmin);
			$this->set('uname', $uname);
		}
		
		set_time_limit(0);
		ini_set('memory_limit', '-1');
		parent::beforeFilter();
		
		//$this->Auth->allow('*');
		$this->layout = 'defaultnew';
		if ($this->Session->read('Auth.User'))
		{
			$this->set('logout', 'loggedin');
			$upasschange = $this->Auth->user('passchange');
			if($upasschange == 0)
			{		
				$uid = $this->Auth->user('id');	
				$this->redirect('../users/edit/'.$uid);
			}
		}
	}
	
	function index($action = 'noaction')
	{
		
		$usadmin = $this->Session->read('Auth.User.superuser');				
		
		if($usadmin == 1)
		{

			$this->redirect(array(
				'controller' => 'asc201516s',
				'action' => 'index'
				)
			);
		}
		
		$upasschange = $this->Auth->user('passchange');
		
		if($upasschange == 0)
		{
			
			$uid = $this->Auth->user('id');
			
			$this->redirect('../users/edit/'.$uid);
		}
		
		if($usadmin == 4) 
		{
			$this->redirect(array(
				'controller' => 'asc201516s',
				'action' => 'index'
				)
			);
		}

		if($usadmin == 7){
			$this->redirect(array(
				'controller' => 'asc201516s',
				'action' => 'index'
				)
			);
		}

		if($usadmin == 8){
			$this->redirect(array(
				'controller' => 'asc201516s',
				'action' => 'index_dev'
				
				)
			);
		}

		if($usadmin == 9){
			$this->redirect(array(
				'controller' => 'asc201516s',
				'action' => 'index_des'
				)
			);
		}

		if($usadmin == 10){
			$this->redirect(array(
				'controller' => 'asc201516s',
				'action' => 'index_hs'
				)
			);
		}else{	
			$this->redirect('../home/semishsdashboard/'.$action);
		}
		
		if(isset($this->params['form']['personnel_no'])) 
		{
			$id = $this->params['form']['personnel_no'];
			$teacher = $this->Teacher->find('first',array('conditions'=>array('personnel_no'=>$id)));
			
			if(!empty($teacher))
			{
				$this->redirect('../home/edit_teacher/'.($teacher['Teacher']['id']));
			}else
			{
				header('Location: '.$_SERVER["HTTP_REFERER"]);
				
			}
			
		}
		
		
		
		if(isset($this->params['form']['semis_code']))
		{
			//debug($this->params['form']['semis_code']);
			$school = $this->School->find('first',array('conditions'=>array('code'=>($this->params['form']['semis_code']))));
			//debug($school);
			
			if(!empty($school))
			{
				$this->redirect('../home/cluster_details/'.($school['School']['clusterid']));
			}else
			{
				header('Location: '.$_SERVER["HTTP_REFERER"]);
				
			}
		}
		
		$regions = $this->Region->find('all');
		$this->set('regions',$regions);
		
		/*
		//function written for schools to be synched
		$schools = $this->School->find('all',array('conditions'=>array('clusterid >'=>0,'code >'=>0,'id < '=>2010),'fields'=>));
		
		$semis_code_array = array();
		
		foreach($schools as $school)
		{
			$new_school = $this->School->find('first',array('conditions'=>array('clusterid'=>0,'code'=>($school['School']['code']))));
			
			if(!empty($new_school))
			{
				$this->School->id = $new_school['School']['id'];
				
				$this->School->delete();
				
				$semis_code_array[] = $new_school['School']['code'];
			}
		}
		*/
		//debug($semis_code_array);
		
		
	}

	function mnform()
	{
		$uname = $this->Session->read('Auth.User.username');
		$uid   = $this->Session->read('Auth.User.id');
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
		$this->set('username', $uname);
		$this->set('uid', $uid);
		$this->layout = "formlayout";
		$this->set('title', 'Form - RSU');				
		$this->render('mn/index');
	}

	public function get_semis_ajax($semisCode = NULL)
	{

		$school_info = $this->SemisUniversal201415->find('first', array(
			'conditions' => array(
				'SemisUniversal201415.school_semis_new' => $semisCode
				),
			'fields' => array(
				'SemisUniversal201415.school_semis_new',
				'SemisUniversal201415.coord_long',
				'SemisUniversal201415.coord_lat',
				'SemisUniversal201415.bi_school_district',
				'SemisUniversal201415.bi_school_taluka',
				'SemisUniversal201415.bi_school_uc',				
				'SemisUniversal201415.bi_school_name'
				)
			)
		);

		//debug($school_info);

		$school_district_id   = $school_info['SemisUniversal201415']['bi_school_district'];
		
		$district_name_fetch = $this->codes_for_districts->find('first', array(
			'conditions' => array(
				'codes_for_districts.districtID' => $school_district_id
				),
			'fields' => array(				
				'district'
				)
			)
		);

		$school_taluka     = $school_info['SemisUniversal201415']['bi_school_taluka'];

		$taluka_name_fetch = $this->codes_for_district_and_tehsils->find('first', array(
			'conditions' => array(
				'codes_for_district_and_tehsils.tehsil_id' => $school_taluka
				),
			'fields' => array(
				'tehsil'
				)

			)
		);

		$school_uc         = $school_info['SemisUniversal201415']['bi_school_uc'];

		$uc_name_fetch = $this->codes_for_ucs->find('first', array(
			'conditions' => array(
				'codes_for_ucs.uc_id' => $school_uc
				),
			'fields' => array(
				'uc_name'
				)
			)
		);
		
		$school_semis         = $school_info['SemisUniversal201415']['school_semis_new'];
		$school_coord_lat     = $school_info['SemisUniversal201415']['coord_lat'];
		$school_coord_long    = $school_info['SemisUniversal201415']['coord_long'];
		$school_district_name = $district_name_fetch['codes_for_districts']['district'];
		$school_taluka_name   = $taluka_name_fetch['codes_for_district_and_tehsils']['tehsil'];
		$school_uc_name       = $uc_name_fetch['codes_for_ucs']['uc_name'];		
		$school_name          = $school_info['SemisUniversal201415']['bi_school_name'];
			
		$school_details['semis']      = $school_semis;
		$school_details['districtid'] = $school_district_id;
		$school_details['district']   = $school_district_name;
		$school_details['talukaid']   = $school_taluka;
		$school_details['taluka']     = $school_taluka_name;
		$school_details['ucid']       = $school_uc;
		$school_details['uc']         = $school_uc_name;
		$school_details['name']       = $school_name;
		
		echo json_encode($school_details);
		$this->autoRender = false;
		
	
	}

	public function get_tehsils($did = NULL)
	{
		if(!(is_null($did)))
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

			echo "<option value='0'>Choose One</option>";
			foreach($tehsil_ids as $t) {
	   			echo "<option value={$t['codes_for_district_and_tehsils']['tehsil_id']}>" . $t['codes_for_district_and_tehsils']['tehsil'] . "</option>";
			}
		}else{		
			echo "<option value='0'>Choose One</option>";
		}

		$this->autoRender = false;
	}

	public function get_ucs($tid = NULL)
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
			echo "<option value='0'>Choose One</option>";
			foreach($uc_ids as $u) {

	   			echo "<option value={$u['codes_for_ucs']['uc_id']}>" . $u['codes_for_ucs']['uc_name'] . "</option>";
			}
		}else{
			echo "<option value='0'>Choose One</option>";
		}

		$this->autoRender = false;
	}
	
	public function get_conditions()
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

	public function get_statuses($cid = NULL)
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

			//echo "<option value='0'>Choose</option>";
			foreach($status_ids as $s) {
	   			echo "<option value={$s['codes_for_school_statuses']['statusid']}>" . $s['codes_for_school_statuses']['status'] . "</option>";
			}
		}else{		
			echo "<option value='0'>Choose</option>";
		}

		$this->autoRender = false;
	}

	public function get_tappas($tid = NULL, $did = NULL)
	{
		if(!(is_null(@$tid) && is_null($did)))
		{
		
			$tappa_tbl = $this->codes_for_tappas;
			$tappa_ids = $tappa_tbl->find(
				'all', array(
					'conditions' => array(
						'codes_for_tappas.districtid' => $did,
						'codes_for_tappas.tehsilid' => $tid
						),
					'fields' => array(
						'tappaid',
						'tappa'						
						)				
					)
				);

			echo "<option value='0'>Choose</option>";
			foreach($tappa_ids as $s) {
	   			echo "<option value={$s['codes_for_tappas']['tappaid']}>" . $s['codes_for_tappas']['tappa'] . "</option>";
			}
		}else{		
			echo "<option value='0'>Choose</option>";
		}

		$this->autoRender = false;
	}

	public function get_levels()
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

	public function get_genders()
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

	public function get_drinkingwater_facilities()
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

	public function get_school_prefixes()
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

	public function get_school_closure_major_reasons()
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

	public function get_dp_designations()
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
	

	public function add()
	{

		$this->layout = "formlayout";
		if($this->request->is('post'))
		{
			//debug(json_encode($this->request->data, JSON_PRETTY_PRINT));
			//exit();
			$this->request->data['mnform']['school_prefix'] = @$this->request->data['school_prefix'];
			$this->request->data['mnform']['closure_major_reason'] = @$this->request->data['closure_major_reason'];
			$this->request->data['mnform']['dpdesignation'] = @$this->request->data['dpdesignation'];
			
			$username = @$this->request->data['mnform']['username'];
			$uid      = @$this->request->data['mnform']['uid'];
			$this->set('username', $username);
			$this->set('uid', $uid);
			$this->set('title', 'Monitoring Form Result!');

			$semis_code = $this->request->data['mnform']['semis_code'];
			if($this->beforeSave($semis_code))
			{
				$req = $this->request->data['mnform'];
				
				if ($this->monitoring_forms201516s->save($req)) 
				{		            
		            $this->Session->setFlash('inserted');		            
		            $this->render('mn/add');
		            
	        	}else{
	        		$this->Session->setFlash('not inserted');        	
	        		$this->render('mn/add');
	        	}	

			}else{
				$message = "<span class=\"glyphicon glyphicon-warning-sign\"></span>" .$semis_code. "</span> already exists!<br><br>Please visit: <a href={$this->webroot}home/index>Monitoring Form 2015-16</a>";
				$this->Session->setFlash($message);				
				$this->render('mn/add');
			}	       				
		}else{
			$message = "<span class=\"glyphicon glyphicon-warning-sign\"></span> No data to insert, please visit: <a href={$this->webroot}home/index>Monitoring Form 2015-16</a>";
			$this->Session->setFlash($message);
			$this->render('mn/add');
		}
	}
	// The reports code starts here
	
	
	
	
}