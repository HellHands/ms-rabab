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

	//the code for adding and editing the districts or region starts here
	function index($action = 'noaction')
	{
		
		$usadmin = $this->Session->read('Auth.User.superuser');				
		
		if($usadmin == 1)
		{

			$this->redirect('../home/superdashboard');
		}
		$upasschange = $this->Auth->user('passchange');
		
		if($upasschange == 0)
		{
			
			$uid = $this->Auth->user('id');
			
			$this->redirect('../users/edit/'.$uid);
		}
		
		if($usadmin == 4) 
		{
			$this->redirect('../home/semishsdashboard');
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
		

		
		// if($usadmin == 2)
		// {
			// $this->redirect('../home/do_schools');
		// }
		
		// if($usadmin == 3)
		// {
			// $this->redirect('../home/do_dashboard');
		// }
		
		// $this->redirect('../home/semis_form_hs_p1');
		
		
		
		/* 
		$schoolIdentifications = $this->SchoolIdentification->find('all');
		$x = 0;
		$school_ids_array = array();
		$schoolidentification_semis_array = array();
		foreach($schoolIdentifications as $schoolIdentification)
		{
			if(!($schoolIdentification['SchoolIdentification']['semis_code'] == null))
			{
				$semis_code = $schoolIdentification['SchoolIdentification']['semis_code'];
				$school = $this->School->find('first',array('conditions'=>array('code'=>$semis_code)));
				if(!(empty($school)))
				{
					$school_ids_array[] = $school['School']['id'];
				}else
				{
					$schoolidentification_semis_array[] = $schoolIdentification['SchoolIdentification']['semis_code'];
				}
			}
		}
		
		$schools = $this->School->find('all',array('conditions'=>array('id'=>$school_ids_array)));
		$other_schools = $this->SchoolIdentification->find('all',array('conditions'=>array('semis_code'=>$schoolidentification_semis_array)));
		
		foreach ($schools as &$school)
		{
			$this_cluster = $this->Cluster->find('first',array('conditions'=>array('id'=>($school['School']['clusterid']))));
			
			$school['cluster_name'] = $this_cluster['Cluster']['name'];
			$school['cluster_id'] = $this_cluster['Cluster']['id'];
			
			$this_uc = $this->Uc->find('first',array('conditions'=>array('id'=>($this_cluster['Cluster']['uc_id']))));
			
			$school['uc_name'] = $this_uc['Uc']['name'];
			$school['uc_id'] = $this_uc['Uc']['id'];
			
			$this_taluka = $this->Taluka->find('first',array('conditions'=>array('id'=>($this_uc['Uc']['taluka_id']))));
			
			$school['taluka_name'] = $this_taluka['Taluka']['name'];
			$school['taluka_id'] = $this_taluka['Taluka']['id'];
			
			
			$this_region = $this->Region->find('first',array('conditions'=>array('id'=>($this_taluka['Taluka']['district_id']))));
			
			
			$school['district_name'] = $this_region['Region']['name'];
			$school['district_id'] = $this_region['Region']['id'];
			
			$this_baseline = $this->SchoolIdentification->find('first',array('conditions'=>array('semis_code'=>$school['School']['code'])));
			if(!empty($this_baseline))
			{
				$this_basics = $this->BasicInformation->find('first',array('conditions'=>array('school_identification_id'=>($this_baseline['SchoolIdentification']['id']))));
				
			}
			
			if(!empty($this_basics))
			{
				$school['classrooms'] = (($this_basics['BasicInformation']['classrooms'])+($this_basics['BasicInformation']['office'])+($this_basics['BasicInformation']['store'])+($this_basics['BasicInformation']['other']));
			}
			
		}
		
		//debug($schools[0]);
		//debug($other_schools[0]);
		
		$this->set('schools',$schools);
		$this->set('other_schools',$other_schools);
		*/
		/*
		$schoolIdentifications = $this->SchoolIdentification->find('all');
		$x = 0;
		foreach($schoolIdentifications as $schoolIdentification)
		{
			
			if(!($schoolIdentification['SchoolIdentification']['semis_code'] == null))
			{
				$semis_code = $schoolIdentification['SchoolIdentification']['semis_code'];
				$school = $this->School->find('first',array('conditions'=>array('code'=>$semis_code)));
				if(!(empty($school)))
				{
					$schoolIdentificationDetailsArray = array();
					$this->SchoolIdentification->id = $schoolIdentification['SchoolIdentification']['id'];
					$schoolIdentificationDetailsArray['SchoolIdentification']['school_id'] = $school['School']['id'];
					
					$this->SchoolIdentification->save($schoolIdentificationDetailsArray);
					//debug($x);
					//debug($semis_code);
					//$x++;
				}
			}
		}
		*/
		/*
		//comparison of guide schools abdul rab and aftab sahab
		
		$guide_specifics = $this->GuideSpecific->find('all');
		//debug($guide_specific);
		$guide_school_semis_ids = array();
		$guide_school_ids = array();
		$guide_school_baseline_ids = array();
		foreach($guide_specifics as $guide_specific)
		{
			
			
			$school = $this->School->find('first',array('conditions'=>array('id'=>($guide_specific['GuideSpecific']['school_id']))));
			
			$baseline_id = $this->SchoolIdentification->find('first',array('conditions'=>array('semis_code'=>$school['School']['code'])));
			
			
			if(!empty($baseline_id))
			{
				$guide_school_semis_ids[] = $school['School']['code'];
				$guide_school_baseline_ids[] = $baseline_id['SchoolIdentification']['id'];
				$guide_school_ids[] = $guide_specific['GuideSpecific']['school_id'];
			}	
		}
		
		//debug($guide_school_baseline_ids);
		//debug($guide_school_semis_ids);
		//debug($guide_school_ids);
		
		
		$surveyOfSchools = $this->SurveyOfSchool->find('all',array('conditions'=>array('school_id'=>$guide_school_ids)));
		
		foreach($surveyOfSchools as &$surveyOfSchool)
		{
			$school_id = $surveyOfSchool['SurveyOfSchool']['school_id'];
			
			$this_school = $this->School->find('first',array('conditions'=>array('id'=>$school_id)));
			$guide_specific = $this->GuideSpecific->find('first',array('conditions'=>array('school_id'=>$school_id)));
			//debug($guide_specific);
			$surveyOfSchool['GuideSpecific'] =$guide_specific['GuideSpecific'];
			$surveyOfSchool['School'] = $this_school['School'];
		}
		
		//debug($surveyOfSchools);
		
		$baseline_surveys = $this->SchoolIdentification->find('all',array('conditions'=>array('id'=>$guide_school_baseline_ids)));
		
		
		foreach($baseline_surveys as &$baseline_survey)
		{
			$baseline_id = $baseline_survey['SchoolIdentification']['id'];
			
			
			$basicInformation = $this->BasicInformation->find('first',array('conditions'=>array('school_identification_id'=>$baseline_id)));
			$baseline_survey['BasicInformation'] = $basicInformation['BasicInformation'];
			
			
			$enrollmentAttendance = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$baseline_id)));
			$baseline_survey['EnrollmentAttendance'] = $enrollmentAttendance['EnrollmentAttendance'];
			
			
			$SchoolManagementCommitee = $this->SchoolManagementCommitee->find('first',array('conditions'=>array('school_identification_id'=>$baseline_id)));
			$baseline_survey['SchoolManagementCommitee'] = $SchoolManagementCommitee['SchoolManagementCommitee'];
			
			
			
			$SchoolFacility = $this->SchoolFacility->find('first',array('conditions'=>array('school_identification_id'=>$baseline_id)));
			$baseline_survey['SchoolFacility'] = $SchoolFacility['SchoolFacility'];
			
			
			$Record = $this->Record->find('first',array('conditions'=>array('school_identification_id'=>$baseline_id)));
			$baseline_survey['Record'] = $Record['Record'];
			
			
			//$Staff = $this->Staff->find('all',array('conditions'=>array('school_identification_id'=>$baseline_id)));
			//$baseline_survey['Staff'] = $Staff['Staff'];
			
			//$StaffAttendance = $this->StaffAttendance->find('all',array('conditions'=>array('school_identification_id'=>$baseline_id)));
			//$baseline_survey['StaffAttendance'] = $StaffAttendance['StaffAttendance'];
			
			
		
		}
		
		$this->set('baseline_surveys',$baseline_surveys);
		$this->set('surveyOfSchools',$surveyOfSchools);
		
		
		$this->RequestHandler->setContent('xls', 'application/vnd.ms-excel'); 
				$this->layout = "xls";
				
				if(isset($this->params["url"]["start_day"]))
			{
				$startDate = $this->params["url"]["start_year"]."-". $this->params["url"]["start_month"]."-". $this->params["url"]["start_day"]." 00:00:00";
				$endDate = $this->params["url"]["end_year"]."-". $this->params["url"]["end_month"]."-". $this->params["url"]["end_day"]." 59:59:59";			
				
				$this->Set("startDate",$this->params["url"]["start_day"]);
				$this->Set("startYear",$this->params["url"]["start_year"]);
				$this->Set("startMonth",$this->params["url"]["start_month"]);
				
				$this->Set("endDate",$this->params["url"]["end_day"]);
				$this->Set("endYear",$this->params["url"]["end_year"]);
				$this->Set("endMonth",$this->params["url"]["end_month"]);
			}
			else
			{
				$startDate = date("Y-m")."-1 00:00:00";
				$endDate = date("Y-m")."-31 24:60:60";
				
				$this->Set("startDate","1");
				$this->Set("startYear",date("Y"));
				$this->Set("startMonth",date("m"));
				
				$this->Set("endDate","31");
				$this->Set("endYear",date("Y"));
				$this->Set("endMonth",date("m"));
			}
			
			$this->set("filename","cluster_report");
		
		
		//debug($baseline_surveys[0]);
		//comparison of guide schools abdul rab and aftab sahab
		
		*/


		
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
	function view_report()
	{
		
	}
	
	function cluster_report()
	{
		
	}
	
	function uc_report()
	{
		
	}
	
	function district_report()
	{
		
	}
	
	function submit_report_details($id = null)
	{
		if(isset($this->params['form']))
		{
			if(isset($this->params['form']['download_report']))
			{
				$this->RequestHandler->setContent('xls', 'application/vnd.ms-excel'); 
				$this->layout = "xls";
				
				if(isset($this->params["url"]["start_day"]))
			{
				$startDate = $this->params["url"]["start_year"]."-". $this->params["url"]["start_month"]."-". $this->params["url"]["start_day"]." 00:00:00";
				$endDate = $this->params["url"]["end_year"]."-". $this->params["url"]["end_month"]."-". $this->params["url"]["end_day"]." 59:59:59";			
				
				$this->Set("startDate",$this->params["url"]["start_day"]);
				$this->Set("startYear",$this->params["url"]["start_year"]);
				$this->Set("startMonth",$this->params["url"]["start_month"]);
				
				$this->Set("endDate",$this->params["url"]["end_day"]);
				$this->Set("endYear",$this->params["url"]["end_year"]);
				$this->Set("endMonth",$this->params["url"]["end_month"]);
			}
			else
			{
				$startDate = date("Y-m")."-1 00:00:00";
				$endDate = date("Y-m")."-31 24:60:60";
				
				$this->Set("startDate","1");
				$this->Set("startYear",date("Y"));
				$this->Set("startMonth",date("m"));
				
				$this->Set("endDate","31");
				$this->Set("endYear",date("Y"));
				$this->Set("endMonth",date("m"));
			}
			
			$this->set("filename","cluster_report");
				
			}
			
			//Gathering School Specific Information
			
			$semis_code = $this->params['form']['semis_code'];
			$school = $this->School->find('first',array('conditions'=>array('code'=>$semis_code)));
			$school_name = ($school['School']['prefix']).' - '.($school['School']['name']);
			$this->set('school_name',$school_name);
			
			$cluster = $this->Cluster->find('first',array('conditions'=>array('id'=>($school['School']['clusterid']))));
			$cluster_name = $cluster['Cluster']['name'];
			$this->set('cluster_name',$cluster_name);
			
			
			$uc = $this->Uc->find('first',array('conditions'=>array('id'=>($cluster['Cluster']['uc_id']))));
			$uc_name = $uc['Uc']['name'];
			$this->set('uc_name',$uc_name);
			
			$taluka = $this->Taluka->find('first',array('conditions'=>array('id'=>($uc['Uc']['taluka_id']))));
			$taluka_name = $taluka['Taluka']['name'];
			$this->set('taluka_name',$taluka_name);
			
			
			$district = $this->Region->find('first',array('conditions'=>array('id'=>($taluka['Taluka']['district_id']	))));
			$district_name = $district['Region']['name'];
			$this->set('district_name',$district_name);
			
			
			//getting the ids of all the schools in the clusters
			
			$cluster_school_ids = array();
			
			$cluster_school_ids_array = $this->School->find('all',array('conditions'=>array('clusterid'=>$school['School']['clusterid']),'fields'=>array('id')));
			foreach($cluster_school_ids_array as $cluster_school_id)
			{
				$cluster_school_ids[] = $cluster_school_id['School']['id'];
			}
			
			
			
			$cluster_school_identification_ids_array = $this->SchoolIdentification->find('all',array('conditions'=>array('school_id'=>$cluster_school_ids),'fields'=>array('id')));
			foreach($cluster_school_identification_ids_array as $cluster_school_identification_id)
			{
				$cluster_school_identification_ids[] = $cluster_school_identification_id['SchoolIdentification']['id'];
			}
			
			$count_of_school = count($cluster_school_ids);
			$this->set('count_of_school',$count_of_school);
			$count_of_surveys = count($cluster_school_identification_ids);
			$this->set('count_of_surveys',$count_of_surveys);
			//debug($cluster_school_ids);
			
			//Gathering Baseline Survey information for the school
			$schoolIdentification = $this->SchoolIdentification->find('first',array('conditions'=>array('school_id'=>($school['School']['id']))));
			if(!empty($schoolIdentification))
			{
			$this->set('schoolIdentification',$schoolIdentification);
			
			$basicInformation = $this->BasicInformation->find('first',array('conditions'=>array('school_identification_id'=>($schoolIdentification['SchoolIdentification']['id']))));
			$this->set('basicInformation',$basicInformation);
			
			$schoolManagementCommitee = $this->SchoolManagementCommitee->find('first',array('conditions'=>array('school_identification_id'=>($schoolIdentification['SchoolIdentification']['id']))));
			$this->set('schoolManagementCommitee',$schoolManagementCommitee);
			
			
			$records = $this->Record->find('first',array('conditions'=>array('school_identification_id'=>($schoolIdentification['SchoolIdentification']['id']))));
			$this->set('records',$records);
			
			$schoolFacility = $this->SchoolFacility->find('first',array('conditions'=>array('school_identification_id'=>($schoolIdentification['SchoolIdentification']['id']))));
			$this->set('schoolFacility',$schoolFacility);
			
			$enrollmentAttendance = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>($schoolIdentification['SchoolIdentification']['id']))));
			$this->set('enrollmentAttendance',$enrollmentAttendance);
			
			$staffs = $this->Staff->find('all',array('conditions'=>array('school_identification_id'=>($schoolIdentification['SchoolIdentification']['id']))));
			$this->set('staffs',$staffs);
			
			$staffAttendances = $this->StaffAttendance->find('all',array('conditions'=>array('school_identification_id'=>($schoolIdentification['SchoolIdentification']['id']))));
			$this->set('staffAttendances',$staffAttendances);
			
			
			//1. School Identification Identifiers for Report
			if(isset($this->params['form']['school_info']))
			{
				$this->set('school_info',($this->params['form']['school_info']));
			}
			if(isset($this->params['form']['school_address']))
			{
				$this->set('school_address',($this->params['form']['school_address']));
			}
			if(isset($this->params['form']['school_distances']))
			{
				$this->set('school_distances',($this->params['form']['school_distances']));
			}
			if(isset($this->params['form']['school_oppurtunities']))
			{
				$this->set('school_oppurtunities',($this->params['form']['school_oppurtunities']));
				
				//$count = $this->SchoolIdentification->query('select sum(secondary_boys) from  school_identifications');
				$cluster_oppurtunities = $this->SchoolIdentification->find('all',array('conditions'=>array('id'=>$cluster_school_identification_ids),'fields'=>array('sum(secondary_boys) as secondary_boys_sum','sum(secondary_girls) as secondary_girls_sum','sum(elementary_boys) as elementary_boys_sum','sum(elementary_girls) as elementary_girls_sum','sum(private_boys) as private_boys_sum','sum(private_girls) as private_girls_sum','sum(other_boys) as other_boys_sum','sum(other_girls) as other_girls_sum')));
				
				//debug($cluster_oppurtunities);
				$this->set('cluster_oppurtunities',$cluster_oppurtunities);
			}
			
			
			
			//2. School Basic Information Identifiers for report 
			if(isset($this->params['form']['school_basics']))
			{
				//getting cluster information for the school basics
				$number_functional_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_status'=>'functional')));
				$this->set('number_functional_schools',$number_functional_schools);
				$number_primary_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_level'=>'primary')));
				$this->set('number_primary_schools',$number_primary_schools);
				$number_middle_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_level'=>'middle')));
				$this->set('number_middle_schools',$number_middle_schools);
				$number_elementry_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_level'=>'elementary')));
				$this->set('number_elementry_schools',$number_elementry_schools);
				$number_boys_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_gender'=>'boys')));
				$this->set('number_boys_schools',$number_boys_schools);
				$number_girls_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_gender'=>'girls')));
				$this->set('number_girls_schools',$number_girls_schools);
				$number_mix_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_gender'=>'mixed')));
				$this->set('number_mix_schools',$number_mix_schools);
				$number_sindhi_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'medium_of_instruction'=>'sindhi')));
				$this->set('number_sindhi_schools',$number_sindhi_schools);
				$number_urdu_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'medium_of_instruction'=>'urdu')));
				$this->set('number_urdu_schools',$number_urdu_schools);
				$number_english_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'medium_of_instruction'=>'english')));
				$this->set('number_english_schools',$number_english_schools);
				$number_schools_has_school_in_range = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_in_range'=>1)));
				$this->set('number_schools_has_school_in_range',$number_schools_has_school_in_range);
				$number_schools_has_highschool_in_range = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'high_school_in_range'=>1)));
				$this->set('number_schools_has_highschool_in_range',$number_schools_has_highschool_in_range);
				
				$this->set('school_basics',($this->params['form']['school_basics']));
			}
			if(isset($this->params['form']['school_bank_budget']))
			{
			
				$number_schools_recieved_budget = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'budget_recieved'=>1)));
				$this->set('number_schools_recieved_budget',$number_schools_recieved_budget);
				$number_schools_has_bank_account = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_account'=>1)));
				$this->set('number_schools_has_bank_account',$number_schools_has_bank_account);
			
				$this->set('school_bank_budget',($this->params['form']['school_bank_budget']));
			}
			if(isset($this->params['form']['school_rooms_other']))
			{
				
				$school_rooms_other_sum = $this->BasicInformation->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(no_of_rooms) as no_of_rooms_sum','sum(total_rooms_inuse) as total_rooms_inuse_sum','sum(classrooms) as classrooms_sum','sum(office) as office_sum','sum(store) as store_sum','sum(unused) as unused_sum','sum(unsafe) as unsafe_sum','sum(other) as other_sum')));
				//debug($school_rooms_other_sum[0]);
				$this->set('school_rooms_other_sum',$school_rooms_other_sum[0]);
				
				$this->set('school_rooms_other',($this->params['form']['school_rooms_other']));
			}
			
			
			//3. Records Identifiers for the report
			if(isset($this->params['form']['school_student_record']))
			{
				$numberofschool_stu_att_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'stu_att_available'=>1)));
				$this->set('numberofschool_stu_att_available_cluster',$numberofschool_stu_att_available_cluster);
				$numberofschool_stu_att_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'stu_att_updated'=>1)));
				$this->set('numberofschool_stu_att_updated_cluster',$numberofschool_stu_att_updated_cluster);
				$numberofschool_gr_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'gr_available'=>1)));
				$this->set('numberofschool_gr_available_cluster',$numberofschool_gr_available_cluster);
				$numberofschool_gr_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'gr_updated'=>1)));
				$this->set('numberofschool_gr_updated_cluster',$numberofschool_gr_updated_cluster);
				$numberofschool_exam_result_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'exam_result_available'=>1)));
				$this->set('numberofschool_exam_result_available_cluster',$numberofschool_exam_result_available_cluster);
				$numberofschool_exam_result_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'exam_result_updated'=>1)));
				$this->set('numberofschool_exam_result_updated_cluster',$numberofschool_exam_result_updated_cluster);
				
				$this->set('school_student_record',($this->params['form']['school_student_record']));
			}
			
			if(isset($this->params['form']['school_teacher_record']))
			{
				$numberofschool_tar_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'tar_available'=>1)));
				$this->set('numberofschool_tar_available_cluster',$numberofschool_tar_available_cluster);
				$numberofschool_tar_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'tar_updated'=>1)));
				$this->set('numberofschool_tar_updated_cluster',$numberofschool_tar_updated_cluster);
				$numberofschool_tlr_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'tlr_available'=>1)));
				$this->set('numberofschool_tlr_available_cluster',$numberofschool_tlr_available_cluster);
				$numberofschool_tlr_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'tlr_updated'=>1)));
				$this->set('numberofschool_tlr_updated_cluster',$numberofschool_tlr_updated_cluster);
				
				
				$this->set('school_teacher_record',($this->params['form']['school_teacher_record']));
			}
			
			if(isset($this->params['form']['school_smc_records']))
			{
				$numberofschool_smc_register_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'smc_register_available'=>1)));
				$this->set('numberofschool_smc_register_available_cluster',$numberofschool_smc_register_available_cluster);
				$numberofschool_smc_register_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'smc_register_updated'=>1)));
				$this->set('numberofschool_smc_register_updated_cluster',$numberofschool_smc_register_updated_cluster);
				$numberofschool_smc_notif_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'smc_notif_available'=>1)));
				$this->set('numberofschool_smc_notif_available_cluster',$numberofschool_smc_notif_available_cluster);
				$numberofschool_smc_guideline_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'smc_guideline_available'=>1)));
				$this->set('numberofschool_smc_guideline_available_cluster',$numberofschool_smc_guideline_available_cluster);
				$numberofschool_smc_accountinfo_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'smc_accountinfo_available'=>1)));
				$this->set('numberofschool_smc_accountinfo_available_cluster',$numberofschool_smc_accountinfo_available_cluster);
				
				
				$this->set('school_smc_records',($this->params['form']['school_smc_records']));
			}
			
			if(isset($this->params['form']['school_sip_other_records']))
			{
				$numberofschool_vb_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'vb_available'=>1)));
				$this->set('numberofschool_vb_available_cluster',$numberofschool_vb_available_cluster);
				$numberofschool_vb_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'vb_updated'=>1)));
				$this->set('numberofschool_vb_updated_cluster',$numberofschool_vb_updated_cluster);
				$numberofschool_ss_form_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'ss_form_available'=>1)));
				$this->set('numberofschool_ss_form_available_cluster',$numberofschool_ss_form_available_cluster);
				$numberofschool_ss_form_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'ss_form_updated'=>1)));
				$this->set('numberofschool_ss_form_updated_cluster',$numberofschool_ss_form_updated_cluster);
				$numberofschool_tb_distribution_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'tb_distribution_available'=>1)));
				$this->set('numberofschool_tb_distribution_available_cluster',$numberofschool_tb_distribution_available_cluster);
				$numberofschool_tb_distribution_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'tb_distribution_updated'=>1)));
				$this->set('numberofschool_tb_distribution_updated_cluster',$numberofschool_tb_distribution_updated_cluster);
				$numberofschool_as_register_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'as_register_available'=>1)));
				$this->set('numberofschool_as_register_available_cluster',$numberofschool_as_register_available_cluster);
				$numberofschool_as_register_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'as_register_updated'=>1)));
				$this->set('numberofschool_as_register_updated_cluster',$numberofschool_as_register_updated_cluster);
				$numberofschool_sip_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'sip_available'=>1)));
				$this->set('numberofschool_sip_available_cluster',$numberofschool_sip_available_cluster);
				$numberofschool_sip_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'sip_updated'=>1)));
				$this->set('numberofschool_sip_updated_cluster',$numberofschool_sip_updated_cluster);
				
				
				
				$this->set('school_sip_other_records',($this->params['form']['school_sip_other_records']));
			}
			
			
			//checking for checked parameters
			
			
			
			//4. Enrollment and Attendance Identifiers for the Reports
			if(isset($this->params['form']['school_enrollment_this_year']))
			{
				$school_enrollment_this_year_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(gwe_katchi_boys) as gwe_katchi_boys_sum','sum(gwe_katchi_girls) as gwe_katchi_girls_sum','sum(gwe_1_boys) as gwe_1_boys_sum','sum(gwe_1_girls) as gwe_1_girls_sum','sum(gwe_2_boys) as gwe_2_boys_sum','sum(gwe_2_girls) as gwe_2_girls_sum','sum(gwe_3_boys) as gwe_3_boys_sum','sum(gwe_3_girls) as gwe_3_girls_sum','sum(gwe_4_boys) as gwe_4_boys_sum','sum(gwe_4_girls) as gwe_4_girls_sum','sum(gwe_5_boys) as gwe_5_boys_sum','sum(gwe_5_girls) as gwe_5_girls_sum','sum(gwe_6_boys) as gwe_6_boys_sum','sum(gwe_6_girls) as gwe_6_girls_sum','sum(gwe_7_boys) as gwe_7_boys_sum','sum(gwe_7_girls) as gwe_7_girls_sum','sum(gwe_8_boys) as gwe_8_boys_sum','sum(gwe_8_girls) as gwe_8_girls_sum')));
				$this->set('school_enrollment_this_year_sum',$school_enrollment_this_year_sum[0]);
				$this->set('school_enrollment_this_year',($this->params['form']['school_enrollment_this_year']));
			}
			
			if(isset($this->params['form']['school_enrollment_last_year']))
			{
				$school_enrollment_last_year_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(tely_katchi_boys) as tely_katchi_boys_sum','sum(tely_katchi_girls) as tely_katchi_girls_sum','sum(tely_1_boys) as tely_1_boys_sum','sum(tely_1_girls) as tely_1_girls_sum','sum(tely_2_boys) as tely_2_boys_sum','sum(tely_2_girls) as tely_2_girls_sum','sum(tely_3_boys) as tely_3_boys_sum','sum(tely_3_girls) as tely_3_girls_sum','sum(tely_4_boys) as tely_4_boys_sum','sum(tely_4_girls) as tely_4_girls_sum','sum(tely_5_boys) as tely_5_boys_sum','sum(tely_5_girls) as tely_5_girls_sum','sum(tely_6_boys) as tely_6_boys_sum','sum(tely_6_girls) as tely_6_girls_sum','sum(tely_7_boys) as tely_7_boys_sum','sum(tely_7_girls) as tely_7_girls_sum','sum(tely_8_boys) as tely_8_boys_sum','sum(tely_8_girls) as tely_8_girls_sum')));
				$this->set('school_enrollment_last_year_sum',$school_enrollment_last_year_sum[0]);
				
				$this->set('school_enrollment_last_year',($this->params['form']['school_enrollment_last_year']));
			}
			
			
			if(isset($this->params['form']['school_students_promoted']))
			{
				$school_students_promoted_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(ncp_katchi_boys) as ncp_katchi_boys_sum','sum(ncp_katchi_girls) as ncp_katchi_girls_sum','sum(ncp_1_boys) as ncp_1_boys_sum','sum(ncp_1_girls) as ncp_1_girls_sum','sum(ncp_2_boys) as ncp_2_boys_sum','sum(ncp_2_girls) as ncp_2_girls_sum','sum(ncp_3_boys) as ncp_3_boys_sum','sum(ncp_3_girls) as ncp_3_girls_sum','sum(ncp_4_boys) as ncp_4_boys_sum','sum(ncp_4_girls) as ncp_4_girls_sum','sum(ncp_5_boys) as ncp_5_boys_sum','sum(ncp_5_girls) as ncp_5_girls_sum','sum(ncp_6_boys) as ncp_6_boys_sum','sum(ncp_6_girls) as ncp_6_girls_sum','sum(ncp_7_boys) as ncp_7_boys_sum','sum(ncp_7_girls) as ncp_7_girls_sum','sum(ncp_8_boys) as ncp_8_boys_sum','sum(ncp_8_girls) as ncp_8_girls_sum')));
				$this->set('school_students_promoted_sum',$school_students_promoted_sum[0]);
				
				$this->set('school_students_promoted',($this->params['form']['school_students_promoted']));
			}
			
			if(isset($this->params['form']['school_students_repeating']))
			{
				$school_students_repeating_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(ncr_katchi_boys) as ncr_katchi_boys_sum','sum(ncr_katchi_girls) as ncr_katchi_girls_sum','sum(ncr_1_boys) as ncr_1_boys_sum','sum(ncr_1_girls) as ncr_1_girls_sum','sum(ncr_2_boys) as ncr_2_boys_sum','sum(ncr_2_girls) as ncr_2_girls_sum','sum(ncr_3_boys) as ncr_3_boys_sum','sum(ncr_3_girls) as ncr_3_girls_sum','sum(ncr_4_boys) as ncr_4_boys_sum','sum(ncr_4_girls) as ncr_4_girls_sum','sum(ncr_5_boys) as ncr_5_boys_sum','sum(ncr_5_girls) as ncr_5_girls_sum','sum(ncr_6_boys) as ncr_6_boys_sum','sum(ncr_6_girls) as ncr_6_girls_sum','sum(ncr_7_boys) as ncr_7_boys_sum','sum(ncr_7_girls) as ncr_7_girls_sum','sum(ncr_8_boys) as ncr_8_boys_sum','sum(ncr_8_girls) as ncr_8_girls_sum')));
				$this->set('school_students_repeating_sum',$school_students_repeating_sum[0]);
				
				$this->set('school_students_repeating',($this->params['form']['school_students_repeating']));
			}
			
			if(isset($this->params['form']['school_students_transferred']))
			{
				$school_students_transferred_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(nctos_katchi_boys) as nctos_katchi_boys_sum','sum(nctos_katchi_girls) as nctos_katchi_girls_sum','sum(nctos_1_boys) as nctos_1_boys_sum','sum(nctos_1_girls) as nctos_1_girls_sum','sum(nctos_2_boys) as nctos_2_boys_sum','sum(nctos_2_girls) as nctos_2_girls_sum','sum(nctos_3_boys) as nctos_3_boys_sum','sum(nctos_3_girls) as nctos_3_girls_sum','sum(nctos_4_boys) as nctos_4_boys_sum','sum(nctos_4_girls) as nctos_4_girls_sum','sum(nctos_5_boys) as nctos_5_boys_sum','sum(nctos_5_girls) as nctos_5_girls_sum','sum(nctos_6_boys) as nctos_6_boys_sum','sum(nctos_6_girls) as nctos_6_girls_sum','sum(nctos_7_boys) as nctos_7_boys_sum','sum(nctos_7_girls) as nctos_7_girls_sum','sum(nctos_8_boys) as nctos_8_boys_sum','sum(nctos_8_girls) as nctos_8_girls_sum')));
				$this->set('school_students_transferred_sum',$school_students_transferred_sum[0]);
				
				$this->set('school_students_transferred',($this->params['form']['school_students_transferred']));
			}
			
			if(isset($this->params['form']['school_students_droppedout']))
			{
				$school_students_droppedout_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(ncdo_katchi_boys) as ncdo_katchi_boys_sum','sum(ncdo_katchi_girls) as ncdo_katchi_girls_sum','sum(ncdo_1_boys) as ncdo_1_boys_sum','sum(ncdo_1_girls) as ncdo_1_girls_sum','sum(ncdo_2_boys) as ncdo_2_boys_sum','sum(ncdo_2_girls) as ncdo_2_girls_sum','sum(ncdo_3_boys) as ncdo_3_boys_sum','sum(ncdo_3_girls) as ncdo_3_girls_sum','sum(ncdo_4_boys) as ncdo_4_boys_sum','sum(ncdo_4_girls) as ncdo_4_girls_sum','sum(ncdo_5_boys) as ncdo_5_boys_sum','sum(ncdo_5_girls) as ncdo_5_girls_sum','sum(ncdo_6_boys) as ncdo_6_boys_sum','sum(ncdo_6_girls) as ncdo_6_girls_sum','sum(ncdo_7_boys) as ncdo_7_boys_sum','sum(ncdo_7_girls) as ncdo_7_girls_sum','sum(ncdo_8_boys) as ncdo_8_boys_sum','sum(ncdo_8_girls) as ncdo_8_girls_sum')));
				$this->set('school_students_droppedout_sum',$school_students_droppedout_sum[0]);
				
				$this->set('school_students_droppedout',($this->params['form']['school_students_droppedout']));
			}
			
			if(isset($this->params['form']['school_students_attendance_today']))
			{
				$school_students_attendance_today_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(gwat_katchi_boys) as gwat_katchi_boys_sum','sum(gwat_katchi_girls) as gwat_katchi_girls_sum','sum(gwat_1_boys) as gwat_1_boys_sum','sum(gwat_1_girls) as gwat_1_girls_sum','sum(gwat_2_boys) as gwat_2_boys_sum','sum(gwat_2_girls) as gwat_2_girls_sum','sum(gwat_3_boys) as gwat_3_boys_sum','sum(gwat_3_girls) as gwat_3_girls_sum','sum(gwat_4_boys) as gwat_4_boys_sum','sum(gwat_4_girls) as gwat_4_girls_sum','sum(gwat_5_boys) as gwat_5_boys_sum','sum(gwat_5_girls) as gwat_5_girls_sum','sum(gwat_6_boys) as gwat_6_boys_sum','sum(gwat_6_girls) as gwat_6_girls_sum','sum(gwat_7_boys) as gwat_7_boys_sum','sum(gwat_7_girls) as gwat_7_girls_sum','sum(gwat_8_boys) as gwat_8_boys_sum','sum(gwat_8_girls) as gwat_8_girls_sum')));
				$this->set('school_students_attendance_today_sum',$school_students_attendance_today_sum[0]);
				
				$this->set('school_students_attendance_today',($this->params['form']['school_students_attendance_today']));
			}
			
			if(isset($this->params['form']['school_students_absent_month']))
			{
				$school_students_absent_month_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(ncna_katchi_boys) as ncna_katchi_boys_sum','sum(ncna_katchi_girls) as ncna_katchi_girls_sum','sum(ncna_1_boys) as ncna_1_boys_sum','sum(ncna_1_girls) as ncna_1_girls_sum','sum(ncna_2_boys) as ncna_2_boys_sum','sum(ncna_2_girls) as ncna_2_girls_sum','sum(ncna_3_boys) as ncna_3_boys_sum','sum(ncna_3_girls) as ncna_3_girls_sum','sum(ncna_4_boys) as ncna_4_boys_sum','sum(ncna_4_girls) as ncna_4_girls_sum','sum(ncna_5_boys) as ncna_5_boys_sum','sum(ncna_5_girls) as ncna_5_girls_sum','sum(ncna_6_boys) as ncna_6_boys_sum','sum(ncna_6_girls) as ncna_6_girls_sum','sum(ncna_7_boys) as ncna_7_boys_sum','sum(ncna_7_girls) as ncna_7_girls_sum','sum(ncna_8_boys) as ncna_8_boys_sum','sum(ncna_8_girls) as ncna_8_girls_sum')));
				$this->set('school_students_absent_month_sum',$school_students_absent_month_sum[0]);
				
				$this->set('school_students_absent_month',($this->params['form']['school_students_absent_month']));
			}
			
			if(isset($this->params['form']['school_average_attendance']))
			{
				$school_average_attendance_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(aalm_katchi_boys) as aalm_katchi_boys_sum','sum(aalm_katchi_girls) as aalm_katchi_girls_sum','sum(aalm_1_boys) as aalm_1_boys_sum','sum(aalm_1_girls) as aalm_1_girls_sum','sum(aalm_2_boys) as aalm_2_boys_sum','sum(aalm_2_girls) as aalm_2_girls_sum','sum(aalm_3_boys) as aalm_3_boys_sum','sum(aalm_3_girls) as aalm_3_girls_sum','sum(aalm_4_boys) as aalm_4_boys_sum','sum(aalm_4_girls) as aalm_4_girls_sum','sum(aalm_5_boys) as aalm_5_boys_sum','sum(aalm_5_girls) as aalm_5_girls_sum','sum(aalm_6_boys) as aalm_6_boys_sum','sum(aalm_6_girls) as aalm_6_girls_sum','sum(aalm_7_boys) as aalm_7_boys_sum','sum(aalm_7_girls) as aalm_7_girls_sum','sum(aalm_8_boys) as aalm_8_boys_sum','sum(aalm_8_girls) as aalm_8_girls_sum')));
				$this->set('school_average_attendance_sum',$school_average_attendance_sum[0]);
				
				$this->set('school_average_attendance',($this->params['form']['school_average_attendance']));
			}
			
			if(isset($this->params['form']['school_numberof_teachers']))
			{
				
				$teachers_in_cluster_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(teachers_sanctioned) as teachers_sanctioned_sum','sum(teachers_working) as teachers_working_sum','sum(teachers_present) as teachers_present_sum','sum(teachers_onleave) as teachers_onleave_sum','sum(teachers_onderailment) as teachers_onderailment_sum','sum(teachers_oncontract) as teachers_oncontract_sum','sum(teachers_wb) as teachers_wb_sum','sum(teachers_nchd) as teachers_nchd_sum','sum(teachers_unicef) as teachers_unicef_sum','sum(teachers_smc) as teachers_smc_sum','sum(teachers_anyother) as teachers_anyother_sum','sum(teachers_other) as teachers_other_sum')));
				$this->set('teachers_in_cluster_sum',$teachers_in_cluster_sum[0]);
				
				$this->set('school_numberof_teachers',($this->params['form']['school_numberof_teachers']));
			}
			
			if(isset($this->params['form']['school_teachers_basic_info']))
			{
				$this->set('school_teachers_basic_info',($this->params['form']['school_teachers_basic_info']));
			}
			
			if(isset($this->params['form']['school_teachers_months_attendance']))
			{
				$this->set('school_teachers_months_attendance',($this->params['form']['school_teachers_months_attendance']));
			}
			
			//5. School Facility Identifiers for the Reports
			if(isset($this->params['form']['school_toilets_facility']))
			{
				
				$toilets_available_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'toilets_available'=>1)));
				$this->set('toilets_available_count',$toilets_available_count);
				$number_toilets_available_sum = $this->SchoolFacility->find('first',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(no_of_toilets) as sum_toilets_count')));
				$this->set('number_toilets_available_sum',$number_toilets_available_sum[0]);
				$toilet_cleanliness_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'toilet_cleanliness'=>1)));
				$this->set('toilet_cleanliness_count',$toilet_cleanliness_count);
				$toilet_closing_door_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'toilet_closing_door'=>1)));
				$this->set('toilet_closing_door_count',$toilet_closing_door_count);
				$water_available_in_toilet_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'water_available_in_toilet'=>1)));
				$this->set('water_available_in_toilet_count',$water_available_in_toilet_count);
				$toilet_drainage_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'toilet_drainage'=>1)));
				$this->set('toilet_drainage_count',$toilet_drainage_count);
				
				
				$this->set('school_toilets_facility',($this->params['form']['school_toilets_facility']));
			}
			
			if(isset($this->params['form']['school_water_facility']))
			{
				$water_available_in_toilet_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'water_available_in_toilet'=>1)));
				$this->set('water_available_in_toilet_count',$water_available_in_toilet_count);
				$toilet_drainage_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'toilet_drainage'=>1)));
				$this->set('toilet_drainage_count',$toilet_drainage_count);
				$water_available_in_school_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'water_available_in_school'=>1)));
				$this->set('water_available_in_school_count',$water_available_in_school_count);
				$water_drinkable_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'water_drinkable'=>1)));
				$this->set('water_drinkable_count',$water_drinkable_count);
				
				
				
				$this->set('school_water_facility',($this->params['form']['school_water_facility']));
			}
			
			if(isset($this->params['form']['school_electricity_facility']))
			{
				$school_has_electricity_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'school_has_electricity'=>1)));
				$this->set('school_has_electricity_count',$school_has_electricity_count);
				$electricity_wiring_installed_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'electricity_wiring_installed'=>1)));
				$this->set('electricity_wiring_installed_count',$electricity_wiring_installed_count);
				$electricity_on_right_now_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'electricity_on_right_now'=>1)));
				$this->set('electricity_on_right_now_count',$electricity_on_right_now_count);
				$electricity_meter_installed_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'electricity_meter_installed'=>1)));
				$this->set('electricity_meter_installed_count',$electricity_meter_installed_count);
				
				
				
				$this->set('school_electricity_facility',($this->params['form']['school_electricity_facility']));
			}
			
			if(isset($this->params['form']['school_safety_facility']))
			{
				$broken_window_panes_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'broken_window_panes'=>1)));
				$this->set('broken_window_panes_count',$broken_window_panes_count);
				$cracks_in_wall_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'cracks_in_wall'=>1)));
				$this->set('cracks_in_wall_count',$cracks_in_wall_count);
				$garbage_lying_around_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'garbage_lying_around'=>1)));
				$this->set('garbage_lying_around_count',$garbage_lying_around_count);
				$leakage_in_ceiling_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'leakage_in_ceiling'=>1)));
				$this->set('leakage_in_ceiling_count',$leakage_in_ceiling_count);
				$cracks_in_ceiling_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'cracks_in_ceiling'=>1)));
				$this->set('cracks_in_ceiling_count',$cracks_in_ceiling_count);
				
				
				$this->set('school_safety_facility',($this->params['form']['school_safety_facility']));
			}
			
			if(isset($this->params['form']['school_classroom_facility']))
			{
				$classroom_ventilated_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'classroom_ventilated'=>1)));
				$this->set('classroom_ventilated_count',$classroom_ventilated_count);
				$light_availability_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'light_availability'=>1)));
				$this->set('light_availability_count',$light_availability_count);
				$temperature_reasonably_bearable_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'temperature_reasonably_bearable'=>1)));
				$this->set('temperature_reasonably_bearable_count',$temperature_reasonably_bearable_count);
				$children_seated_comfortably_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'children_seated_comfortably'=>1)));
				$this->set('children_seated_comfortably_count',$children_seated_comfortably_count);
				$time_table_available_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'time_table_available'=>1)));
				$this->set('time_table_available_count',$time_table_available_count);
				$student_achievement_info_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'student_achievement_info'=>1)));
				$this->set('student_achievement_info_count',$student_achievement_info_count);
				
				
				$this->set('school_classroom_facility',($this->params['form']['school_classroom_facility']));
			}
			
			if(isset($this->params['form']['school_outdoor_facility']))
			{
				$boundary_wall_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'boundary_wall'=>1)));
				$this->set('boundary_wall_count',$boundary_wall_count);
				$gate_installed_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'gate_installed'=>1)));
				$this->set('gate_installed_count',$gate_installed_count);
				$children_playing_space_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'children_playing_space'=>1)));
				$this->set('children_playing_space_count',$children_playing_space_count);
				$plantation_in_school_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'plantation_in_school'=>1)));
				$this->set('plantation_in_school_count',$plantation_in_school_count);
				$hazards_around_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'hazards_around'=>1)));
				$this->set('hazards_around_count',$hazards_around_count);
				$regular_assembly_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'regular_assembly'=>1)));
				$this->set('regular_assembly_count',$regular_assembly_count);
				$extracurricular_activity_lastquarter_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'extracurricular_activity_lastquarter'=>1)));
				$this->set('extracurricular_activity_lastquarter_count',$extracurricular_activity_lastquarter_count);
				
				
				
				$this->set('school_outdoor_facility',($this->params['form']['school_outdoor_facility']));
			}
			
			if(isset($this->params['form']['school_furniture_facility']))
			{
				$blackboard_well_painted_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'blackboard_well_painted'=>1)));
				$this->set('blackboard_well_painted_count',$blackboard_well_painted_count);
				$storage_for_school_records_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'storage_for_school_records'=>1)));
				$this->set('storage_for_school_records_count',$storage_for_school_records_count);
				
				
				$this->set('school_furniture_facility',($this->params['form']['school_furniture_facility']));
			}
			
			//6. School Management Committee Identifiers for the report
			
			if(isset($this->params['form']['school_smc_basicinfo']))
			{
				//getting the basic info for the clusters
				
				$smc_notified_schools = $this->SchoolManagementCommitee->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'has_notified_smc'=>1)));
				//debug($smc_notified_schools);
				$this->set('smc_notified_schools',$smc_notified_schools);
				
				$community_contribution_in_schools = $this->SchoolManagementCommitee->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'community_contribution_to_school'=>1)));
				$this->set('community_contribution_in_schools',$community_contribution_in_schools);
				
				
				
				$smc_cluster_basicinfo = $this->SchoolManagementCommitee->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(smc_members_male) as smc_members_male_sum','sum(smc_members_female) as smc_members_female_sum','sum(smc_visits_this_year) as smc_visits_this_year_sum','sum(smc_visits_last_year) as smc_visits_last_year_sum')));
				//debug($smc_cluster_basicinfo);
				$this->set('smc_cluster_basicinfo',$smc_cluster_basicinfo);
				
				$this->set('school_smc_basicinfo',($this->params['form']['school_smc_basicinfo']));
			}
			
			if(isset($this->params['form']['school_smc_funding']))
			{
				$smc_cluster_funding = $this->SchoolManagementCommitee->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(funding_recieved_current_year) as funding_recieved_current_year_sum','sum(funding_recieved_last_year) as funding_recieved_last_year_sum')));
				//debug($smc_cluster_funding);
				$this->set('smc_cluster_funding',$smc_cluster_funding[0]);
				
				$this->set('school_smc_funding',($this->params['form']['school_smc_funding']));
			}
			
			}
			else
			{
				$this->redirect('../home/');
			}
		}
		else
		{
			$this->redirect('../home/index');
		}
	}
	
	
	
	
	function submit_uc_report_details($id = null)
	{
		if(isset($this->params['form']))
		{
			if(isset($this->params['form']['download_report']))
			{
				$this->RequestHandler->setContent('xls', 'application/vnd.ms-excel'); 
				$this->layout = "xls";
				
				if(isset($this->params["url"]["start_day"]))
			{
				$startDate = $this->params["url"]["start_year"]."-". $this->params["url"]["start_month"]."-". $this->params["url"]["start_day"]." 00:00:00";
				$endDate = $this->params["url"]["end_year"]."-". $this->params["url"]["end_month"]."-". $this->params["url"]["end_day"]." 59:59:59";			
				
				$this->Set("startDate",$this->params["url"]["start_day"]);
				$this->Set("startYear",$this->params["url"]["start_year"]);
				$this->Set("startMonth",$this->params["url"]["start_month"]);
				
				$this->Set("endDate",$this->params["url"]["end_day"]);
				$this->Set("endYear",$this->params["url"]["end_year"]);
				$this->Set("endMonth",$this->params["url"]["end_month"]);
			}
			else
			{
				$startDate = date("Y-m")."-1 00:00:00";
				$endDate = date("Y-m")."-31 24:60:60";
				
				$this->Set("startDate","1");
				$this->Set("startYear",date("Y"));
				$this->Set("startMonth",date("m"));
				
				$this->Set("endDate","31");
				$this->Set("endYear",date("Y"));
				$this->Set("endMonth",date("m"));
			}
			
			$this->set("filename","cluster_report");
				
			}
			
			//Gathering School Specific Information
			
			$semis_code = $this->params['form']['semis_code'];
			$school = $this->School->find('first',array('conditions'=>array('code'=>$semis_code)));
			$school_name = ($school['School']['prefix']).' - '.($school['School']['name']);
			$this->set('school_name',$school_name);
			
			$cluster = $this->Cluster->find('first',array('conditions'=>array('id'=>($school['School']['clusterid']))));
			$cluster_name = $cluster['Cluster']['name'];
			$this->set('cluster_name',$cluster_name);
			
			
			$uc = $this->Uc->find('first',array('conditions'=>array('id'=>($cluster['Cluster']['uc_id']))));
			$uc_name = $uc['Uc']['name'];
			$this->set('uc_name',$uc_name);
			
			$taluka = $this->Taluka->find('first',array('conditions'=>array('id'=>($uc['Uc']['taluka_id']))));
			$taluka_name = $taluka['Taluka']['name'];
			$this->set('taluka_name',$taluka_name);
			
			
			$district = $this->Region->find('first',array('conditions'=>array('id'=>($taluka['Taluka']['district_id']	))));
			$district_name = $district['Region']['name'];
			$this->set('district_name',$district_name);
			
			
			//getting the ids of all the schools in the Uc
			
			$uc_id = array();
			
			$this_school_cluster = $this->Cluster->find('first',array('conditions'=>array('id'=>$school['School']['clusterid'])));
			$this_school_uc = $this->Uc->find('first',array('conditions'=>array('id'=>$this_school_cluster['Cluster']['uc_id'])));
			
			$this_uc_clusters = $this->Cluster->find('all',array('conditions'=>array('uc_id'=>$this_school_uc['Uc']['id'])));
			//debug($this_uc_clusters);
			
			$this_uc_cluster_ids_array = array();
			
			foreach($this_uc_clusters as $this_uc_cluster)
			{
				$this_uc_cluster_ids_array[] = $this_uc_cluster['Cluster']['id'];
			}
			//debug($this_uc_cluster_ids_array);
			
			
			$cluster_school_ids = array();	
			
			$cluster_school_ids_array = $this->School->find('all',array('conditions'=>array('clusterid'=>$this_uc_cluster_ids_array),'fields'=>array('id')));
			foreach($cluster_school_ids_array as $cluster_school_id)
			{
				$cluster_school_ids[] = $cluster_school_id['School']['id'];
			}
			
			$cluster_school_identification_ids_array = $this->SchoolIdentification->find('all',array('conditions'=>array('school_id'=>$cluster_school_ids),'fields'=>array('id')));
			foreach($cluster_school_identification_ids_array as $cluster_school_identification_id)
			{
				$cluster_school_identification_ids[] = $cluster_school_identification_id['SchoolIdentification']['id'];
			}
			
			$count_of_school = count($cluster_school_ids);
			$this->set('count_of_school',$count_of_school);
			$count_of_surveys = count($cluster_school_identification_ids);
			$this->set('count_of_surveys',$count_of_surveys);
			
			//debug($cluster_school_ids);
			
			//Gathering Baseline Survey information for the school
			$schoolIdentification = $this->SchoolIdentification->find('first',array('conditions'=>array('school_id'=>($school['School']['id']))));
			if(!empty($schoolIdentification))
			{
			$this->set('schoolIdentification',$schoolIdentification);
			
			$basicInformation = $this->BasicInformation->find('first',array('conditions'=>array('school_identification_id'=>($schoolIdentification['SchoolIdentification']['id']))));
			$this->set('basicInformation',$basicInformation);
			
			$schoolManagementCommitee = $this->SchoolManagementCommitee->find('first',array('conditions'=>array('school_identification_id'=>($schoolIdentification['SchoolIdentification']['id']))));
			$this->set('schoolManagementCommitee',$schoolManagementCommitee);
			
			
			$records = $this->Record->find('first',array('conditions'=>array('school_identification_id'=>($schoolIdentification['SchoolIdentification']['id']))));
			$this->set('records',$records);
			
			$schoolFacility = $this->SchoolFacility->find('first',array('conditions'=>array('school_identification_id'=>($schoolIdentification['SchoolIdentification']['id']))));
			$this->set('schoolFacility',$schoolFacility);
			
			$enrollmentAttendance = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>($schoolIdentification['SchoolIdentification']['id']))));
			$this->set('enrollmentAttendance',$enrollmentAttendance);
			
			$staffs = $this->Staff->find('all',array('conditions'=>array('school_identification_id'=>($schoolIdentification['SchoolIdentification']['id']))));
			$this->set('staffs',$staffs);
			
			$staffAttendances = $this->StaffAttendance->find('all',array('conditions'=>array('school_identification_id'=>($schoolIdentification['SchoolIdentification']['id']))));
			$this->set('staffAttendances',$staffAttendances);
			
			
			//1. School Identification Identifiers for Report
			if(isset($this->params['form']['school_info']))
			{
				$this->set('school_info',($this->params['form']['school_info']));
			}
			if(isset($this->params['form']['school_address']))
			{
				$this->set('school_address',($this->params['form']['school_address']));
			}
			if(isset($this->params['form']['school_distances']))
			{
				$this->set('school_distances',($this->params['form']['school_distances']));
			}
			if(isset($this->params['form']['school_oppurtunities']))
			{
				$this->set('school_oppurtunities',($this->params['form']['school_oppurtunities']));
				
				//$count = $this->SchoolIdentification->query('select sum(secondary_boys) from  school_identifications');
				$cluster_oppurtunities = $this->SchoolIdentification->find('all',array('conditions'=>array('id'=>$cluster_school_identification_ids),'fields'=>array('sum(secondary_boys) as secondary_boys_sum','sum(secondary_girls) as secondary_girls_sum','sum(elementary_boys) as elementary_boys_sum','sum(elementary_girls) as elementary_girls_sum','sum(private_boys) as private_boys_sum','sum(private_girls) as private_girls_sum','sum(other_boys) as other_boys_sum','sum(other_girls) as other_girls_sum')));
				
				//debug($cluster_oppurtunities);
				$this->set('cluster_oppurtunities',$cluster_oppurtunities);
			}
			
			
			
			//2. School Basic Information Identifiers for report 
			if(isset($this->params['form']['school_basics']))
			{
				//getting cluster information for the school basics
				$number_functional_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_status'=>'functional')));
				$this->set('number_functional_schools',$number_functional_schools);
				$number_primary_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_level'=>'primary')));
				$this->set('number_primary_schools',$number_primary_schools);
				$number_middle_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_level'=>'middle')));
				$this->set('number_middle_schools',$number_middle_schools);
				$number_elementry_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_level'=>'elementary')));
				$this->set('number_elementry_schools',$number_elementry_schools);
				$number_boys_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_gender'=>'boys')));
				$this->set('number_boys_schools',$number_boys_schools);
				$number_girls_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_gender'=>'girls')));
				$this->set('number_girls_schools',$number_girls_schools);
				$number_mix_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_gender'=>'mixed')));
				$this->set('number_mix_schools',$number_mix_schools);
				$number_sindhi_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'medium_of_instruction'=>'sindhi')));
				$this->set('number_sindhi_schools',$number_sindhi_schools);
				$number_urdu_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'medium_of_instruction'=>'urdu')));
				$this->set('number_urdu_schools',$number_urdu_schools);
				$number_english_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'medium_of_instruction'=>'english')));
				$this->set('number_english_schools',$number_english_schools);
				$number_schools_has_school_in_range = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_in_range'=>1)));
				$this->set('number_schools_has_school_in_range',$number_schools_has_school_in_range);
				$number_schools_has_highschool_in_range = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'high_school_in_range'=>1)));
				$this->set('number_schools_has_highschool_in_range',$number_schools_has_highschool_in_range);
				
				$this->set('school_basics',($this->params['form']['school_basics']));
			}
			if(isset($this->params['form']['school_bank_budget']))
			{
			
				$number_schools_recieved_budget = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'budget_recieved'=>1)));
				$this->set('number_schools_recieved_budget',$number_schools_recieved_budget);
				$number_schools_has_bank_account = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_account'=>1)));
				$this->set('number_schools_has_bank_account',$number_schools_has_bank_account);
			
				$this->set('school_bank_budget',($this->params['form']['school_bank_budget']));
			}
			if(isset($this->params['form']['school_rooms_other']))
			{
				
				$school_rooms_other_sum = $this->BasicInformation->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(no_of_rooms) as no_of_rooms_sum','sum(total_rooms_inuse) as total_rooms_inuse_sum','sum(classrooms) as classrooms_sum','sum(office) as office_sum','sum(store) as store_sum','sum(unused) as unused_sum','sum(unsafe) as unsafe_sum','sum(other) as other_sum')));
				//debug($school_rooms_other_sum[0]);
				$this->set('school_rooms_other_sum',$school_rooms_other_sum[0]);
				
				$this->set('school_rooms_other',($this->params['form']['school_rooms_other']));
			}
			
			
			//3. Records Identifiers for the report
			if(isset($this->params['form']['school_student_record']))
			{
				$numberofschool_stu_att_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'stu_att_available'=>1)));
				$this->set('numberofschool_stu_att_available_cluster',$numberofschool_stu_att_available_cluster);
				$numberofschool_stu_att_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'stu_att_updated'=>1)));
				$this->set('numberofschool_stu_att_updated_cluster',$numberofschool_stu_att_updated_cluster);
				$numberofschool_gr_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'gr_available'=>1)));
				$this->set('numberofschool_gr_available_cluster',$numberofschool_gr_available_cluster);
				$numberofschool_gr_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'gr_updated'=>1)));
				$this->set('numberofschool_gr_updated_cluster',$numberofschool_gr_updated_cluster);
				$numberofschool_exam_result_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'exam_result_available'=>1)));
				$this->set('numberofschool_exam_result_available_cluster',$numberofschool_exam_result_available_cluster);
				$numberofschool_exam_result_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'exam_result_updated'=>1)));
				$this->set('numberofschool_exam_result_updated_cluster',$numberofschool_exam_result_updated_cluster);
				
				$this->set('school_student_record',($this->params['form']['school_student_record']));
			}
			
			if(isset($this->params['form']['school_teacher_record']))
			{
				$numberofschool_tar_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'tar_available'=>1)));
				$this->set('numberofschool_tar_available_cluster',$numberofschool_tar_available_cluster);
				$numberofschool_tar_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'tar_updated'=>1)));
				$this->set('numberofschool_tar_updated_cluster',$numberofschool_tar_updated_cluster);
				$numberofschool_tlr_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'tlr_available'=>1)));
				$this->set('numberofschool_tlr_available_cluster',$numberofschool_tlr_available_cluster);
				$numberofschool_tlr_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'tlr_updated'=>1)));
				$this->set('numberofschool_tlr_updated_cluster',$numberofschool_tlr_updated_cluster);
				
				
				$this->set('school_teacher_record',($this->params['form']['school_teacher_record']));
			}
			
			if(isset($this->params['form']['school_smc_records']))
			{
				$numberofschool_smc_register_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'smc_register_available'=>1)));
				$this->set('numberofschool_smc_register_available_cluster',$numberofschool_smc_register_available_cluster);
				$numberofschool_smc_register_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'smc_register_updated'=>1)));
				$this->set('numberofschool_smc_register_updated_cluster',$numberofschool_smc_register_updated_cluster);
				$numberofschool_smc_notif_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'smc_notif_available'=>1)));
				$this->set('numberofschool_smc_notif_available_cluster',$numberofschool_smc_notif_available_cluster);
				$numberofschool_smc_guideline_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'smc_guideline_available'=>1)));
				$this->set('numberofschool_smc_guideline_available_cluster',$numberofschool_smc_guideline_available_cluster);
				$numberofschool_smc_accountinfo_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'smc_accountinfo_available'=>1)));
				$this->set('numberofschool_smc_accountinfo_available_cluster',$numberofschool_smc_accountinfo_available_cluster);
				
				
				$this->set('school_smc_records',($this->params['form']['school_smc_records']));
			}
			
			if(isset($this->params['form']['school_sip_other_records']))
			{
				$numberofschool_vb_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'vb_available'=>1)));
				$this->set('numberofschool_vb_available_cluster',$numberofschool_vb_available_cluster);
				$numberofschool_vb_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'vb_updated'=>1)));
				$this->set('numberofschool_vb_updated_cluster',$numberofschool_vb_updated_cluster);
				$numberofschool_ss_form_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'ss_form_available'=>1)));
				$this->set('numberofschool_ss_form_available_cluster',$numberofschool_ss_form_available_cluster);
				$numberofschool_ss_form_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'ss_form_updated'=>1)));
				$this->set('numberofschool_ss_form_updated_cluster',$numberofschool_ss_form_updated_cluster);
				$numberofschool_tb_distribution_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'tb_distribution_available'=>1)));
				$this->set('numberofschool_tb_distribution_available_cluster',$numberofschool_tb_distribution_available_cluster);
				$numberofschool_tb_distribution_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'tb_distribution_updated'=>1)));
				$this->set('numberofschool_tb_distribution_updated_cluster',$numberofschool_tb_distribution_updated_cluster);
				$numberofschool_as_register_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'as_register_available'=>1)));
				$this->set('numberofschool_as_register_available_cluster',$numberofschool_as_register_available_cluster);
				$numberofschool_as_register_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'as_register_updated'=>1)));
				$this->set('numberofschool_as_register_updated_cluster',$numberofschool_as_register_updated_cluster);
				$numberofschool_sip_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'sip_available'=>1)));
				$this->set('numberofschool_sip_available_cluster',$numberofschool_sip_available_cluster);
				$numberofschool_sip_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'sip_updated'=>1)));
				$this->set('numberofschool_sip_updated_cluster',$numberofschool_sip_updated_cluster);
				
				
				
				$this->set('school_sip_other_records',($this->params['form']['school_sip_other_records']));
			}
			
			
			//checking for checked parameters
			
			
			
			//4. Enrollment and Attendance Identifiers for the Reports
			if(isset($this->params['form']['school_enrollment_this_year']))
			{
				$school_enrollment_this_year_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(gwe_katchi_boys) as gwe_katchi_boys_sum','sum(gwe_katchi_girls) as gwe_katchi_girls_sum','sum(gwe_1_boys) as gwe_1_boys_sum','sum(gwe_1_girls) as gwe_1_girls_sum','sum(gwe_2_boys) as gwe_2_boys_sum','sum(gwe_2_girls) as gwe_2_girls_sum','sum(gwe_3_boys) as gwe_3_boys_sum','sum(gwe_3_girls) as gwe_3_girls_sum','sum(gwe_4_boys) as gwe_4_boys_sum','sum(gwe_4_girls) as gwe_4_girls_sum','sum(gwe_5_boys) as gwe_5_boys_sum','sum(gwe_5_girls) as gwe_5_girls_sum','sum(gwe_6_boys) as gwe_6_boys_sum','sum(gwe_6_girls) as gwe_6_girls_sum','sum(gwe_7_boys) as gwe_7_boys_sum','sum(gwe_7_girls) as gwe_7_girls_sum','sum(gwe_8_boys) as gwe_8_boys_sum','sum(gwe_8_girls) as gwe_8_girls_sum')));
				$this->set('school_enrollment_this_year_sum',$school_enrollment_this_year_sum[0]);
				$this->set('school_enrollment_this_year',($this->params['form']['school_enrollment_this_year']));
			}
			
			if(isset($this->params['form']['school_enrollment_last_year']))
			{
				$school_enrollment_last_year_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(tely_katchi_boys) as tely_katchi_boys_sum','sum(tely_katchi_girls) as tely_katchi_girls_sum','sum(tely_1_boys) as tely_1_boys_sum','sum(tely_1_girls) as tely_1_girls_sum','sum(tely_2_boys) as tely_2_boys_sum','sum(tely_2_girls) as tely_2_girls_sum','sum(tely_3_boys) as tely_3_boys_sum','sum(tely_3_girls) as tely_3_girls_sum','sum(tely_4_boys) as tely_4_boys_sum','sum(tely_4_girls) as tely_4_girls_sum','sum(tely_5_boys) as tely_5_boys_sum','sum(tely_5_girls) as tely_5_girls_sum','sum(tely_6_boys) as tely_6_boys_sum','sum(tely_6_girls) as tely_6_girls_sum','sum(tely_7_boys) as tely_7_boys_sum','sum(tely_7_girls) as tely_7_girls_sum','sum(tely_8_boys) as tely_8_boys_sum','sum(tely_8_girls) as tely_8_girls_sum')));
				$this->set('school_enrollment_last_year_sum',$school_enrollment_last_year_sum[0]);
				
				$this->set('school_enrollment_last_year',($this->params['form']['school_enrollment_last_year']));
			}
			
			
			if(isset($this->params['form']['school_students_promoted']))
			{
				$school_students_promoted_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(ncp_katchi_boys) as ncp_katchi_boys_sum','sum(ncp_katchi_girls) as ncp_katchi_girls_sum','sum(ncp_1_boys) as ncp_1_boys_sum','sum(ncp_1_girls) as ncp_1_girls_sum','sum(ncp_2_boys) as ncp_2_boys_sum','sum(ncp_2_girls) as ncp_2_girls_sum','sum(ncp_3_boys) as ncp_3_boys_sum','sum(ncp_3_girls) as ncp_3_girls_sum','sum(ncp_4_boys) as ncp_4_boys_sum','sum(ncp_4_girls) as ncp_4_girls_sum','sum(ncp_5_boys) as ncp_5_boys_sum','sum(ncp_5_girls) as ncp_5_girls_sum','sum(ncp_6_boys) as ncp_6_boys_sum','sum(ncp_6_girls) as ncp_6_girls_sum','sum(ncp_7_boys) as ncp_7_boys_sum','sum(ncp_7_girls) as ncp_7_girls_sum','sum(ncp_8_boys) as ncp_8_boys_sum','sum(ncp_8_girls) as ncp_8_girls_sum')));
				$this->set('school_students_promoted_sum',$school_students_promoted_sum[0]);
				
				$this->set('school_students_promoted',($this->params['form']['school_students_promoted']));
			}
			
			if(isset($this->params['form']['school_students_repeating']))
			{
				$school_students_repeating_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(ncr_katchi_boys) as ncr_katchi_boys_sum','sum(ncr_katchi_girls) as ncr_katchi_girls_sum','sum(ncr_1_boys) as ncr_1_boys_sum','sum(ncr_1_girls) as ncr_1_girls_sum','sum(ncr_2_boys) as ncr_2_boys_sum','sum(ncr_2_girls) as ncr_2_girls_sum','sum(ncr_3_boys) as ncr_3_boys_sum','sum(ncr_3_girls) as ncr_3_girls_sum','sum(ncr_4_boys) as ncr_4_boys_sum','sum(ncr_4_girls) as ncr_4_girls_sum','sum(ncr_5_boys) as ncr_5_boys_sum','sum(ncr_5_girls) as ncr_5_girls_sum','sum(ncr_6_boys) as ncr_6_boys_sum','sum(ncr_6_girls) as ncr_6_girls_sum','sum(ncr_7_boys) as ncr_7_boys_sum','sum(ncr_7_girls) as ncr_7_girls_sum','sum(ncr_8_boys) as ncr_8_boys_sum','sum(ncr_8_girls) as ncr_8_girls_sum')));
				$this->set('school_students_repeating_sum',$school_students_repeating_sum[0]);
				
				$this->set('school_students_repeating',($this->params['form']['school_students_repeating']));
			}
			
			if(isset($this->params['form']['school_students_transferred']))
			{
				$school_students_transferred_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(nctos_katchi_boys) as nctos_katchi_boys_sum','sum(nctos_katchi_girls) as nctos_katchi_girls_sum','sum(nctos_1_boys) as nctos_1_boys_sum','sum(nctos_1_girls) as nctos_1_girls_sum','sum(nctos_2_boys) as nctos_2_boys_sum','sum(nctos_2_girls) as nctos_2_girls_sum','sum(nctos_3_boys) as nctos_3_boys_sum','sum(nctos_3_girls) as nctos_3_girls_sum','sum(nctos_4_boys) as nctos_4_boys_sum','sum(nctos_4_girls) as nctos_4_girls_sum','sum(nctos_5_boys) as nctos_5_boys_sum','sum(nctos_5_girls) as nctos_5_girls_sum','sum(nctos_6_boys) as nctos_6_boys_sum','sum(nctos_6_girls) as nctos_6_girls_sum','sum(nctos_7_boys) as nctos_7_boys_sum','sum(nctos_7_girls) as nctos_7_girls_sum','sum(nctos_8_boys) as nctos_8_boys_sum','sum(nctos_8_girls) as nctos_8_girls_sum')));
				$this->set('school_students_transferred_sum',$school_students_transferred_sum[0]);
				
				$this->set('school_students_transferred',($this->params['form']['school_students_transferred']));
			}
			
			if(isset($this->params['form']['school_students_droppedout']))
			{
				$school_students_droppedout_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(ncdo_katchi_boys) as ncdo_katchi_boys_sum','sum(ncdo_katchi_girls) as ncdo_katchi_girls_sum','sum(ncdo_1_boys) as ncdo_1_boys_sum','sum(ncdo_1_girls) as ncdo_1_girls_sum','sum(ncdo_2_boys) as ncdo_2_boys_sum','sum(ncdo_2_girls) as ncdo_2_girls_sum','sum(ncdo_3_boys) as ncdo_3_boys_sum','sum(ncdo_3_girls) as ncdo_3_girls_sum','sum(ncdo_4_boys) as ncdo_4_boys_sum','sum(ncdo_4_girls) as ncdo_4_girls_sum','sum(ncdo_5_boys) as ncdo_5_boys_sum','sum(ncdo_5_girls) as ncdo_5_girls_sum','sum(ncdo_6_boys) as ncdo_6_boys_sum','sum(ncdo_6_girls) as ncdo_6_girls_sum','sum(ncdo_7_boys) as ncdo_7_boys_sum','sum(ncdo_7_girls) as ncdo_7_girls_sum','sum(ncdo_8_boys) as ncdo_8_boys_sum','sum(ncdo_8_girls) as ncdo_8_girls_sum')));
				$this->set('school_students_droppedout_sum',$school_students_droppedout_sum[0]);
				
				$this->set('school_students_droppedout',($this->params['form']['school_students_droppedout']));
			}
			
			if(isset($this->params['form']['school_students_attendance_today']))
			{
				$school_students_attendance_today_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(gwat_katchi_boys) as gwat_katchi_boys_sum','sum(gwat_katchi_girls) as gwat_katchi_girls_sum','sum(gwat_1_boys) as gwat_1_boys_sum','sum(gwat_1_girls) as gwat_1_girls_sum','sum(gwat_2_boys) as gwat_2_boys_sum','sum(gwat_2_girls) as gwat_2_girls_sum','sum(gwat_3_boys) as gwat_3_boys_sum','sum(gwat_3_girls) as gwat_3_girls_sum','sum(gwat_4_boys) as gwat_4_boys_sum','sum(gwat_4_girls) as gwat_4_girls_sum','sum(gwat_5_boys) as gwat_5_boys_sum','sum(gwat_5_girls) as gwat_5_girls_sum','sum(gwat_6_boys) as gwat_6_boys_sum','sum(gwat_6_girls) as gwat_6_girls_sum','sum(gwat_7_boys) as gwat_7_boys_sum','sum(gwat_7_girls) as gwat_7_girls_sum','sum(gwat_8_boys) as gwat_8_boys_sum','sum(gwat_8_girls) as gwat_8_girls_sum')));
				$this->set('school_students_attendance_today_sum',$school_students_attendance_today_sum[0]);
				
				$this->set('school_students_attendance_today',($this->params['form']['school_students_attendance_today']));
			}
			
			if(isset($this->params['form']['school_students_absent_month']))
			{
				$school_students_absent_month_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(ncna_katchi_boys) as ncna_katchi_boys_sum','sum(ncna_katchi_girls) as ncna_katchi_girls_sum','sum(ncna_1_boys) as ncna_1_boys_sum','sum(ncna_1_girls) as ncna_1_girls_sum','sum(ncna_2_boys) as ncna_2_boys_sum','sum(ncna_2_girls) as ncna_2_girls_sum','sum(ncna_3_boys) as ncna_3_boys_sum','sum(ncna_3_girls) as ncna_3_girls_sum','sum(ncna_4_boys) as ncna_4_boys_sum','sum(ncna_4_girls) as ncna_4_girls_sum','sum(ncna_5_boys) as ncna_5_boys_sum','sum(ncna_5_girls) as ncna_5_girls_sum','sum(ncna_6_boys) as ncna_6_boys_sum','sum(ncna_6_girls) as ncna_6_girls_sum','sum(ncna_7_boys) as ncna_7_boys_sum','sum(ncna_7_girls) as ncna_7_girls_sum','sum(ncna_8_boys) as ncna_8_boys_sum','sum(ncna_8_girls) as ncna_8_girls_sum')));
				$this->set('school_students_absent_month_sum',$school_students_absent_month_sum[0]);
				
				$this->set('school_students_absent_month',($this->params['form']['school_students_absent_month']));
			}
			
			if(isset($this->params['form']['school_average_attendance']))
			{
				$school_average_attendance_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(aalm_katchi_boys) as aalm_katchi_boys_sum','sum(aalm_katchi_girls) as aalm_katchi_girls_sum','sum(aalm_1_boys) as aalm_1_boys_sum','sum(aalm_1_girls) as aalm_1_girls_sum','sum(aalm_2_boys) as aalm_2_boys_sum','sum(aalm_2_girls) as aalm_2_girls_sum','sum(aalm_3_boys) as aalm_3_boys_sum','sum(aalm_3_girls) as aalm_3_girls_sum','sum(aalm_4_boys) as aalm_4_boys_sum','sum(aalm_4_girls) as aalm_4_girls_sum','sum(aalm_5_boys) as aalm_5_boys_sum','sum(aalm_5_girls) as aalm_5_girls_sum','sum(aalm_6_boys) as aalm_6_boys_sum','sum(aalm_6_girls) as aalm_6_girls_sum','sum(aalm_7_boys) as aalm_7_boys_sum','sum(aalm_7_girls) as aalm_7_girls_sum','sum(aalm_8_boys) as aalm_8_boys_sum','sum(aalm_8_girls) as aalm_8_girls_sum')));
				$this->set('school_average_attendance_sum',$school_average_attendance_sum[0]);
				
				$this->set('school_average_attendance',($this->params['form']['school_average_attendance']));
			}
			
			if(isset($this->params['form']['school_numberof_teachers']))
			{
				
				$teachers_in_cluster_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(teachers_sanctioned) as teachers_sanctioned_sum','sum(teachers_working) as teachers_working_sum','sum(teachers_present) as teachers_present_sum','sum(teachers_onleave) as teachers_onleave_sum','sum(teachers_onderailment) as teachers_onderailment_sum','sum(teachers_oncontract) as teachers_oncontract_sum','sum(teachers_wb) as teachers_wb_sum','sum(teachers_nchd) as teachers_nchd_sum','sum(teachers_unicef) as teachers_unicef_sum','sum(teachers_smc) as teachers_smc_sum','sum(teachers_anyother) as teachers_anyother_sum','sum(teachers_other) as teachers_other_sum')));
				$this->set('teachers_in_cluster_sum',$teachers_in_cluster_sum[0]);
				
				$this->set('school_numberof_teachers',($this->params['form']['school_numberof_teachers']));
			}
			
			if(isset($this->params['form']['school_teachers_basic_info']))
			{
				$this->set('school_teachers_basic_info',($this->params['form']['school_teachers_basic_info']));
			}
			
			if(isset($this->params['form']['school_teachers_months_attendance']))
			{
				$this->set('school_teachers_months_attendance',($this->params['form']['school_teachers_months_attendance']));
			}
			
			//5. School Facility Identifiers for the Reports
			if(isset($this->params['form']['school_toilets_facility']))
			{
				
				$toilets_available_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'toilets_available'=>1)));
				$this->set('toilets_available_count',$toilets_available_count);
				$number_toilets_available_sum = $this->SchoolFacility->find('first',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(no_of_toilets) as sum_toilets_count')));
				$this->set('number_toilets_available_sum',$number_toilets_available_sum[0]);
				$toilet_cleanliness_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'toilet_cleanliness'=>1)));
				$this->set('toilet_cleanliness_count',$toilet_cleanliness_count);
				$toilet_closing_door_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'toilet_closing_door'=>1)));
				$this->set('toilet_closing_door_count',$toilet_closing_door_count);
				$water_available_in_toilet_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'water_available_in_toilet'=>1)));
				$this->set('water_available_in_toilet_count',$water_available_in_toilet_count);
				$toilet_drainage_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'toilet_drainage'=>1)));
				$this->set('toilet_drainage_count',$toilet_drainage_count);
				
				
				$this->set('school_toilets_facility',($this->params['form']['school_toilets_facility']));
			}
			
			if(isset($this->params['form']['school_water_facility']))
			{
				$water_available_in_toilet_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'water_available_in_toilet'=>1)));
				$this->set('water_available_in_toilet_count',$water_available_in_toilet_count);
				$toilet_drainage_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'toilet_drainage'=>1)));
				$this->set('toilet_drainage_count',$toilet_drainage_count);
				$water_available_in_school_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'water_available_in_school'=>1)));
				$this->set('water_available_in_school_count',$water_available_in_school_count);
				$water_drinkable_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'water_drinkable'=>1)));
				$this->set('water_drinkable_count',$water_drinkable_count);
				
				
				
				$this->set('school_water_facility',($this->params['form']['school_water_facility']));
			}
			
			if(isset($this->params['form']['school_electricity_facility']))
			{
				$school_has_electricity_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'school_has_electricity'=>1)));
				$this->set('school_has_electricity_count',$school_has_electricity_count);
				$electricity_wiring_installed_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'electricity_wiring_installed'=>1)));
				$this->set('electricity_wiring_installed_count',$electricity_wiring_installed_count);
				$electricity_on_right_now_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'electricity_on_right_now'=>1)));
				$this->set('electricity_on_right_now_count',$electricity_on_right_now_count);
				$electricity_meter_installed_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'electricity_meter_installed'=>1)));
				$this->set('electricity_meter_installed_count',$electricity_meter_installed_count);
				
				
				
				$this->set('school_electricity_facility',($this->params['form']['school_electricity_facility']));
			}
			
			if(isset($this->params['form']['school_safety_facility']))
			{
				$broken_window_panes_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'broken_window_panes'=>1)));
				$this->set('broken_window_panes_count',$broken_window_panes_count);
				$cracks_in_wall_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'cracks_in_wall'=>1)));
				$this->set('cracks_in_wall_count',$cracks_in_wall_count);
				$garbage_lying_around_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'garbage_lying_around'=>1)));
				$this->set('garbage_lying_around_count',$garbage_lying_around_count);
				$leakage_in_ceiling_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'leakage_in_ceiling'=>1)));
				$this->set('leakage_in_ceiling_count',$leakage_in_ceiling_count);
				$cracks_in_ceiling_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'cracks_in_ceiling'=>1)));
				$this->set('cracks_in_ceiling_count',$cracks_in_ceiling_count);
				
				
				$this->set('school_safety_facility',($this->params['form']['school_safety_facility']));
			}
			
			if(isset($this->params['form']['school_classroom_facility']))
			{
				$classroom_ventilated_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'classroom_ventilated'=>1)));
				$this->set('classroom_ventilated_count',$classroom_ventilated_count);
				$light_availability_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'light_availability'=>1)));
				$this->set('light_availability_count',$light_availability_count);
				$temperature_reasonably_bearable_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'temperature_reasonably_bearable'=>1)));
				$this->set('temperature_reasonably_bearable_count',$temperature_reasonably_bearable_count);
				$children_seated_comfortably_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'children_seated_comfortably'=>1)));
				$this->set('children_seated_comfortably_count',$children_seated_comfortably_count);
				$time_table_available_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'time_table_available'=>1)));
				$this->set('time_table_available_count',$time_table_available_count);
				$student_achievement_info_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'student_achievement_info'=>1)));
				$this->set('student_achievement_info_count',$student_achievement_info_count);
				
				
				$this->set('school_classroom_facility',($this->params['form']['school_classroom_facility']));
			}
			
			if(isset($this->params['form']['school_outdoor_facility']))
			{
				$boundary_wall_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'boundary_wall'=>1)));
				$this->set('boundary_wall_count',$boundary_wall_count);
				$gate_installed_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'gate_installed'=>1)));
				$this->set('gate_installed_count',$gate_installed_count);
				$children_playing_space_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'children_playing_space'=>1)));
				$this->set('children_playing_space_count',$children_playing_space_count);
				$plantation_in_school_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'plantation_in_school'=>1)));
				$this->set('plantation_in_school_count',$plantation_in_school_count);
				$hazards_around_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'hazards_around'=>1)));
				$this->set('hazards_around_count',$hazards_around_count);
				$regular_assembly_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'regular_assembly'=>1)));
				$this->set('regular_assembly_count',$regular_assembly_count);
				$extracurricular_activity_lastquarter_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'extracurricular_activity_lastquarter'=>1)));
				$this->set('extracurricular_activity_lastquarter_count',$extracurricular_activity_lastquarter_count);
				
				
				
				$this->set('school_outdoor_facility',($this->params['form']['school_outdoor_facility']));
			}
			
			if(isset($this->params['form']['school_furniture_facility']))
			{
				$blackboard_well_painted_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'blackboard_well_painted'=>1)));
				$this->set('blackboard_well_painted_count',$blackboard_well_painted_count);
				$storage_for_school_records_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'storage_for_school_records'=>1)));
				$this->set('storage_for_school_records_count',$storage_for_school_records_count);
				
				
				$this->set('school_furniture_facility',($this->params['form']['school_furniture_facility']));
			}
			
			//6. School Management Committee Identifiers for the report
			
			if(isset($this->params['form']['school_smc_basicinfo']))
			{
				//getting the basic info for the clusters
				
				$smc_notified_schools = $this->SchoolManagementCommitee->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'has_notified_smc'=>1)));
				//debug($smc_notified_schools);
				$this->set('smc_notified_schools',$smc_notified_schools);
				
				$community_contribution_in_schools = $this->SchoolManagementCommitee->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'community_contribution_to_school'=>1)));
				$this->set('community_contribution_in_schools',$community_contribution_in_schools);
				
				
				
				$smc_cluster_basicinfo = $this->SchoolManagementCommitee->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(smc_members_male) as smc_members_male_sum','sum(smc_members_female) as smc_members_female_sum','sum(smc_visits_this_year) as smc_visits_this_year_sum','sum(smc_visits_last_year) as smc_visits_last_year_sum')));
				//debug($smc_cluster_basicinfo);
				$this->set('smc_cluster_basicinfo',$smc_cluster_basicinfo);
				
				$this->set('school_smc_basicinfo',($this->params['form']['school_smc_basicinfo']));
			}
			
			if(isset($this->params['form']['school_smc_funding']))
			{
				$smc_cluster_funding = $this->SchoolManagementCommitee->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(funding_recieved_current_year) as funding_recieved_current_year_sum','sum(funding_recieved_last_year) as funding_recieved_last_year_sum')));
				//debug($smc_cluster_funding);
				$this->set('smc_cluster_funding',$smc_cluster_funding[0]);
				
				$this->set('school_smc_funding',($this->params['form']['school_smc_funding']));
			}
			
			}
			else
			{
				$this->redirect('../home/');
			}
		}
		else
		{
			$this->redirect('../home/index');
		}
	}
	
	
	
	function submit_district_report_details($id = null)
	{
		if(isset($this->params['form']))
		{
			if(isset($this->params['form']['download_report']))
			{
				$this->RequestHandler->setContent('xls', 'application/vnd.ms-excel'); 
				$this->layout = "xls";
				
				if(isset($this->params["url"]["start_day"]))
			{
				$startDate = $this->params["url"]["start_year"]."-". $this->params["url"]["start_month"]."-". $this->params["url"]["start_day"]." 00:00:00";
				$endDate = $this->params["url"]["end_year"]."-". $this->params["url"]["end_month"]."-". $this->params["url"]["end_day"]." 59:59:59";			
				
				$this->Set("startDate",$this->params["url"]["start_day"]);
				$this->Set("startYear",$this->params["url"]["start_year"]);
				$this->Set("startMonth",$this->params["url"]["start_month"]);
				
				$this->Set("endDate",$this->params["url"]["end_day"]);
				$this->Set("endYear",$this->params["url"]["end_year"]);
				$this->Set("endMonth",$this->params["url"]["end_month"]);
			}
			else
			{
				$startDate = date("Y-m")."-1 00:00:00";
				$endDate = date("Y-m")."-31 24:60:60";
				
				$this->Set("startDate","1");
				$this->Set("startYear",date("Y"));
				$this->Set("startMonth",date("m"));
				
				$this->Set("endDate","31");
				$this->Set("endYear",date("Y"));
				$this->Set("endMonth",date("m"));
			}
			
			$this->set("filename","cluster_report");
				
			}
			
			//Gathering School Specific Information
			
			$semis_code = $this->params['form']['semis_code'];
			$school = $this->School->find('first',array('conditions'=>array('code'=>$semis_code)));
			$school_name = ($school['School']['prefix']).' - '.($school['School']['name']);
			$this->set('school_name',$school_name);
			
			$cluster = $this->Cluster->find('first',array('conditions'=>array('id'=>($school['School']['clusterid']))));
			$cluster_name = $cluster['Cluster']['name'];
			$this->set('cluster_name',$cluster_name);
			
			
			$uc = $this->Uc->find('first',array('conditions'=>array('id'=>($cluster['Cluster']['uc_id']))));
			$uc_name = $uc['Uc']['name'];
			$this->set('uc_name',$uc_name);
			
			$taluka = $this->Taluka->find('first',array('conditions'=>array('id'=>($uc['Uc']['taluka_id']))));
			$taluka_name = $taluka['Taluka']['name'];
			$this->set('taluka_name',$taluka_name);
			
			
			$district = $this->Region->find('first',array('conditions'=>array('id'=>($taluka['Taluka']['district_id']	))));
			$district_name = $district['Region']['name'];
			$this->set('district_name',$district_name);
			
			
			//getting the ids of all the schools in the District
			
			$uc_id = array();
			
			$this_school_cluster = $this->Cluster->find('first',array('conditions'=>array('id'=>$school['School']['clusterid'])));
			//debug($this_school_cluster);
			$this_school_uc = $this->Uc->find('first',array('conditions'=>array('id'=>$this_school_cluster['Cluster']['uc_id'])));
			//debug($this_school_uc);
			$this_uc_taluka = $this->Taluka->find('first',array('conditions'=>array('id'=>$this_school_uc['Uc']['taluka_id'])));
			//debug($this_uc_taluka);
			$this_uc_district = $this->Region->find('first',array('conditions'=>array('id'=>$this_uc_taluka['Taluka']['district_id'])));
			//debug($this_uc_district);
			
			$this_distrct_talukas = $this->Taluka->find('all',array('conditions'=>array('district_id'=>$this_uc_district['Region']['id'])));
			//debug($this_distrct_talukas);
			
			$this_distrct_taluka_ids_array = array();
			foreach($this_distrct_talukas as $this_distrct_taluka)
			{
				$this_distrct_taluka_ids_array = $this_distrct_taluka['Taluka']['id'];
			}
			//debug($this_distrct_taluka_ids_array);
			
			$this_taluka_ucs = $this->Uc->find('all',array('conditions'=>array('taluka_id'=>$this_distrct_taluka_ids_array)));
			
			$this_taluka_uc_ids_array = array();
			foreach($this_taluka_ucs as $this_taluka_uc)
			{
				$this_taluka_uc_ids_array[] = $this_taluka_uc['Uc']['id'];
			}
			//debug($this_taluka_uc_ids_array);
			
			
			$this_uc_clusters = $this->Cluster->find('all',array('conditions'=>array('uc_id'=>$this_taluka_uc_ids_array)));
			
			
			//debug($this_uc_clusters);
			
			$this_uc_cluster_ids_array = array();
			
			foreach($this_uc_clusters as $this_uc_cluster)
			{
				$this_uc_cluster_ids_array[] = $this_uc_cluster['Cluster']['id'];
			}
			//debug($this_uc_cluster_ids_array);
			
			
			$cluster_school_ids = array();	
			
			$cluster_school_ids_array = $this->School->find('all',array('conditions'=>array('clusterid'=>$this_uc_cluster_ids_array),'fields'=>array('id')));
			foreach($cluster_school_ids_array as $cluster_school_id)
			{
				$cluster_school_ids[] = $cluster_school_id['School']['id'];
			}
			
			$cluster_school_identification_ids_array = $this->SchoolIdentification->find('all',array('conditions'=>array('school_id'=>$cluster_school_ids),'fields'=>array('id')));
			foreach($cluster_school_identification_ids_array as $cluster_school_identification_id)
			{
				$cluster_school_identification_ids[] = $cluster_school_identification_id['SchoolIdentification']['id'];
			}
			
			$count_of_school = count($cluster_school_ids);
			$this->set('count_of_school',$count_of_school);
			$count_of_surveys = count($cluster_school_identification_ids);
			$this->set('count_of_surveys',$count_of_surveys);
			
			
			//debug($cluster_school_ids);
			
			//Gathering Baseline Survey information for the school
			$schoolIdentification = $this->SchoolIdentification->find('first',array('conditions'=>array('school_id'=>($school['School']['id']))));
			if(!empty($schoolIdentification))
			{
			$this->set('schoolIdentification',$schoolIdentification);
			
			$basicInformation = $this->BasicInformation->find('first',array('conditions'=>array('school_identification_id'=>($schoolIdentification['SchoolIdentification']['id']))));
			$this->set('basicInformation',$basicInformation);
			
			$schoolManagementCommitee = $this->SchoolManagementCommitee->find('first',array('conditions'=>array('school_identification_id'=>($schoolIdentification['SchoolIdentification']['id']))));
			$this->set('schoolManagementCommitee',$schoolManagementCommitee);
			
			
			$records = $this->Record->find('first',array('conditions'=>array('school_identification_id'=>($schoolIdentification['SchoolIdentification']['id']))));
			$this->set('records',$records);
			
			$schoolFacility = $this->SchoolFacility->find('first',array('conditions'=>array('school_identification_id'=>($schoolIdentification['SchoolIdentification']['id']))));
			$this->set('schoolFacility',$schoolFacility);
			
			$enrollmentAttendance = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>($schoolIdentification['SchoolIdentification']['id']))));
			$this->set('enrollmentAttendance',$enrollmentAttendance);
			
			$staffs = $this->Staff->find('all',array('conditions'=>array('school_identification_id'=>($schoolIdentification['SchoolIdentification']['id']))));
			$this->set('staffs',$staffs);
			
			$staffAttendances = $this->StaffAttendance->find('all',array('conditions'=>array('school_identification_id'=>($schoolIdentification['SchoolIdentification']['id']))));
			$this->set('staffAttendances',$staffAttendances);
			
			
			//1. School Identification Identifiers for Report
			if(isset($this->params['form']['school_info']))
			{
				$this->set('school_info',($this->params['form']['school_info']));
			}
			if(isset($this->params['form']['school_address']))
			{
				$this->set('school_address',($this->params['form']['school_address']));
			}
			if(isset($this->params['form']['school_distances']))
			{
				$this->set('school_distances',($this->params['form']['school_distances']));
			}
			if(isset($this->params['form']['school_oppurtunities']))
			{
				$this->set('school_oppurtunities',($this->params['form']['school_oppurtunities']));
				
				//$count = $this->SchoolIdentification->query('select sum(secondary_boys) from  school_identifications');
				$cluster_oppurtunities = $this->SchoolIdentification->find('all',array('conditions'=>array('id'=>$cluster_school_identification_ids),'fields'=>array('sum(secondary_boys) as secondary_boys_sum','sum(secondary_girls) as secondary_girls_sum','sum(elementary_boys) as elementary_boys_sum','sum(elementary_girls) as elementary_girls_sum','sum(private_boys) as private_boys_sum','sum(private_girls) as private_girls_sum','sum(other_boys) as other_boys_sum','sum(other_girls) as other_girls_sum')));
				
				//debug($cluster_oppurtunities);
				$this->set('cluster_oppurtunities',$cluster_oppurtunities);
			}
			
			
			
			//2. School Basic Information Identifiers for report 
			if(isset($this->params['form']['school_basics']))
			{
				//getting cluster information for the school basics
				$number_functional_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_status'=>'functional')));
				$this->set('number_functional_schools',$number_functional_schools);
				$number_primary_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_level'=>'primary')));
				$this->set('number_primary_schools',$number_primary_schools);
				$number_middle_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_level'=>'middle')));
				$this->set('number_middle_schools',$number_middle_schools);
				$number_elementry_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_level'=>'elementary')));
				$this->set('number_elementry_schools',$number_elementry_schools);
				$number_boys_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_gender'=>'boys')));
				$this->set('number_boys_schools',$number_boys_schools);
				$number_girls_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_gender'=>'girls')));
				$this->set('number_girls_schools',$number_girls_schools);
				$number_mix_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_gender'=>'mixed')));
				$this->set('number_mix_schools',$number_mix_schools);
				$number_sindhi_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'medium_of_instruction'=>'sindhi')));
				$this->set('number_sindhi_schools',$number_sindhi_schools);
				$number_urdu_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'medium_of_instruction'=>'urdu')));
				$this->set('number_urdu_schools',$number_urdu_schools);
				$number_english_schools = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'medium_of_instruction'=>'english')));
				$this->set('number_english_schools',$number_english_schools);
				$number_schools_has_school_in_range = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_in_range'=>1)));
				$this->set('number_schools_has_school_in_range',$number_schools_has_school_in_range);
				$number_schools_has_highschool_in_range = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'high_school_in_range'=>1)));
				$this->set('number_schools_has_highschool_in_range',$number_schools_has_highschool_in_range);
				
				$this->set('school_basics',($this->params['form']['school_basics']));
			}
			if(isset($this->params['form']['school_bank_budget']))
			{
			
				$number_schools_recieved_budget = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'budget_recieved'=>1)));
				$this->set('number_schools_recieved_budget',$number_schools_recieved_budget);
				$number_schools_has_bank_account = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'school_account'=>1)));
				$this->set('number_schools_has_bank_account',$number_schools_has_bank_account);
			
				$this->set('school_bank_budget',($this->params['form']['school_bank_budget']));
			}
			if(isset($this->params['form']['school_rooms_other']))
			{
				
				$school_rooms_other_sum = $this->BasicInformation->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(no_of_rooms) as no_of_rooms_sum','sum(total_rooms_inuse) as total_rooms_inuse_sum','sum(classrooms) as classrooms_sum','sum(office) as office_sum','sum(store) as store_sum','sum(unused) as unused_sum','sum(unsafe) as unsafe_sum','sum(other) as other_sum')));
				//debug($school_rooms_other_sum[0]);
				$this->set('school_rooms_other_sum',$school_rooms_other_sum[0]);
				
				$this->set('school_rooms_other',($this->params['form']['school_rooms_other']));
			}
			
			
			//3. Records Identifiers for the report
			if(isset($this->params['form']['school_student_record']))
			{
				$numberofschool_stu_att_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'stu_att_available'=>1)));
				$this->set('numberofschool_stu_att_available_cluster',$numberofschool_stu_att_available_cluster);
				$numberofschool_stu_att_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'stu_att_updated'=>1)));
				$this->set('numberofschool_stu_att_updated_cluster',$numberofschool_stu_att_updated_cluster);
				$numberofschool_gr_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'gr_available'=>1)));
				$this->set('numberofschool_gr_available_cluster',$numberofschool_gr_available_cluster);
				$numberofschool_gr_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'gr_updated'=>1)));
				$this->set('numberofschool_gr_updated_cluster',$numberofschool_gr_updated_cluster);
				$numberofschool_exam_result_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'exam_result_available'=>1)));
				$this->set('numberofschool_exam_result_available_cluster',$numberofschool_exam_result_available_cluster);
				$numberofschool_exam_result_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'exam_result_updated'=>1)));
				$this->set('numberofschool_exam_result_updated_cluster',$numberofschool_exam_result_updated_cluster);
				
				$this->set('school_student_record',($this->params['form']['school_student_record']));
			}
			
			if(isset($this->params['form']['school_teacher_record']))
			{
				$numberofschool_tar_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'tar_available'=>1)));
				$this->set('numberofschool_tar_available_cluster',$numberofschool_tar_available_cluster);
				$numberofschool_tar_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'tar_updated'=>1)));
				$this->set('numberofschool_tar_updated_cluster',$numberofschool_tar_updated_cluster);
				$numberofschool_tlr_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'tlr_available'=>1)));
				$this->set('numberofschool_tlr_available_cluster',$numberofschool_tlr_available_cluster);
				$numberofschool_tlr_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'tlr_updated'=>1)));
				$this->set('numberofschool_tlr_updated_cluster',$numberofschool_tlr_updated_cluster);
				
				
				$this->set('school_teacher_record',($this->params['form']['school_teacher_record']));
			}
			
			if(isset($this->params['form']['school_smc_records']))
			{
				$numberofschool_smc_register_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'smc_register_available'=>1)));
				$this->set('numberofschool_smc_register_available_cluster',$numberofschool_smc_register_available_cluster);
				$numberofschool_smc_register_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'smc_register_updated'=>1)));
				$this->set('numberofschool_smc_register_updated_cluster',$numberofschool_smc_register_updated_cluster);
				$numberofschool_smc_notif_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'smc_notif_available'=>1)));
				$this->set('numberofschool_smc_notif_available_cluster',$numberofschool_smc_notif_available_cluster);
				$numberofschool_smc_guideline_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'smc_guideline_available'=>1)));
				$this->set('numberofschool_smc_guideline_available_cluster',$numberofschool_smc_guideline_available_cluster);
				$numberofschool_smc_accountinfo_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'smc_accountinfo_available'=>1)));
				$this->set('numberofschool_smc_accountinfo_available_cluster',$numberofschool_smc_accountinfo_available_cluster);
				
				
				$this->set('school_smc_records',($this->params['form']['school_smc_records']));
			}
			
			if(isset($this->params['form']['school_sip_other_records']))
			{
				$numberofschool_vb_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'vb_available'=>1)));
				$this->set('numberofschool_vb_available_cluster',$numberofschool_vb_available_cluster);
				$numberofschool_vb_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'vb_updated'=>1)));
				$this->set('numberofschool_vb_updated_cluster',$numberofschool_vb_updated_cluster);
				$numberofschool_ss_form_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'ss_form_available'=>1)));
				$this->set('numberofschool_ss_form_available_cluster',$numberofschool_ss_form_available_cluster);
				$numberofschool_ss_form_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'ss_form_updated'=>1)));
				$this->set('numberofschool_ss_form_updated_cluster',$numberofschool_ss_form_updated_cluster);
				$numberofschool_tb_distribution_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'tb_distribution_available'=>1)));
				$this->set('numberofschool_tb_distribution_available_cluster',$numberofschool_tb_distribution_available_cluster);
				$numberofschool_tb_distribution_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'tb_distribution_updated'=>1)));
				$this->set('numberofschool_tb_distribution_updated_cluster',$numberofschool_tb_distribution_updated_cluster);
				$numberofschool_as_register_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'as_register_available'=>1)));
				$this->set('numberofschool_as_register_available_cluster',$numberofschool_as_register_available_cluster);
				$numberofschool_as_register_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'as_register_updated'=>1)));
				$this->set('numberofschool_as_register_updated_cluster',$numberofschool_as_register_updated_cluster);
				$numberofschool_sip_available_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'sip_available'=>1)));
				$this->set('numberofschool_sip_available_cluster',$numberofschool_sip_available_cluster);
				$numberofschool_sip_updated_cluster = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'sip_updated'=>1)));
				$this->set('numberofschool_sip_updated_cluster',$numberofschool_sip_updated_cluster);
				
				
				
				$this->set('school_sip_other_records',($this->params['form']['school_sip_other_records']));
			}
			
			
			//checking for checked parameters
			
			
			
			//4. Enrollment and Attendance Identifiers for the Reports
			if(isset($this->params['form']['school_enrollment_this_year']))
			{
				$school_enrollment_this_year_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(gwe_katchi_boys) as gwe_katchi_boys_sum','sum(gwe_katchi_girls) as gwe_katchi_girls_sum','sum(gwe_1_boys) as gwe_1_boys_sum','sum(gwe_1_girls) as gwe_1_girls_sum','sum(gwe_2_boys) as gwe_2_boys_sum','sum(gwe_2_girls) as gwe_2_girls_sum','sum(gwe_3_boys) as gwe_3_boys_sum','sum(gwe_3_girls) as gwe_3_girls_sum','sum(gwe_4_boys) as gwe_4_boys_sum','sum(gwe_4_girls) as gwe_4_girls_sum','sum(gwe_5_boys) as gwe_5_boys_sum','sum(gwe_5_girls) as gwe_5_girls_sum','sum(gwe_6_boys) as gwe_6_boys_sum','sum(gwe_6_girls) as gwe_6_girls_sum','sum(gwe_7_boys) as gwe_7_boys_sum','sum(gwe_7_girls) as gwe_7_girls_sum','sum(gwe_8_boys) as gwe_8_boys_sum','sum(gwe_8_girls) as gwe_8_girls_sum')));
				$this->set('school_enrollment_this_year_sum',$school_enrollment_this_year_sum[0]);
				$this->set('school_enrollment_this_year',($this->params['form']['school_enrollment_this_year']));
			}
			
			if(isset($this->params['form']['school_enrollment_last_year']))
			{
				$school_enrollment_last_year_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(tely_katchi_boys) as tely_katchi_boys_sum','sum(tely_katchi_girls) as tely_katchi_girls_sum','sum(tely_1_boys) as tely_1_boys_sum','sum(tely_1_girls) as tely_1_girls_sum','sum(tely_2_boys) as tely_2_boys_sum','sum(tely_2_girls) as tely_2_girls_sum','sum(tely_3_boys) as tely_3_boys_sum','sum(tely_3_girls) as tely_3_girls_sum','sum(tely_4_boys) as tely_4_boys_sum','sum(tely_4_girls) as tely_4_girls_sum','sum(tely_5_boys) as tely_5_boys_sum','sum(tely_5_girls) as tely_5_girls_sum','sum(tely_6_boys) as tely_6_boys_sum','sum(tely_6_girls) as tely_6_girls_sum','sum(tely_7_boys) as tely_7_boys_sum','sum(tely_7_girls) as tely_7_girls_sum','sum(tely_8_boys) as tely_8_boys_sum','sum(tely_8_girls) as tely_8_girls_sum')));
				$this->set('school_enrollment_last_year_sum',$school_enrollment_last_year_sum[0]);
				
				$this->set('school_enrollment_last_year',($this->params['form']['school_enrollment_last_year']));
			}
			
			
			if(isset($this->params['form']['school_students_promoted']))
			{
				$school_students_promoted_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(ncp_katchi_boys) as ncp_katchi_boys_sum','sum(ncp_katchi_girls) as ncp_katchi_girls_sum','sum(ncp_1_boys) as ncp_1_boys_sum','sum(ncp_1_girls) as ncp_1_girls_sum','sum(ncp_2_boys) as ncp_2_boys_sum','sum(ncp_2_girls) as ncp_2_girls_sum','sum(ncp_3_boys) as ncp_3_boys_sum','sum(ncp_3_girls) as ncp_3_girls_sum','sum(ncp_4_boys) as ncp_4_boys_sum','sum(ncp_4_girls) as ncp_4_girls_sum','sum(ncp_5_boys) as ncp_5_boys_sum','sum(ncp_5_girls) as ncp_5_girls_sum','sum(ncp_6_boys) as ncp_6_boys_sum','sum(ncp_6_girls) as ncp_6_girls_sum','sum(ncp_7_boys) as ncp_7_boys_sum','sum(ncp_7_girls) as ncp_7_girls_sum','sum(ncp_8_boys) as ncp_8_boys_sum','sum(ncp_8_girls) as ncp_8_girls_sum')));
				$this->set('school_students_promoted_sum',$school_students_promoted_sum[0]);
				
				$this->set('school_students_promoted',($this->params['form']['school_students_promoted']));
			}
			
			if(isset($this->params['form']['school_students_repeating']))
			{
				$school_students_repeating_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(ncr_katchi_boys) as ncr_katchi_boys_sum','sum(ncr_katchi_girls) as ncr_katchi_girls_sum','sum(ncr_1_boys) as ncr_1_boys_sum','sum(ncr_1_girls) as ncr_1_girls_sum','sum(ncr_2_boys) as ncr_2_boys_sum','sum(ncr_2_girls) as ncr_2_girls_sum','sum(ncr_3_boys) as ncr_3_boys_sum','sum(ncr_3_girls) as ncr_3_girls_sum','sum(ncr_4_boys) as ncr_4_boys_sum','sum(ncr_4_girls) as ncr_4_girls_sum','sum(ncr_5_boys) as ncr_5_boys_sum','sum(ncr_5_girls) as ncr_5_girls_sum','sum(ncr_6_boys) as ncr_6_boys_sum','sum(ncr_6_girls) as ncr_6_girls_sum','sum(ncr_7_boys) as ncr_7_boys_sum','sum(ncr_7_girls) as ncr_7_girls_sum','sum(ncr_8_boys) as ncr_8_boys_sum','sum(ncr_8_girls) as ncr_8_girls_sum')));
				$this->set('school_students_repeating_sum',$school_students_repeating_sum[0]);
				
				$this->set('school_students_repeating',($this->params['form']['school_students_repeating']));
			}
			
			if(isset($this->params['form']['school_students_transferred']))
			{
				$school_students_transferred_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(nctos_katchi_boys) as nctos_katchi_boys_sum','sum(nctos_katchi_girls) as nctos_katchi_girls_sum','sum(nctos_1_boys) as nctos_1_boys_sum','sum(nctos_1_girls) as nctos_1_girls_sum','sum(nctos_2_boys) as nctos_2_boys_sum','sum(nctos_2_girls) as nctos_2_girls_sum','sum(nctos_3_boys) as nctos_3_boys_sum','sum(nctos_3_girls) as nctos_3_girls_sum','sum(nctos_4_boys) as nctos_4_boys_sum','sum(nctos_4_girls) as nctos_4_girls_sum','sum(nctos_5_boys) as nctos_5_boys_sum','sum(nctos_5_girls) as nctos_5_girls_sum','sum(nctos_6_boys) as nctos_6_boys_sum','sum(nctos_6_girls) as nctos_6_girls_sum','sum(nctos_7_boys) as nctos_7_boys_sum','sum(nctos_7_girls) as nctos_7_girls_sum','sum(nctos_8_boys) as nctos_8_boys_sum','sum(nctos_8_girls) as nctos_8_girls_sum')));
				$this->set('school_students_transferred_sum',$school_students_transferred_sum[0]);
				
				$this->set('school_students_transferred',($this->params['form']['school_students_transferred']));
			}
			
			if(isset($this->params['form']['school_students_droppedout']))
			{
				$school_students_droppedout_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(ncdo_katchi_boys) as ncdo_katchi_boys_sum','sum(ncdo_katchi_girls) as ncdo_katchi_girls_sum','sum(ncdo_1_boys) as ncdo_1_boys_sum','sum(ncdo_1_girls) as ncdo_1_girls_sum','sum(ncdo_2_boys) as ncdo_2_boys_sum','sum(ncdo_2_girls) as ncdo_2_girls_sum','sum(ncdo_3_boys) as ncdo_3_boys_sum','sum(ncdo_3_girls) as ncdo_3_girls_sum','sum(ncdo_4_boys) as ncdo_4_boys_sum','sum(ncdo_4_girls) as ncdo_4_girls_sum','sum(ncdo_5_boys) as ncdo_5_boys_sum','sum(ncdo_5_girls) as ncdo_5_girls_sum','sum(ncdo_6_boys) as ncdo_6_boys_sum','sum(ncdo_6_girls) as ncdo_6_girls_sum','sum(ncdo_7_boys) as ncdo_7_boys_sum','sum(ncdo_7_girls) as ncdo_7_girls_sum','sum(ncdo_8_boys) as ncdo_8_boys_sum','sum(ncdo_8_girls) as ncdo_8_girls_sum')));
				$this->set('school_students_droppedout_sum',$school_students_droppedout_sum[0]);
				
				$this->set('school_students_droppedout',($this->params['form']['school_students_droppedout']));
			}
			
			if(isset($this->params['form']['school_students_attendance_today']))
			{
				$school_students_attendance_today_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(gwat_katchi_boys) as gwat_katchi_boys_sum','sum(gwat_katchi_girls) as gwat_katchi_girls_sum','sum(gwat_1_boys) as gwat_1_boys_sum','sum(gwat_1_girls) as gwat_1_girls_sum','sum(gwat_2_boys) as gwat_2_boys_sum','sum(gwat_2_girls) as gwat_2_girls_sum','sum(gwat_3_boys) as gwat_3_boys_sum','sum(gwat_3_girls) as gwat_3_girls_sum','sum(gwat_4_boys) as gwat_4_boys_sum','sum(gwat_4_girls) as gwat_4_girls_sum','sum(gwat_5_boys) as gwat_5_boys_sum','sum(gwat_5_girls) as gwat_5_girls_sum','sum(gwat_6_boys) as gwat_6_boys_sum','sum(gwat_6_girls) as gwat_6_girls_sum','sum(gwat_7_boys) as gwat_7_boys_sum','sum(gwat_7_girls) as gwat_7_girls_sum','sum(gwat_8_boys) as gwat_8_boys_sum','sum(gwat_8_girls) as gwat_8_girls_sum')));
				$this->set('school_students_attendance_today_sum',$school_students_attendance_today_sum[0]);
				
				$this->set('school_students_attendance_today',($this->params['form']['school_students_attendance_today']));
			}
			
			if(isset($this->params['form']['school_students_absent_month']))
			{
				$school_students_absent_month_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(ncna_katchi_boys) as ncna_katchi_boys_sum','sum(ncna_katchi_girls) as ncna_katchi_girls_sum','sum(ncna_1_boys) as ncna_1_boys_sum','sum(ncna_1_girls) as ncna_1_girls_sum','sum(ncna_2_boys) as ncna_2_boys_sum','sum(ncna_2_girls) as ncna_2_girls_sum','sum(ncna_3_boys) as ncna_3_boys_sum','sum(ncna_3_girls) as ncna_3_girls_sum','sum(ncna_4_boys) as ncna_4_boys_sum','sum(ncna_4_girls) as ncna_4_girls_sum','sum(ncna_5_boys) as ncna_5_boys_sum','sum(ncna_5_girls) as ncna_5_girls_sum','sum(ncna_6_boys) as ncna_6_boys_sum','sum(ncna_6_girls) as ncna_6_girls_sum','sum(ncna_7_boys) as ncna_7_boys_sum','sum(ncna_7_girls) as ncna_7_girls_sum','sum(ncna_8_boys) as ncna_8_boys_sum','sum(ncna_8_girls) as ncna_8_girls_sum')));
				$this->set('school_students_absent_month_sum',$school_students_absent_month_sum[0]);
				
				$this->set('school_students_absent_month',($this->params['form']['school_students_absent_month']));
			}
			
			if(isset($this->params['form']['school_average_attendance']))
			{
				$school_average_attendance_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(aalm_katchi_boys) as aalm_katchi_boys_sum','sum(aalm_katchi_girls) as aalm_katchi_girls_sum','sum(aalm_1_boys) as aalm_1_boys_sum','sum(aalm_1_girls) as aalm_1_girls_sum','sum(aalm_2_boys) as aalm_2_boys_sum','sum(aalm_2_girls) as aalm_2_girls_sum','sum(aalm_3_boys) as aalm_3_boys_sum','sum(aalm_3_girls) as aalm_3_girls_sum','sum(aalm_4_boys) as aalm_4_boys_sum','sum(aalm_4_girls) as aalm_4_girls_sum','sum(aalm_5_boys) as aalm_5_boys_sum','sum(aalm_5_girls) as aalm_5_girls_sum','sum(aalm_6_boys) as aalm_6_boys_sum','sum(aalm_6_girls) as aalm_6_girls_sum','sum(aalm_7_boys) as aalm_7_boys_sum','sum(aalm_7_girls) as aalm_7_girls_sum','sum(aalm_8_boys) as aalm_8_boys_sum','sum(aalm_8_girls) as aalm_8_girls_sum')));
				$this->set('school_average_attendance_sum',$school_average_attendance_sum[0]);
				
				$this->set('school_average_attendance',($this->params['form']['school_average_attendance']));
			}
			
			if(isset($this->params['form']['school_numberof_teachers']))
			{
				
				$teachers_in_cluster_sum = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(teachers_sanctioned) as teachers_sanctioned_sum','sum(teachers_working) as teachers_working_sum','sum(teachers_present) as teachers_present_sum','sum(teachers_onleave) as teachers_onleave_sum','sum(teachers_onderailment) as teachers_onderailment_sum','sum(teachers_oncontract) as teachers_oncontract_sum','sum(teachers_wb) as teachers_wb_sum','sum(teachers_nchd) as teachers_nchd_sum','sum(teachers_unicef) as teachers_unicef_sum','sum(teachers_smc) as teachers_smc_sum','sum(teachers_anyother) as teachers_anyother_sum','sum(teachers_other) as teachers_other_sum')));
				$this->set('teachers_in_cluster_sum',$teachers_in_cluster_sum[0]);
				
				$this->set('school_numberof_teachers',($this->params['form']['school_numberof_teachers']));
			}
			
			if(isset($this->params['form']['school_teachers_basic_info']))
			{
				$this->set('school_teachers_basic_info',($this->params['form']['school_teachers_basic_info']));
			}
			
			if(isset($this->params['form']['school_teachers_months_attendance']))
			{
				$this->set('school_teachers_months_attendance',($this->params['form']['school_teachers_months_attendance']));
			}
			
			//5. School Facility Identifiers for the Reports
			if(isset($this->params['form']['school_toilets_facility']))
			{
				
				$toilets_available_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'toilets_available'=>1)));
				$this->set('toilets_available_count',$toilets_available_count);
				$number_toilets_available_sum = $this->SchoolFacility->find('first',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(no_of_toilets) as sum_toilets_count')));
				$this->set('number_toilets_available_sum',$number_toilets_available_sum[0]);
				$toilet_cleanliness_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'toilet_cleanliness'=>1)));
				$this->set('toilet_cleanliness_count',$toilet_cleanliness_count);
				$toilet_closing_door_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'toilet_closing_door'=>1)));
				$this->set('toilet_closing_door_count',$toilet_closing_door_count);
				$water_available_in_toilet_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'water_available_in_toilet'=>1)));
				$this->set('water_available_in_toilet_count',$water_available_in_toilet_count);
				$toilet_drainage_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'toilet_drainage'=>1)));
				$this->set('toilet_drainage_count',$toilet_drainage_count);
				
				
				$this->set('school_toilets_facility',($this->params['form']['school_toilets_facility']));
			}
			
			if(isset($this->params['form']['school_water_facility']))
			{
				$water_available_in_toilet_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'water_available_in_toilet'=>1)));
				$this->set('water_available_in_toilet_count',$water_available_in_toilet_count);
				$toilet_drainage_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'toilet_drainage'=>1)));
				$this->set('toilet_drainage_count',$toilet_drainage_count);
				$water_available_in_school_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'water_available_in_school'=>1)));
				$this->set('water_available_in_school_count',$water_available_in_school_count);
				$water_drinkable_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'water_drinkable'=>1)));
				$this->set('water_drinkable_count',$water_drinkable_count);
				
				
				
				$this->set('school_water_facility',($this->params['form']['school_water_facility']));
			}
			
			if(isset($this->params['form']['school_electricity_facility']))
			{
				$school_has_electricity_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'school_has_electricity'=>1)));
				$this->set('school_has_electricity_count',$school_has_electricity_count);
				$electricity_wiring_installed_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'electricity_wiring_installed'=>1)));
				$this->set('electricity_wiring_installed_count',$electricity_wiring_installed_count);
				$electricity_on_right_now_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'electricity_on_right_now'=>1)));
				$this->set('electricity_on_right_now_count',$electricity_on_right_now_count);
				$electricity_meter_installed_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'electricity_meter_installed'=>1)));
				$this->set('electricity_meter_installed_count',$electricity_meter_installed_count);
				
				
				
				$this->set('school_electricity_facility',($this->params['form']['school_electricity_facility']));
			}
			
			if(isset($this->params['form']['school_safety_facility']))
			{
				$broken_window_panes_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'broken_window_panes'=>1)));
				$this->set('broken_window_panes_count',$broken_window_panes_count);
				$cracks_in_wall_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'cracks_in_wall'=>1)));
				$this->set('cracks_in_wall_count',$cracks_in_wall_count);
				$garbage_lying_around_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'garbage_lying_around'=>1)));
				$this->set('garbage_lying_around_count',$garbage_lying_around_count);
				$leakage_in_ceiling_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'leakage_in_ceiling'=>1)));
				$this->set('leakage_in_ceiling_count',$leakage_in_ceiling_count);
				$cracks_in_ceiling_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'cracks_in_ceiling'=>1)));
				$this->set('cracks_in_ceiling_count',$cracks_in_ceiling_count);
				
				
				$this->set('school_safety_facility',($this->params['form']['school_safety_facility']));
			}
			
			if(isset($this->params['form']['school_classroom_facility']))
			{
				$classroom_ventilated_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'classroom_ventilated'=>1)));
				$this->set('classroom_ventilated_count',$classroom_ventilated_count);
				$light_availability_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'light_availability'=>1)));
				$this->set('light_availability_count',$light_availability_count);
				$temperature_reasonably_bearable_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'temperature_reasonably_bearable'=>1)));
				$this->set('temperature_reasonably_bearable_count',$temperature_reasonably_bearable_count);
				$children_seated_comfortably_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'children_seated_comfortably'=>1)));
				$this->set('children_seated_comfortably_count',$children_seated_comfortably_count);
				$time_table_available_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'time_table_available'=>1)));
				$this->set('time_table_available_count',$time_table_available_count);
				$student_achievement_info_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'student_achievement_info'=>1)));
				$this->set('student_achievement_info_count',$student_achievement_info_count);
				
				
				$this->set('school_classroom_facility',($this->params['form']['school_classroom_facility']));
			}
			
			if(isset($this->params['form']['school_outdoor_facility']))
			{
				$boundary_wall_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'boundary_wall'=>1)));
				$this->set('boundary_wall_count',$boundary_wall_count);
				$gate_installed_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'gate_installed'=>1)));
				$this->set('gate_installed_count',$gate_installed_count);
				$children_playing_space_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'children_playing_space'=>1)));
				$this->set('children_playing_space_count',$children_playing_space_count);
				$plantation_in_school_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'plantation_in_school'=>1)));
				$this->set('plantation_in_school_count',$plantation_in_school_count);
				$hazards_around_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'hazards_around'=>1)));
				$this->set('hazards_around_count',$hazards_around_count);
				$regular_assembly_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'regular_assembly'=>1)));
				$this->set('regular_assembly_count',$regular_assembly_count);
				$extracurricular_activity_lastquarter_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'extracurricular_activity_lastquarter'=>1)));
				$this->set('extracurricular_activity_lastquarter_count',$extracurricular_activity_lastquarter_count);
				
				
				
				$this->set('school_outdoor_facility',($this->params['form']['school_outdoor_facility']));
			}
			
			if(isset($this->params['form']['school_furniture_facility']))
			{
				$blackboard_well_painted_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'blackboard_well_painted'=>1)));
				$this->set('blackboard_well_painted_count',$blackboard_well_painted_count);
				$storage_for_school_records_count = $this->SchoolFacility->find('count',array('conditions',array('school_identification_id'=>$cluster_school_identification_ids,'storage_for_school_records'=>1)));
				$this->set('storage_for_school_records_count',$storage_for_school_records_count);
				
				
				$this->set('school_furniture_facility',($this->params['form']['school_furniture_facility']));
			}
			
			//6. School Management Committee Identifiers for the report
			
			if(isset($this->params['form']['school_smc_basicinfo']))
			{
				//getting the basic info for the clusters
				
				$smc_notified_schools = $this->SchoolManagementCommitee->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'has_notified_smc'=>1)));
				//debug($smc_notified_schools);
				$this->set('smc_notified_schools',$smc_notified_schools);
				
				$community_contribution_in_schools = $this->SchoolManagementCommitee->find('count',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids,'community_contribution_to_school'=>1)));
				$this->set('community_contribution_in_schools',$community_contribution_in_schools);
				
				
				
				$smc_cluster_basicinfo = $this->SchoolManagementCommitee->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(smc_members_male) as smc_members_male_sum','sum(smc_members_female) as smc_members_female_sum','sum(smc_visits_this_year) as smc_visits_this_year_sum','sum(smc_visits_last_year) as smc_visits_last_year_sum')));
				//debug($smc_cluster_basicinfo);
				$this->set('smc_cluster_basicinfo',$smc_cluster_basicinfo);
				
				$this->set('school_smc_basicinfo',($this->params['form']['school_smc_basicinfo']));
			}
			
			if(isset($this->params['form']['school_smc_funding']))
			{
				$smc_cluster_funding = $this->SchoolManagementCommitee->find('first',array('conditions'=>array('school_identification_id'=>$cluster_school_identification_ids),'fields'=>array('sum(funding_recieved_current_year) as funding_recieved_current_year_sum','sum(funding_recieved_last_year) as funding_recieved_last_year_sum')));
				//debug($smc_cluster_funding);
				$this->set('smc_cluster_funding',$smc_cluster_funding[0]);
				
				$this->set('school_smc_funding',($this->params['form']['school_smc_funding']));
			}
			
			}
			else
			{
				$this->redirect('../home/');
			}
		}
		else
		{
			$this->redirect('../home/index');
		}
	}
	
	
	function other_reports()
	{
		
	}
	
	function summary_reports()
	{
		$districts = $this->Region->find('all');
		$this->set('districts',$districts);
	}
	
	function submit_summary_report($download = null, $district_id = null)
	{
	
		if($download == 1)
		{
			$this->RequestHandler->setContent('xls', 'application/vnd.ms-excel'); 
				$this->layout = "xls";
				
				if(isset($this->params["url"]["start_day"]))
			{
				$startDate = $this->params["url"]["start_year"]."-". $this->params["url"]["start_month"]."-". $this->params["url"]["start_day"]." 00:00:00";
				$endDate = $this->params["url"]["end_year"]."-". $this->params["url"]["end_month"]."-". $this->params["url"]["end_day"]." 59:59:59";			
				
				$this->Set("startDate",$this->params["url"]["start_day"]);
				$this->Set("startYear",$this->params["url"]["start_year"]);
				$this->Set("startMonth",$this->params["url"]["start_month"]);
				
				$this->Set("endDate",$this->params["url"]["end_day"]);
				$this->Set("endYear",$this->params["url"]["end_year"]);
				$this->Set("endMonth",$this->params["url"]["end_month"]);
			}
			else
			{
				$startDate = date("Y-m")."-1 00:00:00";
				$endDate = date("Y-m")."-31 24:60:60";
				
				$this->Set("startDate","1");
				$this->Set("startYear",date("Y"));
				$this->Set("startMonth",date("m"));
				
				$this->Set("endDate","31");
				$this->Set("endYear",date("Y"));
				$this->Set("endMonth",date("m"));
			}
			
			$this->set("filename","district_Summary_Report");
			
			
		}
		
		
		//debug($this->params['form']);
		if(isset($this->params['form']['district']) || !($district_id == null))
		{
			
			if($district_id == null)
			{
				$district_id = $this->params['form']['district'];
			}
			
			
			
			$district = $this->Region->find('first',array('conditions'=>array('id'=>($district_id))));
			$this->set('district',$district);
			$district_id = $this->params['form']['district'];
			$this_district_talukas = $this->Taluka->find('all',array('conditions'=>array('district_id'=>$district_id)));
			
			
			$this_district_taluka_ids_array = array();
			
			foreach($this_district_talukas as $this_district_taluka)
			{
				$this_district_taluka_ids_array[] = $this_district_taluka['Taluka']['id'];
			}
			
			
			$this_taluka_ucs = $this->Uc->find('all',array('conditions'=>array('taluka_id'=>$this_district_taluka_ids_array)));
			
			//debug($this_taluka_ucs);
			
			foreach($this_taluka_ucs as &$this_taluka_uc)
			{
				$uc_id = $this_taluka_uc['Uc']['id'];
				
				$this_uc_clusters = $this->Cluster->find('all',array('conditions'=>array('uc_id'=>$uc_id)));
				
				$this_uc_cluster_ids_array = array();
				
				foreach($this_uc_clusters as $this_uc_cluster)
				{
					$this_uc_cluster_ids_array[] = $this_uc_cluster['Cluster']['id'];
				}
				//debug($this_uc_cluster_ids_array);
				
				$this_cluster_schools = $this->School->find('all',array('conditions'=>array('clusterid'=>$this_uc_cluster_ids_array)));
				
				$this_cluster_school_ids_array = array();
				
				
				foreach($this_cluster_schools as $this_cluster_school)
				{
					$this_cluster_school_ids_array[] = $this_cluster_school['School']['id'];
					
				}
				
				$this_taluka_uc['school_count'] = count($this_cluster_school_ids_array);
				$this_taluka_uc['survey_count'] = 0;
				
				
				
				
				
				//debug($this_cluster_school_ids_array);
				if(!((count($this_cluster_school_ids_array)) == 0))
				{
				//debug($this_cluster_school_ids_array);
				
				
				
				$this_school_identifications = $this->SchoolIdentification->find('all',array('conditions'=>array('school_id'=>$this_cluster_school_ids_array)));
				
				
				$this_school_identification_ids_array = array();
				$this_schoolids_for_identification_ids_array = array();
				
				
				
				foreach($this_school_identifications as $this_school_identification)
				{
					$this_school_identification_ids_array[] = $this_school_identification['SchoolIdentification']['id'];
					$this_schoolids_for_identification_ids_array[] = $this_school_identification['SchoolIdentification']['school_id'];
				}
				//debug($this_school_identification_ids_array);
				if(!(empty($this_school_identification_ids_array)))
				{
				$this_taluka_uc['survey_count'] = count($this_school_identification_ids_array);
				
				
				
				
				//collecting information for School Conditions table
				$broken_window_count = $this->SchoolFacility->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'broken_window_panes'=>1)));
				$this_taluka_uc['broken_window_count'] = $broken_window_count;
				$garbage_lying_around_count = $this->SchoolFacility->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'garbage_lying_around'=>1)));
				$this_taluka_uc['garbage_lying_around_count'] = $garbage_lying_around_count;
				$time_table_available_count = $this->SchoolFacility->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'time_table_available'=>1)));
				$this_taluka_uc['time_table_available_count'] = $time_table_available_count;
				$plantation_in_school_count = $this->SchoolFacility->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'plantation_in_school'=>1)));
				$this_taluka_uc['plantation_in_school_count'] = $plantation_in_school_count;
				$extracurricular_activity_lastquarter_count = $this->SchoolFacility->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'extracurricular_activity_lastquarter'=>1)));
				$this_taluka_uc['extracurricular_activity_lastquarter_count'] = $extracurricular_activity_lastquarter_count;
				$regular_assembly_count = $this->SchoolFacility->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'regular_assembly'=>1)));
				$this_taluka_uc['regular_assembly_count'] = $regular_assembly_count;
				
				
				//collecting information for 
				$teachers_working_single_count = $this->EnrollmentAttendance->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'teachers_working'=>1)));
				$this_taluka_uc['teachers_working_single_count'] = $teachers_working_single_count;
				
				$teachers_working_double_count = $this->EnrollmentAttendance->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'teachers_working'=>2)));
				$this_taluka_uc['teachers_working_double_count'] = $teachers_working_double_count;
				
				$teachers_working_more_count = $this->EnrollmentAttendance->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'teachers_working >'=>2)));
				$this_taluka_uc['teachers_working_more_count'] = $teachers_working_more_count;
				
				
				//collecting Information for
				
				$gbps_school_count = $this->School->find('count',array('conditions'=>array('id'=>$this_schoolids_for_identification_ids_array,'prefix'=>'gbps')));
				$this_taluka_uc['gbps_school_count'] = $gbps_school_count;
				
			
				$ggps_school_count = $this->School->find('count',array('conditions'=>array('id'=>$this_schoolids_for_identification_ids_array,'prefix'=>'ggps')));
				$this_taluka_uc['ggps_school_count'] = $ggps_school_count;
				
				
				$gbels_school_count = $this->School->find('count',array('conditions'=>array('id'=>$this_schoolids_for_identification_ids_array,'prefix'=>'gbels')));
				$this_taluka_uc['gbels_school_count'] = $gbels_school_count;
				
				
				$ggels_school_count = $this->School->find('count',array('conditions'=>array('id'=>$this_schoolids_for_identification_ids_array,'prefix'=>'ggels')));
				$this_taluka_uc['ggels_school_count'] = $ggels_school_count;
				
				
				
				//collecting information for
				$tar_updated_count = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'tar_updated'=>0)));
				$this_taluka_uc['tar_updated_count'] = $tar_updated_count;
				
				$tlr_updated_count = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'tlr_updated'=>0)));
				$this_taluka_uc['tlr_updated_count'] = $tlr_updated_count;
				
				$stu_att_updated_count = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'stu_att_updated'=>0)));
				$this_taluka_uc['stu_att_updated_count'] = $stu_att_updated_count;
				
				$gr_updated_count = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'gr_updated'=>0)));
				$this_taluka_uc['gr_updated_count'] = $gr_updated_count;
				
				$exam_result_updated_count = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'exam_result_updated'=>0)));
				$this_taluka_uc['exam_result_updated_count'] = $exam_result_updated_count;
				
				$vb_updated_count = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'vb_updated'=>0)));
				$this_taluka_uc['vb_updated_count'] = $vb_updated_count;
				
				$ss_form_updated_count = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'ss_form_updated'=>0)));
				$this_taluka_uc['ss_form_updated_count'] = $ss_form_updated_count;
				
				$tb_distribution_updated_count = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'tb_distribution_updated'=>0)));
				$this_taluka_uc['tb_distribution_updated_count'] = $tb_distribution_updated_count;
				
				$gs_record_updated_count = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'gs_record_updated'=>0)));
				$this_taluka_uc['gs_record_updated_count'] = $gs_record_updated_count;
				
				$smc_register_updated_count = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'smc_register_updated'=>0)));
				$this_taluka_uc['smc_register_updated_count'] = $smc_register_updated_count;
				
				
				
				// collecting information for 
				$budget_recieved_count = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'budget_recieved'=>0)));
				$this_taluka_uc['budget_recieved_count'] = $budget_recieved_count;
				
				$school_account_count = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'school_account'=>0)));
				$this_taluka_uc['school_account_count'] = $school_account_count;
				
				$unused_count = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'unused >'=>0)));
				$this_taluka_uc['unused_count'] = $unused_count;
				
				$unsafe_count = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'unsafe >'=>0)));
				$this_taluka_uc['unsafe_count'] = $unsafe_count;
				
				$school_in_range_count = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'school_in_range'=>0)));
				$this_taluka_uc['school_in_range_count'] = $school_in_range_count;
				
				$high_school_in_range_count = $this->BasicInformation->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'high_school_in_range'=>0)));
				$this_taluka_uc['high_school_in_range_count'] = $high_school_in_range_count;
				
				
				// collecting information for 
				$toilets_available_count = $this->SchoolFacility->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'toilets_available'=>0)));
				$this_taluka_uc['toilets_available_count'] = $toilets_available_count;
				
				$toilet_closing_door_count = $this->SchoolFacility->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'toilet_closing_door'=>0)));
				$this_taluka_uc['toilet_closing_door_count'] = $toilet_closing_door_count;
				
				$water_available_in_toilet_count = $this->SchoolFacility->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'water_available_in_toilet'=>0)));
				$this_taluka_uc['water_available_in_toilet_count'] = $water_available_in_toilet_count;
				
				$toilet_drainage_count = $this->SchoolFacility->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'toilet_drainage'=>0)));
				$this_taluka_uc['toilet_drainage_count'] = $toilet_drainage_count;
				
				$water_available_in_school_count = $this->SchoolFacility->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'water_available_in_school'=>0)));
				$this_taluka_uc['water_available_in_school_count'] = $water_available_in_school_count;
				
				$water_drinkable_count = $this->SchoolFacility->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'water_drinkable'=>0)));
				$this_taluka_uc['water_drinkable_count'] = $water_drinkable_count;
				
				$water_accessible_to_children_count = $this->SchoolFacility->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'water_accessible_to_children'=>0)));
				$this_taluka_uc['water_accessible_to_children_count'] = $water_accessible_to_children_count;
				
				$school_has_electricity_count = $this->SchoolFacility->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'school_has_electricity'=>0)));
				$this_taluka_uc['school_has_electricity_count'] = $school_has_electricity_count;
				
				$electricity_meter_installed_count = $this->SchoolFacility->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'electricity_meter_installed'=>0)));
				$this_taluka_uc['electricity_meter_installed_count'] = $electricity_meter_installed_count;
				
				
				
				//collecting information for 
				
				$has_notified_smc_count = $this->SchoolManagementCommitee->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'has_notified_smc'=>0)));
				$this_taluka_uc['has_notified_smc_count'] = $has_notified_smc_count;
				
				$smc_chairperson_name_count = $this->SchoolManagementCommitee->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'smc_chairperson_name'=>null)));
				$this_taluka_uc['smc_chairperson_name_count'] = $smc_chairperson_name_count;
				
				$smc_relative_students_count = $this->SchoolManagementCommitee->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'smc_relative1_children_name'=>null)));
				$this_taluka_uc['smc_relative_students_count'] = $smc_relative_students_count;
				
				$funding_recieved_current_year_count = $this->SchoolManagementCommitee->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'funding_recieved_current_year'=>0)));
				$this_taluka_uc['funding_recieved_current_year_count'] = $funding_recieved_current_year_count;
				
				$smc_bank_account_count = $this->SchoolManagementCommitee->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'smc_bank_branch'=>null,'smc_account_title'=>null,'smc_account_number'=>null)));
				$this_taluka_uc['smc_bank_account_count'] = $smc_bank_account_count;
				
				$smc_visits_this_year_count = $this->SchoolManagementCommitee->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'smc_visits_this_year'=>null)));
				$this_taluka_uc['smc_visits_this_year_count'] = $smc_visits_this_year_count;
				
				$community_contribution_to_school_count = $this->SchoolManagementCommitee->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'community_contribution_to_school'=>0)));
				$this_taluka_uc['community_contribution_to_school_count'] = $community_contribution_to_school_count;
				
				$sip_available_count = $this->Record->find('count',array('conditions'=>array('school_identification_id'=>$this_school_identification_ids_array,'sip_available'=>0)));
				$this_taluka_uc['sip_available_count'] = $sip_available_count;
				
				
				
				//debug($this_taluka_uc);
				
			}
			}
			}
			$this->set('this_taluka_ucs',$this_taluka_ucs);
			
		}else
		{
			$this->redirect('../home/summary_reports');
		}
	}
	
	function view_non_functional_schools($download = null,$report = null)
	{
		
		
		if(!($download == 0))
		{
				$this->RequestHandler->setContent('xls', 'application/vnd.ms-excel'); 
				$this->layout = "xls";
				
				if(isset($this->params["url"]["start_day"]))
			{
				$startDate = $this->params["url"]["start_year"]."-". $this->params["url"]["start_month"]."-". $this->params["url"]["start_day"]." 00:00:00";
				$endDate = $this->params["url"]["end_year"]."-". $this->params["url"]["end_month"]."-". $this->params["url"]["end_day"]." 59:59:59";			
				
				$this->Set("startDate",$this->params["url"]["start_day"]);
				$this->Set("startYear",$this->params["url"]["start_year"]);
				$this->Set("startMonth",$this->params["url"]["start_month"]);
				
				$this->Set("endDate",$this->params["url"]["end_day"]);
				$this->Set("endYear",$this->params["url"]["end_year"]);
				$this->Set("endMonth",$this->params["url"]["end_month"]);
			}
			else
			{
				$startDate = date("Y-m")."-1 00:00:00";
				$endDate = date("Y-m")."-31 24:60:60";
				
				$this->Set("startDate","1");
				$this->Set("startYear",date("Y"));
				$this->Set("startMonth",date("m"));
				
				$this->Set("endDate","31");
				$this->Set("endYear",date("Y"));
				$this->Set("endMonth",date("m"));
			}
			if($report == 1)
			{
			$this->set("filename","non_functional_schools");
			}
			elseif($report == 2)
			{
				
				$this->set("filename","single_teacher_schools");
			}			
		}
		if($report == "1")
		{
		$non_func_surveys = $this->SurveyOfSchool->find('all',array('conditions'=>array('sch_func'=>0)));
		
		
		$non_func_school_ids_array = array();
		
		foreach($non_func_surveys as $non_func_survey)
		{
			$non_func_school_ids_array[] = $non_func_survey['SurveyOfSchool']['school_id'];
		}
		//debug($non_func_school_ids_array);
		
		$schools = $this->School->find('all',array('conditions'=>array('id'=>$non_func_school_ids_array)));
		//debug($schools);
		$this->set('schools',$schools);
		$this->set('report','functional');
		}
		elseif($report == "2")
		{
			
			$single_teacher_school_enrollments = $this->EnrollmentAttendance->find('all',array('conditions'=>array('teachers_working'=>1)));
			//debug(count($single_teacher_school_enrollments));	
				$school_ids_array = array();
				foreach($single_teacher_school_enrollments as $single_teacher_school_enrollment)
				{
					
					$single_teacher_school_identifications = $single_teacher_school_enrollment['EnrollmentAttendance']['school_identification_id'];
					
					$basic_information = $this->SchoolIdentification->find('first',array('conditions'=>array('id'=>$single_teacher_school_identifications)));
					if(!empty($basic_information['SchoolIdentification']['school_id']))
					{
						$school_ids_array[] = $basic_information['SchoolIdentification']['school_id'];
					}	
					
				}
				//debug($school_ids_array);
				$schools = $this->School->find('all',array('conditions'=>array('id'=>$school_ids_array)));
				
				$this->set('schools',$schools);
			
			
			
			$this->set('report','single_teacher');
			
			
		}
	}
	
	function teacher_reports()
	{
		
	}
	
	function view_teacher_reports($type = null,$id = null)
	{
		if(!empty($type))
		{
			$regions = $this->Region->find('all');
			$this->set('districts',$regions);
			
			if($type == 1)
			{
				$teachers_with_skills = $this->TeacherSkill->find('all',array('conditions'=>array('skill_id'=>$id)));
				
				$teachers_ids_array = array();
				foreach($teachers_with_skills as $teachers_with_skill)
				{
					$teachers_ids_array[] = $teachers_with_skill['TeacherSkill']['teacher_id'];
				}
				
				if($id == 1)
				{
				$this->set('skill','MS Word Skill');
				}elseif($id == 2)
				{
					$this->set('skill','MS Excel Skill');
				}elseif($id == 3)
				{
					$this->set('skill','MS Access Skill');
				}elseif($id == 4)
				{
					$this->set('skill','MS Power Point Skill');
				}elseif($id == 5)
				{
					$this->set('skill','Email Skill');
				}elseif($id == 6)
				{
					$this->set('skill','MS Project Skill');
				}elseif($id == 7)
				{
					$this->set('skill','Presentation Skill');
				}elseif($id == 8)
				{
					$this->set('skill','Report Writing Skill');
				}elseif($id == 9)
				{
					$this->set('skill','Inter Personal Skill');
				}
				
				
				$teachers = $this->Teacher->find('all',array('conditions'=>array('id'=>$teachers_ids_array)));
				//debug($teachers);
				$this->set('teachers',$teachers);
				$this->set('report_type','skill');
			}
			
			if($type == 2)
			{
				$teachers_with_Interests = $this->TeacherInterest->find('all',array('conditions'=>array('interest_id'=>$id)));
				
				$teachers_ids_array = array();
				foreach($teachers_with_Interests as $teachers_with_Interest)
				{
					$teachers_ids_array[] = $teachers_with_Interest['TeacherInterest']['teacher_id'];
				}
				
				if($id == 1)
				{
				$this->set('interest','School Inspection');
				}elseif($id == 2)
				{
					$this->set('interest','Student Advise (Mentoring, Pedagogy, Classroom Manage)');
				}elseif($id == 3)
				{
					$this->set('interest','Educational Development and Planning');
				}elseif($id == 4)
				{
					$this->set('interest','Student Assessment');
				}elseif($id == 5)
				{
					$this->set('interest','Teacher Training & Development');
				}elseif($id == 6)
				{
					$this->set('interest','SMC / Cluster Mobilization');
				}elseif($id == 7)
				{
					$this->set('interest','Monitoring and Evaluation');
				}elseif($id == 8)
				{
					$this->set('interest','Policy and Research');
				}elseif($id == 9)
				{
					$this->set('interest','Role of IT/Innovation');
				}elseif($id == 10)
				{
					$this->set('interest','Education Sector Reform');
				}
				
				
				$teachers = $this->Teacher->find('all',array('conditions'=>array('id'=>$teachers_ids_array)));
				//debug($teachers);
				$this->set('teachers',$teachers);
				$this->set('report_type','interest');
				
			}
			if($type == 3)
			{
				//debug($id);
				$teachers_with_qualifications = $this->TeacherQualification->find('all',array('conditions'=>array('qualification_name'=>$id)));
				
				$teachers_ids_array = array();
				foreach($teachers_with_qualifications as $teachers_with_qualification)
				{
					$teachers_ids_array[] = $teachers_with_qualification['TeacherQualification']['teacher_id'];
				}
				
				if($id == 'ba')
				{
				$this->set('qualification','B.A');
				}elseif($id == 'bsc')
				{
					$this->set('qualification','B.SC');
				}elseif($id == 'bed')
				{
					$this->set('qualification','B.ED');
				}elseif($id == 'bsc')
				{
					$this->set('qualification','B.S');
				}elseif($id == 'ma')
				{
					$this->set('qualification','M.A');
				}elseif($id == 'msc')
				{
					$this->set('qualification','M.SC');
				}elseif($id == 'med')
				{
					$this->set('qualification','M.ED');
				}elseif($id == 'ms')
				{
					$this->set('qualification','M.S');
				}elseif($id == 'mphil')
				{
					$this->set('qualification','M.Phil');
				}elseif($id == 'phd')
				{
					$this->set('qualification','P.H.D');
				}elseif($id == 'ct')
				{
					$this->set('qualification','C.T');
				}elseif($id == 'ptc')
				{
					$this->set('qualification','P.T.C');
				}
				
				
				
				$teachers = $this->Teacher->find('all',array('conditions'=>array('id'=>$teachers_ids_array)));
				//debug($teachers);
				$this->set('teachers',$teachers);
				$this->set('report_type','qualification');
			}
			
			if($type == 4)
			{
				if($id == 'skills')
				{
					$count_word_skill = $this->TeacherSkill->find('count',array('conditions'=>array('skill_id'=>1)));
					$this->set('count_word_skill',$count_word_skill);
					$count_excel_skill = $this->TeacherSkill->find('count',array('conditions'=>array('skill_id'=>2)));
					$this->set('count_excel_skill',$count_excel_skill);
					$count_access_skill = $this->TeacherSkill->find('count',array('conditions'=>array('skill_id'=>3)));
					$this->set('count_access_skill',$count_access_skill);
					$count_powerpoint_skill = $this->TeacherSkill->find('count',array('conditions'=>array('skill_id'=>4)));
					$this->set('count_powerpoint_skill',$count_powerpoint_skill);
					$count_email_skill = $this->TeacherSkill->find('count',array('conditions'=>array('skill_id'=>5)));
					$this->set('count_email_skill',$count_email_skill);
					$count_msproject_skill = $this->TeacherSkill->find('count',array('conditions'=>array('skill_id'=>6)));
					$this->set('count_msproject_skill',$count_msproject_skill);
					$count_presentation_skill = $this->TeacherSkill->find('count',array('conditions'=>array('skill_id'=>7)));
					$this->set('count_presentation_skill',$count_presentation_skill);
					$count_reportwriting_skill = $this->TeacherSkill->find('count',array('conditions'=>array('skill_id'=>8)));
					$this->set('count_reportwriting_skill',$count_reportwriting_skill);
					$count_interpersonal_skill = $this->TeacherSkill->find('count',array('conditions'=>array('skill_id'=>9)));
					$this->set('count_interpersonal_skill',$count_interpersonal_skill);
					
					$this->set('report_type','skillssummary');
				}
			}
			
		}
	}
	
	
	
	
	function mpr_form($id = null)
	{
		
		$this->set('cluster_id',$id);
		
		
		
	}
	
	function submit_mpr_form($id = null)
	{
		//debug($this->params['form']);
		
		if(!empty($this->params['form']))
		{
		$this->MprBasic->id = $id;
		
		$mprBasicDetailsArray = array();
		
		$mprBasicDetailsArray['MprBasic']['cluster_id'] = $this->params['form']['cluster_id'];
		$mprBasicDetailsArray['MprBasic']['visiting_month'] = $this->params['form']['visiting_month'];
		$mprBasicDetailsArray['MprBasic']['visiting_year'] = $this->params['form']['visiting_year'];
		$mprBasicDetailsArray['MprBasic']['cluster_identification_code'] = $this->params['form']['cluster_identification_code'];
		$mprBasicDetailsArray['MprBasic']['gt_name'] = $this->params['form']['gt_name'];
		$mprBasicDetailsArray['MprBasic']['guide_school_name'] = $this->params['form']['guide_school_name'];
		$mprBasicDetailsArray['MprBasic']['guide_school_semis'] = $this->params['form']['guide_school_semis'];
		$mprBasicDetailsArray['MprBasic']['no_of_schools'] = $this->params['form']['no_of_schools'];
		$mprBasicDetailsArray['MprBasic']['district_name'] = $this->params['form']['district_name'];
		$mprBasicDetailsArray['MprBasic']['teacher_remarks'] = $this->params['form']['teacher_remarks'];
		
		
		$this->MprBasic->save($mprBasicDetailsArray);
		
		$mprschoolnames = array();
		$mprschoolnames = $this->params['form']['school_name'];
		$i = 1;
		$a = 1;
		foreach($mprschoolnames as $mprschoolname)
		{
			if(!empty($mprschoolname))
			{
				$mprSchoolInfoDetailsArray = array();
				if(isset($this->params['form']['school_id'][$i]))
				{
					$this->MprSchoolInfo->id = $this->params['form']['school_id'][$i];
				}else
				{
					$this->MprSchoolInfo->id = null;
				}
				
				
				$mprSchoolInfoDetailsArray['MprSchoolInfo']['school_order'] = $a;
				$mprSchoolInfoDetailsArray['MprSchoolInfo']['mpr_basic_id'] = $this->MprBasic->id;
				$mprSchoolInfoDetailsArray['MprSchoolInfo']['school_name'] = $this->params['form']['school_name'][$i];
				$mprSchoolInfoDetailsArray['MprSchoolInfo']['semis_code'] = $this->params['form']['semis_code'][$i];
				$mprSchoolInfoDetailsArray['MprSchoolInfo']['no_of_teachers'] = $this->params['form']['no_of_teachers'][$i];
				$mprSchoolInfoDetailsArray['MprSchoolInfo']['no_of_students_k'] = $this->params['form']['no_of_students_k'][$i];
				$mprSchoolInfoDetailsArray['MprSchoolInfo']['no_of_students_1'] = $this->params['form']['no_of_students_1'][$i];
				$mprSchoolInfoDetailsArray['MprSchoolInfo']['no_of_students_2'] = $this->params['form']['no_of_students_2'][$i];
				$mprSchoolInfoDetailsArray['MprSchoolInfo']['no_of_students_3'] = $this->params['form']['no_of_students_3'][$i];
				$mprSchoolInfoDetailsArray['MprSchoolInfo']['no_of_students_4'] = $this->params['form']['no_of_students_4'][$i];
				$mprSchoolInfoDetailsArray['MprSchoolInfo']['no_of_students_5'] = $this->params['form']['no_of_students_5'][$i];
				$mprSchoolInfoDetailsArray['MprSchoolInfo']['no_of_students_6'] = $this->params['form']['no_of_students_6'][$i];
				$mprSchoolInfoDetailsArray['MprSchoolInfo']['no_of_students_7'] = $this->params['form']['no_of_students_7'][$i];
				$mprSchoolInfoDetailsArray['MprSchoolInfo']['no_of_students_8'] = $this->params['form']['no_of_students_8'][$i];
				$mprSchoolInfoDetailsArray['MprSchoolInfo']['no_of_students_tl'] = $this->params['form']['no_of_students_tl'][$i];
				
				$datetime = date('Y-m-d', strtotime($this->params['form']['date_of_visit'][$i]));
				$mprSchoolInfoDetailsArray['MprSchoolInfo']['date_of_visit'] = $datetime;
				
				$mprSchoolInfoDetailsArray['MprSchoolInfo']['students_present'] = $this->params['form']['students_present'][$i];
				$mprSchoolInfoDetailsArray['MprSchoolInfo']['teachers_present'] = $this->params['form']['teachers_present'][$i];
				$mprSchoolInfoDetailsArray['MprSchoolInfo']['students_enrolled_gr'] = $this->params['form']['students_enrolled_gr'][$i];
				$mprSchoolInfoDetailsArray['MprSchoolInfo']['students_transferred_gr'] = $this->params['form']['students_transferred_gr'][$i];
				$mprSchoolInfoDetailsArray['MprSchoolInfo']['students_absent_for_week'] = $this->params['form']['students_absent_for_week'][$i];
				
				if($this->params['form']['gt_ht_diary'][$i])
				{
					$mprSchoolInfoDetailsArray['MprSchoolInfo']['gt_ht_diary'] = 1;
				}else
				{
					$mprSchoolInfoDetailsArray['MprSchoolInfo']['gt_ht_diary'] = 0;
				}
				if($this->params['form']['officials_visit_register'][$i])
				{
					$mprSchoolInfoDetailsArray['MprSchoolInfo']['officials_visit_register'] = 1;
				}else
				{
					$mprSchoolInfoDetailsArray['MprSchoolInfo']['officials_visit_register'] = 0;
				}
				if($this->params['form']['teacher_attendance_register'][$i])
				{
					$mprSchoolInfoDetailsArray['MprSchoolInfo']['teacher_attendance_register'] = 1;
				}else
				{
					$mprSchoolInfoDetailsArray['MprSchoolInfo']['teacher_attendance_register'] = 0;
				}
				if($this->params['form']['teacher_class_diary'][$i])
				{
					$mprSchoolInfoDetailsArray['MprSchoolInfo']['teacher_class_diary'] = 1;
				}else
				{
					$mprSchoolInfoDetailsArray['MprSchoolInfo']['teacher_class_diary'] = 0;
				}
				if($this->params['form']['student_attendance_register'][$i])
				{
					$mprSchoolInfoDetailsArray['MprSchoolInfo']['student_attendance_register'] = 1;
				}else
				{
					$mprSchoolInfoDetailsArray['MprSchoolInfo']['student_attendance_register'] = 0;
				}
				if($this->params['form']['student_work_diary'][$i])
				{
					$mprSchoolInfoDetailsArray['MprSchoolInfo']['student_work_diary'] = 1;
				}else
				{
					$mprSchoolInfoDetailsArray['MprSchoolInfo']['student_work_diary'] = 0;
				}
				if($this->params['form']['school_general_register'][$i])
				{
					$mprSchoolInfoDetailsArray['MprSchoolInfo']['school_general_register'] = 1;
				}else
				{
					$mprSchoolInfoDetailsArray['MprSchoolInfo']['school_general_register'] = 0;
				}
				if($this->params['form']['smc_meeting_register'][$i])
				{
					$mprSchoolInfoDetailsArray['MprSchoolInfo']['smc_meeting_register'] = 1;
				}else
				{
					$mprSchoolInfoDetailsArray['MprSchoolInfo']['smc_meeting_register'] = 0;
				}
				if($this->params['form']['exam_result_record'][$i])
				{
					$mprSchoolInfoDetailsArray['MprSchoolInfo']['exam_result_record'] = 1;
				}else
				{
					$mprSchoolInfoDetailsArray['MprSchoolInfo']['exam_result_record'] = 0;
				}
				if($this->params['form']['student_achievement_register'][$i])
				{
					$mprSchoolInfoDetailsArray['MprSchoolInfo']['student_achievement_register'] = 1;
				}else
				{
					$mprSchoolInfoDetailsArray['MprSchoolInfo']['student_achievement_register'] = 0;
				}
				//debug($mprSchoolInfoDetailsArray);
				
					$this->MprSchoolInfo->save($mprSchoolInfoDetailsArray);
					$a++;
			}else
			{
				if(isset($this->params['form']['school_id'][$i]))
				{
					$this->MprSchoolInfo->id = $this->params['form']['school_id'][$i];
					$this->MprSchoolInfo->delete();
				}
			}
			$i++;
		}
		$this->redirect('../home/cluster_details/'.$this->params['form']['cluster_id']);
		}
	}
	
	function edit_mpr_form($id = null)
	{
		if(!($id == null))
		{
			$mprBasic = $this->MprBasic->find('first',array('conditions'=>array('id'=>$id)));
			$this->set('mprBasic',$mprBasic);
			
			$mprSchoolInfos = $this->MprSchoolInfo->find('all',array('conditions'=>array('mpr_basic_id'=>$id)));
			$this->set('mprSchoolInfos',$mprSchoolInfos);
		}else
		{
			$this->redirect('../home/index');
		}
	}
	
	// the reports code ends here
	
	
	function add_district()
	{
		
	}

	function edit_district($id = null)
	{
		if(!($id == null))
		{
			$region = $this->Region->find('first',array('conditions'=>array('id'=>$id)));
			$this->set('region',$region);
		}
		else
		{
			$this->redirect('../home/index/some error occured no region to edit');
		}
	}
	function submit_district_details($id = null)
	{
		$this->Region->id =$id;
		debug($this->params);
		if(!(empty($this->params['form'])))
		{
		$districtDetaiilsArray = array();
		$districtDetaiilsArray['Region']['name'] = $this->params['form']['district_name'];
		$districtDetaiilsArray['Region']['region_code'] = $this->params['form']['district_code'];
		$districtDetaiilsArray['Region']['latitude'] = $this->params['form']['latitude'];
		$districtDetaiilsArray['Region']['longitude'] = $this->params['form']['longitude'];
		$districtDetaiilsArray['Region']['is_active'] = 1;
		
		$this->Region->save($districtDetaiilsArray);
		
		$this->redirect('../home/index');
		
		}
		else
		{
			$this->redirect('../home/index/e:some error ocurred not saved');
		}
	}


	//the code for adding editing the Region or District ends here


	//the code for adding viewing editing talukas or towns starts here
	function region_details($id)
	{
		$regions = $this->Region->find('first',array("conditions"=>array("id"=>$id)));
		$taluka = $this->Taluka->find('all',array("conditions"=>array("district_id"=>$id)));
		
		$this->set('regions',$regions);
		$this->set('talukas',$taluka);
	}

	function add_taluka($rid)
	{
		$this->set('region_id',$rid);
	}

	function edit_taluka($id = null)
	{
		if(!($id == null))
		{
			$taluka = $this->Taluka->find('first',array("conditions"=>array("id"=>$id)));
			$this->set('taluka',$taluka);
		}
	}

	function submit_taluka_details($id = null)
	{
		$this->Taluka->id = $id;
		
		$talukaDetailsArray = array();
		if(!(empty($this->params['form'])))
		{
			$talukaDetailsArray = array();
			$talukaDetailsArray['Taluka']['name'] = $this->params['form']['taluka_name'];
			$talukaDetailsArray['Taluka']['taluka_code'] = $this->params['form']['taluka_code'];
			$talukaDetailsArray['Taluka']['district_id'] = $this->params['form']['region_id'];
			$talukaDetailsArray['Taluka']['is_active'] = 1;
			
			$this->Taluka->save($talukaDetailsArray);
			$this->redirect('../home/region_details/'.$this->params['form']['region_id'].'/s:taluka saved');
		}
		else
		{ 
			$this->redirect(',,/home/region_details/e:some Error occured could not save Taluka/Town');
		}	
	}

	// the code for adding editing and viewing the talukas towns ends here



	//the code for viewing editing the ucs starts here




	function taluka_details($id)
	{
		$taluka = $this->Taluka->find('first',array("conditions"=>array("id"=>$id)));
		$ucs = $this->Uc->find('all',array("conditions"=>array("taluka_id"=>$id)));
		
		$this->set('taluka',$taluka);
		$this->set('ucs',$ucs);
	}

	function add_uc($tid)
	{
		$this->set('taluka_id',$tid);
	}

	function edit_uc($id)
	{
		$uc = $this->Uc->find('first',array("conditions"=>array("id"=>$id)));
		$this->set('uc',$uc);
		
	}

	function submit_uc_details($id = null)
	{
		$this->Uc->id = $id;
		if(!(empty($this->params['form'])))
		{
			$ucDetailsArray = array();
			
			$ucDetailsArray['Uc']['name'] = $this->params['form']['uc_name'];
			$ucDetailsArray['Uc']['uc_code'] = $this->params['form']['uc_code'];
			$ucDetailsArray['Uc']['taluka_id'] = $this->params['form']['taluka_id'];
			$ucDetailsArray['Uc']['uc_population'] = $this->params['form']['uc_population'];
			$ucDetailsArray['Uc']['is_active'] = 1;
			
			$this->Uc->save($ucDetailsArray);
			
			$this->redirect('../home/taluka_details/'.$this->params['form']['taluka_id'].'/s:the uc has been saved');
		}
		else
		{
			$this->redirect('../home/index/e:the uc could not be added');
		}
	}
	//the code for viewing editing the ucs starts here

	// the code for viewing and editing the clusters starts here 

	function uc_detail($id = null)
	{
		if(!($id == null))
		{
			$clusters = $this->Cluster->find('all',array("conditions"=>array("uc_id"=>$id)));
			$uc = $this->Uc->find('first',array("conditions"=>array("id"=>$id)));
			
			$this->set('clusters',$clusters);
			$this->set('uc',$uc);
		}	
		else
		{
			$this->redirect('../home/index/e:could notfind the details of the Uc');
		}
	}

	function add_cluster($uc_id = null)
	{
		if(!($uc_id == null))
		{
			$this->set('uc_id',$uc_id);
		}
		else
		{
			
		}
	}

	function edit_cluster($id)
	{
		$cluster = $this->Cluster->find('first',array("conditions"=>array("id"=>$id)));
		$this->set('cluster',$cluster);
		$cluster_schools = $this->School->find('all',array('conditions'=>array('clusterid'=>$id)));
		$this->set('cluster_schools',$cluster_schools);
	}

	function submit_cluster_details($id = null)
	{
		
		$this->Cluster->id = $id;
		
		if(!empty($this->params['form']))
		{
			
			
			
			$clusterDetailsArray = array();
			$clusterDetailsArray['Cluster']['name'] = $this->params['form']['cluster_name'];
			$clusterDetailsArray['Cluster']['code'] = $this->params['form']['cluster_code'];
			$clusterDetailsArray['Cluster']['uc_id'] = $this->params['form']['uc_id'];
			$clusterDetailsArray['Cluster']['latitude1'] = $this->params['form']['txtLat1'];
			$clusterDetailsArray['Cluster']['longitude1'] = $this->params['form']['txtLng1'];
			$clusterDetailsArray['Cluster']['latitude2'] = $this->params['form']['txtLat2'];
			$clusterDetailsArray['Cluster']['longitude2'] = $this->params['form']['txtLng2'];
			$clusterDetailsArray['Cluster']['latitude3'] = $this->params['form']['txtLat3'];
			$clusterDetailsArray['Cluster']['longitude3'] = $this->params['form']['txtLng3'];
			$clusterDetailsArray['Cluster']['latitude4'] = $this->params['form']['txtLat4'];
			$clusterDetailsArray['Cluster']['longitude4'] = $this->params['form']['txtLng4'];
			$clusterDetailsArray['Cluster']['is_active'] = 1;
			
			$this->Cluster->save($clusterDetailsArray);
			
			$school_semis = $this->params['form']['school_semis'];
			foreach($school_semis as $school)
			{
				if(!empty($school))
				{
					$this_school = $this->School->find('first',array('conditions'=>array('code'=>$school)));
					//debug($this_school);
					$schoolDetails = array();
					if(!empty($this_school))
					{
						$this->School->id = $this_school['School']['id'];
						
						$schoolDetails['School']['clusterid'] = $this->Cluster->id;
						
						$this->School->save($schoolDetails);
						
					}
					
					$semis_school = $this->semisUniversal2010->find('first',array('conditions'=>array('school_id'=>$school)));
					if(!empty($semis_school))
					{
						$this->semisUniversal2010->id = $semis_school['semisUniversal2010']['id'];
						$semisSchoolDetails['semisUniversal2010']['clusterid'] = $this->Cluster->id;
						//debug($semis_school['semisUniversal2010']['id']);
						$this->semisUniversal2010->save($semisSchoolDetails);
					}
				}
			}
			
			
			
			$this->redirect('../home/uc_detail/'.$this->params['form']['uc_id'].'/s:the cluster saved/edited successfully');
			
		}
		else
		{
			$this->redirect('../home/index/e:could not save the cluster some error occured');
		}
		
	}


	// the code for editing and viewing the clusters ends here


	//the code for editing and viewing the schools starts here 

	function cluster_details($id = null)
	{
		if($id == null)
		{
			$this->redirect('../home/index');
		}
		else
		{
		$clusters = $this->Cluster->find('first',array("conditions"=>array("id"=>$id)));
		$this->set('cluster',$clusters);
		$schools = $this->School->find('all',array("conditions"=>array("clusterid"=>$id)));
		$school_id2 = array();
		
		$total_teachers = 0;
		$total_students = 0;
		$total_rooms = 0;
		
		//getting MPR Data to show for editing
		$mprBasics = $this->MprBasic->find('all',array('conditions'=>array('cluster_id'=>$id)));
		$this->set('mprBasics',$mprBasics);
		
		foreach ($schools as &$school)
		{
			
			if($school['School']['guide_school'] == 1)
			{
				$this->set('lat1',$school['School']['latitude']);
				$this->set('lng1',$school['School']['longitude']);
			}
			$total_teachers += $school['School']['teachers_male'];
			$total_teachers += $school['School']['teachers_female'];
			
			$total_students += $school['School']['enrollment_boys'];
			$total_students += $school['School']['enrollment_girls'];
			
			
			
			$school_id = $school['School']['id'];
			$survey = $this->SurveyOfSchool->find('first',array('conditions'=>array('school_id'=>$school_id)));
			$school_id2[] = $school['School']['id'];
			
			if(!(empty($survey)))
			{
				$school['School']['survey_id'] = $survey['SurveyOfSchool']['id'];
				if($school['School']['guide_school'] == 1)
				{
					$guideSpecific = $this->GuideSpecific->find('first',array('conditions'=>array('school_id'=>$school_id)));
					
					$school['School']['guide_specific_id'] = $guideSpecific['GuideSpecific']['id'];
				}
			}
			
			$baseline = $this->SchoolIdentification->find('first',array('conditions'=>array('school_id'=>$school_id)));
			if(!empty($baseline))
			{
				$school['School']['baseline_identification_id'] = $baseline['SchoolIdentification']['id'];
			}
			
		}
		
		$sne_hm_count = $this->School->find('count',array('conditions'=>array('clusterid'=>$id,'sne_hm'=>1)));
		$this->set('sne_hm_count',$sne_hm_count);
		$smc_functional_count = $this->School->find('count',array('conditions'=>array('clusterid'=>$id,'smc_functional'=>1)));
		$this->set('smc_functional_count',$smc_functional_count);
		$smc_notified_count = $this->School->find('count',array('conditions'=>array('clusterid'=>$id,'smc_notified'=>1)));
		$this->set('smc_notified_count',$smc_notified_count);
		
		
		
		
		
		
		
		
		$func_schools = $this->SurveyOfSchool->find('count',array('conditions'=>array('school_id'=>$school_id2, 'sch_func'=>1)));
		
		$smc_func_count = $this->SurveyOfSchool->find('count',array('conditions'=>array('school_id'=>$school_id2, 'smc_func'=>1)));
		$this->set('smc_func_count',$smc_func_count);
		
		$sip_count = $this->SurveyOfSchool->find('count',array('conditions'=>array('school_id'=>$school_id2, 'sip'=>1)));
		$this->set('sip_count',$sip_count);
		
		$smc_notice_board_count = $this->SurveyOfSchool->find('count',array('conditions'=>array('school_id'=>$school_id2, 'smc_notice_board'=>1)));
		$this->set('smc_notice_board_count',$smc_notice_board_count);
		
		$school_name_board_count = $this->SurveyOfSchool->find('count',array('conditions'=>array('school_id'=>$school_id2, 'school_name_board'=>1)));
		$this->set('school_name_board_count',$school_name_board_count);
		
		$sip_displayed_count = $this->SurveyOfSchool->find('count',array('conditions'=>array('school_id'=>$school_id2, 'sip_displayed'=>1)));
		$this->set('sip_displayed_count',$sip_displayed_count);
		
		$katchi_enrollment_count = $this->SurveyOfSchool->find('count',array('conditions'=>array('school_id'=>$school_id2, 'katchi_enrollment'=>1)));
		$this->set('katchi_enrollment_count',$katchi_enrollment_count);
		
		$ece_count = $this->SurveyOfSchool->find('count',array('conditions'=>array('school_id'=>$school_id2, 'ece'=>1)));
		$this->set('ece_count',$ece_count);
		
		$asc_performa_count = $this->SurveyOfSchool->find('count',array('conditions'=>array('school_id'=>$school_id2, 'asc_performa'=>1)));
		$this->set('asc_performa_count',$asc_performa_count);
		
		$hrmis_form_count = $this->SurveyOfSchool->find('count',array('conditions'=>array('school_id'=>$school_id2, 'hrmis_form'=>1)));
		$this->set('hrmis_form_count',$hrmis_form_count);
		
		$free_tb_count = $this->SurveyOfSchool->find('count',array('conditions'=>array('school_id'=>$school_id2, 'free_tb'=>1)));
		$this->set('free_tb_count',$free_tb_count);
		
		$sap_count = $this->SurveyOfSchool->find('count',array('conditions'=>array('school_id'=>$school_id2, 'sap'=>1)));
		$this->set('sap_count',$sap_count);
		
		$visitor_book_count = $this->SurveyOfSchool->find('count',array('conditions'=>array('school_id'=>$school_id2, 'visitor_book'=>1)));
		$this->set('visitor_book_count',$visitor_book_count);
		
		$time_table_count = $this->SurveyOfSchool->find('count',array('conditions'=>array('school_id'=>$school_id2, 'time_table'=>1)));
		$this->set('time_table_count',$time_table_count);
		
		$gt_ht_diary_count = $this->SurveyOfSchool->find('count',array('conditions'=>array('school_id'=>$school_id2, 'gt_ht_diary'=>1)));
		$this->set('gt_ht_diary_count',$gt_ht_diary_count);
		
		$teachers_diary_count = $this->SurveyOfSchool->find('count',array('conditions'=>array('school_id'=>$school_id2, 'teachers_diary'=>1)));
		$this->set('teachers_diary_count',$teachers_diary_count);
		
		$exam_result_count = $this->SurveyOfSchool->find('count',array('conditions'=>array('school_id'=>$school_id2, 'exam_result'=>1)));
		$this->set('exam_result_count',$exam_result_count);
		
		$slc_register_count = $this->SurveyOfSchool->find('count',array('conditions'=>array('school_id'=>$school_id2, 'slc_register'=>1)));
		$this->set('slc_register_count',$slc_register_count);
		
		$science_kit_count = $this->SurveyOfSchool->find('count',array('conditions'=>array('school_id'=>$school_id2, 'science_kit'=>1)));
		$this->set('science_kit_count',$science_kit_count);
		
		$st_attendance_reg_count = $this->SurveyOfSchool->find('count',array('conditions'=>array('school_id'=>$school_id2, 'st_attendance_reg'=>1)));
		$this->set('st_attendance_reg_count',$st_attendance_reg_count);
		
		$teacher_att_register_count = $this->SurveyOfSchool->find('count',array('conditions'=>array('school_id'=>$school_id2, 'teacher_att_register'=>1)));
		$this->set('teacher_att_register_count',$teacher_att_register_count);
		
		
		$cluster_ratio_records = $this->School->find('first',array('conditions'=>array('id'=>$school_id2),'fields'=>array('sum(teachers_male) as teachers_male_sum','sum(teachers_female) as teachers_female_sum','sum(enrollment_boys) as enrollment_boys_sum','sum(enrollment_girls) as enrollment_girls_sum')));
		//debug($cluster_ratio_records);
		
		
		$schoolidentificationsids = $this->SchoolIdentification->find('all',array('conditions'=>array('school_id'=>$school_id2),'fields'=>array('id')));
		
		$schoolidentificationsid = array();
		
		foreach($schoolidentificationsids as $scid)
		{
			$schoolidentificationsid = $scid['SchoolIdentification']['id'];
			
			$results = $this->BasicInformation->query('select sum(no_of_rooms) from basic_informations Where school_identification_id = "'.$schoolidentificationsid.'" ');
			
			$total_rooms += $results[0][0]['sum(no_of_rooms)'];
		}
		
		
		
		
		$total = count($school_id2);
		$this->set('schools',$schools);
		
		
		
		$this->set('total_schools',$total);
		$this->set('func_schools',$func_schools);
		$this->set('uc_id',$id);
		
		
		//debug($schools);
		}
	}


	function add_school($cid,$id = null)
	{
		if($id == null)
		{
			$this->set('cluster_id',$cid);
		}
		else
		{
			$this->redirect('../home/edit_school/'.$cid.'/'.$id);
		}
	}


	function edit_school($cid,$id = null)
	{
		if(!($id == null))
		{
			$school = $this->School->find('first',array('conditions'=>array('id'=>$id)));
			$this->set('school',$school);
			$cluster = $this->Cluster->find('first',array('conditions'=>array('id'=>$cid)));
			$this->set('cluster',$cluster);
		}
		else
		{
			$this->redirect('../home/index');
		}
	}


	function submit_school_details($id = null)
	{
		$this->School->id = $id;
		if(!(empty($this->params['form'])))
		{
			$schoolDetailsArray = array();
			
			$schoolDetailsArray['School']['name'] = $this->params['form']['school_name'];
			$schoolDetailsArray['School']['code'] = $this->params['form']['semis_code'];
			$schoolDetailsArray['School']['latitude'] = $this->params['form']['latitude'];
			$schoolDetailsArray['School']['longitude'] = $this->params['form']['longitude'];
			$schoolDetailsArray['School']['clusterid'] = $this->params['form']['cluster_id'];
			$schoolDetailsArray['School']['guide_school'] = $this->params['form']['guide_school'];
			$schoolDetailsArray['School']['type'] = $this->params['form']['school_type'];
			$schoolDetailsArray['School']['latitude'] = $this->params['form']['latitude'];
			$schoolDetailsArray['School']['longitude'] = $this->params['form']['longitude'];
			$schoolDetailsArray['School']['prefix'] = $this->params['form']['prefix'];
			$schoolDetailsArray['School']['head_teacher'] = $this->params['form']['ht_name'];
			$schoolDetailsArray['School']['head_teacher_cnic'] = $this->params['form']['ht_cnic'];
			$schoolDetailsArray['School']['head_teacher_phone'] = $this->params['form']['ht_phone'];
			$schoolDetailsArray['School']['sne_hm'] = $this->params['form']['sne_hm'];
			$schoolDetailsArray['School']['teachers_male'] = $this->params['form']['teachers_male'];
			$schoolDetailsArray['School']['teachers_female'] = $this->params['form']['teachers_female'];
			$schoolDetailsArray['School']['non_teachers_male'] = $this->params['form']['non_teachers_male'];
			$schoolDetailsArray['School']['non_teachers_female'] = $this->params['form']['non_teachers_female'];
			$schoolDetailsArray['School']['enrollment_boys'] = $this->params['form']['enrolled_boys'];
			$schoolDetailsArray['School']['enrollment_girls'] = $this->params['form']['enrolled_girls'];
			$schoolDetailsArray['School']['govt_primary_schools'] = $this->params['form']['govt_pri_school'];
			$schoolDetailsArray['School']['govt_middle_schools'] = $this->params['form']['govt_middle_school'];
			$schoolDetailsArray['School']['govt_high_schools'] = $this->params['form']['govt_high_school'];
			$schoolDetailsArray['School']['private_other_schools'] = $this->params['form']['pri_other_school'];
			$schoolDetailsArray['School']['smc_notified'] = $this->params['form']['is_smc_notified'];
			$schoolDetailsArray['School']['smc_functional'] = $this->params['form']['is_smc_functional'];
			$schoolDetailsArray['School']['has_building'] = $this->params['form']['has_building'];
			$schoolDetailsArray['School']['distance_from_household'] = $this->params['form']['location_from_hh'];
			$schoolDetailsArray['School']['distance_from_road'] = $this->params['form']['locatin_from_road'];
			$schoolDetailsArray['School']['households'] = $this->params['form']['no_of_hh'];
			$schoolDetailsArray['School']['distance_from_guide'] = $this->params['form']['guide_school_distance'];
			$schoolDetailsArray['School']['is_active'] = 1;
			
			$this->School->save($schoolDetailsArray);
			
			$this->redirect('../home/cluster_details/'.$this->params['form']['cluster_id'].'/school has been saved');
			
		}
		else
		{
		$this->redirect('../home/index');
		}
		
	}

	// function for viewing editing schools starts here



	// function for viewing editing school surveys starts here


	function guide_school_survey($id = null,$sid = null)
	{
		if($sid == null)
		{
			$school = $this->School->find('first',array('conditions'=>array('id'=>$id)));
			$this->set('school',$school);
		}
		else
		{
			$this->redirect('../home/edit_guide_school_survey/'.$id.'/'.$sid);
		}
	}

	function edit_guide_school_survey($id = null, $sid = null)
	{
		$school = $this->School->find('first',array('conditions'=>array('id'=>$id)));
		$this->set('school',$school);
		
		$surveyOfSchool = $this->SurveyOfSchool->find('first',array('conditions'=>array('id'=>$sid)));
		$this->set('surveyOfSchool',$surveyOfSchool);
		$guideSpecific = $this->GuideSpecific->find('first',array('conditions'=>array('school_id'=>$id)));
		$this->set('guideSpecific',$guideSpecific);
	}

	function non_guide_school_survey($id = null,$sid = null)
	{
		if($sid == null)
		{
			$school = $this->School->find('first',array('conditions'=>array('id'=>$id)));
			$this->set('school',$school);
		}
		else
		{
			$this->redirect('../home/edit_non_guide_school_survey/'.$id.'/'.$sid);
		}
	}
	
	function edit_non_guide_school_survey($id = null, $sid = null)
	{
		$school = $this->School->find('first',array('conditions'=>array('id'=>$id)));
		$this->set('school',$school);
		
		$surveyOfSchool = $this->SurveyOfSchool->find('first',array('conditions'=>array('id'=>$sid)));
		$this->set('surveyOfSchool',$surveyOfSchool);
		$guideSpecific = $this->GuideSpecific->find('first',array('conditions'=>array('school_id'=>$id)));
		$this->set('guideSpecific',$guideSpecific);
		
	}

	function submit_non_guide_school_survey($id = null)
	{
		if(!empty($this->params['form']))
		{
			
			$this->SurveyOfSchool->id = $id;
			
			$scid = $this->params['form']['school_id'];
			
			$schoolSurveyDetailsArray = array();
			$schoolSurveyDetailsArray['SurveyOfSchool']['school_id'] = $scid;
			$schoolSurveyDetailsArray['SurveyOfSchool']['village_st'] = $this->params['form']['village_st'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['hh_no'] = $this->params['form']['hh_no'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['cluster_profile_status'] = $this->params['form']['cluster_profile_status'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['sch_func'] = $this->params['form']['sch_func'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['sch_nf_how_used'] = $this->params['form']['sch_nf_how_used'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['smc_last_meeting'] = $this->params['form']['smc_last_meeting'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['sip'] = $this->params['form']['sip'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['smc_func'] = $this->params['form']['smc_func'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['smc_notice_board'] = $this->params['form']['smc_notice_board'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['smc_bank'] = $this->params['form']['smc_bank'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['smc_acc_number'] = $this->params['form']['smc_acc_number'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['school_name_board'] = $this->params['form']['school_name_board'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['sip_displayed'] = $this->params['form']['sip_displayed'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['smc_cp_name'] = $this->params['form']['smc_cp_name'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['smc_cp_phone'] = $this->params['form']['smc_cp_phone'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_name'] = $this->params['form']['ht_name'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_nic'] = $this->params['form']['ht_nic'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_bps'] = $this->params['form']['ht_bps'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_salary'] = $this->params['form']['ht_salary'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_off_code'] = $this->params['form']['ht_off_code'];
			//$schoolSurveyDetailsArray['SurveyOfSchool']['ht_cash_center'] = $this->params['form']['ht_cash_center'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_address'] = $this->params['form']['ht_address'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_personal_number'] = $this->params['form']['ht_personal_number'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_distance_rtg'] = $this->params['form']['ht_distance_rtg'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_mot'] = $this->params['form']['ht_mot'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_qual_general'] = $this->params['form']['ht_qual_general'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_qual_proff'] = $this->params['form']['ht_qual_proff'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_date_posting'] = $this->params['form']['ht_date_posting'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['staff_govt_male'] = $this->params['form']['staff_govt_male'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['staff_govt_female'] = $this->params['form']['staff_govt_female'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['staff_cntr_male'] = $this->params['form']['staff_cntr_male'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['staff_cntr_female'] = $this->params['form']['staff_cntr_female'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['staff_nchd_male'] = $this->params['form']['staff_nchd_male'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['staff_nchd_female'] = $this->params['form']['staff_nchd_female'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['staff_unicef_male'] = $this->params['form']['staff_unicef_male'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['staff_unicef_female'] = $this->params['form']['staff_unicef_female'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['staff_detailment_male'] = $this->params['form']['staff_detailment_male'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['staff_detailment_female'] = $this->params['form']['staff_detailment_female'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['staff_other_male'] = $this->params['form']['staff_other_male'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['staff_other_female'] = $this->params['form']['staff_other_female'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['enrollment_boys'] = $this->params['form']['enrollment_boys'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['enrollment_girls'] = $this->params['form']['enrollment_girls'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['katchi_enrollment'] = $this->params['form']['katchi_enrollment'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['katchi_enrollment_boys'] = $this->params['form']['katchi_enrollment_boys'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['katchi_enrollment_girls'] = $this->params['form']['katchi_enrollment_girls'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ece'] = $this->params['form']['ece'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['distance_fgs'] = $this->params['form']['distance_fgs'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['guide_to_private'] = $this->params['form']['guide_to_private'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['students_needs'] = $this->params['form']['students_needs'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['surveyor_name'] = $this->params['form']['surveyor_name'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['asc_performa'] = $this->params['form']['asc_performa'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['hrmis_form'] = $this->params['form']['hrmis_form'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['free_tb'] = $this->params['form']['free_tb'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['sap'] = $this->params['form']['sap'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['visitor_book'] = $this->params['form']['visitor_book'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['time_table'] = $this->params['form']['time_table'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['gt_ht_diary'] = $this->params['form']['gt_ht_diary'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['teachers_diary'] = $this->params['form']['teachers_diary'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['exam_result'] = $this->params['form']['exam_result'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['slc_register'] = $this->params['form']['slc_register'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['science_kit'] = $this->params['form']['science_kit'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['st_attendance_reg'] = $this->params['form']['st_attendance_reg'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['teacher_att_register'] = $this->params['form']['teacher_att_register'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['budget_recieved'] = $this->params['form']['budget_recieved'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['budget_amount'] = $this->params['form']['budget_amount'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['cheque_drawn'] = $this->params['form']['cheque_drawn'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['survey_remarks'] = $this->params['form']['survey_remarks'];
			
			
			$this->SurveyOfSchool->save($schoolSurveyDetailsArray);
			
			
			$this->redirect('../home/cluster_details/'.($this->params['form']['cluster_id']));
			
			
		}	
	}



	function submit_guide_school_survey($sid = null, $gsid = null)
	{
		if(!empty($this->params['form']))
		{
			
			$this->SurveyOfSchool->id = $sid;
			
			
			$schoolSurveyDetailsArray = array();
			$schoolSurveyDetailsArray['SurveyOfSchool']['school_id'] = $this->params['form']['school_id'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['village_st'] = $this->params['form']['village_st'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['hh_no'] = $this->params['form']['hh_no'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['cluster_profile_status'] = $this->params['form']['cluster_profile_status'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['sch_func'] = $this->params['form']['sch_func'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['sch_nf_how_used'] = $this->params['form']['sch_nf_how_used'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['smc_last_meeting'] = $this->params['form']['smc_last_meeting'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['sip'] = $this->params['form']['sip'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['smc_func'] = $this->params['form']['smc_func'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['smc_notice_board'] = $this->params['form']['smc_notice_board'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['smc_bank'] = $this->params['form']['smc_bank'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['smc_acc_number'] = $this->params['form']['smc_acc_number'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['school_name_board'] = $this->params['form']['school_name_board'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['sip_displayed'] = $this->params['form']['sip_displayed'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['smc_cp_name'] = $this->params['form']['smc_cp_name'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['smc_cp_phone'] = $this->params['form']['smc_cp_phone'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_name'] = $this->params['form']['ht_name'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_nic'] = $this->params['form']['ht_nic'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_bps'] = $this->params['form']['ht_bps'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_salary'] = $this->params['form']['ht_salary'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_off_code'] = $this->params['form']['ht_off_code'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_cash_center'] = $this->params['form']['ht_cash_center'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_address'] = $this->params['form']['ht_address'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_personal_number'] = $this->params['form']['ht_personal_number'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_distance_rtg'] = $this->params['form']['ht_distance_rtg'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_mot'] = $this->params['form']['ht_mot'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_qual_general'] = $this->params['form']['ht_qual_general'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_qual_proff'] = $this->params['form']['ht_qual_proff'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ht_date_posting'] = $this->params['form']['ht_date_posting'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['staff_govt_male'] = $this->params['form']['staff_govt_male'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['staff_govt_female'] = $this->params['form']['staff_govt_female'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['staff_cntr_male'] = $this->params['form']['staff_cntr_male'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['staff_cntr_female'] = $this->params['form']['staff_cntr_female'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['staff_nchd_male'] = $this->params['form']['staff_nchd_male'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['staff_nchd_female'] = $this->params['form']['staff_nchd_female'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['staff_unicef_male'] = $this->params['form']['staff_unicef_male'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['staff_unicef_female'] = $this->params['form']['staff_unicef_female'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['staff_detailment_male'] = $this->params['form']['staff_detailment_male'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['staff_detailment_female'] = $this->params['form']['staff_detailment_female'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['staff_other_male'] = $this->params['form']['staff_other_male'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['staff_other_female'] = $this->params['form']['staff_other_female'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['enrollment_boys'] = $this->params['form']['enrollment_boys'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['enrollment_girls'] = $this->params['form']['enrollment_girls'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['katchi_enrollment'] = $this->params['form']['katchi_enrollment'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['katchi_enrollment_boys'] = $this->params['form']['katchi_enrollment_boys'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['katchi_enrollment_girls'] = $this->params['form']['katchi_enrollment_girls'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['ece'] = $this->params['form']['ece'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['distance_fgs'] = $this->params['form']['distance_fgs'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['guide_to_private'] = $this->params['form']['guide_to_private'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['students_needs'] = $this->params['form']['students_needs'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['surveyor_name'] = $this->params['form']['surveyor_name'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['asc_performa'] = $this->params['form']['asc_performa'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['hrmis_form'] = $this->params['form']['hrmis_form'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['free_tb'] = $this->params['form']['free_tb'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['sap'] = $this->params['form']['sap'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['visitor_book'] = $this->params['form']['visitor_book'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['time_table'] = $this->params['form']['time_table'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['gt_ht_diary'] = $this->params['form']['gt_ht_diary'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['teachers_diary'] = $this->params['form']['teachers_diary'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['exam_result'] = $this->params['form']['exam_result'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['slc_register'] = $this->params['form']['slc_register'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['science_kit'] = $this->params['form']['science_kit'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['st_attendance_reg'] = $this->params['form']['st_attendance_reg'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['teacher_att_register'] = $this->params['form']['teacher_att_register'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['budget_recieved'] = $this->params['form']['budget_recieved'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['budget_amount'] = $this->params['form']['budget_amount'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['cheque_drawn'] = $this->params['form']['cheque_drawn'];
			$schoolSurveyDetailsArray['SurveyOfSchool']['survey_remarks'] = $this->params['form']['survey_remarks'];
			
			
			$this->SurveyOfSchool->save($schoolSurveyDetailsArray);
			
			
			
			$this->GuideSpecific->id = $gsid;
			
			$guideSpecificDetailsArray = array();
			
			
			$guideSpecificDetailsArray['GuideSpecific']['school_id'] = $this->params['form']['school_id'];
			$guideSpecificDetailsArray['GuideSpecific']['has_building'] = $this->params['form']['has_building'];
			$guideSpecificDetailsArray['GuideSpecific']['own_building'] = $this->params['form']['own_building'];
			$guideSpecificDetailsArray['GuideSpecific']['open_space'] = $this->params['form']['open_space'];
			$guideSpecificDetailsArray['GuideSpecific']['open_space_area'] = $this->params['form']['open_space_area'];
			$guideSpecificDetailsArray['GuideSpecific']['rooms'] = $this->params['form']['rooms'];
			$guideSpecificDetailsArray['GuideSpecific']['rooms_used'] = $this->params['form']['rooms_used'];
			$guideSpecificDetailsArray['GuideSpecific']['rooms_unused'] = $this->params['form']['rooms_unused'];
			$guideSpecificDetailsArray['GuideSpecific']['furniture_condition'] = $this->params['form']['furniture_condition'];
			$guideSpecificDetailsArray['GuideSpecific']['class_rooms'] = $this->params['form']['class_rooms'];
			$guideSpecificDetailsArray['GuideSpecific']['office'] = $this->params['form']['office'];
			$guideSpecificDetailsArray['GuideSpecific']['need_repair'] = $this->params['form']['need_repair'];
			$guideSpecificDetailsArray['GuideSpecific']['nature_of_seats'] = $this->params['form']['nature_of_seats'];
			$guideSpecificDetailsArray['GuideSpecific']['project_status'] = $this->params['form']['project_status'];
			$guideSpecificDetailsArray['GuideSpecific']['store'] = $this->params['form']['store'];
			$guideSpecificDetailsArray['GuideSpecific']['project_year'] = $this->params['form']['project_year'];
			$guideSpecificDetailsArray['GuideSpecific']['facility_of'] = $this->params['form']['facility_of'];
			$guideSpecificDetailsArray['GuideSpecific']['gtng_far_semis_code'] = $this->params['form']['gtng_far_semis_code'];
			$guideSpecificDetailsArray['GuideSpecific']['gtng_dist_far'] = $this->params['form']['gtng_dist_far'];
			$guideSpecificDetailsArray['GuideSpecific']['gtng_dist_near'] = $this->params['form']['gtng_dist_near'];
			$guideSpecificDetailsArray['GuideSpecific']['gtng_near_semis_code'] = $this->params['form']['gtng_near_semis_code'];
			$guideSpecificDetailsArray['GuideSpecific']['gthh_dist_near'] = $this->params['form']['gthh_dist_near'];
			$guideSpecificDetailsArray['GuideSpecific']['gthh_dist_far'] = $this->params['form']['gthh_dist_far'];
			$guideSpecificDetailsArray['GuideSpecific']['gtps_dist_near'] = $this->params['form']['gtps_dist_near'];
			$guideSpecificDetailsArray['GuideSpecific']['gtps_dist_far'] = $this->params['form']['gtps_dist_far'];
			$guideSpecificDetailsArray['GuideSpecific']['gt_mobility_allowance'] = $this->params['form']['gt_mobility_allowance'];
			$guideSpecificDetailsArray['GuideSpecific']['gt_mobility_allowance_amount'] = $this->params['form']['gt_mobility_allowance_amount'];
			$guideSpecificDetailsArray['GuideSpecific']['gt_transport_provided'] = $this->params['form']['gt_transport_provided'];
			$guideSpecificDetailsArray['GuideSpecific']['gt_mode_of_transport'] = $this->params['form']['gt_mode_of_transport'];
			$guideSpecificDetailsArray['GuideSpecific']['gt_cluster_visit'] = $this->params['form']['gt_cluster_visit'];
			$guideSpecificDetailsArray['GuideSpecific']['gt_jd'] = $this->params['form']['gt_jd'];
			$guideSpecificDetailsArray['GuideSpecific']['gt_notific'] = $this->params['form']['gt_notific'];
			$guideSpecificDetailsArray['GuideSpecific']['gt_orientation_attended'] = $this->params['form']['gt_orientation_attended'];
			
			$this->GuideSpecific->save($guideSpecificDetailsArray);
			
			$this->redirect('../home/cluster_details/'.($this->params['form']['cluster_id']));
			
		}		
	}



	// function for viewing editing school surveys ends here

	function baseline_survey($id = null, $bsid = null)
	{
		if($bsid == null)
		{
			$school = $this->School->find('first',array('conditions'=>array('id'=>$id)));
			$this->set('school',$school);
		}
		else
		{
			$this->redirect('../home/edit_baseline_survey/'.$id.'/'.$bsid);
		}
	}
	
	function edit_baseline_survey($id = null,$bsid = null)
	{
		// Getting School Basic Information
		$school = $this->School->find('first',array('conditions'=>array('id'=>$id)));
		//debug($id);
		$this->set('school',$school);
		$this->set('scid',$school['School']['id']);
		//debug($school);
		
		
		$cluster = $this->Cluster->find('first',array('conditions'=>array('id'=>($school['School']['clusterid']))));
		$this->set('cluster',$cluster);
		//debug($cluster);
		$uc = $this->Uc->find('first',array('conditions'=>array('id'=>($cluster['Cluster']['uc_id']))));
		//debug($uc);
		$taluka = $this->Taluka->find('first',array('conditions'=>array('id'=>($uc['Uc']['taluka_id']))));
		//debug($taluka);
		$district = $this->Region->find('first',array('conditions'=>array('id'=>($taluka['Taluka']['district_id']))));
		//debug($district);
		
		$this->set('semis_code',$school['School']['code']);
		$school_name = $school['School']['prefix'].' - '.$school['School']['name'];
		$this->set('school_name',$school_name);
		$this->set('uc_name',$uc['Uc']['name']);
		$this->set('taluka_name',$taluka['Taluka']['name']);
		$this->set('district_name',$district['Region']['name']);
		
		$baseline_surveys = $this->SchoolIdentification->find('all',array('conditions'=>array('id'=>$bsid)));
		
		
		
		foreach($baseline_surveys as &$baseline_survey)
		{
			
			//getting basic information for the school survey
			
			$basicInformation = $this->BasicInformation->find('first',array('conditions'=>array('school_identification_id'=>$bsid)));
			if(!(empty($basicInformation)))
			{
				$baseline_survey['BasicInformation'] = $basicInformation['BasicInformation'];
			}
			
			//getting Enrollment Attendance for the school
			
			$enrollmentAttendance = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$bsid)));
			if(!(empty($enrollmentAttendance)))
			{
				$baseline_survey['EnrollmentAttendance'] = $enrollmentAttendance['EnrollmentAttendance'];
			}
			
			
			//getting Records for the school
			$records = $this->Record->find('first',array('conditions'=>array('school_identification_id'=>$bsid)));
			if(!(empty($records)))
			{
				$baseline_survey['Record'] = $records['Record'];
			}
			
			
			//getting School Facilities for the school
			$schoolFacility = $this->SchoolFacility->find('first',array('conditions'=>array('school_identification_id'=>$bsid)));
			if(!(empty($schoolFacility)))
			{
				$baseline_survey['SchoolFacility'] = $schoolFacility['SchoolFacility'];
			}
			
			//getting School Management Committee for the school
			$schoolManagementCommitee = $this->SchoolManagementCommitee->find('first',array('conditions'=>array('school_identification_id'=>$bsid)));
			if(!(empty($schoolManagementCommitee)))
			{
				$baseline_survey['SchoolManagementCommitee'] = $schoolManagementCommitee['SchoolManagementCommitee'];
			}
			
			//getting Staff for the school
			$staffs = $this->Staff->find('all',array('conditions'=>array('school_identification_id'=>$bsid)));
			if(!(empty($staffs)))
			{
				$x = 1;
				foreach($staffs as $staff)
				{
					$baseline_survey['Staff'.$x] = $staff['Staff'];
					$x++;
				}
			}
			
			//getting Staff Attendance for the school
			$staffAttendances = $this->StaffAttendance->find('all',array('conditions'=>array('school_identification_id'=>$bsid)));
			if(!(empty($staffAttendances)))
			{
				$x = 1;
				foreach($staffAttendances as $staffAttendance)
				{
					$baseline_survey['StaffAttendance'.$x] = $staffAttendance['StaffAttendance'];
					$x++;
				}
			}
		}
		//debug($baseline_surveys);
		$this->set('baseline_surveys',$baseline_surveys);
	}

	function submit_baseline_survey($id = null)
	{
		
		if(isset($this->params['form']))
		{
			$this->SchoolIdentification->id = $id;
			
			debug($this->params['form']);
			$schoolIdentificationDetailsArray = array();
			$schoolIdentificationDetailsArray['SchoolIdentification']['school_id'] = $this->params['form']['school_id'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['school_name'] = $this->params['form']['school_name'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['semis_code'] = $this->params['form']['semis_code'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['round'] = $this->params['form']['round'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['cluster_code'] = $this->params['form']['cluster_code'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['cluster_position'] = $this->params['form']['cluster_position'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['cluster_village_st'] = $this->params['form']['cluster_village_st'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['cluster_vicinity_households'] = $this->params['form']['school_vicinity_households'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['gs_community_distance'] = $this->params['form']['gs_community_distance'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['post_office'] = $this->params['form']['post_office'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['uc_name'] = $this->params['form']['uc_name'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['taluka'] = $this->params['form']['taluka'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['district'] = $this->params['form']['district'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['gtng1name'] = $this->params['form']['gtng1name'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['gtng1'] = $this->params['form']['gtng1'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['dir1'] = $this->params['form']['dir1'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['gtng2name'] = $this->params['form']['gtng2name'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['gtng2'] = $this->params['form']['gtng2'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['dir2'] = $this->params['form']['dir2'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['gtng3name'] = $this->params['form']['gtng3name'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['gtng3'] = $this->params['form']['gtng3'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['dir3'] = $this->params['form']['dir3'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['gtng4name'] = $this->params['form']['gtng4name'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['gtng4'] = $this->params['form']['gtng4'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['dir4'] = $this->params['form']['dir4'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['gtng5name'] = $this->params['form']['gtng5name'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['gtng5'] = $this->params['form']['gtng5'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['dir5'] = $this->params['form']['dir5'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['gtng6name'] = $this->params['form']['gtng6name'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['gtng6'] = $this->params['form']['gtng6'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['dir6'] = $this->params['form']['dir6'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['gtng7name'] = $this->params['form']['gtng7name'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['gtng7'] = $this->params['form']['gtng7'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['dir7'] = $this->params['form']['dir7'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['gtng8name'] = $this->params['form']['gtng8name'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['gtng8'] = $this->params['form']['gtng8'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['dir8'] = $this->params['form']['dir8'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['elementary_boys'] = $this->params['form']['elementary_boys'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['elementary_girls'] = $this->params['form']['elementary_girls'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['secondary_boys'] = $this->params['form']['secondary_boys'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['secondary_girls'] = $this->params['form']['secondary_girls'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['private_boys'] = $this->params['form']['private_boys'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['private_girls'] = $this->params['form']['private_girls'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['other_boys'] = $this->params['form']['other_boys'];
			$schoolIdentificationDetailsArray['SchoolIdentification']['other_girls'] = $this->params['form']['other_girls'];
			
			$this->SchoolIdentification->save($schoolIdentificationDetailsArray);
			
			
			$scid_id = $this->SchoolIdentification->id;
			
			if(!($id == null))
			{
				$basic_info = $this->BasicInformation->find('first',array('conditions'=>array('school_identification_id'=>$id)));
				$this->BasicInformation->id = $basic_info['BasicInformation']['id'];
			}else
			{
				$this->BasicInformation->id = null;
			}
			
			
			$basicInformationDetailsArray = array();
			$basicInformationDetailsArray['BasicInformation']['school_status'] = $this->params['form']['school_status'];
			$basicInformationDetailsArray['BasicInformation']['school_identification_id'] = $scid_id;
			$basicInformationDetailsArray['BasicInformation']['date_of_stablishment'] = $this->params['form']['date_of_stablishment'];
			$basicInformationDetailsArray['BasicInformation']['date_of_constrction'] = $this->params['form']['date_of_constrction'];
			$basicInformationDetailsArray['BasicInformation']['school_level'] = $this->params['form']['school_level'];
			$basicInformationDetailsArray['BasicInformation']['school_gender'] = $this->params['form']['school_gender'];
			$basicInformationDetailsArray['BasicInformation']['medium_of_instruction'] = $this->params['form']['medium_of_instruction'];
			$basicInformationDetailsArray['BasicInformation']['no_of_rooms'] = $this->params['form']['no_of_rooms'];
			$basicInformationDetailsArray['BasicInformation']['budget_recieved'] = $this->params['form']['budget_recieved'];
			$basicInformationDetailsArray['BasicInformation']['school_account'] = $this->params['form']['school_account'];
			$basicInformationDetailsArray['BasicInformation']['bank_branch'] = $this->params['form']['bank_branch'];
			$basicInformationDetailsArray['BasicInformation']['account_title'] = $this->params['form']['account_title'];
			$basicInformationDetailsArray['BasicInformation']['account_number'] = $this->params['form']['account_number'];
			$basicInformationDetailsArray['BasicInformation']['total_rooms_inuse'] = $this->params['form']['total_rooms_inuse'];
			$basicInformationDetailsArray['BasicInformation']['classrooms'] = $this->params['form']['classrooms'];
			$basicInformationDetailsArray['BasicInformation']['office'] = $this->params['form']['office'];
			$basicInformationDetailsArray['BasicInformation']['store'] = $this->params['form']['store'];
			$basicInformationDetailsArray['BasicInformation']['unused'] = $this->params['form']['unused'];
			$basicInformationDetailsArray['BasicInformation']['unsafe'] = $this->params['form']['unsafe'];
			$basicInformationDetailsArray['BasicInformation']['other'] = $this->params['form']['other'];
			$basicInformationDetailsArray['BasicInformation']['school_in_range'] = $this->params['form']['school_in_range'];
			$basicInformationDetailsArray['BasicInformation']['high_school_in_range'] = $this->params['form']['high_school_in_range'];
			
			$this->BasicInformation->save($basicInformationDetailsArray);
			
			if(!($id == null))
			{
				$record = $this->Record->find('first',array('conditions'=>array('school_identification_id'=>$id)));
				$this->Record->id = $record['Record']['id'];
			}else
			{
				$this->Record->id = $scid_id;
			}
			$recordsDetailsArray = array();
			
			$recordsDetailsArray['Record']['school_identification_id'] = $scid_id;
			$recordsDetailsArray['Record']['tar_available'] = $this->params['form']['tar_available'];
			$recordsDetailsArray['Record']['tar_updated'] = $this->params['form']['tar_updated'];
			$recordsDetailsArray['Record']['tlr_available'] = $this->params['form']['tlr_available'];
			$recordsDetailsArray['Record']['tlr_updated'] = $this->params['form']['tlr_updated'];
			$recordsDetailsArray['Record']['stu_att_available'] = $this->params['form']['stu_att_available'];
			$recordsDetailsArray['Record']['stu_att_updated'] = $this->params['form']['stu_att_updated'];
			$recordsDetailsArray['Record']['gr_available'] = $this->params['form']['gr_available'];
			$recordsDetailsArray['Record']['gr_updated'] = $this->params['form']['gr_updated'];
			$recordsDetailsArray['Record']['exam_result_available'] = $this->params['form']['exam_result_available'];
			$recordsDetailsArray['Record']['exam_result_updated'] = $this->params['form']['exam_result_updated'];
			$recordsDetailsArray['Record']['vb_available'] = $this->params['form']['vb_available'];
			$recordsDetailsArray['Record']['vb_updated'] = $this->params['form']['vb_updated'];
			$recordsDetailsArray['Record']['ss_form_available'] = $this->params['form']['ss_form_available'];
			$recordsDetailsArray['Record']['ss_form_updated'] = $this->params['form']['ss_form_updated'];
			$recordsDetailsArray['Record']['tb_distribution_available'] = $this->params['form']['tb_distribution_available'];
			$recordsDetailsArray['Record']['tb_distribution_updated'] = $this->params['form']['tb_distribution_updated'];
			$recordsDetailsArray['Record']['gs_record_available'] = $this->params['form']['gs_record_available'];
			$recordsDetailsArray['Record']['gs_record_updated'] = $this->params['form']['gs_record_updated'];
			$recordsDetailsArray['Record']['as_register_available'] = $this->params['form']['as_register_available'];
			$recordsDetailsArray['Record']['as_register_updated'] = $this->params['form']['as_register_updated'];
			$recordsDetailsArray['Record']['smc_register_available'] = $this->params['form']['smc_register_available'];
			$recordsDetailsArray['Record']['smc_register_updated'] = $this->params['form']['smc_register_updated'];
			$recordsDetailsArray['Record']['smc_notif_available'] = $this->params['form']['smc_notif_available'];
			$recordsDetailsArray['Record']['smc_guideline_available'] = $this->params['form']['smc_guideline_available'];
			$recordsDetailsArray['Record']['smc_register_available'] = $this->params['form']['smc_register_available'];
			$recordsDetailsArray['Record']['smc_accountinfo_available'] = $this->params['form']['smc_accountinfo_available'];
			$recordsDetailsArray['Record']['sip_available'] = $this->params['form']['sip_available'];
			$recordsDetailsArray['Record']['sip_updated'] = $this->params['form']['sip_updated'];
			
			$this->Record->save($recordsDetailsArray);
			
			
			if(!($id == null))
			{
				$enrollment_att = $this->EnrollmentAttendance->find('first',array('conditions'=>array('school_identification_id'=>$id)));
				$this->EnrollmentAttendance->id = $enrollment_att['EnrollmentAttendance']['id'];
			}else
			{
				$this->EnrollmentAttendance->id = null;
			}
			
			
			$enrollmentAttendanceArray = array();
			
			
			$enrollmentAttendanceArray['EnrollmentAttendance']['school_identification_id'] = $scid_id;
			
			
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwe_katchi_boys'] = $this->params['form']['gwe_katchi_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwe_katchi_girls'] = $this->params['form']['gwe_katchi_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwe_1_boys'] = $this->params['form']['gwe_1_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwe_1_girls'] = $this->params['form']['gwe_1_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwe_2_boys'] = $this->params['form']['gwe_2_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwe_2_girls'] = $this->params['form']['gwe_2_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwe_3_boys'] = $this->params['form']['gwe_3_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwe_3_girls'] = $this->params['form']['gwe_3_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwe_4_boys'] = $this->params['form']['gwe_4_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwe_4_girls'] = $this->params['form']['gwe_4_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwe_5_boys'] = $this->params['form']['gwe_5_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwe_5_girls'] = $this->params['form']['gwe_5_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwe_6_boys'] = $this->params['form']['gwe_6_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwe_6_girls'] = $this->params['form']['gwe_6_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwe_7_boys'] = $this->params['form']['gwe_7_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwe_7_girls'] = $this->params['form']['gwe_7_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwe_8_boys'] = $this->params['form']['gwe_8_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwe_8_girls'] = $this->params['form']['gwe_8_girls'];
			
			
			$enrollmentAttendanceArray['EnrollmentAttendance']['tely_katchi_boys'] = $this->params['form']['tely_katchi_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['tely_katchi_girls'] = $this->params['form']['tely_katchi_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['tely_1_boys'] = $this->params['form']['tely_1_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['tely_1_girls'] = $this->params['form']['tely_1_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['tely_2_boys'] = $this->params['form']['tely_2_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['tely_2_girls'] = $this->params['form']['tely_2_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['tely_3_boys'] = $this->params['form']['tely_3_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['tely_3_girls'] = $this->params['form']['tely_3_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['tely_4_boys'] = $this->params['form']['tely_4_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['tely_4_girls'] = $this->params['form']['tely_4_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['tely_5_boys'] = $this->params['form']['tely_5_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['tely_5_girls'] = $this->params['form']['tely_5_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['tely_6_boys'] = $this->params['form']['tely_6_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['tely_6_girls'] = $this->params['form']['tely_6_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['tely_7_boys'] = $this->params['form']['tely_7_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['tely_7_girls'] = $this->params['form']['tely_7_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['tely_8_boys'] = $this->params['form']['tely_8_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['tely_8_girls'] = $this->params['form']['tely_8_girls'];
			
			
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncp_katchi_boys'] = $this->params['form']['ncp_katchi_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncp_katchi_girls'] = $this->params['form']['ncp_katchi_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncp_1_boys'] = $this->params['form']['ncp_1_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncp_1_girls'] = $this->params['form']['ncp_1_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncp_2_boys'] = $this->params['form']['ncp_2_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncp_2_girls'] = $this->params['form']['ncp_2_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncp_3_boys'] = $this->params['form']['ncp_3_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncp_3_girls'] = $this->params['form']['ncp_3_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncp_4_boys'] = $this->params['form']['ncp_4_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncp_4_girls'] = $this->params['form']['ncp_4_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncp_5_boys'] = $this->params['form']['ncp_5_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncp_5_girls'] = $this->params['form']['ncp_5_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncp_6_boys'] = $this->params['form']['ncp_6_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncp_6_girls'] = $this->params['form']['ncp_6_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncp_7_boys'] = $this->params['form']['ncp_7_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncp_7_girls'] = $this->params['form']['ncp_7_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncp_8_boys'] = $this->params['form']['ncp_8_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncp_8_girls'] = $this->params['form']['ncp_8_girls'];
			
			
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncr_katchi_boys'] = $this->params['form']['ncr_katchi_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncr_katchi_girls'] = $this->params['form']['ncr_katchi_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncr_1_boys'] = $this->params['form']['ncr_1_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncr_1_girls'] = $this->params['form']['ncr_1_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncr_2_boys'] = $this->params['form']['ncr_2_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncr_2_girls'] = $this->params['form']['ncr_2_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncr_3_boys'] = $this->params['form']['ncr_3_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncr_3_girls'] = $this->params['form']['ncr_3_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncr_4_boys'] = $this->params['form']['ncr_4_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncr_4_girls'] = $this->params['form']['ncr_4_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncr_5_boys'] = $this->params['form']['ncr_5_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncr_5_girls'] = $this->params['form']['ncr_5_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncr_6_boys'] = $this->params['form']['ncr_6_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncr_6_girls'] = $this->params['form']['ncr_6_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncr_7_boys'] = $this->params['form']['ncr_7_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncr_7_girls'] = $this->params['form']['ncr_7_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncr_8_boys'] = $this->params['form']['ncr_8_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncr_8_girls'] = $this->params['form']['ncr_8_girls'];
			
			$enrollmentAttendanceArray['EnrollmentAttendance']['nctos_katchi_boys'] = $this->params['form']['nctos_katchi_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['nctos_katchi_girls'] = $this->params['form']['nctos_katchi_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['nctos_1_boys'] = $this->params['form']['nctos_1_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['nctos_1_girls'] = $this->params['form']['nctos_1_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['nctos_2_boys'] = $this->params['form']['nctos_2_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['nctos_2_girls'] = $this->params['form']['nctos_2_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['nctos_3_boys'] = $this->params['form']['nctos_3_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['nctos_3_girls'] = $this->params['form']['nctos_3_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['nctos_4_boys'] = $this->params['form']['nctos_4_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['nctos_4_girls'] = $this->params['form']['nctos_4_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['nctos_5_boys'] = $this->params['form']['nctos_5_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['nctos_5_girls'] = $this->params['form']['nctos_5_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['nctos_6_boys'] = $this->params['form']['nctos_6_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['nctos_6_girls'] = $this->params['form']['nctos_6_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['nctos_7_boys'] = $this->params['form']['nctos_7_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['nctos_7_girls'] = $this->params['form']['nctos_7_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['nctos_8_boys'] = $this->params['form']['nctos_8_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['nctos_8_girls'] = $this->params['form']['nctos_8_girls'];
			
			
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncdo_katchi_boys'] = $this->params['form']['ncdo_katchi_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncdo_katchi_girls'] = $this->params['form']['ncdo_katchi_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncdo_1_boys'] = $this->params['form']['ncdo_1_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncdo_1_girls'] = $this->params['form']['ncdo_1_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncdo_2_boys'] = $this->params['form']['ncdo_2_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncdo_2_girls'] = $this->params['form']['ncdo_2_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncdo_3_boys'] = $this->params['form']['ncdo_3_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncdo_3_girls'] = $this->params['form']['ncdo_3_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncdo_4_boys'] = $this->params['form']['ncdo_4_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncdo_4_girls'] = $this->params['form']['ncdo_4_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncdo_5_boys'] = $this->params['form']['ncdo_5_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncdo_5_girls'] = $this->params['form']['ncdo_5_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncdo_6_boys'] = $this->params['form']['ncdo_6_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncdo_6_girls'] = $this->params['form']['ncdo_6_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncdo_7_boys'] = $this->params['form']['ncdo_7_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncdo_7_girls'] = $this->params['form']['ncdo_7_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncdo_8_boys'] = $this->params['form']['ncdo_8_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncdo_8_girls'] = $this->params['form']['ncdo_8_girls'];
			
			
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwat_katchi_boys'] = $this->params['form']['gwat_katchi_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwat_katchi_girls'] = $this->params['form']['gwat_katchi_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwat_1_boys'] = $this->params['form']['gwat_1_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwat_1_girls'] = $this->params['form']['gwat_1_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwat_2_boys'] = $this->params['form']['gwat_2_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwat_2_girls'] = $this->params['form']['gwat_2_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwat_3_boys'] = $this->params['form']['gwat_3_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwat_3_girls'] = $this->params['form']['gwat_3_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwat_4_boys'] = $this->params['form']['gwat_4_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwat_4_girls'] = $this->params['form']['gwat_4_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwat_5_boys'] = $this->params['form']['gwat_5_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwat_5_girls'] = $this->params['form']['gwat_5_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwat_6_boys'] = $this->params['form']['gwat_6_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwat_6_girls'] = $this->params['form']['gwat_6_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwat_7_boys'] = $this->params['form']['gwat_7_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwat_7_girls'] = $this->params['form']['gwat_7_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwat_8_boys'] = $this->params['form']['gwat_8_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['gwat_8_girls'] = $this->params['form']['gwat_8_girls'];
			
			
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncna_katchi_boys'] = $this->params['form']['ncna_katchi_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncna_katchi_girls'] = $this->params['form']['ncna_katchi_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncna_1_boys'] = $this->params['form']['ncna_1_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncna_1_girls'] = $this->params['form']['ncna_1_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncna_2_boys'] = $this->params['form']['ncna_2_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncna_2_girls'] = $this->params['form']['ncna_2_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncna_3_boys'] = $this->params['form']['ncna_3_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncna_3_girls'] = $this->params['form']['ncna_3_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncna_4_boys'] = $this->params['form']['ncna_4_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncna_4_girls'] = $this->params['form']['ncna_4_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncna_5_boys'] = $this->params['form']['ncna_5_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncna_5_girls'] = $this->params['form']['ncna_5_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncna_6_boys'] = $this->params['form']['ncna_6_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncna_6_girls'] = $this->params['form']['ncna_6_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncna_7_boys'] = $this->params['form']['ncna_7_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncna_7_girls'] = $this->params['form']['ncna_7_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncna_8_boys'] = $this->params['form']['ncna_8_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['ncna_8_girls'] = $this->params['form']['ncna_8_girls'];
			
			
			$enrollmentAttendanceArray['EnrollmentAttendance']['aalm_katchi_boys'] = $this->params['form']['aalm_katchi_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['aalm_katchi_girls'] = $this->params['form']['aalm_katchi_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['aalm_1_boys'] = $this->params['form']['aalm_1_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['aalm_1_girls'] = $this->params['form']['aalm_1_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['aalm_2_boys'] = $this->params['form']['aalm_2_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['aalm_2_girls'] = $this->params['form']['aalm_2_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['aalm_3_boys'] = $this->params['form']['aalm_3_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['aalm_3_girls'] = $this->params['form']['aalm_3_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['aalm_4_boys'] = $this->params['form']['aalm_4_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['aalm_4_girls'] = $this->params['form']['aalm_4_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['aalm_5_boys'] = $this->params['form']['aalm_5_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['aalm_5_girls'] = $this->params['form']['aalm_5_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['aalm_6_boys'] = $this->params['form']['aalm_6_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['aalm_6_girls'] = $this->params['form']['aalm_6_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['aalm_7_boys'] = $this->params['form']['aalm_7_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['aalm_7_girls'] = $this->params['form']['aalm_7_girls'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['aalm_8_boys'] = $this->params['form']['aalm_8_boys'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['aalm_8_girls'] = $this->params['form']['aalm_8_girls'];
			
			
			
			
			$enrollmentAttendanceArray['EnrollmentAttendance']['teachers_sanctioned'] = $this->params['form']['teachers_sanctioned'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['teachers_working'] = $this->params['form']['teachers_working'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['teachers_present'] = $this->params['form']['teachers_present'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['teachers_onleave'] = $this->params['form']['teachers_onleave'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['teachers_onderailment'] = $this->params['form']['teachers_onderailment'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['teachers_oncontract'] = $this->params['form']['teachers_oncontract'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['teachers_wb'] = $this->params['form']['teachers_wb'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['teachers_nchd'] = $this->params['form']['teachers_nchd'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['teachers_unicef'] = $this->params['form']['teachers_unicef'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['teachers_smc'] = $this->params['form']['teachers_smc'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['teachers_anyother'] = $this->params['form']['teachers_anyother'];
			$enrollmentAttendanceArray['EnrollmentAttendance']['teachers_other'] = $this->params['form']['teachers_other'];
			
			
			
			$this->EnrollmentAttendance->save($enrollmentAttendanceArray);
			
			
			
			
			$y = 1;
			for($x=0;$x<30;$x++)
			{
				if(!empty($this->params['form']['staff'.($x+1).'_name']))
				{
					
					if(!($id == null))
					{
						$staffPrevious = $this->Staff->find('first',array('conditions'=>array('school_identification_id'=>$id,'staff_order'=>$y)));
						if(empty($staffPrevious))
						{
							$this->Staff->id = null;
						}
						else
						{
							$this->Staff->id = $staffPrevious['Staff']['id'];
						}
					}else
					{
						$this->Staff->id = null;
					}

					
					$staffDetailsArray['Staff']['staff_order'] = ($y);
					$staffDetailsArray['Staff']['school_identification_id'] = $scid_id;
					$staffDetailsArray['Staff']['staff_name'] = $this->params['form']['staff'.($x+1).'_name'];
					$staffDetailsArray['Staff']['staff_cnic'] = $this->params['form']['staff'.($x+1).'_cnic'];
					$staffDetailsArray['Staff']['staff_pnumber'] = $this->params['form']['staff'.($x+1).'_pnumber'];
					$y++;
					
					
					$this->Staff->save($staffDetailsArray);
				}
			}
			
			
			$y = 1;
			for($x=0;$x<30;$x++)
			{
				if(!($this->params['form']['name_teacher'.($x+1).'_att'] == null))
				{
					
					if(!($id == null))
					{
						$staffPrevious = $this->StaffAttendance->find('first',array('conditions'=>array('school_identification_id'=>$id,'teacher_order'=>$y)));
						if(empty($staffPrevious))
						{
							$this->StaffAttendance->id = null;
						}
						else
						{
							$this->StaffAttendance->id = $staffPrevious['StaffAttendance']['id'];
						}
					}else
					{
						$this->StaffAttendance->id = null;
					}
					
					$staffAttendanceDetailsArray['StaffAttendance']['teacher_order'] = ($y);
					$staffAttendanceDetailsArray['StaffAttendance']['school_identification_id'] = $scid_id;
					$staffAttendanceDetailsArray['StaffAttendance']['name_teacher_att'] = $this->params['form']['name_teacher'.($x+1).'_att'];
					$staffAttendanceDetailsArray['StaffAttendance']['m1_teacher_wd'] = $this->params['form']['m1_teacher'.($x+1).'_wd'];
					$staffAttendanceDetailsArray['StaffAttendance']['m1_teacher_pt'] = $this->params['form']['m1_teacher'.($x+1).'_pt'];
					$staffAttendanceDetailsArray['StaffAttendance']['m2_teacher_wd'] = $this->params['form']['m2_teacher'.($x+1).'_wd'];
					$staffAttendanceDetailsArray['StaffAttendance']['m2_teacher_pt'] = $this->params['form']['m2_teacher'.($x+1).'_pt'];
					$staffAttendanceDetailsArray['StaffAttendance']['m3_teacher_wd'] = $this->params['form']['m3_teacher'.($x+1).'_wd'];
					$staffAttendanceDetailsArray['StaffAttendance']['m3_teacher_pt'] = $this->params['form']['m3_teacher'.($x+1).'_pt'];

					$y++;
					
					
					
					$this->StaffAttendance->save($staffAttendanceDetailsArray);
				}
			}
			
			
			if(!($id == null))
			{
				$school_facility = $this->SchoolFacility->find('first',array('conditions'=>array('school_identification_id'=>$id)));
				$this->SchoolFacility->id = $school_facility['SchoolFacility']['id'];
			}else
			{
				$this->SchoolFacility->id = null;
			}
			
			
			$schoolFacilitiesDetailsArray = array();
			
			$schoolFacilitiesDetailsArray['SchoolFacility']['school_identification_id'] = $scid_id;
			$schoolFacilitiesDetailsArray['SchoolFacility']['toilets_available'] = $this->params['form']['toilets_available'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['no_of_toilets'] = $this->params['form']['no_of_toilets'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['toilet_cleanliness'] = $this->params['form']['toilet_cleanliness'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['toilet_closing_door'] = $this->params['form']['toilet_closing_door'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['water_available_in_toilet'] = $this->params['form']['water_available_in_toilet'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['toilet_drainage'] = $this->params['form']['toilet_drainage'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['water_available_in_school'] = $this->params['form']['water_available_in_school'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['water_source_type'] = $this->params['form']['water_source_type'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['water_drinkable'] = $this->params['form']['water_drinkable'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['water_accessible_to_children'] = $this->params['form']['water_accessible_to_children'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['water_for_all_purpose'] = $this->params['form']['water_for_all_purpose'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['school_has_electricity'] = $this->params['form']['school_has_electricity'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['electricity_wiring_installed'] = $this->params['form']['electricity_wiring_installed'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['electricity_on_right_now'] = $this->params['form']['electricity_on_right_now'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['electricity_meter_installed'] = $this->params['form']['electricity_meter_installed'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['electricity_available_for'] = $this->params['form']['electricity_available_for'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['broken_window_panes'] = $this->params['form']['broken_window_panes'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['cracks_in_wall'] = $this->params['form']['cracks_in_wall'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['garbage_lying_around'] = $this->params['form']['garbage_lying_around'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['leakage_in_ceiling'] = $this->params['form']['leakage_in_ceiling'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['cracks_in_ceiling'] = $this->params['form']['cracks_in_ceiling'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['classroom_ventilated'] = $this->params['form']['classroom_ventilated'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['light_availability'] = $this->params['form']['light_availability'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['temperature_reasonably_bearable'] = $this->params['form']['temperature_reasonably_bearable'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['children_seated_comfortably'] = $this->params['form']['children_seated_comfortably'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['time_table_available'] = $this->params['form']['time_table_available'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['student_achievement_info'] = $this->params['form']['student_achievement_info'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['boundary_wall'] = $this->params['form']['boundary_wall'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['gate_installed'] = $this->params['form']['gate_installed'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['children_playing_space'] = $this->params['form']['children_playing_space'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['plantation_in_school'] = $this->params['form']['plantation_in_school'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['hazards_around'] = $this->params['form']['hazards_around'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['regular_assembly'] = $this->params['form']['regular_assembly'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['extracurricular_activity_lastquarter'] = $this->params['form']['extracurricular_activity_lastquarter'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['extra_curricular_activity1'] = $this->params['form']['extra_curricular_activity1'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['extra_curricular_activity2'] = $this->params['form']['extra_curricular_activity2'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['extra_curricular_activity3'] = $this->params['form']['extra_curricular_activity3'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['extra_curricular_activity4'] = $this->params['form']['extra_curricular_activity4'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['number_of_desks_for_children'] = $this->params['form']['number_of_desks_for_children'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['blackboard_well_painted'] = $this->params['form']['blackboard_well_painted'];
			$schoolFacilitiesDetailsArray['SchoolFacility']['storage_for_school_records'] = $this->params['form']['storage_for_school_records'];
			
			
			$this->SchoolFacility->save($schoolFacilitiesDetailsArray);
			
			
			if(!($id == null))
			{
				$school_mc = $this->SchoolManagementCommitee->find('first',array('conditions'=>array('school_identification_id'=>$id)));
				$this->SchoolManagementCommitee->id = $school_mc['SchoolManagementCommitee']['id'];
			}else
			{
				$this->SchoolManagementCommitee->id = null;
			}
			
			
			$schoolManagementCommiteeDetailsArray = array();
			
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['school_identification_id'] = $scid_id;
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['has_notified_smc'] = $this->params['form']['has_notified_smc'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['notification_date'] = $this->params['form']['smc_notification_date'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['smc_members_male'] = $this->params['form']['smc_members_male'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['smc_members_female'] = $this->params['form']['smc_members_female'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['smc_chairperson_name'] = $this->params['form']['smc_chairperson_name'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['smc_chairperson_name'] = $this->params['form']['smc_chairperson_name'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['smc_chairperson_cnic'] = $this->params['form']['smc_chairperson_cnic'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['smc_chairperson_phone'] = $this->params['form']['smc_chairperson_phone'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['smc_relative1_children_name'] = $this->params['form']['smc_relative1_children_name'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['smc_relative1_children_class'] = $this->params['form']['smc_relative1_children_class'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['smc_relative1_children_grnumber'] = $this->params['form']['smc_relative1_children_grnumber'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['smc_relative1_children_relationship'] = $this->params['form']['smc_relative1_children_relationship'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['smc_relative2_children_name'] = $this->params['form']['smc_relative2_children_name'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['smc_relative2_children_class'] = $this->params['form']['smc_relative2_children_class'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['smc_relative2_children_grnumber'] = $this->params['form']['smc_relative2_children_grnumber'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['smc_relative2_children_relationship'] = $this->params['form']['smc_relative2_children_relationship'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['funding_recieved_this_year'] = $this->params['form']['funding_recieved_this_year'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['funding_recieved_last_year'] = $this->params['form']['funding_recieved_last_year'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['smc_bank_branch'] = $this->params['form']['smc_bank_branch'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['smc_account_title'] = $this->params['form']['smc_account_title'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['smc_account_number'] = $this->params['form']['smc_account_number'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['benefits_this_budget1'] = $this->params['form']['benefits_this_budget1'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['benefits_this_budget2'] = $this->params['form']['benefits_this_budget2'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['benefits_this_budget3'] = $this->params['form']['benefits_this_budget3'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['benefits_last_budget1'] = $this->params['form']['benefits_last_budget1'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['benefits_last_budget2'] = $this->params['form']['benefits_last_budget2'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['benefits_last_budget3'] = $this->params['form']['benefits_last_budget3'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['smc_visits_this_year'] = $this->params['form']['smc_visits_this_year'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['smc_visits_last_year'] = $this->params['form']['smc_visits_last_year'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['community_contribution_to_school'] = $this->params['form']['community_contribution_to_school'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['community_contribution_to_school1'] = $this->params['form']['community_contribution_to_school1'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['community_contribution_to_school2'] = $this->params['form']['community_contribution_to_school2'];
			$schoolManagementCommiteeDetailsArray['SchoolManagementCommitee']['community_contribution_to_school3'] = $this->params['form']['community_contribution_to_school3'];
			
			
			
			$this->SchoolManagementCommitee->save($schoolManagementCommiteeDetailsArray);
			
			
			$this->redirect('../home/cluster_details/'.($this->params['form']['cluster_id']));
			
			
			
		}
		
		
		
		
		
		
	}
	//the functions for the teachers entry and viewing ends here
	
	
	function view_teachers()
	{
		// similar to findAll(), but fetches paged results    
		$data = $this->paginate('Teacher');    
		$this->set('data', $data);
		//debug($data);
		//$teachers = $this->Teacher->find('all');
		//$this->set('teachers',$teachers);
		
		
		
		$regions = $this->Region->find('all');
		$this->set('districts',$regions);
		
	}
	
	function add_teacher()
	{
		$regions = $this->Region->find('all');
		$this->set('regions',$regions);
	}
	
	function edit_teacher($id = null)
	{
		if(!($id == null))
		{
			$regions = $this->Region->find('all');
			$this->set('regions',$regions);
			
			
			$teacher = $this->Teacher->find('first',array('conditions'=>array('id'=>$id)));
			$this->set('teacher',$teacher);
			
			$teacher_qualifications = $this->TeacherQualification->find('all',array('conditions'=>array('teacher_id'=>$id,'qualification_type'=>0)));
			$this->set('teacher_qualifications',$teacher_qualifications);
			//debug($teacher_qualifications);
			
			$teacher_certifications = $this->TeacherQualification->find('all',array('conditions'=>array('teacher_id'=>$id,'qualification_type'=>1)));
			$this->set('teacher_certifications',$teacher_certifications);
			
			$teacher_trainings = $this->TeacherQualification->find('all',array('conditions'=>array('teacher_id'=>$id,'qualification_type'=>2)));
			$this->set('teacher_trainings',$teacher_trainings);
			
			$teacher_experiences = $this->TeacherExperience->find('all',array('conditions'=>array('teacher_id'=>$id)));
			$this->set('teacher_experiences',$teacher_experiences);
			
			$teacher_challenges = $this->TeacherAchievement->find('all',array('conditions'=>array('teacher_id'=>$id,'is_contribution'=>0)));
			$this->set('teacher_challenges',$teacher_challenges);
			
			
			$teacher_contributions = $this->TeacherAchievement->find('all',array('conditions'=>array('teacher_id'=>$id,'is_contribution'=>1)));
			$this->set('teacher_contributions',$teacher_contributions);
			
			$teacher_it_skills = $this->TeacherSkill->find('all',array('conditions'=>array('teacher_id'=>$id,'skill_type'=>0)));
			$this->set('teacher_it_skills',$teacher_it_skills);
			
			
			
			$teacher_other_skills = $this->TeacherSkill->find('all',array('conditions'=>array('teacher_id'=>$id,'skill_type'=>1)));
			$this->set('teacher_other_skills',$teacher_other_skills);
			
			
			$teacher_interests = $this->TeacherInterest->find('all',array('conditions'=>array('teacher_id'=>$id)));
			$this->set('teacher_interests',$teacher_interests);
			
			
			
		}
		else
		{
			$this->redirect('../home/view_teacers');
		}
	}
	
	function submit_teacher_details($id = null)
	{
		//debug($this->params['form']);
		
		
		
		if(!empty($this->params['form']))
		{
			$teacherDetailsArray = array();
			$this->Teacher->id = $id;
			
			$teacherDetailsArray['Teacher']['teacher_name'] = $this->params['form']['teacher_name'];
			$teacherDetailsArray['Teacher']['bps'] = $this->params['form']['bps'];
			$teacherDetailsArray['Teacher']['teacher_cnic'] = $this->params['form']['teacher_cnic'];
			$teacherDetailsArray['Teacher']['gender'] = $this->params['form']['gender'];
			$teacherDetailsArray['Teacher']['domicile'] = $this->params['form']['domicile'];
			
			$datetime = date('Y-m-d', strtotime($this->params['form']['date_of_birth']));
			$teacherDetailsArray['Teacher']['date_of_birth'] = $datetime;
			$teacherDetailsArray['Teacher']['personnel_no'] = $this->params['form']['personnel_no'];
			
			$datetime = date('Y-m-d', strtotime($this->params['form']['dateofjoining']));
			$teacherDetailsArray['Teacher']['dateofjoining'] = $datetime;
			$teacherDetailsArray['Teacher']['office_address'] = $this->params['form']['office_address'];
			$teacherDetailsArray['Teacher']['domicile'] = $this->params['form']['domicile'];
			$teacherDetailsArray['Teacher']['teacher_phone'] = $this->params['form']['teacher_phone'];
			$teacherDetailsArray['Teacher']['teacher_mobile'] = $this->params['form']['teacher_mobile'];
			$teacherDetailsArray['Teacher']['teacher_email'] = $this->params['form']['teacher_email'];
			
			$this->Teacher->save($teacherDetailsArray);
			
			$tid = $this->Teacher->id;
			
			//$datetime = date('Y-m-d', strtotime($this->params['form']['']));
			
			$teacerQualificationDetailsArray = array();
			
			//for order of qualifications certifications and trainings
			$y = 1;
			$x = 1;
			$teacherqualifications = $this->params['form']['qualification_name'];
			//debug($teacherqualifications);
			$teacherqualificationto = $this->params['form']['qualification_to'];
			$teacherqualificationfrom = $this->params['form']['qualification_from'];
			$teacherqualificationinstitute = $this->params['form']['qualification_institute'];
			$qualification_type = $this->params['form']['qualification_type'];
			
			if(!empty($teacherqualifications))
			{
				foreach($teacherqualifications as $teacherqualification)
				{
					if(!empty($teacherqualification))
					{
						if(isset($this->params['form']['qualification_id'.$x])) 
						{
						$this->TeacherQualification->id = $this->params['form']['qualification_id'.$x];
						}
						else
						{
							$this->TeacherQualification->id = null;
						}
						
						$teacerQualificationDetailsArray['TeacherQualification']['teacher_id'] = $tid;
						$teacerQualificationDetailsArray['TeacherQualification']['qualification_order'] = $y;
						$teacerQualificationDetailsArray['TeacherQualification']['qualification_type'] = $qualification_type[$x];
						
						$datetime = date('Y-m-d', strtotime($teacherqualificationto[$x]));
						$teacerQualificationDetailsArray['TeacherQualification']['qualification_from'] = $datetime;
						
						$datetime = date('Y-m-d', strtotime($teacherqualificationfrom[$x]));
						$teacerQualificationDetailsArray['TeacherQualification']['qualification_to'] = $datetime;
						
						$teacerQualificationDetailsArray['TeacherQualification']['qualification_institute'] = $teacherqualificationinstitute[$x];
						$teacerQualificationDetailsArray['TeacherQualification']['qualification_name'] = $teacherqualification;
						//debug($teacerQualificationDetailsArray);
						$this->TeacherQualification->save($teacerQualificationDetailsArray);
						$y++;
					}
					$x++;
				}
			}
			//retrieving and saving teacher certification
			$y = 1;
			$x = 1;
			$teachercertifications = $this->params['form']['certification_name'];
			//debug($teachercertifications);
			$teachercertificationto = $this->params['form']['certification_to'];
			$teachercertificationfrom = $this->params['form']['certification_from'];
			$teachercertificationinstitute = $this->params['form']['certification_institute'];
			$certification_type = $this->params['form']['certification_type'];
			
			if(!empty($teachercertifications))
			{
				foreach($teachercertifications as $teachercertification)
				{
					if(!empty($teachercertification))
					{
						$teacerCertificationDetailsArray = array();
						
						if(isset($this->params['form']['certification_id'.$x]))
						{
							$this->TeacherQualification->id = $this->params['form']['certification_id'.$x];
						}
						else
						{
							$this->TeacherQualification->id = null;
						}
						
						
						$teacerCertificationDetailsArray['TeacherQualification']['teacher_id'] = $tid;
						$teacerCertificationDetailsArray['TeacherQualification']['qualification_order'] = $y;
						$teacerCertificationDetailsArray['TeacherQualification']['qualification_type'] = $certification_type[$x];
						
						$datetime = date('Y-m-d', strtotime($teachercertificationto[$x]));
						$teacerCertificationDetailsArray['TeacherQualification']['qualification_from'] = $datetime;
						
						$datetime = date('Y-m-d', strtotime($teachercertificationfrom[$x]));
						$teacerCertificationDetailsArray['TeacherQualification']['qualification_to'] = $datetime;
						
						$teacerCertificationDetailsArray['TeacherQualification']['qualification_institute'] = $teachercertificationinstitute[$x];
						$teacerCertificationDetailsArray['TeacherQualification']['qualification_name'] = $teachercertification;
						//debug($teacerCertificationDetailsArray);
						$this->TeacherQualification->save($teacerCertificationDetailsArray);
						$y++;
					}
					$x++;
				}
			}
			
			
			//retrieving and saving teacher training
			$y = 1;
			$x = 1;
			$teachertrainings = $this->params['form']['training_name'];
			//debug($teachertrainings);
			$teachertrainingto = $this->params['form']['training_to'];
			$teachertrainingfrom = $this->params['form']['training_from'];
			$teachertraininginstitute = $this->params['form']['training_institute'];
			$training_type = $this->params['form']['training_type'];
			
			if(!empty($teachertrainings))
			{
				foreach($teachertrainings as $teachertraining)
				{
					if(!empty($teachertraining))
					{
						$teacerTrainingDetailsArray = array();
						
						if(isset($this->params['form']['training_id'.$x]))
						{
							$this->TeacherQualification->id = $this->params['form']['training_id'.$x];
						}
						else
						{
							$this->TeacherQualification->id = null;
						}

						$teacerTrainingDetailsArray['TeacherQualification']['teacher_id'] = $tid;
						$teacerTrainingDetailsArray['TeacherQualification']['qualification_order'] = $y;
						$teacerTrainingDetailsArray['TeacherQualification']['qualification_type'] = $training_type[$x];
						
						$datetime = date('Y-m-d', strtotime($teachertrainingto[$x]));
						$teacerTrainingDetailsArray['TeacherQualification']['qualification_from'] = $datetime;
						
						$datetime = date('Y-m-d', strtotime($teachertrainingfrom[$x]));
						$teacerTrainingDetailsArray['TeacherQualification']['qualification_to'] = $datetime;
						
						$teacerTrainingDetailsArray['TeacherQualification']['qualification_institute'] = $teachertraininginstitute[$x];
						$teacerTrainingDetailsArray['TeacherQualification']['qualification_name'] = $teachertraining;
						//debug($teacerCertificationDetailsArray);
						$this->TeacherQualification->save($teacerTrainingDetailsArray);
						$y++;
					}
					$x++;
				}
			
			
			
			
			
			
			}
			
			$y = 1;
			$x = 1;
			$teacher_experience_designations = $this->params['form']['experience_designation'];
			
			
			
			if(!empty($teacher_experience_designations))
			{
				$teacher_experience_from = $this->params['form']['experience_from'];
				$teacher_experience_to = $this->params['form']['experience_to'];
				$teacher_experience_posting = $this->params['form']['experience_posting'];
				$teacher_experience_job_nature = $this->params['form']['experience_job_nature'];
				foreach($teacher_experience_designations as $teacher_experience_designation)
				{
					if(!empty($teacher_experience_designation))
					{
						$teacherExperienceDetailsArray = array();
						
						if(isset($this->params['form']['experience_id'.$x]))
						{
							$this->TeacherExperience->id = $this->params['form']['experience_id'.$x];
						}
						else
						{
							$this->TeacherExperience->id = null;
						}
						$datetime = date('Y-m-d', strtotime($teacher_experience_to[$x]));
						$teacherExperienceDetailsArray['TeacherExperience']['experience_to'] = $datetime;
						
						$datetime = date('Y-m-d', strtotime($teacher_experience_from[$x]));
						$teacherExperienceDetailsArray['TeacherExperience']['experience_from'] = $datetime;
						$teacherExperienceDetailsArray['TeacherExperience']['experience_order'] = $y;
						$teacherExperienceDetailsArray['TeacherExperience']['teacher_id'] = $tid;
						$teacherExperienceDetailsArray['TeacherExperience']['experience_designation'] = $teacher_experience_designation;
						$teacherExperienceDetailsArray['TeacherExperience']['experience_posting'] = $teacher_experience_posting[$x];
						$teacherExperienceDetailsArray['TeacherExperience']['experience_job_nature'] = $teacher_experience_job_nature[$x];
						
						
						$this->TeacherExperience->save($teacherExperienceDetailsArray);
						
						$y++;
					}
					$x++;
				}
				
				$teacherITskills = $this->params['form']['it_skills'];
				
				for($y = 1;$y < 8; $y++)
				{
					
					if (isset($this->params['form']['it_skill_id'.$y]))
					{
						if(!($teacherITskills[$y]))
						{
							$this->TeacherSkill->id = $this->params['form']['it_skill_id'.$y];
							$this->TeacherSkill->delete();
						}	
					}
				}
				if(!empty($teacherITskills))
				{
					
					
					foreach($teacherITskills as $teacherITskill)
					{
						if($teacherITskill)
						{
							
							if (isset($this->params['form']['it_skill_id'.$teacherITskill]))
							{
								$this->TeacherSkill->id = $this->params['form']['it_skill_id'.$teacherITskill];
							}
							else
							{
								$this->TeacherSkill->id = null;
							}
							//debug($teacherITskill);
							$teacherSkillDetailsArray = array();
							
							$teacherSkillDetailsArray['TeacherSkill']['teacher_id'] = $tid;
							$teacherSkillDetailsArray['TeacherSkill']['skill_id'] = $teacherITskill;
							$teacherSkillDetailsArray['TeacherSkill']['skill_type'] = 0;
							
							$this->TeacherSkill->save($teacherSkillDetailsArray);
							
						}
					}
				}
				
				$teacherOtherskills = $this->params['form']['other_skills'];
				for($y = 8;$y < 11; $y++)
				{
					
					if (isset($this->params['form']['other_skill_id'.$y]))
					{
						if(!($teacherOtherskills[$y]))
						{
							$this->TeacherSkill->id = $this->params['form']['other_skill_id'.$y];
							$this->TeacherSkill->delete();
						}	
					}
				}
				
				if(!empty($teacherOtherskills))
				{
					
					
					foreach($teacherOtherskills as $teacherOtherskill)
					{
						if($teacherOtherskill)
						{
							if (isset($this->params['form']['other_skill_id'.$teacherOtherskill]))
							{
								$this->TeacherSkill->id = $this->params['form']['other_skill_id'.$teacherOtherskill];
							}
							else
							{
								$this->TeacherSkill->id = null;
							}
							
							//debug($teacherOtherskill);
							$teacherSkillDetailsArray = array();
							
							$teacherSkillDetailsArray['TeacherSkill']['teacher_id'] = $tid;
							$teacherSkillDetailsArray['TeacherSkill']['skill_id'] = $teacherOtherskill;
							$teacherSkillDetailsArray['TeacherSkill']['skill_type'] = 1;
							
							$this->TeacherSkill->save($teacherSkillDetailsArray);
						}
					}
				}
				
				$teacherInterests = $this->params['form']['interest'];
				
				for($y = 1;$y < 11;$y++)
				{
					if(isset($this->params['form']['interest_id'.$y]))
						{
							
							if(!($teacherInterests[$y]))
							{
								$this->TeacherInterest->id = $this->params['form']['interest_id'.$y];
								$this->TeacherInterest->delete();
							}
						}
				}
				
				if(!empty($teacherInterests))
				{
					$y = 1;
					
					foreach($teacherInterests as $teacherInterest)
					{
						if($teacherInterest)
						{
							if(isset($this->params['form']['interest_id'.$teacherInterest]))
							{
								$this->TeacherInterest->id = $this->params['form']['interest_id'.$teacherInterest];
							}
							else
							{
								$this->TeacherInterest->id = null;
							}
							//debug($teacherOtherskill);
							$teacherInterestDetailsArray = array();
							
							$teacherInterestDetailsArray['TeacherInterest']['teacher_id'] = $tid;
							$teacherInterestDetailsArray['TeacherInterest']['interest_id'] = $teacherInterest;
							$teacherInterestDetailsArray['TeacherInterest']['interest_order'] = $y;
							
							$this->TeacherInterest->save($teacherInterestDetailsArray);
							$y++;
						}
					}
				}
				
				
				$teacherAchievements = $this->params['form']['achievement_issue'];
				
				if(!empty($teacherAchievements))
				{
					$achievement_issue = $this->params['form']['achievement_issue'];
					$achievement_action = $this->params['form']['achievement_action'];
					$achievement_output = $this->params['form']['achievement_output'];
					$x = 1;
					
					foreach($teacherAchievements as $teacherAchievement)
					{
						if(!empty($teacherAchievement))
						{
							if(isset($this->params['form']['achievement_id'.$x]))
							{
								$this->TeacherAchievement->id = $this->params['form']['achievement_id'.$x];
							}
							else
							{
								$this->TeacherAchievement->id = null;
							}
							$teacherAchievementDetailsArray = array();
							
							$teacherAchievementDetailsArray['TeacherAchievement']['teacher_id'] = $tid;
							$teacherAchievementDetailsArray['TeacherAchievement']['achievement_issue'] = $achievement_issue[$x];
							$teacherAchievementDetailsArray['TeacherAchievement']['achievement_action'] = $achievement_action[$x];
							$teacherAchievementDetailsArray['TeacherAchievement']['achievement_output'] = $achievement_output[$x];
							$teacherAchievementDetailsArray['TeacherAchievement']['is_contribution'] = 0;
							
							$this->TeacherAchievement->save($teacherAchievementDetailsArray);
						}
						
						$x++;
						
					}
				}
				
				$teacherContributions = $this->params['form']['contribution_title'];
				
				if(!empty($teacherAchievements))
				{
					$contribution_title = $this->params['form']['contribution_title'];
					$contribution_organization = $this->params['form']['contribution_organization'];
					$contribution_year = $this->params['form']['contribution_year'];
					$x = 1;
					
					foreach($teacherContributions as $teacherContribution)
					{
						if(!empty($teacherContribution))
						{
							if(isset($this->params['form']['contribution_id'.$x]))
							{
								$this->TeacherAchievement->id = $this->params['form']['contribution_id'.$x];
							}
							else
							{
								$this->TeacherAchievement->id = null;
							}
							$teacherAchievementDetailsArray = array();
							
							$teacherContributionDetailsArray['TeacherAchievement']['teacher_id'] = $tid;
							$teacherContributionDetailsArray['TeacherAchievement']['contribution_title'] = $contribution_title[$x];
							$teacherContributionDetailsArray['TeacherAchievement']['contribution_organization'] = $contribution_organization[$x];
							
							$datetime = date('Y-m-d', strtotime($contribution_year[$x]));
							$teacherContributionDetailsArray['TeacherAchievement']['contribution_year'] = $datetime;
							$teacherContributionDetailsArray['TeacherAchievement']['is_contribution'] = 1;
							
							$this->TeacherAchievement->save($teacherContributionDetailsArray);
						}
						
						$x++;
						
					}
				}
				
				
				
				
			}
			$this->redirect('../home/view_teachers/s:successfully redirected');
		}
		else
		{
			$this->redirect('../home/view_teachers/s:some error occured');
		}
	}
	
	
	function teacher_details($id = null)
	{
		if(!($id == null))
		{
			$teacher = $this->Teacher->find('first',array('conditions'=>array('id'=>$id)));
			$this->set('teacher',$teacher);
			
			$district = $this->Region->find('first',array('conditions'=>array('id'=>($teacher['Teacher']['district_code']))));
			$this->set('district',$district);
			
			$teacher_experiences = $this->TeacherExperience->find('all',array('conditions'=>array('teacher_id'=>$id)));
			$this->set('teacher_experiences',$teacher_experiences);
			
			$teacher_qualifications = $this->TeacherQualification->find('all',array('conditions'=>array('teacher_id'=>$id,'qualification_type'=>0)));
			$this->set('teacher_qualifications',$teacher_qualifications);
			
		}
		else
		{
			$this->redirect('../home/index');
		}
	}
	
	//the functions for the teachers entry and viewing ends here
	
	//other Functions
	
	function ratio($a, $b) 
	{
		$_a = $a;
		$_b = $b;

		while ($_b != 0) {

			$remainder = $_a % $_b;
			$_a = $_b;
			$_b = $remainder;   
		}

		$gcd = abs($_a);

		return ($a / $gcd)  . ':' . ($b / $gcd);
	}
	
	
	
	function ratios_report($download = null)
	{
		
		if(($download == 1))
		{
		$this->RequestHandler->setContent('xls', 'application/vnd.ms-excel'); 
				$this->layout = "xls";
				
				if(isset($this->params["url"]["start_day"]))
			{
				$startDate = $this->params["url"]["start_year"]."-". $this->params["url"]["start_month"]."-". $this->params["url"]["start_day"]." 00:00:00";
				$endDate = $this->params["url"]["end_year"]."-". $this->params["url"]["end_month"]."-". $this->params["url"]["end_day"]." 59:59:59";			
				
				$this->Set("startDate",$this->params["url"]["start_day"]);
				$this->Set("startYear",$this->params["url"]["start_year"]);
				$this->Set("startMonth",$this->params["url"]["start_month"]);
				
				$this->Set("endDate",$this->params["url"]["end_day"]);
				$this->Set("endYear",$this->params["url"]["end_year"]);
				$this->Set("endMonth",$this->params["url"]["end_month"]);
			}
			else
			{
				$startDate = date("Y-m")."-1 00:00:00";
				$endDate = date("Y-m")."-31 24:60:60";
				
				$this->Set("startDate","1");
				$this->Set("startYear",date("Y"));
				$this->Set("startMonth",date("m"));
				
				$this->Set("endDate","31");
				$this->Set("endYear",date("Y"));
				$this->Set("endMonth",date("m"));
			}
			
			$this->set("filename","Ratios_report");
		}
		
		
		//School Ratio Report
		$schools = $this->School->find('all');
		//debug(count($schools));
		foreach ($schools as &$school)
		{
			$this_cluster = $this->Cluster->find('first',array('conditions'=>array('id'=>($school['School']['clusterid']))));
			
			$school['cluster_name'] = $this_cluster['Cluster']['name'];
			$school['cluster_id'] = $this_cluster['Cluster']['id'];
			
			$this_uc = $this->Uc->find('first',array('conditions'=>array('id'=>($this_cluster['Cluster']['uc_id']))));
			
			$school['uc_name'] = $this_uc['Uc']['name'];
			$school['uc_id'] = $this_uc['Uc']['id'];
			
			$this_taluka = $this->Taluka->find('first',array('conditions'=>array('id'=>($this_uc['Uc']['taluka_id']))));
			
			$school['taluka_name'] = $this_taluka['Taluka']['name'];
			$school['taluka_id'] = $this_taluka['Taluka']['id'];
			
			
			$this_region = $this->Region->find('first',array('conditions'=>array('id'=>($this_taluka['Taluka']['district_id']))));
			
			
			$school['district_name'] = $this_region['Region']['name'];
			$school['district_id'] = $this_region['Region']['id'];
			
			$this_baseline = $this->SchoolIdentification->find('first',array('conditions'=>array('semis_code'=>$school['School']['code'])));
			if(!empty($this_baseline))
			{
				$this_basics = $this->BasicInformation->find('first',array('conditions'=>array('school_identification_id'=>($this_baseline['SchoolIdentification']['id']))));
				
			}
			
			if(!empty($this_basics))
			{
				$school['classrooms'] = (($this_basics['BasicInformation']['classrooms'])+($this_basics['BasicInformation']['office'])+($this_basics['BasicInformation']['store'])+($this_basics['BasicInformation']['other']));
			}
			
		}
		
		$this->set('schools',$schools);
		}
		
		function gps_distances($download = null)
		{
			
		if(($download == 1))
		{
			$this->RequestHandler->setContent('xls', 'application/vnd.ms-excel'); 
					$this->layout = "xls";
					
					if(isset($this->params["url"]["start_day"]))
				{
					$startDate = $this->params["url"]["start_year"]."-". $this->params["url"]["start_month"]."-". $this->params["url"]["start_day"]." 00:00:00";
					$endDate = $this->params["url"]["end_year"]."-". $this->params["url"]["end_month"]."-". $this->params["url"]["end_day"]." 59:59:59";			
					
					$this->Set("startDate",$this->params["url"]["start_day"]);
					$this->Set("startYear",$this->params["url"]["start_year"]);
					$this->Set("startMonth",$this->params["url"]["start_month"]);
					
					$this->Set("endDate",$this->params["url"]["end_day"]);
					$this->Set("endYear",$this->params["url"]["end_year"]);
					$this->Set("endMonth",$this->params["url"]["end_month"]);
				}
				else
				{
					$startDate = date("Y-m")."-1 00:00:00";
					$endDate = date("Y-m")."-31 24:60:60";
					
					$this->Set("startDate","1");
					$this->Set("startYear",date("Y"));
					$this->Set("startMonth",date("m"));
					
					$this->Set("endDate","31");
					$this->Set("endYear",date("Y"));
					$this->Set("endMonth",date("m"));
				}
				
				$this->set("filename","GPS_Distances");
		}
			
			
			//Report for distances from Guide School
			
			$guide_schools = $this->School->find('all',array('conditions'=>array('guide_school'=>1)));
			
			foreach($guide_schools as &$guide_school)
			{
				//get cluster name for the school
				$this_guide_cluster = $this->Cluster->find('first',array('conditions'=>array('id'=>($guide_school['School']['clusterid']))));
				$guide_school['cluster_name'] = $this_guide_cluster['Cluster']['name'];
				
				//get uc name for the school
				$this_guide_uc = $this->Uc->find('first',array('conditions'=>array('id'=>($this_guide_cluster['Cluster']['uc_id']))));
				$guide_school['uc_name'] = $this_guide_uc['Uc']['name'];
				
				//get taluka name for the school
				$this_guide_taluka = $this->Taluka->find('first',array('conditions'=>array('id'=>($this_guide_uc['Uc']['taluka_id']))));
				$guide_school['taluka_name'] = $this_guide_taluka['Taluka']['name'];
				
				//get district name for the school 
				$this_guide_region = $this->Region->find('first',array('conditions'=>array('id'=>($this_guide_taluka['Taluka']['district_id']))));
				$guide_school['district_name'] = $this_guide_region['Region']['name'];
				
				
				$non_guide_schools = $this->School->find('all',array('conditions'=>array('clusterid'=>($guide_school['School']['clusterid']),'guide_school'=>0)));
				foreach($non_guide_schools as $non_guide_school)
				{
					$guide_school['NonGuide'][] = $non_guide_school['School'];
				}
			}
			//debug($guide_schools[0]);
			$this->set('guide_schools',$guide_schools);
		
		}
		
		function distance_calculator()
		{
			
		}
		
		function view_gps_distances($distance_from = null ,$distance_to = null)
		{
			
			$this->layout = 'empty';
			if(!($distance_from == null) && !($distance_to == null))
			{
				if(!(count($distance_from) < 1) && !(count($distance_to) < 1))
				{
					$schools_from = $this->School->find('first',array('conditions'=>array('code'=>$distance_from)));
					//debug($schools_from);
					
					$distance_to_array = explode(',',$distance_to);
					
					$schools_to = $this->School->find('all',array('conditions'=>array('code'=>$distance_to_array)));
					//debug($distance_to);
					
					if(!(count($schools_from ) < 1))
					{
						if(!(count($schools_to ) < 1))
						{
							$this->set('schools_to',$schools_to);
							$this->set('schools_from',$schools_from);
							$this->set('error',false);
						}else
						{
							$this->set('error',true);
							$this->set('error_message','No Schools for the following Semis Code(s) were Found'.$distance_to);
						}
					}else
					{
						$this->set('error',true);
						$this->set('error_message','School for the following semis code was not found: '.$distance_from);	
					}
					//debug($distance_to);
					//debug($distance_from);
				}else
				{
					$this->set('error',true);
					$this->set('error_message','You Must Provide The Values For Both The Schools To Calculate The Distance');
				}
			}else
			{
				$this->set('error',true);
				$this->set('error_message','You Must Provide The Values For Both The Schools To Calculate The Distance');
			}
		}
		
		
		//functions written for Classroom Observation Forms
		function add_classroom_observation()
		{
			$regions = $this->Region->find('all');
			$this->set('regions',$regions);
		}
		
		function submit_classroom_observation($id = null)
		{
			
			//debug($this->params['form']);
			
			$this->ClassroomObservation->id = $id;
			
			$classroomObservationDetailsArray = array();
			
			
			if(isset($this->params['form']['district_id']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['district_id'] = $this->params['form']['district_id'];
			}
			
			if(isset($this->params['form']['cluster_id']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['cluster_id'] = $this->params['form']['cluster_id'];
			}
			
			if(isset($this->params['form']['school_name']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['school_name'] = $this->params['form']['school_name'];
			}
			
			if(isset($this->params['form']['round']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['round'] = $this->params['form']['round'];
			}
			
			if(isset($this->params['form']['semis_code']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['semis_code'] = $this->params['form']['semis_code'];
			}
			
			if(isset($this->params['form']['teachers_name']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['teachers_name'] = $this->params['form']['teachers_name'];
			}
			
			if(isset($this->params['form']['grade']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['grade'] = $this->params['form']['grade'];
			}
			
			if(isset($this->params['form']['subject']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['subject'] = $this->params['form']['subject'];
			}
			
			if(isset($this->params['form']['students_present']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['students_present'] = $this->params['form']['students_present'];
			}
			
			if(isset($this->params['form']['lesson_introduced_a']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['lesson_introduced_a'] = $this->params['form']['lesson_introduced_a'];
			}else
			{
				$classroomObservationDetailsArray['ClassroomObservation']['lesson_introduced_a'] = 0;
			}
			
			if(isset($this->params['form']['lesson_introduced_b']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['lesson_introduced_b'] = $this->params['form']['lesson_introduced_b'];
			}else
			{
				$classroomObservationDetailsArray['ClassroomObservation']['lesson_introduced_b'] = 0;
			}
			
			if(isset($this->params['form']['lesson_introduced_c']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['lesson_introduced_c'] = $this->params['form']['lesson_introduced_c'];
			}else
			{
				$classroomObservationDetailsArray['ClassroomObservation']['lesson_introduced_c'] = 0;
			}
			
			if(isset($this->params['form']['lesson_introduced_d']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['lesson_introduced_d'] = $this->params['form']['lesson_introduced_d'];
			}else
			{
				$classroomObservationDetailsArray['ClassroomObservation']['lesson_introduced_d'] = 0;
			}
			
			if(isset($this->params['form']['lesson_introduced_e']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['lesson_introduced_e'] = $this->params['form']['lesson_introduced_e'];
			}else
			{
				$classroomObservationDetailsArray['ClassroomObservation']['lesson_introduced_e'] = 0;
			}
			
			if(isset($this->params['form']['two_questions']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['two_questions'] = $this->params['form']['two_questions'];
			}
			
			if(isset($this->params['form']['open_ended_questions']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['open_ended_questions'] = $this->params['form']['open_ended_questions'];
			}
			
			if(isset($this->params['form']['response_time']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['response_time'] = $this->params['form']['response_time'];
			}
			
			if(isset($this->params['form']['understanding_topic']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['understanding_topic'] = $this->params['form']['understanding_topic'];
			}
			
			if(isset($this->params['form']['explanatory_comments']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['explanatory_comments'] = $this->params['form']['explanatory_comments'];
			}
			
			if(isset($this->params['form']['assessment_task']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['assessment_task'] = $this->params['form']['assessment_task'];
			}
			
			if(isset($this->params['form']['work_assessment_a']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['work_assessment_a'] = $this->params['form']['work_assessment_a'];
			}
			
			if(isset($this->params['form']['work_assessment_b']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['work_assessment_b'] = $this->params['form']['work_assessment_b'];
			}
			
			if(isset($this->params['form']['work_assessment_c']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['work_assessment_c'] = $this->params['form']['work_assessment_c'];
			}
			
			if(isset($this->params['form']['beyond_book']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['beyond_book'] = $this->params['form']['beyond_book'];
			}
			
			if(isset($this->params['form']['personal_experience']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['personal_experience'] = $this->params['form']['personal_experience'];
			}
			
			if(isset($this->params['form']['student_focus']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['student_focus'] = $this->params['form']['student_focus'];
			}
			
			if(isset($this->params['form']['two_questions_2']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['two_questions_2'] = $this->params['form']['two_questions_2'];
			}
			
			if(isset($this->params['form']['open_ended_questions_2']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['open_ended_questions_2'] = $this->params['form']['open_ended_questions_2'];
			}
			
			if(isset($this->params['form']['response_time_2']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['response_time_2'] = $this->params['form']['response_time_2'];
			}
			
			if(isset($this->params['form']['understanding_topic_2']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['understanding_topic_2'] = $this->params['form']['understanding_topic_2'];
			}
			
			if(isset($this->params['form']['explanatory_comments_2']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['explanatory_comments_2'] = $this->params['form']['explanatory_comments_2'];
			}
			
			if(isset($this->params['form']['assessment_task_2']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['assessment_task_2'] = $this->params['form']['assessment_task_2'];
			}
			
			if(isset($this->params['form']['work_assessment_a_2']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['work_assessment_a_2'] = $this->params['form']['work_assessment_a_2'];
			}
			
			if(isset($this->params['form']['work_assessment_b_2']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['work_assessment_b_2'] = $this->params['form']['work_assessment_b_2'];
			}
			
			if(isset($this->params['form']['work_assessment_c_2']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['work_assessment_c_2'] = $this->params['form']['work_assessment_c_2'];
			}
			
			if(isset($this->params['form']['beyond_book_2']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['beyond_book_2'] = $this->params['form']['beyond_book_2'];
			}
			
			if(isset($this->params['form']['personal_experience_2']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['personal_experience_2'] = $this->params['form']['personal_experience_2'];
			}
			
			if(isset($this->params['form']['student_focus_2']))
			{
				$classroomObservationDetailsArray['ClassroomObservation']['student_focus_2'] = $this->params['form']['student_focus_2'];
			}
			
			debug($classroomObservationDetailsArray);
			
			if($this->ClassroomObservation->save($classroomObservationDetailsArray))
			{
				$this->redirect('../home/view_classroom_observations/s:saved Successfully');
			}else
			{
				$this->redirect('../home/view_classroom_observations/s:not saved some error occured');
			}
			
		}
		
		
		function view_classroom_observations()
		{
			//$classroomObservations = $this->ClassroomObservation->find('all');
			
			//$this->set('classroomObservations',$classroomObservations);
			
			$data = $this->paginate('ClassroomObservation');    
			$this->set('data', $data);
			
		}
		
		function edit_classroom_observation($id = null)
		{
			if(!($id == null))
			{
				$classroomObservation = $this->ClassroomObservation->find('first',array('conditions'=>array('id'=>$id))) ;
				$regions = $this->Region->find('all');
				
				$this->set('regions',$regions);
				
				$this->set('classroomObservation',$classroomObservation);
			}
			else
			{
				$this->redirect('../home/index');
			}
		}
		
		
		function classroom_observation_report()
		{
			
			$count_lesson_introduced_a = $this->ClassroomObservation->find('count',array('conditions'=>array('lesson_introduced_a'=>1)));
			debug($count_lesson_introduced_a);
			$count_lesson_introduced_b = $this->ClassroomObservation->find('count',array('conditions'=>array('lesson_introduced_b'=>1)));
			debug($count_lesson_introduced_b);
			$count_lesson_introduced_c = $this->ClassroomObservation->find('count',array('conditions'=>array('lesson_introduced_c'=>1)));
			debug($count_lesson_introduced_c);
			$count_lesson_introduced_d = $this->ClassroomObservation->find('count',array('conditions'=>array('lesson_introduced_d'=>1)));
			debug($count_lesson_introduced_d);
			$count_lesson_introduced_e = $this->ClassroomObservation->find('count',array('conditions'=>array('lesson_introduced_e'=>1)));
			debug($count_lesson_introduced_e);
			$count_two_questions = $this->ClassroomObservation->find('count',array('conditions'=>array('two_questions'=>1)));
			debug($count_two_questions);
			$count_two_questions_2 = $this->ClassroomObservation->find('count',array('conditions'=>array('two_questions_2'=>1)));
			debug($count_two_questions_2);
			$count_open_ended_questions = $this->ClassroomObservation->find('count',array('conditions'=>array('open_ended_questions'=>1)));
			debug($count_open_ended_questions);
			//$count_ = $this->ClassroomObservation->find('count',array('conditions'=>array(''=>1)));
			//debug($count_);
			//$count_ = $this->ClassroomObservation->find('count',array('conditions'=>array(''=>1)));
			//debug($count_);
			//$count_ = $this->ClassroomObservation->find('count',array('conditions'=>array(''=>1)));
			//debug($count_);
			//$count_ = $this->ClassroomObservation->find('count',array('conditions'=>array(''=>1)));
			//debug($count_);
			//$count_ = $this->ClassroomObservation->find('count',array('conditions'=>array(''=>1)));
			//debug($count_);
			
			
			
			
			
		}
		
		function submit_classroom_observation_report()
		{
			
			
		}
		
		
		function new_functionality($did = 3)
		{
		
			$district = $this->Region->find('first',array('conditions'=>array('id'=>($did))));
			$this->set('district',$district);
			$this_district_talukas = $this->Taluka->find('all',array('conditions'=>array('district_id'=>$did)));
			
			
			$this_district_taluka_ids_array = array();
			
			foreach($this_district_talukas as $this_district_taluka)
			{
				$this_district_taluka_ids_array[] = $this_district_taluka['Taluka']['id'];
			}
			
			
			$this_taluka_ucs = $this->Uc->find('all',array('conditions'=>array('taluka_id'=>$this_district_taluka_ids_array)));
			
			$all_clusters = array();
			//debug($this_taluka_ucs);
			$this_cluster_school_ids_array = array();
			foreach($this_taluka_ucs as &$this_taluka_uc)
			{
				$uc_id = $this_taluka_uc['Uc']['id'];
				
				$this_uc_clusters = $this->Cluster->find('all',array('conditions'=>array('uc_id'=>$uc_id)));
				
				$this_uc_cluster_ids_array = array();
				
				foreach($this_uc_clusters as $this_uc_cluster)
				{					
					$all_clusters[] = $this_uc_cluster;
					$this_uc_cluster_ids_array[] = $this_uc_cluster['Cluster']['id'];
				}
				//debug($this_uc_cluster_ids_array);
				
				$this_cluster_schools = $this->School->find('all',array('conditions'=>array('clusterid'=>$this_uc_cluster_ids_array)));
				
				//debug(count($this_cluster_schools));
				
				
				
				
				foreach($this_cluster_schools as $this_cluster_school)
				{
					$this_cluster_school_ids_array[] = $this_cluster_school['School']['id'];
					//echo $this_cluster_school['School']['id'];
				}
				
				}
		//debug($this_cluster_school_ids_array);
		
		$schools = $this->School->find('all',array('conditions'=>array('id'=>$this_cluster_school_ids_array)));
		
		$this->set('schools',$schools);
		debug($all_clusters);
		$this->set('all_clusters',$all_clusters);
		
		
		//foreach($regions as &$region)
		//{
		//	$region_id = $region['Region']['id'];
		//	// inserting talukas into the districts / regions
		//	$talukas = $this->Taluka->find('all',array('conditions'=>array('district_id'=>$region_id)));
		//	if(!empty($talukas))
		//	{
		//		$x = 0;
		//		foreach($talukas as $taluka)
		//		{
		//			$region['Taluka'][$x] = $taluka['Taluka'];
		//			$taluka_id = $taluka['Taluka']['id'];
		//			//adding uc to particular talukas
		//			$ucs = $this->Uc->find('all',array('conditions'=>array('taluka_id'=>$taluka_id)));
		//			$y = 0;
		//			foreach($ucs as $uc)
		//			{
		//				$region['Taluka'][$x]['Uc'][$y] = $uc['Uc'];
		//				$uc_id = $uc['Uc']['id'];
		//				$clusters = $this->Cluster->find('all',array('conditions'=>array('uc_id'=>$uc_id)));
		//				$z = 0;
		///				foreach($clusters as $cluster)
		//				{
		//					$region['Taluka'][$x]['Uc'][$y]['Cluster'][$z] = $cluster['Cluster'];
		//					$cluster_id = $cluster['Cluster']['id'];
		///					$schools = $this->School->find('all',array('conditions'=>array('clusterid'=>$cluster_id)));
		//					$a = 0;
		//					foreach($schools as $school)
		//					{
		//						$region['Taluka'][$x]['Uc'][$y]['Cluster'][$z]['School'][$a] = $school['School'];
		//						$a++;
		//					}
		//					$z++;
		//				}
		//			$y++;	
		//			}
		//		$x++;	
		//		}
		//	}
		//}
		//debug($regions[0]);
		

		
		//$this->set('regions',$regions);
		
		
		//for getting District schools
		
		//$talukas = $this->Taluka->find('all',array('conditions'=>array('district_id'=>$did)));
		//$taluka_ids[] = array();
		//$uc_ids[] = array();
		//$cluster_ids[] = array();
		//foreach($talukas as $taluka)
		//{
		//	$taluka_ids[] = $taluka['Taluka']['id'];
		//}
		
		
		//$ucs = $this->Uc->find('all',array('conditions'=>array('district_id'=>$taluka_ids)));
			
		
		
		}
		
		
		function qa_team()
		{
			$districts = $this->Region->find('all');
			$this->set('districts',$districts);			
		}
		
		function mpr_report($id = 0)
		{
			if ($id != 0)
			{
				$this->set('show_report','show_Report');
			}
		
		}
		
		function semis_module()
		{
			
			// Get All District
			$districts = $this->SemisCodeDistrict->find('all');
			$this->set('districts',$districts);
			
			
			//Get All Tehsils
			$tehsils = $this->semisCodesDistrictTehsil->find('all');
			$this->set('tehsils',$tehsils);
			
			//Get All Union Councils
			$union_councils = $this->SemisCodeUc->find('all');
			$this->set('union_councils',$union_councils);

		}
		
		function submit_semis_query($name = null, $id = null, $tehsil = null, $union_council = null, $rooms_cond = null, $rooms = null, $enrollment_cond = null, $enrollment = null, $functionality = null, $teachers_cond = null, $teachers = null, $download_report = null, $report_type = null)
		{
			if($name == 'district')
			{
				$tehsils = $this->CodesForDistrictAndTehsil->find('all',array('conditions'=>array('district_id'=>$id)));
				
				$this->set('tehsils', $tehsils);	
			}
			
			if($name == 'tehsil')
			{
				$union_councils = $this->CodesForUc->find('all',array('conditions'=>array('tehsil_id'=>$id)));
				$this->set('union_councils', $union_councils);		
			}
			
			if($name == 'tehsilName')
			{
				$tehsil = $this->CodesForDistrictAndTehsil->find('first',array('conditions'=>array('district'=>$id)));
				$union_councils = $this->CodesForUc->find('all',array('conditions'=>array('tehsil_id'=>$tehsil["CodesForDistrictAndTehsil"]["tehsil_id"])));
				$this->set('union_councils_names', $union_councils);		
			}
			
			if($name == 'report')
			{
				if($download_report == 1)
				{
					$this->RequestHandler->setContent('xls', 'application/vnd.ms-excel'); 
						$this->layout = "xls";
						
					if(isset($this->params["url"]["start_day"]))
					{
						$startDate = $this->params["url"]["start_year"]."-". $this->params["url"]["start_month"]."-". $this->params["url"]["start_day"]." 00:00:00";
						$endDate = $this->params["url"]["end_year"]."-". $this->params["url"]["end_month"]."-". $this->params["url"]["end_day"]." 59:59:59";			
						
						$this->Set("startDate",$this->params["url"]["start_day"]);
						$this->Set("startYear",$this->params["url"]["start_year"]);
						$this->Set("startMonth",$this->params["url"]["start_month"]);
						
						$this->Set("endDate",$this->params["url"]["end_day"]);
						$this->Set("endYear",$this->params["url"]["end_year"]);
						$this->Set("endMonth",$this->params["url"]["end_month"]);
					}
					else
					{
						$startDate = date("Y-m")."-1 00:00:00";
						$endDate = date("Y-m")."-31 24:60:60";
						
						$this->Set("startDate","1");
						$this->Set("startYear",date("Y"));
						$this->Set("startMonth",date("m"));
						
						$this->Set("endDate","31");
						$this->Set("endYear",date("Y"));
						$this->Set("endMonth",date("m"));
					}
					
					$this->set("filename","School Report");
					
					
					
					
				}
				
				
				//debug($name);
				//debug($id);
				//$this->set('district',$id);
				//debug($tehsil);
				//$this->set('tehsil',$tehsil);
				//debug($union_council);
				//$this->set('union_council',$union_council);
				//debug($rooms);
				//$this->set('rooms',$rooms);
				//debug($enrollment);
				//$this->set('enrollment',$enrollment);
				//debug($functionality);
				//$this->set('functionality',$functionality);
				
				if($download_report != 1)
				{
					$link = $name;
					$link .= '/'.$id;
					$link .= '/'.$tehsil;
					$link .= '/'.$union_council;
					$link .= '/'.$rooms_cond;
					$link .= '/'.$rooms;
					$link .= '/'.$enrollment_cond;
					$link .= '/'.$enrollment;
					$link .= '/'.$functionality;
					$link .= '/'.$teachers_cond;
					$link .= '/'.$teachers;
					$link .= '/1';
					$link .= '/'.$report_type;
					
					$this->set('link',$link);
					
				}else
				{
					$this->set('download','1');
				}
				
				$conditions = array();
					
				if($id != 0)
					{
						$conditions['semisUniversal2010.district_id'] = $id;
					}
					
					if($tehsil != 0)
					{
						$conditions['semisUniversal2010.tehsil_id'] = $tehsil;
					}
					
					if($union_council != 0 )
					{
						$conditions['semisUniversal2010.union_council_id'] = $union_council;
					}
					
					$conditions2 = array();
					$conditions2 = $conditions;
					
					if($rooms != 0 )
					{
						$this->set('rooms',$rooms);
						if($rooms_cond == 'l')
						{
							$conditions['semisUniversal2010.no_of_classroom <'] = $rooms;
							$this->set('rooms_cond','Less Than');
						
						}elseif($rooms_cond == 'g')
						{
							$conditions['semisUniversal2010.no_of_classroom >'] = $rooms;
							$this->set('rooms_cond','Greater Than');

						}elseif($rooms_cond == 'e')
						{
							$conditions['semisUniversal2010.no_of_classroom'] = $rooms;
							$this->set('rooms_cond','Equal To');
						}
					}else
					{
						$this->set('rooms','No Filter');
					}
					
					if($functionality != 0 )
					{
						if($functionality == 1 )
						{
							$conditions['semisUniversal2010.status_id'] = $functionality;
							$this->set('functionality','Functional');
							$this->set('functionality_cond','Functional');
						}
						
						if($functionality == 2 )
						{
							$conditions['semisUniversal2010.status_id >'] = 1;
							$this->set('functionality','Closed / Non Functional');
							$this->set('functionality_cond','Closed / Non Functional');
						}
					}else
					{
						$this->set('functionality','No Filter');
					}
					
					
					if($enrollment != 0 )
					{
						$this->set('enrollment',$enrollment);
						//$conditions['SemisEnrollment2010.b_unadmit+SemisEnrollment2010.b_ec+SemisEnrollment2010.b_katchi+SemisEnrollment2010.b1+SemisEnrollment2010.b2+SemisEnrollment2010.b3+SemisEnrollment2010.b4+SemisEnrollment2010.b5+SemisEnrollment2010.b6+SemisEnrollment2010.b7+SemisEnrollment2010.b8+SemisEnrollment2010.b9_general+SemisEnrollment2010.b9_computer+SemisEnrollment2010.b9_biology+SemisEnrollment2010.b9_commerce+SemisEnrollment2010.b9_other+SemisEnrollment2010.b10_general+SemisEnrollment2010.b10_computer+SemisEnrollment2010.b10_biology+SemisEnrollment2010.b10_commerce+SemisEnrollment2010.b10_other+SemisEnrollment2010.b11_general+SemisEnrollment2010.b11_computer+SemisEnrollment2010.b11_premedical+SemisEnrollment2010.b11_preengineering+SemisEnrollment2010.b11_commerce+SemisEnrollment2010.b11_other+SemisEnrollment2010.b12_general+SemisEnrollment2010.b12_computer+SemisEnrollment2010.b12_premedical+SemisEnrollment2010.b12_preengineering+SemisEnrollment2010.b12_commerce+SemisEnrollment2010.b12_other+SemisEnrollment2010.g_unadmit+SemisEnrollment2010.g_ec+SemisEnrollment2010.g_katchi+SemisEnrollment2010.g1+SemisEnrollment2010.g2+SemisEnrollment2010.g3+SemisEnrollment2010.g4+SemisEnrollment2010.g5+SemisEnrollment2010.g6+SemisEnrollment2010.g7+SemisEnrollment2010.g8+SemisEnrollment2010.g9_general+SemisEnrollment2010.g9_computer+SemisEnrollment2010.g9_biology+SemisEnrollment2010.g9_commerce+SemisEnrollment2010.g9_other+SemisEnrollment2010.g10_general+SemisEnrollment2010.g10_computer+SemisEnrollment2010.g10_biology+SemisEnrollment2010.g10_commerce+SemisEnrollment2010.g10_other+SemisEnrollment2010.g11_general+SemisEnrollment2010.g11_computer+SemisEnrollment2010.g11_premedical+SemisEnrollment2010.g11_preengineering+SemisEnrollment2010.g11_commerce+SemisEnrollment2010.g11_other+SemisEnrollment2010.g12_general+SemisEnrollment2010.g12_computer+SemisEnrollment2010.g12_premedical+SemisEnrollment2010.g12_preengineering+SemisEnrollment2010.g12_commerce+SemisEnrollment2010.g12_other > '] = $enrollment;
						if($enrollment_cond == 'l')
						{
							$conditions['SemisEnrollment2010.total_enrollment <'] = $enrollment;
							$this->set('enrollment_cond','Less Than');
						}elseif($enrollment_cond == 'g')
						{
							$conditions['SemisEnrollment2010.total_enrollment >'] = $enrollment;
							$this->set('enrollment_cond','Greater Than');
						}elseif($enrollment_cond == 'e')
						{
							$conditions['SemisEnrollment2010.total_enrollment'] = $enrollment;
							$this->set('enrollment_cond','Equal To');
						}
					}else
					{
						$this->set('enrollment','No Filter');
					}
					
					if($teachers != 0)
					{
						$this->set('teachers',$teachers);
						if($teachers_cond == 'l')
						{
							$conditions['semisUniversal2010.total_teachers <'] = $teachers;
							$this->set('teachers_cond','Less Than');
						}elseif($teachers_cond == 'g')
						{
							$conditions['semisUniversal2010.total_teachers >'] = $teachers;
							$this->set('teachers_cond','Greater Than');
						}elseif($teachers_cond == 'e')
						{
							$conditions['semisUniversal2010.total_teachers'] = $teachers;
							$this->set('teachers_cond','Equal To');
						}
					}else
					{
						$this->set('teachers','No Filter');
					}
				
				
				
				//if we need to generate school summary
				if($report_type == 1)
				{
					$this->set('report','summary');
					
					
					$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));

					
					$fields[] = 'count(semisUniversal2010.school_id) as school_count';
					$fields[] = 'sum(semisUniversal2010.total_teachers) as total_teachers';
					$fields[] = 'sum(SemisEnrollment2010.total_enrollment) as total_enrollment';
					$fields[] = 'semisUniversal2010.prefix';
					$fields[] = 'SemisCodeSchoolGender.gen_type';
					$fields[] = 'semisCodesDistrictTehsil.district';
					$fields[] = 'semisCodesDistrictTehsil.tehsil';
					$fields[] = 'SemisCodeUc.uc_name';
				
					$group[] = "semisUniversal2010.union_council_id";
					$group[] = "semisUniversal2010.prefix";
					
					
					
					$total_schools = $this->semisUniversal2010->find('all', array ('conditions'=>$conditions, 'group'=>$group, 'fields'=>$fields));
					
					$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
					
					$without_filters_total_schools = $this->semisUniversal2010->find('all', array ('conditions'=>$conditions2, 'group'=>$group, 'fields'=>$fields));
					
					//debug($total_schools);
					$this->set('total_schools',$total_schools);
					$this->set('without_filters_total_schools',$without_filters_total_schools);
					
					
					
					
				}
				
				// if we need to generate the school list
				if($report_type == 2)
				{				
					$this->set('report','list');
					
						
					//debug($conditions);
					
					
					
					$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
					)));
					
					$schools = $this->semisUniversal2010->find('all', array ('conditions'=>$conditions));
					//debug(count($schools));
					
					$this->set('schools',$schools);
				}
				
			}
			
			
		}
		
		
		function other_queries($district = null, $download = null)
		{
			if(!($district == null))
			{
				if($download == 1)
				{
					$this->RequestHandler->setContent('xls', 'application/vnd.ms-excel'); 
						$this->layout = "xls";
						
						if(isset($this->params["url"]["start_day"]))
					{
						$startDate = $this->params["url"]["start_year"]."-". $this->params["url"]["start_month"]."-". $this->params["url"]["start_day"]." 00:00:00";
						$endDate = $this->params["url"]["end_year"]."-". $this->params["url"]["end_month"]."-". $this->params["url"]["end_day"]." 59:59:59";			
						
						$this->Set("startDate",$this->params["url"]["start_day"]);
						$this->Set("startYear",$this->params["url"]["start_year"]);
						$this->Set("startMonth",$this->params["url"]["start_month"]);
						
						$this->Set("endDate",$this->params["url"]["end_day"]);
						$this->Set("endYear",$this->params["url"]["end_year"]);
						$this->Set("endMonth",$this->params["url"]["end_month"]);
					}
					else
					{
						$startDate = date("Y-m")."-1 00:00:00";
						$endDate = date("Y-m")."-31 24:60:60";
						
						$this->Set("startDate","1");
						$this->Set("startYear",date("Y"));
						$this->Set("startMonth",date("m"));
						
						$this->Set("endDate","31");
						$this->Set("endYear",date("Y"));
						$this->Set("endMonth",date("m"));
					}
					
					$this->set("filename","SMSForSindh");
				}
					$condition['SsbBudgetFinal.district like'] = '%'.$district.'%';
					$schools = array();
					$schools = $this->SsbBudgetFinal->find('all', array('conditions' =>$condition));
					$this->set('schools', $schools);
			}
			// set_time_limit(0);
			
			// $schools = $this->semisUniversal2010->find('all', array('conditions'=>array('district_id'=>$id)));
			
			// $this->set('schools', $schools);
			
			/*
			if($download == 1)
			{
					$this->RequestHandler->setContent('xls', 'application/vnd.ms-excel'); 
						$this->layout = "xls";
						
						if(isset($this->params["url"]["start_day"]))
					{
						$startDate = $this->params["url"]["start_year"]."-". $this->params["url"]["start_month"]."-". $this->params["url"]["start_day"]." 00:00:00";
						$endDate = $this->params["url"]["end_year"]."-". $this->params["url"]["end_month"]."-". $this->params["url"]["end_day"]." 59:59:59";			
						
						$this->Set("startDate",$this->params["url"]["start_day"]);
						$this->Set("startYear",$this->params["url"]["start_year"]);
						$this->Set("startMonth",$this->params["url"]["start_month"]);
						
						$this->Set("endDate",$this->params["url"]["end_day"]);
						$this->Set("endYear",$this->params["url"]["end_year"]);
						$this->Set("endMonth",$this->params["url"]["end_month"]);
					}
					else
					{
						$startDate = date("Y-m")."-1 00:00:00";
						$endDate = date("Y-m")."-31 24:60:60";
						
						$this->Set("startDate","1");
						$this->Set("startYear",date("Y"));
						$this->Set("startMonth",date("m"));
						
						$this->Set("endDate","31");
						$this->Set("endYear",date("Y"));
						$this->Set("endMonth",date("m"));
					}
					
					$this->set("filename","ClusterReport");
					
					
				
			}
			
			
			$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));

					
					$fields[] = 'count(semisUniversal2010.school_id) as school_count';
					$fields[] = 'semisUniversal2010.prefix';
					$fields[] = 'semisUniversal2010.prefix';
					$fields[] = 'SemisCodeSchoolGender.gen_type';
					$fields[] = 'semisCodesDistrictTehsil.district';
					
					$group[] = "semisCodesDistrictTehsil.district";
					$group[] = "semisUniversal2010.prefix";
					
					$schools = $this->semisUniversal2010->find('all');
					debug($schools);
			/*
			$options['joins'] = array(
					array('table' => 'semis_universal2010s',
						'alias' => 'semisUniversal2010',
						'type' => 'left',
						'conditions' => array(
							'semisUniversal2010.school_id = SemisTeachers2010.school_id',
						)
					),
					array('table' => 'semis_code_districts',
						'alias' => 'SemisCodeDistrict',
						'type' => 'left',
						'conditions' => array(
							'SemisTeachers2010.place_of_domicile = SemisCodeDistrict.district_id',
						)
					)
				);
				
				$options['conditions'] = array(
					'semisUniversal2010.district_id <'=>100
				);
				
				$options['fields'] = array(
					//'SemisCodeDistrict.district',
					//'SemisTeachers2010.designation_id',
					'SemisTeachers2010.gender_id',
					//'SemisTeachers2010.qualification_id',
					'SemisTeachers2010.training_funding_agency',
					'SemisTeachers2010.training_id',
					//'semisUniversal2010.location_id',
					'semisUniversal2010.district_id',
					'count(SemisTeachers2010.school_id) as count'
				);
				
				$options['group'] = array(
					//'SemisTeachers2010.place_of_domicile',
					//'SemisTeachers2010.designation_id',
					//'SemisTeachers2010.qualification_id',
					'SemisTeachers2010.training_funding_agency',
					'SemisTeachers2010.training_id',
					'SemisTeachers2010.gender_id',
				);
				
				$query_final = $this->SemisTeachers2010->find('all', $options);
				//debug($query_final);
				$this->set('query_final',$query_final);
			/*
			$schools = $this->School->find('all',array('conditions'=>array('School.clusterid >'=>0, 'School.guide_school'=>1),'fields'=>array('School.code', 'School.clusterid', 'School.guide_school')));
			foreach($schools as $school)
			{
				
				$semis_school = $this->semisUniversal2010->find('first',array('conditions'=>array('school_id'=>$school['School']['code'])));
				
				$semisSchoolDetails['semisUniversal2010']['clusterid'] = $school['School']['clusterid'];
				$semisSchoolDetails['semisUniversal2010']['guide_school'] = $school['School']['guide_school'];
				
				debug($semis_school['semisUniversal2010']['id']);
				
				$this->semisUniversal2010->id = $semis_school['semisUniversal2010']['id'];
				$this->semisUniversal2010->save($semisSchoolDetails);
				
				
			}
			
			
			
			/*
			//for($x = $start; $x < ($end+1); $x++)
			//{
			$this->semisUniversal2010->bindModel(
					array('hasOne' => array(
					'School' => array(
						'className'  => '',
						'conditions'  => 'School.code = semisUniversal2010.school_id',
						'foreignKey' => ''
                    ),
				)));
			
			$semis_schools = $this->semisUniversal2010->find('all',array('conditions'=>array('semisUniversal2010.school_id >'=>$start, 'semisUniversal2010.school_id <'=>$end),'fields'=>array('School.id','semisUniversal2010.school_id','semisUniversal2010.tehsil_id','semisUniversal2010.district_id','semisUniversal2010.union_council_id','semisUniversal2010.tappa_id','semisUniversal2010.deh_id','semisUniversal2010.prefix','semisUniversal2010.school_name')));
			
			
			foreach($semis_schools as $semis_school)
			{
			if(!empty($semis_school))
			{
				debug($semis_school);
				
				if(!empty($semis_school['School']['id']))
				{
					
					
					echo 'already there';
					$this->School->id = $semis_school['School']['id'];
					$schoolDetails['School']['code'] = $semis_school['semisUniversal2010']['school_id'];
					$schoolDetails['School']['name'] = $semis_school['semisUniversal2010']['school_name'];
					$schoolDetails['School']['prefix'] = $semis_school['semisUniversal2010']['prefix'];
					$schoolDetails['School']['district_id'] = $semis_school['semisUniversal2010']['district_id'];
					$schoolDetails['School']['tehsil_id'] = $semis_school['semisUniversal2010']['tehsil_id'];
					$schoolDetails['School']['uc_id'] = $semis_school['semisUniversal2010']['union_council_id'];
					$schoolDetails['School']['tappa_id'] = $semis_school['semisUniversal2010']['tappa_id'];
					$schoolDetails['School']['deh_id'] = $semis_school['semisUniversal2010']['deh_id'];
					$this->School->save($schoolDetails);
				}else
				{
					echo 'not there';
					$this->School->id = null;
					$schoolDetails['School']['code'] = $semis_school['semisUniversal2010']['school_id'];
					$schoolDetails['School']['name'] = $semis_school['semisUniversal2010']['school_name'];
					$schoolDetails['School']['prefix'] = $semis_school['semisUniversal2010']['prefix'];
					$schoolDetails['School']['district_id'] = $semis_school['semisUniversal2010']['district_id'];
					$schoolDetails['School']['tehsil_id'] = $semis_school['semisUniversal2010']['tehsil_id'];
					$schoolDetails['School']['uc_id'] = $semis_school['semisUniversal2010']['union_council_id'];
					$schoolDetails['School']['tappa_id'] = $semis_school['semisUniversal2010']['tappa_id'];
					$schoolDetails['School']['deh_id'] = $semis_school['semisUniversal2010']['deh_id'];
					$this->School->save($schoolDetails);
				}
			}	
				//debug(count($semis_schools));
				//debug($x);
			}
			
			//}
			
			
			/*
			for($x = 395; $x < 1208; $x++)
			{
			$this->School->bindModel(
					array('hasOne' => array(
					'semisUniversal2010' => array(
						'className'  => '',
						'conditions'  => 'semisUniversal2010.school_id = School.code',
						'foreignKey' => ''
                    ),
					'Cluster' => array(
						'className'  => '',
						'conditions' => "Cluster.id = School.clusterid",
						'foreignKey' => ''
                    ),
				)));
					
			$semis_schools = $this->School->find('all',array('conditions'=>array('School.clusterid'=>$x),'fields'=>array('School.id','School.guide_school','semisUniversal2010.school_id','semisUniversal2010.district_id','semisUniversal2010.tehsil_id','semisUniversal2010.union_council_id','semisUniversal2010.tappa_id','semisUniversal2010.deh_id','Cluster.id')));
			debug($semis_schools);
			
				
				if(!count($semis_schools) < 1 )
				{
					$this->Cluster->id = $semis_schools[0]['Cluster']['id'];
					$clusterDetails['Cluster']['semis_district'] = $semis_schools[0]['semisUniversal2010']['district_id'];
					$clusterDetails['Cluster']['semis_tehsil'] = $semis_schools[0]['semisUniversal2010']['tehsil_id'];
					$clusterDetails['Cluster']['semis_uc'] = $semis_schools[0]['semisUniversal2010']['union_council_id'];
					$clusterDetails['Cluster']['semis_tappa'] = $semis_schools[0]['semisUniversal2010']['tappa_id'];
					$clusterDetails['Cluster']['semis_deh'] = $semis_schools[0]['semisUniversal2010']['deh_id'];
					
					$this->Cluster->save($clusterDetails);
					
				}
			}
		*/
		
		}
		 
		function cluster_notified($request_type = null, $id = null, $download = null)
		{
			set_time_limit(0);
		
		
			if($download == 1)
			{
					$this->RequestHandler->setContent('xls', 'application/vnd.ms-excel'); 
						$this->layout = "xls";
						
						if(isset($this->params["url"]["start_day"]))
					{
						$startDate = $this->params["url"]["start_year"]."-". $this->params["url"]["start_month"]."-". $this->params["url"]["start_day"]." 00:00:00";
						$endDate = $this->params["url"]["end_year"]."-". $this->params["url"]["end_month"]."-". $this->params["url"]["end_day"]." 59:59:59";			
						
						$this->Set("startDate",$this->params["url"]["start_day"]);
						$this->Set("startYear",$this->params["url"]["start_year"]);
						$this->Set("startMonth",$this->params["url"]["start_month"]);
						
						$this->Set("endDate",$this->params["url"]["end_day"]);
						$this->Set("endYear",$this->params["url"]["end_year"]);
						$this->Set("endMonth",$this->params["url"]["end_month"]);
					}
					else
					{
						$startDate = date("Y-m")."-1 00:00:00";
						$endDate = date("Y-m")."-31 24:60:60";
						
						$this->Set("startDate","1");
						$this->Set("startYear",date("Y"));
						$this->Set("startMonth",date("m"));
						
						$this->Set("endDate","31");
						$this->Set("endYear",date("Y"));
						$this->Set("endMonth",date("m"));
					}
					
					$this->set("filename","ClusterReport");
					
					$this->set('request_type',$request_type); 
					$this->set('id',$id);  
					$this->set('download',1);
				
				
			}else
			{
				$this->set('request_type',$request_type); 
				$this->set('id',$id);  
				$this->set('download',0);  
				
			}
		
		
		if($request_type == null || $request_type == 'add_notified_cluster')
			{
				if(isset($this->params['form']['tehsil']) && isset($this->params['form']['district']))
				{
					$notifiedCluster = $this->NotifiedCluster->find('first',array('conditions'=>array('tehsil_id'=>($this->params['form']['tehsil']))));
					if(empty($notifiedCluster))
					{
						$this->NotifiedCluster->id = null;
						$thisTehsil = $this->semisCodesDistrictTehsil->find('first',array('conditions'=>array('tehsil_id'=>($this->params['form']['tehsil']))));
						$notifiedClusterDetails['NotifiedCluster']['district_id'] = $thisTehsil['semisCodesDistrictTehsil']['district_id'];
						$notifiedClusterDetails['NotifiedCluster']['district_name'] = $thisTehsil['semisCodesDistrictTehsil']['district'];
						$notifiedClusterDetails['NotifiedCluster']['tehsil_id'] = $thisTehsil['semisCodesDistrictTehsil']['tehsil_id'];
						$notifiedClusterDetails['NotifiedCluster']['tehsil_name'] = $thisTehsil['semisCodesDistrictTehsil']['tehsil'];
						$notifiedClusterDetails['NotifiedCluster']['notified'] = 1;
						
						$this->NotifiedCluster->save($notifiedClusterDetails);
						$this->set('message','The Taluka is already in the list');
					}else
					{
						$this->set('message','The Taluka is already in the list');
					}
					
				}
				
				$notifiedClusters = $this->NotifiedCluster->find('all');
				
				$this->set('reportType','page');
				$this->set('notifiedClusters',$notifiedClusters);
			}
			if($request_type == 'getdistricts')
			{
				$districts = $this->SemisCodeDistrict->find('all');
				
				$this->set('districts',$districts);
				$this->set('reportType','getdistrict');
			}
			if($request_type == 'district')
			{
				$tehsils = $this->semisCodesDistrictTehsil->find('all',array('conditions'=>array('district_id'=>$id)));
				
				$this->set('tehsils', $tehsils);
				$this->set('reportType','tehsil');
			}
			
			if($request_type == 'clusterReport')
			{
				$this->set('reportType','clusterReport');
				
				$tehsils = $this->semisCodesDistrictTehsil->find('first',array('conditions'=>array('tehsil_id'=>$id)));
				
				$this->set('reportDistrictTehsil',$tehsils);
				$this->set('reportType','clusterReport');
				
				
				$clusterarray = array();
				$tehsilClusters = $this->Cluster->find('all',array('conditions'=>array('semis_tehsil'=>$id)));
				foreach($tehsilClusters as $tehsilCluster)
				{
					$clusterarray[] = $tehsilCluster['Cluster']['id'];
				}
				//debug($clusterarray);
				
				
				$this->semisUniversal2010->bindModel(
					array('hasOne' => array(
					'SemisEnrollment2010' => array(
						'className'  => '',
						'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
						'fields'  => array('girls_total_enrollment', 'boys_total_enrollment', 'total_enrollment'),
						'foreignKey' => ''
                    ),
					'semisCodesDistrictTehsil' => array(
						'className'  => '',
						'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
						'foreignKey' => ''
                    ),
					'SemisCodeUc' => array(
						'className'  => '',
						'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
						'foreignKey' => ''
                    ),
					'School' => array(
						'className'  => '',
						'conditions'  => "School.code = semisUniversal2010.school_id",
						'order'    => 'School.guide_school DESC',
						'fields'  => array('latitude', 'longitude'),
						'foreignKey' => ''
                    ),
					'Cluster' => array(
						'className'  => '',
						'conditions'  => "Cluster.id = semisUniversal2010.clusterid",
						'fields'  => array('name'),
						'foreignKey' => ''
                    ),
				)));
				
				
				$tehsilSchools = $this->semisUniversal2010->find('all',array('conditions'=>array('semisUniversal2010.clusterid'=>$clusterarray),'order'=>array('semisUniversal2010.clusterid DESC')));
				//debug($tehsilSchools[0]);
				$this->set('tehsilSchools',$tehsilSchools);
				
				/*
				$this->Cluster->bindModel(
					array('hasMany' => array(
					'School' => array(
						'className'  => '',
						'conditions'  => '',
						'foreignKey' => 'clusterid'
                    ),
					'semisUniversal2010' => array(
						'className'  => '',
						'conditions'  => '',
						'order'    => 'semisUniversal2010.guide_school DESC',
						'foreignKey' => 'clusterid'
                    ),
				)));
				
				
				$allClusters = $this->Cluster->find('all',array('conditions'=>array('semis_tehsil'=>$id)));
				
				$this->set('allClusters',$allClusters);
				*/
				
			}
		}
		
		
		function semis_summary()
		{
			// Get All District
			$districts = $this->SemisCodeDistrict->find('all');
			$this->set('districts',$districts);
			
			//Get All Tehsils
			$tehsils = $this->semisCodesDistrictTehsil->find('all');
			$this->set('tehsils',$tehsils);
			
			//Get All Union Councils
			$union_councils = $this->SemisCodeUc->find('all');
			$this->set('union_councils',$union_councils);
			
			
		}
		
		
		function semis_ratio($report = null, $from_id = null, $to_id = null, $district_id = null, $tehsil_id = null, $uc_id = null, $level = null, $download = null)
		{
			
			if($report == null)
			{
				// Get All District
				$districts = $this->SemisCodeDistrict->find('all');
				$this->set('districts',$districts);
				
				//Get All Tehsils
				$tehsils = $this->semisCodesDistrictTehsil->find('all');
				$this->set('tehsils',$tehsils);
				
				//Get All Union Councils
				$union_councils = $this->SemisCodeUc->find('all');
				$this->set('union_councils',$union_councils);
				$this->set('page','page');
			}
			
			
			
			if($report == 'report')
			{
				
				
				
				if($download == null)
				{
					//for link
					$this->set('reportlink',$report);
					$this->set('from_idlink',$from_id);
					$this->set('to_idlink',$to_id);
					$this->set('district_idlink',$district_id);
					$this->set('tehsil_idlink',$tehsil_id);
					$this->set('uc_idlink',$uc_id);
					$this->set('levellink',$level);
					$this->set('download',0);
					
				}
				
			if($download == 1)
			{
					$this->RequestHandler->setContent('xls', 'application/vnd.ms-excel'); 
						$this->layout = "xls";
						
						if(isset($this->params["url"]["start_day"]))
					{
						$startDate = $this->params["url"]["start_year"]."-". $this->params["url"]["start_month"]."-". $this->params["url"]["start_day"]." 00:00:00";
						$endDate = $this->params["url"]["end_year"]."-". $this->params["url"]["end_month"]."-". $this->params["url"]["end_day"]." 59:59:59";			
						
						$this->Set("startDate",$this->params["url"]["start_day"]);
						$this->Set("startYear",$this->params["url"]["start_year"]);
						$this->Set("startMonth",$this->params["url"]["start_month"]);
						
						$this->Set("endDate",$this->params["url"]["end_day"]);
						$this->Set("endYear",$this->params["url"]["end_year"]);
						$this->Set("endMonth",$this->params["url"]["end_month"]);
					}
					else
					{
						$startDate = date("Y-m")."-1 00:00:00";
						$endDate = date("Y-m")."-31 24:60:60";
						
						$this->Set("startDate","1");
						$this->Set("startYear",date("Y"));
						$this->Set("startMonth",date("m"));
						
						$this->Set("endDate","31");
						$this->Set("endYear",date("Y"));
						$this->Set("endMonth",date("m"));
					}
					
					$this->set("filename","SemisRatioReport");
					
					$this->set('download',1);
				
			}
				
				
				$options1['joins'] = array(
					array('table' => 'semis_enrollment2010s',
						'alias' => 'semisEnrollment2010',
						'type' => 'left',
						'conditions' => array(
							'semisEnrollment2010.school_id = semisUniversal2010.school_id',
						)
					)
				);
				
				$options1['fields'] = array(
					'sum(semisEnrollment2010.boys_total_enrollment) as total_enrollment_boys',
					'sum(semisEnrollment2010.girls_total_enrollment) as total_enrollment_girls',
					'sum(semisEnrollment2010.total_enrollment) as total_enrollment_overall'
					
				
				);
				
				$enrollmentAll = $this->semisUniversal2010->find('all', $options1);
				
				$this->set('enrollmentAll',$enrollmentAll);
				
				
				if($level == 'district')
				{
					//getting district enrollment
					$options1['conditions'] = array(
						'semisUniversal2010.district_id' => $district_id
						
					);
					
					$enrollmentDistrict = $this->semisUniversal2010->find('all', $options1);
					
					$this->set('enrollmentDistrict',$enrollmentDistrict);
					
					
				}elseif($level == 'tehsil')
				{
					//getting district enrollment
					$options1['conditions'] = array(
						'semisUniversal2010.district_id' => $district_id
						
					);
					
					$enrollmentDistrict = $this->semisUniversal2010->find('all', $options1);
					
					//getting Tehsil Enrollment
					$options1['conditions'] = array(
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id
					);
					
					$enrollmentTehsil = $this->semisUniversal2010->find('all', $options1);
					
					$this->set('enrollmentDistrict',$enrollmentDistrict);
					$this->set('enrollmentTehsil',$enrollmentTehsil);
					
				}elseif($level == 'uc')
				{
						
					//getting district enrollment
					$options1['conditions'] = array(
						'semisUniversal2010.district_id' => $district_id
						
					);
					
					$enrollmentDistrict = $this->semisUniversal2010->find('all', $options1);
					
					//getting Tehsil Enrollment
					$options1['conditions'] = array(
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id
					);
					
					$enrollmentTehsil = $this->semisUniversal2010->find('all', $options1);
					
					//getting UC enrollment
					$options1['conditions'] = array(
					'semisUniversal2010.district_id' => $district_id,
					'semisUniversal2010.tehsil_id' => $tehsil_id,
					'semisUniversal2010.union_council_id' => $uc_id
					);
					
					$enrollmentUC = $this->semisUniversal2010->find('all', $options1);
					
					$this->set('enrollmentDistrict',$enrollmentDistrict);
					$this->set('enrollmentTehsil',$enrollmentTehsil);
					$this->set('enrollmentUC',$enrollmentUC);
					
				}
				
				
				//debug($enrollmentAll);
				
				
				
				if($level == 'provincial')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBPS'
					);
				}elseif($level == 'district')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBPS',
						'semisUniversal2010.district_id' => $district_id
						
					);
				}elseif($level == 'tehsil')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBPS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id
					);
				}elseif($level == 'uc')
				{
						$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBPS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'semisUniversal2010.union_council_id' => $uc_id
					);
				}
				
				
				$enrollmentGBPS = $this->semisUniversal2010->find('all', $options1);
				//debug($enrollmentGBPS);
				
				
				
				if($level == 'provincial')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBLSS'
					);
				}elseif($level == 'district')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBLSS',
						'semisUniversal2010.district_id' => $district_id
						
					);
				}elseif($level == 'tehsil')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBLSS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id
					);
				}elseif($level == 'uc')
				{
						$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBLSS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'semisUniversal2010.union_council_id' => $uc_id
					);
				}
				
				
				$enrollmentGBLSS = $this->semisUniversal2010->find('all', $options1);
				//debug($enrollmentGBLSS);
				
				
				
				if($level == 'provincial')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBHS'
					);
				}elseif($level == 'district')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBHS',
						'semisUniversal2010.district_id' => $district_id
						
					);
				}elseif($level == 'tehsil')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBHS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id
					);
				}elseif($level == 'uc')
				{
						$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBHS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'semisUniversal2010.union_council_id' => $uc_id
					);
				}
				
				$enrollmentGBHS = $this->semisUniversal2010->find('all', $options1);
				//debug($enrollmentGBHS);
				
				
				
				if($level == 'provincial')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBHSS'
					);
				}elseif($level == 'district')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBHSS',
						'semisUniversal2010.district_id' => $district_id
						
					);
				}elseif($level == 'tehsil')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBHSS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id
					);
				}elseif($level == 'uc')
				{
						$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBHSS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'semisUniversal2010.union_council_id' => $uc_id
					);
				}
				
				$enrollmentGBHSS = $this->semisUniversal2010->find('all', $options1);
				//debug($enrollmentGBHSS);
				
				
				
				if($level == 'provincial')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGELS'
					);
				}elseif($level == 'district')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGELS',
						'semisUniversal2010.district_id' => $district_id
						
					);
				}elseif($level == 'tehsil')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGELS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id
					);
				}elseif($level == 'uc')
				{
						$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGELS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'semisUniversal2010.union_council_id' => $uc_id
					);
				}
				
				$enrollmentGBELS = $this->semisUniversal2010->find('all', $options1);
				//debug($enrollmentGBELS);
				
				
				if($level == 'provincial')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGPS'
					);
				}elseif($level == 'district')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGPS',
						'semisUniversal2010.district_id' => $district_id
						
					);
				}elseif($level == 'tehsil')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGPS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id
					);
				}elseif($level == 'uc')
				{
						$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGPS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'semisUniversal2010.union_council_id' => $uc_id
					);
				}
				
				$enrollmentGGPS = $this->semisUniversal2010->find('all', $options1);
				//debug($enrollmentGGPS);
				
				
				
				if($level == 'provincial')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGLSS'
					);
				}elseif($level == 'district')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGLSS',
						'semisUniversal2010.district_id' => $district_id
						
					);
				}elseif($level == 'tehsil')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGLSS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id
					);
				}elseif($level == 'uc')
				{
						$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGLSS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'semisUniversal2010.union_council_id' => $uc_id
					);
				}
				
				$enrollmentGGLSS = $this->semisUniversal2010->find('all', $options1);
				//debug($enrollmentGGLSS);
				
				
				if($level == 'provincial')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGHS'
					);
				}elseif($level == 'district')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGHS',
						'semisUniversal2010.district_id' => $district_id
						
					);
				}elseif($level == 'tehsil')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGHS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id
					);
				}elseif($level == 'uc')
				{
						$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGHS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'semisUniversal2010.union_council_id' => $uc_id
					);
				}
				
				$enrollmentGGHS = $this->semisUniversal2010->find('all', $options1);
				//debug($enrollmentGGHS);
				
				
				if($level == 'provincial')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGHSS'
					);
				}elseif($level == 'district')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGHSS',
						'semisUniversal2010.district_id' => $district_id
						
					);
				}elseif($level == 'tehsil')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGHSS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id
					);
				}elseif($level == 'uc')
				{
						$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGHSS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'semisUniversal2010.union_council_id' => $uc_id
					);
				}
				
				$enrollmentGGHSS = $this->semisUniversal2010->find('all', $options1);
				//debug($enrollmentGGHSS);
				
				
				
				if($level == 'provincial')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGELS'
					);
				}elseif($level == 'district')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGELS',
						'semisUniversal2010.district_id' => $district_id
						
					);
				}elseif($level == 'tehsil')
				{
					$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGELS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id
					);
				}elseif($level == 'uc')
				{
						$options1['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGELS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'semisUniversal2010.union_council_id' => $uc_id
					);
				}
				
				$enrollmentGGELS = $this->semisUniversal2010->find('all', $options1);
				//debug($enrollmentGGELS);
				
				
				
				
				$options['joins'] = array(
					array('table' => 'semis_universal2010s',
						'alias' => 'semisUniversal2010',
						'type' => 'left',
						'conditions' => array(
							'semisUniversal2010.school_id = SemisTeachers2010.school_id',
						)
					)
				);
				
				
				if($level == 'provincial')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBPS'
					);
				}elseif($level == 'district')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBPS',
						'semisUniversal2010.district_id' => $district_id
						
					);
				}elseif($level == 'tehsil')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBPS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id
					);
				}elseif($level == 'uc')
				{
						$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBPS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'semisUniversal2010.union_council_id' => $uc_id
					);
				}
				
				$schoolTeachersGBPS = $this->SemisTeachers2010->find('count', $options);
				//debug($schoolTeachersGBPS);
				
				
				
				if($level == 'provincial')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBLSS'
					);
				}elseif($level == 'district')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBLSS',
						'semisUniversal2010.district_id' => $district_id
						
					);
				}elseif($level == 'tehsil')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBLSS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id
					);
				}elseif($level == 'uc')
				{
						$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBLSS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'semisUniversal2010.union_council_id' => $uc_id
					);
				}
				$schoolTeachersGBLSS = $this->SemisTeachers2010->find('count', $options);
				//debug($schoolTeachersGBLSS);
				
				
				if($level == 'provincial')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBHSS'
					);
				}elseif($level == 'district')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBHSS',
						'semisUniversal2010.district_id' => $district_id
						
					);
				}elseif($level == 'tehsil')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBHSS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id
					);
				}elseif($level == 'uc')
				{
						$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBHSS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'semisUniversal2010.union_council_id' => $uc_id
					);
				}
				$schoolTeachersGBHSS = $this->SemisTeachers2010->find('count', $options);
				//debug($schoolTeachersGBHSS);
				
				if($level == 'provincial')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBHS'
					);
				}elseif($level == 'district')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBHS',
						'semisUniversal2010.district_id' => $district_id
						
					);
				}elseif($level == 'tehsil')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBHS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id
					);
				}elseif($level == 'uc')
				{
						$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBHS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'semisUniversal2010.union_council_id' => $uc_id
					);
				}
				$schoolTeachersGBHS = $this->SemisTeachers2010->find('count', $options);
				//debug($schoolTeachersGBHS);
				
				
				
				if($level == 'provincial')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBELS'
					);
				}elseif($level == 'district')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBELS',
						'semisUniversal2010.district_id' => $district_id
						
					);
				}elseif($level == 'tehsil')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBELS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id
					);
				}elseif($level == 'uc')
				{
						$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GBELS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'semisUniversal2010.union_council_id' => $uc_id
					);
				}
				
				$schoolTeachersGBELS = $this->SemisTeachers2010->find('count', $options);
				//debug($schoolTeachersGBELS);
				
				
				
				if($level == 'provincial')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGPS'
					);
				}elseif($level == 'district')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGPS',
						'semisUniversal2010.district_id' => $district_id
						
					);
				}elseif($level == 'tehsil')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGPS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id
					);
				}elseif($level == 'uc')
				{
						$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGPS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'semisUniversal2010.union_council_id' => $uc_id
					);
				}
				$schoolTeachersGGPS = $this->SemisTeachers2010->find('count', $options);
				//debug($schoolTeachersGGPS);
				
				
				if($level == 'provincial')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGLSS'
					);
				}elseif($level == 'district')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGLSS',
						'semisUniversal2010.district_id' => $district_id
						
					);
				}elseif($level == 'tehsil')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGLSS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id
					);
				}elseif($level == 'uc')
				{
						$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGLSS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'semisUniversal2010.union_council_id' => $uc_id
					);
				}
				$schoolTeachersGGLSS = $this->SemisTeachers2010->find('count', $options);
				//debug($schoolTeachersGGLSS);
				
				
				
				if($level == 'provincial')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGHSS'
					);
				}elseif($level == 'district')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGHSS',
						'semisUniversal2010.district_id' => $district_id
						
					);
				}elseif($level == 'tehsil')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGHSS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id
					);
				}elseif($level == 'uc')
				{
						$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGHSS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'semisUniversal2010.union_council_id' => $uc_id
					);
				}
				$schoolTeachersGGHSS = $this->SemisTeachers2010->find('count', $options);
				//debug($schoolTeachersGGHSS);
				
				
				if($level == 'provincial')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGHS'
					);
				}elseif($level == 'district')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGHS',
						'semisUniversal2010.district_id' => $district_id
						
					);
				}elseif($level == 'tehsil')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGHS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id
					);
				}elseif($level == 'uc')
				{
						$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGHS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'semisUniversal2010.union_council_id' => $uc_id
					);
				}
				$schoolTeachersGGHS = $this->SemisTeachers2010->find('count', $options);
				//debug($schoolTeachersGGHS);
				
				
				if($level == 'provincial')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGELS'
					);
				}elseif($level == 'district')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGELS',
						'semisUniversal2010.district_id' => $district_id
						
					);
				}elseif($level == 'tehsil')
				{
					$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGELS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id
					);
				}elseif($level == 'uc')
				{
						$options['conditions'] = array(
						'semisUniversal2010.prefix' => 'GGELS',
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'semisUniversal2010.union_council_id' => $uc_id
					);
				}
				$schoolTeachersGGELS = $this->SemisTeachers2010->find('count', $options);
				//debug($schoolTeachersGGELS);
				
				
				if($level == 'provincial')
				{
					$GBPSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GBPS')));
					$GBLSSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GBLSS')));
					$GBHSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GBHS')));
					$GBHSSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GBHSS')));
					$GBELSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GBELS')));
					$GGPSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GGPS')));
					$GGLSSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GGLSS')));
					$GGHSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GGHS')));
					$GGHSSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GGHSS')));
					$GGELSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GGELS')));
				}elseif($level == 'district')
				{
					$GBPSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GBPS','district_id'=>$district_id)));
					$GBLSSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GBLSS','district_id'=>$district_id)));
					$GBHSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GBHS','district_id'=>$district_id)));
					$GBHSSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GBHSS','district_id'=>$district_id)));
					$GBELSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GBELS','district_id'=>$district_id)));
					$GGPSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GGPS','district_id'=>$district_id)));
					$GGLSSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GGLSS','district_id'=>$district_id)));
					$GGHSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GGHS','district_id'=>$district_id)));
					$GGHSSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GGHSS','district_id'=>$district_id)));
					$GGELSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GGELS','district_id'=>$district_id)));
				}elseif($level == 'tehsil')
				{
					$GBPSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GBPS','district_id'=>$district_id,'tehsil_id'=>$tehsil_id)));
					$GBLSSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GBLSS','district_id'=>$district_id,'tehsil_id'=>$tehsil_id)));
					$GBHSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GBHS','district_id'=>$district_id,'tehsil_id'=>$tehsil_id)));
					$GBHSSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GBHSS','district_id'=>$district_id,'tehsil_id'=>$tehsil_id)));
					$GBELSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GBELS','district_id'=>$district_id,'tehsil_id'=>$tehsil_id)));
					$GGPSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GGPS','district_id'=>$district_id,'tehsil_id'=>$tehsil_id)));
					$GGLSSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GGLSS','district_id'=>$district_id,'tehsil_id'=>$tehsil_id)));
					$GGHSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GGHS','district_id'=>$district_id,'tehsil_id'=>$tehsil_id)));
					$GGHSSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GGHSS','district_id'=>$district_id,'tehsil_id'=>$tehsil_id)));
					$GGELSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GGELS','district_id'=>$district_id,'tehsil_id'=>$tehsil_id)));
				}elseif($level == 'uc')
				{
					$GBPSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GBPS','district_id'=>$district_id,'tehsil_id'=>$tehsil_id,'union_council_id'=>$uc_id)));
					$GBLSSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GBLSS','district_id'=>$district_id,'tehsil_id'=>$tehsil_id,'union_council_id'=>$uc_id)));
					$GBHSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GBHS','district_id'=>$district_id,'tehsil_id'=>$tehsil_id,'union_council_id'=>$uc_id)));
					$GBHSSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GBHSS','district_id'=>$district_id,'tehsil_id'=>$tehsil_id,'union_council_id'=>$uc_id)));
					$GBELSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GBELS','district_id'=>$district_id,'tehsil_id'=>$tehsil_id,'union_council_id'=>$uc_id)));
					$GGPSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GGPS','district_id'=>$district_id,'tehsil_id'=>$tehsil_id,'union_council_id'=>$uc_id)));
					$GGLSSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GGLSS','district_id'=>$district_id,'tehsil_id'=>$tehsil_id,'union_council_id'=>$uc_id)));
					$GGHSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GGHS','district_id'=>$district_id,'tehsil_id'=>$tehsil_id,'union_council_id'=>$uc_id)));
					$GGHSSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GGHSS','district_id'=>$district_id,'tehsil_id'=>$tehsil_id,'union_council_id'=>$uc_id)));
					$GGELSSchoolCount = $this->semisUniversal2010->find('count',array('conditions'=>array('prefix'=>'GGELS','district_id'=>$district_id,'tehsil_id'=>$tehsil_id,'union_council_id'=>$uc_id)));	
				}
				
				
				
				$this->set('enrollmentGGELS',$enrollmentGGELS);
				$this->set('enrollmentGGHSS',$enrollmentGGHSS);
				$this->set('enrollmentGGHS',$enrollmentGGHS);
				$this->set('enrollmentGGLSS',$enrollmentGGLSS);
				$this->set('enrollmentGGPS',$enrollmentGGPS);
				$this->set('enrollmentGBELS',$enrollmentGBELS);
				$this->set('enrollmentGBHSS',$enrollmentGBHSS);
				$this->set('enrollmentGBHS',$enrollmentGBHS);
				$this->set('enrollmentGBLSS',$enrollmentGBLSS);
				$this->set('enrollmentGBPS',$enrollmentGBPS);
				
				if($level == 'provincial')
				{
					$ALLSchoolCount = $this->semisUniversal2010->find('count');
					
					$this->set('ALLSchoolCount',$ALLSchoolCount);
				
				}elseif($level == 'district')
				{
					$ALLSchoolCount = $this->semisUniversal2010->find('count');
					$DistrictSchoolCount = $this->semisUniversal2010->find('count', array('conditions'=>array('district_id'=>$district_id)));
					
					$this->set('ALLSchoolCount',$ALLSchoolCount);
					$this->set('DistrictSchoolCount',$DistrictSchoolCount);
				
				
				}elseif($level == 'tehsil')
				{
					$ALLSchoolCount = $this->semisUniversal2010->find('count');
					$DistrictSchoolCount = $this->semisUniversal2010->find('count', array('conditions'=>array('district_id'=>$district_id)));
					$TehsilSchoolCount = $this->semisUniversal2010->find('count', array('conditions'=>array('district_id'=>$district_id,'tehsil_id'=>$tehsil_id)));
					
					$this->set('ALLSchoolCount',$ALLSchoolCount);
					$this->set('DistrictSchoolCount',$DistrictSchoolCount);
					$this->set('TehsilSchoolCount',$TehsilSchoolCount);
				
					
				}elseif($level == 'uc')
				{
					$ALLSchoolCount = $this->semisUniversal2010->find('count');
					$DistrictSchoolCount = $this->semisUniversal2010->find('count', array('conditions'=>array('district_id'=>$district_id)));
					$TehsilSchoolCount = $this->semisUniversal2010->find('count', array('conditions'=>array('district_id'=>$district_id,'tehsil_id'=>$tehsil_id)));
					$UCSchoolCount = $this->semisUniversal2010->find('count', array('conditions'=>array('district_id'=>$district_id,'tehsil_id'=>$tehsil_id,'union_council_id'=>$uc_id)));
					
					$this->set('ALLSchoolCount',$ALLSchoolCount);
					$this->set('DistrictSchoolCount',$DistrictSchoolCount);
					$this->set('TehsilSchoolCount',$TehsilSchoolCount);
					$this->set('UCSchoolCount',$UCSchoolCount);
					
				}
				
				
				$this->set('ALLSchoolCount',$ALLSchoolCount);
				$this->set('GGELSSchoolCount',$GGELSSchoolCount);
				$this->set('GGHSSSchoolCount',$GGHSSSchoolCount);
				$this->set('GGHSSchoolCount',$GGHSSchoolCount);
				$this->set('GGLSSSchoolCount',$GGLSSSchoolCount);
				$this->set('GGPSSchoolCount',$GGPSSchoolCount);
				$this->set('GBELSSchoolCount',$GBELSSchoolCount);
				$this->set('GBHSSSchoolCount',$GBHSSSchoolCount);
				$this->set('GBHSSchoolCount',$GBHSSchoolCount);
				$this->set('GBLSSSchoolCount',$GBLSSSchoolCount);
				$this->set('GBPSSchoolCount',$GBPSSchoolCount);
				
				
				
				
				if($level == 'provincial')
				{
					
					//getting teachers for Province
					$schoolTeachersAll = $this->SemisTeachers2010->find('count');
					
					//getting male Teachers for Province
					$schoolTeachersAllFemale = $this->SemisTeachers2010->find('count', array('conditions'=>array('gender_id'=>2)));
					
					//getting Female Teachers for District
					$schoolTeachersAllMale = $this->SemisTeachers2010->find('count', array('conditions'=>array('gender_id'=>1)));
					
					$this->set('schoolTeachersAll',$schoolTeachersAll);
					$this->set('schoolTeachersAllFemale',$schoolTeachersAllFemale);
					$this->set('schoolTeachersAllMale',$schoolTeachersAllMale);
					
				}elseif($level == 'district')
				{
					//getting teachers for Province
					$schoolTeachersAll = $this->SemisTeachers2010->find('count');
					
					//getting male Teachers for Province
					$schoolTeachersAllFemale = $this->SemisTeachers2010->find('count', array('conditions'=>array('gender_id'=>2)));
					
					//getting Female Teachers for District
					$schoolTeachersAllMale = $this->SemisTeachers2010->find('count', array('conditions'=>array('gender_id'=>1)));
					
					//getting teachers for District
					$options3['joins'] = array(
					array('table' => 'semis_universal2010s',
						'alias' => 'semisUniversal2010',
						'type' => 'left',
						'conditions' => array(
							'semisUniversal2010.school_id = SemisTeachers2010.school_id',
						)
					)
					);
					
					//getting all teachers for district
					$options3['conditions'] = array(
						'semisUniversal2010.district_id' => $district_id,
					);
					$schoolTeachersDistrict = $this->SemisTeachers2010->find('count',$options3);
					
					//getting Male Teachers for District
					$options3['conditions'] = array(
						'semisUniversal2010.district_id' => $district_id,
						'SemisTeachers2010.gender_id' => 1,
					);
					$schoolTeachersDistrictMale = $this->SemisTeachers2010->find('count',$options3);
					
					//getting Female Teachers for District 
					$options3['conditions'] = array(
						'semisUniversal2010.district_id' => $district_id,
						'SemisTeachers2010.gender_id' => 2,
					);
					$schoolTeachersDistrictFemale = $this->SemisTeachers2010->find('count',$options3);
					
					$this->set('schoolTeachersAll',$schoolTeachersAll);
					$this->set('schoolTeachersAllFemale',$schoolTeachersAllFemale);
					$this->set('schoolTeachersAllMale',$schoolTeachersAllMale);
					$this->set('schoolTeachersDistrict',$schoolTeachersDistrict);
					$this->set('schoolTeachersDistrictFemale',$schoolTeachersDistrictFemale);
					$this->set('schoolTeachersDistrictMale',$schoolTeachersDistrictMale);
					
				}elseif($level == 'tehsil')
				{
					
					//getting teachers for Province
					$schoolTeachersAll = $this->SemisTeachers2010->find('count');
					
					//getting male Teachers for Province
					$schoolTeachersAllFemale = $this->SemisTeachers2010->find('count', array('conditions'=>array('gender_id'=>2)));
					
					//getting Female Teachers for District
					$schoolTeachersAllMale = $this->SemisTeachers2010->find('count', array('conditions'=>array('gender_id'=>1)));
					
					//getting teachers for District
					$options3['joins'] = array(
					array('table' => 'semis_universal2010s',
						'alias' => 'semisUniversal2010',
						'type' => 'left',
						'conditions' => array(
							'semisUniversal2010.school_id = SemisTeachers2010.school_id',
						)
					)
					);
					
					//getting all teachers for district
					$options3['conditions'] = array(
						'semisUniversal2010.district_id' => $district_id,
					);
					$schoolTeachersDistrict = $this->SemisTeachers2010->find('count',$options3);
					
					//getting Male Teachers for District
					$options3['conditions'] = array(
						'semisUniversal2010.district_id' => $district_id,
						'SemisTeachers2010.gender_id' => 1,
					);
					$schoolTeachersDistrictMale = $this->SemisTeachers2010->find('count',$options3);
					
					//getting Female Teachers for District 
					$options3['conditions'] = array(
						'semisUniversal2010.district_id' => $district_id,
						'SemisTeachers2010.gender_id' => 2,
					);
					$schoolTeachersDistrictFemale = $this->SemisTeachers2010->find('count',$options3);
					
					//getting teachers for Tehsil
					$options3['joins'] = array(
					array('table' => 'semis_universal2010s',
						'alias' => 'semisUniversal2010',
						'type' => 'left',
						'conditions' => array(
							'semisUniversal2010.school_id = SemisTeachers2010.school_id',
						)
					)
					);
					$options3['conditions'] = array(
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
					);
					$schoolTeachersTehsil = $this->SemisTeachers2010->find('count',$options3);
					//getting all female teachers for Tehsil
					$options3['conditions'] = array(
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'SemisTeachers2010.gender_id' => 2,
					);
					$schoolTeachersTehsilFemale = $this->SemisTeachers2010->find('count',$options3);
					//getting all male teachers for Tehsil
					$options3['conditions'] = array(
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'SemisTeachers2010.gender_id' => 1,
					);
					$schoolTeachersTehsilMale = $this->SemisTeachers2010->find('count',$options3);
					
					$this->set('schoolTeachersAll',$schoolTeachersAll);
					$this->set('schoolTeachersAllFemale',$schoolTeachersAllFemale);
					$this->set('schoolTeachersAllMale',$schoolTeachersAllMale);
					$this->set('schoolTeachersDistrict',$schoolTeachersDistrict);
					$this->set('schoolTeachersDistrictFemale',$schoolTeachersDistrictFemale);
					$this->set('schoolTeachersDistrictMale',$schoolTeachersDistrictMale);
					$this->set('schoolTeachersTehsil',$schoolTeachersTehsil);
					$this->set('schoolTeachersTehsilFemale',$schoolTeachersTehsilFemale);
					$this->set('schoolTeachersTehsilMale',$schoolTeachersTehsilMale);
					
				}elseif($level == 'uc')
				{
					
					
					//getting teachers for Province
					$schoolTeachersAll = $this->SemisTeachers2010->find('count');
					
					//getting male Teachers for Province
					$schoolTeachersAllFemale = $this->SemisTeachers2010->find('count', array('conditions'=>array('gender_id'=>2)));
					
					//getting Female Teachers for District
					$schoolTeachersAllMale = $this->SemisTeachers2010->find('count', array('conditions'=>array('gender_id'=>1)));
					
					
					//getting teachers for District
					$options3['joins'] = array(
					array('table' => 'semis_universal2010s',
						'alias' => 'semisUniversal2010',
						'type' => 'left',
						'conditions' => array(
							'semisUniversal2010.school_id = SemisTeachers2010.school_id',
						)
					)
					);
					
					//getting all teachers for district
					$options3['conditions'] = array(
						'semisUniversal2010.district_id' => $district_id,
					);
					$schoolTeachersDistrict = $this->SemisTeachers2010->find('count',$options3);
					
					//getting Male Teachers for District
					$options3['conditions'] = array(
						'semisUniversal2010.district_id' => $district_id,
						'SemisTeachers2010.gender_id' => 1,
					);
					$schoolTeachersDistrictMale = $this->SemisTeachers2010->find('count',$options3);
					
					//getting Female Teachers for District 
					$options3['conditions'] = array(
						'semisUniversal2010.district_id' => $district_id,
						'SemisTeachers2010.gender_id' => 2,
					);
					$schoolTeachersDistrictFemale = $this->SemisTeachers2010->find('count',$options3);
					
					
					//getting teachers for Tehsil
					$options3['joins'] = array(
					array('table' => 'semis_universal2010s',
						'alias' => 'semisUniversal2010',
						'type' => 'left',
						'conditions' => array(
							'semisUniversal2010.school_id = SemisTeachers2010.school_id',
						)
					)
					);
					$options3['conditions'] = array(
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
					);
					$schoolTeachersTehsil = $this->SemisTeachers2010->find('count',$options3);
					//getting all female teachers for Tehsil
					$options3['conditions'] = array(
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'SemisTeachers2010.gender_id' => 2,
					);
					$schoolTeachersTehsilFemale = $this->SemisTeachers2010->find('count',$options3);
					//getting all male teachers for Tehsil
					$options3['conditions'] = array(
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'SemisTeachers2010.gender_id' => 1,
					);
					$schoolTeachersTehsilMale = $this->SemisTeachers2010->find('count',$options3);
					
					//getting teachers for Union council
					$options3['joins'] = array(
					array('table' => 'semis_universal2010s',
						'alias' => 'semisUniversal2010',
						'type' => 'left',
						'conditions' => array(
							'semisUniversal2010.school_id = SemisTeachers2010.school_id',
						)
					)
					);
					//getting all teachers for UC
					$options3['conditions'] = array(
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'semisUniversal2010.union_council_id' => $uc_id
					);
					
					$schoolTeachersUC = $this->SemisTeachers2010->find('count',$options3);
					//getting all teachers for UC Male
					$options3['conditions'] = array(
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'semisUniversal2010.union_council_id' => $uc_id,
						'SemisTeachers2010.gender_id' => 2,
					);
					$schoolTeachersUCFemale = $this->SemisTeachers2010->find('count',$options3);
					
					$options3['conditions'] = array(
						'semisUniversal2010.district_id' => $district_id,
						'semisUniversal2010.tehsil_id' => $tehsil_id,
						'SemisTeachers2010.gender_id' => 1,
					);
					$schoolTeachersUCMale = $this->SemisTeachers2010->find('count',$options3);
					
					
					$this->set('schoolTeachersAll',$schoolTeachersAll);
					$this->set('schoolTeachersAllFemale',$schoolTeachersAllFemale);
					$this->set('schoolTeachersAllMale',$schoolTeachersAllMale);
					$this->set('schoolTeachersDistrict',$schoolTeachersDistrict);
					$this->set('schoolTeachersDistrictFemale',$schoolTeachersDistrictFemale);
					$this->set('schoolTeachersDistrictMale',$schoolTeachersDistrictMale);
					$this->set('schoolTeachersTehsil',$schoolTeachersTehsil);
					$this->set('schoolTeachersTehsilFemale',$schoolTeachersTehsilFemale);
					$this->set('schoolTeachersTehsilMale',$schoolTeachersTehsilMale);
					$this->set('schoolTeachersUC',$schoolTeachersUC);
					$this->set('schoolTeachersUCMale',$schoolTeachersUCMale);
					$this->set('schoolTeachersUCFemale',$schoolTeachersUCFemale);
					
				}
				
				
				$this->set('schoolTeachersGBELS',$schoolTeachersGBELS);
				$this->set('schoolTeachersGBHS',$schoolTeachersGBHS);
				$this->set('schoolTeachersGBHSS',$schoolTeachersGBHSS);
				$this->set('schoolTeachersGBLSS',$schoolTeachersGBLSS);
				$this->set('schoolTeachersGBPS',$schoolTeachersGBPS);
				$this->set('schoolTeachersGGELS',$schoolTeachersGGELS);
				$this->set('schoolTeachersGGHS',$schoolTeachersGGHS);
				$this->set('schoolTeachersGGHSS',$schoolTeachersGGHSS);
				$this->set('schoolTeachersGGLSS',$schoolTeachersGGLSS);
				$this->set('schoolTeachersGGPS',$schoolTeachersGGPS);
				
				$this->set('page','reportStudentTeacher');
				
			}
		
		}
		
		function teachers_retiring($report = null, $download_report = null, $designation = null, $qualification = null, $location = null)
		{
			
			
			if($download_report == 1)
			{
					$this->RequestHandler->setContent('xls', 'application/vnd.ms-excel'); 
						$this->layout = "xls";
						
						if(isset($this->params["url"]["start_day"]))
					{
						$startDate = $this->params["url"]["start_year"]."-". $this->params["url"]["start_month"]."-". $this->params["url"]["start_day"]." 00:00:00";
						$endDate = $this->params["url"]["end_year"]."-". $this->params["url"]["end_month"]."-". $this->params["url"]["end_day"]." 59:59:59";			
						
						$this->Set("startDate",$this->params["url"]["start_day"]);
						$this->Set("startYear",$this->params["url"]["start_year"]);
						$this->Set("startMonth",$this->params["url"]["start_month"]);
						
						$this->Set("endDate",$this->params["url"]["end_day"]);
						$this->Set("endYear",$this->params["url"]["end_year"]);
						$this->Set("endMonth",$this->params["url"]["end_month"]);
					}
					else
					{
						$startDate = date("Y-m")."-1 00:00:00";
						$endDate = date("Y-m")."-31 24:60:60";
						
						$this->Set("startDate","1");
						$this->Set("startYear",date("Y"));
						$this->Set("startMonth",date("m"));
						
						$this->Set("endDate","31");
						$this->Set("endYear",date("Y"));
						$this->Set("endMonth",date("m"));
					}
					
					$this->set("filename","TeachersReport");
					
					//$this->set('request_type',$request_type); 
					//$this->set('id',$id);  
					$this->set('download',1);
				
				
			}
			
			
			
			// Get All District
			$districts = $this->SemisCodeDistrict->find('all');
			$this->set('districts',$districts);
			
			
			//Get All Tehsils
			$tehsils = $this->semisCodesDistrictTehsil->find('all');
			$this->set('tehsils',$tehsils);
			
			//Get All Union Councils
			$union_councils = $this->SemisCodeUc->find('all');
			$this->set('union_councils',$union_councils);
			
			if($report == "report")
			{
				$options['joins'] = array(
					array('table' => 'semis_universal2010s',
						'alias' => 'semisUniversal2010',
						'type' => 'left',
						'conditions' => array(
							'semisUniversal2010.school_id = SemisTeachers2010.school_id',
						)
					),
					array('table' => 'semis_code_districts',
						'alias' => 'SemisCodeDistrict',
						'type' => 'left',
						'conditions' => array(
							'SemisTeachers2010.place_of_domicile = SemisCodeDistrict.district_id',
						)
					),
					array('table' => 'semis_code_teachers_trainings',
						'alias' => 'SemisCodeTeachersTraining',
						'type' => 'left',
						'conditions' => array(
							'SemisTeachers2010.training_id = SemisCodeTeachersTraining.training_id',
						)
					)
				);
				
				
				if($download_report != 1)
				{
					$link = $report;
					$link .= '/1';
					$link .= '/'.$designation;
					$link .= '/'.$qualification;
					$link .= '/'.$location;
					 
					
					$this->set('link',$link);
					
				}else
				{
					$this->set('download','1');
				}
				
				
				
				
				$conditions['semisUniversal2010.district_id <'] = 100;
				if($designation != "All")
				{
					$conditions['SemisTeachers2010.designation_id'] = $designation;
					
				}
				if($qualification != "All")
				{
					if($qualification == 100)
					{
						$conditions['SemisTeachers2010.qualification_id >'] = 100;
						$conditions['SemisTeachers2010.qualification_id <'] = 150;
					}elseif($qualification == 200)
					{
						$conditions['SemisTeachers2010.qualification_id >'] = 200;
						$conditions['SemisTeachers2010.qualification_id <'] = 250;
					}elseif($qualification == 300)
					{
						$conditions['SemisTeachers2010.qualification_id >'] = 300;
						$conditions['SemisTeachers2010.qualification_id <'] = 350;
					}elseif($qualification == 400)
					{
						$conditions['SemisTeachers2010.qualification_id >'] = 400;
						$conditions['SemisTeachers2010.qualification_id <'] = 450;
					}elseif($qualification == 500)
					{
						$conditions['SemisTeachers2010.qualification_id >'] = 500;
						$conditions['SemisTeachers2010.qualification_id <'] = 550;
					}elseif($qualification == 600)
					{
						$conditions['SemisTeachers2010.qualification_id >'] = 600;
						$conditions['SemisTeachers2010.qualification_id <'] = 650;
					}else{
						$conditions['SemisTeachers2010.qualification_id'] = $qualification;
					}
				}
				
				if($location != "Both")
				{
					$conditions['semisUniversal2010.location_id'] = $location;
					
				}
				
					$this->set('location',$location);
					$this->set('designation',$designation);
					$this->set('qualification',$qualification);
					
					
				$options['conditions'] = $conditions;

				$options['fields'] = array(
					'SemisCodeDistrict.district',
					'SemisTeachers2010.designation_id',
					'SemisTeachers2010.gender_id',
					'SemisCodeTeachersTraining.training',
					//'SemisTeachers2010.qualification_id',
					//'SemisTeachers2010.training_funding_agency',
					'SemisTeachers2010.training_id',
					//'semisUniversal2010.location_id',
					//'semisUniversal2010.district_id',
					'count(SemisTeachers2010.school_id) as count'
				);
				
				$options['group'] = array(
					'SemisCodeDistrict.district',
					//'SemisTeachers2010.place_of_domicile',
					//'SemisTeachers2010.designation_id',
					//'SemisTeachers2010.qualification_id',
					//'SemisTeachers2010.training_funding_agency',
					'SemisTeachers2010.training_id',
					'SemisTeachers2010.gender_id',
				);
				
				$query_final = $this->SemisTeachers2010->find('all', $options);
				//debug($query_final);
				$this->set('query_final',$query_final);
				$this->set('report','list');
				
			}
			
		}
		
		
		function teachers_filter($report = null, $download_report = null, $designation = null, $qualification = null, $location = null)
		{
			
			
			if($download_report == 1)
			{
					$this->RequestHandler->setContent('xls', 'application/vnd.ms-excel'); 
						$this->layout = "xls";
						
						if(isset($this->params["url"]["start_day"]))
					{
						$startDate = $this->params["url"]["start_year"]."-". $this->params["url"]["start_month"]."-". $this->params["url"]["start_day"]." 00:00:00";
						$endDate = $this->params["url"]["end_year"]."-". $this->params["url"]["end_month"]."-". $this->params["url"]["end_day"]." 59:59:59";			
						
						$this->Set("startDate",$this->params["url"]["start_day"]);
						$this->Set("startYear",$this->params["url"]["start_year"]);
						$this->Set("startMonth",$this->params["url"]["start_month"]);
						
						$this->Set("endDate",$this->params["url"]["end_day"]);
						$this->Set("endYear",$this->params["url"]["end_year"]);
						$this->Set("endMonth",$this->params["url"]["end_month"]);
					}
					else
					{
						$startDate = date("Y-m")."-1 00:00:00";
						$endDate = date("Y-m")."-31 24:60:60";
						
						$this->Set("startDate","1");
						$this->Set("startYear",date("Y"));
						$this->Set("startMonth",date("m"));
						
						$this->Set("endDate","31");
						$this->Set("endYear",date("Y"));
						$this->Set("endMonth",date("m"));
					}
					
					$this->set("filename","TeachersReport");
					
					//$this->set('request_type',$request_type); 
					//$this->set('id',$id);  
					$this->set('download',1);
				
				
			}
			
			
			
			// Get All District
			$districts = $this->SemisCodeDistrict->find('all');
			$this->set('districts',$districts);
			
			
			//Get All Tehsils
			$tehsils = $this->semisCodesDistrictTehsil->find('all');
			$this->set('tehsils',$tehsils);
			
			//Get All Union Councils
			$union_councils = $this->SemisCodeUc->find('all');
			$this->set('union_councils',$union_councils);
			
			if($report == "report")
			{
				$options['joins'] = array(
					array('table' => 'semis_universal2010s',
						'alias' => 'semisUniversal2010',
						'type' => 'left',
						'conditions' => array(
							'semisUniversal2010.school_id = SemisTeachers2010.school_id',
						)
					),
					array('table' => 'semis_code_districts',
						'alias' => 'SemisCodeDistrict',
						'type' => 'left',
						'conditions' => array(
							'SemisTeachers2010.place_of_domicile = SemisCodeDistrict.district_id',
						)
					),
					array('table' => 'semis_code_teachers_trainings',
						'alias' => 'SemisCodeTeachersTraining',
						'type' => 'left',
						'conditions' => array(
							'SemisTeachers2010.training_id = SemisCodeTeachersTraining.training_id',
						)
					)
				);
				
				
				if($download_report != 1)
				{
					$link = $report;
					$link .= '/1';
					$link .= '/'.$designation;
					$link .= '/'.$qualification;
					$link .= '/'.$location;
					 
					
					$this->set('link',$link);
					
				}else
				{
					$this->set('download','1');
				}
				
				
				
				
				$conditions['semisUniversal2010.district_id <'] = 100;
				if($designation != "All")
				{
					$conditions['SemisTeachers2010.designation_id'] = $designation;
					
				}
				if($qualification != "All")
				{
					if($qualification == 100)
					{
						$conditions['SemisTeachers2010.qualification_id >'] = 100;
						$conditions['SemisTeachers2010.qualification_id <'] = 150;
					}elseif($qualification == 200)
					{
						$conditions['SemisTeachers2010.qualification_id >'] = 200;
						$conditions['SemisTeachers2010.qualification_id <'] = 250;
					}elseif($qualification == 300)
					{
						$conditions['SemisTeachers2010.qualification_id >'] = 300;
						$conditions['SemisTeachers2010.qualification_id <'] = 350;
					}elseif($qualification == 400)
					{
						$conditions['SemisTeachers2010.qualification_id >'] = 400;
						$conditions['SemisTeachers2010.qualification_id <'] = 450;
					}elseif($qualification == 500)
					{
						$conditions['SemisTeachers2010.qualification_id >'] = 500;
						$conditions['SemisTeachers2010.qualification_id <'] = 550;
					}elseif($qualification == 600)
					{
						$conditions['SemisTeachers2010.qualification_id >'] = 600;
						$conditions['SemisTeachers2010.qualification_id <'] = 650;
					}else{
						$conditions['SemisTeachers2010.qualification_id'] = $qualification;
					}
				}
				
				if($location != "Both")
				{
					$conditions['semisUniversal2010.location_id'] = $location;
					
				}
				
					$this->set('location',$location);
					$this->set('designation',$designation);
					$this->set('qualification',$qualification);
					
					
				$options['conditions'] = $conditions;

				$options['fields'] = array(
					'SemisCodeDistrict.district',
					'SemisTeachers2010.designation_id',
					'SemisTeachers2010.gender_id',
					'SemisCodeTeachersTraining.training',
					//'SemisTeachers2010.qualification_id',
					//'SemisTeachers2010.training_funding_agency',
					'SemisTeachers2010.training_id',
					//'semisUniversal2010.location_id',
					//'semisUniversal2010.district_id',
					'count(SemisTeachers2010.school_id) as count'
				);
				
				$options['group'] = array(
					'SemisCodeDistrict.district',
					//'SemisTeachers2010.place_of_domicile',
					//'SemisTeachers2010.designation_id',
					//'SemisTeachers2010.qualification_id',
					//'SemisTeachers2010.training_funding_agency',
					'SemisTeachers2010.training_id',
					'SemisTeachers2010.gender_id',
				);
				
				$query_final = $this->SemisTeachers2010->find('all', $options);
				//debug($query_final);
				$this->set('query_final',$query_final);
				$this->set('report','list');
			}
			
		}
		
		function uc_based_query($report = null,$district_id = null, $tehsil_id = null, $uc_id = null, $level = null, $download = null)
		{
			if($report == null)
			{
				// Get All District
				$districts = $this->SemisCodeDistrict->find('all');
				$this->set('districts',$districts);
				$this->set('view','view');
			}
			
			
			if($report == 'report')
			{
			// debug($download	);
			if($download == 1)
			{
				// debug($download	);
				$this->RequestHandler->setContent('xls', 'application/vnd.ms-excel'); 
				$this->layout = "xls";
					
				if(isset($this->params["url"]["start_day"]))
				{
					// debug($download	);
					$startDate = $this->params["url"]["start_year"]."-". $this->params["url"]["start_month"]."-". $this->params["url"]["start_day"]." 00:00:00";
					$endDate = $this->params["url"]["end_year"]."-". $this->params["url"]["end_month"]."-". $this->params["url"]["end_day"]." 59:59:59";			
					
					$this->Set("startDate",$this->params["url"]["start_day"]);
					$this->Set("startYear",$this->params["url"]["start_year"]);
					$this->Set("startMonth",$this->params["url"]["start_month"]);
					
					$this->Set("endDate",$this->params["url"]["end_day"]);
					$this->Set("endYear",$this->params["url"]["end_year"]);
					$this->Set("endMonth",$this->params["url"]["end_month"]);
				}
				else
				{
					// debug($download	);
					$startDate = date("Y-m")."-1 00:00:00";
					$endDate = date("Y-m")."-31 24:60:60";
					
					$this->Set("startDate","1");
					$this->Set("startYear",date("Y"));
					$this->Set("startMonth",date("m"));
					
					$this->Set("endDate","31");
					$this->Set("endYear",date("Y"));
					$this->Set("endMonth",date("m"));
				}
				
				$this->set("filename","UC_Based_Query");
				
				$this->set('download',1);
			}else
			{
				$this->set('report',$report);
				$this->set('district_id',$district_id);
				$this->set('tehsil_id',$tehsil_id);
				$this->set('uc_id',$uc_id);
				$this->set('level',$level);
			}
				//$district_id
				//$tehsil_id = 
				//$uc_id = 
				//$level = 
				
				
				if(!($district_id == null))
				{
					$conditions['semisUniversal2010.district_id'] = $district_id;
					$conditions2['semisUniversal2010.district_id'] = $district_id;
				}
				if(!($tehsil_id == null))
				{
					$this_district_tehsil = $this->semisCodesDistrictTehsil->find('first',array('conditions'=>array('tehsil_id'=>$tehsil_id)));
					$this->set('this_district_tehsil',$this_district_tehsil);
					$conditions['semisUniversal2010.tehsil_id'] = $tehsil_id;
					$conditions2['semisUniversal2010.tehsil_id'] = $tehsil_id;
				}
				if(!($uc_id == null))
				{
					$this_uc = $this->SemisCodeUc->find('first',array('conditions'=>array('uc_id'=>$uc_id)));
					$this->set('this_uc',$this_uc);
					$conditions['semisUniversal2010.union_council_id'] = $uc_id;
					$conditions2['semisUniversal2010.union_council_id'] = $uc_id;
				}
				
				// $school_types = array();
				// $school_types[] = 'GBPS';
				// $school_types[] = 'GGPS';
				// $school_types[] = 'GBELS';
				// $school_types[] = 'GGELS';
				// $school_types[] = 'GBLSS';
				// $school_types[] = 'GGLSS';
				
				
				// $conditions['semisUniversal2010.prefix'] = $school_types; 
				
				// $conditions2['semisUniversal2010.prefix'] = $school_types; 
				
				
				
				$table4conditions = $conditions;
				$table4conditions2 = $conditions;
				$table5conditions = $conditions;
				$table5conditions2 = $conditions;
				$table8conditions2 = array();
				$table8conditions3 = array();
				$table8conditions4 = array();
				$table8conditions2 = $conditions;
				$table8conditions3 = $conditions;
				$table8conditions4 = $conditions;
				

				
					
				$fields[] = 'count(semisUniversal2010.school_id) as school_count';
				$fields[] = 'sum(semisUniversal2010.total_teachers) as total_teachers';
				$fields[] = 'sum(SemisEnrollment2010.boys_total_enrollment) as boys_total';
				$fields[] = 'sum(SemisEnrollment2010.girls_total_enrollment) as girls_total';
				$fields[] = 'sum(SemisEnrollment2010.total_enrollment) as total_enrollment';
				$fields[] = 'sum(semisUniversal2010.no_of_classroom) as total_classrooms';
				// $fields[] = 'semisUniversal2010.prefix';
				// $fields[] = 'SemisCodeSchoolGender.gen_type';
				// $fields[] = 'semisCodesDistrictTehsil.district';
				// $fields[] = 'semisCodesDistrictTehsil.tehsil';
				// $fields[] = 'SemisCodeUc.uc_name';
				
				//$group[] = 'semisUniversal2010.prefix';
				
				//Table 1 Queries
				$table1feilds = array();
				$table1feilds = $fields;
				$table1feilds[] = 'semisUniversal2010.prefix';
				// for Table 2 row 1 Non Functional
				$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
				
					$conditionstable1all = array();
					$conditionstable1all = $conditions2;
					$conditionstable1all['semisUniversal2010.status_id <'] = 5; 
					// debug($conditionstable1all);
					$table1allrows = $this->semisUniversal2010->find('all', array ('conditions'=>$conditionstable1all, 'fields'=>$table1feilds, 'group'=>'semisUniversal2010.prefix'));
					// debug($table1allrows);
					$this->set('table1allrows',$table1allrows);
				
				
				
				//Table 2 Queries
				
				// for Table 2 row 1 Non Functional
				$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
					$conditionstable2row1 = array();
					$conditionstable2row1 = $conditions2;
					$conditionstable2row1['semisUniversal2010.status_id >'] = 1; 
					$conditionstable2row1['semisUniversal2010.status_id <'] = 5; 
					// debug($conditionstable2row1);
					$table2Row1 = $this->semisUniversal2010->find('all', array ('conditions'=>$conditionstable2row1, 'fields'=>$fields));
					// debug($table2Row1);
					$this->set('table2Row1',$table2Row1);
					
					
					//for Table 2 row 2 Shelterless
					$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
					
					$conditionstable2row = array();
					$conditionstable2row = $conditions2;
					$conditionstable2row['semisUniversal2010.status_id'] = 1; 
					$conditionstable2row['semisUniversal2010.no_of_classroom'] = 0; 
					// debug($conditionstable2row);
					$table2Row2 = $this->semisUniversal2010->find('all', array ('conditions'=>$conditionstable2row, 'fields'=>$fields));
					// debug($table2Row1);
					$this->set('table2Row2',$table2Row2);
					
					
					
					// for Table 2 Row 3 1 Room Schools
					$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
					$conditionstable2row['semisUniversal2010.no_of_classroom'] = 1; 
					// debug($conditionstable2row);
					$table2Row3 = $this->semisUniversal2010->find('all', array ('conditions'=>$conditionstable2row, 'fields'=>$fields));
					// debug($table2Row3);
					$this->set('table2Row3',$table2Row3);
					
					
					//for Table 2 Row 4 2 Room School
					
					$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
					
					$conditionstable2row['semisUniversal2010.no_of_classroom'] = 2; 
					// debug($conditionstable2row);
					$table2Row4 = $this->semisUniversal2010->find('all', array ('conditions'=>$conditionstable2row, 'fields'=>$fields));
					// debug($table2Row4);
					$this->set('table2Row4',$table2Row4);
					
					
					
					//For Table 2 Row 5 3 Room Schools
					$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
					
					$conditionstable2row['semisUniversal2010.no_of_classroom'] = 3; 
					// debug($conditionstable2row);
					$table2Row5 = $this->semisUniversal2010->find('all', array ('conditions'=>$conditionstable2row, 'fields'=>$fields));
					// debug($table2Row5);
					$this->set('table2Row5',$table2Row5);
					
					
					
					//For Table 2 Row 6 - 4 Room School
					$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
					
					$conditionstable2row['semisUniversal2010.no_of_classroom'] = 4; 
					// debug($conditionstable2row);
					$table2Row6 = $this->semisUniversal2010->find('all', array ('conditions'=>$conditionstable2row, 'fields'=>$fields));
					// debug($table2Row6);
					$this->set('table2Row6',$table2Row6);
					
					
					
					
					//for table 2 Row 7 - 5 Room or More Schools
					$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
					
					$conditionstable2row['semisUniversal2010.no_of_classroom'] = 5; 
					$conditionstable2row['semisUniversal2010.no_of_classroom >'] = 5; 
					// debug($conditionstable2row);
					$table2Row7 = $this->semisUniversal2010->find('all', array ('conditions'=>$conditionstable2row, 'fields'=>$fields));
					// debug($table2Row7);
					$this->set('table2Row7',$table2Row7);
					
					

				
				//All Schools in UC
				$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
					
				// $conditions[] = 
				$options['conditions'] = $conditions;
				// $query_final = $this->semisUniversal2010->find('all', array ('conditions'=>$conditions, 'group'=>$group, 'fields'=>$fields));
				$query_final = $this->semisUniversal2010->find('all', array ('conditions'=>$conditions, 'fields'=>$fields));
				$this->set('query_final',$query_final);
				// debug($conditions);
				// debug($query_final);
				
				//5 rooms 5 teachers plus schools
				$conditions['semisUniversal2010.total_teachers >'] = 4;
				$conditions['SemisEnrollment2010.total_enrollment >'] = 149;
				$conditions['semisUniversal2010.no_of_classroom >'] = 4;
				$options['conditions'] = $conditions;
				$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
				// $room5teacher5 = $this->semisUniversal2010->find('all', array ('conditions'=>$conditions, 'group'=>$group, 'fields'=>$fields));
				$room5teacher5 = $this->semisUniversal2010->find('all', array ('conditions'=>$conditions, 'fields'=>$fields));
				$this->set('room5teacher5',$room5teacher5);
				// debug($room5teacher5);
				
				//4 rooms 4 teachers plus schools
				$conditions2['SemisEnrollment2010.total_enrollment >'] = 119;
				$conditions2['semisUniversal2010.total_teachers >'] = 3;
				$conditions2['semisUniversal2010.no_of_classroom'] = 4;
				$options['conditions'] = $conditions;
				//debug($options);
				$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
				// $room4teacher4 = $this->semisUniversal2010->find('all', array ('conditions'=>$conditions, 'group'=>$group, 'fields'=>$fields));
				$room4teacher4 = $this->semisUniversal2010->find('all', array ('conditions'=>$conditions2, 'fields'=>$fields));
				$this->set('room4teacher4',$room4teacher4);
				// debug($room4teacher4);
				
				//3 rooms 3 teachers plus schools
				$conditions2['SemisEnrollment2010.total_enrollment >'] = 89;
				$conditions2['semisUniversal2010.total_teachers >'] = 2;
				$conditions2['semisUniversal2010.no_of_classroom'] = 3;
				$options['conditions'] = $conditions;
				
				$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
				// $room3teacher3 = $this->semisUniversal2010->find('all', array ('conditions'=>$conditions, 'group'=>$group, 'fields'=>$fields));
				$room3teacher3 = $this->semisUniversal2010->find('all', array ('conditions'=>$conditions2, 'fields'=>$fields));
				$this->set('room3teacher3',$room3teacher3);
				// debug($room3teacher3);
				
				//2 rooms 2 teachers plus schools
				$conditions2['SemisEnrollment2010.total_enrollment >'] = 59;
				$conditions2['semisUniversal2010.total_teachers >'] = 1;
				$conditions2['semisUniversal2010.no_of_classroom'] = 2;
				$options['conditions'] = $conditions;
				
				$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
				// $room2teacher2 = $this->semisUniversal2010->find('all', array ('conditions'=>$conditions, 'group'=>$group, 'fields'=>$fields));
				$room2teacher2 = $this->semisUniversal2010->find('all', array ('conditions'=>$conditions2, 'fields'=>$fields));
				$this->set('room2teacher2',$room2teacher2);
				// debug($room2teacher2);
				
				//1 rooms 1 teachers plus schools
				$conditions2['SemisEnrollment2010.total_enrollment >'] = 29;
				$conditions2['semisUniversal2010.total_teachers >'] = 0;
				$conditions2['semisUniversal2010.no_of_classroom'] = 1;
				$options['conditions'] = $conditions;
				
				$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
				// $room1teacher1 = $this->semisUniversal2010->find('all', array ('conditions'=>$conditions, 'group'=>$group, 'fields'=>$fields));
				
				$room1teacher1 = $this->semisUniversal2010->find('all', array ('conditions'=>$conditions2, 'fields'=>$fields));
				$this->set('room1teacher1',$room1teacher1);
				// debug($conditions2);
				// debug($room1teacher1);
				
				
				
				/******************************************************************************************************************************************************/
	/******************************************************************************************************************************************************/
	/******************************************************************************************************************************************************/
	/**************************************************Table 4 of The UC Based Query***********************************************************************/
	/******************************************************************************************************************************************************/
	/******************************************************************************************************************************************************/				
				
				//5 rooms 5 teachers plus schools
				$table4conditions['semisUniversal2010.total_teachers >'] = 4;
				$table4conditions['SemisEnrollment2010.total_enrollment >'] = 99;
				$table4conditions['semisUniversal2010.no_of_classroom >'] = 4;
				$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
				$table4row6 = $this->semisUniversal2010->find('all', array ('conditions'=>$table4conditions, 'fields'=>$fields));
				$this->set('table4row6',$table4row6);
				// debug($table4row6);
				
				//4 rooms 4 teachers plus schools
				$table4conditions2['SemisEnrollment2010.total_enrollment >'] = 79;
				$table4conditions2['semisUniversal2010.total_teachers >'] = 3;
				$table4conditions2['semisUniversal2010.no_of_classroom'] = 4;
				$options['conditions'] = $conditions;
				//debug($options);
				$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
				$table4row5 = $this->semisUniversal2010->find('all', array ('conditions'=>$table4conditions2, 'fields'=>$fields));
				$this->set('table4row5',$table4row5);
				// debug($table4row5);
				
				//3 rooms 3 teachers plus schools
				$table4conditions2['SemisEnrollment2010.total_enrollment >'] = 59;
				$table4conditions2['semisUniversal2010.total_teachers >'] = 2;
				$table4conditions2['semisUniversal2010.no_of_classroom'] = 3;
				$options['conditions'] = $conditions;
				
				$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
				$table4row4 = $this->semisUniversal2010->find('all', array ('conditions'=>$table4conditions2, 'fields'=>$fields));
				$this->set('table4row4',$table4row4);
				// debug($table4row4);
				
				//2 rooms 2 teachers plus schools
				$table4conditions2['SemisEnrollment2010.total_enrollment >'] = 39;
				$table4conditions2['semisUniversal2010.total_teachers >'] = 1;
				$table4conditions2['semisUniversal2010.no_of_classroom'] = 2;
				$options['conditions'] = $conditions;
				
				$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
						'School' => array(
							'className'  => '',
							'conditions'  => "School.code = semisUniversal2010.school_id",
							'foreignKey' => ''
						)
					)));
				$table4row3 = $this->semisUniversal2010->find('all', array ('conditions'=>$table4conditions2, 'fields'=>$fields));
				$this->set('table4row3',$table4row3);
				// debug($table4row3);
				
				//1 rooms 1 teachers plus schools
				$table4conditions2['SemisEnrollment2010.total_enrollment >'] = 19;
				$table4conditions2['semisUniversal2010.total_teachers >'] = 0;
				$table4conditions2['semisUniversal2010.no_of_classroom'] = 1;
				$options['conditions'] = $conditions;
				
				$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
				// $room1teacher1 = $this->semisUniversal2010->find('all', array ('conditions'=>$conditions, 'group'=>$group, 'fields'=>$fields));
				
				$table4row2 = $this->semisUniversal2010->find('all', array ('conditions'=>$table4conditions2, 'fields'=>$fields));
				$this->set('table4row2',$table4row2);
				// debug($table4conditions2);
				// debug($table4row2);
				
				
				//Shelterless 1 teachers plus schools
				$table4conditions2['SemisEnrollment2010.total_enrollment >'] = 19;
				$table4conditions2['semisUniversal2010.total_teachers >'] = 0;
				$table4conditions2['semisUniversal2010.no_of_classroom'] = 0;
				$options['conditions'] = $conditions;
				
				$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
				// $room1teacher1 = $this->semisUniversal2010->find('all', array ('conditions'=>$conditions, 'group'=>$group, 'fields'=>$fields));
				
				$table4row1 = $this->semisUniversal2010->find('all', array ('conditions'=>$table4conditions2, 'fields'=>$fields));
				$this->set('table4row1',$table4row1);
				// debug($table4conditions2);
				// debug($table4row1);
				
	/******************************************************************************************************************************************************/
	/******************************************************************************************************************************************************/
	/******************************************************************************************************************************************************/
	/**************************************************Table 4 of The UC Based Query***********************************************************************/
	/******************************************************************************************************************************************************/
	/******************************************************************************************************************************************************/
	

	
	/******************************************************************************************************************************************************/
	/******************************************************************************************************************************************************/
	/******************************************************************************************************************************************************/
	/**************************************************Table 5 of The UC Based Query***********************************************************************/
	/******************************************************************************************************************************************************/
	/******************************************************************************************************************************************************/				
				
				//Shelterless 1 teachers plus schools
				$table5conditions2['semisUniversal2010.total_teachers >'] = 0;
				$table5conditions2['semisUniversal2010.no_of_classroom'] = 0;
				$options['conditions'] = $conditions;
				
				$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
				// $room1teacher1 = $this->semisUniversal2010->find('all', array ('conditions'=>$conditions, 'group'=>$group, 'fields'=>$fields));
				
				$table5row1 = $this->semisUniversal2010->find('all', array ('conditions'=>$table5conditions2, 'fields'=>$fields));
				$this->set('table5row1',$table5row1);
				// debug($table5conditions2);
				// debug($table5row1);
				
				
				//5 rooms 5 teachers plus schools
				$table5conditions['semisUniversal2010.total_teachers >'] = 4;
				$table5conditions['semisUniversal2010.no_of_classroom >'] = 4;
				$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
				$table5row6 = $this->semisUniversal2010->find('all', array ('conditions'=>$table5conditions, 'fields'=>$fields));
				$this->set('table5row6',$table5row6);
				// debug($table5row6);
				
				//4 rooms 4 teachers plus schools
				$table5conditions2['semisUniversal2010.total_teachers >'] = 3;
				$table5conditions2['semisUniversal2010.no_of_classroom'] = 4;
				$options['conditions'] = $conditions;
				//debug($options);
				$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
				$table5row5 = $this->semisUniversal2010->find('all', array ('conditions'=>$table5conditions2, 'fields'=>$fields));
				$this->set('table5row5',$table5row5);
				// debug($table5row5);
				
				//3 rooms 3 teachers plus schools
				$table5conditions2['semisUniversal2010.total_teachers >'] = 2;
				$table5conditions2['semisUniversal2010.no_of_classroom'] = 3;
				$options['conditions'] = $conditions;
				
				$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
				$table5row4 = $this->semisUniversal2010->find('all', array ('conditions'=>$table5conditions2, 'fields'=>$fields));
				$this->set('table5row4',$table5row4);
				// debug($table5row4);
				
				//2 rooms 2 teachers plus schools
				$table5conditions2['semisUniversal2010.total_teachers >'] = 1;
				$table5conditions2['semisUniversal2010.no_of_classroom'] = 2;
				$options['conditions'] = $conditions;
				
				$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
				$table5row3 = $this->semisUniversal2010->find('all', array ('conditions'=>$table5conditions2, 'fields'=>$fields));
				$this->set('table5row3',$table5row3);
				// debug($table5row3);
				
				//1 rooms 1 teachers plus schools
				$table5conditions2['semisUniversal2010.total_teachers >'] = 0;
				$table5conditions2['semisUniversal2010.no_of_classroom'] = 1;
				$options['conditions'] = $conditions;
				
				$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
					)));
				// $room1teacher1 = $this->semisUniversal2010->find('all', array ('conditions'=>$conditions, 'group'=>$group, 'fields'=>$fields));
				
				$table5row2 = $this->semisUniversal2010->find('all', array ('conditions'=>$table5conditions2, 'fields'=>$fields));
				$this->set('table5row2',$table5row2);
				// debug($table5conditions2);
				// debug($table5row2);
				
				
				
				
	/******************************************************************************************************************************************************/
	/******************************************************************************************************************************************************/
	/******************************************************************************************************************************************************/
	/**************************************************Table 5 of The UC Based Query***********************************************************************/
	/******************************************************************************************************************************************************/
	/******************************************************************************************************************************************************/
	
	
	/******************************************************************************************************************************************************/
	/******************************************************************************************************************************************************/
	/******************************************************************************************************************************************************/
	/**************************************************Table 6 of The UC Based Query***********************************************************************/
	/******************************************************************************************************************************************************/
	/******************************************************************************************************************************************************/				
				
				$table6fields[] = 'semisUniversal2010.school_id';
				$table6fields[] = 'semisUniversal2010.prefix';
				$table6fields[] = 'semisUniversal2010.school_name';
				$table6fields[] = 'semisUniversal2010.total_teachers';
				$table6fields[] = 'SemisEnrollment2010.boys_total_enrollment';
				$table6fields[] = 'SemisEnrollment2010.girls_total_enrollment';
				$table6fields[] = 'SemisEnrollment2010.total_enrollment';
				$table6fields[] = 'semisUniversal2010.no_of_classroom';
				$table6fields[] = 'School.latitude';
				$table6fields[] = 'School.longitude';
				$table6fields[] = 'School.type';
				$table6conditions2 = array();
				$table6conditions2 = $conditions;
				//List of Schools with 5 teachers or more
				$table6conditions2['semisUniversal2010.total_teachers >'] = 4;
				$table6conditions2['semisUniversal2010.no_of_classroom >'] = 4;
				$options['conditions'] = $conditions;
				
				$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
						'School' => array(
							'className'  => '',
							'conditions'  => "School.code = semisUniversal2010.school_id",
							'foreignKey' => ''
						)
					)));
				// $room1teacher1 = $this->semisUniversal2010->find('all', array ('conditions'=>$conditions, 'group'=>$group, 'fields'=>$fields));
				
				$table6rows = $this->semisUniversal2010->find('all', array ('conditions'=>$table6conditions2, 'fields'=>$table6fields));
				$this->set('table6rows',$table6rows);
				// debug($table6conditions2);
				// debug($table6rows);
				
				
				
				
				
				
				
	/******************************************************************************************************************************************************/
	/******************************************************************************************************************************************************/
	/******************************************************************************************************************************************************/
	/**************************************************Table 6 of The UC Based Query***********************************************************************/
	/******************************************************************************************************************************************************/
	/******************************************************************************************************************************************************/				
	
	
		/******************************************************************************************************************************************************/
	/******************************************************************************************************************************************************/
	/******************************************************************************************************************************************************/
	/**************************************************Table 8 of The UC Based Query***********************************************************************/
	/******************************************************************************************************************************************************/
	/******************************************************************************************************************************************************/				
				
				$table8fields[] = 'semisUniversal2010.school_id';
				$table8fields[] = 'semisUniversal2010.prefix';
				$table8fields[] = 'semisUniversal2010.school_name';
				$table8fields[] = 'semisUniversal2010.total_teachers';
				$table8fields[] = 'SemisEnrollment2010.boys_total_enrollment';
				$table8fields[] = 'SemisEnrollment2010.girls_total_enrollment';
				$table8fields[] = 'SemisEnrollment2010.total_enrollment';
				$table8fields[] = 'semisUniversal2010.no_of_classroom';
				$table8fields[] = 'School.latitude';
				$table8fields[] = 'School.longitude';
				$table8fields[] = 'School.type';
				$table8conditions2['semisUniversal2010.prefix like'] = '%GB%';
				$table8conditions3['semisUniversal2010.prefix like'] = '%GG%';
				$table8conditions4['semisUniversal2010.prefix like'] = '%G%';
				//Best Schools in UC
				$order[] = 'semisUniversal2010.total_teachers desc';
				$order[] = 'semisUniversal2010.no_of_classroom desc';
				$order[] = 'semisUniversal2010.no_of_classroom desc';
				
				$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
						'School' => array(
							'className'  => '',
							'conditions'  => "School.code = semisUniversal2010.school_id",
							'foreignKey' => ''
						)
					)));
				// $room1teacher1 = $this->semisUniversal2010->find('all', array ('conditions'=>$conditions, 'group'=>$group, 'fields'=>$fields));
				
				$table8boysrows = $this->semisUniversal2010->find('all', array ('conditions'=>$table8conditions2, 'fields'=>$table8fields, 'order'=>$order));
				$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
						'School' => array(
							'className'  => '',
							'conditions'  => "School.code = semisUniversal2010.school_id",
							'foreignKey' => ''
						)
					)));
				$table8girlsrows = $this->semisUniversal2010->find('all', array ('conditions'=>$table8conditions3, 'fields'=>$table8fields, 'order'=>$order));
				$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
						'School' => array(
							'className'  => '',
							'conditions'  => "School.code = semisUniversal2010.school_id",
							'foreignKey' => ''
						)
					)));
				$table8mixrows = $this->semisUniversal2010->find('all', array ('conditions'=>$table8conditions4, 'fields'=>$table8fields, 'order'=>$order));
				
				$this->set('table8boysrows',$table8boysrows);
				$this->set('table8girlsrows',$table8girlsrows);
				$this->set('table8mixrows',$table8mixrows);
				// debug($table8conditions2);
				// debug($table8rows);
				
				
				
				
				
				
				
	/******************************************************************************************************************************************************/
	/******************************************************************************************************************************************************/
	/******************************************************************************************************************************************************/
	/**************************************************Table 8 of The UC Based Query***********************************************************************/
	/******************************************************************************************************************************************************/
	/******************************************************************************************************************************************************/				
	
				
				
				$this->set('report',$report);
				
				
			}
		}
		
		
		function report_cluster_status($report = null, $id = null, $download = null)
		{
			
			if($report == "report")
			{
					$this->ClusterForReport->bindModel(
						array('hasOne' => array(
						'semisUniversal2010' => array(
							'className'  => '',
							'conditions'  => 'semisUniversal2010.school_id = ClusterForReport.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = ClusterForReport.taluka_id",
							'foreignKey' => ''
						),
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = ClusterForReport.school_id',
							'foreignKey' => ''
						)
					)));
					$fields = array();
					$fields[] = "ClusterForReport.school_id";
					$fields[] = "ClusterForReport.guide";
					$fields[] = "ClusterForReport.cluster_id";
					// $fields[] = "semisUniversal2010.";
					$fields[] = "semisCodesDistrictTehsil.district";
					$fields[] = "semisCodesDistrictTehsil.tehsil";
					$fields[] = "SemisEnrollment2010.boys_total_enrollment";
					$fields[] = "SemisEnrollment2010.girls_total_enrollment";
					$fields[] = "SemisEnrollment2010.total_enrollment";
					$fields[] = "semisUniversal2010.total_teachers";
					$fields[] = "semisUniversal2010.no_of_classroom";
					$fields[] = "semisUniversal2010.prefix";
					$fields[] = "semisUniversal2010.status_id";
					$fields[] = "semisUniversal2010.school_name";
					// debug($id);
					$this_report_schools = $this->ClusterForReport->find('all', array ('conditions'=>array('ClusterForReport.taluka_id'=>$id), 'fields'=>$fields));
					// debug($this_report_schools);
					$this->set("this_report_schools",$this_report_schools);
					
					$this->set("report","report");
					
					//Set Download Layout for Report
					if($download == 1)
			{
				// debug($download	);
				$this->RequestHandler->setContent('xls', 'application/vnd.ms-excel'); 
				$this->layout = "xls";
					
				if(isset($this->params["url"]["start_day"]))
				{
					// debug($download	);
					$startDate = $this->params["url"]["start_year"]."-". $this->params["url"]["start_month"]."-". $this->params["url"]["start_day"]." 00:00:00";
					$endDate = $this->params["url"]["end_year"]."-". $this->params["url"]["end_month"]."-". $this->params["url"]["end_day"]." 59:59:59";			
					
					$this->Set("startDate",$this->params["url"]["start_day"]);
					$this->Set("startYear",$this->params["url"]["start_year"]);
					$this->Set("startMonth",$this->params["url"]["start_month"]);
					
					$this->Set("endDate",$this->params["url"]["end_day"]);
					$this->Set("endYear",$this->params["url"]["end_year"]);
					$this->Set("endMonth",$this->params["url"]["end_month"]);
				}
				else
				{
					// debug($download	);
					$startDate = date("Y-m")."-1 00:00:00";
					$endDate = date("Y-m")."-31 24:60:60";
					
					$this->Set("startDate","1");
					$this->Set("startYear",date("Y"));
					$this->Set("startMonth",date("m"));
					
					$this->Set("endDate","31");
					$this->Set("endYear",date("Y"));
					$this->Set("endMonth",date("m"));
				}
				
				$this->set("filename","Cluster Report");
				
				$this->set('download',1);
			}
					
			
			}else
			{
				$clusterDistricts = $this->ClusterForReport->find('all',array('fields'=>'DISTINCT taluka_id'));
				// debug($clusterDistricts);
				$clusterIds = array();
				
				foreach($clusterDistricts as $clusterDistrict)
				{
					$clusterIds[] = $clusterDistrict['ClusterForReport']['taluka_id'];
				}
				// debug($clusterIds);
				$districts = $this->semisCodesDistrictTehsil->find('all',array('conditions'=>array('tehsil_id'=>$clusterIds)));
				// debug($districts);
				$this->set("report","page");
				$this->set('districts',$districts);
			}
		}
		
		function hub_school($type = null, $no_of_schools = null, $school_level = null, $gender = null, $district_id = null, $teachers_limit = null, $enrollment_limit = null, $library = null, $pground = null, $download = null)
		{
			
		if($download == 1)
		{
			$this->RequestHandler->setContent('xls', 'application/vnd.ms-excel'); 
				$this->layout = "xls";
				
				if(isset($this->params["url"]["start_day"]))
			{
				$startDate = $this->params["url"]["start_year"]."-". $this->params["url"]["start_month"]."-". $this->params["url"]["start_day"]." 00:00:00";
				$endDate = $this->params["url"]["end_year"]."-". $this->params["url"]["end_month"]."-". $this->params["url"]["end_day"]." 59:59:59";			
				
				$this->Set("startDate",$this->params["url"]["start_day"]);
				$this->Set("startYear",$this->params["url"]["start_year"]);
				$this->Set("startMonth",$this->params["url"]["start_month"]);
				
				$this->Set("endDate",$this->params["url"]["end_day"]);
				$this->Set("endYear",$this->params["url"]["end_year"]);
				$this->Set("endMonth",$this->params["url"]["end_month"]);
			}
			else
			{
				$startDate = date("Y-m")."-1 00:00:00";
				$endDate = date("Y-m")."-31 24:60:60";
				
				$this->Set("startDate","1");
				$this->Set("startYear",date("Y"));
				$this->Set("startMonth",date("m"));
				
				$this->Set("endDate","31");
				$this->Set("endYear",date("Y"));
				$this->Set("endMonth",date("m"));
			}
			
			$this->set("filename","HUBSchoolSuggestions");
			
			
			
		}else
		{
			$this->set('type',$type);
			$this->set('no_of_schools',$no_of_schools);
			$this->set('school_level',$school_level);
			$this->set('gender',$gender);
			$this->set('district_id',$district_id);
			$this->set('teachers_limit',$teachers_limit);
			$this->set('enrollment_limit',$enrollment_limit);
			$this->set('library',$library);
			$this->set('pground',$pground);
			$this->set('download',$download);
		}
			
			if($type == null)
			{
				$district = $this->SemisCodeDistrict->find('all');
				$this->set("districts",$district);
				$this->set("type","filters");
			}
			
			if($type == "report")
			{
				$conditions = array();
				
				//condition for Gender of Schools
				if($gender == "boys")
				{
					$sql = array();
					$sql[] = array('semisUniversal2010.prefix LIKE' => '%GB%');
					$conditions['OR'] = $sql;
				}
				if($gender == "girls")
				{
					$sql = array();
					$sql[] = array('semisUniversal2010.prefix LIKE' => '%GG%');
					$conditions['OR'] = $sql;
				}
				
				if($school_level == 'primary')
				{
					$sql = array();
					$sql[] = array('semisUniversal2010.prefix LIKE' => '%GGP%');
					$sql[] = array('semisUniversal2010.prefix LIKE' => '%GBP%');
					$conditions['OR'] = $sql;
				}
				
				if($school_level == 'middle')
				{
					$sql = array();
					$sql[] = array('semisUniversal2010.prefix LIKE' => '%GGM%');
					$sql[] = array('semisUniversal2010.prefix LIKE' => '%GBM%');
					$conditions['OR'] = $sql;
				}
				
				if($school_level == 'elementary')
				{
					$sql = array();
					$sql[] = array('semisUniversal2010.prefix LIKE' => '%GGEL%');
					$sql[] = array('semisUniversal2010.prefix LIKE' => '%GBEL%');
					$conditions['OR'] = $sql;
				}
				
				if($school_level == 'high')
				{
					$sql = array();
					$sql[] = array('semisUniversal2010.prefix' => 'GGHS');
					$sql[] = array('semisUniversal2010.prefix' => 'GBHS');
					$conditions['OR'] = $sql;
				}
				
				if($school_level == 'highsec')
				{
					$sql = array();
					$sql[] = array('semisUniversal2010.prefix LIKE' => '%GGHSS%');
					$sql[] = array('semisUniversal2010.prefix LIKE' => '%GBHSS%');
					$conditions['OR'] = $sql;
				}
				
				
				$schools_list = array();
				// debug($district_id);
				if($district_id == "all")
				{
					$ucs = $this->SemisCodeUc->find('all');
				}else
				{
					$ucs = $this->SemisCodeUc->find('all', array('conditions'=>array('district_id'=>$district_id)));
				}
				$x = 1;
				foreach ($ucs as $uc)
				{
					$conditions['semisUniversal2010.union_council_id'] = $uc['SemisCodeUc']['uc_id'];
					$group[] = 'semisUniversal2010.no_of_classroom desc';
					$group[] = 'semisUniversal2010.total_teachers desc';
					$group[] = 'SemisEnrollment2010.total_enrollment desc';
					
					
					$table6fields[] = 'semisUniversal2010.school_id';
					$table6fields[] = 'semisUniversal2010.prefix';
					$table6fields[] = 'semisUniversal2010.school_name';
					$table6fields[] = 'semisUniversal2010.gender_id';
					$table6fields[] = 'semisUniversal2010.total_teachers';
					$table6fields[] = 'semisUniversal2010.library';
					$table6fields[] = 'semisUniversal2010.pground';
					$table6fields[] = 'semisUniversal2010.level_id';
					$table6fields[] = 'SemisEnrollment2010.boys_total_enrollment';
					$table6fields[] = 'SemisEnrollment2010.girls_total_enrollment';
					$table6fields[] = 'SemisEnrollment2010.total_enrollment';
					$table6fields[] = 'semisUniversal2010.no_of_classroom';
					$table6fields[] = 'SemisCodeSchoolGender.gen_type';
					$table6fields[] = 'SemisCodeUc.uc_name';
					$table6fields[] = 'semisCodesDistrictTehsil.district';
					$table6fields[] = 'semisCodesDistrictTehsil.tehsil';
					$table6fields[] = 'School.latitude';
					$table6fields[] = 'School.longitude';
					$table6fields[] = 'School.type';
					$table6conditions2 = array();
					$table6conditions2 = $conditions;
					//List of Schools with 5 teachers or more
					
					$table6conditions2['semisUniversal2010.total_teachers >'] = $teachers_limit;
					
					if($enrollment_limit != "nf")
					{
						$table6conditions2['SemisEnrollment2010.total_enrollment >'] = $enrollment_limit;
					}
					if($library != "nf")
					{
						$table6conditions2['semisUniversal2010.library'] = $library;
					}
					if($pground != "nf")
					{
						$table6conditions2['semisUniversal2010.pground'] = $pground;
					}
					// $table6conditions2['semisUniversal2010.no_of_classroom >'] = 4;
					// $options['conditions'] = $conditions;
					
					$this->semisUniversal2010->bindModel(
							array('hasOne' => array(
							'SemisEnrollment2010' => array(
								'className'  => '',
								'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
								'foreignKey' => ''
							),
							'semisCodesDistrictTehsil' => array(
								'className'  => '',
								'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
								'foreignKey' => ''
							),
							'SemisCodeUc' => array(
								'className'  => '',
								'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
								'foreignKey' => ''
							),
							'SemisCodeSchoolGender' => array(
								'className'  => '',
								'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
								'foreignKey' => ''
							),
							'School' => array(
								'className'  => '',
								'conditions'  => "School.code = semisUniversal2010.school_id",
								'foreignKey' => ''
							)
						// ),
						// 'hasMany' =>array(
							// 'SemisTeachers2010' => array(
								// 'className'  => '',
								// 'conditions'  => array('SemisTeachers2010.school_id = semisUniversal2010.school_id'),
								// 'foreignKey' => false
							// )
						)));
					
					$table6rows = $this->semisUniversal2010->find('all', array ('conditions'=>$table6conditions2, 'fields'=>$table6fields, 'group'=>$group, 'limit' => $no_of_schools));
					$schools_list[$x]['uc'] = $uc['SemisCodeUc']['uc_name'];
					foreach($table6rows as $table6row)
					{
						$schools_list[$x]['schools'][] = $table6row;
					}
					$x++;
					
				}
				// debug($schools_list);
				$this->set("schools_list",$schools_list);
				$this->set("download",$download);
				$this->set("type","report");
			
			}
		}
		
		function ajax_schools()
		{
					$fields2[] = 'semisCodesDistrictTehsil.district';
					$fields2[] = 'semisCodesDistrictTehsil.tehsil';
					$fields2[] = 'semisCodesDistrictTehsil.tehsil_id';
					
					$districts = $this->SemisCodeDistrict->find('all');
					$tehsils = $this->semisCodesDistrictTehsil->find('all', array ('fields'=>$fields2));
					
					
					$fields2[] = 'SemisCodeUc.uc_name';
					$fields2[] = 'SemisCodeUc.uc_id';
					$this->SemisCodeUc->bindModel(
								array('hasOne' => array(
								'semisCodesDistrictTehsil' => array(
									'className'  => '',
									'conditions'  => "semisCodesDistrictTehsil.tehsil_id = SemisCodeUc.tehsil_id",
									'foreignKey' => ''
								)
								)));
					$ucs = $this->SemisCodeUc->find('all', array ('fields'=>$fields2));
					
					$this->set("districts",$districts);
					$this->set("tehsils",$tehsils);
					$this->set("ucs",$ucs);
					
					
					//for datatables
					
					//conditions array empty for now 
					$conditions = array();
					//fields to return
					$fields[] = 'semisUniversal2010.id';
					$fields[] = 'semisUniversal2010.prefix';
					$fields[] = 'semisUniversal2010.school_name';
					$fields[] = 'semisUniversal2010.school_id';
					$fields[] = 'semisUniversal2010.level_id';
					$fields[] = 'semisUniversal2010.gender_id';
					// $fields[] = 'DeviceRegistration.';
					$fields[] = 'semisCodesDistrictTehsil.district';
					$fields[] = 'semisCodesDistrictTehsil.tehsil';
					$fields[] = 'SemisCodeUc.uc_name';
					
					
					//order for results
					$order[] = 'semisUniversal2010.prefix desc';
					// $order[] = 'DeviceRegistration. desc';
					// $order[] = 'semisCodesDistrictTehsil. desc';
					$order[] = 'SemisCodeUc.uc_id desc';
					
					
					$this->semisUniversal2010->bindModel(
								array('hasOne' => array(
								'semisCodesDistrictTehsil' => array(
									'className'  => '',
									'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
									'foreignKey' => ''
								),
								'SemisCodeUc' => array(
									'className'  => '',
									'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
									'foreignKey' => ''
								),
								)));
					
					$results = $this->semisUniversal2010->find('all', array ('conditions'=>$conditions, 'fields'=>$fields, 'order'=>$order));
					$this->set('results',$results);
					
					
					
		}
		
		
		function my_schools($type = null, $id = null, $tehsil = null, $union_council = null, $level = null, $school_level = null, $semis_code = null)
		{
					
					
				if($type == null)
				{
					$this->layout = 'index';
				
					$districts = $this->SemisCodeDistrict->find('all');
					$this->set('districts',$districts);
					
					$this->set("page","filters");	
				}
				
				if($type == "results")
				{	
					//Conditions for results
					if($id != 0)
					{
						$conditions['semisUniversal2010.district_id'] = $id;
					}
					
					if($tehsil != 0 && $tehsil != null)
					{
						$conditions['semisUniversal2010.tehsil_id'] = $tehsil;
					}
					
					if($union_council != 0 && $union_council != null)
					{
						$conditions['semisUniversal2010.union_council_id'] = $union_council;
					}
					
					// if($level = null) 
					
					if($school_level != 0)
					{
						if($school_level == 1)
						{
								$sql = array();
								$sql[] = array('semisUniversal2010.prefix LIKE' => '%GBP%');
								$sql[] = array('semisUniversal2010.prefix LIKE' => '%GGP%');

							
							$conditions['OR'] = $sql;
							
							$this->set('school_level','primary');
						}
						
						if($school_level == 2)
						{
							$sql = array();
							$sql[] = array('semisUniversal2010.prefix LIKE' => '%GBM%');
							$sql[] = array('semisUniversal2010.prefix LIKE' => '%GGM%');

							
							$conditions['OR'] = $sql;
							
							
							$this->set('school_level','middle');
						}
						
						if($school_level == 3)
						{
							
							$sql = array();
							$sql[] = array('semisUniversal2010.prefix LIKE' => '%GBEL%');
							$sql[] = array('semisUniversal2010.prefix LIKE' => '%GGEL%');

							
							$conditions['OR'] = $sql;

							
							$this->set('school_level','elementary');
						}
						
						if($school_level == 4)
						{
							$sql = array();
							$sql[] = array('semisUniversal2010.prefix' => 'GBHS');
							$sql[] = array('semisUniversal2010.prefix' => 'GGHS');

							
							$conditions['OR'] = $sql;

							
							$this->set('school_level','high');
						}
						
						if($school_level == 5)
						{
							$sql = array();
							$sql[] = array('semisUniversal2010.prefix LIKE' => '%GBHSS%');
							$sql[] = array('semisUniversal2010.prefix LIKE' => '%GGHSS');

							
							$conditions['OR'] = $sql;

							
							$this->set('school_level','higher');
						}
					}
					
					if($semis_code != null)
					{
						// $conditions['semisUniversal2010.school_id'] = $semis_code;
					}
					
					
					//fields to return
					$fields[] = 'semisUniversal2010.id';
					$fields[] = 'semisUniversal2010.prefix';
					$fields[] = 'semisUniversal2010.school_name';
					$fields[] = 'semisUniversal2010.school_id';
					$fields[] = 'semisUniversal2010.level_id';
					$fields[] = 'semisUniversal2010.gender_id';
					// $fields[] = 'DeviceRegistration.';
					$fields[] = 'semisCodesDistrictTehsil.district';
					$fields[] = 'semisCodesDistrictTehsil.tehsil';
					$fields[] = 'SemisCodeUc.uc_name';
					
					
					//order for results
					$order[] = 'semisUniversal2010.prefix desc';
					// $order[] = 'DeviceRegistration. desc';
					// $order[] = 'semisCodesDistrictTehsil. desc';
					$order[] = 'SemisCodeUc.uc_id desc';
					
					
					$this->semisUniversal2010->bindModel(
								array('hasOne' => array(
								'semisCodesDistrictTehsil' => array(
									'className'  => '',
									'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
									'foreignKey' => ''
								),
								'SemisCodeUc' => array(
									'className'  => '',
									'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
									'foreignKey' => ''
								),
								)));
					
					// debug($conditions);
					// debug($fields);
					// debug($order);
					$results = $this->semisUniversal2010->find('all', array ('conditions'=>$conditions, 'fields'=>$fields, 'order'=>$order));
					$this->set('results',$results);
					$this->set("page","results");
					
					
				}
				
				if($type == "schoolDetail")
				{
					$this->set("page","schoolDetail");
				}
				
		}
		
		function update_uc_name_select($name = null, $filter_level = null, $id = null, $union_council = null, $rooms_cond = null, $rooms = null, $enrollment_cond = null, $enrollment = null, $functionality = null, $teachers_cond = null, $teachers = null, $download_report = null, $report_type = null)
		{
			
			if($name == 'tehsilName')
			{
				if($filter_level == 1)
				{
					if($id != "0")
					{
						echo "district_level";
						//the level of filter is District so all the ucs of the district must be shown in the dropdown
						$id_trimmed = trim($id);
						$id_final = "%".$id_trimmed."%";
						$district = $this->SemisCodeDistrict->find('first',array('conditions'=>array('district LIKE'=>$id_final)));
						
						$union_councils = $this->SemisCodeUc->find('all',array('conditions'=>array('district_id'=>$district["SemisCodeDistrict"]["district_id"])));
						$this->set('union_councils_names', $union_councils);		
					}
					if($id == "0")
					{
						
						echo "All district_level".$id;
						
						$union_councils = $this->SemisCodeUc->find('all');
						$this->set('union_councils_names', $union_councils);
					}
				}
				if($filter_level == 2)
				{
					$id_trimmed = trim($id);
					$id_final = "%".$id_trimmed."%";
					$tehsil = $this->semisCodesDistrictTehsil->find('first',array('conditions'=>array('tehsil LIKE'=>$id_final)));
					$union_councils = $this->SemisCodeUc->find('all',array('conditions'=>array('tehsil_id'=>$tehsil["semisCodesDistrictTehsil"]["tehsil_id"])));
					$this->set('union_councils_names', $union_councils);
				}
			}
		
		}
		
		
	function school_details($id = null, $download = null)
	{
		if(!($id == null))
		{
			if($download == 1)
			{
				$this->RequestHandler->setContent('xls', 'application/vnd.ms-excel'); 
					$this->layout = "xls";
				if(isset($this->params["url"]["start_day"]))
				{
					$startDate = $this->params["url"]["start_year"]."-". $this->params["url"]["start_month"]."-". $this->params["url"]["start_day"]." 00:00:00";
					$endDate = $this->params["url"]["end_year"]."-". $this->params["url"]["end_month"]."-". $this->params["url"]["end_day"]." 59:59:59";			
					
					$this->Set("startDate",$this->params["url"]["start_day"]);
					$this->Set("startYear",$this->params["url"]["start_year"]);
					$this->Set("startMonth",$this->params["url"]["start_month"]);
					
					$this->Set("endDate",$this->params["url"]["end_day"]);
					$this->Set("endYear",$this->params["url"]["end_year"]);
					$this->Set("endMonth",$this->params["url"]["end_month"]);
				}
				else
				{
					$startDate = date("Y-m")."-1 00:00:00";
					$endDate = date("Y-m")."-31 24:60:60";
					
					$this->Set("startDate","1");
					$this->Set("startYear",date("Y"));
					$this->Set("startMonth",date("m"));
					
					$this->Set("endDate","31");
					$this->Set("endYear",date("Y"));
					$this->Set("endMonth",date("m"));
				}
				$this->set("filename","School_detail");	
			}
			
			$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
						'SemisEnrollment2009' => array(
							'className'  => '',
							'conditions'  => "SemisEnrollment2009.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						),
						'semisUniversal2009' => array(
							'className'  => '',
							'conditions'  => "semisUniversal2009.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						),
						'semisUniversal2011' => array(
							'className'  => '',
							'conditions'  => "semisUniversal2011.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						),
						'SemisEnrollment2011' => array(
							'className'  => '',
							'conditions'  => "SemisEnrollment2011.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						),
						'Smc2011' => array(
							'className'  => '',
							'conditions'  => "Smc2011.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						),
						'Smc2009' => array(
							'className'  => 'Smc2009',
							'conditions'  => "Smc2009.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						),
						'SemisSmc2010' => array(
							'className'  => '',
							'conditions'  => "SemisSmc2010.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						),
						'SsbBudgetFinal' => array(
							'className'  => '',
							'conditions'  => "SsbBudgetFinal.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						)
					)));
				$school = $this->semisUniversal2010->find('first', array('conditions'=>array('semisUniversal2010.id'=>$id)));	
				$this->set('school', $school);
		}
	}
	

	function view_pdf($id = null, $district = null, $tehsil = null, $uc = null, $prefix = null, $name = null, $level = null, $gender = null, $ddo_code = null) 
    { 
        
		if(!($id == null))
		{
			if(!($id == "0"))
			{
				$conditions = array('semisUniversal2010.id' => $id);
			}else
			{
				if(!($district == "0"))
				{
					$sql[] = array('semisCodesDistrictTehsil.district LIKE' => '%'.$district.'%');
				}
				if(!($tehsil == "0"))
				{
					$sql[] = array('semisCodesDistrictTehsil.tehsil LIKE' => '%'.$tehsil.'%');
				}
				if(!($uc == "0"))
				{
					$sql[] = array('SemisCodeUc.uc_name LIKE' => '%'.$uc.'%');
				}
				if(!($prefix == "0"))
				{
					$sql[] = array('semisUniversal2010.prefix LIKE' => '%'.$prefix.'%');
				}
				if(!($name == "0"))
				{
					$sql[] = array('semisUniversal2010.school_name LIKE' => '%'.$name.'%');
				}
				if(!($level == "0"))
				{
					$sql[] = array('SemisCodeSchoolLevel.level_type LIKE' => '%'.$level.'%');
				}
				if(!($gender == "0"))
				{
					$sql[] = array('SemisCodeSchoolGender.gen_type LIKE' => '%'.$gender.'%');
				}
				if(!($ddo_code == "0"))
				{
					$sql[] = array('SsbBudgetFinal.ddo_code LIKE' => '%'.$ddo_code.'%');
				}
				$conditions['AND'] = $sql;
			}
			
			// $fields[] = 'count(semisUniversal2010.school_id) as school_count';
			// $fields[] = 'sum(semisUniversal2010.total_teachers) as total_teachers';
			$fields[] = 'SsbBudgetFinal.ddo_name';
			$fields[] = 'SsbBudgetFinal.ddo_code';
			$fields[] = 'SsbBudgetFinal.475_inclass';
			$fields[] = 'SsbBudgetFinal.476_library';
			$fields[] = 'SsbBudgetFinal.477_cocurricular';
			$fields[] = 'SsbBudgetFinal.478_sport';
			$fields[] = 'SsbBudgetFinal.479_ta';
			$fields[] = 'SsbBudgetFinal.480_stationary';
			$fields[] = 'SsbBudgetFinal.ssb_select';
			$fields[] = 'SsbBudgetFinal.total_teachers';
			$fields[] = 'SemisEnrollment2009.b_unadmit';
			$fields[] = 'SemisEnrollment2009.g_unadmit';
			$fields[] = 'SemisEnrollment2009.b_katchi';
			$fields[] = 'SemisEnrollment2009.g_katchi';
			$fields[] = 'SemisEnrollment2009.b1';
			$fields[] = 'SemisEnrollment2009.g1';
			$fields[] = 'SemisEnrollment2009.b2';
			$fields[] = 'SemisEnrollment2009.g2';
			$fields[] = 'SemisEnrollment2009.b3';
			$fields[] = 'SemisEnrollment2009.g3';
			$fields[] = 'SemisEnrollment2009.b4';
			$fields[] = 'SemisEnrollment2009.g4';
			$fields[] = 'SemisEnrollment2009.b5';
			$fields[] = 'SemisEnrollment2009.g5';
			$fields[] = 'SemisEnrollment2009.b6';
			$fields[] = 'SemisEnrollment2009.g6';
			$fields[] = 'SemisEnrollment2009.b7';
			$fields[] = 'SemisEnrollment2009.g7';
			$fields[] = 'SemisEnrollment2009.b8';
			$fields[] = 'SemisEnrollment2009.g8';
			$fields[] = 'SemisEnrollment2009.b9_general';
			$fields[] = 'SemisEnrollment2009.b9_computer';
			$fields[] = 'SemisEnrollment2009.b9_biology';
			$fields[] = 'SemisEnrollment2009.b9_commerce';
			$fields[] = 'SemisEnrollment2009.b9_other';
			$fields[] = 'SemisEnrollment2009.g9_general';
			$fields[] = 'SemisEnrollment2009.g9_computer';
			$fields[] = 'SemisEnrollment2009.g9_biology';
			$fields[] = 'SemisEnrollment2009.g9_commerce';
			$fields[] = 'SemisEnrollment2009.g9_other';
			$fields[] = 'SemisEnrollment2009.b10_general';
			$fields[] = 'SemisEnrollment2009.b10_computer';
			$fields[] = 'SemisEnrollment2009.b10_biology';
			$fields[] = 'SemisEnrollment2009.b10_commerce';
			$fields[] = 'SemisEnrollment2009.b10_other';
			$fields[] = 'SemisEnrollment2009.g10_general';
			$fields[] = 'SemisEnrollment2009.g10_computer';
			$fields[] = 'SemisEnrollment2009.g10_biology';
			$fields[] = 'SemisEnrollment2009.g10_commerce';
			$fields[] = 'SemisEnrollment2009.g10_other';
			$fields[] = 'SemisEnrollment2009.b11_general';
			$fields[] = 'SemisEnrollment2009.b11_computer';
			$fields[] = 'SemisEnrollment2009.b11_premedical';
			$fields[] = 'SemisEnrollment2009.b11_preengineering';
			$fields[] = 'SemisEnrollment2009.b11_commerce';
			$fields[] = 'SemisEnrollment2009.b11_other';
			$fields[] = 'SemisEnrollment2009.g11_general';
			$fields[] = 'SemisEnrollment2009.g11_computer';
			$fields[] = 'SemisEnrollment2009.g11_premedical';
			$fields[] = 'SemisEnrollment2009.g11_preengineering';
			$fields[] = 'SemisEnrollment2009.g11_commerce';
			$fields[] = 'SemisEnrollment2009.g11_other';
			$fields[] = 'SemisEnrollment2009.b12_general';
			$fields[] = 'SemisEnrollment2009.b12_computer';
			$fields[] = 'SemisEnrollment2009.b12_premedical';
			$fields[] = 'SemisEnrollment2009.b12_preengineering';
			$fields[] = 'SemisEnrollment2009.b12_commerce';
			$fields[] = 'SemisEnrollment2009.b12_other';
			$fields[] = 'SemisEnrollment2009.g12_general';
			$fields[] = 'SemisEnrollment2009.g12_computer';
			$fields[] = 'SemisEnrollment2009.g12_premedical';
			$fields[] = 'SemisEnrollment2009.g12_preengineering';
			$fields[] = 'SemisEnrollment2009.g12_commerce';
			$fields[] = 'SemisEnrollment2009.g12_other';
			$fields[] = 'SemisEnrollment2010.b_unadmit';
			$fields[] = 'SemisEnrollment2010.g_unadmit';
			$fields[] = 'SemisEnrollment2010.b_ec';
			$fields[] = 'SemisEnrollment2010.g_ec';
			$fields[] = 'SemisEnrollment2010.b_katchi';
			$fields[] = 'SemisEnrollment2010.g_katchi';
			$fields[] = 'SemisEnrollment2010.b1';
			$fields[] = 'SemisEnrollment2010.g1';
			$fields[] = 'SemisEnrollment2010.b2';
			$fields[] = 'SemisEnrollment2010.g2';
			$fields[] = 'SemisEnrollment2010.b3';
			$fields[] = 'SemisEnrollment2010.g3';
			$fields[] = 'SemisEnrollment2010.b4';
			$fields[] = 'SemisEnrollment2010.g4';
			$fields[] = 'SemisEnrollment2010.b5';
			$fields[] = 'SemisEnrollment2010.g5';
			$fields[] = 'SemisEnrollment2010.b6';
			$fields[] = 'SemisEnrollment2010.g6';
			$fields[] = 'SemisEnrollment2010.b7';
			$fields[] = 'SemisEnrollment2010.g7';
			$fields[] = 'SemisEnrollment2010.b8';
			$fields[] = 'SemisEnrollment2010.g8';
			$fields[] = 'SemisEnrollment2010.b9_general';
			$fields[] = 'SemisEnrollment2010.b9_computer';
			$fields[] = 'SemisEnrollment2010.b9_biology';
			$fields[] = 'SemisEnrollment2010.b9_commerce';
			$fields[] = 'SemisEnrollment2010.b9_other';
			$fields[] = 'SemisEnrollment2010.g9_general';
			$fields[] = 'SemisEnrollment2010.g9_computer';
			$fields[] = 'SemisEnrollment2010.g9_biology';
			$fields[] = 'SemisEnrollment2010.g9_commerce';
			$fields[] = 'SemisEnrollment2010.g9_other';
			$fields[] = 'SemisEnrollment2010.b10_general';
			$fields[] = 'SemisEnrollment2010.b10_computer';
			$fields[] = 'SemisEnrollment2010.b10_biology';
			$fields[] = 'SemisEnrollment2010.b10_commerce';
			$fields[] = 'SemisEnrollment2010.b10_other';
			$fields[] = 'SemisEnrollment2010.g10_general';
			$fields[] = 'SemisEnrollment2010.g10_computer';
			$fields[] = 'SemisEnrollment2010.g10_biology';
			$fields[] = 'SemisEnrollment2010.g10_commerce';
			$fields[] = 'SemisEnrollment2010.g10_other';
			$fields[] = 'SemisEnrollment2010.b11_general';
			$fields[] = 'SemisEnrollment2010.b11_computer';
			$fields[] = 'SemisEnrollment2010.b11_premedical';
			$fields[] = 'SemisEnrollment2010.b11_preengineering';
			$fields[] = 'SemisEnrollment2010.b11_commerce';
			$fields[] = 'SemisEnrollment2010.b11_other';
			$fields[] = 'SemisEnrollment2010.g11_general';
			$fields[] = 'SemisEnrollment2010.g11_computer';
			$fields[] = 'SemisEnrollment2010.g11_premedical';
			$fields[] = 'SemisEnrollment2010.g11_preengineering';
			$fields[] = 'SemisEnrollment2010.g11_commerce';
			$fields[] = 'SemisEnrollment2010.g11_other';
			$fields[] = 'SemisEnrollment2010.b12_general';
			$fields[] = 'SemisEnrollment2010.b12_computer';
			$fields[] = 'SemisEnrollment2010.b12_premedical';
			$fields[] = 'SemisEnrollment2010.b12_preengineering';
			$fields[] = 'SemisEnrollment2010.b12_commerce';
			$fields[] = 'SemisEnrollment2010.b12_other';
			$fields[] = 'SemisEnrollment2010.g12_general';
			$fields[] = 'SemisEnrollment2010.g12_computer';
			$fields[] = 'SemisEnrollment2010.g12_premedical';
			$fields[] = 'SemisEnrollment2010.g12_preengineering';
			$fields[] = 'SemisEnrollment2010.g12_commerce';
			$fields[] = 'SemisEnrollment2010.g12_other';
			$fields[] = 'SemisEnrollment2011.b_katchi';
			$fields[] = 'SemisEnrollment2011.g_katchi';
			$fields[] = 'SemisEnrollment2011.b1';
			$fields[] = 'SemisEnrollment2011.g1';
			$fields[] = 'SemisEnrollment2011.b2';
			$fields[] = 'SemisEnrollment2011.g2';
			$fields[] = 'SemisEnrollment2011.b3';
			$fields[] = 'SemisEnrollment2011.g3';
			$fields[] = 'SemisEnrollment2011.b4';
			$fields[] = 'SemisEnrollment2011.g4';
			$fields[] = 'SemisEnrollment2011.b5';
			$fields[] = 'SemisEnrollment2011.g5';
			$fields[] = 'SemisEnrollment2011.b6';
			$fields[] = 'SemisEnrollment2011.g6';
			$fields[] = 'SemisEnrollment2011.b7';
			$fields[] = 'SemisEnrollment2011.g7';
			$fields[] = 'SemisEnrollment2011.b8';
			$fields[] = 'SemisEnrollment2011.g8';
			$fields[] = 'SemisEnrollment2011.b9_general';
			$fields[] = 'SemisEnrollment2011.b9_computer';
			$fields[] = 'SemisEnrollment2011.b9_biology';
			$fields[] = 'SemisEnrollment2011.b9_commerce';
			$fields[] = 'SemisEnrollment2011.b9_other';
			$fields[] = 'SemisEnrollment2011.g9_general';
			$fields[] = 'SemisEnrollment2011.g9_computer';
			$fields[] = 'SemisEnrollment2011.g9_biology';
			$fields[] = 'SemisEnrollment2011.g9_commerce';
			$fields[] = 'SemisEnrollment2011.g9_other';
			$fields[] = 'SemisEnrollment2011.b10_general';
			$fields[] = 'SemisEnrollment2011.b10_computer';
			$fields[] = 'SemisEnrollment2011.b10_biology';
			$fields[] = 'SemisEnrollment2011.b10_commerce';
			$fields[] = 'SemisEnrollment2011.b10_other';
			$fields[] = 'SemisEnrollment2011.g10_general';
			$fields[] = 'SemisEnrollment2011.g10_computer';
			$fields[] = 'SemisEnrollment2011.g10_biology';
			$fields[] = 'SemisEnrollment2011.g10_commerce';
			$fields[] = 'SemisEnrollment2011.g10_other';
			$fields[] = 'SemisEnrollment2011.b11_general';
			$fields[] = 'SemisEnrollment2011.b11_computer';
			$fields[] = 'SemisEnrollment2011.b11_premedical';
			$fields[] = 'SemisEnrollment2011.b11_preengineering';
			$fields[] = 'SemisEnrollment2011.b11_commerce';
			$fields[] = 'SemisEnrollment2011.b11_other';
			$fields[] = 'SemisEnrollment2011.g11_general';
			$fields[] = 'SemisEnrollment2011.g11_computer';
			$fields[] = 'SemisEnrollment2011.g11_premedical';
			$fields[] = 'SemisEnrollment2011.g11_preengineering';
			$fields[] = 'SemisEnrollment2011.g11_commerce';
			$fields[] = 'SemisEnrollment2011.g11_other';
			$fields[] = 'SemisEnrollment2011.b12_general';
			$fields[] = 'SemisEnrollment2011.b12_computer';
			$fields[] = 'SemisEnrollment2011.b12_premedical';
			$fields[] = 'SemisEnrollment2011.b12_preengineering';
			$fields[] = 'SemisEnrollment2011.b12_commerce';
			$fields[] = 'SemisEnrollment2011.b12_other';
			$fields[] = 'SemisEnrollment2011.g12_general';
			$fields[] = 'SemisEnrollment2011.g12_computer';
			$fields[] = 'SemisEnrollment2011.g12_premedical';
			$fields[] = 'SemisEnrollment2011.g12_preengineering';
			$fields[] = 'SemisEnrollment2011.g12_commerce';
			$fields[] = 'SemisEnrollment2011.g12_other';
			$fields[] = 'Smc2009.is_functional';
			$fields[] = 'SemisSmc2010.is_functional_smc';
			$fields[] = 'SemisSmc2010.ac_no';
			$fields[] = 'SemisSmc2010.ac_title';
			$fields[] = 'SemisSmc2010.smc_balance_thirtyfirst_october';
			$fields[] = 'Smc2011.is_smc_func';
			$fields[] = 'Smc2011.ac_no';
			$fields[] = 'Smc2011.ac_title';
			$fields[] = 'Smc2011.bank_name';
			$fields[] = 'Smc2011.bank_branch';
			$fields[] = 'Smc2011.smc_chairman_name';
			$fields[] = 'Smc2011.smc_chairman_phone';
			$fields[] = 'SemisCodeUc.uc_name';
			$fields[] = 'semisCodesDistrictTehsil.district';
			$fields[] = 'semisCodesDistrictTehsil.tehsil';
			$fields[] = 'semisUniversal2011.*';
			$fields[] = 'semisUniversal2010.*';
			$fields[] = 'semisUniversal2009.*';
			
			$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
						'SemisEnrollment2009' => array(
							'className'  => '',
							'conditions'  => "SemisEnrollment2009.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						),
						'semisUniversal2009' => array(
							'className'  => '',
							'conditions'  => "semisUniversal2009.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						),
						'semisUniversal2011' => array(
							'className'  => '',
							'conditions'  => "semisUniversal2011.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						),
						'SemisEnrollment2011' => array(
							'className'  => '',
							'conditions'  => "SemisEnrollment2011.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						),
						'Smc2011' => array(
							'className'  => '',
							'conditions'  => "Smc2011.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						),
						'Smc2009' => array(
							'className'  => 'Smc2009',
							'conditions'  => "Smc2009.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						),
						'SemisSmc2010' => array(
							'className'  => '',
							'conditions'  => "SemisSmc2010.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						),
						'SsbBudgetFinal' => array(
							'className'  => '',
							'conditions'  => "SsbBudgetFinal.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						)
					)));
				$schools = $this->semisUniversal2010->find('all', array('conditions'=>$conditions, 'fields'=>$fields));	
				$this->set('schools', $schools);
				// debug($schools);
				foreach($schools as $school)
				{
					
					$boys_enrol_2009 = ($school["SemisEnrollment2009"]["b_unadmit"])+($school["SemisEnrollment2009"]["b_katchi"])+($school["SemisEnrollment2009"]["b1"])+($school["SemisEnrollment2009"]["b2"])+($school["SemisEnrollment2009"]["b3"])+($school["SemisEnrollment2009"]["b4"])+($school["SemisEnrollment2009"]["b5"])+($school["SemisEnrollment2009"]["b6"])+($school["SemisEnrollment2009"]["b7"])+($school["SemisEnrollment2009"]["b8"])+($school["SemisEnrollment2009"]["b9_general"])+($school["SemisEnrollment2009"]["b9_computer"])+($school["SemisEnrollment2009"]["b9_biology"])+($school["SemisEnrollment2009"]["b9_commerce"])+($school["SemisEnrollment2009"]["b9_other"])+($school["SemisEnrollment2009"]["b10_general"])+($school["SemisEnrollment2009"]["b10_computer"])+($school["SemisEnrollment2009"]["b10_biology"])+($school["SemisEnrollment2009"]["b10_commerce"])+($school["SemisEnrollment2009"]["b10_other"])+($school["SemisEnrollment2009"]["b11_general"])+($school["SemisEnrollment2009"]["b11_computer"])+($school["SemisEnrollment2009"]["b11_premedical"])+($school["SemisEnrollment2009"]["b11_preengineering"])+($school["SemisEnrollment2009"]["b11_commerce"])+($school["SemisEnrollment2009"]["b11_other"])+($school["SemisEnrollment2009"]["b12_general"])+($school["SemisEnrollment2009"]["b12_computer"])+($school["SemisEnrollment2009"]["b12_premedical"])+($school["SemisEnrollment2009"]["b12_preengineering"])+($school["SemisEnrollment2009"]["b12_commerce"])+($school["SemisEnrollment2009"]["b12_other"]);
					$girls_enrol_2009 = ($school["SemisEnrollment2009"]["g_unadmit"])+($school["SemisEnrollment2009"]["g_katchi"])+($school["SemisEnrollment2009"]["g1"])+($school["SemisEnrollment2009"]["g2"])+($school["SemisEnrollment2009"]["g3"])+($school["SemisEnrollment2009"]["g4"])+($school["SemisEnrollment2009"]["g5"])+($school["SemisEnrollment2009"]["g6"])+($school["SemisEnrollment2009"]["g7"])+($school["SemisEnrollment2009"]["g8"])+($school["SemisEnrollment2009"]["g9_general"])+($school["SemisEnrollment2009"]["g9_computer"])+($school["SemisEnrollment2009"]["g9_biology"])+($school["SemisEnrollment2009"]["g9_commerce"])+($school["SemisEnrollment2009"]["g9_other"])+($school["SemisEnrollment2009"]["g10_general"])+($school["SemisEnrollment2009"]["g10_computer"])+($school["SemisEnrollment2009"]["g10_biology"])+($school["SemisEnrollment2009"]["g10_commerce"])+($school["SemisEnrollment2009"]["g10_other"])+($school["SemisEnrollment2009"]["g11_general"])+($school["SemisEnrollment2009"]["g11_computer"])+($school["SemisEnrollment2009"]["g11_premedical"])+($school["SemisEnrollment2009"]["g11_preengineering"])+($school["SemisEnrollment2009"]["g11_commerce"])+($school["SemisEnrollment2009"]["g11_other"])+($school["SemisEnrollment2009"]["g12_general"])+($school["SemisEnrollment2009"]["g12_computer"])+($school["SemisEnrollment2009"]["g12_premedical"])+($school["SemisEnrollment2009"]["g12_preengineering"])+($school["SemisEnrollment2009"]["g12_commerce"])+($school["SemisEnrollment2009"]["g12_other"]);

					$boys_enrol_2010 = ($school["SemisEnrollment2010"]["b_unadmit"])+($school["SemisEnrollment2010"]["b_ec"])+($school["SemisEnrollment2010"]["b_katchi"])+($school["SemisEnrollment2010"]["b1"])+($school["SemisEnrollment2010"]["b2"])+($school["SemisEnrollment2010"]["b3"])+($school["SemisEnrollment2010"]["b4"])+($school["SemisEnrollment2010"]["b5"])+($school["SemisEnrollment2010"]["b6"])+($school["SemisEnrollment2010"]["b7"])+($school["SemisEnrollment2010"]["b8"])+($school["SemisEnrollment2010"]["b9_general"])+($school["SemisEnrollment2010"]["b9_computer"])+($school["SemisEnrollment2010"]["b9_biology"])+($school["SemisEnrollment2010"]["b9_commerce"])+($school["SemisEnrollment2010"]["b9_other"])+($school["SemisEnrollment2010"]["b10_general"])+($school["SemisEnrollment2010"]["b10_computer"])+($school["SemisEnrollment2010"]["b10_biology"])+($school["SemisEnrollment2010"]["b10_commerce"])+($school["SemisEnrollment2010"]["b10_other"])+($school["SemisEnrollment2010"]["b11_general"])+($school["SemisEnrollment2010"]["b11_computer"])+($school["SemisEnrollment2010"]["b11_premedical"])+($school["SemisEnrollment2010"]["b11_preengineering"])+($school["SemisEnrollment2010"]["b11_commerce"])+($school["SemisEnrollment2010"]["b11_other"])+($school["SemisEnrollment2010"]["b12_general"])+($school["SemisEnrollment2010"]["b12_computer"])+($school["SemisEnrollment2010"]["b12_premedical"])+($school["SemisEnrollment2010"]["b12_preengineering"])+($school["SemisEnrollment2010"]["b12_commerce"])+($school["SemisEnrollment2010"]["b12_other"]);
					$girls_enrol_2010 = ($school["SemisEnrollment2010"]["g_unadmit"])+($school["SemisEnrollment2010"]["g_ec"])+($school["SemisEnrollment2010"]["g_katchi"])+($school["SemisEnrollment2010"]["g1"])+($school["SemisEnrollment2010"]["g2"])+($school["SemisEnrollment2010"]["g3"])+($school["SemisEnrollment2010"]["g4"])+($school["SemisEnrollment2010"]["g5"])+($school["SemisEnrollment2010"]["g6"])+($school["SemisEnrollment2010"]["g7"])+($school["SemisEnrollment2010"]["g8"])+($school["SemisEnrollment2010"]["g9_general"])+($school["SemisEnrollment2010"]["g9_computer"])+($school["SemisEnrollment2010"]["g9_biology"])+($school["SemisEnrollment2010"]["g9_commerce"])+($school["SemisEnrollment2010"]["g9_other"])+($school["SemisEnrollment2010"]["g10_general"])+($school["SemisEnrollment2010"]["g10_computer"])+($school["SemisEnrollment2010"]["g10_biology"])+($school["SemisEnrollment2010"]["g10_commerce"])+($school["SemisEnrollment2010"]["g10_other"])+($school["SemisEnrollment2010"]["g11_general"])+($school["SemisEnrollment2010"]["g11_computer"])+($school["SemisEnrollment2010"]["g11_premedical"])+($school["SemisEnrollment2010"]["g11_preengineering"])+($school["SemisEnrollment2010"]["g11_commerce"])+($school["SemisEnrollment2010"]["g11_other"])+($school["SemisEnrollment2010"]["g12_general"])+($school["SemisEnrollment2010"]["g12_computer"])+($school["SemisEnrollment2010"]["g12_premedical"])+($school["SemisEnrollment2010"]["g12_preengineering"])+($school["SemisEnrollment2010"]["g12_commerce"])+($school["SemisEnrollment2010"]["g12_other"]);

					$teachers_male_2009 = ($school["semisUniversal2009"]["PSTWorkingMale"])+($school["semisUniversal2009"]["JSTWorkingMale"])+($school["semisUniversal2009"]["HSTWorkingMale"])+($school["semisUniversal2009"]["SSWorkingMale"])+($school["semisUniversal2009"]["SLTWorkingMale"])+($school["semisUniversal2009"]["OTWorkingMale"])+($school["semisUniversal2009"]["PTIWorkingMale"])+($school["semisUniversal2009"]["HMWorkingMale"])+($school["semisUniversal2009"]["NonGovtWorkingMale"])+($school["semisUniversal2009"]["OtherWorkingMale"]);
					$teachers_female_2009 = ($school["semisUniversal2009"]["PSTWorkingFemale"])+($school["semisUniversal2009"]["JSTWorkingFemale"])+($school["semisUniversal2009"]["HSTWorkingFemale"])+($school["semisUniversal2009"]["SSWorkingFemale"])+($school["semisUniversal2009"]["SLTWorkingFemale"])+($school["semisUniversal2009"]["OTWorkingFemale"])+($school["semisUniversal2009"]["PTIWorkingFemale"])+($school["semisUniversal2009"]["NonGovtWorkingFemale"])+($school["semisUniversal2009"]["HMWorkingFemale"])+($school["semisUniversal2009"]["OtherWorkingFemale"]);

					$teachers_male_2010 = ($school["semisUniversal2010"]["teacher_working_govt_male"])+($school["semisUniversal2010"]["teacher_working_non_govt_male"]);
					$teachers_female_2010 = ($school["semisUniversal2010"]["teacher_working_govt_female"])+($school["semisUniversal2010"]["teacher_working_non_govt_female"]);
					
					
					$html[] = '<h3 style="text-align:center;" >Address: "'.$school["semisUniversal2010"]["school_address"].'" - "'.$school["SemisCodeUc"]["uc_name"].'" - "'.$school["semisCodesDistrictTehsil"]["tehsil"].'" - "'.$school["semisCodesDistrictTehsil"]["district"].'</h3><table class="bordered"><tr><td colspan=9><hr></td></tr><tr><td></td><td></td><td></td><th></th><td>2009-10</td><td>2010-11</td><td>2011-12</td></tr><tr><th>SEMIS Code</th><td>'.$school["semisUniversal2010"]["school_id"].'</td><td></td><th>Status</th><td>';
					if($school["semisUniversal2009"]["status_id"] == 1) { $html[] .= "Functional"; }else{ $html[] .= "Non-Functional"; }
					$html[] .= '</td><td>'; 
					if($school["semisUniversal2009"]["status_id"] == 1) { $html[] .= "Functional"; }else{ $html[] .= "Non-Functional"; }
					$html[] .= '</td><td></td></tr>';
					$html[] .= '<tr><th>Village Mohalla</th><td>'.$school["semisUniversal2010"]["village_mohalla"].'</td><td></td>		<th>Level</th><td>';
					if($school["semisUniversal2009"]["level_id"] == 1) { $html[] .= "Primary"; }elseif($school["semisUniversal2009"]["level_id"] == 2) { $html[] .= "Middle"; }elseif($school["semisUniversal2009"]["level_id"] == 3) { $html[] .= "Elementary"; }elseif($school["semisUniversal2009"]["level_id"] == 4) { $html[] .= "Secondary"; }elseif($school["semisUniversal2009"]["level_id"] == 5) { $html[] .= "Higher Secondary"; }
					$html[] .= '</td><td>';
					if($school["semisUniversal2010"]["level_id"] == 1) { $html[] .= "Primary"; }elseif($school["semisUniversal2010"]["level_id"] == 2) { $html[] .= "Middle"; }elseif($school["semisUniversal2010"]["level_id"] == 3) { $html[] .= "Elementary"; }elseif($school["semisUniversal2010"]["level_id"] == 4) { $html[] .= "Secondary"; }elseif($school["semisUniversal2010"]["level_id"] == 5) { $html[] .= "Higher Secondary"; }
					$html[] .= '</td><td></td></tr><tr><th>Establishment Year</th><td>'.$school["semisUniversal2010"]["establishment_year"].'</td><td></td>	<th>Enrl: Boys</th><td>'.$boys_enrol_2009.'</td><td>'.$boys_enrol_2010.'</td><td></td></tr><tr><th>New SEMIS Code</th><td></td><td></td><th>Enrl: Girls</th><td>'.$girls_enrol_2009.'</td><td>'.$girls_enrol_2010.'</td><td></td></tr><tr><th>Branch</th><td></td><td></td><th>Total Enrl.</th><td>'.$boys_enrol_2009+$girls_enrol_2009.'</td><td>'.$boys_enrol_2010+$girls_enrol_2010.'</td><td></td></tr>';
				}
				$this->set('html', $html);
				$this->layout = 'pdf'; //this will use the pdf.ctp layout 
				$this->render(); 
				
		}

   
        
        
    }

	function populate_ssb()
	{
			$fields[] = 'SsbBudgetFinal.ddo_name';
			$fields[] = 'SsbBudgetFinal.ddo_code';
			$fields[] = 'SsbBudgetFinal.475_inclass';
			$fields[] = 'SsbBudgetFinal.476_library';
			$fields[] = 'SsbBudgetFinal.477_cocurricular';
			$fields[] = 'SsbBudgetFinal.478_sport';
			$fields[] = 'SsbBudgetFinal.479_ta';
			$fields[] = 'SsbBudgetFinal.480_stationary';
			$fields[] = 'SsbBudgetFinal.ssb_select';
			$fields[] = 'SsbBudgetFinal.total_teachers';
			$fields[] = 'SemisEnrollment2011.b_katchi';
			$fields[] = 'SemisEnrollment2011.g_katchi';
			$fields[] = 'SemisEnrollment2011.b1';
			$fields[] = 'SemisEnrollment2011.g1';
			$fields[] = 'SemisEnrollment2011.b2';
			$fields[] = 'SemisEnrollment2011.g2';
			$fields[] = 'SemisEnrollment2011.b3';
			$fields[] = 'SemisEnrollment2011.g3';
			$fields[] = 'SemisEnrollment2011.b4';
			$fields[] = 'SemisEnrollment2011.g4';
			$fields[] = 'SemisEnrollment2011.b5';
			$fields[] = 'SemisEnrollment2011.g5';
			$fields[] = 'SemisEnrollment2011.b6';
			$fields[] = 'SemisEnrollment2011.g6';
			$fields[] = 'SemisEnrollment2011.b7';
			$fields[] = 'SemisEnrollment2011.g7';
			$fields[] = 'SemisEnrollment2011.b8';
			$fields[] = 'SemisEnrollment2011.g8';
			$fields[] = 'SemisEnrollment2011.b9_general';
			$fields[] = 'SemisEnrollment2011.b9_computer';
			$fields[] = 'SemisEnrollment2011.b9_biology';
			$fields[] = 'SemisEnrollment2011.b9_commerce';
			$fields[] = 'SemisEnrollment2011.b9_other';
			$fields[] = 'SemisEnrollment2011.g9_general';
			$fields[] = 'SemisEnrollment2011.g9_computer';
			$fields[] = 'SemisEnrollment2011.g9_biology';
			$fields[] = 'SemisEnrollment2011.g9_commerce';
			$fields[] = 'SemisEnrollment2011.g9_other';
			$fields[] = 'SemisEnrollment2011.b10_general';
			$fields[] = 'SemisEnrollment2011.b10_computer';
			$fields[] = 'SemisEnrollment2011.b10_biology';
			$fields[] = 'SemisEnrollment2011.b10_commerce';
			$fields[] = 'SemisEnrollment2011.b10_other';
			$fields[] = 'SemisEnrollment2011.g10_general';
			$fields[] = 'SemisEnrollment2011.g10_computer';
			$fields[] = 'SemisEnrollment2011.g10_biology';
			$fields[] = 'SemisEnrollment2011.g10_commerce';
			$fields[] = 'SemisEnrollment2011.g10_other';
			$fields[] = 'SemisEnrollment2011.b11_general';
			$fields[] = 'SemisEnrollment2011.b11_computer';
			$fields[] = 'SemisEnrollment2011.b11_premedical';
			$fields[] = 'SemisEnrollment2011.b11_preengineering';
			$fields[] = 'SemisEnrollment2011.b11_commerce';
			$fields[] = 'SemisEnrollment2011.b11_other';
			$fields[] = 'SemisEnrollment2011.g11_general';
			$fields[] = 'SemisEnrollment2011.g11_computer';
			$fields[] = 'SemisEnrollment2011.g11_premedical';
			$fields[] = 'SemisEnrollment2011.g11_preengineering';
			$fields[] = 'SemisEnrollment2011.g11_commerce';
			$fields[] = 'SemisEnrollment2011.g11_other';
			$fields[] = 'SemisEnrollment2011.b12_general';
			$fields[] = 'SemisEnrollment2011.b12_computer';
			$fields[] = 'SemisEnrollment2011.b12_premedical';
			$fields[] = 'SemisEnrollment2011.b12_preengineering';
			$fields[] = 'SemisEnrollment2011.b12_commerce';
			$fields[] = 'SemisEnrollment2011.b12_other';
			$fields[] = 'SemisEnrollment2011.g12_general';
			$fields[] = 'SemisEnrollment2011.g12_computer';
			$fields[] = 'SemisEnrollment2011.g12_premedical';
			$fields[] = 'SemisEnrollment2011.g12_preengineering';
			$fields[] = 'SemisEnrollment2011.g12_commerce';
			$fields[] = 'SemisEnrollment2011.g12_other';
			$fields[] = 'Smc2009.is_functional';
			$fields[] = 'SemisSmc2010.is_functional_smc';
			$fields[] = 'SemisSmc2010.ac_no';
			$fields[] = 'SemisSmc2010.ac_title';
			$fields[] = 'SemisSmc2010.smc_balance_thirtyfirst_october';
			$fields[] = 'Smc2011.is_smc_func';
			$fields[] = 'Smc2011.ac_no';
			$fields[] = 'Smc2011.ac_title';
			$fields[] = 'Smc2011.bank_name';
			$fields[] = 'Smc2011.bank_branch';
			$fields[] = 'Smc2011.smc_chairman_name';
			$fields[] = 'Smc2011.smc_chairman_phone';
			$fields[] = 'SemisCodeUc.uc_name';
			$fields[] = 'semisCodesDistrictTehsil.district';
			$fields[] = 'semisCodesDistrictTehsil.tehsil';
			$fields[] = 'SemisEnrollment2009.*';
			$fields[] = 'SemisEnrollment2010.*';
			$fields[] = 'semisUniversal2011.*';
			$fields[] = 'semisUniversal2010.*';
			$fields[] = 'semisUniversal2009.*';
			
			$this->semisUniversal2010->bindModel(
						array('hasOne' => array(
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => 'SemisEnrollment2010.school_id = semisUniversal2010.school_id',
							'foreignKey' => ''
						),
						'semisCodesDistrictTehsil' => array(
							'className'  => '',
							'conditions'  => "semisCodesDistrictTehsil.tehsil_id = semisUniversal2010.tehsil_id",
							'foreignKey' => ''
						),
						'SemisCodeUc' => array(
							'className'  => '',
							'conditions'  => "SemisCodeUc.uc_id = semisUniversal2010.union_council_id",
							'foreignKey' => ''
						),
						'SemisCodeSchoolGender' => array(
							'className'  => '',
							'conditions'  => "SemisCodeSchoolGender.gend_id = semisUniversal2010.gender_id",
							'foreignKey' => ''
						),
						'SemisEnrollment2009' => array(
							'className'  => '',
							'conditions'  => "SemisEnrollment2009.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						),
						'SemisEnrollment2010' => array(
							'className'  => '',
							'conditions'  => "SemisEnrollment2010.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						),
						'semisUniversal2009' => array(
							'className'  => '',
							'conditions'  => "semisUniversal2009.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						),
						'semisUniversal2011' => array(
							'className'  => '',
							'conditions'  => "semisUniversal2011.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						),
						'SemisEnrollment2011' => array(
							'className'  => '',
							'conditions'  => "SemisEnrollment2011.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						),
						'Smc2011' => array(
							'className'  => '',
							'conditions'  => "Smc2011.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						),
						'Smc2009' => array(
							'className'  => 'Smc2009',
							'conditions'  => "Smc2009.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						),
						'SemisSmc2010' => array(
							'className'  => '',
							'conditions'  => "SemisSmc2010.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						),
						'SsbBudgetFinal' => array(
							'className'  => '',
							'conditions'  => "SsbBudgetFinal.school_id = semisUniversal2010.school_id",
							'foreignKey' => ''
						)
					)));
				$schools = $this->semisUniversal2010->find('all', array('fields'=>$fields));
				
				foreach ($schools as $school)
				{
					
					$sch_status_09 = "";
					$sch_status_10 = "";
					$sch_status_11 = "";
					$school_level_09 = "";
					$school_level_10 = "";
					$school_level_11 = "";
					$electricity_2009 = "";
					$electricity_2010 = "";
					$electricity_2011 = "";
					$water_2009 = "";
					$water_2010 = "";
					$water_2011 = "";
					$bwall_2009 = "";
					$bwall_2010 = "";
					$bwall_2011 = "";
					$library_2009 = "";
					$library_2010 = "";
					$library_2011 = "";
					$toilet_2009 = "";
					$toilet_2010 = "";
					$toilet_2011 = "";
					$functionality_2009 = "";
					$functionality_2010 = "";
					$functionality_2011 = "";
					$school_gender_09 = "";
					$school_gender_10 = "";
					$school_gender_11 = "";
		
		
		
		
					 
					 $this->FormatReport->id = $school["semisUniversal2011"]["school_id_new"];
					 $formatReport['FormatReport']['title'] = $school["semisUniversal2011"]["prefix"]." - ".$school["semisUniversal2011"]["school_name"]." [".$school["semisUniversal2011"]["school_id_new"]."]";;
					 $formatReport['FormatReport']['address'] = $school["semisUniversal2011"]["school_address"]." - ".$school["SemisCodeUc"]["uc_name"]." - ".$school["semisCodesDistrictTehsil"]["tehsil"]." - ".$school["semisCodesDistrictTehsil"]["district"];;
					 $formatReport['FormatReport']['semis_code_old'] = $school["semisUniversal2010"]["school_id"];
					 $formatReport['FormatReport']['village_mohallla'] = $school["semisUniversal2010"]["village_mohalla"];
					 $formatReport['FormatReport']['establishment_year'] = $school["semisUniversal2010"]["establishment_year"];
					 $formatReport['FormatReport']['new_semis_code'] = $school["semisUniversal2011"]["school_id_new"];
					 $formatReport['FormatReport']['id'] = $school["semisUniversal2011"]["school_id_new"];
					 
					 if($school["semisUniversal2011"]["branch"] == 1) { $branch_status = "Yes"; }elseif($school["semisUniversal2011"]["branch"] == 2) { $branch_status = "No"; }else { $branch_status = "No Info"; } 
					 $formatReport['FormatReport']['branch_status'] = $branch_status;
					 
					if($school["semisUniversal2009"]["gender_id"] == 1) { $school_gender_09 = "Boys"; }elseif($school["semisUniversal2009"]["gender_id"] == 2) { $school_gender_09 = "Girls"; }elseif($school["semisUniversal2009"]["gender_id"] == 3) { $school_gender_09 = "Girls"; }else { $school_gender_09 = "No Information"; }
					if($school["semisUniversal2010"]["gender_id"] == 1) { $school_gender_10 = "Boys"; }elseif($school["semisUniversal2010"]["gender_id"] == 2) { $school_gender_10 = "Girls"; }elseif($school["semisUniversal2010"]["gender_id"] == 3) { $school_gender_10 = "Girls"; }else { $school_gender_10 = "No Information"; }
					if($school["semisUniversal2011"]["gender_id"] == 1) { $school_gender_11 = "Boys"; }elseif($school["semisUniversal2011"]["gender_id"] == 2) { $school_gender_11 = "Girls"; }elseif($school["semisUniversal2011"]["gender_id"] == 3) { $school_gender_11 = "Girls"; }else { $school_gender_11 = "No Information"; }
		
					 $formatReport['FormatReport']['gender_09'] = $school_gender_09;
					 $formatReport['FormatReport']['gender_10'] = $school_gender_10;
					 $formatReport['FormatReport']['gender_11'] = $school_gender_11;
					 
					if($school["semisUniversal2009"]["status_id"] == 1) { $sch_status_09 = "Functional"; }else{ $sch_status_09 = "Non-Functional"; }
					if($school["semisUniversal2010"]["status_id"] == 1) { $sch_status_10 = "Functional"; }else{ $sch_status_10 = "Non-Functional"; }
					if($school["semisUniversal2011"]["status_id"] == 1) { $sch_status_11 = "Functional"; }else{ $sch_status_11 = "Non-Functional"; }
		
					 $formatReport['FormatReport']['status_09'] = $sch_status_09;
					 $formatReport['FormatReport']['status_10'] = $sch_status_10;
					 $formatReport['FormatReport']['status_11'] = $sch_status_11;
					 
					
					if($school["semisUniversal2009"]["level_id"] == 1) { $school_level_09 = "Primary"; }elseif($school["semisUniversal2009"]["level_id"] == 2) { $school_level_09 = "Middle"; }elseif($school["semisUniversal2009"]["level_id"] == 3) { $school_level_09 = "Elementary"; }elseif($school["semisUniversal2009"]["level_id"] == 4) { $school_level_09 = "Secondary"; }elseif($school["semisUniversal2009"]["level_id"] == 5) { $school_level_09 = "Higher Secondary"; }
					if($school["semisUniversal2010"]["level_id"] == 1) { $school_level_10 = "Primary"; }elseif($school["semisUniversal2010"]["level_id"] == 2) { $school_level_10 = "Middle"; }elseif($school["semisUniversal2010"]["level_id"] == 3) { $school_level_10 = "Elementary"; }elseif($school["semisUniversal2010"]["level_id"] == 4) { $school_level_10 = "Secondary"; }elseif($school["semisUniversal2010"]["level_id"] == 5) { $school_level_10 = "Higher Secondary"; }
					if($school["semisUniversal2011"]["level_id"] == 1) { $school_level_11 = "Primary"; }elseif($school["semisUniversal2011"]["level_id"] == 2) { $school_level_11 = "Middle"; }elseif($school["semisUniversal2011"]["level_id"] == 3) { $school_level_11 = "Elementary"; }elseif($school["semisUniversal2011"]["level_id"] == 4) { $school_level_11 = "Secondary"; }elseif($school["semisUniversal2011"]["level_id"] == 5) { $school_level_11 = "Higher Secondary"; }
		
					 $formatReport['FormatReport']['level_09'] = $school_level_09;
					 $formatReport['FormatReport']['level_10'] = $school_level_10;
					 $formatReport['FormatReport']['level_11'] = $school_level_11;
					
					$boys_enrol_2009 = ($school["SemisEnrollment2009"]["b_unadmit"])+($school["SemisEnrollment2009"]["b_katchi"])+($school["SemisEnrollment2009"]["b1"])+($school["SemisEnrollment2009"]["b2"])+($school["SemisEnrollment2009"]["b3"])+($school["SemisEnrollment2009"]["b4"])+($school["SemisEnrollment2009"]["b5"])+($school["SemisEnrollment2009"]["b6"])+($school["SemisEnrollment2009"]["b7"])+($school["SemisEnrollment2009"]["b8"])+($school["SemisEnrollment2009"]["b9_general"])+($school["SemisEnrollment2009"]["b9_computer"])+($school["SemisEnrollment2009"]["b9_biology"])+($school["SemisEnrollment2009"]["b9_commerce"])+($school["SemisEnrollment2009"]["b9_other"])+($school["SemisEnrollment2009"]["b10_general"])+($school["SemisEnrollment2009"]["b10_computer"])+($school["SemisEnrollment2009"]["b10_biology"])+($school["SemisEnrollment2009"]["b10_commerce"])+($school["SemisEnrollment2009"]["b10_other"])+($school["SemisEnrollment2009"]["b11_general"])+($school["SemisEnrollment2009"]["b11_computer"])+($school["SemisEnrollment2009"]["b11_premedical"])+($school["SemisEnrollment2009"]["b11_preengineering"])+($school["SemisEnrollment2009"]["b11_commerce"])+($school["SemisEnrollment2009"]["b11_other"])+($school["SemisEnrollment2009"]["b12_general"])+($school["SemisEnrollment2009"]["b12_computer"])+($school["SemisEnrollment2009"]["b12_premedical"])+($school["SemisEnrollment2009"]["b12_preengineering"])+($school["SemisEnrollment2009"]["b12_commerce"])+($school["SemisEnrollment2009"]["b12_other"]);
					$girls_enrol_2009 = ($school["SemisEnrollment2009"]["g_unadmit"])+($school["SemisEnrollment2009"]["g_katchi"])+($school["SemisEnrollment2009"]["g1"])+($school["SemisEnrollment2009"]["g2"])+($school["SemisEnrollment2009"]["g3"])+($school["SemisEnrollment2009"]["g4"])+($school["SemisEnrollment2009"]["g5"])+($school["SemisEnrollment2009"]["g6"])+($school["SemisEnrollment2009"]["g7"])+($school["SemisEnrollment2009"]["g8"])+($school["SemisEnrollment2009"]["g9_general"])+($school["SemisEnrollment2009"]["g9_computer"])+($school["SemisEnrollment2009"]["g9_biology"])+($school["SemisEnrollment2009"]["g9_commerce"])+($school["SemisEnrollment2009"]["g9_other"])+($school["SemisEnrollment2009"]["g10_general"])+($school["SemisEnrollment2009"]["g10_computer"])+($school["SemisEnrollment2009"]["g10_biology"])+($school["SemisEnrollment2009"]["g10_commerce"])+($school["SemisEnrollment2009"]["g10_other"])+($school["SemisEnrollment2009"]["g11_general"])+($school["SemisEnrollment2009"]["g11_computer"])+($school["SemisEnrollment2009"]["g11_premedical"])+($school["SemisEnrollment2009"]["g11_preengineering"])+($school["SemisEnrollment2009"]["g11_commerce"])+($school["SemisEnrollment2009"]["g11_other"])+($school["SemisEnrollment2009"]["g12_general"])+($school["SemisEnrollment2009"]["g12_computer"])+($school["SemisEnrollment2009"]["g12_premedical"])+($school["SemisEnrollment2009"]["g12_preengineering"])+($school["SemisEnrollment2009"]["g12_commerce"])+($school["SemisEnrollment2009"]["g12_other"]);

					$boys_enrol_2010 = ($school["SemisEnrollment2010"]["b_unadmit"])+($school["SemisEnrollment2010"]["b_ec"])+($school["SemisEnrollment2010"]["b_katchi"])+($school["SemisEnrollment2010"]["b1"])+($school["SemisEnrollment2010"]["b2"])+($school["SemisEnrollment2010"]["b3"])+($school["SemisEnrollment2010"]["b4"])+($school["SemisEnrollment2010"]["b5"])+($school["SemisEnrollment2010"]["b6"])+($school["SemisEnrollment2010"]["b7"])+($school["SemisEnrollment2010"]["b8"])+($school["SemisEnrollment2010"]["b9_general"])+($school["SemisEnrollment2010"]["b9_computer"])+($school["SemisEnrollment2010"]["b9_biology"])+($school["SemisEnrollment2010"]["b9_commerce"])+($school["SemisEnrollment2010"]["b9_other"])+($school["SemisEnrollment2010"]["b10_general"])+($school["SemisEnrollment2010"]["b10_computer"])+($school["SemisEnrollment2010"]["b10_biology"])+($school["SemisEnrollment2010"]["b10_commerce"])+($school["SemisEnrollment2010"]["b10_other"])+($school["SemisEnrollment2010"]["b11_general"])+($school["SemisEnrollment2010"]["b11_computer"])+($school["SemisEnrollment2010"]["b11_premedical"])+($school["SemisEnrollment2010"]["b11_preengineering"])+($school["SemisEnrollment2010"]["b11_commerce"])+($school["SemisEnrollment2010"]["b11_other"])+($school["SemisEnrollment2010"]["b12_general"])+($school["SemisEnrollment2010"]["b12_computer"])+($school["SemisEnrollment2010"]["b12_premedical"])+($school["SemisEnrollment2010"]["b12_preengineering"])+($school["SemisEnrollment2010"]["b12_commerce"])+($school["SemisEnrollment2010"]["b12_other"]);
					$girls_enrol_2010 = ($school["SemisEnrollment2010"]["g_unadmit"])+($school["SemisEnrollment2010"]["g_ec"])+($school["SemisEnrollment2010"]["g_katchi"])+($school["SemisEnrollment2010"]["g1"])+($school["SemisEnrollment2010"]["g2"])+($school["SemisEnrollment2010"]["g3"])+($school["SemisEnrollment2010"]["g4"])+($school["SemisEnrollment2010"]["g5"])+($school["SemisEnrollment2010"]["g6"])+($school["SemisEnrollment2010"]["g7"])+($school["SemisEnrollment2010"]["g8"])+($school["SemisEnrollment2010"]["g9_general"])+($school["SemisEnrollment2010"]["g9_computer"])+($school["SemisEnrollment2010"]["g9_biology"])+($school["SemisEnrollment2010"]["g9_commerce"])+($school["SemisEnrollment2010"]["g9_other"])+($school["SemisEnrollment2010"]["g10_general"])+($school["SemisEnrollment2010"]["g10_computer"])+($school["SemisEnrollment2010"]["g10_biology"])+($school["SemisEnrollment2010"]["g10_commerce"])+($school["SemisEnrollment2010"]["g10_other"])+($school["SemisEnrollment2010"]["g11_general"])+($school["SemisEnrollment2010"]["g11_computer"])+($school["SemisEnrollment2010"]["g11_premedical"])+($school["SemisEnrollment2010"]["g11_preengineering"])+($school["SemisEnrollment2010"]["g11_commerce"])+($school["SemisEnrollment2010"]["g11_other"])+($school["SemisEnrollment2010"]["g12_general"])+($school["SemisEnrollment2010"]["g12_computer"])+($school["SemisEnrollment2010"]["g12_premedical"])+($school["SemisEnrollment2010"]["g12_preengineering"])+($school["SemisEnrollment2010"]["g12_commerce"])+($school["SemisEnrollment2010"]["g12_other"]);

					$boys_enrol_2011 = ($school["SemisEnrollment2011"]["b_katchi"])+($school["SemisEnrollment2011"]["b1"])+($school["SemisEnrollment2011"]["b2"])+($school["SemisEnrollment2011"]["b3"])+($school["SemisEnrollment2011"]["b4"])+($school["SemisEnrollment2011"]["b5"])+($school["SemisEnrollment2011"]["b6"])+($school["SemisEnrollment2011"]["b7"])+($school["SemisEnrollment2011"]["b8"])+($school["SemisEnrollment2011"]["b9_general"])+($school["SemisEnrollment2011"]["b9_computer"])+($school["SemisEnrollment2011"]["b9_biology"])+($school["SemisEnrollment2011"]["b9_commerce"])+($school["SemisEnrollment2011"]["b9_other"])+($school["SemisEnrollment2011"]["b10_general"])+($school["SemisEnrollment2011"]["b10_computer"])+($school["SemisEnrollment2011"]["b10_biology"])+($school["SemisEnrollment2011"]["b10_commerce"])+($school["SemisEnrollment2011"]["b10_other"])+($school["SemisEnrollment2011"]["b11_general"])+($school["SemisEnrollment2011"]["b11_computer"])+($school["SemisEnrollment2011"]["b11_premedical"])+($school["SemisEnrollment2011"]["b11_preengineering"])+($school["SemisEnrollment2011"]["b11_commerce"])+($school["SemisEnrollment2011"]["b11_other"])+($school["SemisEnrollment2011"]["b12_general"])+($school["SemisEnrollment2011"]["b12_computer"])+($school["SemisEnrollment2011"]["b12_premedical"])+($school["SemisEnrollment2011"]["b12_preengineering"])+($school["SemisEnrollment2011"]["b12_commerce"])+($school["SemisEnrollment2011"]["b12_other"]);
					$girls_enrol_2011 = ($school["SemisEnrollment2011"]["g_katchi"])+($school["SemisEnrollment2011"]["g1"])+($school["SemisEnrollment2011"]["g2"])+($school["SemisEnrollment2011"]["g3"])+($school["SemisEnrollment2011"]["g4"])+($school["SemisEnrollment2011"]["g5"])+($school["SemisEnrollment2011"]["g6"])+($school["SemisEnrollment2011"]["g7"])+($school["SemisEnrollment2011"]["g8"])+($school["SemisEnrollment2011"]["g9_general"])+($school["SemisEnrollment2011"]["g9_computer"])+($school["SemisEnrollment2011"]["g9_biology"])+($school["SemisEnrollment2011"]["g9_commerce"])+($school["SemisEnrollment2011"]["g9_other"])+($school["SemisEnrollment2011"]["g10_general"])+($school["SemisEnrollment2011"]["g10_computer"])+($school["SemisEnrollment2011"]["g10_biology"])+($school["SemisEnrollment2011"]["g10_commerce"])+($school["SemisEnrollment2011"]["g10_other"])+($school["SemisEnrollment2011"]["g11_general"])+($school["SemisEnrollment2011"]["g11_computer"])+($school["SemisEnrollment2011"]["g11_premedical"])+($school["SemisEnrollment2011"]["g11_preengineering"])+($school["SemisEnrollment2011"]["g11_commerce"])+($school["SemisEnrollment2011"]["g11_other"])+($school["SemisEnrollment2011"]["g12_general"])+($school["SemisEnrollment2011"]["g12_computer"])+($school["SemisEnrollment2011"]["g12_premedical"])+($school["SemisEnrollment2011"]["g12_preengineering"])+($school["SemisEnrollment2011"]["g12_commerce"])+($school["SemisEnrollment2011"]["g12_other"]);

					 $formatReport['FormatReport']['enrl_b_09'] = $boys_enrol_2009;
					 $formatReport['FormatReport']['enrl_b_10'] = $boys_enrol_2010;
					 $formatReport['FormatReport']['enrl_b_11'] = $boys_enrol_2011;
					 
					 $formatReport['FormatReport']['enrl_g_09'] = $girls_enrol_2009;
					 $formatReport['FormatReport']['enrl_g_10'] = $girls_enrol_2010;
					 $formatReport['FormatReport']['enrl_g_11'] = $girls_enrol_2011;
					 
					 $formatReport['FormatReport']['enrl_t_09'] = $boys_enrol_2009+$girls_enrol_2009;
					 $formatReport['FormatReport']['enrl_t_10'] = $boys_enrol_2010+$girls_enrol_2010;
					 $formatReport['FormatReport']['enrl_t_11'] = $boys_enrol_2011+$girls_enrol_2011;
					 
					$teachers_male_2009 = ($school["semisUniversal2009"]["PSTWorkingMale"])+($school["semisUniversal2009"]["JSTWorkingMale"])+($school["semisUniversal2009"]["HSTWorkingMale"])+($school["semisUniversal2009"]["SSWorkingMale"])+($school["semisUniversal2009"]["SLTWorkingMale"])+($school["semisUniversal2009"]["OTWorkingMale"])+($school["semisUniversal2009"]["PTIWorkingMale"])+($school["semisUniversal2009"]["HMWorkingMale"])+($school["semisUniversal2009"]["NonGovtWorkingMale"])+($school["semisUniversal2009"]["OtherWorkingMale"]);
					$teachers_female_2009 = ($school["semisUniversal2009"]["PSTWorkingFemale"])+($school["semisUniversal2009"]["JSTWorkingFemale"])+($school["semisUniversal2009"]["HSTWorkingFemale"])+($school["semisUniversal2009"]["SSWorkingFemale"])+($school["semisUniversal2009"]["SLTWorkingFemale"])+($school["semisUniversal2009"]["OTWorkingFemale"])+($school["semisUniversal2009"]["PTIWorkingFemale"])+($school["semisUniversal2009"]["NonGovtWorkingFemale"])+($school["semisUniversal2009"]["HMWorkingFemale"])+($school["semisUniversal2009"]["OtherWorkingFemale"]);


					$teachers_male_2010 = ($school["semisUniversal2010"]["teacher_working_govt_male"])+($school["semisUniversal2010"]["teacher_working_non_govt_male"]);
					$teachers_female_2010 = ($school["semisUniversal2010"]["teacher_working_govt_female"])+($school["semisUniversal2010"]["teacher_working_non_govt_female"]);

					$teachers_male_2011 = ($school["semisUniversal2011"]["teacher_working_govt_male"])+($school["semisUniversal2011"]["teacher_working_non_govt_male"]);
					$teachers_female_2011 = ($school["semisUniversal2011"]["teacher_working_govt_female"])+($school["semisUniversal2011"]["teacher_working_non_govt_female"]);
	 
					 $formatReport['FormatReport']['tch_m_09'] = $teachers_male_2009;
					 $formatReport['FormatReport']['tch_m_10'] = $teachers_male_2010;
					 $formatReport['FormatReport']['tch_m_11'] = $teachers_male_2011;
					 
					 $formatReport['FormatReport']['tch_f_09'] = $teachers_female_2009;
					 $formatReport['FormatReport']['tch_f_10'] = $teachers_female_2010;
					 $formatReport['FormatReport']['tch_f_11'] = $teachers_female_2011;
					 
					 $formatReport['FormatReport']['tch_t_09'] = $teachers_male_2009+$teachers_female_2009;
					 $formatReport['FormatReport']['tch_t_10'] = $teachers_male_2010+$teachers_female_2010;
					 $formatReport['FormatReport']['tch_t_11'] = $teachers_male_2011+$teachers_female_2011;
					 
					if($school["semisUniversal2009"]["ownership"] == 1) { $building_owner_09 = "Own Building by Government"; }elseif($school["semisUniversal2009"]["ownership"] == 2) { $building_owner_09 = "Another School"; }elseif($school["semisUniversal2009"]["ownership"] == 3) { $building_owner_09 = "Rental"; }elseif($school["semisUniversal2009"]["ownership"] == 4) { $building_owner_09 = "Others"; }elseif($school["semisUniversal2009"]["ownership"] == 5) { $building_owner_09 = "No Building"; }else{ $building_owner_09 = "No Info"; }
					if($school["semisUniversal2010"]["ownership"] == 1) { $building_owner_10 = "Own Building by Government"; }elseif($school["semisUniversal2010"]["ownership"] == 2) { $building_owner_10 = "Another School"; }elseif($school["semisUniversal2010"]["ownership"] == 3) { $building_owner_10 = "Rental"; }elseif($school["semisUniversal2010"]["ownership"] == 4) { $building_owner_10 = "Others"; }elseif($school["semisUniversal2010"]["ownership"] == 5) { $building_owner_10 = "No Building"; }else{ $building_owner_10 = "No Info"; }
					if($school["semisUniversal2011"]["ownership"] == 1) { $building_owner_11 = "Own Building by Government"; }elseif($school["semisUniversal2011"]["ownership"] == 2) { $building_owner_11 = "Another School"; }elseif($school["semisUniversal2011"]["ownership"] == 3) { $building_owner_11 = "Rental"; }elseif($school["semisUniversal2011"]["ownership"] == 4) { $building_owner_11 = "Others"; }elseif($school["semisUniversal2011"]["ownership"] == 5) { $building_owner_11 = "No Building"; }else{ $building_owner_11 = "No Info"; }
		 
					 $formatReport['FormatReport']['building_own_09'] = $building_owner_09;
					 $formatReport['FormatReport']['building_own_10'] = $building_owner_10;
					 $formatReport['FormatReport']['building_own_11'] = $building_owner_11;
					 
					
					if($school["semisUniversal2009"]["building_condition"] == 0) { $building_condition_09 = "No Info"; }elseif($school["semisUniversal2009"]["building_condition"] == 1) { $building_condition_09 = "Satisfactory"; }elseif($school["semisUniversal2009"]["building_condition"] == 2) { $building_condition_09 = "Needs Repair"; }elseif($school["semisUniversal2009"]["building_condition"] == 3) { $building_condition_09 = "Dangerous"; }else{ $building_condition_09 = "Information Missing"; }
					if($school["semisUniversal2010"]["building_condition"] == 0) { $building_condition_10 = "No Info"; }elseif($school["semisUniversal2010"]["building_condition"] == 1) { $building_condition_10 = "Satisfactory"; }elseif($school["semisUniversal2010"]["building_condition"] == 2) { $building_condition_10 = "Needs Repair"; }elseif($school["semisUniversal2010"]["building_condition"] == 3) { $building_condition_10 = "Dangerous"; }else{ $building_condition_10 = "Information Missing"; }
					if($school["semisUniversal2011"]["building_condition"] == 0) { $building_condition_11 = "No Info"; }elseif($school["semisUniversal2011"]["building_condition"] == 1) { $building_condition_11 = "Satisfactory"; }elseif($school["semisUniversal2011"]["building_condition"] == 2) { $building_condition_11 = "Needs Repair"; }elseif($school["semisUniversal2011"]["building_condition"] == 3) { $building_condition_11 = "Dangerous"; }elseif($school["semisUniversal2011"]["building_condition"] == 888) { $building_condition_11 = "Incorrect Info"; }else{ $building_condition_11 = "Information Missing"; }
		
					 $formatReport['FormatReport']['building_condition_09'] = $building_condition_09;
					 $formatReport['FormatReport']['building_condition_10'] = $building_condition_10;
					 $formatReport['FormatReport']['building_condition_11'] = $building_condition_11;
					 
					 
					 $formatReport['FormatReport']['rooms_in_build_09'] = $school["semisUniversal2009"]["Numberofrooms"];
					 $formatReport['FormatReport']['rooms_in_build_10'] = $school["semisUniversal2010"]["no_of_classroom"]+$school["semisUniversal2010"]["no_of_staffrooms"]+$school["semisUniversal2010"]["no_of_hm_rooms"]+$school["semisUniversal2010"]["no_of_halls"]+$school["semisUniversal2010"]["no_of_auditorium"]+$school["semisUniversal2010"]["no_of_labortary"]+$school["semisUniversal2010"]["no_of_library"];
					 $formatReport['FormatReport']['rooms_in_build_11'] = $school["semisUniversal2011"]["no_of_classrooms"]+$school["semisUniversal2011"]["no_of_staffrooms"]+$school["semisUniversal2011"]["no_of_hmrooms"]+$school["semisUniversal2011"]["no_of_halls"]+$school["semisUniversal2011"]["no_of_auditoriums"]+$school["semisUniversal2010"]["no_of_labortary"]+$school["semisUniversal2011"]["no_of_library"]+$school["semisUniversal2011"]["no_of_other_rooms"];
					 
					 $formatReport['FormatReport']['classrooms_09'] = $school["semisUniversal2009"]["no_of_classroom"];
					 $formatReport['FormatReport']['classrooms_10'] = $school["semisUniversal2010"]["no_of_classroom"];
					 $formatReport['FormatReport']['classrooms_11'] = $school["semisUniversal2011"]["no_of_classrooms"];
					 
					 $formatReport['FormatReport']['hm_details_09'] = $school["semisUniversal2009"]["hm_name"]."<br>".$school["semisUniversal2009"]["hm_cnic"]."<br>".$school["semisUniversal2009"]["hm_contact_no"];
					 $formatReport['FormatReport']['hm_details_10'] = $school["semisUniversal2010"]["hm_name"]."<br>".$school["semisUniversal2010"]["hm_cnic"]."<br>".$school["semisUniversal2010"]["hm_contact_no"];
					 $formatReport['FormatReport']['hm_details_11'] = $school["semisUniversal2011"]["hm_name"]."<br>".$school["semisUniversal2011"]["hm_cnic"]."<br>0".$school["semisUniversal2011"]["hm_contact_no"];
					 
					 
					if($school["semisUniversal2010"]["electricity"] == 1) { $electricity_2010 = "Available"; }elseif($school["semisUniversal2010"]["electricity"] == 2) { $electricity_2010 = "Not Available"; }
					if($school["semisUniversal2009"]["electricity"] == 1) { $electricity_2009 = "Available"; }elseif($school["semisUniversal2009"]["electricity"] == 2) { $electricity_2009 = "Not Available"; }
					if($school["semisUniversal2011"]["electricity"] == 1) { $electricity_2011 = "Available"; }elseif($school["semisUniversal2011"]["electricity"] == 2) { $electricity_2011 = "Not Available"; }
		 
					 $formatReport['FormatReport']['electricity_09'] = $electricity_2009;
					 $formatReport['FormatReport']['electricity_10'] = $electricity_2010;
					 $formatReport['FormatReport']['electricity_11'] = $electricity_2011;
					
					if($school["semisUniversal2009"]["water"] == 1) { $water_2009 = "Available"; }elseif($school["semisUniversal2009"]["water"] == 2) { $water_2009 = "Not Available"; }
					if($school["semisUniversal2010"]["water"] == 1) { $water_2010 = "Available"; }elseif($school["semisUniversal2010"]["water"] == 2) { $water_2010 = "Not Available"; }
					if($school["semisUniversal2011"]["water"] == 1) { $water_2011 = "Available"; }elseif($school["semisUniversal2011"]["water"] == 2) { $water_2011 = "Not Available"; }
		
					 $formatReport['FormatReport']['water_09'] = $water_2009;
					 $formatReport['FormatReport']['water_10'] = $water_2010;
					 $formatReport['FormatReport']['water_11'] = $water_2011;
					 
					
					if($school["semisUniversal2009"]["bwall"] == 1) { $bwall_2009 = "Available"; }elseif($school["semisUniversal2009"]["bwall"] == 2) { $bwall_2009 = "Not Available"; }
					if($school["semisUniversal2011"]["b_wall"] == 1) { $bwall_2011 = "Available"; }elseif($school["semisUniversal2011"]["b_wall"] == 2) { $bwall_2011 = "Not Available"; }
					if($school["semisUniversal2010"]["bwall"] == 1) { $bwall_2010 = "Available"; }elseif($school["semisUniversal2010"]["bwall"] == 2) { $bwall_2010 = "Not Available"; }
		
					 $formatReport['FormatReport']['b_wall_09'] = $bwall_2009;
					 $formatReport['FormatReport']['b_wall_10'] = $bwall_2010;
					 $formatReport['FormatReport']['b_wall_11'] = $bwall_2011;
					 
					
					if($school["semisUniversal2009"]["library"] == 1) { $library_2009 = "Available"; }elseif($school["semisUniversal2009"]["library"] == 2) { $library_2009 = "Not Available"; }else { $library_2009 = "No Information"; }
					if($school["semisUniversal2010"]["library"] == 1) { $library_2010 = "Available"; }elseif($school["semisUniversal2010"]["bwall"] == 2) { $library_2010 = "Not Available"; }else { $library_2010 = "No Information"; }
					$library_2011 = $school["semisUniversal2011"]["library_condition"];
		
					 $formatReport['FormatReport']['library_09'] = $library_2009;
					 $formatReport['FormatReport']['library_10'] = $library_2010;
					 $formatReport['FormatReport']['library_11'] = $library_2011;
					
					if($school["semisUniversal2009"]["toilets"] == 1) { $toilet_2009 = "Available"; }elseif($school["semisUniversal2009"]["toilets"] == 2) { $toilet_2009 = "Not Available"; }
					if($school["semisUniversal2010"]["toilets"] == 1) { $toilet_2010 = "Available"; }elseif($school["semisUniversal2010"]["toilets"] == 2) { $toilet_2010 = "Not Available"; }
					if($school["semisUniversal2011"]["toilets"] == 1) { $toilet_2011 = "Available"; }elseif($school["semisUniversal2011"]["toilets"] == 2) { $toilet_2011 = "Not Available"; }
		
					 $formatReport['FormatReport']['toilet_09'] = $toilet_2009;
					 $formatReport['FormatReport']['toilet_10'] = $toilet_2009;
					 $formatReport['FormatReport']['toilet_11'] = $toilet_2009;
					 
					
					
					 $formatReport['FormatReport']['seating_capacity_09'] = "";
					 $formatReport['FormatReport']['seating_capacity_10'] = "";
					 $formatReport['FormatReport']['seating_capacity_11'] = "";
					 
					if($school["Smc2009"]["is_functional"] == 1) { $functionality_2009 = "Functional"; }else{ $functionality_2010 = "Not Functional"; }
					if($school["SemisSmc2010"]["is_functional_smc"] == 1) { $functionality_2010 = "Functional"; }else{ $functionality_2010 = "Not Functional"; }
					if($school["Smc2011"]["is_smc_func"] == 1) { $functionality_2011 = "Functional"; }else{ $functionality_2011 = "Not Functional"; } 
					 $formatReport['FormatReport']['smc_status_09'] = $functionality_2009;
					 $formatReport['FormatReport']['smc_status_10'] = $functionality_2010;
					 $formatReport['FormatReport']['smc_status_11'] = $functionality_2011;
					 
					 
					 $formatReport['FormatReport']['smc_ac_no'] = $school["Smc2011"]["ac_no"];
					 $formatReport['FormatReport']['smc_ac_title'] = $school["Smc2011"]["ac_title"];
					 $formatReport['FormatReport']['smc_bank'] = $school["Smc2011"]["bank_name"];
					 $formatReport['FormatReport']['smc_branch'] = $school["Smc2011"]["bank_branch"];
					 $formatReport['FormatReport']['smc_chairman'] = $school["Smc2011"]["smc_chairman_name"];
					 $formatReport['FormatReport']['smc_chairman_contact'] = $school["Smc2011"]["smc_chairman_phone"];
					 
					 
					 $formatReport['FormatReport']['enrl_katchi'] = ($school["SemisEnrollment2011"]["b_katchi"])+($school["SemisEnrollment2011"]["g_katchi"]);
					 $formatReport['FormatReport']['enrl_1'] = ($school["SemisEnrollment2011"]["b1"])+($school["SemisEnrollment2011"]["g1"]);
					 $formatReport['FormatReport']['enrl_2'] = ($school["SemisEnrollment2011"]["b2"])+($school["SemisEnrollment2011"]["g2"]);
					 $formatReport['FormatReport']['enrl_3'] = ($school["SemisEnrollment2011"]["b3"])+($school["SemisEnrollment2011"]["g3"]);
					 $formatReport['FormatReport']['enrl_4'] = ($school["SemisEnrollment2011"]["b4"])+($school["SemisEnrollment2011"]["g4"]);
					 $formatReport['FormatReport']['enrl_5'] = ($school["SemisEnrollment2011"]["b5"])+($school["SemisEnrollment2011"]["g5"]);
					 $formatReport['FormatReport']['enrl_6'] = ($school["SemisEnrollment2011"]["b6"])+($school["SemisEnrollment2011"]["g6"]);
					 $formatReport['FormatReport']['enrl_7'] = ($school["SemisEnrollment2011"]["b7"])+($school["SemisEnrollment2011"]["g7"]);
					 $formatReport['FormatReport']['enrl_8'] = ($school["SemisEnrollment2011"]["b8"])+($school["SemisEnrollment2011"]["g8"]);
					 $formatReport['FormatReport']['enrl_9'] = ($school["SemisEnrollment2011"]["b9_general"])+($school["SemisEnrollment2011"]["b9_computer"])+($school["SemisEnrollment2011"]["b9_biology"])+($school["SemisEnrollment2011"]["b9_commerce"])+($school["SemisEnrollment2011"]["b9_other"])+($school["SemisEnrollment2011"]["g9_general"])+($school["SemisEnrollment2011"]["g9_computer"])+($school["SemisEnrollment2011"]["g9_biology"])+($school["SemisEnrollment2011"]["g9_commerce"])+($school["SemisEnrollment2011"]["g9_other"]);
					 $formatReport['FormatReport']['enrl_10'] = ($school["SemisEnrollment2011"]["b10_general"])+($school["SemisEnrollment2011"]["b10_computer"])+($school["SemisEnrollment2011"]["b10_biology"])+($school["SemisEnrollment2011"]["b10_commerce"])+($school["SemisEnrollment2011"]["b10_other"])+($school["SemisEnrollment2011"]["g10_general"])+($school["SemisEnrollment2011"]["g10_computer"])+($school["SemisEnrollment2011"]["g10_biology"])+($school["SemisEnrollment2011"]["g10_commerce"])+($school["SemisEnrollment2011"]["g10_other"]);
					 $formatReport['FormatReport']['enrl_11'] = ($school["SemisEnrollment2011"]["b11_general"])+($school["SemisEnrollment2011"]["b11_computer"])+($school["SemisEnrollment2011"]["b11_premedical"])+($school["SemisEnrollment2011"]["b11_preengineering"])+($school["SemisEnrollment2011"]["b11_commerce"])+($school["SemisEnrollment2011"]["b11_other"])+($school["SemisEnrollment2011"]["g11_general"])+($school["SemisEnrollment2011"]["g11_computer"])+($school["SemisEnrollment2011"]["g11_premedical"])+($school["SemisEnrollment2011"]["g11_preengineering"])+($school["SemisEnrollment2011"]["g11_commerce"])+($school["SemisEnrollment2011"]["g11_other"]);
					 $formatReport['FormatReport']['enrl_12'] = ($school["SemisEnrollment2011"]["b12_general"])+($school["SemisEnrollment2011"]["b12_computer"])+($school["SemisEnrollment2011"]["b12_premedical"])+($school["SemisEnrollment2011"]["b12_preengineering"])+($school["SemisEnrollment2011"]["b12_commerce"])+($school["SemisEnrollment2011"]["b12_other"])+($school["SemisEnrollment2011"]["g12_general"])+($school["SemisEnrollment2011"]["g12_computer"])+($school["SemisEnrollment2011"]["g12_premedical"])+($school["SemisEnrollment2011"]["g12_preengineering"])+($school["SemisEnrollment2011"]["g12_commerce"])+($school["SemisEnrollment2011"]["g12_other"]);
					 
					 
					 $formatReport['FormatReport']['ddo_name'] = $school["SsbBudgetFinal"]["ddo_name"];
					 $formatReport['FormatReport']['ddo_code'] = $school["SsbBudgetFinal"]["ddo_code"];
					 $formatReport['FormatReport']['475_inclass'] = $school["SsbBudgetFinal"]["475_inclass"];
					 $formatReport['FormatReport']['476_library'] = $school["SsbBudgetFinal"]["476_library"];
					 $formatReport['FormatReport']['477_co_curricular'] = $school["SsbBudgetFinal"]["477_cocurricular"];
					 $formatReport['FormatReport']['478_sports'] = $school["SsbBudgetFinal"]["478_sport"];
					 $formatReport['FormatReport']['479_ta'] = $school["SsbBudgetFinal"]["479_ta"];
					 $formatReport['FormatReport']['480_stationary'] = $school["SsbBudgetFinal"]["480_stationary"];
					 $formatReport['FormatReport']['total_ssb'] = $school["SsbBudgetFinal"]["ssb_select"];
					 $formatReport['FormatReport']['ssb_posts'] = $school["SsbBudgetFinal"]["total_teachers"];
					
					$this->FormatReport->save($formatReport);
				}
	}
	
	function ssb_distribute()
	{
		// Get All District
		$districts = $this->SemisCodeDistrict->find('all');
		$this->set('districts',$districts);	
		
		//Get All Tehsils
		$tehsils = $this->semisCodesDistrictTehsil->find('all');
		$this->set('tehsils',$tehsils);
		
		//Get All Union Councils
		$union_councils = $this->SemisCodeUc->find('all');
		$this->set('union_councils',$union_councils);
	}
	
	
	function ssb_ddo_details($report = null, $district_id = null, $tehsil_id = null)
	{
		$conditions = array();
		
		if(!(($district_id == null) || ($district_id == "0")))
		{
			$conditions['district_id'] = $district_id;
		}
		
		if(!(($tehsil_id == null) || ($tehsil_id == "0")))
		{
			$conditions['tehsil_id'] = $tehsil_id;
		}
		
		$ddos = $this->DdoInfo->find('all',array ('conditions'=>$conditions));
		
		$this->set('ddos', $ddos);
	
	
	}
	
	function ssb_school_distribution($ddo_id = null, $type = null, $download = null)
	{
		$type = null;
		if($download != null)
		{
				$conditions['id'] = $ddo_id;
				$ddo = $this->DdoInfo->find('first',array ('conditions'=>$conditions));
				
				$this->RequestHandler->setContent('xls', 'application/vnd.ms-excel'); 
					$this->layout = "xls";
				if(isset($this->params["url"]["start_day"]))
				{
					$startDate = $this->params["url"]["start_year"]."-". $this->params["url"]["start_month"]."-". $this->params["url"]["start_day"]." 00:00:00";
					$endDate = $this->params["url"]["end_year"]."-". $this->params["url"]["end_month"]."-". $this->params["url"]["end_day"]." 59:59:59";			
					
					$this->Set("startDate",$this->params["url"]["start_day"]);
					$this->Set("startYear",$this->params["url"]["start_year"]);
					$this->Set("startMonth",$this->params["url"]["start_month"]);
					
					$this->Set("endDate",$this->params["url"]["end_day"]);
					$this->Set("endYear",$this->params["url"]["end_year"]);
					$this->Set("endMonth",$this->params["url"]["end_month"]);
				}
				else
				{
					$startDate = date("Y-m")."-1 00:00:00";
					$endDate = date("Y-m")."-31 24:60:60";
					
					$this->Set("startDate","1");
					$this->Set("startYear",date("Y"));
					$this->Set("startMonth",date("m"));
					
					$this->Set("endDate","31");
					$this->Set("endYear",date("Y"));
					$this->Set("endMonth",date("m"));
				}
				$this->set("filename","SSB_".$ddo['DdoInfo']['ddo_code']);	
		}
		
		$conditions = array();
		if($type == null)
		{
			if(!(($ddo_id == null) || ($ddo_id == "0")))
			{
				//getting the ddo details
				$conditions['id'] = $ddo_id;
				$ddo = $this->DdoInfo->find('first',array ('conditions'=>$conditions));
				//setting ddo details for the view
				$this->set('ddo', $ddo);
				
				$levels = explode(",", $ddo['DdoInfo']['school_levels']);
				
				$conditions = array();
				$sql = array();
				
				// foreach($levels as $school_level)
				// {
					// if($school_level == "Primary")
							// {
								// if($ddo['DdoInfo']["gender_id"] == 1)	
								// {
									// $sql[] = array('SsBudget.prefix LIKE' => '%GBP%');
								// }
								// if($ddo['DdoInfo']["gender_id"] == 2)	
								// {	
									// $sql[] = array('SsBudget.prefix LIKE' => '%GGP%');
								// }	
							// }
							
							// if($school_level == "Middle")
							// {
								// if($ddo['DdoInfo']["gender_id"] == 1)	
								// {
									// $sql[] = array('SsBudget.prefix LIKE' => '%GBL%');
								// }
								// if($ddo['DdoInfo']["gender_id"] == 2)	
								// {
									// $sql[] = array('SsBudget.prefix LIKE' => '%GGL%');
								// }
							// }
							
							// if($school_level == "Elementary")
							// {
								// if($ddo['DdoInfo']["gender_id"] == 1)	
								// {
									// $sql[] = array('SsBudget.prefix LIKE' => '%GBEL%');
								// }
								// if($ddo['DdoInfo']["gender_id"] == 2)	
								// {
									// $sql[] = array('SsBudget.prefix LIKE' => '%GGEL%');
								// }
							// }
							
							// if($school_level == "High")
							// {
								// if($ddo['DdoInfo']["gender_id"] == 1)	
								// {
									// $sql[] = array('SsBudget.prefix' => 'GBHS');
								// }
								// if($ddo['DdoInfo']["gender_id"] == 2)	
								// {
									// $sql[] = array('SsBudget.prefix' => 'GGHS');
								// }
							// }
							
							// if($school_level == "HigherSecondary")
							// {
								// if($ddo['DdoInfo']["gender_id"] == 1)	
								// {
									// $sql[] = array('SsBudget.prefix LIKE' => '%GBHSS%');
								// }
								// if($ddo['DdoInfo']["gender_id"] == 2)	
								// {
									// $sql[] = array('SsBudget.prefix LIKE' => '%GGHSS%');
								// }
							// }
				// }
				
				$conditions['OR'] = $sql;
				
				$conditions['district_id'] = $ddo['DdoInfo']['district_id'];
				$conditions['tehsil_id'] = $ddo['DdoInfo']['tehsil_id'];
				$conditions['functionality !='] = "Perm. Closed";
				
				
				// $schools = $this->SsBudget->find('all',array ('conditions'=>$conditions));
				$schools = $this->SsBudget->find('all',array ('conditions'=>array('ddo_code'=>$ddo['DdoInfo']['ddo_code'])));
				
				
				
				//count Primary
				$primary_count = 0;
				$total_enrollment = 0;
				$total_rooms = 0;
				
				foreach($schools as $school)
				{	
					if($school['SsBudget']['prefix'] == "GBPS" || $school['SsBudget']['prefix'] == "GGPS")
					{
						$primary_count++;
						
						$total_enrollment += $school['SsBudget']['total_enrollment_1_to_12'];
						$total_rooms += $school['SsBudget']['total_rooms'];
					}
				}
				
				//count Middle
				$middle_count = 0;
				foreach($schools as $school)
				{
					if($school['SsBudget']['prefix'] == "GBLSS" || $school['SsBudget']['prefix'] == "GGLSS")
					{
						$middle_count++;
						
						$total_enrollment += $school['SsBudget']['total_enrollment_1_to_12'];
						$total_rooms += $school['SsBudget']['total_rooms'];
					}
				}
				//count Elementary
				$elementary_count = 0;
				foreach($schools as $school)
				{
					if($school['SsBudget']['prefix'] == "GBELS" || $school['SsBudget']['prefix'] == "GGELS")
					{
						$elementary_count++;
						
						$total_enrollment += $school['SsBudget']['total_enrollment_1_to_12'];
						$total_rooms += $school['SsBudget']['total_rooms'];
					}
				}
				//count High
				$high_count = 0;
				foreach($schools as $school)
				{
					if($school['SsBudget']['prefix'] == "GBHS" || $school['SsBudget']['prefix'] == "GGHS")
					{
						$high_count++;
						
						$total_enrollment += $school['SsBudget']['total_enrollment_1_to_12'];
						$total_rooms += $school['SsBudget']['total_rooms'];
					}
				}
				//count Higher Secondary
				$higher_secondary_count = 0;
				foreach($schools as $school)
				{
					if($school['SsBudget']['prefix'] == "GBHSS" || $school['SsBudget']['prefix'] == "GGHSS")
					{
						$higher_secondary_count++;
						
						$total_enrollment += $school['SsBudget']['total_enrollment_1_to_12'];
						$total_rooms += $school['SsBudget']['total_rooms'];
					}
				}
				
				$total_ssb = $ddo['DdoInfo']['ssb_total'];
				$rooms_ssb = $total_ssb * (0.35);
				$students_ssb = $total_ssb * (0.45);
				$school_level_ssb = $total_ssb * (0.2);
				
				//SSB on Each Room 
				$each_room_ssb = $rooms_ssb/$total_rooms;
				
				
				//within 20% of School level SSB distribution
				$primary_level_ssb = $school_level_ssb * (0.5);
				$middle_level_ssb = $school_level_ssb * (0.1);
				$elementary_level_ssb = $school_level_ssb * (0.15);
				$h_hs_level_ssb = $school_level_ssb * (0.25);
				
				//Primary distribution
				if(!($primary_count == 0))
				{
					$each_school_primary = $primary_level_ssb/$primary_count;
					if($each_school_primary > 10000)
					{
						$each_school_primary = 10000;
						
						$students_ssb += $primary_level_ssb-($primary_count * 10000);
					}
				}else
				{
					$students_ssb += $primary_level_ssb;
				}
				//Middle Distribution
				if(!($middle_count == 0))
				{
					$each_school_middle = $middle_level_ssb/$middle_count;
					if($each_school_middle > 10000)
					{
						$each_school_middle = 10000;
						
						$students_ssb += $middle_level_ssb-($middle_count * 10000);
					}
				}else
				{
					$students_ssb += $middle_level_ssb;
				}
				
				//Elementary Distribution
				if(!($elementary_count  == 0))
				{
					$each_school_elementary = $elementary_level_ssb/$elementary_count;
					if($each_school_elementary > 20000)
					{
						$each_school_elementary = 20000;
						
						$students_ssb += $elementary_level_ssb-($elementary_count * 20000);
					}
				}else
				{
					$students_ssb += $elementary_level_ssb;
				}
				
				//high School and Higher Secondary School Distribution
				if(!(($high_count+$higher_secondary_count)  == 0))
				{
					$each_school_h_hs = $h_hs_level_ssb/($high_count+$higher_secondary_count);
					if($each_school_h_hs > 30000)
					{
						$each_school_h_hs = 30000;
						
						$students_ssb += $h_hs_level_ssb-(($high_count+$higher_secondary_count) * 30000);
					}
				}else
				{
					$students_ssb += $h_hs_level_ssb;
				}
				
				
				//SSB on Each Student
				$each_student_ssb = $students_ssb/$total_enrollment;
				
				
				foreach($schools as $school)
				{
					if($school['SsBudget']['prefix'] == "GBPS" || $school['SsBudget']['prefix'] == "GGPS")
					{
						$school_total_ssb = $each_school_primary;
					}
					if($school['SsBudget']['prefix'] == "GBLSS" || $school['SsBudget']['prefix'] == "GGLSS")
					{
						$school_total_ssb = $each_school_middle;
					}
					if($school['SsBudget']['prefix'] == "GBELS" || $school['SsBudget']['prefix'] == "GGELS")
					{
						$school_total_ssb = $each_school_elementary;
					}
					if($school['SsBudget']['prefix'] == "GBHS" || $school['SsBudget']['prefix'] == "GGHS")
					{
						$school_total_ssb = $each_school_h_hs;
					}
					if($school['SsBudget']['prefix'] == "GBHSS" || $school['SsBudget']['prefix'] == "GGHSS")
					{
						$school_total_ssb = $each_school_h_hs;
					}
					
					$school_total_ssb += ($school['SsBudget']['total_rooms'] * $each_room_ssb);
					$school_total_ssb += ($school['SsBudget']['total_enrollment_1_to_12'] * $each_student_ssb);
					
					$inclass_475 = $school_total_ssb * (0.3);  // inclass material
					$lib_lab_476 = $school_total_ssb * (0.2);  // library & Labortary
					$co_curr_477 = $school_total_ssb * (0.1);  // Co-Curricular Activities
					$other_spo_478 = $school_total_ssb * (0.1);  // Other Sports
					$ta_479 = $school_total_ssb * (0.1);  // Travelling Allowance
					$stationary_480 = $school_total_ssb * (0.2);  // Stationary
					
					$this->SsBudget->id = $school['SsBudget']['id'];
					
					$SchoolUpdateArray = array();
					$SchoolUpdateArray['SsBudget']['475'] = $inclass_475;
					$SchoolUpdateArray['SsBudget']['476'] = $lib_lab_476;
					$SchoolUpdateArray['SsBudget']['477'] = $co_curr_477;
					$SchoolUpdateArray['SsBudget']['478'] = $other_spo_478;
					$SchoolUpdateArray['SsBudget']['479'] = $ta_479;
					$SchoolUpdateArray['SsBudget']['480'] = $stationary_480;
					$SchoolUpdateArray['SsBudget']['total_ssb'] = $school_total_ssb;
					$SchoolUpdateArray['SsBudget']['ddo_code'] = $ddo['DdoInfo']['ddo_code'];
						
					$this->SsBudget->save($SchoolUpdateArray);	
					
				}
				
				//Finding Schools after the distribution
				// $schools = $this->SsBudget->find('all',array ('conditions'=>$conditions));
				$schools = $this->SsBudget->find('all',array ('conditions'=>array('ddo_code'=>$ddo['DdoInfo']['ddo_code'])));
				$this->set('schools', $schools);
				
			}else
			{
				
			}
		}else
		{
				$conditions['id'] = $ddo_id;
				$ddo = $this->DdoInfo->find('first',array ('conditions'=>$conditions));
				//setting ddo details for the view
				$this->set('ddo', $ddo);
				
				$levels = explode(",", $ddo['DdoInfo']['school_levels']);
				
				$conditions = array();
				$sql = array();
				
				
				foreach($levels as $school_level)
				{
					if($school_level == "Primary")
							{
								if($ddo['DdoInfo']["gender_id"] == 1)	
								{
									$sql[] = array('SsBudget.prefix LIKE' => '%GBP%');
								}
								if($ddo['DdoInfo']["gender_id"] == 2)	
								{	
									$sql[] = array('SsBudget.prefix LIKE' => '%GGP%');
								}	
							}
							
							if($school_level == "Middle")
							{
								if($ddo['DdoInfo']["gender_id"] == 1)	
								{
									$sql[] = array('SsBudget.prefix LIKE' => '%GBL%');
								}
								if($ddo['DdoInfo']["gender_id"] == 2)	
								{
									$sql[] = array('SsBudget.prefix LIKE' => '%GGL%');
								}
							}
							
							if($school_level == "Elementary")
							{
								if($ddo['DdoInfo']["gender_id"] == 1)	
								{
									$sql[] = array('SsBudget.prefix LIKE' => '%GBEL%');
								}
								if($ddo['DdoInfo']["gender_id"] == 2)	
								{
									$sql[] = array('SsBudget.prefix LIKE' => '%GGEL%');
								}
							}
							
							if($school_level == "High")
							{
								if($ddo['DdoInfo']["gender_id"] == 1)	
								{
									$sql[] = array('SsBudget.prefix' => 'GBHS');
								}
								if($ddo['DdoInfo']["gender_id"] == 2)	
								{
									$sql[] = array('SsBudget.prefix' => 'GGHS');
								}
							}
							
							if($school_level == "HigherSecondary")
							{
								if($ddo['DdoInfo']["gender_id"] == 1)	
								{
									$sql[] = array('SsBudget.prefix LIKE' => '%GBHSS%');
								}
								if($ddo['DdoInfo']["gender_id"] == 2)	
								{
									$sql[] = array('SsBudget.prefix LIKE' => '%GGHSS');
								}
							}
				}
					
				$conditions['OR'] = $sql;
				
				$conditions['district_id'] = $ddo['DdoInfo']['district_id'];
				$conditions['tehsil_id'] = $ddo['DdoInfo']['tehsil_id'];
				$conditions['functionality !='] = "Perm. Closed";
				
				
				// $schools = $this->SsBudget->find('all',array ('conditions'=>$conditions));
				$schools = $this->SsBudget->find('all',array ('conditions'=>array('ddo_code'=>$ddo['DdoInfo']['ddo_code'])));
				$this->set('ddo', $ddo);
				$this->set('schools', $schools);
		}
	}
	
	function ssb_ddo_edit($ddo_id = null)
	{
		if(!empty($this->params['form']))
		{
			
			$ddoUpdateArray['DdoInfo']['id'] = $ddo_id;
			// $ddoUpdateArray['DdoInfo']['ddo_name'] = $this->params['form']['ddo_name'];
			// $ddoUpdateArray['DdoInfo'][''] = $this->params['form']['ddo_code'];
			// $ddoUpdateArray['DdoInfo'][''] = $this->params['form'][''];
			// $ddoUpdateArray['DdoInfo'][''] = $this->params['form'][''];
			// $ddoUpdateArray['DdoInfo'][''] = $this->params['form'][''];
			// $ddoUpdateArray['DdoInfo'][''] = $this->params['form'][''];
			// $ddoUpdateArray['DdoInfo'][''] = $this->params['form'][''];
			$ddoUpdateArray['DdoInfo']['total_sne'] = $this->params['form']['total_sne'];
			$ddoUpdateArray['DdoInfo']['school_levels'] = $this->params['form']['school_levels'];
			
				$this->DdoInfo->save($ddoUpdateArray);	
		}else
		{
			$conditions['id'] = $ddo_id;
			$ddo = $this->DdoInfo->find('first',array ('conditions'=>$conditions));
			
			$this->set('ddo', $ddo);
		}
	}
	
	
	function ssb_rationalization($id = 1)
	{
		
		$ddos = $this->DdoInfo->find('all', array('conditions' => array('total_sne >' => 0, 'id' => $id)));
		
		foreach ($ddos as $ddo) {
			$total_psts = $ddo['DdoInfo']['total_sne'];
			$teachers = array();
			$x = 0;
			$schools = $this->SsBudget->find('all', array('conditions' => array('ddo_code' => $ddo['DdoInfo']['ddo_code'])));
			foreach($schools as $school) {
				$x++;
				if($school['SsBudget']['prefix'] == "GBPS" || $school['SsBudget']['prefix'] == "GGPS" || $school['SsBudget']['prefix'] == "GBELS" || $school['SsBudget']['prefix'] == "GGELS")
				{
					if($total_psts > 0)
					{
						$teachers[$x] += 1;
						$total_psts -= 1;
					}else
					{
						break;
					}
				}
			}
			$x = 0;
			foreach($schools as $school) {
				if($total_psts > 0)
					{
						if($school['SsBudget']['prefix'] == "GBPS" || $school['SsBudget']['prefix'] == "GGPS" || $school['SsBudget']['prefix'] == "GBELS" || $school['SsBudget']['prefix'] == "GGELS")
						{
							$str_teachers = ($school['SsBudget']['total_enrollment_1_to_12'])/30;
							$str_teachers = round($str_teachers);
							if($str_teachers > 0)
							{
								if($total_psts >= ($str_teachers-1)) {
									$teachers[$x] += $str_teachers-1;
									$total_psts -= ($str_teachers-1);
								}else
								{
									$teachers[$x] += $total_psts;
									$total_psts -= $total_psts;
									break;
								}
							}	
						}
					}else
					{
						break;
					}
				
				$x++;
			}
			
			for ($i=1; $i<=50; $i++)
			{
				$x =0;
				foreach($schools as $school)
				{
					if($total_psts > 0)
					{
						if($school['SsBudget']['prefix'] == "GBPS" || $school['SsBudget']['prefix'] == "GGPS" || $school['SsBudget']['prefix'] == "GBELS" || $school['SsBudget']['prefix'] == "GGELS")
						{
							// echo ($teachers[$x]).'<br>';
							// echo ($teacher_limit).'<br>';
							// echo ($school['SsBudget']['total_rooms']).'<br>';
							// echo ($room_limit).'<br>';
							
							if($teachers[$x] < $school['SsBudget']['total_rooms']) {
								$teachers[$x] += 1;
								$total_psts -= 1;
							}
						}
					}else
					{
						break;
					}
					$x++;
				}
			
			}	
			
			
			while($total_psts > 0)
			{
			$x = 0;
			foreach($schools as $school)
			{
				if($total_psts > 0)
					{
						if($school['SsBudget']['prefix'] == "GBPS" || $school['SsBudget']['prefix'] == "GGPS" || $school['SsBudget']['prefix'] == "GBELS" || $school['SsBudget']['prefix'] == "GGELS")
						{
							$teachers[$x] += 1;
							$total_psts -= 1;
						}
					}else
					{
						break;
					}
					$x++;
			}
			}
			
			break;
		}
		
		$x = 0;
		foreach($schools as $school)
		{
			
			if($school['SsBudget']['prefix'] == "GBPS" || $school['SsBudget']['prefix'] == "GGPS" || $school['SsBudget']['prefix'] == "GBELS" || $school['SsBudget']['prefix'] == "GGELS")
			{
				$schoolupdatearray = array();
				$schoolupdatearray['SsBudget']['total_rationalize'] = $teachers[$x];
				
				$this->SsBudget->id = $school['SsBudget']['id'];
				$this->SsBudget->save($schoolupdatearray);
			}
			$x++;
		}
		$this->set('teachers',$teachers);
		$this->set('schools',$schools);
	}
	
	function ssb_budget_schools($ddo_id = null, $download = null)
	{
		
		if($download != null)
		{
				$conditions['id'] = $ddo_id;
				$ddo = $this->DdoInfo->find('first',array ('conditions'=>$conditions));
				
				$this->RequestHandler->setContent('xls', 'application/vnd.ms-excel'); 
					$this->layout = "xls";
				if(isset($this->params["url"]["start_day"]))
				{
					$startDate = $this->params["url"]["start_year"]."-". $this->params["url"]["start_month"]."-". $this->params["url"]["start_day"]." 00:00:00";
					$endDate = $this->params["url"]["end_year"]."-". $this->params["url"]["end_month"]."-". $this->params["url"]["end_day"]." 59:59:59";			
					
					$this->Set("startDate",$this->params["url"]["start_day"]);
					$this->Set("startYear",$this->params["url"]["start_year"]);
					$this->Set("startMonth",$this->params["url"]["start_month"]);
					
					$this->Set("endDate",$this->params["url"]["end_day"]);
					$this->Set("endYear",$this->params["url"]["end_year"]);
					$this->Set("endMonth",$this->params["url"]["end_month"]);
				}
				else
				{
					$startDate = date("Y-m")."-1 00:00:00";
					$endDate = date("Y-m")."-31 24:60:60";
					
					$this->Set("startDate","1");
					$this->Set("startYear",date("Y"));
					$this->Set("startMonth",date("m"));
					
					$this->Set("endDate","31");
					$this->Set("endYear",date("Y"));
					$this->Set("endMonth",date("m"));
				}
				$this->set("filename","SSB_School_Budget_".$ddo['DdoInfo']['ddo_code']);	
		}
		
		$conditions['id'] = $ddo_id;
		$ddo = $this->DdoInfo->find('first',array ('conditions'=>$conditions));
		//setting ddo details for the view
		$this->set('ddo', $ddo);
		
		$levels = explode(",", $ddo['DdoInfo']['school_levels']);
		
		$conditions = array();
		$sql = array();
		
		
		// foreach($levels as $school_level)
		// {	
		
			
			
			
			// if($school_level == "Primary")
					// {
						// if($ddo['DdoInfo']["gender_id"] == 1)	
						// {
							// $sql[] = array('SsBudget.prefix LIKE' => '%GBP%');
						// }
						// if($ddo['DdoInfo']["gender_id"] == 2)	
						// {	
							// $sql[] = array('SsBudget.prefix LIKE' => '%GGP%');
						// }	
					// }
					
					// if($school_level == "Middle")
					// {
						// if($ddo['DdoInfo']["gender_id"] == 1)	
						// {
							// $sql[] = array('SsBudget.prefix LIKE' => '%GBL%');
						// }
						// if($ddo['DdoInfo']["gender_id"] == 2)	
						// {
							// $sql[] = array('SsBudget.prefix LIKE' => '%GGL%');
						// }
					// }
					
					// if($school_level == "Elementary")
					// {
						// if($ddo['DdoInfo']["gender_id"] == 1)	
						// {
							// $sql[] = array('SsBudget.prefix LIKE' => '%GBEL%');
						// }
						// if($ddo['DdoInfo']["gender_id"] == 2)	
						// {
							// $sql[] = array('SsBudget.prefix LIKE' => '%GGEL%');
						// }
					// }
					
					// if($school_level == "High")
					// {
						// if($ddo['DdoInfo']["gender_id"] == 1)	
						// {
							// $sql[] = array('SsBudget.prefix' => 'GBHS');
						// }
						// if($ddo['DdoInfo']["gender_id"] == 2)	
						// {
							// $sql[] = array('SsBudget.prefix' => 'GGHS');
						// }
					// }
					
					// if($school_level == "HigherSecondary")
					// {
						// if($ddo['DdoInfo']["gender_id"] == 1)	
						// {
							// $sql[] = array('SsBudget.prefix LIKE' => '%GBHSS%');
						// }
						// if($ddo['DdoInfo']["gender_id"] == 2)	
						// {
							// $sql[] = array('SsBudget.prefix LIKE' => '%GGHSS');
						// }
					// }
		// }
			
		$conditions['OR'] = $sql;
		
		$conditions['district_id'] = $ddo['DdoInfo']['district_id'];
		$conditions['tehsil_id'] = $ddo['DdoInfo']['tehsil_id'];
		$conditions['functionality !='] = "Perm. Closed";
		
		
		// $schools = $this->SsBudget->find('all',array ('conditions'=>$conditions));
		$schools = $this->SsBudget2->find('all',array ('conditions'=>array('ddo_code'=>$ddo['DdoInfo']['ddo_code'])));
		$budget_heads = $this->BudgetHead->find('all');
		$ddo_budget = $this->DdoBudget->find('all',array('conditions'=>array('ddo_code'=>$ddo['DdoInfo']['ddo_code'])));
		//print_r($ddo_budget);
		$this->set('ddo', $ddo);
		$this->set('schools', $schools);
		$this->set('budget_heads', $budget_heads);
		$this->set('ddo_budget', $ddo_budget);
	}
	
	function benazirabad_schools($distance = 1.5, $school_number = 20, $cid = null)
	{
		for($i = 0; $i < 100; $i++)
		{
			if($cid == null)
			{
				
				//for cluster id
				$order[] = 'cluster_id DESC';
				$schools_clusters = $this->Benazirabad->find('first',array('order'=>$order));
				$x = $schools_clusters['Benazirabad']['cluster_id']+1;
				$schools_clusters = $this->Benazirabad->find('all',array('conditions'=>array('head_id'=>999999)));
			}else
			{
				$x = $cid;
				$schools_clusters = $this->Benazirabad->find('all',array('conditions'=>array('head_id'=>999999)));
			}
				
			foreach($schools_clusters as $schools_cluster)
			{
				// $schools = $this->Benazirabad->query("SELECT id, benazirabads.id, benazirabads.district, benazirabads.tehsil, benazirabads.uc, benazirabads.school_id, ( 6371 * acos( cos( radians(".$schools_cluster['Benazirabad']['x'].") ) * cos( radians( X ) ) * cos( radians(Y) - radians(".$schools_cluster['Benazirabad']['y'].")) + sin(radians(".$schools_cluster['Benazirabad']['x']."))   * sin( radians(X)))) AS distance FROM benazirabads WHERE benazirabads.cluster_id is null HAVING distance < ".$distance." ORDER BY distance LIMIT 0 , ".$school_number.";");
				$schools = $this->Benazirabad->query("SELECT id, benazirabads.id, benazirabads.district, benazirabads.tehsil, benazirabads.uc, benazirabads.school_id, ( 6371 * 2 * ASIN( SQRT( POWER(SIN((".$schools_cluster['Benazirabad']['y']." - abs( benazirabads.y)) * pi()/180 / 2), 2) + COS(".$schools_cluster['Benazirabad']['y']." * pi()/180 ) * COS(abs(benazirabads.y) * pi()/180) * POWER(SIN((".$schools_cluster['Benazirabad']['x']." - benazirabads.x) * pi()/180 / 2), 2) ))) AS distance  FROM benazirabads WHERE cluster_id is null HAVING distance < ".$distance." ORDER BY distance LIMIT 0 , ".$school_number.";");
				// $schools = $this->Benazirabad->query("SELECT id, benazirabads.id, benazirabads.district, benazirabads.tehsil, benazirabads.uc, benazirabads.school_id, ( 6371 * acos( cos( radians(".$schools_cluster['Benazirabad']['x'].") ) * cos( radians( X ) ) * cos( radians(Y) - radians(".$schools_cluster['Benazirabad']['y'].")) + sin(radians(".$schools_cluster['Benazirabad']['x']."))   * sin( radians(X)))) AS distance FROM benazirabads WHERE done != 1 HAVING distance < ".$distance." ORDER BY distance LIMIT 0 , ".$school_number.";");
				// debug($schools);
				if(count($schools) < 1)
				{
					
					// break;
					
				}else
				{
					foreach($schools as $school)
					{
						$this->Benazirabad->id = $school['benazirabads']['id'];
						
						$schoolUpdateArray = array();				
						$schoolUpdateArray['Benazirabad']['cluster_id'] = $x;
						
						$schoolUpdateArray['Benazirabad']['head_id'] = $schools_cluster['Benazirabad']['school_id'];
						$schoolUpdateArray['Benazirabad']['distance'] = $school[0]['distance'];
						
						$this->Benazirabad->save($schoolUpdateArray);
					}
					$x++;
				}
				break;
			}
		}
		
		$schools = $this->Benazirabad->find('all');
		
		$this->set('schools',$schools);
	}
	
	function benazirabad_cluster($sch_id = null, $distance = 5000, $schools = 4)
	{
		
		$clusters = $this->Benazirabad->query("select cluster_id, count(cluster_id) AS count_cluster from benazirabads group by cluster_id order by count_cluster");
		
		$clusterIdArray = array();
		foreach($clusters as $cluster)
		{
			if($cluster[0]['count_cluster'] == 4)
			{
				
				$clusterIdArray[] = $cluster['benazirabads']['cluster_id'];
				
			}
		}

		$cluster_schools = $this->Benazirabad->find('all',array('conditions'=>array('cluster_id'=>$clusterIdArray)));
		foreach($cluster_schools as $cluster_school)
		{
			$this->Benazirabad->id = $cluster_school['Benazirabad']['id'];
					
			$schoolUpdateArray = array();				
			
			$schoolUpdateArray['Benazirabad']['done'] = 1;
			
			$this->Benazirabad->save($schoolUpdateArray);
		}
		
		$school = $this->Benazirabad->find('first',array('conditions'=>array('school_id'=>$sch_id)));
		
		
		$schools = $this->Benazirabad->query("SELECT id, benazirabads.distance, benazirabads.district, benazirabads.tehsil, benazirabads.uc, benazirabads.school_id, ( 6371 * acos( cos( radians(".$school['Benazirabad']['x'].") ) * cos( radians( X ) ) * cos( radians(Y) - radians(".$school['Benazirabad']['y'].")) + sin(radians(".$school['Benazirabad']['x']."))   * sin( radians(X)))) AS distance FROM benazirabads HAVING distance < ".$distance." ORDER BY distance LIMIT 0 , ".$schools.";");
		
		$this->set('schools',$schools);
	}
	
	function semis_form_p1($id = null)
	{
		if($id != null)
		{
			$uname = $id;
		}else
		{
			$uname = $this->Auth->user('username');
		}
		
		$this->set('semis', $uname);
		
		if(!($uname == 'admin') && !($uname == 'tesths'))
		{
			$semisSchools = $this->Univ2012a->find('all',array('conditions'=>array('school_id'=>$uname)));
			$this->set('schools',$semisSchools);
		}
		
		$banks = $this->codesForBank->find('all');
		$this->set('banks',$banks);	
		
		$typeofposts = $this->codesForTypeOfPost->find('all');
		$this->set('typeofposts',$typeofposts);	
		
		$codesteacherqualifications = $this->codesForTeachersQualification->find('all');
		$this->set('codesteacherqualifications',$codesteacherqualifications);
		
		$codesteachertrainings = $this->codesForTeachersTraining->find('all');
		$this->set('codesteachertrainings',$codesteachertrainings);
		
		$codesteacherdesignations = $this->codesForTeachersDesignation->find('all');
		$this->set('codesteacherdesignations',$codesteacherdesignations);
		
		
		$districts = $this->SemisCodeDistrict->find('all');
		$this->set('districts',$districts);	
		// $this->layout = "defaultsemis";
		
		$tehsils = $this->CodesForDistrictAndTehsil->find('all');
		$this->set('tehsils',$tehsils);	
		$union_councils = $this->CodesForUc->find('all');
		$this->set('union_councils',$union_councils);	
		
	}
	
	function semis_form_p1_edit($id = null, $action = null)
	{
		
		
		
		$this->set('action',$action);
		
		if($id != null)
		{
			
			if($id == 'newschool')
			{
				$id = "9";
				$x = 1;
				for($a=0; $x<100; $a++)
				{
				$dis = $this->Auth->user('district');
				
				$id .= $dis;
				
				$id .= mt_rand(1000000,9999999);
				
					$semisSchools = $this->Univ2012a->find('first',array('conditions'=>array('school_id'=>$id)));
					if(empty($semisSchools))
					{
						break;
					}
				}
				$uname = $id;
				
				$semisSchools['Univ2012a']['school_id'] = $id;
				$semisSchools['Univ2012a']['coord_long'] = 0;
				$semisSchools['Univ2012a']['coord_lat'] = 0;
				$semisSchools['Univ2012a']['DistrictID'] = 0;
				
				$this->Univ2012a->Saveall($semisSchools);
				
			}else
			{
				$uname = $id;
			}
		}else
		{
			$uname = $this->Auth->user('username');
		}
		$this->set('semis', $uname);
		// if(!($uname == 'admin') && !($uname == 'tesths'))
		// {
			$usid = $this->Auth->user('id');
			$semisSchools = $this->SemisUniversal201415->find('first',array('conditions'=>array('school_semis_new'=>$uname))); 
			
			if(empty($semisSchools))
			{
				$semisSchools = $this->Univ2012a->find('first',array('conditions'=>array('school_id'=>$uname)));
				
				$merged_schools_array = $this->SemisConsolidationUniv201415->find('all',array('conditions'=>array('campus_id'=>$semisSchools['Univ2012a']['school_id'])));
				$this->set('merged_schools_array',$merged_schools_array);
				
				if($semisSchools['Univ2012a']['school_id'] == $semisSchools['Univ2012a']['Campus_Schoolid'])
				{				
					$SemisUniversal201415EmptyArray['SemisUniversal201415']['campus_school'] = 1;
				}
				$SemisUniversal201415EmptyArray['SemisUniversal201415']['school_semis_new'] = $semisSchools['Univ2012a']['school_id'];
				$SemisUniversal201415EmptyArray['SemisUniversal201415']['coord_long'] = $semisSchools['Univ2012a']['coord_long'];
				$SemisUniversal201415EmptyArray['SemisUniversal201415']['coord_lat'] = $semisSchools['Univ2012a']['coord_lat'];
				$SemisUniversal201415EmptyArray['SemisUniversal201415']['bi_school_district'] = $semisSchools['Univ2012a']['DistrictID'];
				$SemisUniversal201415EmptyArray['SemisUniversal201415']['bi_school_taluka'] = $semisSchools['Univ2012a']['TehsilID'];
				$SemisUniversal201415EmptyArray['SemisUniversal201415']['bi_school_uc'] = $semisSchools['Univ2012a']['UnionCouncilID'];
				$SemisUniversal201415EmptyArray['SemisUniversal201415']['bi_school_tappa'] = $semisSchools['Univ2012a']['TappaID'];
				$SemisUniversal201415EmptyArray['SemisUniversal201415']['bi_school_deh'] = $semisSchools['Univ2012a']['DehId'];
				$SemisUniversal201415EmptyArray['SemisUniversal201415']['bi_school_village_mohallah'] = $semisSchools['Univ2012a']['Village-Mohalla'];
				if(!empty($semisSchools['Univ2012a']['SchoolName'])) {
					$SemisUniversal201415EmptyArray['SemisUniversal201415']['bi_school_name'] = $semisSchools['Univ2012a']['Prefix'].' - '.$semisSchools['Univ2012a']['SchoolName'];
				}
				$SemisUniversal201415EmptyArray['SemisUniversal201415']['bi_school_address'] = $semisSchools['Univ2012a']['SchoolAddress'];
				$SemisUniversal201415EmptyArray['SemisUniversal201415']['bi_school_phone_number'] = $semisSchools['Univ2012a']['Phone'];
				$SemisUniversal201415EmptyArray['SemisUniversal201415']['entered_by'] = $usid;
				$this->SemisUniversal201415->Saveall($SemisUniversal201415EmptyArray);
				
				
				$semisSchoolNew = $this->SemisUniversal201415->find('first',array('conditions'=>array('school_semis_new'=>$semisSchools['Univ2012a']['school_id'])));
				$semisSchools['SemisUniversal201415'] = $semisSchoolNew['SemisUniversal201415'];
				
				$enrollmentEmptyArray['SemisEnrollment201415']['school_semis_new'] = $semisSchoolNew['SemisUniversal201415']['school_semis_new']; 
				$enrollmentEmptyArray['SemisEnrollment201415']['school_id'] = $semisSchoolNew['SemisUniversal201415']['id']; 
				$this->SemisEnrollment201415->Saveall($enrollmentEmptyArray);
				
				$semisTeachers = $this->SemisTeacher201415->find('all',array('conditions'=>array('school_id'=>$this->SemisUniversal201415->id)));
				$this->set('semisTeachers',$semisTeachers);
				
				$semisEnrollment = $this->SemisEnrollment201415->find('first',array('conditions'=>array('school_id'=>$this->SemisUniversal201415->id)));
				$this->set('semisEnrollment',$semisEnrollment);
				
				
				$this->set('schools',$semisSchools);
				
				
			}else{
				
				
				
				$usadmin = $this->Auth->user('superuser');
					
				if($usadmin == 3)
				{
					if($semisSchools['SemisUniversal201415']['final'] == 1)
					{
						$this->redirect('../home/index/Cant Enter this form already finalized');
					}
					if($semisSchools['SemisUniversal201415']['entered_by'] != $usid)
					{
						$this->redirect('../home/index/Cant Enter this form already entered by someone else');
					}
				}
				
				if($usadmin == 4)
				{
					if($semisSchools['SemisUniversal201415']['final'] == 2)
					{
						$this->redirect('../home/index/Cant Enter this form already finalized');
					}
				}
					
				$this->set('schools',$semisSchools);
				
				$semisEnrollment = $this->SemisEnrollment201415->find('first',array('conditions'=>array('school_id'=>$semisSchools['SemisUniversal201415']['id'])));
				$this->set('semisEnrollment',$semisEnrollment);
				
				$semisTeachers = $this->SemisTeacher201415->find('all',array('conditions'=>array('school_id'=>$semisSchools['SemisUniversal201415']['id'])));
				$this->set('semisTeachers',$semisTeachers);
				
				$merged_schools_array = $this->SemisConsolidationUniv201415->find('all',array('conditions'=>array('campus_id'=>$semisSchools['SemisUniversal201415']['school_semis_new'])));
				$this->set('merged_schools_array',$merged_schools_array);
			}
			
		// }else
		// {
			// $semisSchools = $this->SemisUniversal201415->find('first');
			
			// $this->set('schools',$semisSchools);
			
			// $semisEnrollment = $this->SemisEnrollment201415->find('first',array('conditions'=>array('school_id'=>$semisSchools['SemisUniversal201415']['id'])));
			// $this->set('semisEnrollment',$semisEnrollment);
			
			// $semisTeachers = $this->SemisTeacher201415->find('all',array('conditions'=>array('school_id'=>$semisSchools['SemisUniversal201415']['id'])));
			// $this->set('semisTeachers',$semisTeachers);
			
			// $merged_schools_array = $this->SemisConsolidationUniv201415->find('all',array('conditions'=>array('campus_id'=>$semisSchools['SemisUniversal201415']['id'])));
			// $this->set('merged_schools_array',$merged_schools_array);
			
		// }
		
		
		$banks = $this->codesForBank->find('all');
		$this->set('banks',$banks);	
		
		$typeofposts = $this->codesForTypeOfPost->find('all');
		$this->set('typeofposts',$typeofposts);	
		
		$codesteacherqualifications = $this->codesForTeachersQualification->find('all');
		$this->set('codesteacherqualifications',$codesteacherqualifications);
		
		$codesteachertrainings = $this->codesForTeachersTraining->find('all');
		$this->set('codesteachertrainings',$codesteachertrainings);
		
		$codesteacherdesignations = $this->codesForTeachersDesignation->find('all');
		$this->set('codesteacherdesignations',$codesteacherdesignations);
		
		
		$districts = $this->SemisCodeDistrict->find('all');
		$this->set('districts',$districts);	
		// $this->layout = "defaultsemis";
		
		$tehsils = $this->CodesForDistrictAndTehsil->find('all');
		$this->set('tehsils',$tehsils);	
		
		$union_councils = $this->CodesForUc->find('all');
		$this->set('union_councils',$union_councils);	

		$tappas = $this->CodesForTappa->find('all');
		$this->set('tappas',$tappas);
		
		$dehs = $this->CodesForDeh->find('all');
		$this->set('dehs',$dehs);
		
	}
	
	function submit_semis_form_hs_p1()
	{
		if(!isset($_POST['hti_name']))
		{
			$this->redirect('../home/index', null, false);
		}
		// If adding or editing form delete all previous entries and create new
		$uname = $this->Auth->user('username');
		
		$schools = $this->SemisHsUniversal201314->find('all',array('conditions'=>array('school_semis_new'=>$uname, 'year'=>$_POST['year'], 'quarter'=>$_POST['quarter'])));
		// Deleting all school entries
			foreach($schools as $school)
			{
				$this->SemisHsUniversal201314->id = $school['SemisHsUniversal201314']['id'];
				$this->SemisHsUniversal201314->delete();
			}
		if(count($schools) > 0)
		{
			$enrollments =  $this->SemisHsEnrollment201314->find('all',array('conditions'=>array('school_id'=>$schools[0]['SemisHsUniversal201314']['id'])));
			// Deleting all enrollment entries for school
				foreach($enrollments as $enrollment) 
				{
					$this->SemisHsEnrollment201314->id = $enrollment['SemisHsEnrollment201314']['id'];
					$this->SemisHsEnrollment201314->delete();
				}
				
			$teachers = $this->SemisHsTeacher201314->find('all',array('conditions'=>array('school_id'=>$schools[0]['SemisHsUniversal201314']['id'])));
			// Deleting all teacher entries for school
				foreach($teachers as $teacher) 
				{
					$this->SemisHsTeacher201314->id = $teacher['SemisHsTeacher201314']['id'];
					$this->SemisHsTeacher201314->delete();
				}
		}	
		$arrayDFormSubmit = array();
			
			
		if(isset($_POST['school_semis_old']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['school_semis_old'] = $_POST['school_semis_old'];
		}
		if(isset($_POST['school_semis_new']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['school_semis_new'] = $_POST['school_semis_new'];
		}
		if(isset($_POST['coord_long']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['coord_long'] = $_POST['coord_long'];
		}
		if(isset($_POST['coord_lat']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['coord_lat'] = $_POST['coord_lat'];
		}
		if(isset($_POST['bi_school_district']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['bi_school_district'] = $_POST['bi_school_district'];
		}
		if(isset($_POST['bi_school_taluka']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['bi_school_taluka'] = $_POST['bi_school_taluka'];
		}
		if(isset($_POST['bi_school_uc']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['bi_school_uc'] = $_POST['bi_school_uc'];
		}
		if(isset($_POST['bi_school_tappa']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['bi_school_tappa'] = $_POST['bi_school_tappa'];
		}
		if(isset($_POST['bi_school_deh']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['bi_school_deh'] = $_POST['bi_school_deh'];
		}
		if(isset($_POST['bi_school_na']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['bi_school_na'] = $_POST['bi_school_na'];
		}
		if(isset($_POST['bi_school_ps']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['bi_school_ps'] = $_POST['bi_school_ps'];
		}
		if(isset($_POST['bi_school_name']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['bi_school_name'] = $_POST['bi_school_name'];
		}
		if(isset($_POST['bi_school_address']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['bi_school_address'] = $_POST['bi_school_address'];
		}
		if(isset($_POST['bi_school_village_mohallah']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['bi_school_village_mohallah'] = $_POST['bi_school_village_mohallah'];
		}
		if(isset($_POST['bi_school_phone_number']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['bi_school_phone_number'] = $_POST['bi_school_phone_number'];
		}
		if(isset($_POST['hti_name']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['hti_name'] = $_POST['hti_name'];
		}
		if(isset($_POST['hti_cnic']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['hti_cnic'] = $_POST['hti_cnic'];
		}
		if(isset($_POST['hti_number']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['hti_number'] = $_POST['hti_number'];
		}
		if(isset($_POST['hti_gender']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['hti_gender'] = $_POST['hti_gender'];
		}
		if(isset($_POST['hti_designation']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['hti_designation'] = $_POST['hti_designation'];
		}
		if(isset($_POST['hti_designation_specify']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['hti_designation_specify'] = $_POST['hti_designation_specify'];
		}
		if(isset($_POST['hti_email']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['hti_email'] = $_POST['hti_email'];
		}
		if(isset($_POST['dsi_status_condition']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['dsi_status_condition'] = $_POST['dsi_status_condition'];
		}
		if(isset($_POST['dsi_status']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['dsi_status'] = $_POST['dsi_status'];
		}
		if(isset($_POST['dsi_closure_date']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['dsi_closure_date'] = $_POST['dsi_closure_date'];
		}
		if(isset($_POST['dsi_location']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['dsi_location'] = $_POST['dsi_location'];
		}
		if(isset($_POST['dsi_closure_reason']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['dsi_closure_reason'] = $_POST['dsi_closure_reason'];
		}
		if(isset($_POST['dsi_sne_available_number']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['dsi_sne_available_number'] = $_POST['dsi_sne_available_number'];
		}
		if(isset($_POST['dsi_level']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['dsi_level'] = $_POST['dsi_level'];
		}
		if(isset($_POST['dsi_sch_sne']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['dsi_sch_sne'] = $_POST['dsi_sch_sne'];
		}
		if(isset($_POST['dsi_sch_admin']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['dsi_sch_admin'] = $_POST['dsi_sch_admin'];
		}
		if(isset($_POST['dsi_sch_gender']))
		{
		$arrayDFormSubmit['SemisHsUniversal201314']['dsi_sch_gender'] = $_POST['dsi_sch_gender'];
		}
		$arrayDFormSubmit['SemisHsUniversal201314']['dsi_sch_medium'] = '';
		$x = 0;
		if(isset($_POST['dsi_sch_medium0']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['dsi_sch_medium'] .= $_POST['dsi_sch_medium0'];
			$x++; 
		}
		if(isset($_POST['dsi_sch_medium1']))
		{
			
			if($x == 0)
			{
				$arrayDFormSubmit['SemisHsUniversal201314']['dsi_sch_medium'] .= $_POST['dsi_sch_medium1'];
			}else
			{
				$arrayDFormSubmit['SemisHsUniversal201314']['dsi_sch_medium'] .= ','.$_POST['dsi_sch_medium1'];
			}
			$x++; 
		}
		if(isset($_POST['dsi_sch_medium2']))
		{
			if($x == 0)
			{
				$arrayDFormSubmit['SemisHsUniversal201314']['dsi_sch_medium'] .= $_POST['dsi_sch_medium2'];
			}else
			{
				$arrayDFormSubmit['SemisHsUniversal201314']['dsi_sch_medium'] .= ','.$_POST['dsi_sch_medium2'];
			}
			$x++; 
		}
		
		if(isset($_POST['dsi_enrollment_urdu']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['dsi_enrollment_urdu'] = $_POST['dsi_enrollment_urdu'];
		}
		if(isset($_POST['dsi_enrollment_sindhi']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['dsi_enrollment_sindhi'] = $_POST['dsi_enrollment_sindhi'];
		}
		if(isset($_POST['dsi_enrollment_english']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['dsi_enrollment_english'] = $_POST['dsi_enrollment_english'];
		}
		if(isset($_POST['dsi_shift']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['dsi_shift'] = $_POST['dsi_shift'];
		}
		if(isset($_POST['dsi_branch_school']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['dsi_branch_school'] = $_POST['dsi_branch_school'];
		}
		if(isset($_POST['dsi_main_school_semis_code']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['dsi_main_school_semis_code'] = $_POST['dsi_main_school_semis_code'];
		}
		if(isset($_POST['dsi_main_school_name']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['dsi_main_school_name'] = $_POST['dsi_main_school_name'];
		}
		if(isset($_POST['dsi_year_establishment']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['dsi_year_establishment'] = $_POST['dsi_year_establishment'];
		}
		if(isset($_POST['sbi_ownership']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sbi_ownership'] = $_POST['sbi_ownership'];
		}
		if(isset($_POST['sbi_no_building_sch_placed']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sbi_no_building_sch_placed'] = $_POST['sbi_no_building_sch_placed'];
		}
		if(isset($_POST['sbi_other_school_building_semis']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sbi_other_school_building_semis'] = $_POST['sbi_other_school_building_semis'];
		}
		if(isset($_POST['sbi_school_building_year_construction']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sbi_school_building_year_construction'] = $_POST['sbi_school_building_year_construction'];
		}
		if(isset($_POST['sbi_school_building_construction_type']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sbi_school_building_construction_type'] = $_POST['sbi_school_building_construction_type'];
		}
		if(isset($_POST['sbi_school_building_condition']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sbi_school_building_condition'] = $_POST['sbi_school_building_condition'];
		}
		if(isset($_POST['sbi_school_building_total_rooms']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sbi_school_building_total_rooms'] = $_POST['sbi_school_building_total_rooms'];
		}
		if(isset($_POST['sbi_school_building_total_rooms_other_purpose']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sbi_school_building_total_rooms_other_purpose'] = $_POST['sbi_school_building_total_rooms_other_purpose'];
		}
		if(isset($_POST['sbi_school_building_other_then_learning']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sbi_school_building_other_then_learning'] = $_POST['sbi_school_building_other_then_learning'];
		}
		if(isset($_POST['sbi_school_building_class_rooms']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sbi_school_building_class_rooms'] = $_POST['sbi_school_building_class_rooms'];
		}
		if(isset($_POST['sbf_condition_bwall']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sbf_condition_bwall'] = $_POST['sbf_condition_bwall'];
		}
		if(isset($_POST['sbf_toilets']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sbf_toilets'] = $_POST['sbf_toilets'];
		}
		if(isset($_POST['sbi_school_toilets_number_func']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sbi_school_toilets_number_func'] = $_POST['sbi_school_toilets_number_func'];
		}
		if(isset($_POST['sbi_school_toilets_number_nfunc']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sbi_school_toilets_number_nfunc'] = $_POST['sbi_school_toilets_number_nfunc'];
		}
		if(isset($_POST['sbf_water_available']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sbf_water_available'] = $_POST['sbf_water_available'];
		}
		// Special Function for checkbox
		$arrayDFormSubmit['SemisHsUniversal201314']['sbf_water_available_source'] = '';
		$x=0;
		if(isset($_POST['sbf_water_available_source0']))
		{
			$x++;
			$arrayDFormSubmit['SemisHsUniversal201314']['sbf_water_available_source'] .= $_POST['sbf_water_available_source0'];
		}
		if(isset($_POST['sbf_water_available_source1']))
		{
			if($x == 0)
			{
				$arrayDFormSubmit['SemisHsUniversal201314']['sbf_water_available_source'] .= $_POST['sbf_water_available_source1'];
			}else
			{
				$arrayDFormSubmit['SemisHsUniversal201314']['sbf_water_available_source'] .= ','.$_POST['sbf_water_available_source1'];
			}
			$x++;
		}
		if(isset($_POST['sbf_water_available_source2']))
		{
			if($x == 0)
			{
				$arrayDFormSubmit['SemisHsUniversal201314']['sbf_water_available_source'] .= $_POST['sbf_water_available_source2'];
			}else
			{
				$arrayDFormSubmit['SemisHsUniversal201314']['sbf_water_available_source'] .= ','.$_POST['sbf_water_available_source2'];
			}
			$x++;
		}
		if(isset($_POST['sbf_water_available_source3']))
		{
			if($x == 0)
			{
				$arrayDFormSubmit['SemisHsUniversal201314']['sbf_water_available_source'] .= $_POST['sbf_water_available_source3'];
			}else
			{
				$arrayDFormSubmit['SemisHsUniversal201314']['sbf_water_available_source'] .= ','.$_POST['sbf_water_available_source3'];
			}
			$x++;
		}
		if(isset($_POST['sbf_electricity_source']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sbf_electricity_source'] = $_POST['sbf_electricity_source'];
		}
		if(isset($_POST['sti_teacher_total_sne']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sti_teacher_total_sne'] = $_POST['sti_teacher_total_sne'];
		}
		if(isset($_POST['sti_teacher_total_vacant']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sti_teacher_total_vacant'] = $_POST['sti_teacher_total_vacant'];
		}
		if(isset($_POST['sti_govt_teacher_number_male']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sti_govt_teacher_number_male'] = $_POST['sti_govt_teacher_number_male'];
		}
		if(isset($_POST['sti_non_govt_teacher_number_male']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sti_non_govt_teacher_number_male'] = $_POST['sti_non_govt_teacher_number_male'];
		}
		if(isset($_POST['sti_govt_teacher_number_female']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sti_govt_teacher_number_female'] = $_POST['sti_govt_teacher_number_female'];
		}
		if(isset($_POST['sti_non_govt_teacher_number_female']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sti_non_govt_teacher_number_female'] = $_POST['sti_non_govt_teacher_number_female'];
		}
		if(isset($_POST['sti_teacher_mf_total']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sti_teacher_mf_total'] = $_POST['sti_teacher_mf_total'];
		}
		if(isset($_POST['sti_govt_non_teaching_number_male']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sti_govt_non_teaching_number_male'] = $_POST['sti_govt_non_teaching_number_male'];
		}
		if(isset($_POST['sti_govt_non_teaching_number_female']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sti_govt_non_teaching_number_female'] = $_POST['sti_govt_non_teaching_number_female'];
		}
		if(isset($_POST['sti_govt_non_teaching_mf_total']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sti_govt_non_teaching_mf_total'] = $_POST['sti_govt_non_teaching_mf_total'];
		}
		if(isset($_POST['ht_signature_page_1']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['ht_signature_page_1'] = $_POST['ht_signature_page_1'];
		}
		if(isset($_POST['sgi_is_sch_consolidated']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sgi_is_sch_consolidated'] = $_POST['sgi_is_sch_consolidated'];
		}
		if(isset($_POST['sgi_consolidated_merged_number']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sgi_consolidated_merged_number'] = $_POST['sgi_consolidated_merged_number'];
		}
		if(isset($_POST['asi_sch1_semis_code']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['asi_sch1_semis_code'] = $_POST['asi_sch1_semis_code'];
		}
		if(isset($_POST['asi_sch1_name']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['asi_sch1_name'] = $_POST['asi_sch1_name'];
		}
		if(isset($_POST['asi_sch1_type']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['asi_sch1_type'] = $_POST['asi_sch1_type'];
		}
		if(isset($_POST['asi_sch1_distance']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['asi_sch1_distance'] = $_POST['asi_sch1_distance'];
		}
		if(isset($_POST['asi_sch2_semis_code']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['asi_sch2_semis_code'] = $_POST['asi_sch2_semis_code'];
		}
		if(isset($_POST['asi_sch2_name']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['asi_sch2_name'] = $_POST['asi_sch2_name'];
		}
		if(isset($_POST['asi_sch2_type']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['asi_sch2_type'] = $_POST['asi_sch2_type'];
		}
		if(isset($_POST['asi_sch2_distance']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['asi_sch2_distance'] = $_POST['asi_sch2_distance'];
		}
		if(isset($_POST['asi_sch3_semis_code']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['asi_sch3_semis_code'] = $_POST['asi_sch3_semis_code'];
		}
		if(isset($_POST['asi_sch3_name']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['asi_sch3_name'] = $_POST['asi_sch3_name'];
		}
		if(isset($_POST['asi_sch3_type']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['asi_sch3_type'] = $_POST['asi_sch3_type'];
		}
		if(isset($_POST['asi_sch3_distance']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['asi_sch3_distance'] = $_POST['asi_sch3_distance'];
		}
		if(isset($_POST['asi_sch4_semis_code']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['asi_sch4_semis_code'] = $_POST['asi_sch4_semis_code'];
		}
		if(isset($_POST['asi_sch4_name']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['asi_sch4_name'] = $_POST['asi_sch4_name'];
		}
		if(isset($_POST['asi_sch4_type']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['asi_sch4_type'] = $_POST['asi_sch4_type'];
		}
		if(isset($_POST['asi_sch4_distance']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['asi_sch4_distance'] = $_POST['asi_sch4_distance'];
		}
		
		if(isset($_POST['asi_total_govt_schools']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['asi_total_govt_schools'] = $_POST['asi_total_govt_schools'];
		}
		if(isset($_POST['asi_total_private_schools']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['asi_total_private_schools'] = $_POST['asi_total_private_schools'];
		}
		if(isset($_POST['asi_grand_total_gp_schools']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['asi_grand_total_gp_schools'] = $_POST['asi_grand_total_gp_schools'];
		}
		if(isset($_POST['stuenr_source']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['stuenr_source'] = $_POST['stuenr_source'];
		}
		if(isset($_POST['stuenr_source_specify']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['stuenr_source_specify'] = $_POST['stuenr_source_specify'];
		}
		if(isset($_POST['smci_is_functional']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['smci_is_functional'] = $_POST['smci_is_functional'];
		}
		if(isset($_POST['asi_total_pprs_schools']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['asi_total_pprs_schools'] = $_POST['asi_total_pprs_schools'];
		}
		
		if(isset($_POST['sgi_sch_enrolment_stipend_12_13_number']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sgi_sch_enrolment_stipend_12_13_number'] = $_POST['sgi_sch_enrolment_stipend_12_13_number'];
		}
		if(isset($_POST['sgi_sch_eligible_stipend_12_13_number']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sgi_sch_eligible_stipend_12_13_number'] = $_POST['sgi_sch_eligible_stipend_12_13_number'];
		}
		if(isset($_POST['sgi_sch_received_stipend_12_13_number']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sgi_sch_received_stipend_12_13_number'] = $_POST['sgi_sch_received_stipend_12_13_number'];
		}
		if(isset($_POST['sgi_is_school_upgraded']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sgi_is_school_upgraded'] = $_POST['sgi_is_school_upgraded'];
		}
		if(isset($_POST['sgi_is_school_adopted']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sgi_is_school_adopted'] = $_POST['sgi_is_school_adopted'];
		}
		if(isset($_POST['sgi_sch_adopted_adopter']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sgi_sch_adopted_adopter'] = $_POST['sgi_sch_adopted_adopter'];
		}
		if(isset($_POST['sgi_school_ddo_code']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sgi_school_ddo_code'] = $_POST['sgi_school_ddo_code'];
		}
		if(isset($_POST['smci_received_smc']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['smci_received_smc'] = $_POST['smci_received_smc'];
		}
		if(isset($_POST['smci_ac_title']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['smci_ac_title'] = $_POST['smci_ac_title'];
		}
		if(isset($_POST['smci_ac_number']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['smci_ac_number'] = $_POST['smci_ac_number'];
		}
		if(isset($_POST['smci_bank_name']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['smci_bank_name'] = $_POST['smci_bank_name'];
		}
		if(isset($_POST['smci_bank_branch_name']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['smci_bank_branch_name'] = $_POST['smci_bank_branch_name'];
		}
		if(isset($_POST['smci_bank_branch_code']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['smci_bank_branch_code'] = $_POST['smci_bank_branch_code'];
		}
		if(isset($_POST['smci_balance_september']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['smci_balance_september'] = $_POST['smci_balance_september'];
		}
		if(isset($_POST['smci_balance_current']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['smci_balance_current'] = $_POST['smci_balance_current'];
		}
		if(isset($_POST['smci_total_meetings_quarter']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['smci_total_meetings_quarter'] = $_POST['smci_total_meetings_quarter'];
		}
		if(isset($_POST['smci_last_meeting_date']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['smci_last_meeting_date'] = $_POST['smci_last_meeting_date'];
		}
		if(isset($_POST['smci_chairman_name']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['smci_chairman_name'] = $_POST['smci_chairman_name'];
		}
		if(isset($_POST['smci_chairman_gender']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['smci_chairman_gender'] = $_POST['smci_chairman_gender'];
		}
		if(isset($_POST['smci_chairman_contact_number']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['smci_chairman_contact_number'] = $_POST['smci_chairman_contact_number'];
		}
		if(isset($_POST['smci_chairman_cnic']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['smci_chairman_cnic'] = $_POST['smci_chairman_cnic'];
		}
		if(isset($_POST['sfaci_blackboard_working']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_blackboard_working'] = $_POST['sfaci_blackboard_working'];
		}
		if(isset($_POST['sfaci_blackboard_repairable']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_blackboard_repairable'] = $_POST['sfaci_blackboard_repairable'];
		}
		if(isset($_POST['sfaci_stu_chairs_working']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_stu_chairs_working'] = $_POST['sfaci_stu_chairs_working'];
		}
		if(isset($_POST['sfaci_stu_chairs_repairable']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_stu_chairs_repairable'] = $_POST['sfaci_stu_chairs_repairable'];
		}
		if(isset($_POST['sfaci_stu_desks_working']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_stu_desks_working'] = $_POST['sfaci_stu_desks_working'];
		}
		if(isset($_POST['sfaci_stu_desks_repairable']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_stu_desks_repairable'] = $_POST['sfaci_stu_desks_repairable'];
		}
		if(isset($_POST['sfaci_stu_charts_working']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_stu_charts_working'] = $_POST['sfaci_stu_charts_working'];
		}
		if(isset($_POST['sfaci_stu_charts_repairable']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_stu_charts_repairable'] = $_POST['sfaci_stu_charts_repairable'];
		}
		if(isset($_POST['sfaci_stu_benches_repairable']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_stu_benches_repairable'] = $_POST['sfaci_stu_benches_repairable'];
		}
		if(isset($_POST['sfaci_teacher_chairs_working']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_teacher_chairs_working'] = $_POST['sfaci_teacher_chairs_working'];
		}
		if(isset($_POST['sfaci_teacher_chairs_repairable']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_teacher_chairs_repairable'] = $_POST['sfaci_teacher_chairs_repairable'];
		}
		if(isset($_POST['sfaci_teacher_tables_working']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_teacher_tables_working'] = $_POST['sfaci_teacher_tables_working'];
		}
		if(isset($_POST['sfaci_internet_available']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_internet_available'] = $_POST['sfaci_internet_available'];
		}
		if(isset($_POST['sfaci_teacher_tables_repairable']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_teacher_tables_repairable'] = $_POST['sfaci_teacher_tables_repairable'];
		}
		if(isset($_POST['sfaci_electric_fans_working']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_electric_fans_working'] = $_POST['sfaci_electric_fans_working'];
		}
		if(isset($_POST['sfaci_electric_fans_repairable']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_electric_fans_repairable'] = $_POST['sfaci_electric_fans_repairable'];
		}
		if(isset($_POST['sfaci_almirah_working']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_almirah_working'] = $_POST['sfaci_almirah_working'];
		}
		if(isset($_POST['sfaci_almirah_repairable']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_almirah_repairable'] = $_POST['sfaci_almirah_repairable'];
		}
		if(isset($_POST['sfaci_computers_working']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_computers_working'] = $_POST['sfaci_computers_working'];
		}
		if(isset($_POST['sfaci_form_filling_source_other']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_form_filling_source_other'] = $_POST['sfaci_form_filling_source_other'];
		}
		if(isset($_POST['sfaci_form_filling_source']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_form_filling_source'] = $_POST['sfaci_form_filling_source'];
		}
		if(isset($_POST['sfaci_computers_repairable']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_computers_repairable'] = $_POST['sfaci_computers_repairable'];
		}
		if(isset($_POST['sfaci_water_pump_working']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_water_pump_working'] = $_POST['sfaci_water_pump_working'];
		}
		if(isset($_POST['sfaci_water_pump_repairable']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_water_pump_repairable'] = $_POST['sfaci_water_pump_repairable'];
		}
		if(isset($_POST['sfaci_comp_lab']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_comp_lab'] = $_POST['sfaci_comp_lab'];
		}
		if(isset($_POST['sfaci_physics_lab']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_physics_lab'] = $_POST['sfaci_physics_lab'];
		}
		if(isset($_POST['sfaci_chem_lab']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_chem_lab'] = $_POST['sfaci_chem_lab'];
		}
		if(isset($_POST['sfaci_biology_lab']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_biology_lab'] = $_POST['sfaci_biology_lab'];
		}
		if(isset($_POST['sfaci_home_economics_lab']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_home_economics_lab'] = $_POST['sfaci_home_economics_lab'];
		}
		if(isset($_POST['sfaci_library']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_library'] = $_POST['sfaci_library'];
		}
		if(isset($_POST['sfaci_play_ground']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sfaci_play_ground'] = $_POST['sfaci_play_ground'];
		}
		if(isset($_POST['ht_signature_page_2']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['ht_signature_page_2'] = $_POST['ht_signature_page_2'];
		}
		if(isset($_POST['sgi_sch_area_covered']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sgi_sch_area_covered'] = $_POST['sgi_sch_area_covered'];
		}
		if(isset($_POST['sgi_sch_time_table_available']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sgi_sch_time_table_available'] = $_POST['sgi_sch_time_table_available'];
		}
		if(isset($_POST['sgi_sch_semis_dislayed']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sgi_sch_semis_dislayed'] = $_POST['sgi_sch_semis_dislayed'];
		}
		if(isset($_POST['sgi_sch_received_tb_13_14']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sgi_sch_received_tb_13_14'] = $_POST['sgi_sch_received_tb_13_14'];
		}
		if(isset($_POST['sgi_sch_const_work_12_13']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sgi_sch_const_work_12_13'] = $_POST['sgi_sch_const_work_12_13'];
		}
		if(isset($_POST['sgi_sch_received_stipend_12_13']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sgi_sch_received_stipend_12_13'] = $_POST['sgi_sch_received_stipend_12_13'];	
		}
		
		$arrayDFormSubmit['SemisHsUniversal201314']['year'] = $_POST['year'];
		$arrayDFormSubmit['SemisHsUniversal201314']['quarter'] = $_POST['quarter'];
		$arrayDFormSubmit['SemisHsUniversal201314']['ipaddress'] = $_POST['ipaddress'];
		$arrayDFormSubmit['SemisHsUniversal201314']['final'] = 2;
		
		$this->SemisHsUniversal201314->Saveall($arrayDFormSubmit);
		$arrayDFormSubmit['SemisUniversal201415'] = $arrayDFormSubmit['SemisHsUniversal201314'];
		$this->SemisUniversal201415->Saveall($arrayDFormSubmit);
		
		// Enrollment Function
		
		$arrayDFormSubmit['SemisHsEnrollment201314']['school_id'] = $this->SemisHsUniversal201314->id;
		$arrayDFormSubmit['SemisHsEnrollment201314']['school_semis_old'] = $_POST['school_semis_old'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['school_semis_new'] = $_POST['school_semis_new'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_ele_classkatchi_b'] = $_POST['stuenr_ele_classkatchi_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_ele_class1_b'] = $_POST['stuenr_ele_class1_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_ele_class2_b'] = $_POST['stuenr_ele_class2_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_ele_class3_b'] = $_POST['stuenr_ele_class3_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_ele_class4_b'] = $_POST['stuenr_ele_class4_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_ele_class5_b'] = $_POST['stuenr_ele_class5_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_ele_class6_b'] = $_POST['stuenr_ele_class6_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_ele_class7_b'] = $_POST['stuenr_ele_class7_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_ele_class8_b'] = $_POST['stuenr_ele_class8_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_ele_total_b'] = $_POST['stuenr_ele_total_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_ele_classkatchi_g'] = $_POST['stuenr_ele_classkatchi_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_ele_class1_g'] = $_POST['stuenr_ele_class1_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_ele_class2_g'] = $_POST['stuenr_ele_class2_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_ele_class3_g'] = $_POST['stuenr_ele_class3_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_ele_class4_g'] = $_POST['stuenr_ele_class4_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_ele_class5_g'] = $_POST['stuenr_ele_class5_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_ele_class6_g'] = $_POST['stuenr_ele_class6_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_ele_class7_g'] = $_POST['stuenr_ele_class7_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_ele_class8_g'] = $_POST['stuenr_ele_class8_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_ele_total_g'] = $_POST['stuenr_ele_total_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_sec_class9_arts_b'] = $_POST['stuenr_sec_class9_arts_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_sec_class9_comp_b'] = $_POST['stuenr_sec_class9_comp_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_sec_class9_bio_b'] = $_POST['stuenr_sec_class9_bio_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_sec_class9_comm_b'] = $_POST['stuenr_sec_class9_comm_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_sec_class9_other_b'] = $_POST['stuenr_sec_class9_other_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_sec_class10_arts_b'] = $_POST['stuenr_sec_class10_arts_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_sec_class10_comp_b'] = $_POST['stuenr_sec_class10_comp_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_sec_class10_bio_b'] = $_POST['stuenr_sec_class10_bio_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_sec_class10_comm_b'] = $_POST['stuenr_sec_class10_comm_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_sec_class10_other_b'] = $_POST['stuenr_sec_class10_other_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_sec_b_total'] = $_POST['stuenr_sec_b_total'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_sec_class9_arts_g'] = $_POST['stuenr_sec_class9_arts_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_sec_class9_comp_g'] = $_POST['stuenr_sec_class9_comp_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_sec_class9_bio_g'] = $_POST['stuenr_sec_class9_bio_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_sec_class9_comm_g'] = $_POST['stuenr_sec_class9_comm_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_sec_class9_other_g'] = $_POST['stuenr_sec_class9_other_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_sec_class10_arts_g'] = $_POST['stuenr_sec_class10_arts_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_sec_class10_comp_g'] = $_POST['stuenr_sec_class10_comp_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_sec_class10_bio_g'] = $_POST['stuenr_sec_class10_bio_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_sec_class10_comm_g'] = $_POST['stuenr_sec_class10_comm_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_sec_class10_other_g'] = $_POST['stuenr_sec_class10_other_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_sec_f_total'] = $_POST['stuenr_sec_f_total'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_class11_arts_b'] = $_POST['stuenr_hsec_class11_arts_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_class11_comp_b'] = $_POST['stuenr_hsec_class11_comp_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_class11_premed_b'] = $_POST['stuenr_hsec_class11_premed_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_class11_preeng_b'] = $_POST['stuenr_hsec_class11_preeng_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_class11_comm_b'] = $_POST['stuenr_hsec_class11_comm_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_class11_other_b'] = $_POST['stuenr_hsec_class11_other_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_class12_arts_b'] = $_POST['stuenr_hsec_class12_arts_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_class12_comp_b'] = $_POST['stuenr_hsec_class12_comp_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_class12_premed_b'] = $_POST['stuenr_hsec_class12_premed_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_class12_preeng_b'] = $_POST['stuenr_hsec_class12_preeng_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_class12_comm_b'] = $_POST['stuenr_hsec_class12_comm_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_class12_other_b'] = $_POST['stuenr_hsec_class12_other_b'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_m_total'] = $_POST['stuenr_hsec_m_total'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_class11_arts_g'] = $_POST['stuenr_hsec_class11_arts_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_class11_comp_g'] = $_POST['stuenr_hsec_class11_comp_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_class11_premed_g'] = $_POST['stuenr_hsec_class11_premed_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_class11_preeng_g'] = $_POST['stuenr_hsec_class11_preeng_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_class11_comm_g'] = $_POST['stuenr_hsec_class11_comm_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_class11_other_g'] = $_POST['stuenr_hsec_class11_other_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_class12_arts_g'] = $_POST['stuenr_hsec_class12_arts_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_class12_comp_g'] = $_POST['stuenr_hsec_class12_comp_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_class12_premed_g'] = $_POST['stuenr_hsec_class12_premed_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_class12_preeng_g'] = $_POST['stuenr_hsec_class12_preeng_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_class12_comm_g'] = $_POST['stuenr_hsec_class12_comm_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_class12_other_g'] = $_POST['stuenr_hsec_class12_other_g'];
		$arrayDFormSubmit['SemisHsEnrollment201314']['stuenr_hsec_f_total'] = $_POST['stuenr_hsec_f_total'];
		// $arrayDFormSubmit['SemisHsEnrollment201314']['sturep_class4_b'] = $_POST['sturep_class4_b'];
		// $arrayDFormSubmit['SemisHsEnrollment201314']['sturep_class5_b'] = $_POST['sturep_class5_b'];
		// $arrayDFormSubmit['SemisHsEnrollment201314']['sturep_class6_b'] = $_POST['sturep_class6_b'];
		// $arrayDFormSubmit['SemisHsEnrollment201314']['sturep_class7_b'] = $_POST['sturep_class7_b'];
		// $arrayDFormSubmit['SemisHsEnrollment201314']['sturep_class8_b'] = $_POST['sturep_class8_b'];
		// $arrayDFormSubmit['SemisHsEnrollment201314']['sturep_class9_b'] = $_POST['sturep_class9_b'];
		// $arrayDFormSubmit['SemisHsEnrollment201314']['sturep_class10_b'] = $_POST['sturep_class10_b'];
		// $arrayDFormSubmit['SemisHsEnrollment201314']['sturep_class11_b'] = $_POST['sturep_class11_b'];
		// $arrayDFormSubmit['SemisHsEnrollment201314']['sturep_class12_b'] = $_POST['sturep_class12_b'];
		// $arrayDFormSubmit['SemisHsEnrollment201314']['sturep_total_b'] = $_POST['sturep_total_b'];
		// $arrayDFormSubmit['SemisHsEnrollment201314']['sturep_class4_g'] = $_POST['sturep_class4_g'];
		// $arrayDFormSubmit['SemisHsEnrollment201314']['sturep_class5_g'] = $_POST['sturep_class5_g'];
		// $arrayDFormSubmit['SemisHsEnrollment201314']['sturep_class6_g'] = $_POST['sturep_class6_g'];
		// $arrayDFormSubmit['SemisHsEnrollment201314']['sturep_class7_g'] = $_POST['sturep_class7_g'];
		// $arrayDFormSubmit['SemisHsEnrollment201314']['sturep_class8_g'] = $_POST['sturep_class8_g'];
		// $arrayDFormSubmit['SemisHsEnrollment201314']['sturep_class9_g'] = $_POST['sturep_class9_g'];
		// $arrayDFormSubmit['SemisHsEnrollment201314']['sturep_class10_g'] = $_POST['sturep_class10_g'];
		// $arrayDFormSubmit['SemisHsEnrollment201314']['sturep_class11_g'] = $_POST['sturep_class11_g'];
		// $arrayDFormSubmit['SemisHsEnrollment201314']['sturep_class12_g'] = $_POST['sturep_class12_g'];
		// $arrayDFormSubmit['SemisHsEnrollment201314']['sturep_total_g'] = $_POST['sturep_total_g'];
		
		$this->SemisHsEnrollment201314->Saveall($arrayDFormSubmit);
		$arrayDFormSubmit['SemisEnrollment201415'] = $arrayDFormSubmit['SemisHsEnrollment201314'];
		$this->SemisEnrollment201415->Saveall($arrayDFormSubmit);
		
		for($a = 1; $a <= $_POST['sti_teacher_mf_total']; $a++)
		{
			
			if(isset($_POST['tdi_full_name_'.($a)]))
			{
				$this->SemisHsTeacher201314->id = null;
				
				$arrayTFormSubmit = array();
				$arrayTFormSubmit['SemisHsTeacher201314']['school_id'] = $this->SemisHsUniversal201314->id;
				
				if(isset($_POST['tdi_full_name_'.($a)]))
				{
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_full_name'] = $_POST['tdi_full_name_'.($a)];
				}
				if(isset($_POST['tdi_teacher_cnic_'.($a)]))
				{
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_cnic'] = $_POST['tdi_teacher_cnic_'.($a)];
				}
				if(isset($_POST['tdi_teacher_gender_'.($a)]))
				{
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_gender'] = $_POST['tdi_teacher_gender_'.($a)];
				}
				if(isset($_POST['tdi_teacher_personnel_number_'.($a)]))
				{
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_personnel_number'] = $_POST['tdi_teacher_personnel_number_'.($a)];
				}
				if(isset($_POST['tdi_teacher_dob_day_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_dob_day'] = $_POST['tdi_teacher_dob_day_'.($a)];
				}
				if(isset($_POST['tdi_teacher_dob_month_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_dob_month'] = $_POST['tdi_teacher_dob_month_'.($a)];
				}
				if(isset($_POST['tdi_teacher_dob_year_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_dob_year'] = $_POST['tdi_teacher_dob_year_'.($a)];
				}
				if(isset($_POST['tdi_teacher_designation_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_designation'] = $_POST['tdi_teacher_designation_'.($a)];
				}
				if(isset($_POST['tdi_teacher_bps_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_bps'] = $_POST['tdi_teacher_bps_'.($a)];
				}
				if(isset($_POST['tdi_teacher_entry_service_day_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_entry_service_day'] = $_POST['tdi_teacher_entry_service_day_'.($a)];
				}
				if(isset($_POST['tdi_teacher_entry_service_month_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_entry_service_month'] = $_POST['tdi_teacher_entry_service_month_'.($a)];
				}
				if(isset($_POST['tdi_teacher_entry_service_year_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_entry_service_year'] = $_POST['tdi_teacher_entry_service_year_'.($a)];
				}
				if(isset($_POST['tdi_teacher_code_type_post_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_code_type_post'] = $_POST['tdi_teacher_code_type_post_'.($a)];
				}
				if(isset($_POST['tdi_teacher_highest_academic_qualification_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_highest_academic_qualification'] = $_POST['tdi_teacher_highest_academic_qualification_'.($a)];
				}
				if(isset($_POST['tdi_teacher_highest_professional_training_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_highest_professional_training'] = $_POST['tdi_teacher_highest_professional_training_'.($a)];
				}
				if(isset($_POST['tdi_teacher_leaves_availed_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_leaves_availed'] = $_POST['tdi_teacher_leaves_availed_'.($a)];
				}
				if(isset($_POST['tdi_teacher_subjects_taught_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_subjects_taught'] = $_POST['tdi_teacher_subjects_taught_'.($a)];
				}
				if(isset($_POST['tdi_teacher_on_detailment_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_on_detailment'] = $_POST['tdi_teacher_on_detailment_'.($a)];
				}
				if(isset($_POST['tdi_teacher_number_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_number'] = $_POST['tdi_teacher_number_'.($a)];
				}
				$this->SemisHsTeacher201314->Saveall($arrayTFormSubmit);
			}
		
		}	
		$this->redirect('../home/index/editingcompleted');
	}
	
	
	function submit_semis_form_p1()
	{
		
		$usadmin = $this->Auth->user('superuser');
		
		if(!isset($_POST['hti_name']))
		{
			$this->redirect('../home/index', null, false);
		}
		// If adding or editing form delete all previous entries and create new
		$uname = $_POST['school_semis_new'];
		
		$schools = $this->SemisUniversal201415->find('all',array('conditions'=>array('school_semis_new'=>$uname)));
		// Deleting all school entries
		
		if($usadmin == 3 && $schools[0]['SemisUniversal201415']['final'] == 1)
		{
			$this->redirect('../home/index/can not edit form already finalized');
		}
		
		if($usadmin == 4 && $schools[0]['SemisUniversal201415']['final'] == 2)
		{
			$this->redirect('../home/index/can not edit form already finalized');
		}
		
		if(count($schools) > 0)
		{
			$enrollments =  $this->SemisEnrollment201415->find('all',array('conditions'=>array('school_id'=>$schools[0]['SemisUniversal201415']['id'])));
			// Deleting all enrollment entries for school
				foreach($enrollments as $enrollment) 
				{
					$this->SemisEnrollment201415->id = $enrollment['SemisEnrollment201415']['id'];
					$this->SemisEnrollment201415->delete();
				}
				
			$teachers = $this->SemisTeacher201415->find('all',array('conditions'=>array('school_id'=>$schools[0]['SemisUniversal201415']['id'])));
			// Deleting all teacher entries for school
				foreach($teachers as $teacher) 
				{
					$this->SemisTeacher201415->id = $teacher['SemisTeacher201415']['id'];
					$this->SemisTeacher201415->delete();
				}
		}	
		
		foreach($schools as $school)
		{
			$this->SemisUniversal201415->id = $school['SemisUniversal201415']['id'];
			$this->SemisUniversal201415->delete();
		}
			
		$arrayDFormSubmit = array();
		
			
		if(isset($_POST['campus_school']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['campus_school'] = $_POST['campus_school'];
		}
		if(isset($_POST['school_semis_old']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['school_semis_old'] = $_POST['school_semis_old'];
		}
		if(isset($_POST['school_semis_new']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['school_semis_new'] = $_POST['school_semis_new'];
		}
		if(isset($_POST['coord_long']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['coord_long'] = $_POST['coord_long'];
		}
		if(isset($_POST['coord_lat']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['coord_lat'] = $_POST['coord_lat'];
		}
		if(isset($_POST['bi_school_district']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['bi_school_district'] = $_POST['bi_school_district'];
		}
		if(isset($_POST['bi_school_taluka']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['bi_school_taluka'] = $_POST['bi_school_taluka'];
		}
		if(isset($_POST['bi_school_uc']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['bi_school_uc'] = $_POST['bi_school_uc'];
		}
		if(isset($_POST['bi_school_tappa']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['bi_school_tappa'] = $_POST['bi_school_tappa'];
		}
		if(isset($_POST['bi_school_deh']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['bi_school_deh'] = $_POST['bi_school_deh'];
		}
		if(isset($_POST['bi_school_na']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['bi_school_na'] = $_POST['bi_school_na'];
		}
		if(isset($_POST['bi_school_ps']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['bi_school_ps'] = $_POST['bi_school_ps'];
		}
		if(isset($_POST['bi_school_name']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['bi_school_name'] = $_POST['bi_school_name'];
		}
		if(isset($_POST['bi_school_address']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['bi_school_address'] = $_POST['bi_school_address'];
		}
		if(isset($_POST['bi_school_village_mohallah']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['bi_school_village_mohallah'] = $_POST['bi_school_village_mohallah'];
		}
		if(isset($_POST['bi_school_phone_number']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['bi_school_phone_number'] = $_POST['bi_school_phone_number'];
		}
		if(isset($_POST['hti_name']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['hti_name'] = $_POST['hti_name'];
		}
		if(isset($_POST['hti_cnic']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['hti_cnic'] = $_POST['hti_cnic'];
		}
		if(isset($_POST['hti_number']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['hti_number'] = $_POST['hti_number'];
		}
		if(isset($_POST['hti_gender']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['hti_gender'] = $_POST['hti_gender'];
		}
		if(isset($_POST['hti_designation']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['hti_designation'] = $_POST['hti_designation'];
		}
		if(isset($_POST['hti_designation_specify']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['hti_designation_specify'] = $_POST['hti_designation_specify'];
		}
		if(isset($_POST['hti_email']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['hti_email'] = $_POST['hti_email'];
		}
		if(isset($_POST['dsi_status_condition']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['dsi_status_condition'] = $_POST['dsi_status_condition'];
		}
		if(isset($_POST['dsi_status']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['dsi_status'] = $_POST['dsi_status'];
		}
		if(isset($_POST['dsi_closure_date']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['dsi_closure_date'] = $_POST['dsi_closure_date'];
		}
		if(isset($_POST['dsi_location']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['dsi_location'] = $_POST['dsi_location'];
		}
		if(isset($_POST['dsi_closure_reason']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['dsi_closure_reason'] = $_POST['dsi_closure_reason'];
		}
		if(isset($_POST['dsi_sne_available_number']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['dsi_sne_available_number'] = $_POST['dsi_sne_available_number'];
		}
		if(isset($_POST['dsi_level']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['dsi_level'] = $_POST['dsi_level'];
		}
		if(isset($_POST['dsi_sch_sne']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['dsi_sch_sne'] = $_POST['dsi_sch_sne'];
		}
		if(isset($_POST['dsi_sch_admin']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['dsi_sch_admin'] = $_POST['dsi_sch_admin'];
		}
		if(isset($_POST['dsi_sch_gender']))
		{
		$arrayDFormSubmit['SemisUniversal201415']['dsi_sch_gender'] = $_POST['dsi_sch_gender'];
		}
		$arrayDFormSubmit['SemisUniversal201415']['dsi_sch_medium'] = '';
		$x = 0;
		if(isset($_POST['dsi_sch_medium0']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['dsi_sch_medium'] .= $_POST['dsi_sch_medium0'];
			$x++; 
		}
		if(isset($_POST['dsi_sch_medium1']))
		{
			
			if($x == 0)
			{
				$arrayDFormSubmit['SemisUniversal201415']['dsi_sch_medium'] .= $_POST['dsi_sch_medium1'];
			}else
			{
				$arrayDFormSubmit['SemisUniversal201415']['dsi_sch_medium'] .= ','.$_POST['dsi_sch_medium1'];
			}
			$x++; 
		}
		if(isset($_POST['dsi_sch_medium2']))
		{
			if($x == 0)
			{
				$arrayDFormSubmit['SemisUniversal201415']['dsi_sch_medium'] .= $_POST['dsi_sch_medium2'];
			}else
			{
				$arrayDFormSubmit['SemisUniversal201415']['dsi_sch_medium'] .= ','.$_POST['dsi_sch_medium2'];
			}
			$x++; 
		}
		
		if(isset($_POST['dsi_enrollment_urdu']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['dsi_enrollment_urdu'] = $_POST['dsi_enrollment_urdu'];
		}
		if(isset($_POST['dsi_enrollment_sindhi']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['dsi_enrollment_sindhi'] = $_POST['dsi_enrollment_sindhi'];
		}
		if(isset($_POST['dsi_enrollment_english']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['dsi_enrollment_english'] = $_POST['dsi_enrollment_english'];
		}
		if(isset($_POST['dsi_shift']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['dsi_shift'] = $_POST['dsi_shift'];
		}
		if(isset($_POST['dsi_branch_school']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['dsi_branch_school'] = $_POST['dsi_branch_school'];
		}
		if(isset($_POST['dsi_main_school_semis_code']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['dsi_main_school_semis_code'] = $_POST['dsi_main_school_semis_code'];
		}
		if(isset($_POST['dsi_main_school_name']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['dsi_main_school_name'] = $_POST['dsi_main_school_name'];
		}
		if(isset($_POST['dsi_year_establishment']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['dsi_year_establishment'] = $_POST['dsi_year_establishment'];
		}
		if(isset($_POST['sbi_ownership']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sbi_ownership'] = $_POST['sbi_ownership'];
		}
		if(isset($_POST['sbi_no_building_sch_placed']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sbi_no_building_sch_placed'] = $_POST['sbi_no_building_sch_placed'];
		}
		if(isset($_POST['sbi_other_school_building_semis']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sbi_other_school_building_semis'] = $_POST['sbi_other_school_building_semis'];
		}
		if(isset($_POST['sbi_school_building_year_construction']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sbi_school_building_year_construction'] = $_POST['sbi_school_building_year_construction'];
		}
		if(isset($_POST['sbi_school_building_construction_type']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sbi_school_building_construction_type'] = $_POST['sbi_school_building_construction_type'];
		}
		if(isset($_POST['sbi_school_building_condition']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sbi_school_building_condition'] = $_POST['sbi_school_building_condition'];
		}
		if(isset($_POST['sbi_school_building_total_rooms']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sbi_school_building_total_rooms'] = $_POST['sbi_school_building_total_rooms'];
		}
		if(isset($_POST['sbi_school_building_total_rooms_other_purpose']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sbi_school_building_total_rooms_other_purpose'] = $_POST['sbi_school_building_total_rooms_other_purpose'];
		}
		if(isset($_POST['sbi_school_building_other_then_learning']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sbi_school_building_other_then_learning'] = $_POST['sbi_school_building_other_then_learning'];
		}
		if(isset($_POST['sbi_school_building_class_rooms']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sbi_school_building_class_rooms'] = $_POST['sbi_school_building_class_rooms'];
		}
		if(isset($_POST['sbf_condition_bwall']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sbf_condition_bwall'] = $_POST['sbf_condition_bwall'];
		}
		if(isset($_POST['sbf_toilets']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sbf_toilets'] = $_POST['sbf_toilets'];
		}
		if(isset($_POST['sbi_school_toilets_number_func']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sbi_school_toilets_number_func'] = $_POST['sbi_school_toilets_number_func'];
		}
		if(isset($_POST['sbi_school_toilets_number_nfunc']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sbi_school_toilets_number_nfunc'] = $_POST['sbi_school_toilets_number_nfunc'];
		}
		if(isset($_POST['sbf_water_available']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sbf_water_available'] = $_POST['sbf_water_available'];
		}
		// Special Function for checkbox
		$arrayDFormSubmit['SemisUniversal201415']['sbf_water_available_source'] = '';
		$x=0;
		if(isset($_POST['sbf_water_available_source0']))
		{
			$x++;
			$arrayDFormSubmit['SemisUniversal201415']['sbf_water_available_source'] .= $_POST['sbf_water_available_source0'];
		}
		if(isset($_POST['sbf_water_available_source1']))
		{
			if($x == 0)
			{
				$arrayDFormSubmit['SemisUniversal201415']['sbf_water_available_source'] .= $_POST['sbf_water_available_source1'];
			}else
			{
				$arrayDFormSubmit['SemisUniversal201415']['sbf_water_available_source'] .= ','.$_POST['sbf_water_available_source1'];
			}
			$x++;
		}
		if(isset($_POST['sbf_water_available_source2']))
		{
			if($x == 0)
			{
				$arrayDFormSubmit['SemisUniversal201415']['sbf_water_available_source'] .= $_POST['sbf_water_available_source2'];
			}else
			{
				$arrayDFormSubmit['SemisUniversal201415']['sbf_water_available_source'] .= ','.$_POST['sbf_water_available_source2'];
			}
			$x++;
		}
		if(isset($_POST['sbf_water_available_source3']))
		{
			if($x == 0)
			{
				$arrayDFormSubmit['SemisUniversal201415']['sbf_water_available_source'] .= $_POST['sbf_water_available_source3'];
			}else
			{
				$arrayDFormSubmit['SemisUniversal201415']['sbf_water_available_source'] .= ','.$_POST['sbf_water_available_source3'];
			}
			$x++;
		}
		if(isset($_POST['sbf_electricity_source']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sbf_electricity_source'] = $_POST['sbf_electricity_source'];
		}
		if(isset($_POST['sti_teacher_total_sne']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sti_teacher_total_sne'] = $_POST['sti_teacher_total_sne'];
		}
		if(isset($_POST['sti_teacher_total_vacant']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sti_teacher_total_vacant'] = $_POST['sti_teacher_total_vacant'];
		}
		if(isset($_POST['sti_govt_teacher_number_male']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sti_govt_teacher_number_male'] = $_POST['sti_govt_teacher_number_male'];
		}
		if(isset($_POST['sti_non_govt_teacher_number_male']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sti_non_govt_teacher_number_male'] = $_POST['sti_non_govt_teacher_number_male'];
		}
		if(isset($_POST['sti_govt_teacher_number_female']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sti_govt_teacher_number_female'] = $_POST['sti_govt_teacher_number_female'];
		}
		if(isset($_POST['sti_non_govt_teacher_number_female']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sti_non_govt_teacher_number_female'] = $_POST['sti_non_govt_teacher_number_female'];
		}
		if(isset($_POST['sti_teacher_mf_total']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sti_teacher_mf_total'] = $_POST['sti_teacher_mf_total'];
		}
		if(isset($_POST['sti_govt_non_teaching_number_male']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sti_govt_non_teaching_number_male'] = $_POST['sti_govt_non_teaching_number_male'];
		}
		if(isset($_POST['sti_govt_non_teaching_number_female']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sti_govt_non_teaching_number_female'] = $_POST['sti_govt_non_teaching_number_female'];
		}
		if(isset($_POST['sti_govt_non_teaching_mf_total']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sti_govt_non_teaching_mf_total'] = $_POST['sti_govt_non_teaching_mf_total'];
		}
		if(isset($_POST['ht_signature_page_1']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['ht_signature_page_1'] = $_POST['ht_signature_page_1'];
		}
		if(isset($_POST['sgi_is_sch_consolidated']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sgi_is_sch_consolidated'] = $_POST['sgi_is_sch_consolidated'];
		}
		if(isset($_POST['sgi_consolidated_merged_number']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sgi_consolidated_merged_number'] = $_POST['sgi_consolidated_merged_number'];
		}
		if(isset($_POST['asi_sch1_semis_code']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['asi_sch1_semis_code'] = $_POST['asi_sch1_semis_code'];
		}
		if(isset($_POST['asi_sch1_name']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['asi_sch1_name'] = $_POST['asi_sch1_name'];
		}
		if(isset($_POST['asi_sch1_type']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['asi_sch1_type'] = $_POST['asi_sch1_type'];
		}
		if(isset($_POST['asi_sch1_distance']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['asi_sch1_distance'] = $_POST['asi_sch1_distance'];
		}
		if(isset($_POST['asi_sch2_semis_code']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['asi_sch2_semis_code'] = $_POST['asi_sch2_semis_code'];
		}
		if(isset($_POST['asi_sch2_name']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['asi_sch2_name'] = $_POST['asi_sch2_name'];
		}
		if(isset($_POST['asi_sch2_type']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['asi_sch2_type'] = $_POST['asi_sch2_type'];
		}
		if(isset($_POST['asi_sch2_distance']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['asi_sch2_distance'] = $_POST['asi_sch2_distance'];
		}
		if(isset($_POST['asi_sch3_semis_code']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['asi_sch3_semis_code'] = $_POST['asi_sch3_semis_code'];
		}
		if(isset($_POST['asi_sch3_name']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['asi_sch3_name'] = $_POST['asi_sch3_name'];
		}
		if(isset($_POST['asi_sch3_type']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['asi_sch3_type'] = $_POST['asi_sch3_type'];
		}
		if(isset($_POST['asi_sch3_distance']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['asi_sch3_distance'] = $_POST['asi_sch3_distance'];
		}
		if(isset($_POST['asi_sch4_semis_code']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['asi_sch4_semis_code'] = $_POST['asi_sch4_semis_code'];
		}
		if(isset($_POST['asi_sch4_name']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['asi_sch4_name'] = $_POST['asi_sch4_name'];
		}
		if(isset($_POST['asi_sch4_type']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['asi_sch4_type'] = $_POST['asi_sch4_type'];
		}
		if(isset($_POST['asi_sch4_distance']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['asi_sch4_distance'] = $_POST['asi_sch4_distance'];
		}
		
		if(isset($_POST['asi_total_govt_schools']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['asi_total_govt_schools'] = $_POST['asi_total_govt_schools'];
		}
		if(isset($_POST['asi_total_private_schools']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['asi_total_private_schools'] = $_POST['asi_total_private_schools'];
		}
		if(isset($_POST['asi_grand_total_gp_schools']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['asi_grand_total_gp_schools'] = $_POST['asi_grand_total_gp_schools'];
		}
		if(isset($_POST['stuenr_source']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['stuenr_source'] = $_POST['stuenr_source'];
		}
		if(isset($_POST['stuenr_source_specify']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['stuenr_source_specify'] = $_POST['stuenr_source_specify'];
		}
		if(isset($_POST['smci_is_functional']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['smci_is_functional'] = $_POST['smci_is_functional'];
		}
		if(isset($_POST['asi_total_pprs_schools']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['asi_total_pprs_schools'] = $_POST['asi_total_pprs_schools'];
		}
		if(isset($_POST['sgi_sch_enrolment_stipend_12_13_number']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sgi_sch_enrolment_stipend_12_13_number'] = $_POST['sgi_sch_enrolment_stipend_12_13_number'];
		}
		if(isset($_POST['sgi_sch_eligible_stipend_12_13_number']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sgi_sch_eligible_stipend_12_13_number'] = $_POST['sgi_sch_eligible_stipend_12_13_number'];
		}
		if(isset($_POST['sgi_sch_received_stipend_12_13_number']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sgi_sch_received_stipend_12_13_number'] = $_POST['sgi_sch_received_stipend_12_13_number'];
		}
		if(isset($_POST['sgi_is_school_upgraded']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sgi_is_school_upgraded'] = $_POST['sgi_is_school_upgraded'];
		}
		if(isset($_POST['sgi_is_school_adopted']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sgi_is_school_adopted'] = $_POST['sgi_is_school_adopted'];
		}
		if(isset($_POST['sgi_sch_adopted_adopter']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sgi_sch_adopted_adopter'] = $_POST['sgi_sch_adopted_adopter'];
		}
		if(isset($_POST['sgi_school_ddo_code']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sgi_school_ddo_code'] = $_POST['sgi_school_ddo_code'];
		}
		if(isset($_POST['smci_received_smc']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['smci_received_smc'] = $_POST['smci_received_smc'];
		}
		if(isset($_POST['smci_ac_title']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['smci_ac_title'] = $_POST['smci_ac_title'];
		}
		if(isset($_POST['smci_ac_number']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['smci_ac_number'] = $_POST['smci_ac_number'];
		}
		if(isset($_POST['smci_bank_name']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['smci_bank_name'] = $_POST['smci_bank_name'];
		}
		if(isset($_POST['smci_bank_branch_name']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['smci_bank_branch_name'] = $_POST['smci_bank_branch_name'];
		}
		if(isset($_POST['smci_bank_branch_code']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['smci_bank_branch_code'] = $_POST['smci_bank_branch_code'];
		}
		if(isset($_POST['smci_balance_september']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['smci_balance_september'] = $_POST['smci_balance_september'];
		}
		if(isset($_POST['smci_balance_current']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['smci_balance_current'] = $_POST['smci_balance_current'];
		}
		if(isset($_POST['smci_total_meetings_quarter']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['smci_total_meetings_quarter'] = $_POST['smci_total_meetings_quarter'];
		}
		if(isset($_POST['smci_last_meeting_date']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['smci_last_meeting_date'] = $_POST['smci_last_meeting_date'];
		}
		if(isset($_POST['smci_chairman_name']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['smci_chairman_name'] = $_POST['smci_chairman_name'];
		}
		if(isset($_POST['smci_chairman_gender']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['smci_chairman_gender'] = $_POST['smci_chairman_gender'];
		}
		if(isset($_POST['smci_chairman_contact_number']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['smci_chairman_contact_number'] = $_POST['smci_chairman_contact_number'];
		}
		if(isset($_POST['smci_chairman_cnic']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['smci_chairman_cnic'] = $_POST['smci_chairman_cnic'];
		}
		if(isset($_POST['sfaci_blackboard_working']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_blackboard_working'] = $_POST['sfaci_blackboard_working'];
		}
		if(isset($_POST['sfaci_blackboard_repairable']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_blackboard_repairable'] = $_POST['sfaci_blackboard_repairable'];
		}
		if(isset($_POST['sfaci_stu_chairs_working']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_stu_chairs_working'] = $_POST['sfaci_stu_chairs_working'];
		}
		if(isset($_POST['sfaci_stu_chairs_repairable']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_stu_chairs_repairable'] = $_POST['sfaci_stu_chairs_repairable'];
		}
		if(isset($_POST['sfaci_stu_charts_working']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_stu_charts_working'] = $_POST['sfaci_stu_charts_working'];
		}
		if(isset($_POST['sfaci_stu_charts_repairable']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_stu_charts_repairable'] = $_POST['sfaci_stu_charts_repairable'];
		}
		if(isset($_POST['sfaci_stu_desks_working']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_stu_desks_working'] = $_POST['sfaci_stu_desks_working'];
		}
		if(isset($_POST['sfaci_stu_desks_repairable']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_stu_desks_repairable'] = $_POST['sfaci_stu_desks_repairable'];
		}
		if(isset($_POST['sfaci_stu_benches_working']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_stu_benches_working'] = $_POST['sfaci_stu_benches_working'];
		}
		if(isset($_POST['sfaci_stu_benches_repairable']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_stu_benches_repairable'] = $_POST['sfaci_stu_benches_repairable'];
		}
		if(isset($_POST['sfaci_teacher_chairs_working']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_teacher_chairs_working'] = $_POST['sfaci_teacher_chairs_working'];
		}
		if(isset($_POST['sfaci_teacher_chairs_repairable']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_teacher_chairs_repairable'] = $_POST['sfaci_teacher_chairs_repairable'];
		}
		if(isset($_POST['sfaci_teacher_tables_working']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_teacher_tables_working'] = $_POST['sfaci_teacher_tables_working'];
		}
		if(isset($_POST['sfaci_internet_available']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_internet_available'] = $_POST['sfaci_internet_available'];
		}
		if(isset($_POST['sfaci_teacher_tables_repairable']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_teacher_tables_repairable'] = $_POST['sfaci_teacher_tables_repairable'];
		}
		if(isset($_POST['sfaci_electric_fans_working']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_electric_fans_working'] = $_POST['sfaci_electric_fans_working'];
		}
		if(isset($_POST['sfaci_electric_fans_repairable']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_electric_fans_repairable'] = $_POST['sfaci_electric_fans_repairable'];
		}
		if(isset($_POST['sfaci_almirah_working']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_almirah_working'] = $_POST['sfaci_almirah_working'];
		}
		if(isset($_POST['sfaci_almirah_repairable']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_almirah_repairable'] = $_POST['sfaci_almirah_repairable'];
		}
		if(isset($_POST['sfaci_computers_working']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_computers_working'] = $_POST['sfaci_computers_working'];
		}
		if(isset($_POST['sfaci_form_filling_source_other']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_form_filling_source_other'] = $_POST['sfaci_form_filling_source_other'];
		}
		if(isset($_POST['sfaci_form_filling_source']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_form_filling_source'] = $_POST['sfaci_form_filling_source'];
		}
		if(isset($_POST['sfaci_computers_repairable']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_computers_repairable'] = $_POST['sfaci_computers_repairable'];
		}
		if(isset($_POST['sfaci_water_pump_working']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_water_pump_working'] = $_POST['sfaci_water_pump_working'];
		}
		if(isset($_POST['sfaci_water_pump_repairable']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_water_pump_repairable'] = $_POST['sfaci_water_pump_repairable'];
		}
		if(isset($_POST['sfaci_comp_lab']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_comp_lab'] = $_POST['sfaci_comp_lab'];
		}
		if(isset($_POST['sfaci_scie_lab']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_scie_lab'] = $_POST['sfaci_scie_lab'];
		}
		if(isset($_POST['sfaci_physics_lab']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_physics_lab'] = $_POST['sfaci_physics_lab'];
		}
		if(isset($_POST['sfaci_chem_lab']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_chem_lab'] = $_POST['sfaci_chem_lab'];
		}
		if(isset($_POST['sfaci_biology_lab']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_biology_lab'] = $_POST['sfaci_biology_lab'];
		}
		if(isset($_POST['sfaci_home_economics_lab']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_home_economics_lab'] = $_POST['sfaci_home_economics_lab'];
		}
		if(isset($_POST['sfaci_library']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_library'] = $_POST['sfaci_library'];
		}
		if(isset($_POST['sfaci_play_ground']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_play_ground'] = $_POST['sfaci_play_ground'];
		}
		if(isset($_POST['sfaci_medical_firstaid']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_medical_firstaid'] = $_POST['sfaci_medical_firstaid'];
		}
		if(isset($_POST['sfaci_sports_equip']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sfaci_sports_equip'] = $_POST['sfaci_sports_equip'];
		}
		if(isset($_POST['ht_signature_page_2']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['ht_signature_page_2'] = $_POST['ht_signature_page_2'];
		}
		if(isset($_POST['sgi_sch_area_covered']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sgi_sch_area_covered'] = $_POST['sgi_sch_area_covered'];
		}
		if(isset($_POST['sgi_sch_time_table_available']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sgi_sch_time_table_available'] = $_POST['sgi_sch_time_table_available'];
		}
		if(isset($_POST['sgi_sch_semis_dislayed']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sgi_sch_semis_dislayed'] = $_POST['sgi_sch_semis_dislayed'];
		}
		if(isset($_POST['sgi_sch_received_tb_13_14']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sgi_sch_received_tb_13_14'] = $_POST['sgi_sch_received_tb_13_14'];
		}
		if(isset($_POST['sgi_sch_const_work_12_13']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sgi_sch_const_work_12_13'] = $_POST['sgi_sch_const_work_12_13'];
		}
		if(isset($_POST['sgi_sch_received_stipend_12_13']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sgi_sch_received_stipend_12_13'] = $_POST['sgi_sch_received_stipend_12_13'];	
		}
		if(isset($_POST['teachers_list_added']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['teachers_list_added'] = $_POST['teachers_list_added'];	
		}
		if(isset($_POST['sgi_is_school_upgraded']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sgi_is_school_upgraded'] = $_POST['sgi_is_school_upgraded'];
		}
		if(isset($_POST['sgi_is_school_adopted']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sgi_is_school_adopted'] = $_POST['sgi_is_school_adopted'];
		}
		if(isset($_POST['sgi_sch_adopted_adopter']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sgi_sch_adopted_adopter'] = $_POST['sgi_sch_adopted_adopter'];
		}
		if(isset($_POST['sgi_school_ddo_code']))
		{
			$arrayDFormSubmit['SemisHsUniversal201314']['sgi_school_ddo_code'] = $_POST['sgi_school_ddo_code'];
		}
		
		//Additional Fields as per revisions on 11/11/2014
		if(isset($_POST['dsi_closure_reason_specify']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['dsi_closure_reason_specify'] = $_POST['dsi_closure_reason_specify'];	
		}        
		if(isset($_POST['sbi_other_building_specify']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sbi_other_building_specify'] = $_POST['sbi_other_building_specify'];	
		}        
		
		$x = 0;
		if(isset($_POST['sbi_purpose_other_then_teaching0']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sbi_purpose_other_then_teaching'] = $_POST['sbi_purpose_other_then_teaching0'];
			$x++; 
		}
		if(isset($_POST['sbi_purpose_other_then_teaching1']))
		{
			
			if($x == 0)
			{
				$arrayDFormSubmit['SemisUniversal201415']['sbi_purpose_other_then_teaching'] = $_POST['sbi_purpose_other_then_teaching1'];
			}else
			{
				$arrayDFormSubmit['SemisUniversal201415']['sbi_purpose_other_then_teaching'] .= ','.$_POST['sbi_purpose_other_then_teaching1'];
			}
			$x++; 
		}
		if(isset($_POST['sbi_purpose_other_then_teaching2']))
		{
			
			if($x == 0)
			{
				$arrayDFormSubmit['SemisUniversal201415']['sbi_purpose_other_then_teaching'] = $_POST['sbi_purpose_other_then_teaching2'];
			}else
			{
				$arrayDFormSubmit['SemisUniversal201415']['sbi_purpose_other_then_teaching'] .= ','.$_POST['sbi_purpose_other_then_teaching2'];
			}
			$x++; 
		}
		if(isset($_POST['sbi_purpose_other_then_teaching3']))
		{
			
			if($x == 0)
			{
				$arrayDFormSubmit['SemisUniversal201415']['sbi_purpose_other_then_teaching'] = $_POST['sbi_purpose_other_then_teaching3'];
			}else
			{
				$arrayDFormSubmit['SemisUniversal201415']['sbi_purpose_other_then_teaching'] .= ','.$_POST['sbi_purpose_other_then_teaching3'];
			}
			$x++; 
		}
        if(isset($_POST['sbi_purpose_other_then_teaching4']))
		{
			
			if($x == 0)
			{
				$arrayDFormSubmit['SemisUniversal201415']['sbi_purpose_other_then_teaching'] = $_POST['sbi_purpose_other_then_teaching4'];
			}else
			{
				$arrayDFormSubmit['SemisUniversal201415']['sbi_purpose_other_then_teaching'] .= ','.$_POST['sbi_purpose_other_then_teaching4'];
			}
			$x++; 
		}
		if(isset($_POST['sbi_purpose_other_then_teaching5']))
		{
			if($x == 0)
			{
				$arrayDFormSubmit['SemisUniversal201415']['sbi_purpose_other_then_teaching'] = $_POST['sbi_purpose_other_then_teaching5'];
			}else
			{
				$arrayDFormSubmit['SemisUniversal201415']['sbi_purpose_other_then_teaching'] .= ','.$_POST['sbi_purpose_other_then_teaching5'];
			}
			$x++; 
		}
		if(isset($_POST['sbi_purpose_other_then_teaching6']))
		{
			if($x == 0)
			{
				$arrayDFormSubmit['SemisUniversal201415']['sbi_purpose_other_then_teaching'] = $_POST['sbi_purpose_other_then_teaching6'];
			}else
			{
				$arrayDFormSubmit['SemisUniversal201415']['sbi_purpose_other_then_teaching'] .= ','.$_POST['sbi_purpose_other_then_teaching6'];
			}
			$x++; 
		}
		
		if(isset($_POST['sbi_purpose_other_then_teaching_specify']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sbi_purpose_other_then_teaching_specify'] = $_POST['sbi_purpose_other_then_teaching_specify'];	
		}        
		if(isset($_POST['sgi_sch_upgraded_level']))
		{
			$arrayDFormSubmit['SemisUniversal201415']['sgi_sch_upgraded_level'] = $_POST['sgi_sch_upgraded_level'];	
		}
		
		$usid = $this->Auth->user('id');
		if($usadmin == 4)
		{
			$arrayDFormSubmit['SemisUniversal201415']['entered_by'] = $_POST['entered_by'];
			$arrayDFormSubmit['SemisUniversal201415']['final'] = $_POST['final'];
		}else{	
			$arrayDFormSubmit['SemisUniversal201415']['entered_by'] = $usid;
		}
		// $arrayDFormSubmit['SemisUniversal201415']['year'] = $_POST['year'];
		// $arrayDFormSubmit['SemisUniversal201415']['quarter'] = $_POST['quarter'];
		// $arrayDFormSubmit['SemisUniversal201415']['ipaddress'] = $_POST['ipaddress'];
		// $arrayDFormSubmit['SemisUniversal201415']['final'] = 2;
		
		// $arrayDFormSubmit['SemisHsUniversal201314'] = $arrayDFormSubmit['SemisHsUniversal201314'];
		// $this->SemisHsUniversal201314->Saveall($arrayDFormSubmit);
		
		// $arrayDFormSubmit['SemisUniversal201415'] = $arrayDFormSubmit['SemisHsUniversal201314'];
		$this->SemisUniversal201415->Saveall($arrayDFormSubmit);
		
		// Enrolment Function
		
		$arrayDFormSubmit['SemisEnrollment201415']['school_id'] = $this->SemisUniversal201415->id;
		// $arrayDFormSubmit['SemisEnrollment201415']['school_semis_old'] = $_POST['school_semis_old'];
		if(isset($_POST['school_semis_new']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['school_semis_new'] = $_POST['school_semis_new'];
		}
		if(isset($_POST['stuenr_ele_classkatchi_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_ele_classkatchi_b'] = $_POST['stuenr_ele_classkatchi_b'];
		}
		if(isset($_POST['stuenr_ele_class1_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_ele_class1_b'] = $_POST['stuenr_ele_class1_b'];
		}
		if(isset($_POST['stuenr_ele_class2_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_ele_class2_b'] = $_POST['stuenr_ele_class2_b'];
		}
		if(isset($_POST['stuenr_ele_class3_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_ele_class3_b'] = $_POST['stuenr_ele_class3_b'];
		}
		if(isset($_POST['stuenr_ele_class4_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_ele_class4_b'] = $_POST['stuenr_ele_class4_b'];
		}
		if(isset($_POST['stuenr_ele_class5_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_ele_class5_b'] = $_POST['stuenr_ele_class5_b'];
		}
		if(isset($_POST['stuenr_ele_class6_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_ele_class6_b'] = $_POST['stuenr_ele_class6_b'];
		}
		if(isset($_POST['stuenr_ele_class7_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_ele_class7_b'] = $_POST['stuenr_ele_class7_b'];
		}
		if(isset($_POST['stuenr_ele_class8_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_ele_class8_b'] = $_POST['stuenr_ele_class8_b'];
		}
		if(isset($_POST['stuenr_ele_total_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_ele_total_b'] = $_POST['stuenr_ele_total_b'];
		}
		if(isset($_POST['stuenr_ele_classkatchi_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_ele_classkatchi_g'] = $_POST['stuenr_ele_classkatchi_g'];
		}
		if(isset($_POST['stuenr_ele_class1_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_ele_class1_g'] = $_POST['stuenr_ele_class1_g'];
		}
		if(isset($_POST['stuenr_ele_class2_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_ele_class2_g'] = $_POST['stuenr_ele_class2_g'];
		}
		if(isset($_POST['stuenr_ele_class3_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_ele_class3_g'] = $_POST['stuenr_ele_class3_g'];
		}
		if(isset($_POST['stuenr_ele_class4_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_ele_class4_g'] = $_POST['stuenr_ele_class4_g'];
		}
		if(isset($_POST['stuenr_ele_class5_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_ele_class5_g'] = $_POST['stuenr_ele_class5_g'];
		}
		if(isset($_POST['stuenr_ele_class6_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_ele_class6_g'] = $_POST['stuenr_ele_class6_g'];
		}
		if(isset($_POST['stuenr_ele_class7_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_ele_class7_g'] = $_POST['stuenr_ele_class7_g'];
		}
		if(isset($_POST['stuenr_ele_class8_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_ele_class8_g'] = $_POST['stuenr_ele_class8_g'];
		}
		if(isset($_POST['stuenr_ele_total_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_ele_total_g'] = $_POST['stuenr_ele_total_g'];
		}
		if(isset($_POST['stuenr_sec_class9_arts_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_sec_class9_arts_b'] = $_POST['stuenr_sec_class9_arts_b'];
		}
		if(isset($_POST['stuenr_sec_class9_comp_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_sec_class9_comp_b'] = $_POST['stuenr_sec_class9_comp_b'];
		}
		if(isset($_POST['stuenr_sec_class9_bio_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_sec_class9_bio_b'] = $_POST['stuenr_sec_class9_bio_b'];
		}
		if(isset($_POST['stuenr_sec_class9_comm_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_sec_class9_comm_b'] = $_POST['stuenr_sec_class9_comm_b'];
		}
		if(isset($_POST['stuenr_sec_class9_other_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_sec_class9_other_b'] = $_POST['stuenr_sec_class9_other_b'];
		}
		if(isset($_POST['stuenr_sec_class10_arts_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_sec_class10_arts_b'] = $_POST['stuenr_sec_class10_arts_b'];
		}
		if(isset($_POST['stuenr_sec_class10_comp_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_sec_class10_comp_b'] = $_POST['stuenr_sec_class10_comp_b'];
		}
		if(isset($_POST['stuenr_sec_class10_bio_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_sec_class10_bio_b'] = $_POST['stuenr_sec_class10_bio_b'];
		}
		if(isset($_POST['stuenr_sec_class10_comm_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_sec_class10_comm_b'] = $_POST['stuenr_sec_class10_comm_b'];
		}
		if(isset($_POST['stuenr_sec_class10_other_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_sec_class10_other_b'] = $_POST['stuenr_sec_class10_other_b'];
		}
		if(isset($_POST['stuenr_sec_b_total']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_sec_b_total'] = $_POST['stuenr_sec_b_total'];
		}
		if(isset($_POST['stuenr_sec_class9_arts_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_sec_class9_arts_g'] = $_POST['stuenr_sec_class9_arts_g'];
		}
		if(isset($_POST['stuenr_sec_class9_comp_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_sec_class9_comp_g'] = $_POST['stuenr_sec_class9_comp_g'];
		}
		if(isset($_POST['stuenr_sec_class9_bio_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_sec_class9_bio_g'] = $_POST['stuenr_sec_class9_bio_g'];
		}
		if(isset($_POST['stuenr_sec_class9_comm_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_sec_class9_comm_g'] = $_POST['stuenr_sec_class9_comm_g'];
		}
		if(isset($_POST['stuenr_sec_class9_other_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_sec_class9_other_g'] = $_POST['stuenr_sec_class9_other_g'];
		}
		if(isset($_POST['stuenr_sec_class10_arts_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_sec_class10_arts_g'] = $_POST['stuenr_sec_class10_arts_g'];
		}
		if(isset($_POST['stuenr_sec_class10_comp_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_sec_class10_comp_g'] = $_POST['stuenr_sec_class10_comp_g'];
		}
		if(isset($_POST['stuenr_sec_class10_bio_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_sec_class10_bio_g'] = $_POST['stuenr_sec_class10_bio_g'];
		}
		if(isset($_POST['stuenr_sec_class10_comm_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_sec_class10_comm_g'] = $_POST['stuenr_sec_class10_comm_g'];
		}
		if(isset($_POST['stuenr_sec_class10_other_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_sec_class10_other_g'] = $_POST['stuenr_sec_class10_other_g'];
		}
		if(isset($_POST['stuenr_sec_f_total']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_sec_f_total'] = $_POST['stuenr_sec_f_total'];
		}
		if(isset($_POST['stuenr_hsec_class11_arts_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_class11_arts_b'] = $_POST['stuenr_hsec_class11_arts_b'];
		}
		if(isset($_POST['stuenr_hsec_class11_comp_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_class11_comp_b'] = $_POST['stuenr_hsec_class11_comp_b'];
		}
		if(isset($_POST['stuenr_hsec_class11_premed_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_class11_premed_b'] = $_POST['stuenr_hsec_class11_premed_b'];
		}
		if(isset($_POST['stuenr_hsec_class11_preeng_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_class11_preeng_b'] = $_POST['stuenr_hsec_class11_preeng_b'];
		}
		if(isset($_POST['stuenr_hsec_class11_comm_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_class11_comm_b'] = $_POST['stuenr_hsec_class11_comm_b'];
		}
		if(isset($_POST['stuenr_hsec_class11_other_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_class11_other_b'] = $_POST['stuenr_hsec_class11_other_b'];
		}
		if(isset($_POST['stuenr_hsec_class12_arts_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_class12_arts_b'] = $_POST['stuenr_hsec_class12_arts_b'];
		}
		if(isset($_POST['stuenr_hsec_class12_comp_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_class12_comp_b'] = $_POST['stuenr_hsec_class12_comp_b'];
		}
		if(isset($_POST['stuenr_hsec_class12_premed_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_class12_premed_b'] = $_POST['stuenr_hsec_class12_premed_b'];
		}
		if(isset($_POST['stuenr_hsec_class12_preeng_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_class12_preeng_b'] = $_POST['stuenr_hsec_class12_preeng_b'];
		}
		if(isset($_POST['stuenr_hsec_class12_comm_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_class12_comm_b'] = $_POST['stuenr_hsec_class12_comm_b'];
		}
		if(isset($_POST['stuenr_hsec_class12_other_b']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_class12_other_b'] = $_POST['stuenr_hsec_class12_other_b'];
		}
		if(isset($_POST['stuenr_hsec_m_total']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_m_total'] = $_POST['stuenr_hsec_m_total'];
		}
		if(isset($_POST['stuenr_hsec_class11_arts_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_class11_arts_g'] = $_POST['stuenr_hsec_class11_arts_g'];
		}
		if(isset($_POST['stuenr_hsec_class11_comp_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_class11_comp_g'] = $_POST['stuenr_hsec_class11_comp_g'];
		}
		if(isset($_POST['stuenr_hsec_class11_premed_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_class11_premed_g'] = $_POST['stuenr_hsec_class11_premed_g'];
		}
		if(isset($_POST['stuenr_hsec_class11_preeng_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_class11_preeng_g'] = $_POST['stuenr_hsec_class11_preeng_g'];
		}
		if(isset($_POST['stuenr_hsec_class11_comm_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_class11_comm_g'] = $_POST['stuenr_hsec_class11_comm_g'];
		}
		if(isset($_POST['stuenr_hsec_class11_other_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_class11_other_g'] = $_POST['stuenr_hsec_class11_other_g'];
		}
		if(isset($_POST['stuenr_hsec_class12_arts_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_class12_arts_g'] = $_POST['stuenr_hsec_class12_arts_g'];
		}
		if(isset($_POST['stuenr_hsec_class12_comp_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_class12_comp_g'] = $_POST['stuenr_hsec_class12_comp_g'];
		}
		if(isset($_POST['stuenr_hsec_class12_premed_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_class12_premed_g'] = $_POST['stuenr_hsec_class12_premed_g'];
		}
		if(isset($_POST['stuenr_hsec_class12_preeng_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_class12_preeng_g'] = $_POST['stuenr_hsec_class12_preeng_g'];
		}
		if(isset($_POST['stuenr_hsec_class12_comm_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_class12_comm_g'] = $_POST['stuenr_hsec_class12_comm_g'];
		}
		if(isset($_POST['stuenr_hsec_class12_other_g']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_class12_other_g'] = $_POST['stuenr_hsec_class12_other_g'];
		}
		if(isset($_POST['stuenr_hsec_f_total']))
		{
			$arrayDFormSubmit['SemisEnrollment201415']['stuenr_hsec_f_total'] = $_POST['stuenr_hsec_f_total'];
		}
		$arrayDFormSubmit['SemisEnrollment201415']['sturep_class4_b'] = $_POST['sturep_class4_b'];
		$arrayDFormSubmit['SemisEnrollment201415']['sturep_class5_b'] = $_POST['sturep_class5_b'];
		$arrayDFormSubmit['SemisEnrollment201415']['sturep_class6_b'] = $_POST['sturep_class6_b'];
		$arrayDFormSubmit['SemisEnrollment201415']['sturep_class7_b'] = $_POST['sturep_class7_b'];
		$arrayDFormSubmit['SemisEnrollment201415']['sturep_class8_b'] = $_POST['sturep_class8_b'];
		$arrayDFormSubmit['SemisEnrollment201415']['sturep_class9_b'] = $_POST['sturep_class9_b'];
		$arrayDFormSubmit['SemisEnrollment201415']['sturep_class10_b'] = $_POST['sturep_class10_b'];
		$arrayDFormSubmit['SemisEnrollment201415']['sturep_class11_b'] = $_POST['sturep_class11_b'];
		$arrayDFormSubmit['SemisEnrollment201415']['sturep_class12_b'] = $_POST['sturep_class12_b'];
		$arrayDFormSubmit['SemisEnrollment201415']['sturep_total_b'] = $_POST['sturep_total_b'];
		$arrayDFormSubmit['SemisEnrollment201415']['sturep_class4_g'] = $_POST['sturep_class4_g'];
		$arrayDFormSubmit['SemisEnrollment201415']['sturep_class5_g'] = $_POST['sturep_class5_g'];
		$arrayDFormSubmit['SemisEnrollment201415']['sturep_class6_g'] = $_POST['sturep_class6_g'];
		$arrayDFormSubmit['SemisEnrollment201415']['sturep_class7_g'] = $_POST['sturep_class7_g'];
		$arrayDFormSubmit['SemisEnrollment201415']['sturep_class8_g'] = $_POST['sturep_class8_g'];
		$arrayDFormSubmit['SemisEnrollment201415']['sturep_class9_g'] = $_POST['sturep_class9_g'];
		$arrayDFormSubmit['SemisEnrollment201415']['sturep_class10_g'] = $_POST['sturep_class10_g'];
		$arrayDFormSubmit['SemisEnrollment201415']['sturep_class11_g'] = $_POST['sturep_class11_g'];
		$arrayDFormSubmit['SemisEnrollment201415']['sturep_class12_g'] = $_POST['sturep_class12_g'];
		$arrayDFormSubmit['SemisEnrollment201415']['sturep_total_g'] = $_POST['sturep_total_g'];
		
		// $this->SemisEnrollment201415->Saveall($arrayDFormSubmit);
		// $arrayDFormSubmit['SemisEnrollment201415'] = $arrayDFormSubmit['SemisEnrollment201415'];
		$this->SemisEnrollment201415->Saveall($arrayDFormSubmit);
		
		for($a = 1; $a <= $_POST['sti_teacher_mf_total']; $a++)
		{
			
			if(isset($_POST['tdi_full_name_'.($a)]))
			{
				$this->SemisTeacher201415->id = null;
				
				$arrayTFormSubmit = array();
				$arrayTFormSubmit['SemisHsTeacher201314']['school_id'] = $this->SemisUniversal201415->id;
				
				if(isset($_POST['tdi_full_name_'.($a)]))
				{
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_full_name'] = $_POST['tdi_full_name_'.($a)];
				}
				if(isset($_POST['tdi_teacher_cnic_'.($a)]))
				{
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_cnic'] = $_POST['tdi_teacher_cnic_'.($a)];
				}
				if(isset($_POST['tdi_teacher_gender_'.($a)]))
				{
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_gender'] = $_POST['tdi_teacher_gender_'.($a)];
				}
				if(isset($_POST['tdi_teacher_personnel_number_'.($a)]))
				{
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_personnel_number'] = $_POST['tdi_teacher_personnel_number_'.($a)];
				}
				
				if(isset($_POST['tdi_teacher_dob_date_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_dob_date'] = $_POST['tdi_teacher_dob_date_'.($a)];
				}
				// if(isset($_POST['tdi_teacher_dob_month_'.($a)]))
				// {	
					// $arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_dob_month'] = $_POST['tdi_teacher_dob_month_'.($a)];
				// }
				// if(isset($_POST['tdi_teacher_dob_year_'.($a)]))
				// {	
					// $arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_dob_year'] = $_POST['tdi_teacher_dob_year_'.($a)];
				// }
				
				if(isset($_POST['tdi_teacher_designation_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_designation'] = $_POST['tdi_teacher_designation_'.($a)];
				}
				if(isset($_POST['tdi_teacher_bps_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_bps'] = $_POST['tdi_teacher_bps_'.($a)];
				}
				if(isset($_POST['tdi_teacher_actual_bps_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_actual_bps'] = $_POST['tdi_teacher_actual_bps_'.($a)];
				}
				
				
				// if(isset($_POST['tdi_teacher_entry_service_day_'.($a)]))
				// {	
					// $arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_entry_service_day'] = $_POST['tdi_teacher_entry_service_day_'.($a)];
				// }
				// if(isset($_POST['tdi_teacher_entry_service_month_'.($a)]))
				// {	
					// $arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_entry_service_month'] = $_POST['tdi_teacher_entry_service_month_'.($a)];
				// }
				
				if(isset($_POST['tdi_teacher_entry_service_date_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_entry_service_date'] = $_POST['tdi_teacher_entry_service_date_'.($a)];
					
				}
				
				if(isset($_POST['tdi_teacher_appointment_bps_'.($a)]))
				{
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_appointment_bps'] = $_POST['tdi_teacher_appointment_bps_'.($a)];
				}
				if(isset($_POST['tdi_teacher_code_type_post_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_code_type_post'] = $_POST['tdi_teacher_code_type_post_'.($a)];
				}
				if(isset($_POST['tdi_teacher_highest_academic_qualification_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_highest_academic_qualification'] = $_POST['tdi_teacher_highest_academic_qualification_'.($a)];
				}
				if(isset($_POST['tdi_teacher_highest_professional_training_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_highest_professional_training'] = $_POST['tdi_teacher_highest_professional_training_'.($a)];
				}
				if(isset($_POST['tdi_teacher_leaves_availed_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_leaves_availed'] = $_POST['tdi_teacher_leaves_availed_'.($a)];
				}
				if(isset($_POST['tdi_teacher_subjects_taught_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_subjects_taught'] = $_POST['tdi_teacher_subjects_taught_'.($a)];
				}
				if(isset($_POST['tdi_teacher_on_detailment_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_on_detailment'] = $_POST['tdi_teacher_on_detailment_'.($a)];
				}
				if(isset($_POST['tdi_teacher_number_'.($a)]))
				{	
					$arrayTFormSubmit['SemisHsTeacher201314']['tdi_teacher_number'] = $_POST['tdi_teacher_number_'.($a)];
				}
				// $this->SemisHsTeacher201314->Saveall($arrayTFormSubmit);
				
				$arrayTFormSubmit['SemisTeacher201415'] = $arrayTFormSubmit['SemisHsTeacher201314'];
				// debug($_POST);
				// debug($arrayTFormSubmit['SemisTeacher201415']);
				$this->SemisTeacher201415->Saveall($arrayTFormSubmit);
			}
		
		}

		if(isset($_POST['total_merged_schools']))
		{
			for($x = 1; $x <= $_POST['total_merged_schools']; $x++)
			{
				if(isset($_POST["merged_".$x."_bi_school_id"]))
				{	
					$arrayTFormSubmit['SemisConsolidationUniv201415']['id'] = $_POST["merged_".$x."_bi_school_id"];
				}
				if(isset($_POST["merged_".$x."_bi_school_name"]))
				{	
					$arrayTFormSubmit['SemisConsolidationUniv201415']['bi_school_name'] = $_POST["merged_".$x."_bi_school_name"];
				}
				if(isset($_POST["merged_".$x."_asi_school_type"]))
				{	
					$arrayTFormSubmit['SemisConsolidationUniv201415']['asi_school_type'] = $_POST["merged_".$x."_asi_school_type"];
				}
				if(isset($_POST["merged_".$x."_asi_school_merging_type"]))
				{	
					$arrayTFormSubmit['SemisConsolidationUniv201415']['asi_school_merging_type'] = $_POST["merged_".$x."_asi_school_merging_type"];
				}
				if(isset($_POST["merged_".$x."_dsi_status"]))
				{	
					$arrayTFormSubmit['SemisConsolidationUniv201415']['dsi_status'] = $_POST["merged_".$x."_dsi_status"];
				}
				if(isset($_POST["merged_".$x."_sbi_ownership"]))
				{	
					$arrayTFormSubmit['SemisConsolidationUniv201415']['sbi_ownership'] = $_POST["merged_".$x."_sbi_ownership"];
				}
				if(isset($_POST["merged_".$x."_dsi_shift"]))
				{	
					$arrayTFormSubmit['SemisConsolidationUniv201415']['dsi_shift'] = $_POST["merged_".$x."_dsi_shift"];
				}
				if(isset($_POST["merged_".$x."_dsi_level"]))
				{	
					$arrayTFormSubmit['SemisConsolidationUniv201415']['dsi_level'] = $_POST["merged_".$x."_dsi_level"];
				}
				if(isset($_POST["merged_".$x."_dsi_sch_medium"]))
				{	
					$arrayTFormSubmit['SemisConsolidationUniv201415']['dsi_sch_medium'] = $_POST["merged_".$x."_dsi_sch_medium"];
				}
				if(isset($_POST["merged_".$x."_dsi_sch_gender"]))
				{	
					$arrayTFormSubmit['SemisConsolidationUniv201415']['dsi_sch_gender'] = $_POST["merged_".$x."_dsi_sch_gender"];
				}
				if(isset($_POST["merged_".$x."_dsi_old_cost_center"]))
				{	
					$arrayTFormSubmit['SemisConsolidationUniv201415']['dsi_old_cost_center'] = $_POST["merged_".$x."_dsi_old_cost_center"];
				}
				if(isset($_POST["merged_".$x."_sti_govt_teacher_number_male"]))
				{	
					$arrayTFormSubmit['SemisConsolidationUniv201415']['sti_govt_teacher_number_male'] = $_POST["merged_".$x."_sti_govt_teacher_number_male"];
				}
				if(isset($_POST["merged_".$x."_sti_govt_teacher_number_female"]))
				{	
					$arrayTFormSubmit['SemisConsolidationUniv201415']['sti_govt_teacher_number_female'] = $_POST["merged_".$x."_sti_govt_teacher_number_female"];
				}
				if(isset($_POST["merged_".$x."_sti_non_teacher_number_male"]))
				{	
					$arrayTFormSubmit['SemisConsolidationUniv201415']['sti_non_teacher_number_male'] = $_POST["merged_".$x."_sti_non_teacher_number_male"];
				}
				if(isset($_POST["merged_".$x."_sti_non_teacher_number_female"]))
				{	
					$arrayTFormSubmit['SemisConsolidationUniv201415']['sti_non_teacher_number_female'] = $_POST["merged_".$x."_sti_non_teacher_number_female"];
				}
				if(isset($_POST["merged_".$x."_sti_enrollment_boys"]))
				{	
					$arrayTFormSubmit['SemisConsolidationUniv201415']['sti_enrollment_boys'] = $_POST["merged_".$x."_sti_enrollment_boys"];
				}
				if(isset($_POST["merged_".$x."_sti_enrollment_girls"]))
				{	
					$arrayTFormSubmit['SemisConsolidationUniv201415']['sti_enrollment_girls'] = $_POST["merged_".$x."_sti_enrollment_girls"];
				}
				if(isset($_POST["merged_".$x."_total_rooms"]))
				{	
					$arrayTFormSubmit['SemisConsolidationUniv201415']['total_rooms'] = $_POST["merged_".$x."_total_rooms"];
				}
				if(isset($_POST["merged_".$x."_total_classrooms"]))
				{	
					$arrayTFormSubmit['SemisConsolidationUniv201415']['total_classrooms'] = $_POST["merged_".$x."_total_classrooms"];
				}
				if(isset($_POST["merged_".$x."_sbf_condition_bwall"]))
				{	
					$arrayTFormSubmit['SemisConsolidationUniv201415']['sbf_condition_bwall'] = $_POST["merged_".$x."_sbf_condition_bwall"];
				}
				if(isset($_POST["merged_".$x."_sbf_washrooms"]))
				{	
					$arrayTFormSubmit['SemisConsolidationUniv201415']['sbf_washrooms'] = $_POST["merged_".$x."_sbf_washrooms"];
				}
				if(isset($_POST["merged_".$x."_sbf_drinking_water"]))
				{	
					$arrayTFormSubmit['SemisConsolidationUniv201415']['sbf_drinking_water'] = $_POST["merged_".$x."_sbf_drinking_water"];
				}
				if(isset($_POST["merged_".$x."_sbf_electricity"]))
				{	
					$arrayTFormSubmit['SemisConsolidationUniv201415']['sbf_electricity'] = $_POST["merged_".$x."_sbf_electricity"];
				}				
				
				$this->SemisConsolidationUniv201415->id = $arrayTFormSubmit['SemisConsolidationUniv201415']['id'];
				$this->SemisConsolidationUniv201415->save($arrayTFormSubmit);	
				// debug($arrayTFormSubmit);
			}
		}
			
		$this->redirect('../home/index/editingcompleted');
	}
	
	
	
	function semis_form_hs_p2()
	{
		
	}
	
	function submit_semis_form_hs_p2()
	{
		
	}
	
	function get_school_basic_detail($semis_code_new = null, $semis_code_old = null)
	{
		$districts = $this->SemisCodeDistrict->find('all');
		$this->set('districts',$districts);	
		$tehsils = $this->CodesForDistrictAndTehsil->find('all');
		$this->set('tehsils',$tehsils);	
		$union_councils = $this->CodesForUc->find('all');
		$this->set('union_councils',$union_councils);	
		
		
		$oldSemisSchools = $this->Univ2012->find('all',array('conditions'=>array('school_id_old'=>$semis_code_old)));
		// debug($oldSemisSchools);
		if(count($oldSemisSchools) == 0)
		{
			$newSemisSchools = $this->Univ2012->find('all',array('conditions'=>array('school_id'=>$semis_code_new)));
			if(count($newSemisSchools) == 0)
			{
				return false;
			}else
			{
				$this->set('schools',$newSemisSchools);
			}
		}else
		{
			$this->set('schools',$oldSemisSchools);
		}
	}

	function semishsquarterdata($action = 'add', $year = null, $quarter = null, $form_id = null)
	{
		
		$usadmin = $this->Auth->user('superuser');
		if($usadmin == 1 && $form_id == null)
		{
			
			$this->redirect('../home/superdashboard');
			
		}
		
		$uname = $this->Auth->user('username');
		$this->set('semis', $uname);
		
		if(!($uname == 'admin') && !($uname == 'tesths'))
		{
			$semisSchools = $this->Univ2012->find('all',array('conditions'=>array('school_id'=>$form_id)));
			$this->set('schools',$semisSchools);
		}
		
		if($action == 'edit')
		{
			$semisSchool = $this->SemisHsUniversal201314->find('first',array('conditions'=>array('school_semis_new'=>$uname, 'year' => $year, 'quarter' => $quarter, 'final'=>0), 'order'=>'quarter asc'));
			if(!(isset($semisSchool['SemisHsUniversal201314'])))
			{
				$this->redirect('../home/index');
			}
			$semisSchoolsEnrollment = $this->SemisHsEnrollment201314->find('first',array('conditions'=>array('school_id' => $semisSchool['SemisHsUniversal201314']['id'])));
			$semisSchoolsTeachers = $this->SemisHsTeacher201314->find('all',array('conditions'=>array('school_id' => $semisSchool['SemisHsUniversal201314']['id'])));
			
			$this->set('school',$semisSchool);
			$this->set('semisEnrollment',$semisSchoolsEnrollment);
			$this->set('schoolteachers',$semisSchoolsTeachers);
			$this->set('form_edit','edit');
		}
		
		if($action == 'add')
		{
			$semisSchool = $this->SemisHsUniversal201314->find('first',array('conditions'=>array('school_semis_new'=>$uname, 'year' => $year, 'quarter' => $quarter), 'order'=>'quarter asc'));
			if(isset($semisSchool['SemisHsUniversal201314']))
			{
				$this->redirect('../home/semishsquarterdata/edit/'.$year.'/'.$quarter);
			}
			
			$semisSchools = $this->Univ2012->find('all',array('conditions'=>array('school_id'=>$uname)));
			$this->set('schools',$semisSchools);
		}
		
		
		$banks = $this->codesForBank->find('all');
		$this->set('banks',$banks);	
		$this->set('year',$year);	
		$this->set('quarter',$quarter);	
		
		$typeofposts = $this->codesForTypeOfPost->find('all');
		$this->set('typeofposts',$typeofposts);
		
		$codesteacherqualifications = $this->codesForTeachersQualification->find('all');
		$this->set('codesteacherqualifications',$codesteacherqualifications);
		
		$codesteachertrainings = $this->codesForTeachersTraining->find('all');
		$this->set('codesteachertrainings',$codesteachertrainings);
		
		$codesteacherdesignations = $this->codesForTeachersDesignation->find('all');
		$this->set('codesteacherdesignations',$codesteacherdesignations);
		
		
		$districts = $this->SemisCodeDistrict->find('all');
		$this->set('districts',$districts);	
		// $this->layout = "defaultsemis";
		
		$tehsils = $this->CodesForDistrictAndTehsil->find('all');
		$this->set('tehsils',$tehsils);	
		$union_councils = $this->CodesForUc->find('all');
		$this->set('union_councils',$union_councils);	
	}
	
	function semishsdashboard($action = 'nothing')
	{
		$usadmin = $this->Auth->user('superuser');
		if($usadmin == 6){
			$this->redirect('../home/index');
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
		}

		$this->set('usadmin', $usadmin);
		if($usadmin == 6){
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
			$this->layout = "formlayout";
			$this->set('title', 'Form - RSU');	
			
			$this->render('mn/index');
			//$this->render('../monitoringforms201516/index');

		}
		if($usadmin == 4)
		{
			$union_councils = $this->CodesForUc->find('all');
			$this->set('union_councils',$union_councils);
		
			
			$us_dis = $this->Auth->user('district');
			
			// $total_schools = $this->SemisUniversal201415->query("select TehsilID, count(*) as total from univ2012as where DistrictID = ".$us_dis." && Prefix != 'GBHS' && Prefix != 'GBHSS' && Prefix != 'GGHS' && Prefix != 'GGHSS' group by TehsilID");
			$total_schools = $this->SemisUniversal201415->query("select TehsilID, count(*) as total from univ2012as where DistrictID = ".$us_dis." group by TehsilID");
			$this->set('total_schools',$total_schools);
			
			$total_entered_high = $this->SemisUniversal201415->query("select count(*) as total from semis_universal201415s where bi_school_district = ".$us_dis." && (bi_school_name LIKE 'GBH%' || bi_school_name LIKE 'GGH%') && final = 0");
			$this->set('total_entered_high',$total_entered_high);
			$total_finalized_hm_high = $this->SemisUniversal201415->query("select count(*) as total from semis_universal201415s where bi_school_district = ".$us_dis." && (bi_school_name LIKE 'GBH%' || bi_school_name LIKE 'GGH%') && final = 1");
			$this->set('total_finalized_hm_high',$total_finalized_hm_high);
			$total_finalized_high = $this->SemisUniversal201415->query("select count(*) as total from semis_universal201415s where bi_school_district = ".$us_dis." && (bi_school_name LIKE 'GBH%' || bi_school_name LIKE 'GGH%') && final = 2");
			$this->set('total_finalized_high',$total_finalized_high);
			
			$total_schools_high = $this->User->find('count',array('conditions'=>array('district'=>$us_dis, 'superuser'=>2)));
			$this->set('total_schools_high',$total_schools_high);
			
			$deos = $this->User->find('all',array('conditions'=>array('district'=>$us_dis, 'superuser'=>3)));
			
			$x = 0;
			foreach($deos as $deo)
			{
				
				$total_entered = $this->SemisUniversal201415->query("select count(*) as total from semis_universal201415s where entered_by = ".$deo['User']['id']."");
				$total_finalized = $this->SemisUniversal201415->query("select count(*) as total from semis_universal201415s where entered_by = ".$deo['User']['id']." && final = 1");
				$total_approved = $this->SemisUniversal201415->query("select count(*) as total from semis_universal201415s where entered_by = ".$deo['User']['id']." && final = 2");
				
				$deos[$x]['User']['forms_entered'] = $total_entered;
				$deos[$x]['User']['forms_finalized'] = $total_finalized;
				$deos[$x]['User']['forms_approved'] = $total_approved;
				$x++;
			}
			
			$this->set('deos',$deos);
			
			$total_finalized_by_deos = $this->SemisUniversal201415->query("select * from semis_universal201415s where bi_school_district = ".$us_dis." && final = 1");
			$this->set('total_finalized_by_deos',$total_finalized_by_deos);
		}
			
			
		
		
		if($usadmin == 3)
		{
			$union_councils = $this->CodesForUc->find('all');
			$this->set('union_councils',$union_councils);
		
			$uid = $this->Auth->user('id');
			$user_district = $this->Auth->user('district');
			// echo $uid;
			$usersemisSchools = $this->SemisUniversal201415->query("select school_semis_new,remarks from semis_universal201415s as SemisUniversal201415 where entered_by = ".$uid." && final = 0");
			$this->set('usersemisSchools',$usersemisSchools);
			
			$semisSchools = $this->SemisUniversal201415->query("select * from semis_universal201415s where entered_by != ".$uid." && bi_school_district = ".$user_district."");
			$semisSchools_2 = $this->SemisUniversal201415->query("select * from semis_universal201415s where entered_by = ".$uid." && (final = 1 || final = 2)");
			$semisSchools_3 = $this->SemisUniversal201415->query("select * from semis_universal201415s where final = 2 || final = 3");
			
			$SemisIDArray = array();
			$x = 0;
			$SemisIDArray[$x] = 0;
			foreach($semisSchools as $semisSchool)
			{
				$x++;
				$SemisIDArray[$x] = $semisSchool['semis_universal201415s']['school_semis_new'];
			}
			
			foreach($semisSchools_2 as $semisSchool)
			{
				$x++;
				$SemisIDArray[$x] = $semisSchool['semis_universal201415s']['school_semis_new'];
			}
			
			foreach($semisSchools_3 as $semisSchool)
			{
				$x++;
				$SemisIDArray[$x] = $semisSchool['semis_universal201415s']['school_semis_new'];
			}
			
			
			
			// print_r($semisSchools);
			// print_r($SemisIDArray);
			$sql = "select * from univ2012as as Univ2012a WHERE school_id NOT IN(".implode(",",$SemisIDArray).") && DistrictID = ".$user_district." && Prefix != 'GBHS' && Prefix != 'GBHSS' && Prefix != 'GGHS' && Prefix != 'GGHSS' ";
			// echo $sql;
			// $allschoolsforms = $this->Univ2012a->find('all',array('conditions'=>array('DistrictID'=>$user_district)));
			$allschoolsforms = $this->Univ2012a->query($sql);
			$x = 0;
					
			$this->set('allschoolsforms', $allschoolsforms);
			
		}

		$uname = $this->Auth->user('username');
		
		if($uname == 'admin')
		{

			$this->redirect('../home/superdashboard');
		}
		
		if($usadmin == 1)
		{
			$this->redirect('../home/superdashboard');
		}
		
		if($action == 'editingcompleted') 
		{
			$this->set('action', 'editingcompleted');
		}
		if($action == 'finalized') 
		{
			$this->set('action', 'finalized');
		}
		$uname = $this->Auth->user('username');
		$this->set('semis', $uname);
		
		if(!($uname == 'admin') && !($uname == 'tesths'))
		{	
			
			$semisSchoolsAsc201415 = $this->SemisUniversal201415->find('first',array('conditions'=>array('school_semis_new'=>$uname)));
			$this->set('semisSchoolsAsc201415',$semisSchoolsAsc201415);
			
			$semisSchools = $this->SemisHsUniversal201314->find('all',array('conditions'=>array('school_semis_new'=>$uname), 'order'=>'quarter asc' ));
			$this->set('schools',$semisSchools);
			
			if(count($semisSchools) > 0)
			{
				$semisSchoolsenrollment = $this->SemisHsEnrollment201314->find('first',array('conditions'=>array('school_id'=>$semisSchools[0]['SemisHsUniversal201314']['id'])));
				$this_user_detail_in_addition = $this->Univ2012a->find('first',array('conditions'=>array('school_id'=>$uname)));
				$semisSchools[0]['Univ2012a'] = $this_user_detail_in_addition['Univ2012a'];
				$this->set('this_user_details', $semisSchools[0]);
				$this->set('this_user_enrollment', $semisSchoolsenrollment);
				$this->set('firstentry', 'edit');
			}else
			{
				$this_user_details = $this->Univ2012a->find('first',array('conditions'=>array('school_id'=>$uname)));
				
				$this->set('this_user_details', $this_user_details);
				$this->set('firstentry', 'first');
			}
		}else
		{
			$semisSchools = $this->SemisHsUniversal201314->find('all');
			$this->set('schools',$semisSchools);
		}
	}
	
	function finalize_form($year = null, $quarter = null, $school_id = null, $semis = null)
	{
		$usadmin = $this->Auth->user('superuser');
		$usdis = $this->Auth->user('district');
		$usid = $this->Auth->user('id');
		
		if($usadmin == 3)
		{
			$schools = $this->SemisUniversal201415->find('first',array('conditions'=>array('school_semis_new'=>$school_id, 'bi_school_district' => $usdis, 'entered_by' => $usid)));
			if(count($schools) == 0)
			{
				$this->redirect('../home/index/Form Not Finalized');
			}else
			{
				$this->SemisUniversal201415->id = $schools['SemisUniversal201415']['id'];
				$arrayDFormSubmit['SemisUniversal201415'] = $schools['SemisUniversal201415'];
				$arrayDFormSubmit['SemisUniversal201415']['final'] =1;
				$this->SemisUniversal201415->Save($arrayDFormSubmit);
				$this->redirect('../home/index/Form Finalized');
			}
		}
		
		if($usadmin == 4)
		{
			$schools = $this->SemisUniversal201415->find('first',array('conditions'=>array('school_semis_new'=>$school_id, 'bi_school_district' => $usdis)));
			if(count($schools) == 0)
			{
				$this->redirect('../home/index/Form Not Finalized');
			}else
			{
				$this->SemisUniversal201415->id = $schools['SemisUniversal201415']['id'];
				$arrayDFormSubmit['SemisUniversal201415'] = $schools['SemisUniversal201415'];
				$arrayDFormSubmit['SemisUniversal201415']['final'] =2;
				$this->SemisUniversal201415->Save($arrayDFormSubmit);
				$this->redirect('../home/index/Form Finalized');
			}
		}
		
		$uname = $this->Auth->user('username');
		
		if($usadmin == 2)
		{
			$schools = $this->SemisUniversal201415->find('first',array('conditions'=>array('school_semis_new'=>$uname)));
			if(count($schools) == 0)
			{
				$this->redirect('../home/index/Form Not Finalized');
			}else
			{
				$this->SemisUniversal201415->id = $schools['SemisUniversal201415']['id'];
				$arrayDFormSubmit['SemisUniversal201415'] = $schools['SemisUniversal201415'];
				$arrayDFormSubmit['SemisUniversal201415']['final'] =1;
				$this->SemisUniversal201415->Saveall($arrayDFormSubmit);
				$this->redirect('../home/index/Form Finalized');
			}
		}
		
		if(!($uname == 'admin') && !($uname == 'tesths'))
		{
			if($year == null || $quarter == null)
			{
				
				$this->redirect('../home/index');
				
			}else
			{
				$uname = $this->Auth->user('username');
				
				$schools = $this->SemisHsUniversal201314->find('first',array('conditions'=>array('school_semis_new'=>$uname, 'year'=>$year, 'quarter'=>$quarter)));
				$this->SemisHsUniversal201314->id = $schools['SemisHsUniversal201314']['id'];
				$arrayDFormSubmit['SemisHsUniversal201314'] = $schools['SemisHsUniversal201314'];
				$arrayDFormSubmit['SemisHsUniversal201314']['final'] =1;
				$this->SemisHsUniversal201314->Saveall($arrayDFormSubmit);
			}
		}else
		{
			if($year == null || $quarter == null || $school_id == null)
			{
				
				$this->redirect('../home/index');
				
			}else
			{
				$uname = $this->Auth->user('username');
				
				$schools = $this->SemisHsUniversal201314->find('first',array('conditions'=>array('school_semis_new'=>$school_id, 'year'=>$year, 'quarter'=>$quarter)));
				$arrayDFormSubmit['SemisHsUniversal201314'] = $schools['SemisHsUniversal201314'];
				$arrayDFormSubmit['SemisHsUniversal201314']['final'] =1;
				$this->SemisHsUniversal201314->Saveall($arrayDFormSubmit);
			}
		}
		$this->redirect('../home/index/finalized');
	}
	
	function unfinalize_form($year = null, $quarter = null, $school_id = null, $asc = null, $towards = null)
	{
		$usadmin = $this->Auth->user('superuser');
		$usdis = $this->Auth->user('district');
		
		if($usadmin == 4)
		{
			$schools = $this->SemisUniversal201415->find('first',array('conditions'=>array('school_semis_new'=>$school_id, 'bi_school_district' => $usdis)));
			if(count($schools) == 0)
			{
				// $this->redirect('../home/index/Form Not Finalized');
				header('Location: '.$_SERVER["HTTP_REFERER"]);
			}else
			{
				$this->SemisUniversal201415->id = $schools['SemisUniversal201415']['id'];
				$arrayDFormSubmit['SemisUniversal201415'] = $schools['SemisUniversal201415'];
				$arrayDFormSubmit['SemisUniversal201415']['final'] =0;
				$arrayDFormSubmit['SemisUniversal201415']['remarks'] = $_POST['remarks'];
				$this->SemisUniversal201415->Saveall($arrayDFormSubmit);
				// $this->redirect('../home/index/Form Finalized');
				header('Location: '.$_SERVER["HTTP_REFERER"]);
			}
		}
		
		$uname = $this->Auth->user('username');
		
		if($uname == 'admin')
		{
				if($asc == '201415')
				{
					if($towards == 'deo')
					{
						$schools = $this->SemisUniversal201415->find('first',array('conditions'=>array('school_semis_new'=>$school_id)));
						$this->SemisUniversal201415->id = $schools['SemisUniversal201415']['id'];
						$arrayDFormSubmit['SemisUniversal201415'] = $schools['SemisUniversal201415'];
						$arrayDFormSubmit['SemisUniversal201415']['final'] =0;
						$arrayDFormSubmit['SemisUniversal201415']['remarks'] ="un-finalized by RSU SEMIS";
						$this->SemisUniversal201415->Saveall($arrayDFormSubmit);
						// $this->redirect('../home/superdashboard201415');
						header('Location: '.$_SERVER["HTTP_REFERER"]);
					}
					
					if($towards == 'do')
					{
						$schools = $this->SemisUniversal201415->find('first',array('conditions'=>array('school_semis_new'=>$school_id)));
						$this->SemisUniversal201415->id = $schools['SemisUniversal201415']['id'];
						$arrayDFormSubmit['SemisUniversal201415'] = $schools['SemisUniversal201415'];
						$arrayDFormSubmit['SemisUniversal201415']['final'] =1;
						$arrayDFormSubmit['SemisUniversal201415']['remarks'] ="un-finalized by RSU SEMIS";
						$this->SemisUniversal201415->Saveall($arrayDFormSubmit);
						// $this->redirect('../home/superdashboard201415');
						header('Location: '.$_SERVER["HTTP_REFERER"]);
					}
				}else{
					$uname = $this->Auth->user('username');
					
					$schools = $this->SemisHsUniversal201314->find('first',array('conditions'=>array('school_semis_new'=>$school_id, 'year'=>$year, 'quarter'=>$quarter)));
					$this->SemisHsUniversal201314->id = $schools['SemisHsUniversal201314']['id'];
					$arrayDFormSubmit['SemisHsUniversal201314'] = $schools['SemisHsUniversal201314'];
					$arrayDFormSubmit['SemisHsUniversal201314']['final'] =0;
					$this->SemisHsUniversal201314->Saveall($arrayDFormSubmit);
				}
		}
		
		$this->redirect('../home/index');
	}
	
	function superdashboard()
	{
		$usadmin = $this->Auth->user('superuser');
		$this->set('title', 'Home - Reform Support Unit');
		if($usadmin == 1)
		{
			
			$univ_total_schools = $this->SemisUniversal201415->query("select DistrictID, count(*) as total_schools from univ2012as as Univ2012a WHERE Prefix != 'GBHS' && Prefix != 'GBHSS' && Prefix != 'GGHS' && Prefix != 'GGHSS' GROUP BY DistrictID");
			$this->set('univ_total_schools',$univ_total_schools);
			
			$finalized_do_201415 = $this->SemisUniversal201415->query("select bi_school_district, count(bi_school_district) AS count_forms from semis_universal201415s where final = 2 && (bi_school_name LIKE 'GBP%' || bi_school_name LIKE 'GGP%' || bi_school_name LIKE 'GBE%' || bi_school_name LIKE 'GGE%' || bi_school_name LIKE 'GBL%' || bi_school_name LIKE 'GGL%') group by bi_school_district order by bi_school_district");
			$this->set('finalized_do_201415',$finalized_do_201415);
			
			$finalized_201415 = $this->SemisUniversal201415->query("select bi_school_district, count(bi_school_district) AS count_forms from semis_universal201415s where final = 1 && (bi_school_name LIKE 'GBP%' || bi_school_name LIKE 'GGP%' || bi_school_name LIKE 'GBE%' || bi_school_name LIKE 'GGE%' || bi_school_name LIKE 'GBL%' || bi_school_name LIKE 'GGL%') group by bi_school_district order by bi_school_district");
			$this->set('finalized_201415',$finalized_201415);
			
			
			$filled_201415 = $this->SemisUniversal201415->query("select bi_school_district, count(bi_school_district) AS count_forms from semis_universal201415s where final = 0 && (bi_school_name LIKE 'GBP%' || bi_school_name LIKE 'GGP%' || bi_school_name LIKE 'GBE%' || bi_school_name LIKE 'GGE%' || bi_school_name LIKE 'GBL%' || bi_school_name LIKE 'GGL%') group by bi_school_district order by bi_school_district");
			$this->set('filled_201415',$filled_201415);
			
			
			//for high school reports
			
			$univ_total_schools_hs = $this->SemisUniversal201415->query("select DistrictID, count(*) as total_schools from univ2012as as Univ2012a WHERE Prefix LIKE 'GBH%' || Prefix LIKE 'GGH%' GROUP BY DistrictID");
			$this->set('univ_total_schools_hs',$univ_total_schools_hs);
			
			$finalized_do_201415_hs = $this->SemisUniversal201415->query("select bi_school_district, count(bi_school_district) AS count_forms from semis_universal201415s where final = 2 && (bi_school_name LIKE 'GBH%' || bi_school_name LIKE 'GGH%') group by bi_school_district order by bi_school_district");
			$this->set('finalized_do_201415_hs',$finalized_do_201415_hs);
			
			$finalized_201415_hs = $this->SemisUniversal201415->query("select bi_school_district, count(bi_school_district) AS count_forms from semis_universal201415s where final = 1 && (bi_school_name LIKE 'GBH%' || bi_school_name LIKE 'GGH%') group by bi_school_district order by bi_school_district");
			$this->set('finalized_201415_hs',$finalized_201415_hs);
			
			
			$filled_201415_hs = $this->SemisUniversal201415->query("select bi_school_district, count(bi_school_district) AS count_forms from semis_universal201415s where final = 0 && (bi_school_name LIKE 'GBH%' || bi_school_name LIKE 'GGH%') group by bi_school_district order by bi_school_district");
			$this->set('filled_201415_hs',$filled_201415_hs);
			
			$districts = $this->SemisCodeDistrict->find('all');
			$this->set('districts',$districts);	
			
			
			// Count Queries for reports
			$filledforms = $this->SemisHsUniversal201314->query("select bi_school_district, count(bi_school_district) AS count_forms from semis_hs_universal201314s where school_semis_old != 0 && school_semis_old IS NOT NULL group by bi_school_district order by bi_school_district");
			$this->set('filledforms',$filledforms);
			
			$finalizedforms = $this->SemisHsUniversal201314->query("select bi_school_district, count(bi_school_district) AS count_forms from semis_hs_universal201314s where school_semis_old != 0 && school_semis_old IS NOT NULL && final = 1 group by bi_school_district order by bi_school_district");
			$this->set('finalizedforms',$finalizedforms);
			
			$filledfromschools = $this->SemisHsUniversal201314->query("select bi_school_district, count(bi_school_district) AS count_forms from semis_hs_universal201314s where school_semis_old != 0 && school_semis_old IS NOT NULL && sfaci_form_filling_source = 1 group by bi_school_district order by bi_school_district");
			$this->set('filledfromschools',$filledfromschools);
			
			$this->set('superadmin',$usadmin);
		}else
		{
			$this->redirect('../home/index');
		}
	}
	
	function superdashboard201415($type = null, $district_id = null, $status = 'fil')
	{
		
		$uname = $this->Auth->user('username');
		if(!($uname == 'admin'))
		{
			$district_id = $this->Auth->user('district');
		}
		
		$districts = $this->SemisCodeDistrict->find('all');
		$this->set('districts',$districts);	
		$tehsils = $this->CodesForDistrictAndTehsil->find('all');
		$this->set('tehsils',$tehsils);	
		$union_councils = $this->CodesForUc->find('all');
		$this->set('union_councils',$union_councils);	
		
		$this->set('status',$status);	
		
		if($type == 'sec')
		{
			if($status == 'fil')
			{
				$allschoolsforms = $this->SemisUniversal201415->query("select * from semis_universal201415s where !(bi_school_name LIKE 'GBP%' || bi_school_name LIKE 'GGP%' || bi_school_name LIKE 'GBE%' || bi_school_name LIKE 'GGE%' || bi_school_name LIKE 'GBL%' || bi_school_name LIKE 'GGL%') && bi_school_district = ".$district_id." order by bi_school_district  ");
				$this->set('allschoolsforms',$allschoolsforms);
			}
			if($status == 'fin')
			{
				$x = 0;
				$semis_array = array();
				$allschoolsforms = $this->SemisUniversal201415->query("select * from semis_universal201415s where !(bi_school_name LIKE 'GBP%' || bi_school_name LIKE 'GGP%' || bi_school_name LIKE 'GBE%' || bi_school_name LIKE 'GGE%' || bi_school_name LIKE 'GBL%' || bi_school_name LIKE 'GGL%') && bi_school_district = ".$district_id." order by bi_school_district  ");
				foreach($allschoolsforms as $allschoolsform)
				{
					$semis_array[$x] = $allschoolsform['semis_universal201415s']['school_semis_new'];
					$x++;
				}
				$allschoolsforms_fin = $this->Univ2012a->query("select * from univ2012as where !(Prefix = 'GBPS' || Prefix = 'GGPS' || Prefix = 'GBELS' || Prefix = 'GGELS' || Prefix = 'GBLSS' || Prefix = 'GGLSS') && school_id NOT IN ('".implode($semis_array, "', '")."') && DistrictID = ".$district_id." order by DistrictID ");
				
				$this->set('allschoolsforms',$allschoolsforms_fin);
				
			}
		}elseif($type == 'ele')
		{
			if($status == 'fil')
			{
				$allschoolsforms = $this->SemisUniversal201415->query("select * from semis_universal201415s where (bi_school_name LIKE 'GBP%' || bi_school_name LIKE 'GGP%' || bi_school_name LIKE 'GBE%' || bi_school_name LIKE 'GGE%' || bi_school_name LIKE 'GBL%' || bi_school_name LIKE 'GGL%') && bi_school_district = ".$district_id." order by bi_school_district ");
				$this->set('allschoolsforms',$allschoolsforms);
			}
			if($status == 'fin')
			{
				$x = 0;
				$semis_array = array();
				$allschoolsforms = $this->SemisUniversal201415->query("select * from semis_universal201415s where (bi_school_name LIKE 'GBP%' || bi_school_name LIKE 'GGP%' || bi_school_name LIKE 'GBE%' || bi_school_name LIKE 'GGE%' || bi_school_name LIKE 'GBL%' || bi_school_name LIKE 'GGL%') && bi_school_district = ".$district_id." order by bi_school_district ");
				foreach($allschoolsforms as $allschoolsform)
				{
					$semis_array[$x] = $allschoolsform['semis_universal201415s']['school_semis_new'];
					$x++;
				}
				
				$allschoolsforms_fin = $this->Univ2012a->query("select * from univ2012as where (Prefix = 'GBPS' || Prefix = 'GGPS' || Prefix = 'GBELS' || Prefix = 'GGELS' || Prefix = 'GBLSS' || Prefix = 'GGLSS') && school_id NOT IN ('".implode($semis_array, "', '")."') && DistrictID = ".$district_id." order by DistrictID ");
				
				$this->set('allschoolsforms',$allschoolsforms_fin);	
			}
		}
		// $allschoolsforms = $this->SemisHsUniversal201314->find('all',array('conditions'=>array(''=>)));
		
	}
	
	
	function do_dashboard()
	{
		$usadmin = $this->Auth->user('superuser');
		$dis_id = $this->Auth->user('district_id');
		if($usadmin == 2)
		{
			$districts = $this->SemisCodeDistrict->find('all', array('conditions'=>array('district_id'=>$dis_id)));
			$this->set('districts',$districts);	
			
			// Count Queries for reports
			$filledforms = $this->SemisHsUniversal201314->query("select bi_school_district, count(bi_school_district) AS count_forms from semis_hs_universal201314s where bi_school_district = '".$dis_id."' && school_semis_old != 0 && school_semis_old IS NOT NULL group by bi_school_district order by bi_school_district");
			$this->set('filledforms',$filledforms);
			
			$finalizedforms = $this->SemisHsUniversal201314->query("select bi_school_district, count(bi_school_district) AS count_forms from semis_hs_universal201314s where bi_school_district = '".$dis_id."' && school_semis_old != 0 && school_semis_old IS NOT NULL && final = 1 group by bi_school_district order by bi_school_district");
			$this->set('finalizedforms',$finalizedforms);
			
			$filledfromschools = $this->SemisHsUniversal201314->query("select bi_school_district, count(bi_school_district) AS count_forms from semis_hs_universal201314s where bi_school_district = '".$dis_id."' && school_semis_old != 0 && school_semis_old IS NOT NULL && sfaci_form_filling_source = 1 group by bi_school_district order by bi_school_district");
			$this->set('filledfromschools',$filledfromschools);
			
			$this->set('superadmin',$usadmin);
		}
		
		if($usadmin == 4)
		{
			
			$this->set('superadmin',$usadmin);
			
		}
	}
	
	function superdashboardPrint()
	{
			$this->redirect('../home/superdashboardprint');
		
	}
	
	function editsuperuser()
	{
		$districts = $this->SemisCodeDistrict->find('all');
		$this->set('districts',$districts);	
		$tehsils = $this->CodesForDistrictAndTehsil->find('all');
		$this->set('tehsils',$tehsils);	
		$union_councils = $this->CodesForUc->find('all');
		$this->set('union_councils',$union_councils);	
		
		$allschoolsforms = $this->SemisHsUniversal201314->query("select * from semis_hs_universal201314s where school_semis_old != 0 && school_semis_old IS NOT NULL order by bi_school_district");
		
		// $allschoolsforms = $this->SemisHsUniversal201314->find('all',array('conditions'=>array(''=>)));
		$this->set('allschoolsforms',$allschoolsforms);
	}
	
	function do_schools()
	{
		
		$dis_id = $this->Auth->user('district_id');
		
		$districts = $this->SemisCodeDistrict->find('all', array('conditions'=>array('district_id'=>$dis_id)));
		$this->set('districts',$districts);	
		$tehsils = $this->CodesForDistrictAndTehsil->find('all', array('conditions'=>array('district_id'=>$dis_id)));
		$this->set('tehsils',$tehsils);	
		$union_councils = $this->CodesForUc->find('all', array('conditions'=>array('district_id'=>$dis_id)));
		$this->set('union_councils',$union_councils);	
		
		// $allschoolsforms = $this->SemisUniversal201415->query("select * from semis_universal201415s where bi_school_district = '".$dis_id."' && school_semis_old != 0 && school_semis_old IS NOT NULL order by bi_school_district");
		// $allschoolsforms = $this->SemisHsUniversal201314->query("select * from semis_hs_universal201314s where bi_school_district = '".$dis_id."' && school_semis_old != 0 && school_semis_old IS NOT NULL order by bi_school_district");
		$allschoolsforms = $this->Univ2012a->find('all', array('conditions'=>array('DistrictID'=>$dis_id)));
		// $allschoolsforms = $this->SemisHsUniversal201314->find('all',array('conditions'=>array(''=>)));
		$this->set('allschoolsforms',$allschoolsforms);
	}
	
	function viewTry($ids)
    {
        //action logic goes here..
		echo ($ids);
    }
	
	
	function online_school_report($sc_id = null)
	{
		$banks = $this->codesForBank->find('all');
		$this->set('banks',$banks);	
		
		$typeofposts = $this->codesForTypeOfPost->find('all');
		$this->set('typeofposts',$typeofposts);	
		
		$codesteacherqualifications = $this->codesForTeachersQualification->find('all');
		$this->set('codesteacherqualifications',$codesteacherqualifications);
		
		$codesteachertrainings = $this->codesForTeachersTraining->find('all');
		$this->set('codesteachertrainings',$codesteachertrainings);
		
		$codesteacherdesignations = $this->codesForTeachersDesignation->find('all');
		$this->set('codesteacherdesignations',$codesteacherdesignations);
		
		$districts = $this->SemisCodeDistrict->find('all');
		$this->set('districts',$districts);	
		// $this->layout = "defaultsemis";
		
		$tehsils = $this->CodesForDistrictAndTehsil->find('all');
		$this->set('tehsils',$tehsils);	
		$union_councils = $this->CodesForUc->find('all');
		$this->set('union_councils',$union_councils);	
		
		
		// $allschoolsforms = $this->SemisHsUniversal201314->find('all',array('conditions'=>array('id'=>$sc_id)));
		$allschoolsforms = $this->SemisUniversal201415->find('all',array('conditions'=>array('id'=>$sc_id)));
		$x = 0;
		foreach($allschoolsforms as $allschoolsform)
		{
			$allschoolsforms[$x]['SemisHsUniversal201314'] = $allschoolsform['SemisUniversal201415'];
			$x++;
		}
		
		//Campus School Function
		if($allschoolsforms[0]['SemisHsUniversal201314']['campus_school'] == 1)
		{
			$merged_schools_array = $this->SemisConsolidationUniv201415->find('all',array('conditions'=>array('campus_id'=>$allschoolsforms[0]['SemisHsUniversal201314']['school_semis_new'])));
			$this->set('merged_schools_array',$merged_schools_array);
		}
		
		$this->set('allschoolsforms',$allschoolsforms);
		// $schoolteachers = $this->SemisHsTeacher201314->find('all',array('conditions'=>array('school_id'=>$sc_id)));
		$schoolteachers = $this->SemisTeacher201415->find('all',array('conditions'=>array('school_id'=>$sc_id)));
		$x = 0;
		foreach($schoolteachers as $schoolteacher)
		{
			$schoolteachers[$x]['SemisHsTeacher201314'] = $schoolteacher['SemisTeacher201415'];
			$x++;
		}
		$this->set('schoolteachers',$schoolteachers);
		// $schoolsenrollment = $this->SemisHsEnrollment201314->find('all',array('conditions'=>array('school_id'=>$sc_id)));
		$schoolsenrollment = $this->SemisEnrollment201415->find('all',array('conditions'=>array('school_id'=>$sc_id)));
		$x=0;
		foreach($schoolsenrollment as $enrollment)
		{
			$schoolsenrollment[$x]['SemisHsEnrollment201314'] = $enrollment['SemisEnrollment201415'];
			$x++;
		}
		$this->set('schoolsenrollment',$schoolsenrollment);
	}
	
	function ssb_ddo_budget_distribution($start = null, $end = null, $download = null)
	{
		if($download != null)
		{
				$this->RequestHandler->setContent('xls', 'application/vnd.ms-excel'); 
					$this->layout = "xls";
				if(isset($this->params["url"]["start_day"]))
				{
					$startDate = $this->params["url"]["start_year"]."-". $this->params["url"]["start_month"]."-". $this->params["url"]["start_day"]." 00:00:00";
					$endDate = $this->params["url"]["end_year"]."-". $this->params["url"]["end_month"]."-". $this->params["url"]["end_day"]." 59:59:59";			
					
					$this->Set("startDate",$this->params["url"]["start_day"]);
					$this->Set("startYear",$this->params["url"]["start_year"]);
					$this->Set("startMonth",$this->params["url"]["start_month"]);
					
					$this->Set("endDate",$this->params["url"]["end_day"]);
					$this->Set("endYear",$this->params["url"]["end_year"]);
					$this->Set("endMonth",$this->params["url"]["end_month"]);
				}
				else
				{
					$startDate = date("Y-m")."-1 00:00:00";
					$endDate = date("Y-m")."-31 24:60:60";
					
					$this->Set("startDate","1");
					$this->Set("startYear",date("Y"));
					$this->Set("startMonth",date("m"));
					
					$this->Set("endDate","31");
					$this->Set("endYear",date("Y"));
					$this->Set("endMonth",date("m"));
				}
				$this->set("filename","SSB_School_Budget_PIFRA	");	
		}
		
		$ddoBudgetPifra = $this->DdoBudgetPfra->find('all',array('conditions'=>array('id > '=>$start, 'id < '=>$end)));
		$budget_heads = $this->BudgetHead->find('all');
		$ddos = $this->DdoInfo->find('all');
		
		$this->set('ddoBudgetPifras',$ddoBudgetPifra);
		$this->set('budget_heads',$budget_heads);
		$this->set('ddos',$ddos);
		
	}
	
	
	
	function energy_de()
	{
		$districts = $this->SemisCodeDistrict->find('all');
		$this->set('districts',$districts);	
		$tehsils = $this->CodesForDistrictAndTehsil->find('all');
		$this->set('tehsils',$tehsils);	
		$union_councils = $this->CodesForUc->find('all');
		$this->set('union_councils',$union_councils);
		
		$energyMis = $this->energyMis->find('all');
		
		$this->set('energyMis',$energyMis);
	}
	
	function add_edit_energyproject()
	{
			// Get All District
			$districts = $this->SemisCodeDistrict->find('all');
			$this->set('districts',$districts);
			$this->set('view','view');
	}
	
	function add_supervisor()
	{
		$usadmin = $this->Auth->user('superuser');
		
		if($usadmin == 1 || $usadmin == 2 || $usadmin == 4)
		{
			$banks = $this->codesForBank->find('all');
			$this->set('banks',$banks);						
			
			$districts = $this->SemisCodeDistrict->find('all');
			$this->set('districts',$districts);	
			
			$tehsils = $this->CodesForDistrictAndTehsil->find('all');
			$this->set('tehsils',$tehsils);	
			
			$union_councils = $this->CodesForUc->find('all');
			$this->set('union_councils',$union_councils);	
		}else
		{
			$this->redirect('../home/index');
		}
	}
	
	function supervisor_details($id = null)
	{
		$usadmin = $this->Auth->user('superuser');
		
		if($usadmin == 1 || $usadmin == 2 || $usadmin == 4)
		{
			
		}else
		{
			$this->redirect('../home/index');
		}
	}
	
	function inconsistency($type = null)
	{
		
		$uname = $this->Auth->user('username');
		
		if($type == "dup_cnic")
		{
			//Duplicate CNIC
			$superuser = $this->Auth->user('superuser');
			if($superuser == 1)
			{
				$dsid = 1;
			}else
			{
				$dsid = $this->Auth->user('district');
			}
			
			
			// if($uname == 'admin') 
			// { 
				// $duplicate_cnics = $this->SemisUniversal201415->query('select semis_teacher201415s.id, semis_teacher201415s.tdi_teacher_cnic, count(*) as NumDuplicates from semis_teacher201415s LEFT JOIN semis_universal201415s on semis_teacher201415s.school_id = semis_universal201415s.id group by tdi_teacher_cnic having count(*) > 1');
			// }else
			// {
				$duplicate_cnics = $this->SemisUniversal201415->query('select semis_teacher201415s.id, 
					semis_teacher201415s.tdi_teacher_cnic, 
					count(*) as NumDuplicates 
					from semis_teacher201415s 
					LEFT JOIN 
					semis_universal201415s 
					on semis_teacher201415s.school_id = semis_universal201415s.id 
					where 
					semis_universal201415s.bi_school_district = '.$dsid.' 
					group by tdi_teacher_cnic 
					having count(*) > 1');
			// }
			// $this->set('duplicate_cnics',$duplicate_cnics);
			
			$teacher_records = array();
			$x = 0;
			foreach($duplicate_cnics as $duplicate_cnic)
			{
				$this_teachers = $this->SemisTeacher201415->find('all',array('conditions'=>array('tdi_teacher_cnic' => $duplicate_cnic['semis_teacher201415s']['tdi_teacher_cnic'])));
				foreach($this_teachers as $this_teacher) 
				{
					$this_school = $this->SemisUniversal201415->find('first',array('conditions'=>array('id' => $this_teacher['SemisTeacher201415']['school_id'])));
						
					if($this_school['SemisUniversal201415']['bi_school_district'] == $dsid)
					{
						$teacher_records[$x]['SemisTeacher201415'] = $this_teacher['SemisTeacher201415'];
						$teacher_records[$x]['SemisUniversal201415'] = $this_school['SemisUniversal201415'];
						$x++;
					}
					
				}
				
				
				$teacher_records[$x]['duplicates'] = $duplicate_cnic[0]['NumDuplicates'];
				
			}
			$this->set('duplicate_records',$teacher_records);
		}
		
		if($type == "dup_per_number")
		{
			//Duplicate Personnel Number
			$superuser = $this->Auth->user('superuser');
			if($superuser == 1)
			{
				$dsid = 1;
			}else
			{
				$dsid = $this->Auth->user('district');
			}
			
			
			// if($uname == 'admin') 
			// { 
				// $duplicate_cnics = $this->SemisUniversal201415->query('select semis_teacher201415s.id, semis_teacher201415s.tdi_teacher_cnic, count(*) as NumDuplicates from semis_teacher201415s LEFT JOIN semis_universal201415s on semis_teacher201415s.school_id = semis_universal201415s.id group by tdi_teacher_cnic having count(*) > 1');
			// }else
			// {
				$duplicate_cnics = $this->SemisUniversal201415->query('select semis_teacher201415s.id, semis_teacher201415s.tdi_teacher_personnel_number, count(*) as NumDuplicates from semis_teacher201415s LEFT JOIN semis_universal201415s on semis_teacher201415s.school_id = semis_universal201415s.id where semis_universal201415s.bi_school_district = '.$dsid.' group by semis_teacher201415s.tdi_teacher_personnel_number having count(*) > 1');
			// }
			// $this->set('duplicate_cnics',$duplicate_cnics);
					
			$teacher_records = array();
			$x = 0;
			foreach($duplicate_cnics as $duplicate_cnic)
			{
				$this_teachers = $this->SemisTeacher201415->find('all',array('conditions'=>array('tdi_teacher_personnel_number' => $duplicate_cnic['semis_teacher201415s']['tdi_teacher_personnel_number'])));
				foreach($this_teachers as $this_teacher) 
				{
					$this_school = $this->SemisUniversal201415->find('first',array('conditions'=>array('id' => $this_teacher['SemisTeacher201415']['school_id'])));
					
					if($this_school['SemisUniversal201415']['bi_school_district'] == $dsid)
					{
						$teacher_records[$x]['SemisTeacher201415'] = $this_teacher['SemisTeacher201415'];
						$teacher_records[$x]['SemisUniversal201415'] = $this_school['SemisUniversal201415'];
						$x++;
					}
				}
				
				
				$teacher_records[$x]['duplicates'] = $duplicate_cnic[0]['NumDuplicates'];
				
			}
			$this->set('duplicate_records',$teacher_records);
		}
		
		if($type == "enrollment")
		{
			$superuser = $this->Auth->user('superuser');
			if($superuser == 1)
			{
				$dsid = 1;
			}else
			{
				$dsid = $this->Auth->user('district');
			}
			
			$this_schools = $this->SemisUniversal201415->query('select * from semis_universal201415s as SemisUniversal201415 where bi_school_district = '.$dsid.' && dsi_status = 1');
			
			$semis_array = array();
			$x = 0;
			foreach($this_schools as $this_school)
			{
					$semis_array[$x] = $this_school['SemisUniversal201415']['id'];
					$x++;
			}
			echo $x.'<br>';
			$allschoolsforms_fin = $this->SemisEnrollment201415->query("select * from semis_enrollment201415s as SemisEnrollment201415 where !((stuenr_ele_total_b+stuenr_ele_total_g) > 0 && (stuenr_sec_b_total+stuenr_sec_f_total) > 0 && (stuenr_hsec_m_total+stuenr_hsec_f_total) > 0) && school_id IN ('".implode($semis_array, "', '")."')");
			echo count($allschoolsforms_fin);	
			
		}
		$this->set('type',$type);	
		$this->set('title', 'Inconsistency - Reform Support Unit');
		$districts = $this->SemisCodeDistrict->find('all');
		$this->set('districts',$districts);	
		$tehsils = $this->CodesForDistrictAndTehsil->find('all');
		$this->set('tehsils',$tehsils);	
		$union_councils = $this->CodesForUc->find('all');
		$this->set('union_councils',$union_councils);
		
	}
	
	function inconsistency_check($type = null, $district = null, $tehsil = null, $uc = null, $semis_id = null, $teacher_id)
	{
		if($type == "delete_teacher")
		{
			$superuser = $this->Auth->user('superuser');
			if($superuser == 1 || $superuser == 4)
			{
				// $this_teachers = $this->SemisTeacher201415->find('first',array('conditions'=>array('id' => $teacher_id)));
				$this->SemisTeacher201415->id = $teacher_id;
				$this->SemisTeacher201415->delete();	
			
			}else
			{
				// $this->redirect('../home/index');
			}
			// $this->redirect('../home/index');
		}
		// $this->redirect('../home/index');
	}
	
	function reports_201415($type = null, $district = null, $taluka = null, $uc = null)
	{
		$districts = $this->SemisCodeDistrict->find('all');
		$this->set('districts',$districts);	
		$tehsils = $this->CodesForDistrictAndTehsil->find('all');
		$this->set('tehsils',$tehsils);	
		$union_councils = $this->CodesForUc->find('all');
		$this->set('union_councils',$union_councils);
		$this->set('type',$type);
		$this->set('district',$district);
		$this->set('taluka',$taluka);
		$this->set('uc',$uc);
	
		//Query for Enrollment 
		if($type == 'enrollment')
		{
			echo "inside enrollment";
			if(!($uc == null || $uc == 0))
			{
				echo "inside uc";
				if(!($taluka == null || $taluka == 0))
				{
					// Taluka Wise report
					
					if(!($district == null || $district == 0))
					{
						echo "inside Taluka";
						//District wise report
						$this->SemisUniversal201415->bindModel(
							array('hasOne' => array(
							'SemisEnrollment201415' => array(
								'className'  => '',
								'conditions'  => 'SemisEnrollment201415.school_id = SemisUniversal201415.id',
								'foreignKey' => ''
							),
							'semisCodesDistrictTehsil' => array(
								'className'  => '',
								'conditions'  => "semisCodesDistrictTehsil.tehsil_id = SemisUniversal201415.bi_school_taluka",
								'foreignKey' => ''
							),
							'SemisCodeUc' => array(
								'className'  => '',
								'conditions'  => "SemisCodeUc.uc_id = SemisUniversal201415.bi_school_uc",
								'foreignKey' => ''
							),
						)));

						$conditions = array();
						// $conditions['SemisUniversal201415.bi_school_uc'] = $uc;
						// $conditions['SemisUniversal201415.bi_school_taluka'] = $taluka;
						$conditions['SemisUniversal201415.bi_school_district'] = $district;
						
						
						$fields[] = 'sum(SemisEnrollment201415.stuenr_ele_total_b) as total_elementary_boys';
						$fields[] = 'sum(SemisEnrollment201415.stuenr_ele_total_g) as total_elementary_girls';
						$fields[] = 'sum(SemisEnrollment201415.stuenr_sec_b_total) as total_secondary_boys';
						$fields[] = 'sum(SemisEnrollment201415.stuenr_sec_f_total) as total_secondary_girls';
						$fields[] = 'sum(SemisEnrollment201415.stuenr_hsec_m_total) as total_h_secondary_boys';
						$fields[] = 'sum(SemisEnrollment201415.stuenr_hsec_f_total) as total_h_secondary_girls';
						$fields[] = 'semisCodesDistrictTehsil.district';
						$fields[] = 'semisCodesDistrictTehsil.tehsil';
						$fields[] = 'SemisCodeUc.uc_name';
					
						$group[] = "SemisUniversal201415.bi_school_district";
						
						$school_enrollment = $this->SemisUniversal201415->find('all', array ('conditions'=>$conditions, 'group'=>$group, 'fields'=>$fields));
						
						debug($school_enrollment);
						
					}else
					{
						//Taluka Wise Report
					}							
				}else
				{
					//UC Wise Report
				}
			}else
			{
				//Nothing to be done
			}
		}
		
		//Query for Number of Schools
		if($type == 'stats')
		{
			if($uc == null || $uc == 0)
			{
				if($district == null || $district == 0)
				{
					if($district == null || $district == 0)
					{
						//nothing to be done
					}else
					{
						//District wise report
						
					}							
				}else
				{
					// Taluka Wise report
					
				}
			}else
			{
				//UC Wise report
				
			}
		}
		//Missing facilities
		if($type == 'misfac')
		{
			if($uc == null || $uc == 0)
			{
				if($district == null || $district == 0)
				{
					if($district == null || $district == 0)
					{
						//nothing to be done
					}else
					{
						//District wise report
						
					}							
				}else
				{
					// Taluka Wise report
					
				}
			}else
			{
				//UC Wise report
				
			}
		}
	}	
}