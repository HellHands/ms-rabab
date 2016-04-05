<?php //error_reporting(0);
App::uses('AppController', 'Controller');
App::import('Controller', 'Home'); 	//import HomeController so that its public methods can be used.
/**
 * Asc201516s Controller
 *
 * @property Asc201516 $Asc201516
 * @property AclComponent $Acl
 * @property RequestHandlerComponent $RequestHandler
 */
class Asc201516sController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $utehsil;				//User Tehsil
	public $udistrict;				//User District

	public $tehsil1;				//Tehsil #1 Allotted to User
	public $tehsil2;				//Tehsil #2 Allotted to User
	

	public $components = array('Acl', 'RequestHandler');
	public $uses = array(
		'codes_for_banks',
		'codes_for_teachers_qualifications',
		'codes_for_district', 
		'codes_for_districts', 
		'codes_for_district_and_tehsils', 
		'codes_for_dp_designations',
		'codes_for_ucs',
		'codes_for_tappas',
		'codes_for_dehs',
		'codes_for_school_statuses',
		'codes_for_school_building_owners1',
		'univ14',
		'univ2014',
		'asc201516s_teachers',
		'asc201516s_enrollments',
		'asc201516s_consolidations',
		'semis_universal201415s',
		'semis_consolidation_univ201415s',
		'Asc201516'
		
		);

/**
 * beforeFilter callback
 *
 * @return void
 */
	public function beforeFilter() 
	{
		parent::beforeFilter();
		//check if session exists!
		if(!($this->Session->read('Auth.User'))){
			$this->redirect('../users/login');

		}

		$usadmin = $this->Session->read('Auth.User.superuser');
		

		//check if user has privilege if the session exists!
		if($usadmin == 7)
		{			
			//get current username and userid
			$uname   = $this->Session->read('Auth.User.username');
			$uid     = $this->Session->read('Auth.User.id');
			$this->utehsil = $this->Session->read('Auth.User.tehsil');
			$this->udistrict = $this->Session->read('Auth.User.district');
			
			$this->set('superadmin', $usadmin);
			$this->set('uid', $uid);
			$this->set('username', $uname);	
			$this->set('utehsil', $this->utehsil);
			$this->set('udistrict', $this->udistrict);			

		}

		if($usadmin == 8){

			//get current username and userid
			$uname           = $this->Session->read('Auth.User.username');
			$uid             = $this->Session->read('Auth.User.id');
			$this->utehsil   = $this->Session->read('Auth.User.tehsil');
			$this->udistrict = $this->Session->read('Auth.User.district');
			$this->tehsil1   = $this->Session->read('Auth.User.tehsil1');
			$this->tehsil2   = $this->Session->read('Auth.User.tehsil2');

			
			$this->set('superadmin', $usadmin);
			$this->set('uid', $uid);
			$this->set('username', $uname);	
			$this->set('utehsil', $this->utehsil);
			$this->set('udistrict', $this->udistrict);
			$this->set('tehsil1', $this->tehsil1);
			$this->set('tehsil2', $this->tehsil2);				

		}

		if($usadmin == 9){

			//get current username and userid
			$uname           = $this->Session->read('Auth.User.username');
			$uid             = $this->Session->read('Auth.User.id');
			$this->utehsil   = $this->Session->read('Auth.User.tehsil');
			$this->udistrict = $this->Session->read('Auth.User.district');
			$this->tehsil1   = $this->Session->read('Auth.User.tehsil1');
			$this->tehsil2   = $this->Session->read('Auth.User.tehsil2');

			
			$this->set('superadmin', $usadmin);
			$this->set('uid', $uid);
			$this->set('username', $uname);	
			$this->set('utehsil', $this->utehsil);
			$this->set('udistrict', $this->udistrict);
			$this->set('tehsil1', $this->tehsil1);
			$this->set('tehsil2', $this->tehsil2);				

		}

		if($usadmin == 10){

			$uname   = $this->Session->read('Auth.User.username');
			$uid     = $this->Session->read('Auth.User.id');
			$this->utehsil = $this->Session->read('Auth.User.tehsil');
			$this->udistrict = $this->Session->read('Auth.User.district');
			
			$this->set('superadmin', $usadmin);
			$this->set('uid', $uid);
			$this->set('username', $uname);	
			$this->set('utehsil', $this->utehsil);
			$this->set('udistrict', $this->udistrict);	

		}

		if($usadmin != 7 && $usadmin != 8 && $usadmin != 9 && $usadmin != 10){
			$this->redirect(array(
				'controller' => 'users',
				'action' => 'logout'));//'../../users/logout');			
		}		

		$this->layout = "asclayout";
		$this->set('title', 'ASC 2015-16 - RSU');
	}
	

/**
 * index method
 *
 * @return void
 */
	public function index() 
	{
		$usadmin = $this->Session->read('Auth.User.superuser');	
		if($usadmin == 8){
			return $this->redirect(array(
				'controller' => 'asc201516s',
				'action' => 'index_dev'
				)
			);
		}

		if($usadmin == 9){
			return $this->redirect(array(
				'controller' => 'asc201516s',
				'action' => 'index_des'
				)
			);
		}

		if($usadmin == 10){
			return $this->redirect(array(
				'controller' => 'asc201516s',
				'action' => 'index_hs'
				)
			);
		}

		//$this->Asc201516->recursive = 0;	
		
		$semis_universal201415s = $this->semis_universal201415s->find('all', array(
			'conditions' => array(
				'semis_universal201415s.bi_school_taluka' => $this->utehsil,
				'semis_universal201415s.dsi_level <=' => '4'
				)			
			)
		);
		$tehsil_name = $this->codes_for_district_and_tehsils->find('first', array(
			'conditions' => array(
				'codes_for_district_and_tehsils.tehsil_id' => $this->utehsil
				),
			'fields' => array('tehsil')
			)
		);
		$district_name = $this->codes_for_districts->find('first', array(
			'conditions' => array(
				'codes_for_districts.DistrictID' => $this->udistrict
				),
			'fields' => array('district')
			)
		);
		
		$schools_filled_count = $this->Asc201516->find('count', array(
			'conditions' => array(
				'Asc201516.form_status' => 1,
				'Asc201516.final <=' => 1,
				'Asc201516.bi_school_taluka' => $this->utehsil
				)			
			)
		);
		$form_statuses = $this->Asc201516->find('list', array(
			'recursive' => -1,
			'conditions' => array(

				'Asc201516.form_status' => 1,
				'Asc201516.bi_school_taluka' => $this->utehsil
				),
			'fields' => array(
				'school_semis_code'
				)
			)
		);

		//FETCH ONLY SCHOOLS WITH LEVEL <= 4
		$schools_not_filled = $this->semis_universal201415s->query("SELECT s1.school_semis_new, s1.bi_school_taluka, s1.bi_school_name, s1.bi_school_address FROM semis_universal201415s AS s1 LEFT JOIN asc201516s AS s2 ON(s1.school_semis_new = s2.school_semis_code) 
        WHERE (s2.form_status IS NULL || s2.form_status=0) && s1.bi_school_taluka=$this->utehsil && s1.dsi_level <= 4");

		$schools_filled_n_notfinalized = $this->Asc201516->find('all', array(
			'recursive' => -1,
			'conditions' => array(				
				'form_status' => '1',
				'final' => '0',
				'bi_school_taluka' => $this->utehsil,
				'dsi_level <=' => '4'
				),
			'fields' => array(
				'school_semis_code',
				'bi_school_taluka',
				'bi_school_name',
				'bi_school_address'
				)
			)
		);

		$schools_filled_n_finalized = $this->Asc201516->find('all', array(
			'recursive' => -1,
			'conditions' => array(				
				'form_status' => '1',
				'final' => array('1', '2', '3'),
				'bi_school_taluka' => $this->utehsil,
				'dsi_level <=' => '4'
				),
			'fields' => array(
				'school_semis_code',
				'bi_school_taluka',
				'bi_school_name',
				'bi_school_address',
				'final'
				)
			)
		);

		//debug($semis_universal201415s);

		//$this->paginator = array('limit' => '10');
		//$this->semis_universal201415s->find('all');
		$this->set('schools_filled_n_notfinalized', $schools_filled_n_notfinalized);
		$this->set('schools_filled_n_finalized', $schools_filled_n_finalized);
		$this->set('forms_statuses', $form_statuses);
		$this->set('schools_not_filled', $schools_not_filled);
		$this->set('schools_filled_count', $schools_filled_count);
		$this->set('district_name', $district_name);
		$this->set('tehsil_name', $tehsil_name);
		$this->set('semis_universal201415s', $semis_universal201415s);
		$this->set('semisuniversal201415s', $this->paginate());

		//$this->set('asc201516s', $this->paginate());
	}

	public function index_dev() 
	{
		//$this->Asc201516->recursive = 0;		
		$usadmin = $this->Session->read('Auth.User.superuser');			

		if($usadmin != 8){
			return $this->redirect(array(
				'controller' => 'asc201516s',
				'action' => 'index'
				)
			);
		}
		$tehsil_name = $this->codes_for_district_and_tehsils->find('first', array(
			'conditions' => array(
				'codes_for_district_and_tehsils.tehsil_id' => $this->utehsil
				),
			'fields' => array('tehsil')
			)
		);
		
		$district_name = $this->codes_for_districts->find('first', array(
			'conditions' => array(
				'codes_for_districts.DistrictID' => $this->udistrict
				),
			'fields' => array('district')
			)
		);
		

		$schools_finalized = $this->Asc201516->find('all', array(
			'recursive' => -1,
			'conditions' => array(								
				'final' => '1',
				'bi_school_taluka' => array($this->tehsil1, $this->tehsil2),
				'dsi_level <=' => '4'
				),
			'fields' => array(
				'school_semis_code',
				'bi_school_taluka',
				'bi_school_name',
				'bi_school_address',
				'username'
				)
			)
		);

		$schools_finalized_by_dev = $this->Asc201516->find('all', array(
			'recursive' => -1,
			'conditions' => array(
				'Asc201516.final' => '2',
				'bi_school_taluka' => array($this->tehsil1, $this->tehsil2),
				'dsi_level <=' => '4'
				),
			'fields' => array(
				'school_semis_code',
				'bi_school_taluka',
				'bi_school_name',
				'bi_school_address',
				'username'
				)
			)
		);

		$tehsil1_name = $this->codes_for_district_and_tehsils->find('all', array(
			'conditions' => array(
				'codes_for_district_and_tehsils.tehsil_id' => array($this->tehsil1, $this->tehsil2)
				),
			'fields' => array(
				'tehsil',
				'tehsil_id'
				)
			)
		);		

		$tehsil2_name = $this->codes_for_district_and_tehsils->find('first', array(
			'conditions' => array(
				'codes_for_district_and_tehsils.tehsil_id' => $this->tehsil2
				),
			'fields' => array(
				'tehsil',
				'tehsil_id'
				)
			)
		);



		//$this->paginator = array('limit' => '10');
		//$this->semis_universal201415s->find('all');
		
		$this->set('schools_finalized', $schools_finalized);
		$this->set('schools_finalized_by_dev', $schools_finalized_by_dev);
		$this->set('district_name', $district_name);
		$this->set('tehsil_name', $tehsil_name);	
		$this->set('tehsil1_name', $tehsil1_name);
		$this->set('tehsil1', $this->tehsil1);
		$this->set('tehsil2_name', $tehsil2_name);	
		$this->set('tehsil2', $this->tehsil2);
		//$this->set('semis_universal201415s', $semis_universal201415s);
		//$this->set('semisuniversal201415s', $this->paginate());

		//$this->set('asc201516s', $this->paginate());
	}

	public function index_des() 
	{
		//$this->Asc201516->recursive = 0;		
		$usadmin = $this->Session->read('Auth.User.superuser');			

		if($usadmin != 9){
			return $this->redirect(array(
				'controller' => 'asc201516s',
				'action' => 'index'
				)
			);
		}
		$tehsil_name = $this->codes_for_district_and_tehsils->find('first', array(
			'conditions' => array(
				'codes_for_district_and_tehsils.tehsil_id' => $this->utehsil
				),
			'fields' => array('tehsil')
			)
		);
		
		$district_name = $this->codes_for_districts->find('first', array(
			'conditions' => array(
				'codes_for_districts.DistrictID' => $this->udistrict
				),
			'fields' => array('district')
			)
		);
		

		$schools_finalized_by_dev = $this->Asc201516->find('all', array(
			'recursive' => -1,
			'conditions' => array(								
				'final' => '2',
				'bi_school_district' => $this->udistrict
				),
			'fields' => array(
				'school_semis_code',
				'bi_school_taluka',
				'bi_school_name',
				'bi_school_address',
				'username'
				)
			)
		);

		$schools_finalized_by_des = $this->Asc201516->find('all', array(
			'recursive' => -1,
			'conditions' => array(
				'Asc201516.final' => '3',
				'Asc201516.bi_school_district' => $this->udistrict
				),
			'fields' => array(
				'school_semis_code',
				'bi_school_taluka',
				'bi_school_name',
				'bi_school_address',
				'username'
				)
			)
		);

		$tehsil_names = $this->codes_for_district_and_tehsils->find('all', array(
			'conditions' => array(
				'codes_for_district_and_tehsils.district_id' => $this->udistrict
				),
			'fields' => array(
				'tehsil',
				'tehsil_id'
				)
			)
		);				
		
		$this->set('schools_finalized_by_dev', $schools_finalized_by_dev);
		$this->set('schools_finalized_by_des', $schools_finalized_by_des);
		$this->set('district_name', $district_name);
		$this->set('district', $this->udistrict);
		$this->set('tehsil_name', $tehsil_name);			
		$this->set('tehsil_names', $tehsil_names);			
		//$this->set('semis_universal201415s', $semis_universal201415s);
		//$this->set('semisuniversal201415s', $this->paginate());

		//$this->set('asc201516s', $this->paginate());
	}

	public function index_hs() 
	{
		$usadmin = $this->Session->read('Auth.User.superuser');			
		$hsname = $this->Session->read('Auth.User.username');

		if($usadmin != 10){
			return $this->redirect(array(
				'controller' => 'asc201516s',
				'action' => 'index'
				)
			);
		}

		$hsSemisCode = $this->Session->read('Auth.User.username');				

		//$this->Asc201516->recursive = 0;	
		
		$semis_universal201415s = $this->semis_universal201415s->find('first', array(
			'conditions' => array(
				'semis_universal201415s.bi_school_taluka' => $this->utehsil,
				'semis_universal201415s.dsi_level >=' => '4',
				'semis_universal201415s.school_semis_new' => $hsSemisCode
				)			
			)
		);
		$tehsil_name = $this->codes_for_district_and_tehsils->find('first', array(
			'conditions' => array(
				'codes_for_district_and_tehsils.tehsil_id' => $this->utehsil
				),
			'fields' => array('tehsil')
			)
		);
		$district_name = $this->codes_for_districts->find('first', array(
			'conditions' => array(
				'codes_for_districts.DistrictID' => $this->udistrict
				),
			'fields' => array('district')
			)
		);
		
		$schools_filled_count = $this->Asc201516->find('count', array(
			'conditions' => array(
				'Asc201516.form_status' => 1,
				'Asc201516.bi_school_taluka' => $this->utehsil,
				'Asc201516.school_semis_code' => $hsSemisCode
				)			
			)
		);
		$form_statuses = $this->Asc201516->find('list', array(
			'recursive' => -1,
			'conditions' => array(

				'Asc201516.form_status' => 1,
				'Asc201516.bi_school_taluka' => $this->utehsil,
				'Asc201516.school_semis_code' => $hsSemisCode
				),
			'fields' => array(
				'school_semis_code'
				)
			)
		);

		//FETCH ONLY SCHOOLS WITH LEVEL > 4
		$schools_not_filled = $this->semis_universal201415s->query("SELECT s1.school_semis_new, s1.bi_school_taluka, s1.bi_school_name, s1.bi_school_address FROM semis_universal201415s AS s1 LEFT JOIN asc201516s AS s2 ON(s1.school_semis_new = s2.school_semis_code) 
        WHERE (s2.form_status IS NULL || s2.form_status=0) && s1.bi_school_taluka=$this->utehsil && s1.dsi_level >= 4 && s1.school_semis_new = $hsSemisCode");

        //debug($schools_not_filled); exit();

		$schools_filled_n_notfinalized = $this->Asc201516->find('all', array(
			'recursive' => -1,
			'conditions' => array(				
				'form_status'       => '1',
				'final'             => '0',
				'bi_school_taluka'  => $this->utehsil,
				'dsi_level >='      => '4',
				'school_semis_code' => $hsSemisCode
				),
			'fields' => array(
				'school_semis_code',
				'bi_school_taluka',
				'bi_school_name',
				'bi_school_address'
				)
			)
		);

		//debug($schools_filled_n_notfinalized); exit();

		$schools_filled_n_finalized = $this->Asc201516->find('all', array(
			'recursive' => -1,
			'conditions' => array(				
				'form_status' => '1',
				'final' => array('1', '2', '3'),
				'school_semis_code' => $hsname,
				'dsi_level >=' => '4'
				//'Asc201516.school_semis_code' => $hsSemisCode
				),
			'fields' => array(
				'school_semis_code',
				'bi_school_taluka',
				'bi_school_name',
				'bi_school_address',
				'final'
				)
			)
		);

		$schools_filled_n_notfinalized_hs = $this->Asc201516->find('all', array(
			'recursive' => -1,
			'conditions' => array(				
				'form_status' => '1',
				'final' => '0',
				'school_semis_code' => $hsname,
				'dsi_level >=' => '4'
				),
			'fields' => array(
				'school_semis_code',
				'bi_school_taluka',
				'bi_school_name',
				'bi_school_address'
				)
			)
		);

		//debug($semis_universal201415s);

		//$this->paginator = array('limit' => '10');
		//$this->semis_universal201415s->find('all');
		$this->set('schools_filled_n_notfinalized_hs', $schools_filled_n_notfinalized_hs);
		$this->set('schools_filled_n_notfinalized', $schools_filled_n_notfinalized);
		$this->set('schools_filled_n_finalized', $schools_filled_n_finalized);
		$this->set('forms_statuses', $form_statuses);
		$this->set('schools_not_filled', $schools_not_filled);
		$this->set('schools_filled_count', $schools_filled_count);
		$this->set('district_name', $district_name);
		$this->set('tehsil_name', $tehsil_name);
		$this->set('semis_universal201415s', $semis_universal201415s);
		$this->set('semisuniversal201415s', $this->paginate());

		//$this->set('asc201516s', $this->paginate());
	}

	public function print_hs_form($id = NULL)
	{
		if(!empty($id)){
			
			$this->layout = "asclayout_edit";
			
			$home = new HomeController();
			
			$conditions = $home->get_conditions();
			$this->set('conditions', $conditions);
			$levels = $home->get_levels();
			$this->set('levels', $levels);
			$genders = $home->get_genders();
			$this->set('genders', $genders);
			$prefixes = $home->get_school_prefixes();
			$this->set('prefixes', $prefixes);
			$major_reasons = $home->get_school_closure_major_reasons();
			$this->set('reasons', $major_reasons);
			$dp_designations = $home->get_dp_designations();
			$this->set('dpdesignations', $dp_designations);		
			$school_building_owners = $this->get_codes_for_school_building_owners();
			$this->set('schoolbuildingowners', $school_building_owners);
			$smc_bank_name = $this->get_bank_names();
			$this->set('smcbanknames', $smc_bank_name);
			$professionalquals = $this->get_professional_qualifications();
			$this->seT('professionalquals', $professionalquals);

			$school = $this->semis_universal201415s->find('first', array(
				'conditions' => array(
					'semis_universal201415s.school_semis_new' => $id					
					)
				)
			);
			if(!$school){
				$message = '<strong>'.$id.'</strong> School is not in your <strong>Tehsil</strong>.';
				$this->Session->setFlash($message);
				$this->redirect(array(
					'controller' => 'asc201516s',
					'action' => 'index'
					));				
			}

			$school2 = $this->Asc201516->find('first', array(
				'conditions' => array(
					'Asc201516.school_semis_code' => $id					
					)				
				)
			);

			if(!$school2 || !$school){
				$this->Session->setFlash('Not found, please fill the ASC Form first.');
				$this->redirect(array(
					'controller' => 'asc201516s',
					'action' => 'index'));				
			}

			$school_id = $school2['Asc201516']['id'];
			$school2_enrollments = $this->asc201516s_enrollments->find('first', array(
				'conditions' => array(
					'school_semis_code' => $id					
					)				
				)
			);

			$this->set('school2_enr', $school2_enrollments);	

			$school2_teachers = $this->asc201516s_teachers->find('all', array(
				'conditions' => array(
					'asc201516s_teachers.school_semis_code' => $id,
					'asc201516s_teachers.school_id'	=> $school_id				
					)
				)
			);
			
			$this->set('school2_t', $school2_teachers);
			//$this->set('')		
			
			//debug($school);


			if($school){
				
				$districtid    = $school['semis_universal201415s']['bi_school_district'];	
				$tehsilid      = $school['semis_universal201415s']['bi_school_taluka'];
				$ucid          = $school['semis_universal201415s']['bi_school_uc'];	
				$tappaid       = $school['semis_universal201415s']['bi_school_tappa'];
				$dehid         = $school['semis_universal201415s']['bi_school_deh'];		
				$designationid = $school['semis_universal201415s']['hti_designation'];
				$campusSchool  = $school['semis_universal201415s']['campus_school'];
				$schoolid      = $school_id;

				$district = $this->codes_for_district->find('first', array(
					'conditions' => array(
						'codes_for_district.districtid' => $districtid
						),
					'fields' => array('district')
					)
				);

				$taluka = $this->codes_for_district_and_tehsils->find('first', array(
					'conditions' => array(
						'codes_for_district_and_tehsils.tehsil_id' => $this->utehsil
						),
					'fields' => array('tehsil_id', 'tehsil')
					)
				);

				$uc = $this->codes_for_ucs->find('first', array(
					'conditions' => array(
						'codes_for_ucs.uc_id' => $ucid,
						//'codes_for_ucs.district_id' => $districtid,
						//'codes_for_ucs.tehsil_id' => $tehsilid
						),
					'fields' => array('uc_id', 'uc_name')
					)
				);
				//if(!($uc)){ echo 'no record found'; exit();}
				
				$tappa = $this->codes_for_tappas->find('first', array(
					'conditions' => array(
						'codes_for_tappas.tappaid' => $tappaid
						),
					'fields' => array('tappaid', 'tappa')
					)
				);

				$deh = $this->codes_for_dehs->find('first', array(
					'conditions' => array(
						'codes_for_dehs.dehid' => $dehid
						),
					'fields' => array('dehid', 'deh')
					)				
				);	

				$designation = $this->codes_for_dp_designations->find('first', array(
					'conditions' => array(
						'codes_for_dp_designations.DPDesigID' => $designationid,						
						),
					'fields' => array('dpdesigid', 'dpdesignation')
					)
				);		
				
				if($campusSchool == 1){
					$campuses = $this->asc201516s_consolidations->find('all', array(
						'conditions' => array(
							'campus_id' => $id
							)						
						)
					);					

				}
				
				
				$this->set('campuses', @$campuses);		
				$this->set('school', $school);
				$this->set('school2', $school2);
				$this->set('district', $district);
				$this->set('taluka', $taluka);
				$this->set('uc', $uc);
				$this->set('tappa', $tappa);
				$this->set('deh', $deh);
				$this->set('designation', $designation);
				$this->set('schoolid', $schoolid);
			}
		}
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) 
	{
		$this->Asc201516s->id = $id;
		if (!$this->Asc201516s->exists()) {
			throw new NotFoundException(__('Invalid asc201516'));
		}
		$this->set('asc201516', $this->Asc201516->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = NULL, $errors = NULL) 
	{
		$filled = $this->Asc201516->findBySchoolSemisCode($id);

		if(null != $filled){
			$this->redirect(array(
				'controller' => 'asc201516s', 
				'action' => 'edit_asc201516', $id
				)
			);
		}
			

		$district_ids = $this->codes_for_district->find(
			'list', array(
				'fields' => array(
					'DistrictID',
					'District'					
					)
				)
			);
		
		$this->set('districts', $district_ids);
		$home = new HomeController();
		$conditions = $home->get_conditions();
		$this->set('conditions', $conditions);
		$levels = $home->get_levels();
		$this->set('levels', $levels);
		$genders = $home->get_genders();
		$this->set('genders', $genders);
		$prefixes = $home->get_school_prefixes();
		$this->set('prefixes', $prefixes);
		$major_reasons = $home->get_school_closure_major_reasons();
		$this->set('reasons', $major_reasons);
		$dp_designations = $home->get_dp_designations();
		$this->set('dpdesignations', $dp_designations);		
		$school_building_owners = $this->get_codes_for_school_building_owners();
		$this->set('schoolbuildingowners', $school_building_owners);
		$smc_bank_name = $this->get_bank_names();
		$this->set('smcbanknames', $smc_bank_name);
		$professionalquals = $this->get_professional_qualifications();
		$this->seT('professionalquals', $professionalquals);

		$school = $this->semis_universal201415s->find('first', array(
				'conditions' => array(
					'semis_universal201415s.school_semis_new' => $id,
					'semis_universal201415s.bi_school_taluka' => $this->utehsil
					)
				)
			);

		//debug($school);		

		if($school)
		{
			$districtid   = $school['semis_universal201415s']['bi_school_district'];	
			$tehsilid     = $school['semis_universal201415s']['bi_school_taluka'];
			$ucid         = $school['semis_universal201415s']['bi_school_uc'];	
			$tappaid      = $school['semis_universal201415s']['bi_school_tappa'];
			$dehid        = $school['semis_universal201415s']['bi_school_deh'];		
			$campusSchool = $school['semis_universal201415s']['campus_school'];

			$district = $this->codes_for_district->find('first', array(
				'conditions' => array(
					'codes_for_district.districtid' => $districtid
					),
				'fields' => array('district')
				)
			);

			$taluka = $this->codes_for_district_and_tehsils->find('first', array(
				'conditions' => array(
					'codes_for_district_and_tehsils.tehsil_id' => $this->utehsil
					),
				'fields' => array('tehsil_id', 'tehsil')
				)
			);

			$uc = $this->codes_for_ucs->find('first', array(
				'conditions' => array(
					'codes_for_ucs.uc_id' => $ucid,
					//'codes_for_ucs.district_id' => $districtid,
					//'codes_for_ucs.tehsil_id' => $tehsilid
					),
				'fields' => array('uc_id', 'uc_name')
				)
			);
			//if(!($uc)){ echo 'no record found'; exit();}
			
			$tappa = $this->codes_for_tappas->find('first', array(
				'conditions' => array(
					'codes_for_tappas.tappaid' => $tappaid
					),
				'fields' => array('tappaid', 'tappa')
				)
			);

			$deh = $this->codes_for_dehs->find('first', array(
				'conditions' => array(
					'codes_for_dehs.dehid' => $dehid
					),
				'fields' => array('dehid', 'deh')
				)				
			);	

			if($campusSchool == 1){
				$campuses = $this->semis_consolidation_univ201415s->find('all', array(
					'conditions' => array(
						'semis_consolidation_univ201415s.campus_id' => $id
						),
					'fields' => array(
						'campus_id',
						'bi_school_name',
						'school_semis_new'
						)
					)
				);					

			}
			
			
			$this->set('campuses', @$campuses);		
			$this->set('school', $school);
			$this->set('district', $district);
			$this->set('taluka', $taluka);
			$this->set('uc', $uc);
			$this->set('tappa', $tappa);
			$this->set('deh', $deh);	
			$this->set('errors', $errors);		
		}else{
			$this->Session->setFlash('School not found!');
			$this->redirect(array(
				'controller' => 'asc201516s',
				'action' => 'index'
				)
			);
		}
	}

	public function submit_asc201516()
	{
		$this->autoRender = false;
		if ($this->request->is('post')) 
		{
			//print_r(@$this->request->data['teachers_name']);
			//debug(json_encode($this->request->data, JSON_PRETTY_PRINT));
			//debug($this->request->data);
			//exit();
			$this->Asc201516->create();

			if(!empty($this->request->data['Asc201516']))
			{					
				//debug($this->request->data);
				//exit();


				if(@$this->request->data['teachers_name'][0] == ''){
					$t_filled = 0;
				}else{
					$t_filled = count(@$this->request->data['teachers_name']);
				}				

				$semiscode = $this->request->data['Asc201516']['school_semis_code'];

				$name                                                              = $this->request->data['File']['school_img']['name'];				
				$ext                                                               = pathinfo($name, PATHINFO_EXTENSION);
				$name                                                              = $semiscode . '_school_img.'.$ext;
				$this->request->data['File']['school_img']['name']                 = $name;
				
				$name                                                              =  $this->request->data['File']['facility_boundary_wall_img']['name'];				
				$ext                                                               = pathinfo($name, PATHINFO_EXTENSION);
				$name                                                              = $semiscode . '_facility_boundarywall_img.'.$ext;
				$this->request->data['File']['facility_boundary_wall_img']['name'] = $name;
				
				$name                                                              =  $this->request->data['File']['facility_drinkingwater_img']['name'];				
				$ext                                                               = pathinfo($name, PATHINFO_EXTENSION);
				$name                                                              = $semiscode . '_facility_drinkingwater_img.'.$ext;
				$this->request->data['File']['facility_drinkingwater_img']['name'] = $name;
				
				$name                                                              =  $this->request->data['File']['facility_electricity_img']['name'];				
				$ext                                                               = pathinfo($name, PATHINFO_EXTENSION);
				$name                                                              = $semiscode . '_facility_electricity_img.'.$ext;
				$this->request->data['File']['facility_electricity_img']['name']   = $name;
				
				$name                                                              =  $this->request->data['File']['facility_washrooms_img']['name'];				
				$ext                                                               = pathinfo($name, PATHINFO_EXTENSION);
				$name                                                              = $semiscode . '_facility_washrooms_img.'.$ext;
				$this->request->data['File']['facility_washrooms_img']['name']     = $name;				
				
				
				if(null == $this->request->data['Asc201516']['dsi_sch_medium'])
				{								
					$this->request->data['Asc201516']['dsi_sch_medium'] = '';
				}else{
					$this->request->data['Asc201516']['dsi_sch_medium'] = implode(", ", $this->request->data['Asc201516']['dsi_sch_medium']);	
				}			

				$this->Asc201516->set($this->request->data['Asc201516']);
				if ($this->Asc201516->validates()) {
				    //echo 'it validated logic';
				    
				} else {
				    //echo 'didn\'t validate logic';
				    $errors = $this->Asc201516->validationErrors;
				    //debug($errors); 
				    echo $errors['bi_school_na'][0];
				    //exit();
				    $this->Session->setFlash('Validation failed');
				    $this->set('errors', $errors);
				    $semisid =$this->request->data['Asc201516']['school_semis_code'];
				    //$this->render('add');
				    /*$this->redirect(
				    	array(
				    		'controller' => 'asc201516s',
				    		'action' => 'add', $semisid
				    		)
				    	);*/

				}
				
				$school = $this->Asc201516->save($this->request->data['Asc201516']);

				
				if($school)
				{

					$arrayEnr = array();
					$arrayDEnr['asc201516s_enrollments']['school_id']         = $this->Asc201516->id;
					$arrayDEnr['asc201516s_enrollments']['school_semis_code'] = $this->request->data['Asc201516']['school_semis_code'];

					$arrayDEnr['asc201516s_enrollments']['ele_class_ece_boys_enrollment']    = $this->request->data['ele_class_ece_boys_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['ele_class_katchi_boys_enrollment'] = $this->request->data['ele_class_katchi_boys_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['ele_class_one_boys_enrollment']    = $this->request->data['ele_class_one_boys_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['ele_class_two_boys_enrollment']    = $this->request->data['ele_class_two_boys_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['ele_class_three_boys_enrollment']  = $this->request->data['ele_class_three_boys_enrollment'];				   
					$arrayDEnr['asc201516s_enrollments']['ele_class_four_boys_enrollment']   = $this->request->data['ele_class_four_boys_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['ele_class_five_boys_enrollment']   = $this->request->data['ele_class_five_boys_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['ele_class_six_boys_enrollment']    = $this->request->data['ele_class_six_boys_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['ele_class_seven_boys_enrollment']  = $this->request->data['ele_class_seven_boys_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['ele_class_eight_boys_enrollment']  = $this->request->data['ele_class_eight_boys_enrollment'];				    
					//$arrayDEnr['asc201516s_enrollments']['ele_class_nine_boys_enrollment']   = $this->request->data['ele_class_nine_boys_enrollment'];				    
					//$arrayDEnr['asc201516s_enrollments']['ele_class_ten_boys_enrollment']    = $this->request->data['ele_class_ten_boys_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['ele_total_boys_enrollment']        = $this->request->data['ele_total_boys_enrollment'];				    

					$arrayDEnr['asc201516s_enrollments']['ele_class_ece_girls_enrollment']    = $this->request->data['ele_class_ece_girls_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['ele_class_katchi_girls_enrollment'] = $this->request->data['ele_class_katchi_girls_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['ele_class_one_girls_enrollment']    = $this->request->data['ele_class_one_girls_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['ele_class_two_girls_enrollment']    = $this->request->data['ele_class_two_girls_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['ele_class_three_girls_enrollment']  = $this->request->data['ele_class_three_girls_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['ele_class_four_girls_enrollment']   = $this->request->data['ele_class_four_girls_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['ele_class_five_girls_enrollment']   = $this->request->data['ele_class_five_girls_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['ele_class_six_girls_enrollment']    = $this->request->data['ele_class_six_girls_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['ele_class_seven_girls_enrollment']  = $this->request->data['ele_class_seven_girls_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['ele_class_eight_girls_enrollment']  = $this->request->data['ele_class_eight_girls_enrollment'];				    
					//$arrayDEnr['asc201516s_enrollments']['ele_class_nine_girls_enrollment']   = $this->request->data['ele_class_nine_girls_enrollment'];				    
					//$arrayDEnr['asc201516s_enrollments']['ele_class_ten_girls_enrollment']    = $this->request->data['ele_class_ten_girls_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['ele_total_girls_enrollment']        = $this->request->data['ele_total_girls_enrollment'];
				    
				    
					$arrayDEnr['asc201516s_enrollments']['sec_class_nine_arts_boys_enrollment']   = $this->request->data['sec_class_nine_arts_boys_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['sec_class_nine_comp_boys_enrollment']   = $this->request->data['sec_class_nine_comp_boys_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['sec_class_nine_bio_boys_enrollment']    = $this->request->data['sec_class_nine_bio_boys_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['sec_class_nine_comm_boys_enrollment']   = $this->request->data['sec_class_nine_comm_boys_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['sec_class_nine_other_boys_enrollment']  = $this->request->data['sec_class_nine_other_boys_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['sec_class_ten_arts_boys_enrollment']    = $this->request->data['sec_class_ten_arts_boys_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['sec_class_ten_comp_boys_enrollment']    = $this->request->data['sec_class_ten_comp_boys_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['sec_class_ten_bio_boys_enrollment']     = $this->request->data['sec_class_ten_bio_boys_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['sec_class_ten_comm_boys_enrollment']    = $this->request->data['sec_class_ten_comm_boys_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['sec_class_ten_other_boys_enrollment']   = $this->request->data['sec_class_ten_other_boys_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['sec_total_boys_enrollment']             = $this->request->data['sec_total_boys_enrollment'];					

					$arrayDEnr['asc201516s_enrollments']['sec_class_nine_arts_girls_enrollment']  = $this->request->data['sec_class_nine_arts_girls_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['sec_class_nine_comp_girls_enrollment']  = $this->request->data['sec_class_nine_comp_girls_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['sec_class_nine_bio_girls_enrollment']   = $this->request->data['sec_class_nine_bio_girls_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['sec_class_nine_comm_girls_enrollment']  = $this->request->data['sec_class_nine_comm_girls_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['sec_class_nine_other_girls_enrollment'] = $this->request->data['sec_class_nine_other_girls_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['sec_class_ten_arts_girls_enrollment']   = $this->request->data['sec_class_ten_arts_girls_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['sec_class_ten_comp_girls_enrollment']   = $this->request->data['sec_class_ten_comp_girls_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['sec_class_ten_bio_girls_enrollment']    = $this->request->data['sec_class_ten_bio_girls_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['sec_class_ten_comm_girls_enrollment']   = $this->request->data['sec_class_ten_comm_girls_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['sec_class_ten_other_girls_enrollment']  = $this->request->data['sec_class_ten_other_girls_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['sec_total_girls_enrollment']            = $this->request->data['sec_total_girls_enrollment'];

				    
					$arrayDEnr['asc201516s_enrollments']['hsec_class_eleven_arts_boys_enrollment']  = $this->request->data['hsec_class_eleven_arts_boys_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['hsec_class_eleven_comp_boys_enrollment']  = $this->request->data['hsec_class_eleven_comp_boys_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['hsec_class_eleven_med_boys_enrollment']   = $this->request->data['hsec_class_eleven_med_boys_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['hsec_class_eleven_eng_boys_enrollment']   = $this->request->data['hsec_class_eleven_eng_boys_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['hsec_class_eleven_comm_boys_enrollment']  = $this->request->data['hsec_class_eleven_comm_boys_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['hsec_class_eleven_other_boys_enrollment'] = $this->request->data['hsec_class_eleven_other_boys_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['hsec_class_twelve_arts_boys_enrollment']  = $this->request->data['hsec_class_twelve_arts_boys_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['hsec_class_twelve_comp_boys_enrollment']  = $this->request->data['hsec_class_twelve_comp_boys_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['hsec_class_twelve_med_boys_enrollment']   = $this->request->data['hsec_class_twelve_med_boys_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['hsec_class_twelve_eng_boys_enrollment']   = $this->request->data['hsec_class_twelve_eng_boys_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['hsec_class_twelve_comm_boys_enrollment']  = $this->request->data['hsec_class_twelve_comm_boys_enrollment'];					
					$arrayDEnr['asc201516s_enrollments']['hsec_class_twelve_other_boys_enrollment'] = $this->request->data['hsec_class_twelve_other_boys_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['hsec_total_boys_enrollment']              = $this->request->data['hsec_total_boys_enrollment'];
				    
				    
					$arrayDEnr['asc201516s_enrollments']['hsec_class_eleven_arts_girls_enrollment']  = $this->request->data['hsec_class_eleven_arts_girls_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['hsec_class_eleven_comp_girls_enrollment']  = $this->request->data['hsec_class_eleven_comp_girls_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['hsec_class_eleven_med_girls_enrollment']   = $this->request->data['hsec_class_eleven_med_girls_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['hsec_class_eleven_eng_girls_enrollment']   = $this->request->data['hsec_class_eleven_eng_girls_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['hsec_class_eleven_comm_girls_enrollment']  = $this->request->data['hsec_class_eleven_comm_girls_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['hsec_class_eleven_other_girls_enrollment'] = $this->request->data['hsec_class_eleven_other_girls_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['hsec_class_twelve_arts_girls_enrollment']  = $this->request->data['hsec_class_twelve_arts_girls_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['hsec_class_twelve_comp_girls_enrollment']  = $this->request->data['hsec_class_twelve_comp_girls_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['hsec_class_twelve_med_girls_enrollment']   = $this->request->data['hsec_class_twelve_med_girls_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['hsec_class_twelve_eng_girls_enrollment']   = $this->request->data['hsec_class_twelve_eng_girls_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['hsec_class_twelve_comm_girls_enrollment']  = $this->request->data['hsec_class_twelve_comm_girls_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['hsec_class_twelve_other_girls_enrollment'] = $this->request->data['hsec_class_twelve_other_girls_enrollment'];				    
					$arrayDEnr['asc201516s_enrollments']['hsec_total_girls_enrollment']              = $this->request->data['hsec_total_girls_enrollment'];

					
					$arrayDEnr['asc201516s_enrollments']['repeaters_class_four_boys']    = $this->request->data['repeaters_class_four_boys'];				    
					$arrayDEnr['asc201516s_enrollments']['repeaters_class_five_boys']    = $this->request->data['repeaters_class_five_boys'];				    
					$arrayDEnr['asc201516s_enrollments']['repeaters_class_six_boys']     = $this->request->data['repeaters_class_six_boys'];				    
					$arrayDEnr['asc201516s_enrollments']['repeaters_class_seven_boys']   = $this->request->data['repeaters_class_seven_boys'];				    
					$arrayDEnr['asc201516s_enrollments']['repeaters_class_eight_boys']   = $this->request->data['repeaters_class_eight_boys'];
					$arrayDEnr['asc201516s_enrollments']['repeaters_class_nine_boys']    = $this->request->data['repeaters_class_nine_boys'];				    
					$arrayDEnr['asc201516s_enrollments']['repeaters_class_ten_boys']     = $this->request->data['repeaters_class_ten_boys'];				    
					$arrayDEnr['asc201516s_enrollments']['repeaters_class_eleven_boys']  = $this->request->data['repeaters_class_eleven_boys'];				    
					$arrayDEnr['asc201516s_enrollments']['repeaters_class_twelve_boys']  = $this->request->data['repeaters_class_twelve_boys'];				    
					$arrayDEnr['asc201516s_enrollments']['repeaters_total_boys']         = $this->request->data['repeaters_total_boys'];				    

					$arrayDEnr['asc201516s_enrollments']['repeaters_class_four_girls']   = $this->request->data['repeaters_class_four_girls'];				    				    
					$arrayDEnr['asc201516s_enrollments']['repeaters_class_five_girls']   = $this->request->data['repeaters_class_five_girls'];				    
					$arrayDEnr['asc201516s_enrollments']['repeaters_class_six_girls']    = $this->request->data['repeaters_class_six_girls'];				    
					$arrayDEnr['asc201516s_enrollments']['repeaters_class_seven_girls']  = $this->request->data['repeaters_class_seven_girls'];				    
					$arrayDEnr['asc201516s_enrollments']['repeaters_class_eight_girls']  = $this->request->data['repeaters_class_eight_girls'];				    
					$arrayDEnr['asc201516s_enrollments']['repeaters_class_nine_girls']   = $this->request->data['repeaters_class_nine_girls'];				    
					$arrayDEnr['asc201516s_enrollments']['repeaters_class_ten_girls']    = $this->request->data['repeaters_class_ten_girls'];				   
					$arrayDEnr['asc201516s_enrollments']['repeaters_class_eleven_girls'] = $this->request->data['repeaters_class_eleven_girls'];				    
					$arrayDEnr['asc201516s_enrollments']['repeaters_class_twelve_girls'] = $this->request->data['repeaters_class_twelve_girls'];
					$arrayDEnr['asc201516s_enrollments']['repeaters_total_girls']        = $this->request->data['repeaters_total_girls'];	


				    
					$arrayDEnr['asc201516s_enrollments']['perm_class_four_boys_absentees']    = $this->request->data['perm_class_four_boys_absentees'];				    
					$arrayDEnr['asc201516s_enrollments']['perm_class_five_boys_absentees']    = $this->request->data['perm_class_five_boys_absentees'];				    
					$arrayDEnr['asc201516s_enrollments']['perm_class_six_boys_absentees']     = $this->request->data['perm_class_six_boys_absentees'];				    
					$arrayDEnr['asc201516s_enrollments']['perm_class_seven_boys_absentees']   = $this->request->data['perm_class_seven_boys_absentees'];				    
					$arrayDEnr['asc201516s_enrollments']['perm_class_eight_boys_absentees']   = $this->request->data['perm_class_eight_boys_absentees'];
					$arrayDEnr['asc201516s_enrollments']['perm_class_nine_boys_absentees']    = $this->request->data['perm_class_nine_boys_absentees'];				    
					$arrayDEnr['asc201516s_enrollments']['perm_class_ten_boys_absentees']     = $this->request->data['perm_class_ten_boys_absentees'];				    
					$arrayDEnr['asc201516s_enrollments']['perm_class_eleven_boys_absentees']  = $this->request->data['perm_class_eleven_boys_absentees'];				    
					$arrayDEnr['asc201516s_enrollments']['perm_class_twelve_boys_absentees']  = $this->request->data['perm_class_twelve_boys_absentees'];				    
					$arrayDEnr['asc201516s_enrollments']['perm_total_boys_absentees']         = $this->request->data['perm_total_boys_absentees'];				    

					$arrayDEnr['asc201516s_enrollments']['perm_class_four_girls_absentees']   = $this->request->data['perm_class_four_girls_absentees'];				    				    
					$arrayDEnr['asc201516s_enrollments']['perm_class_five_girls_absentees']   = $this->request->data['perm_class_five_girls_absentees'];				    
					$arrayDEnr['asc201516s_enrollments']['perm_class_six_girls_absentees']    = $this->request->data['perm_class_six_girls_absentees'];				    
					$arrayDEnr['asc201516s_enrollments']['perm_class_seven_girls_absentees']  = $this->request->data['perm_class_seven_girls_absentees'];				    
					$arrayDEnr['asc201516s_enrollments']['perm_class_eight_girls_absentees']  = $this->request->data['perm_class_eight_girls_absentees'];				    
					$arrayDEnr['asc201516s_enrollments']['perm_class_nine_girls_absentees']   = $this->request->data['perm_class_nine_girls_absentees'];				    
					$arrayDEnr['asc201516s_enrollments']['perm_class_ten_girls_absentees']    = $this->request->data['perm_class_ten_girls_absentees'];				   
					$arrayDEnr['asc201516s_enrollments']['perm_class_eleven_girls_absentees'] = $this->request->data['perm_class_eleven_girls_absentees'];				    
					$arrayDEnr['asc201516s_enrollments']['perm_class_twelve_girls_absentees'] = $this->request->data['perm_class_twelve_girls_absentees'];
					$arrayDEnr['asc201516s_enrollments']['perm_total_girls_absentees']        = $this->request->data['perm_total_girls_absentees'];					
								
				    //$this->asc201516s_enrollments->create();
					$enrollments = $this->asc201516s_enrollments->saveAll($arrayDEnr);

					//Teachers Function
					$arrayT = array();
					$total_teachers = $this->request->data['Asc201516']['sti_total_teachers'];
					$this->request->data['asc201516s_teachers']['school_semis_code'] = $this->request->data['Asc201516']['school_semis_code'];
					//debug($this->request->data['asc201516s_teachers']);
					if($t_filled != 0){
					
						for($i=0; $i<$total_teachers; $i++){
							$arrayT['asc201516s_teachers']['school_id']                      = $this->Asc201516->id;
							$arrayT['asc201516s_teachers']['school_semis_code']              = $this->request->data['Asc201516']['school_semis_code'];
							$arrayT['asc201516s_teachers']['teachers_name']                  = @$this->request->data['teachers_name'][$i];
							$arrayT['asc201516s_teachers']['teachers_cnic']                  = @$this->request->data['teachers_cnic'][$i];
							$arrayT['asc201516s_teachers']['teachers_gender']                = @$this->request->data['teachers_gender'][$i];
							$arrayT['asc201516s_teachers']['teachers_personnel']             = @$this->request->data['teachers_personnel'][$i];
							
							if(@$this->request->data['teachers_dob'][$i] == ''){
								$this->request->data['teachers_dob'][$i] = '1900-08-14';
							}
							$arrayT['asc201516s_teachers']['teachers_dob']                   = @$this->request->data['teachers_dob'][$i];	

							$arrayT['asc201516s_teachers']['teachers_appointment_bps']       = @$this->request->data['teachers_appointment_bps'][$i];	
							$arrayT['asc201516s_teachers']['teachers_designation']           = @$this->request->data['teachers_designation'][$i];	
							$arrayT['asc201516s_teachers']['teachers_time_scale_bps']        = @$this->request->data['teachers_time_scale_bps'][$i];	
							$arrayT['asc201516s_teachers']['teachers_actual_scale_bps']      = @$this->request->data['teachers_actual_scale_bps'][$i];	
							
							if(@$this->request->data['teachers_doe'][$i] == ''){
								$this->request->data['teachers_doe'][$i] = '1947-08-14';
							}
							$arrayT['asc201516s_teachers']['teachers_doe']                   = @$this->request->data['teachers_doe'][$i];	
							
							$arrayT['asc201516s_teachers']['teachers_post_type']             = @$this->request->data['teachers_post_type'][$i];	
							$arrayT['asc201516s_teachers']['teachers_highest_qualification'] = @$this->request->data['teachers_highest_qualification'][$i];	
							$arrayT['asc201516s_teachers']['teachers_professional_training'] = @$this->request->data['teachers_professional_training'][$i];	
							$arrayT['asc201516s_teachers']['teachers_detailment']            = @$this->request->data['teachers_detailment'][$i];	
							$arrayT['asc201516s_teachers']['teachers_contact']               = @$this->request->data['teachers_contact'][$i];	
							$arrayT['asc201516s_teachers']['teachers_subspec']               = @$this->request->data['teachers_subspec'][$i];	
							
							$teachers = $this->asc201516s_teachers->saveAll($arrayT);

						}
					}

					if(null != @$this->request->data['Asc201516sConsolidation']){
						foreach ($this->request->data['Asc201516sConsolidation'] as $key => $value) {				
							$this->request->data['Asc201516sConsolidation'][$key]['school_id'] = $this->Asc201516->id;
						}					

						$consolidation = $this->asc201516s_consolidations->saveAll($this->request->data['Asc201516sConsolidation']);	
					}
					
					$fileOK = $this->uploadFiles('asc201516_snaps', $this->request->data['File'], $this->request->data['Asc201516']['school_semis_code']);			
					
					// if file was uploaded ok
					if(array_key_exists('urls', $fileOK)) {
						// save the url in the form data
						/*foreach ($fileOK as $key => $value) {
							debug($value);
							# code...
						}*/
						//echo $this->request->data['File']['image_url'] = $fileOK['urls'][0];						
						$img_url1 = $fileOK['urls'][0];						
						$img_url2 = $fileOK['urls'][1];						
						$img_url3 = $fileOK['urls'][2];
						$img_url4 = $fileOK['urls'][3];
						$img_url5 = $fileOK['urls'][4];

						$this->Asc201516->saveField('school_img', $img_url1);
						$this->Asc201516->saveField('facility_boundarywall_img', $img_url2);	
						$this->Asc201516->saveField('facility_drinkingwater_img', $img_url3);
						$this->Asc201516->saveField('facility_electricity_img', $img_url4);	
						$this->Asc201516->saveField('facility_washrooms_img', $img_url5);	
						
					}
					//print_r($this->request->data['asc201516s_teachers']);
					//exit();
					
					if($school && $enrollments){
						if(!empty($teachers)){
							$this->Session->setFlash('The School has been saved');
							$this->redirect(array('controller' => 'asc201516s', 'action' => 'index'));						
						}else{
							$this->Session->setFlash('The School has been saved with No Teachers!');								
							$this->redirect(array('controller' => 'asc201516s', 'action' => 'index'));					
						}							
					}else{

						$this->Session->setFlash('The School could not be saved. Please, try again.');						
						$this->redirect(array('controller' => 'asc201516s', 'action' => 'index'));
					}
				}else{
					//echo 'failed $school';
					$semisid = $this->request->data['Asc201516']['school_semis_code'];
					$x       = $this->Asc201516->validationErrors;

					$arr = array();
					foreach($x as $key => $value){
						$arr[$key] = $value[0];												
					}
					
					$this->Session->write('errors', $arr);					
										
					$this->redirect(array('controller' => 'asc201516s',
						'action' => 'add',$semisid));
					//$this->render('add/'. $semisid);
				}

									
				/*
				}
				
				if ($this->Asc201516->saveAssociated($this->request->data)) {
					$this->Session->setFlash(__('The asc201516 has been saved'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The asc201516 could not be saved. Please, try again.'));
				}*/
			}else{
				echo 'empty request!';
			}
		}
	}

	public function edit_asc201516($id = NULL, $sid = NULL)
	{
		$this->layout = "asclayout_edit";
		if ($this->request->is('post') || $this->request->is('put')) {

			if((null != $id) && (null != $sid)){
				
				//debug($this->request->data);											exit();

				$semiscode = $this->request->data['Asc201516']['school_semis_code'];

				if(@$this->request->data['asc201516s_teachers']['teachers_name'][0] == ''){
					$t_filled = 0;
				}else{
					$t_filled = count(@$this->request->data['asc201516s_teachers']['teachers_name']);
				}	

				$name                                                              = $this->request->data['File']['school_img']['name'];				
				$ext                                                               = pathinfo($name, PATHINFO_EXTENSION);
				$name                                                              = $semiscode . '_school_img.'.$ext;
				$this->request->data['File']['school_img']['name']                 = $name;
				
				$name                                                              =  $this->request->data['File']['facility_boundary_wall_img']['name'];				
				$ext                                                               = pathinfo($name, PATHINFO_EXTENSION);
				$name                                                              = $semiscode . '_facility_boundarywall_img.'.$ext;
				$this->request->data['File']['facility_boundary_wall_img']['name'] = $name;
				
				$name                                                              =  $this->request->data['File']['facility_drinkingwater_img']['name'];				
				$ext                                                               = pathinfo($name, PATHINFO_EXTENSION);
				$name                                                              = $semiscode . '_facility_drinkingwater_img.'.$ext;
				$this->request->data['File']['facility_drinkingwater_img']['name'] = $name;
				
				$name                                                              =  $this->request->data['File']['facility_electricity_img']['name'];				
				$ext                                                               = pathinfo($name, PATHINFO_EXTENSION);
				$name                                                              = $semiscode . '_facility_electricity_img.'.$ext;
				$this->request->data['File']['facility_electricity_img']['name']   = $name;
				
				$name                                                              =  $this->request->data['File']['facility_washrooms_img']['name'];				
				$ext                                                               = pathinfo($name, PATHINFO_EXTENSION);
				$name                                                              = $semiscode . '_facility_washrooms_img.'.$ext;
				$this->request->data['File']['facility_washrooms_img']['name']     = $name;

				$retval = $this->Asc201516->findById($sid);
				if (!$retval) {
			        throw new NotFoundException(__('Invalid school'));
			    }
			    //debug($retval);
			    if($retval['Asc201516']['school_semis_code'] != $id){

			    	$this->Session->setFlash('Something went wrong whilst getting semis code.');
			    	$this->redirect(array('controller' => 'asc201516s', 'action'=> 'index'));
			    }
				
				$this->Asc201516->id = $sid;

				if(null == $this->request->data['Asc201516']['dsi_sch_medium'])
				{								
					$this->request->data['Asc201516']['dsi_sch_medium'] = '';
				}else{
					$this->request->data['Asc201516']['dsi_sch_medium'] = implode(", ", $this->request->data['Asc201516']['dsi_sch_medium']);	
				}
				
				$fetchEnrollmentsTblSchoolID = $this->asc201516s_enrollments->find('first', array(
					'conditions' => array(
						'school_id' => $sid
						),
					'fields' => array('id')
					)
				);
							
				/* --------------------------------------------------------------------------------*/
				/*$fetchTeachersTblSchoolID = $this->asc201516s_teachers->find('all', array(
					'conditions' => array(
						'school_id' => $sid,
						'asc201516s_teachers.school_semis_code' => $id 
						),
					'fields' => array('id', 'school_semis_code')
					)
				);				
				
				foreach ($fetchTeachersTblSchoolID as $value) {
					$this->asc201516s_teachers->delete($value['asc201516s_teachers']['id']);					
				}*/

				/* --------------------------------------------------------------------------------*/
				if($this->Asc201516->save($this->request->data, array('deep' => true))){
					$this->asc201516s_enrollments->id = $fetchEnrollmentsTblSchoolID['asc201516s_enrollments']['id'];
					$this->asc201516s_enrollments->save($this->request->data['asc201516s_enrollments']);						

					$arrayT = array();
					$total_teachers = $this->request->data['Asc201516']['sti_total_teachers'];

					if($t_filled != 0){						
						$this->asc201516s_teachers->deleteAll(array(
													        'asc201516s_teachers.school_id' => $sid, 
													        'asc201516s_teachers.school_semis_code' => $id), false);						


						for($i=0; $i<$total_teachers; $i++){
							$arrayT['asc201516s_teachers']['school_id']                      = $sid;
							$arrayT['asc201516s_teachers']['school_semis_code']              = $this->request->data['Asc201516']['school_semis_code'];

							$arrayT['asc201516s_teachers']['teachers_name']                  = @$this->request->data['asc201516s_teachers']['teachers_name'][$i];
							$arrayT['asc201516s_teachers']['teachers_cnic']                  = @$this->request->data['asc201516s_teachers']['teachers_cnic'][$i];
							$arrayT['asc201516s_teachers']['teachers_gender']                = @$this->request->data['asc201516s_teachers']['teachers_gender'][$i];
							$arrayT['asc201516s_teachers']['teachers_personnel']             = @$this->request->data['asc201516s_teachers']['teachers_personnel'][$i];
							if(@$this->request->data['asc201516s_teachers']['teachers_dob'][$i] == ''){
								$this->request->data['asc201516s_teachers']['teachers_dob'][$i] = '1900-08-14';
							}
							$arrayT['asc201516s_teachers']['teachers_dob']                   = @$this->request->data['asc201516s_teachers']['teachers_dob'][$i];	
							
							$arrayT['asc201516s_teachers']['teachers_appointment_bps']       = @$this->request->data['asc201516s_teachers']['teachers_appointment_bps'][$i];	
							$arrayT['asc201516s_teachers']['teachers_designation']           = @$this->request->data['asc201516s_teachers']['teachers_designation'][$i];	
							$arrayT['asc201516s_teachers']['teachers_time_scale_bps']        = @$this->request->data['asc201516s_teachers']['teachers_time_scale_bps'][$i];	
							$arrayT['asc201516s_teachers']['teachers_actual_scale_bps']      = @$this->request->data['asc201516s_teachers']['teachers_actual_scale_bps'][$i];	
							if(@$this->request->data['asc201516s_teachers']['teachers_doe'][$i] == ''){
								$this->request->data['asc201516s_teachers']['teachers_doe'][$i] = '1947-08-14';
							}
							$arrayT['asc201516s_teachers']['teachers_doe']                   = @$this->request->data['asc201516s_teachers']['teachers_doe'][$i];	
							
							$arrayT['asc201516s_teachers']['teachers_post_type']             = @$this->request->data['asc201516s_teachers']['teachers_post_type'][$i];	
							$arrayT['asc201516s_teachers']['teachers_highest_qualification'] = @$this->request->data['asc201516s_teachers']['teachers_highest_qualification'][$i];	
							$arrayT['asc201516s_teachers']['teachers_professional_training'] = @$this->request->data['asc201516s_teachers']['teachers_professional_training'][$i];	
							$arrayT['asc201516s_teachers']['teachers_detailment']            = @$this->request->data['asc201516s_teachers']['teachers_detailment'][$i];	
							$arrayT['asc201516s_teachers']['teachers_contact']               = @$this->request->data['asc201516s_teachers']['teachers_contact'][$i];	
							$arrayT['asc201516s_teachers']['teachers_subspec']               = @$this->request->data['asc201516s_teachers']['teachers_subspec'][$i];
							
							$teachers = $this->asc201516s_teachers->saveAll($arrayT);

						}
					}

					$this->asc201516s_consolidations->deleteAll(array(
																'asc201516s_consolidations.campus_id' => $id,
																'asc201516s_consolidations.school_id' => $sid
																), false);
					if(null != @$this->request->data['Asc201516sConsolidation']){
						foreach ($this->request->data['Asc201516sConsolidation'] as $key => $value) {				
							$this->request->data['Asc201516sConsolidation'][$key]['school_id'] = $sid;
						}					

						$consolidation = $this->asc201516s_consolidations->saveAll($this->request->data['Asc201516sConsolidation']);	
					}
					
					$fileOK = $this->uploadFiles('asc201516_snaps', $this->request->data['File'], $this->request->data['Asc201516']['school_semis_code']);			
					
					// if file was uploaded ok
					if(array_key_exists('urls', $fileOK)) {												

						$img_url1 = $fileOK['urls'][0];						
						$img_url2 = $fileOK['urls'][1];						
						$img_url3 = $fileOK['urls'][2];
						$img_url4 = $fileOK['urls'][3];
						$img_url5 = $fileOK['urls'][4];

						$this->Asc201516->id = $sid;
						$this->Asc201516->saveField('school_img', $img_url1);
						$this->Asc201516->saveField('facility_boundarywall_img', $img_url2);	
						$this->Asc201516->saveField('facility_drinkingwater_img', $img_url3);
						$this->Asc201516->saveField('facility_electricity_img', $img_url4);	
						$this->Asc201516->saveField('facility_washrooms_img', $img_url5);						
						
					}
				
					$this->Session->setFlash(__('School - '. $id .' has been successfully edited!'));					
					$this->redirect(array('controller' => 'asc201516s', 'action' => 'index'));
				} else {
					$this->Session->setFlash(__('School - '. $id .' could not be edited. Please, try again.'));
					$this->redirect(array('controller' => 'asc201516s', 'action' => 'index'));
				}
			}
						
		}

		if(!($this->request->is('post')) || !($this->request->is('put')))
		{
			$home = new HomeController();
			$conditions = $home->get_conditions();
			$this->set('conditions', $conditions);
			$levels = $home->get_levels();
			$this->set('levels', $levels);
			$genders = $home->get_genders();
			$this->set('genders', $genders);
			$prefixes = $home->get_school_prefixes();
			$this->set('prefixes', $prefixes);
			$major_reasons = $home->get_school_closure_major_reasons();
			$this->set('reasons', $major_reasons);
			$dp_designations = $home->get_dp_designations();
			$this->set('dpdesignations', $dp_designations);		
			$school_building_owners = $this->get_codes_for_school_building_owners();
			$this->set('schoolbuildingowners', $school_building_owners);
			$smc_bank_name = $this->get_bank_names();
			$this->set('smcbanknames', $smc_bank_name);
			$professionalquals = $this->get_professional_qualifications();
			$this->seT('professionalquals', $professionalquals);

			$school = $this->semis_universal201415s->find('first', array(
				'conditions' => array(
					'semis_universal201415s.school_semis_new' => $id,
					'semis_universal201415s.bi_school_taluka' => $this->utehsil
					)
				)
			);
			if(!$school){
				$message = '<strong>'.$id.'</strong> School is not in your <strong>Tehsil</strong>.';
				$this->Session->setFlash($message);
				$this->redirect(array(
					'controller' => 'asc201516s',
					'action' => 'index'
					));				
			}

			$school2 = $this->Asc201516->find('first', array(
				'conditions' => array(
					'Asc201516.school_semis_code' => $id					
					)				
				)
			);

			if(!$school2 || !$school){
				$this->Session->setFlash('Not found, please fill the ASC Form first.');
				$this->redirect(array(
					'controller' => 'asc201516s',
					'action' => 'index'));				
			}

			$school_id = $school2['Asc201516']['id'];
			$school2_enrollments = $this->asc201516s_enrollments->find('first', array(
				'conditions' => array(
					'school_semis_code' => $id					
					)				
				)
			);

			$this->set('school2_enr', $school2_enrollments);	

			$school2_teachers = $this->asc201516s_teachers->find('all', array(
				'conditions' => array(
					'asc201516s_teachers.school_semis_code' => $id,
					'asc201516s_teachers.school_id'	=> $school_id				
					)
				)
			);
			
			$this->set('school2_t', $school2_teachers);
			//$this->set('')		
			
			//debug($school);


			if($school){
				
				$districtid    = $school['semis_universal201415s']['bi_school_district'];	
				$tehsilid      = $school['semis_universal201415s']['bi_school_taluka'];
				$ucid          = $school['semis_universal201415s']['bi_school_uc'];	
				$tappaid       = $school['semis_universal201415s']['bi_school_tappa'];
				$dehid         = $school['semis_universal201415s']['bi_school_deh'];		
				$designationid = $school['semis_universal201415s']['hti_designation'];
				$campusSchool  = $school['semis_universal201415s']['campus_school'];
				$schoolid      = $school_id;

				$district = $this->codes_for_district->find('first', array(
					'conditions' => array(
						'codes_for_district.districtid' => $districtid
						),
					'fields' => array('district')
					)
				);

				$taluka = $this->codes_for_district_and_tehsils->find('first', array(
					'conditions' => array(
						'codes_for_district_and_tehsils.tehsil_id' => $this->utehsil
						),
					'fields' => array('tehsil_id', 'tehsil')
					)
				);

				$uc = $this->codes_for_ucs->find('first', array(
					'conditions' => array(
						'codes_for_ucs.uc_id' => $ucid,
						//'codes_for_ucs.district_id' => $districtid,
						//'codes_for_ucs.tehsil_id' => $tehsilid
						),
					'fields' => array('uc_id', 'uc_name')
					)
				);
				//if(!($uc)){ echo 'no record found'; exit();}
				
				$tappa = $this->codes_for_tappas->find('first', array(
					'conditions' => array(
						'codes_for_tappas.tappaid' => $tappaid
						),
					'fields' => array('tappaid', 'tappa')
					)
				);

				$deh = $this->codes_for_dehs->find('first', array(
					'conditions' => array(
						'codes_for_dehs.dehid' => $dehid
						),
					'fields' => array('dehid', 'deh')
					)				
				);	

				$designation = $this->codes_for_dp_designations->find('first', array(
					'conditions' => array(
						'codes_for_dp_designations.DPDesigID' => $designationid,						
						),
					'fields' => array('dpdesigid', 'dpdesignation')
					)
				);		
				
				if($campusSchool == 1){
					$campuses = $this->asc201516s_consolidations->find('all', array(
						'conditions' => array(
							'campus_id' => $id
							)						
						)
					);					

				}
				
				
				$this->set('campuses', @$campuses);		
				$this->set('school', $school);
				$this->set('school2', $school2);
				$this->set('district', $district);
				$this->set('taluka', $taluka);
				$this->set('uc', $uc);
				$this->set('tappa', $tappa);
				$this->set('deh', $deh);
				$this->set('designation', $designation);
				$this->set('schoolid', $schoolid);
				
			}
		
		}else {
			echo 'else found';
			exit();
			//$this->request->data = $this->Asc201516->read(null, $id);
		}

		//$this->render('edit');		
	}

	public function review_asc201516($id = NULL, $sid = NULL)
	{
		$this->layout = "asclayout_edit";
		if ($this->request->is('post') || $this->request->is('put')) {

			if((null != $id) && (null != $sid)){
				
				//debug($this->request->data);											exit();

				$semiscode = $this->request->data['Asc201516']['school_semis_code'];

				if($this->request->data['asc201516s_teachers']['teachers_name'][0] == ''){
					$t_filled = 0;
				}else{
					$t_filled = count(@$this->request->data['asc201516s_teachers']['teachers_name']);
				}	

				$name                                                              = $this->request->data['File']['school_img']['name'];				
				$ext                                                               = pathinfo($name, PATHINFO_EXTENSION);
				$name                                                              = $semiscode . '_school_img.'.$ext;
				$this->request->data['File']['school_img']['name']                 = $name;
				
				$name                                                              =  $this->request->data['File']['facility_boundary_wall_img']['name'];				
				$ext                                                               = pathinfo($name, PATHINFO_EXTENSION);
				$name                                                              = $semiscode . '_facility_boundarywall_img.'.$ext;
				$this->request->data['File']['facility_boundary_wall_img']['name'] = $name;
				
				$name                                                              =  $this->request->data['File']['facility_drinkingwater_img']['name'];				
				$ext                                                               = pathinfo($name, PATHINFO_EXTENSION);
				$name                                                              = $semiscode . '_facility_drinkingwater_img.'.$ext;
				$this->request->data['File']['facility_drinkingwater_img']['name'] = $name;
				
				$name                                                              =  $this->request->data['File']['facility_electricity_img']['name'];				
				$ext                                                               = pathinfo($name, PATHINFO_EXTENSION);
				$name                                                              = $semiscode . '_facility_electricity_img.'.$ext;
				$this->request->data['File']['facility_electricity_img']['name']   = $name;
				
				$name                                                              =  $this->request->data['File']['facility_washrooms_img']['name'];				
				$ext                                                               = pathinfo($name, PATHINFO_EXTENSION);
				$name                                                              = $semiscode . '_facility_washrooms_img.'.$ext;
				$this->request->data['File']['facility_washrooms_img']['name']     = $name;

				$retval = $this->Asc201516->findById($sid);
				if (!$retval) {
			        throw new NotFoundException(__('Invalid school'));
			    }
			    //debug($retval);
			    if($retval['Asc201516']['school_semis_code'] != $id){

			    	$this->Session->setFlash('Something went wrong whilst getting semis code.');
			    	$this->redirect(array('controller' => 'asc201516s', 'action'=> 'index_dev'));
			    }
				
				$this->Asc201516->id = $sid;

				if(null == $this->request->data['Asc201516']['dsi_sch_medium'])
				{								
					$this->request->data['Asc201516']['dsi_sch_medium'] = '';
				}else{
					$this->request->data['Asc201516']['dsi_sch_medium'] = implode(", ", $this->request->data['Asc201516']['dsi_sch_medium']);	
				}
				
				$fetchEnrollmentsTblSchoolID = $this->asc201516s_enrollments->find('first', array(
					'conditions' => array(
						'school_id' => $sid
						),
					'fields' => array('id')
					)
				);
							
				/* --------------------------------------------------------------------------------*/
				/*$fetchTeachersTblSchoolID = $this->asc201516s_teachers->find('all', array(
					'conditions' => array(
						'school_id' => $sid,
						'asc201516s_teachers.school_semis_code' => $id 
						),
					'fields' => array('id', 'school_semis_code')
					)
				);				
				
				foreach ($fetchTeachersTblSchoolID as $value) {
					$this->asc201516s_teachers->delete($value['asc201516s_teachers']['id']);					
				}*/

				/* --------------------------------------------------------------------------------*/
				if($this->Asc201516->save($this->request->data, array('deep' => true))){
					$this->asc201516s_enrollments->id = $fetchEnrollmentsTblSchoolID['asc201516s_enrollments']['id'];
					$this->asc201516s_enrollments->save($this->request->data['asc201516s_enrollments']);						

					$arrayT = array();
					$total_teachers = $this->request->data['Asc201516']['sti_total_teachers'];

					if($t_filled != 0){						
						$this->asc201516s_teachers->deleteAll(array(
													        'asc201516s_teachers.school_id' => $sid, 
													        'asc201516s_teachers.school_semis_code' => $id), false);						


						for($i=0; $i<$total_teachers; $i++){
							$arrayT['asc201516s_teachers']['school_id']                      = $sid;
							$arrayT['asc201516s_teachers']['school_semis_code']              = $this->request->data['Asc201516']['school_semis_code'];

							$arrayT['asc201516s_teachers']['teachers_name']                  = @$this->request->data['asc201516s_teachers']['teachers_name'][$i];
							$arrayT['asc201516s_teachers']['teachers_cnic']                  = @$this->request->data['asc201516s_teachers']['teachers_cnic'][$i];
							$arrayT['asc201516s_teachers']['teachers_gender']                = @$this->request->data['asc201516s_teachers']['teachers_gender'][$i];
							$arrayT['asc201516s_teachers']['teachers_personnel']             = @$this->request->data['asc201516s_teachers']['teachers_personnel'][$i];
							if(@$this->request->data['asc201516s_teachers']['teachers_dob'][$i] == ''){
								$this->request->data['asc201516s_teachers']['teachers_dob'][$i] = '1900-08-14';
							}
							$arrayT['asc201516s_teachers']['teachers_dob']                   = @$this->request->data['asc201516s_teachers']['teachers_dob'][$i];	
							
							$arrayT['asc201516s_teachers']['teachers_appointment_bps']       = @$this->request->data['asc201516s_teachers']['teachers_appointment_bps'][$i];	
							$arrayT['asc201516s_teachers']['teachers_designation']           = @$this->request->data['asc201516s_teachers']['teachers_designation'][$i];	
							$arrayT['asc201516s_teachers']['teachers_time_scale_bps']        = @$this->request->data['asc201516s_teachers']['teachers_time_scale_bps'][$i];	
							$arrayT['asc201516s_teachers']['teachers_actual_scale_bps']      = @$this->request->data['asc201516s_teachers']['teachers_actual_scale_bps'][$i];	
							if(@$this->request->data['asc201516s_teachers']['teachers_doe'][$i] == ''){
								$this->request->data['asc201516s_teachers']['teachers_doe'][$i] = '1947-08-14';
							}
							$arrayT['asc201516s_teachers']['teachers_doe']                   = @$this->request->data['asc201516s_teachers']['teachers_doe'][$i];	
							
							$arrayT['asc201516s_teachers']['teachers_post_type']             = @$this->request->data['asc201516s_teachers']['teachers_post_type'][$i];	
							$arrayT['asc201516s_teachers']['teachers_highest_qualification'] = @$this->request->data['asc201516s_teachers']['teachers_highest_qualification'][$i];	
							$arrayT['asc201516s_teachers']['teachers_professional_training'] = @$this->request->data['asc201516s_teachers']['teachers_professional_training'][$i];	
							$arrayT['asc201516s_teachers']['teachers_detailment']            = @$this->request->data['asc201516s_teachers']['teachers_detailment'][$i];	
							$arrayT['asc201516s_teachers']['teachers_contact']               = @$this->request->data['asc201516s_teachers']['teachers_contact'][$i];	
							
							$teachers = $this->asc201516s_teachers->saveAll($arrayT);

						}
					}
					$fileOK = $this->uploadFiles('asc201516_snaps', $this->request->data['File'], $this->request->data['Asc201516']['school_semis_code']);			
					
					// if file was uploaded ok
					if(array_key_exists('urls', $fileOK)) {												

						$img_url1 = $fileOK['urls'][0];						
						$img_url2 = $fileOK['urls'][1];						
						$img_url3 = $fileOK['urls'][2];
						$img_url4 = $fileOK['urls'][3];
						$img_url5 = $fileOK['urls'][4];

						$this->Asc201516->id = $sid;
						$this->Asc201516->saveField('school_img', $img_url1);
						$this->Asc201516->saveField('facility_boundarywall_img', $img_url2);	
						$this->Asc201516->saveField('facility_drinkingwater_img', $img_url3);
						$this->Asc201516->saveField('facility_electricity_img', $img_url4);	
						$this->Asc201516->saveField('facility_washrooms_img', $img_url5);						
						
					}
				
					$this->Session->setFlash(__('School - '. $id .' has been successfully edited!'));					
					$this->redirect(array('controller' => 'asc201516s', 'action' => 'index_dev'));
				} else {
					$this->Session->setFlash(__('School - '. $id .' could not be edited. Please, try again.'));
					$this->redirect(array('controller' => 'asc201516s', 'action' => 'index_dev'));
				}
			}
						
		}

		if(!($this->request->is('post')) || !($this->request->is('put')))
		{			
			$home = new HomeController();
			$conditions = $home->get_conditions();
			$this->set('conditions', $conditions);
			$levels = $home->get_levels();
			$this->set('levels', $levels);
			$genders = $home->get_genders();
			$this->set('genders', $genders);
			$prefixes = $home->get_school_prefixes();
			$this->set('prefixes', $prefixes);
			$major_reasons = $home->get_school_closure_major_reasons();
			$this->set('reasons', $major_reasons);
			$dp_designations = $home->get_dp_designations();
			$this->set('dpdesignations', $dp_designations);		
			$school_building_owners = $this->get_codes_for_school_building_owners();
			$this->set('schoolbuildingowners', $school_building_owners);
			$smc_bank_name = $this->get_bank_names();
			$this->set('smcbanknames', $smc_bank_name);
			$professionalquals = $this->get_professional_qualifications();
			$this->seT('professionalquals', $professionalquals);

			$school = $this->semis_universal201415s->find('first', array(
				'conditions' => array(
					'semis_universal201415s.school_semis_new' => $id,
					'semis_universal201415s.bi_school_taluka' => $this->utehsil
					)
				)
			);
			if(!$school){
				$message = '<strong>'.$id.'</strong> School is not in your <strong>Tehsil</strong>.';
				$this->Session->setFlash($message);
				$this->redirect(array(
					'controller' => 'asc201516s',
					'action' => 'index_dev'
					));				
			}

			$school2 = $this->Asc201516->find('first', array(
				'conditions' => array(
					'Asc201516.school_semis_code' => $id					
					)				
				)
			);

			if(!$school2 || !$school){
				$this->Session->setFlash('Not found, please fill the ASC Form first.');
				$this->redirect(array(
					'controller' => 'asc201516s',
					'action' => 'index_dev'));				
			}

			$school_id = $school2['Asc201516']['id'];
			$school2_enrollments = $this->asc201516s_enrollments->find('first', array(
				'conditions' => array(
					'school_semis_code' => $id					
					)				
				)
			);

			$this->set('school2_enr', $school2_enrollments);	

			$school2_teachers = $this->asc201516s_teachers->find('all', array(
				'conditions' => array(
					'asc201516s_teachers.school_semis_code' => $id,
					'asc201516s_teachers.school_id'	=> $school_id				
					)
				)
			);
			
			$this->set('school2_t', $school2_teachers);
			//$this->set('')		
			
			//debug($school);


			if($school){
				
				$districtid    = $school['semis_universal201415s']['bi_school_district'];	
				$tehsilid      = $school['semis_universal201415s']['bi_school_taluka'];
				$ucid          = $school['semis_universal201415s']['bi_school_uc'];	
				$tappaid       = $school['semis_universal201415s']['bi_school_tappa'];
				$dehid         = $school['semis_universal201415s']['bi_school_deh'];		
				$designationid = $school['semis_universal201415s']['hti_designation'];
				$schoolid      = $school_id;

				$district = $this->codes_for_district->find('first', array(
					'conditions' => array(
						'codes_for_district.districtid' => $districtid
						),
					'fields' => array('district')
					)
				);

				$taluka = $this->codes_for_district_and_tehsils->find('first', array(
					'conditions' => array(
						'codes_for_district_and_tehsils.tehsil_id' => $this->utehsil
						),
					'fields' => array('tehsil_id', 'tehsil')
					)
				);

				$uc = $this->codes_for_ucs->find('first', array(
					'conditions' => array(
						'codes_for_ucs.uc_id' => $ucid,
						//'codes_for_ucs.district_id' => $districtid,
						//'codes_for_ucs.tehsil_id' => $tehsilid
						),
					'fields' => array('uc_id', 'uc_name')
					)
				);
				//if(!($uc)){ echo 'no record found'; exit();}
				
				$tappa = $this->codes_for_tappas->find('first', array(
					'conditions' => array(
						'codes_for_tappas.tappaid' => $tappaid
						),
					'fields' => array('tappaid', 'tappa')
					)
				);

				$deh = $this->codes_for_dehs->find('first', array(
					'conditions' => array(
						'codes_for_dehs.dehid' => $dehid
						),
					'fields' => array('dehid', 'deh')
					)				
				);	

				$designation = $this->codes_for_dp_designations->find('first', array(
					'conditions' => array(
						'codes_for_dp_designations.DPDesigID' => $designationid,						
						),
					'fields' => array('dpdesigid', 'dpdesignation')
					)
				);		
				

				//debug($school2);				
				$this->set('school', $school);
				$this->set('school2', $school2);
				$this->set('district', $district);
				$this->set('taluka', $taluka);
				$this->set('uc', $uc);
				$this->set('tappa', $tappa);
				$this->set('deh', $deh);
				$this->set('designation', $designation);
				$this->set('schoolid', $schoolid);
				$this->render("edit_asc201516");
			}

		
		}else {
			echo 'else found';
			exit();
			//$this->request->data = $this->Asc201516->read(null, $id);
		}

		//$this->render('edit');		
	}
	public function finalize_hs($id = NULL, $action = NULL)
	{
		if(null != $action && (isset($action) && $action == 1)){
			$update = $this->Asc201516->updateAll(
			    array('Asc201516.final' => '2'),
			    array('Asc201516.school_semis_code' => $id)
			);	

			if($update){
				$this->Session->setFlash('School '.$id.' finalized successfully!');
			}else{
				$this->Session->setFlash('School '.$id.' not finalized!');
			}

			$this->redirect(array(
				'controller' => 'asc201516s',
				'action' => 'index_hs'
				)
			);
			
		}

		$filled_details = $this->Asc201516->find('first', array(
			'conditions' => array(
				'Asc201516.school_semis_code' => $id
				)			
			)
		);

		$filled_details_enr = $this->asc201516s_enrollments->find('all', array(
			'conditions' => array(
				'asc201516s_enrollments.school_semis_code' => $id
				)
			)
		);
		
		$this->set('filled_details', $filled_details);
		$this->set('filled_details_enr', $filled_details_enr);
	}

	public function finalize_dio($id = NULL, $action = NULL)
	{
		if(null != $action && (isset($action) && $action == 1)){
			$update = $this->Asc201516->updateAll(
			    array('Asc201516.final' => '1'),
			    array('Asc201516.school_semis_code' => $id)
			);	

			if($update){
				$this->Session->setFlash('School '.$id.' finalized successfully!');
			}else{
				$this->Session->setFlash('School '.$id.' not finalized!');
			}

			$this->redirect(array(
				'controller' => 'asc201516s',
				'action' => 'index'
				)
			);
			
		}

		$filled_details = $this->Asc201516->find('first', array(
			'conditions' => array(
				'Asc201516.school_semis_code' => $id
				)			
			)
		);

		$filled_details_enr = $this->asc201516s_enrollments->find('all', array(
			'conditions' => array(
				'asc201516s_enrollments.school_semis_code' => $id
				)
			)
		);
		
		$this->set('filled_details', $filled_details);
		$this->set('filled_details_enr', $filled_details_enr);
	}

	public function finalize_dev($id = NULL, $action = NULL)
	{
		if(null != $action && (isset($action) && $action == 2) && (isset($id))){
			$update = $this->Asc201516->updateAll(
			    array('Asc201516.final' => '2'),
			    array('Asc201516.school_semis_code' => $id)
			);	
			if($update){
				$this->Session->setFlash('School '.$id.' finalized successfully!');
			}else{
				$this->Session->setFlash('School '.$id.' not finalized!');
			}

			$this->redirect(array(
				'controller' => 'asc201516s',
				'action' => 'index_dev'
				)
			);
			
			
		}else{
			$this->Session->setFlash('Invalid SEMISCode OR Action');
			$this->redirect(array(
				'controller' => 'asc201516s',
				'action' => 'index_dev'
				)
			);
		}	
	}

	public function unfinalize_dev($id = NULL, $action = NULL)
	{
		if(null != $action && (isset($action) && $action == 1) && (isset($id))){
			$update = $this->Asc201516->updateAll(
			    array('Asc201516.final' => '0'),
			    array('Asc201516.school_semis_code' => $id)
			);	

			if($update){
				$this->Session->setFlash('School '.$id.' Un-finalized successfully!');
			}else{
				$this->Session->setFlash('School '.$id.' not Un-finalized!');
			}

			$this->redirect(array(
				'controller' => 'asc201516s',
				'action' => 'index_dev'
				)
			);
			
			
		}else{
			$this->Session->setFlash('Invalid SEMISCode OR Action');
			$this->redirect(array(
				'controller' => 'asc201516s',
				'action' => 'index_dev'
				)
			);
		}	
	}

	public function finalize_des($id = NULL, $action = NULL)
	{
		if(null != $action && (isset($action) && $action == 3) && (isset($id))){
			$update = $this->Asc201516->updateAll(
			    array('Asc201516.final' => '3'),
			    array('Asc201516.school_semis_code' => $id)
			);	
			if($update){
				$this->Session->setFlash('School '.$id.' finalized successfully!');
			}else{
				$this->Session->setFlash('School '.$id.' not finalized!');
			}

			$this->redirect(array(
				'controller' => 'asc201516s',
				'action' => 'index_des'
				)
			);
			
			
		}else{
			$this->Session->setFlash('Invalid SEMISCode OR Action');
			$this->redirect(array(
				'controller' => 'asc201516s',
				'action' => 'index_des'
				)
			);
		}	
	}

	public function unfinalize_des($id = NULL, $action = NULL)
	{
		if(null != $action && (isset($action) && $action == 2) && (isset($id))){
			$update = $this->Asc201516->updateAll(
			    array('Asc201516.final' => '0'),
			    array('Asc201516.school_semis_code' => $id)
			);	

			if($update){
				$this->Session->setFlash('School '.$id.' Un-finalized successfully!');
			}else{
				$this->Session->setFlash('School '.$id.' not Un-finalized!');
			}

			$this->redirect(array(
				'controller' => 'asc201516s',
				'action' => 'index_des'
				)
			);
			
			
		}else{
			$this->Session->setFlash('Invalid SEMISCode OR Action');
			$this->redirect(array(
				'controller' => 'asc201516s',
				'action' => 'index_des'
				)
			);
		}	
	}

	public function uploadFiles($folder, $formdata, $itemId = null) 
	{
        // setup dir names absolute and relative
        $folder_url = WWW_ROOT.$folder;
        $rel_url = $folder;
        
        // create the folder if it does not exist
        if(!is_dir($folder_url)) {
            mkdir($folder_url);
        }
            
        // if itemId is set create an item folder
        if($itemId) {
            // set new absolute folder
            $folder_url = WWW_ROOT.$folder.'/'.$itemId; 
            // set new relative folder
            $rel_url = $folder.'/'.$itemId;
            // create directory
            if(!is_dir($folder_url)) {
                mkdir($folder_url);
            }
        }
        
        // list of permitted file types, this is only images but documents can be added
        $permitted = array('image/gif','image/jpeg','image/pjpeg','image/png');
        
        // loop through and deal with the files
        foreach($formdata as $file) {
            // replace spaces with underscores
            $filename = str_replace(' ', '_', $file['name']);
            // assume filetype is false
            $typeOK = false;
            // check filetype is ok
            foreach($permitted as $type) {
                if($type == $file['type']) {
                    $typeOK = true;
                    break;
                }
            }
            
            // if file type ok upload the file
            if($typeOK) {
                // switch based on error code
                switch($file['error']) {
                    case 0:
                        // check filename already exists
                        if(!file_exists($folder_url.'/'.$filename)) {
                            // create full filename
                            $full_url = $folder_url.'/'.$filename;
                            $url = $rel_url.'/'.$filename;
                            // upload the file
                            $success = move_uploaded_file($file['tmp_name'], $url);
                        } else {
                            // create unique filename and upload file
                            //ini_set('date.timezone', 'Europe/London');
                            //$now = date('Y-m-d-His');
                            //$full_url = $folder_url.'/'.$now.$filename;
                            //$url = $rel_url.'/'.$now.$filename;
							$full_url = $folder_url.'/'.$filename;
							$url      = $rel_url.'/'.$filename;
							$success  = move_uploaded_file($file['tmp_name'], $url);
                        }
                        // if upload was successful
                        if($success) {
                            // save the url of the file
                            $result['urls'][] = $url;
                        } else {
                            $result['errors'][] = "Error uploaded $filename. Please try again.";
                        }
                        break;
                    case 3:
                        // an error occured
                        $result['errors'][] = "Error uploading $filename. Please try again.";
                        break;
                    default:
                        // an error occured
                        $result['errors'][] = "System error uploading $filename. Contact webmaster.";
                        break;
                }
            } elseif($file['error'] == 4) {
                // no file was selected for upload
                $result['nofiles'][] = "No file Selected";
            } else {
                // unacceptable file type
                $result['errors'][] = "$filename cannot be uploaded. Acceptable file types: gif, jpg, png.";
            }
        }
        return $result;
    }

	public function edit($id = null) 
	{
		
		/*$this->Asc201516->id = $id;
		if (!$this->Asc201516->exists()) {
			throw new NotFoundException(__('Invalid asc201516'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Asc201516->save($this->request->data)) {
				$this->Session->setFlash(__('The asc201516 has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The asc201516 could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Asc201516->read(null, $id);
		}*/
	}

	public function get_bank_names()
	{
		$bank_names_tbl = $this->codes_for_banks;
		$smc_bank_name = $bank_names_tbl->find('list', array(
			'fields' => array(
				'BankId', 
				'BankName'
				)
			)
		);

		return $smc_bank_name;
	}

	public function get_professional_qualifications()
	{
		$quals_tbl = $this->codes_for_teachers_qualifications;
		$professionalquals = $quals_tbl->find('list', array(
			'fields' => array(
				'QualificaitonID',
				'Qualification'
				)
			)
		);

		return $professionalquals;
	}

	public function delete($id = null) 
	{
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Asc201516->id = $id;
		if (!$this->Asc201516->exists()) {
			throw new NotFoundException(__('Invalid asc201516'));
		}
		if ($this->Asc201516->delete()) {
			$this->Session->setFlash(__('Asc201516 deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Asc201516 was not deleted'));
		$this->redirect(array('action' => 'index'));
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

	public function get_tappas($tid = NULL, $did = NULL)	//function to fetch tappas from database as <option></option>!
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

	public function get_dehs($tid = NULL, $did = NULL)	//function to fetch dehs from database as <option></option>!
	{
		if(!(is_null(@$tid) && is_null($did)))
		{
		
			$deh_tbl = $this->codes_for_dehs;
			$deh_ids = $deh_tbl->find(
				'all', array(
					'conditions' => array(
						'codes_for_dehs.districtid' => $did,
						'codes_for_dehs.tehsilid' => $tid
						),
					'fields' => array(
						'dehid',
						'deh'						
						)				
					)
				);

			echo "<option value='0'>Choose</option>";
			foreach($deh_ids as $s) {
	   			echo "<option value={$s['codes_for_dehs']['dehid']}>" . $s['codes_for_dehs']['deh'] . "</option>";
			}
		}else{		
			echo "<option value='0'>Choose</option>";
		}

		$this->autoRender = false;
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

	public function get_codes_for_school_building_owners()
	{
		$school_building_owners_tbl = $this->codes_for_school_building_owners1;
		$school_building_owner_ids = $school_building_owners_tbl->find(
			'list', array(
				'fields' => array(
					'OwnerID',
					'Owner'					
					)
				)
			);
		//debug(json_encode($cond_ids, JSON_PRETTY_PRINT));		exit();
		
		return $school_building_owner_ids;
	}

	public function reports201516($page = NULL)
	{
		if(empty($page))
		{
			$page = "2k1516";
		}
		static $year;
		if($page == "2k1516")
		{
			static $year = "2015";
		}elseif($page == "2k1415"){
			static $year = "2014";
		}

		$uname                            = $this->Session->read('Auth.User.username');
		$name                             = $this->Session->read('Auth.User.name');		
		
		$total_schools                    = $this->getSchoolsCount($year);	
		$boys_schools                     = $this->getBoysSchools($year);
		$girls_schools                    = $this->getGirlsSchools($year);
		$mixed_schools                    = $this->getMixedSchools($year);
		$functional_schools               = $this->getFunctionalSchools($year);
		$closed_temporary_schools         = $this->getClosedTemporarySchools($year);
		$closed_permanent_schools         = $this->getClosedPermanentSchools($year);
		//$elementary_enrollment            = $this->getElementaryEnrollment($year);
		//$secondary_enrollment             = $this->getSecondaryEnrollment($year);
		
		$total_schools2                   = $boys_schools + $girls_schools + $mixed_schools;
		
		$functional_schools_percent       = round(($functional_schools/$total_schools)*100);
		$closed_temporary_schools_percent = round(($closed_temporary_schools/$total_schools)*100);
		$closed_permanent_schools_percent = round(($closed_permanent_schools/$total_schools)*100);

		//$primary_enrollment = 

		
		$filled_forms_asc201516 = $this->Asc201516->find('all', array(
			'fields' => array(
				'school_semis_code'
				)
			)
		);

		$filled_forms_asc201516 = count($filled_forms_asc201516);		

		$this->set('uname', $uname);
		$this->set('name', $name);
		$this->set('total_schools', $total_schools);
		$this->set('total_boys_schools', $boys_schools);
		$this->set('total_girls_schools', $girls_schools);
		$this->set('total_mixed_schools', $mixed_schools);
		$this->set('total_schools2', $total_schools2);
		$this->set('functional_schools', $functional_schools);
		$this->set('closed_temporary_schools', $closed_temporary_schools);
		$this->set('closed_permanent_schools', $closed_permanent_schools);
		$this->set('functional_schools_percent', $functional_schools_percent);
		$this->set('closed_temporary_schools_percent', $closed_temporary_schools_percent);
		$this->set('closed_permanent_schools_percent', $closed_permanent_schools_percent);
		$this->set('filled_forms_asc201516', $filled_forms_asc201516);


		$this->layout = "reportsLayout";

		if (!empty($page)) {			
			if($page == '2k1516'){
				$this->render('reports201516/dashboard_2k1516');
			}
			if($page == '2k1415'){
				$this->render('reports201516/dashboard_2k1415');					
			}	
		}		
	}
	
	
	//================================================================================================//
	//Functions to be used by Reports201516 Action/Method. 
	//================================================================================================//
	
	public function getSchoolsCount($year) 
	{
		$tbl = "univ".$year;
		$total_schools = $this->$tbl->find('all', array(
			'fields' => array('school_semis_code')
			)
		);		

		return count($total_schools);
	}

	public function getBoysSchools($year)
	{
		$tbl = "univ".$year;
		$boys_schools = $this->$tbl->find('all', array(
			'conditions' => array(
				'univ2014.dsi_sch_gender' => 1
				),
			'fields' => array(
				'COUNT(*) AS count'
				)				
			)
		);
		
		return $boys_schools[0][0]['count'];
	}

	public function getGirlsSchools($year)
	{
		$tbl = "univ".$year;
		$girls_schools = $this->$tbl->find('all', array(
			'conditions' => array(
				'univ2014.dsi_sch_gender' => 2
				),
			'fields' => array(
				'COUNT(*) AS count'
				)				
			)
		);

		return $girls_schools[0][0]['count'];
	}

	public function getMixedSchools($year)
	{
		$tbl = "univ".$year;
		$mixed_schools = $this->$tbl->find('all', array(
			'conditions' => array(
				'univ2014.dsi_sch_gender' => 3
				),
			'fields' => array(
				'COUNT(*) AS count'
				)				
			)
		);

		return $mixed_schools[0][0]['count'];
	}

	public function getFunctionalSchools($year)
	{
		$tbl = "univ".$year;
		$functional_schools =  $this->$tbl->find('all', array(
			'conditions' => array(
				'univ2014.ss_status' => 1
				),
			'fields' => array(
				'COUNT(*) AS count'
				)
			)
		);
		return $functional_schools[0][0]['count']; 
	}

	public function getClosedTemporarySchools($year)
	{
		$tbl = "univ".$year;
		$closed_temporary_schools = $this->$tbl->find('all', array(
			'conditions' => array(
				'univ2014.ss_status' => 2
				),
			'fields' => array(
				'COUNT(*) AS count'
				)
			)
		);

		return $closed_temporary_schools[0][0]['count'];
		
	}

	public function getClosedPermanentSchools($year) 
	{
		$tbl = "univ".$year;
		$closed_permanent_schools = $this->$tbl->find('all', array(
			'conditions' => array(
				'univ2014.ss_status' => 3
				),
			'fields' => array(
				'COUNT(*) AS count'
				)
			)
		);

		return $closed_permanent_schools[0][0]['count'];
	}

	public function compare201516()
	{
		$schools = $this->Asc201516->query(
			'SELECT
				a.school_semis_code AS "A.SEMIS_CODE",
				a.bi_school_name AS "A.SCHOOL_NAME",
				a.ss_status_type AS "A.SCHOOL_CONDITION",
				a.ss_status AS "A.SCHOOL_STATUS",
				a.ss_closure_date AS "A.CLOSURE_DATE",
				a.ss_closure_reason AS "A.CLOSURE_REASON",
				a.ss_closure_major_reason_specify AS "A.CLOSURE_REASON_SPECIFY",
				a.dsi_level AS "A.LEVEL",
				a.dsi_sch_gender AS "A.GENDER",
				a.dsi_enrollment_total AS "A.ENROLLMENT",
				a.sbi_ownership AS "A.BUILDING",
				a.bfi_school_boundarywall AS "A.BOUNDARY_WALL",
				a.bfi_school_washroom AS "A.WASHROOM",
				a.bfi_school_functional_washrooms AS "A.FUNCTIONAL_WASHROOMS",
				a.bfi_school_nonfunctional_washrooms AS "A.NONFUNCTIONAL_WASHROOMS",
				a.bfi_school_waterfacility AS "A.DRINKING_WATER",
				a.bfi_school_electricity AS "A.ELECTRICITY",
				a.smc_functional AS "A.SMC",
				a.sch_textbooks_received AS "A.TEXTBOOKS",
				a.sch_received_girls_stipend AS "A.GIRLS_STIPEND",
				a.sti_total_teachers AS "A.TOTAL_TEACHERS",
				a.sti_total_nonteaching_staff AS "A.TOTAL_NONTEACHERS",
				m.semis_code AS "M.SEMIS_CODE",
				m.school_name AS "M.SCHOOL_NAME",
				m.conditions AS "M.SCHOOL_CONDITION",
				m.`status` AS "M.SCHOOL_STATUS",
				m.closure_dmy AS "M.CLOSURE_DATE",
				m.closure_major_reason AS "M.CLOSURE_REASON",
				m.closure_major_reason_specify AS "M.CLOSURE_REASON_SPECIFY",
				m.levels AS "M.LEVEL",
				m.genders AS "M.GENDER",
				m.total_enrollment AS "M.ENROLLMENT",
				m.own_govt_building AS "M.BUILDING",
				m.boundarywall AS "M.BOUNDARY_WALL",
				m.washroom AS "M.WASHROOM",
				m.functional_washrooms AS "M.FUNCTIONAL_WASHROOMS",
				m.nonfunctional_washrooms AS "M.NONFUNCTIONAL_WASHROOMS",
				m.waterfacilities AS "M.DRINKING_WATER",
				m.electricity AS "M.ELECTRICITY",
				m.smc_funds AS "M.SMC",
				m.free_textbooks AS "M.TEXTBOOKS",
				m.girls_stipend AS "M.GIRLS_STIPEND",
				m.total_teachers AS "M.TOTAL_TEACHERS",
				m.total_nonteaching_staff AS "M.TOTAL_NONTEACHERS"
			FROM
				asc201516s a,
				monitoring_forms201516s m
			WHERE
			a.school_semis_code = m.semis_code');
		
		$k = count($schools);		
		
		$overall_acc = 0;
		
		foreach ($schools as $key => $value) {
			$i=22;
			$j=0;
			$p=$key;

			$A_school_semis_code            = $value['a']["A.SEMIS_CODE"];
			$A_school_name                  = $value['a']["A.SCHOOL_NAME"];
			$A_school_condition             = $value['a']["A.SCHOOL_CONDITION"];
			$A_school_status                = $value['a']["A.SCHOOL_STATUS"];
			$A_closure_date                 = $value['a']["A.CLOSURE_DATE"];
			$A_closure_reason               = $value['a']["A.CLOSURE_REASON"];
			$A_closure_major_reason_specify = $value['a']["A.CLOSURE_REASON_SPECIFY"];
			$A_level                        = $value['a']["A.LEVEL"];
			$A_gender                       = $value['a']["A.GENDER"];
			$A_enrollment                   = $value['a']["A.ENROLLMENT"];
			$A_building                     = $value['a']["A.BUILDING"];
			$A_boundarywall                 = $value['a']["A.BOUNDARY_WALL"];
			$A_washroom                     = $value['a']["A.WASHROOM"];
			$A_functional_washrooms         = $value['a']["A.FUNCTIONAL_WASHROOMS"];
			$A_nonfunctional_washrooms      = $value['a']["A.NONFUNCTIONAL_WASHROOMS"];
			$A_waterfacility                = $value['a']["A.DRINKING_WATER"];
			$A_electricity                  = $value['a']["A.ELECTRICITY"];
			$A_smc                          = $value['a']["A.SMC"];
			$A_textbooks                    = $value['a']["A.TEXTBOOKS"];
			$A_girls_stipend                = $value['a']["A.GIRLS_STIPEND"];
			$A_total_teachers               = $value['a']["A.TOTAL_TEACHERS"];
			$A_total_nonteachers            = $value['a']["A.TOTAL_NONTEACHERS"];

			$M_school_semis_code            = $value['m']["M.SEMIS_CODE"];
			$M_school_name                  = $value['m']["M.SCHOOL_NAME"];
			$M_school_condition             = $value['m']["M.SCHOOL_CONDITION"];
			$M_school_status                = $value['m']["M.SCHOOL_STATUS"];
			$M_closure_date                 = $value['m']["M.CLOSURE_DATE"];
			$M_closure_reason               = $value['m']["M.CLOSURE_REASON"];
			$M_closure_major_reason_specify = $value['m']["M.CLOSURE_REASON_SPECIFY"];
			$M_level                        = $value['m']["M.LEVEL"];
			$M_gender                       = $value['m']["M.GENDER"];
			$M_enrollment                   = $value['m']["M.ENROLLMENT"];
			$M_building                     = $value['m']["M.BUILDING"];
			$M_boundarywall                 = $value['m']["M.BOUNDARY_WALL"];
			$M_washroom                     = $value['m']["M.WASHROOM"];
			$M_functional_washrooms         = $value['m']["M.FUNCTIONAL_WASHROOMS"];
			$M_nonfunctional_washrooms      = $value['m']["M.NONFUNCTIONAL_WASHROOMS"];
			$M_waterfacility                = $value['m']["M.DRINKING_WATER"];
			$M_electricity                  = $value['m']["M.ELECTRICITY"];
			$M_smc                          = $value['m']["M.SMC"];
			$M_textbooks                    = $value['m']["M.TEXTBOOKS"];
			$M_girls_stipend                = $value['m']["M.GIRLS_STIPEND"];
			$M_total_teachers               = $value['m']["M.TOTAL_TEACHERS"];
			$M_total_nonteachers            = $value['m']["M.TOTAL_NONTEACHERS"];

			if(strcmp($A_school_semis_code, $M_school_semis_code) == 0){
				//echo $A_school_semis_code. ' == ' . $M_school_semis_code .'<br>';
			}else{
				//echo 'NOT MATCHED<br>';
				$j += 1;
			}
			if(strcmp($A_school_name, $M_school_name) == 0){
				//echo 'MATCHED<br>';
			}else{
				//echo 'NOT MATCHED<br>';
				$j += 1;
			}
			if(strcmp($A_school_condition, $M_school_condition) == 0){
				//echo 'MATCHED<br>';
			}else{
				//echo 'NOT MATCHED<br>';
				$j += 1;
			}
			if(strcmp($A_closure_date, $M_closure_date) == 0){
				//echo 'MATCHED<br>';
			}else{
				//echo 'NOT MATCHED<br>';
				$j += 1;
			}
			if(strcmp($A_closure_reason, $M_closure_reason) == 0){
				//echo 'MATCHED<br>';
			}else{
				//echo 'NOT MATCHED<br>';
				$j += 1;
			}
			if(strcmp($A_closure_major_reason_specify, $M_closure_major_reason_specify) == 0){
				//echo 'MATCHED<br>';
			}else{
				//echo 'NOT MATCHED<br>';
				$j += 1;
			}
			if(strcmp($A_level, $M_level) == 0){
				//echo 'MATCHED<br>';
			}else{
				//echo 'NOT MATCHED<br>';
				$j += 1;
			}
			if(strcmp($A_gender, $M_gender) == 0){
				//echo 'MATCHED<br>';
			}else{
				//echo 'NOT MATCHED<br>';
				$j += 1;
			}
			if(strcmp($A_enrollment, $M_enrollment) == 0){
				//echo 'MATCHED<br>';
			}else{
				//echo 'NOT MATCHED<br>';
				$j += 1;
			}
			if(strcmp($A_building, $M_building) == 0){
				//echo 'MATCHED<br>';
			}else{
				//echo 'NOT MATCHED<br>';
				$j += 1;
			}
			if(strcmp($A_boundarywall, $M_boundarywall) == 0){
				//echo 'MATCHED<br>';
			}else{
				//echo 'NOT MATCHED<br>';
				$j += 1;
			}
			if(strcmp($A_washroom, $M_washroom) == 0){
				//echo 'MATCHED<br>';
			}else{
				//echo 'NOT MATCHED<br>';
				$j += 1;
			}
			if(strcmp($A_functional_washrooms, $M_functional_washrooms) == 0){
				//echo 'MATCHED<br>';
			}else{
				//echo 'NOT MATCHED<br>';
				$j += 1;
			}
			if(strcmp($A_nonfunctional_washrooms, $M_nonfunctional_washrooms) == 0){
				//echo 'MATCHED<br>';
			}else{
				//echo 'NOT MATCHED<br>';
				$j += 1;
			}
			if(strcmp($A_electricity, $M_electricity) == 0){
				//echo 'MATCHED<br>';
			}else{
				//echo 'NOT MATCHED<br>';
				$j += 1;
			}
			if(strcmp($A_smc, $M_smc) == 0){
				//echo 'MATCHED<br>';
			}else{
				//echo 'NOT MATCHED<br>';
				$j += 1;
			}
			if(strcmp($A_textbooks, $M_textbooks) == 0){
				//echo 'MATCHED<br>';
			}else{
				//echo 'NOT MATCHED<br>';
				$j += 1;
			}
			if(strcmp($A_girls_stipend, $M_girls_stipend) == 0){
				//echo 'MATCHED<br>';
			}else{
				//echo 'NOT MATCHED<br>';
				$j += 1;
			}
			if(strcmp($A_total_teachers, $M_total_teachers) == 0){
				//echo 'MATCHED<br>';
			}else{
				//echo 'NOT MATCHED<br>';
				$j += 1;
			}
			if(strcmp($A_total_nonteachers, $M_total_nonteachers) == 0){
				//echo 'MATCHED<br>';
			}else{
				//echo 'NOT MATCHED<br>';
				$j += 1;
			}
			$acc = round(($j/$i)*100);
			$acc = 100 - $acc;
			//echo "Data Accuracy for $A_school_semis_code = " . $acc . "%";			
			//echo "<hr>";			
			$overall_acc += $acc;
			
			$checksArr[$p]['semiscode']     = $A_school_semis_code;
			

		}

		$res = ($overall_acc/$k);
		//echo "Overall Accuracy = ". $res."%";
		$checksArr[$p]['data_acc']  = $acc; 
		//$checksArr['res']  = $res; 

		$this->set('checksArr', $checksArr);
		$this->set('res', $res);
	}

	/**
	 * Inconsistency checks function!
	 *
	 * @return void
	 * @author PrithviRaj Moorani
	 **/	
	public function run_inconsistencies($did = NULL, $sid = NULL)
	{
		//get district ID
		//$schools = $this->semis_universal201415s->find('all', array(
		$schools = $this->Asc201516->find('all', array(
			'conditions' => array(
				'Asc201516.bi_school_district' => $did,
				'Asc201516.final' => 1
				)
			)
		);
		//debug($schools);
		//$checksArr = array('semiscode'=>array('errors' =>array()));		
		foreach ($schools as $key => $value) {
			$i = $key;
		
			$semiscode   = $value['Asc201516']['school_semis_code'];
			$status_type = $value['Asc201516']['ss_status_type'];
			$status      = $value['Asc201516']['ss_status'];
			$ele_enr     = $value['Asc201516sEnrollment']['ele_total_boys_enrollment'] + $value['Asc201516sEnrollment']['ele_total_girls_enrollment'];
			$sec_enr     = $value['Asc201516sEnrollment']['sec_total_boys_enrollment'] + $value['Asc201516sEnrollment']['sec_total_girls_enrollment'];
			$hsec_enr    = $value['Asc201516sEnrollment']['hsec_total_boys_enrollment'] + $value['Asc201516sEnrollment']['hsec_total_girls_enrollment'];
			$total_enr   = $ele_enr + $sec_enr + $hsec_enr;
			
			$total_teachers                     = $value['Asc201516']['sti_total_teachers'];
			$total_nonteachers                  = $value['Asc201516']['sti_total_nonteaching_staff'];
			$total_staff                        = $total_teachers + $total_nonteachers;
			$teachers_count                     = count($value['Asc201516sTeacher']);
			$closure_date                       = $value['Asc201516']['ss_closure_date'];
			$closure_reason                     = $value['Asc201516']['ss_closure_reason'];
			$closure_major_reason               = $value['Asc201516']['ss_closure_major_reason_specify'];
			$dp_name                            = $value['Asc201516']['dp_name'];
			$dp_cnic                            = $value['Asc201516']['dp_cnic'];
			$dp_designation                     = $value['Asc201516']['dp_designation'];
			$dp_gender                          = $value['Asc201516']['dp_gender'];
			$dp_contact                         = $value['Asc201516']['dp_contact'];
			$dp_email                           = $value['Asc201516']['dp_email'];
			$campus                             = $value['Asc201516']['dsi_sch_campus'];
			$mergedSchools                      = $value['Asc201516']['dsi_sch_campus_merged_schools'];
			$medium_wise_enrQ9                  = $value['Asc201516']['dsi_enrollment_total'];
			$total_rooms                        = $value['Asc201516']['sbi_school_building_total_rooms'];
			$total_classrooms                   = $value['Asc201516']['sbi_school_building_class_rooms'];
			$washroom_facility                  = $value['Asc201516']['bfi_school_washroom'];
			$functional_washrooms               = $value['Asc201516']['bfi_school_functional_washrooms'];
			$nonfunctional_washrooms            = $value['Asc201516']['bfi_school_nonfunctional_washrooms'];
			$branched                           = $value['Asc201516']['sch_branched'];
			$branchedSchoolName                 = $value['Asc201516']['sch_branched_main_school_name'];
			$branchedSchoolSemis                = $value['Asc201516']['sch_branched_main_school_semis'];
			$ownership                          = $value['Asc201516']['sbi_ownership'];
			$shared_building_semis              = $value['Asc201516']['sbi_other_building_semiscode_specify'];
			$nobuilding_specify                 = $value['Asc201516']['sbi_other_nobuilding_specify'];
			$building_type                      = $value['Asc201516']['sbi_school_building_construction_type'];
			$building_condition                 = $value['Asc201516']['sbi_school_building_condition'];
			$building_other_than_learning       = $value['Asc201516']['sbi_school_building_other_than_learning'];
			$building_other_than_learning_rooms = $value['Asc201516']['sbi_school_building_other_than_learning_rooms'];
			$building_establishment_year        = $value['Asc201516']['sbi_school_building_construction_year'];
			$building_other_specify             = $value['Asc201516']['sbi_other_building_specify'];
			$medium                             = $value['Asc201516']['dsi_sch_medium'];
			$urdu_medium_enr                    = $value['Asc201516']['dsi_enrollment_urdu'];
			$sindhi_medium_enr                  = $value['Asc201516']['dsi_enrollment_sindhi'];
			$english_medium_enr                 = $value['Asc201516']['dsi_enrollment_english'];
			$asi_sch1_semis_code                = $value['Asc201516']['asi_sch1_semis_code'];
			$asi_sch1_name                      = $value['Asc201516']['asi_sch1_name'];
			$asi_sch1_type                      = $value['Asc201516']['asi_sch1_type'];
			$asi_sch1_distance                  = $value['Asc201516']['asi_sch1_distance'];
			
			$asi_sch2_semis_code                = $value['Asc201516']['asi_sch2_semis_code'];
			$asi_sch2_name                      = $value['Asc201516']['asi_sch2_name'];
			$asi_sch2_type                      = $value['Asc201516']['asi_sch2_type'];
			$asi_sch2_distance                  = $value['Asc201516']['asi_sch2_distance'];
			
			$asi_sch3_semis_code                = $value['Asc201516']['asi_sch3_semis_code'];
			$asi_sch3_name                      = $value['Asc201516']['asi_sch3_name'];
			$asi_sch3_type                      = $value['Asc201516']['asi_sch3_type'];
			$asi_sch3_distance                  = $value['Asc201516']['asi_sch3_distance'];
			
			$asi_sch4_semis_code                = $value['Asc201516']['asi_sch4_semis_code'];
			$asi_sch4_name                      = $value['Asc201516']['asi_sch4_name'];
			$asi_sch4_type                      = $value['Asc201516']['asi_sch4_type'];
			$asi_sch4_distance                  = $value['Asc201516']['asi_sch4_distance'];
			
			$girls_stipend                      = $value['Asc201516']['sch_received_girls_stipend'];
			$girls_stipend_enr                  = $value['Asc201516']['sch_received_girls_stipend_enrollment'];
			$girls_stipend_elig                 = $value['Asc201516']['sch_received_girls_stipend_eligible'];
			$girls_stipend_rec                  = $value['Asc201516']['sch_received_girls_stipend_received'];
			
			$sch_upgraded                       = $value['Asc201516']['sch_upgraded'];
			$sch_upgraded_level                 = $value['Asc201516']['sch_upgraded_level'];
			
			$sch_adopted                        = $value['Asc201516']['sch_adopted'];
			$sch_adopter_name                   = $value['Asc201516']['sch_adopter_name'];

			$sch_cc_ddo_code 					= $value['Asc201516']['sch_cc_ddo_code'];			

			//Class wise repeaters for boys
			$repeaters_class_four_boys   = $value['Asc201516sEnrollment']['repeaters_class_four_boys'];
			$repeaters_class_five_boys   = $value['Asc201516sEnrollment']['repeaters_class_five_boys'];
			$repeaters_class_six_boys    = $value['Asc201516sEnrollment']['repeaters_class_six_boys'];
			$repeaters_class_seven_boys  = $value['Asc201516sEnrollment']['repeaters_class_seven_boys'];
			$repeaters_class_eight_boys  = $value['Asc201516sEnrollment']['repeaters_class_eight_boys'];
			$repeaters_class_nine_boys   = $value['Asc201516sEnrollment']['repeaters_class_nine_boys'];
			$repeaters_class_ten_boys    = $value['Asc201516sEnrollment']['repeaters_class_ten_boys'];
			$repeaters_class_eleven_boys = $value['Asc201516sEnrollment']['repeaters_class_eleven_boys'];
			$repeaters_class_twelve_boys = $value['Asc201516sEnrollment']['repeaters_class_twelve_boys'];

			$repeaters_class_four_girls   = $value['Asc201516sEnrollment']['repeaters_class_four_girls'];
			$repeaters_class_five_girls   = $value['Asc201516sEnrollment']['repeaters_class_five_girls'];
			$repeaters_class_six_girls    = $value['Asc201516sEnrollment']['repeaters_class_six_girls'];
			$repeaters_class_seven_girls  = $value['Asc201516sEnrollment']['repeaters_class_seven_girls'];
			$repeaters_class_eight_girls  = $value['Asc201516sEnrollment']['repeaters_class_eight_girls'];
			$repeaters_class_nine_girls   = $value['Asc201516sEnrollment']['repeaters_class_nine_girls'];
			$repeaters_class_ten_girls    = $value['Asc201516sEnrollment']['repeaters_class_ten_girls'];
			$repeaters_class_eleven_girls = $value['Asc201516sEnrollment']['repeaters_class_eleven_girls'];
			$repeaters_class_twelve_girls = $value['Asc201516sEnrollment']['repeaters_class_twelve_girls'];

			//Total Repeaters
			$repeaters = $value['Asc201516sEnrollment']['repeaters_total_boys'] + $value['Asc201516sEnrollment']['repeaters_total_girls'];

			//Class wise absentees
			$absentees_class_ece = $value['Asc201516sEnrollment']['perm_class_ece_girls_absentees'] + $value['Asc201516sEnrollment']['perm_class_ece_boys_absentees'];
			$absentees_class_katchi = $value['Asc201516sEnrollment']['perm_class_katchi_girls_absentees'] + $value['Asc201516sEnrollment']['perm_class_katchi_boys_absentees'];
			$absentees_class_one = $value['Asc201516sEnrollment']['perm_class_one_girls_absentees'] + $value['Asc201516sEnrollment']['perm_class_one_boys_absentees'];
			$absentees_class_two = $value['Asc201516sEnrollment']['perm_class_two_girls_absentees'] + $value['Asc201516sEnrollment']['perm_class_two_boys_absentees'];
			$absentees_class_three = $value['Asc201516sEnrollment']['perm_class_three_girls_absentees'] + $value['Asc201516sEnrollment']['perm_class_three_boys_absentees'];
			$absentees_class_four = $value['Asc201516sEnrollment']['perm_class_four_girls_absentees'] + $value['Asc201516sEnrollment']['perm_class_four_boys_absentees'];
			$absentees_class_five = $value['Asc201516sEnrollment']['perm_class_five_girls_absentees'] + $value['Asc201516sEnrollment']['perm_class_five_boys_absentees'];
			$absentees_class_six = $value['Asc201516sEnrollment']['perm_class_six_girls_absentees'] + $value['Asc201516sEnrollment']['perm_class_six_boys_absentees'];
			$absentees_class_seven = $value['Asc201516sEnrollment']['perm_class_seven_girls_absentees'] + $value['Asc201516sEnrollment']['perm_class_seven_boys_absentees'];
			$absentees_class_eight = $value['Asc201516sEnrollment']['perm_class_eight_girls_absentees'] + $value['Asc201516sEnrollment']['perm_class_eight_boys_absentees'];
			$absentees_class_nine = $value['Asc201516sEnrollment']['perm_class_nine_girls_absentees'] + $value['Asc201516sEnrollment']['perm_class_nine_boys_absentees'];
			$absentees_class_ten = $value['Asc201516sEnrollment']['perm_class_ten_girls_absentees'] + $value['Asc201516sEnrollment']['perm_class_ten_boys_absentees'];
			$absentees_class_eleven = $value['Asc201516sEnrollment']['perm_class_eleven_girls_absentees'] + $value['Asc201516sEnrollment']['perm_class_eleven_boys_absentees'];
			$absentees_class_twelve = $value['Asc201516sEnrollment']['perm_class_twelve_girls_absentees'] + $value['Asc201516sEnrollment']['perm_class_twelve_boys_absentees'];
			
			//Total Absentees
			$absentees = $value['Asc201516sEnrollment']['perm_total_boys_absentees'] + $value['Asc201516sEnrollment']['perm_total_girls_absentees'];
			
			//Gender and level wise enrollments
			$ele_boys_enr    = $value['Asc201516sEnrollment']['ele_total_boys_enrollment'];
			$sec_boys_enr    = $value['Asc201516sEnrollment']['sec_total_boys_enrollment'];
			$hsec_boys_enr   = $value['Asc201516sEnrollment']['hsec_total_boys_enrollment'];
			$total_boys_enr  = $ele_boys_enr + $sec_boys_enr + $hsec_boys_enr;
			
			$ele_girls_enr   = $value['Asc201516sEnrollment']['ele_total_girls_enrollment'];
			$sec_girls_enr   = $value['Asc201516sEnrollment']['sec_total_girls_enrollment'];
			$hsec_girls_enr  = $value['Asc201516sEnrollment']['hsec_total_girls_enrollment'];
			$total_girls_enr = $ele_girls_enr + $sec_girls_enr + $hsec_girls_enr;
			
			//TOTAL ENROLLMENT
			$total_enr       = $total_boys_enr + $total_girls_enr;

			//Class wise enrollments for boys
			$ele_class_four_boys_enr  = $value['Asc201516sEnrollment']['ele_class_four_boys_enrollment'];
			$ele_class_five_boys_enr  = $value['Asc201516sEnrollment']['ele_class_five_boys_enrollment'];
			$ele_class_six_boys_enr   = $value['Asc201516sEnrollment']['ele_class_six_boys_enrollment'];
			$ele_class_seven_boys_enr = $value['Asc201516sEnrollment']['ele_class_seven_boys_enrollment'];
			$ele_class_eight_boys_enr = $value['Asc201516sEnrollment']['ele_class_eight_boys_enrollment'];

			$sec_class_nine_arts_boys_enr  = $value['Asc201516sEnrollment']['sec_class_nine_arts_boys_enrollment'];
			$sec_class_nine_comp_boys_enr  = $value['Asc201516sEnrollment']['sec_class_nine_comp_boys_enrollment'];
			$sec_class_nine_bio_boys_enr   = $value['Asc201516sEnrollment']['sec_class_nine_bio_boys_enrollment'];
			$sec_class_nine_comm_boys_enr  = $value['Asc201516sEnrollment']['sec_class_nine_comm_boys_enrollment'];
			$sec_class_nine_other_boys_enr = $value['Asc201516sEnrollment']['sec_class_nine_other_boys_enrollment'];

			$sec_class_nine_boys_enr = $sec_class_nine_arts_boys_enr + $sec_class_nine_bio_boys_enr + $sec_class_nine_comp_boys_enr + $sec_class_nine_comm_boys_enr + $sec_class_nine_other_boys_enr;

			$sec_class_ten_arts_boys_enr  = $value['Asc201516sEnrollment']['sec_class_ten_arts_boys_enrollment'];
			$sec_class_ten_comp_boys_enr  = $value['Asc201516sEnrollment']['sec_class_ten_comp_boys_enrollment'];
			$sec_class_ten_bio_boys_enr   = $value['Asc201516sEnrollment']['sec_class_ten_bio_boys_enrollment'];
			$sec_class_ten_comm_boys_enr  = $value['Asc201516sEnrollment']['sec_class_ten_comm_boys_enrollment'];
			$sec_class_ten_other_boys_enr = $value['Asc201516sEnrollment']['sec_class_ten_other_boys_enrollment'];

			$sec_class_ten_boys_enr = $sec_class_ten_arts_boys_enr + $sec_class_ten_bio_boys_enr + $sec_class_ten_comp_boys_enr + $sec_class_ten_comm_boys_enr + $sec_class_ten_other_boys_enr;

			
			$hsec_class_eleven_arts_boys_enr  = $value['Asc201516sEnrollment']['hsec_class_eleven_arts_boys_enrollment'];
			$hsec_class_eleven_comp_boys_enr  = $value['Asc201516sEnrollment']['hsec_class_eleven_comp_boys_enrollment'];
			$hsec_class_eleven_med_boys_enr   = $value['Asc201516sEnrollment']['hsec_class_eleven_med_boys_enrollment'];
			$hsec_class_eleven_eng_boys_enr   = $value['Asc201516sEnrollment']['hsec_class_eleven_eng_boys_enrollment'];			
			$hsec_class_eleven_comm_boys_enr  = $value['Asc201516sEnrollment']['hsec_class_eleven_comm_boys_enrollment'];
			$hsec_class_eleven_other_boys_enr = $value['Asc201516sEnrollment']['hsec_class_eleven_other_boys_enrollment'];
			
			$hsec_class_eleven_boys_enr       = $hsec_class_eleven_arts_boys_enr + $hsec_class_eleven_comp_boys_enr + $hsec_class_eleven_med_boys_enr + $hsec_class_eleven_eng_boys_enr + $hsec_class_eleven_comm_boys_enr + $hsec_class_eleven_other_boys_enr;

			$hsec_class_twelve_arts_boys_enr  = $value['Asc201516sEnrollment']['hsec_class_twelve_arts_boys_enrollment'];
			$hsec_class_twelve_comp_boys_enr  = $value['Asc201516sEnrollment']['hsec_class_twelve_comp_boys_enrollment'];
			$hsec_class_twelve_med_boys_enr   = $value['Asc201516sEnrollment']['hsec_class_twelve_med_boys_enrollment'];
			$hsec_class_twelve_eng_boys_enr   = $value['Asc201516sEnrollment']['hsec_class_twelve_eng_boys_enrollment'];
			$hsec_class_twelve_comm_boys_enr  = $value['Asc201516sEnrollment']['hsec_class_twelve_comm_boys_enrollment'];
			$hsec_class_twelve_other_boys_enr = $value['Asc201516sEnrollment']['hsec_class_twelve_other_boys_enrollment'];
			
			$hsec_class_twelve_boys_enr       = $hsec_class_twelve_arts_boys_enr + $hsec_class_twelve_comp_boys_enr + $hsec_class_twelve_med_boys_enr + $hsec_class_twelve_eng_boys_enr + $hsec_class_twelve_comm_boys_enr + $hsec_class_twelve_other_boys_enr;


			//Class wise enrollments for girls
			$ele_class_four_girls_enr  = $value['Asc201516sEnrollment']['ele_class_four_girls_enrollment'];
			$ele_class_five_girls_enr  = $value['Asc201516sEnrollment']['ele_class_five_girls_enrollment'];
			$ele_class_six_girls_enr   = $value['Asc201516sEnrollment']['ele_class_six_girls_enrollment'];
			$ele_class_seven_girls_enr = $value['Asc201516sEnrollment']['ele_class_seven_girls_enrollment'];
			$ele_class_eight_girls_enr = $value['Asc201516sEnrollment']['ele_class_eight_girls_enrollment'];

			$sec_class_nine_arts_girls_enr  = $value['Asc201516sEnrollment']['sec_class_nine_arts_girls_enrollment'];
			$sec_class_nine_comp_girls_enr  = $value['Asc201516sEnrollment']['sec_class_nine_comp_girls_enrollment'];
			$sec_class_nine_bio_girls_enr   = $value['Asc201516sEnrollment']['sec_class_nine_bio_girls_enrollment'];
			$sec_class_nine_comm_girls_enr  = $value['Asc201516sEnrollment']['sec_class_nine_comm_girls_enrollment'];
			$sec_class_nine_other_girls_enr = $value['Asc201516sEnrollment']['sec_class_nine_other_girls_enrollment'];

			$sec_class_nine_girls_enr = $sec_class_nine_arts_girls_enr + $sec_class_nine_bio_girls_enr + $sec_class_nine_comp_girls_enr + $sec_class_nine_comm_girls_enr + $sec_class_nine_other_girls_enr;

			$sec_class_ten_arts_girls_enr  = $value['Asc201516sEnrollment']['sec_class_ten_arts_girls_enrollment'];
			$sec_class_ten_comp_girls_enr  = $value['Asc201516sEnrollment']['sec_class_ten_comp_girls_enrollment'];
			$sec_class_ten_bio_girls_enr   = $value['Asc201516sEnrollment']['sec_class_ten_bio_girls_enrollment'];
			$sec_class_ten_comm_girls_enr  = $value['Asc201516sEnrollment']['sec_class_ten_comm_girls_enrollment'];
			$sec_class_ten_other_girls_enr = $value['Asc201516sEnrollment']['sec_class_ten_other_girls_enrollment'];

			$sec_class_ten_girls_enr = $sec_class_ten_arts_girls_enr + $sec_class_ten_bio_girls_enr + $sec_class_ten_comp_girls_enr + $sec_class_ten_comm_girls_enr + $sec_class_ten_other_girls_enr;

			
			$hsec_class_eleven_arts_girls_enr  = $value['Asc201516sEnrollment']['hsec_class_eleven_arts_girls_enrollment'];
			$hsec_class_eleven_comp_girls_enr  = $value['Asc201516sEnrollment']['hsec_class_eleven_comp_girls_enrollment'];
			$hsec_class_eleven_med_girls_enr   = $value['Asc201516sEnrollment']['hsec_class_eleven_med_girls_enrollment'];
			$hsec_class_eleven_eng_girls_enr   = $value['Asc201516sEnrollment']['hsec_class_eleven_eng_girls_enrollment'];			
			$hsec_class_eleven_comm_girls_enr  = $value['Asc201516sEnrollment']['hsec_class_eleven_comm_girls_enrollment'];
			$hsec_class_eleven_other_girls_enr = $value['Asc201516sEnrollment']['hsec_class_eleven_other_girls_enrollment'];
			
			$hsec_class_eleven_girls_enr       = $hsec_class_eleven_arts_girls_enr + $hsec_class_eleven_comp_girls_enr + $hsec_class_eleven_med_girls_enr + $hsec_class_eleven_eng_girls_enr + $hsec_class_eleven_comm_girls_enr + $hsec_class_eleven_other_girls_enr;

			$hsec_class_twelve_arts_girls_enr  = $value['Asc201516sEnrollment']['hsec_class_twelve_arts_girls_enrollment'];
			$hsec_class_twelve_comp_girls_enr  = $value['Asc201516sEnrollment']['hsec_class_twelve_comp_girls_enrollment'];
			$hsec_class_twelve_med_girls_enr   = $value['Asc201516sEnrollment']['hsec_class_twelve_med_girls_enrollment'];
			$hsec_class_twelve_eng_girls_enr   = $value['Asc201516sEnrollment']['hsec_class_twelve_eng_girls_enrollment'];
			$hsec_class_twelve_comm_girls_enr  = $value['Asc201516sEnrollment']['hsec_class_twelve_comm_girls_enrollment'];
			$hsec_class_twelve_other_girls_enr = $value['Asc201516sEnrollment']['hsec_class_twelve_other_girls_enrollment'];
			
			$hsec_class_twelve_girls_enr       = $hsec_class_twelve_arts_girls_enr + $hsec_class_twelve_comp_girls_enr + $hsec_class_twelve_med_girls_enr + $hsec_class_twelve_eng_girls_enr + $hsec_class_twelve_comm_girls_enr + $hsec_class_twelve_other_girls_enr;


			//Class wise enrollments for both boys and girls
			$ele_class_ece_enr = $value['Asc201516sEnrollment']['ele_class_ece_boys_enrollment'] + $value['Asc201516sEnrollment']['ele_class_ece_girls_enrollment'];
			$ele_class_katchi_enr = $value['Asc201516sEnrollment']['ele_class_katchi_boys_enrollment'] + $value['Asc201516sEnrollment']['ele_class_katchi_girls_enrollment'];
			$ele_class_one_enr = $value['Asc201516sEnrollment']['ele_class_one_boys_enrollment'] + $value['Asc201516sEnrollment']['ele_class_one_girls_enrollment'];
			$ele_class_two_enr = $value['Asc201516sEnrollment']['ele_class_two_boys_enrollment'] + $value['Asc201516sEnrollment']['ele_class_two_girls_enrollment'];
			$ele_class_three_enr = $value['Asc201516sEnrollment']['ele_class_three_boys_enrollment'] + $value['Asc201516sEnrollment']['ele_class_three_girls_enrollment'];
			$ele_class_four_enr = $value['Asc201516sEnrollment']['ele_class_four_boys_enrollment'] + $value['Asc201516sEnrollment']['ele_class_four_girls_enrollment'];
			$ele_class_five_enr = $value['Asc201516sEnrollment']['ele_class_five_boys_enrollment'] + $value['Asc201516sEnrollment']['ele_class_five_girls_enrollment'];
			$ele_class_six_enr = $value['Asc201516sEnrollment']['ele_class_six_boys_enrollment'] + $value['Asc201516sEnrollment']['ele_class_six_girls_enrollment'];
			$ele_class_seven_enr = $value['Asc201516sEnrollment']['ele_class_seven_boys_enrollment'] + $value['Asc201516sEnrollment']['ele_class_seven_girls_enrollment'];
			$ele_class_eight_enr = $value['Asc201516sEnrollment']['ele_class_eight_boys_enrollment'] + $value['Asc201516sEnrollment']['ele_class_eight_girls_enrollment'];

			//Total Enrollment for Elementary, Secondary & Higher Secondary 
			$ele_enr  = $value['Asc201516sEnrollment']['ele_total_boys_enrollment'] + $value['Asc201516sEnrollment']['ele_total_girls_enrollment'];
			$sec_enr  = $value['Asc201516sEnrollment']['sec_total_boys_enrollment'] + $value['Asc201516sEnrollment']['sec_total_girls_enrollment'];
			$hsec_enr = $value['Asc201516sEnrollment']['hsec_total_boys_enrollment'] + $value['Asc201516sEnrollment']['hsec_total_girls_enrollment'];
			//PRIMARY ENROLLMENT
			$primary_enrollment    = $ele_class_katchi_enr + $ele_class_ece_enr + $ele_class_one_enr + $ele_class_two_enr + $ele_class_three_enr + $ele_class_four_enr + $ele_class_five_enr;
			
			$middle_enrollment     = $ele_class_six_enr + $ele_class_seven_enr + $ele_class_eight_enr;
			
			$elementary_enrollment = $ele_class_katchi_enr + $ele_class_ece_enr + $ele_class_one_enr + $ele_class_two_enr + $ele_class_three_enr + $ele_class_four_enr + $ele_class_five_enr + $ele_class_six_enr + $ele_class_seven_enr + $ele_class_eight_enr;
			
			$secondary_enrollment  = $sec_class_nine_girls_enr + $sec_class_nine_boys_enr + $sec_class_ten_girls_enr + $sec_class_ten_boys_enr;
			
			$hsecondary_enrollment = $hsec_class_eleven_girls_enr + $hsec_class_eleven_boys_enr + $hsec_class_twelve_girls_enr + $hsec_class_twelve_boys_enr;

			//LEVEL, ADMINISTRATION AND GENDER!
			$level          = $value['Asc201516']['dsi_level'];
			$administration = $value['Asc201516']['dsi_sch_administration'];
			$gender         = $value['Asc201516']['dsi_sch_gender'];			

			//echo $value['Asc201516']['school_semis_code']. ' status = '. $status . ' teachers = ' . $total_teachers .' enr = ' . $total_enr;
			//echo $value['Asc201516']['school_semis_code']. ' closure_reason = '. $closure_reason . ' major_reason = ' . $closure_major_reason;
			//echo $value['Asc201516']['school_semis_code']. ' status = ' . $status . ' closure_date = '. $closure_date;
			//echo $value['Asc201516']['school_semis_code']. ' status = ' . $status . ' repeaters = '. $repeaters . ' absentees = ' . $absentees;
			//echo $value['Asc201516']['school_semis_code']. ' level = ' . $level . ' ele_enr = '. $ele_enr . ' sec_enr = ' . $sec_enr .' hsec_enr = '. $hsec_enr;
			//echo $value['Asc201516']['school_semis_code']. 'level = '. $level . ' ece = '.$ele_class_ece_enr . ' katchi = ' . $ele_class_katchi_enr . 
			//' one = '. $ele_class_one_enr . ' two = ' . $ele_class_two_enr .' three = '.$ele_class_three_enr . ' four = '. $ele_class_four_enr .
			//' five = '. $ele_class_five_enr . ' six = '.$ele_class_six_enr . ' seven = '.$ele_class_seven_enr .' eight = '. $ele_class_eight_enr;
			//echo $value['Asc201516']['school_semis_code']. 'level = '. $level . ' administration = ' . $administration;
			//echo $value['Asc201516']['school_semis_code']. 'gender = '. $gender . ' administration = ' . $administration;
			//echo $value['Asc201516']['school_semis_code']. 'detail status = ' . $status_type . 'gender = '. $gender . ' enrollment_boys = ' . $total_boys_enr;
			//echo $value['Asc201516']['school_semis_code']. 'detail status = ' . $status_type . 'gender = '. $gender . ' enrollment_girls = ' . $total_girls_enr;
			//echo $value['Asc201516']['school_semis_code']. ' detail status = ' . $status_type . ' repeaters = '. $repeaters . ' absentees = ' . $absentees;
			//echo $value['Asc201516']['school_semis_code']. ' class 4 repeaters boys =  ' . $repeaters_class_four_boys . '   class 4 enr boys = '. $ele_class_four_enr;
			//echo $value['Asc201516']['school_semis_code']. ' class 5 repeaters boys =  ' . $repeaters_class_five_boys . '   class 5 enr boys = '. $ele_class_five_boys_enr;
			//echo $value['Asc201516']['school_semis_code']. ' absentees =  ' . $absentees . '   ele = '. $ele_enr . ' sec = ' . $sec_enr . ' hsec = '. $hsec_enr;
			//echo $value['Asc201516']['school_semis_code']. ' level =  ' . $level . '   ele = '. $ele_enr . ' sec = ' . $sec_enr . ' hsec = '. $hsec_enr;
			//echo $value['Asc201516']['school_semis_code']. ' status =  ' . $status . ' yoc = ' . $building_establishment_year;
			//echo $value['Asc201516']['school_semis_code']. ' ownrshp =  ' . $ownership . ' nobuilding_specify = ' . $nobuilding_specify;
			//echo $value['Asc201516']['school_semis_code']. ' <br>level =  ' . $level . ' <br>medenr= ' . $medium_wise_enrQ9.'<br> restENr='.$x = ($elementary_enrollment+$secondary_enrollment+$hsecondary_enrollment);
			//echo $value['Asc201516']['school_semis_code'] . ' level='.$level.' gender. = '.$gender .' girls_stipend= ' . $girls_stipend .' girls_stipend_enr= '.$girls_stipend_enr .' elig = '. $girls_stipend_elig. ' rec = '. $girls_stipend_rec;
			$semis_code = $value['Asc201516']['school_semis_code'];
			//echo $semis_code;

			$A8  = $this->A8($semiscode, $status_type, $status);
			$A9  = $this->A9($semiscode, $status_type, $status);
			$A1  = $this->A1($status, $total_enr);
			$A2  = $this->A2($status, $total_enr, $total_teachers);
			$A3  = $this->A3($status, $total_enr, $total_staff);
			$A4  = $this->A4($closure_reason, $status);
			$A5  = $this->A5($status, $closure_date);
			$A6  = $this->A6($status, $dp_name, $dp_cnic, $dp_designation, $dp_gender, $dp_contact, $dp_email);
			$A7  = $this->A7($status, $total_teachers, $total_nonteachers);
			$A10 = $this->A10($status, $repeaters, $absentees);
			
			$B6  = $this->B6($level, $middle_enrollment);
			$B6_1  = $this->B6_1($level, $ele_class_ece_enr, $ele_class_katchi_enr, $ele_class_one_enr, $ele_class_two_enr, $ele_class_three_enr, $ele_class_four_enr, $ele_class_five_enr, $ele_class_six_enr, 
				$ele_class_seven_enr, $ele_class_eight_enr);
			$B7  = $this->B7($level, $ele_class_six_enr, $ele_class_seven_enr, $ele_class_eight_enr);
			$B2  = $this->B2($level, $sec_enr);
			$B1  = $this->B1($level, $hsec_enr);
			$B8  = $this->B8($level, $ele_class_six_enr, $ele_class_seven_enr, $ele_class_eight_enr);
			$B9  = $this->B9($level, $ele_class_ece_enr, $ele_class_katchi_enr, $ele_class_one_enr, $ele_class_two_enr, $ele_class_two_enr, $ele_class_three_enr, $ele_class_four_enr, $ele_class_five_enr);			
			$B10 = $this->B10($level, $ele_class_ece_enr, $ele_class_katchi_enr, $ele_class_one_enr, $ele_class_two_enr, $ele_class_two_enr, $ele_class_three_enr, $ele_class_four_enr, $ele_class_five_enr);						
			$B3 = $this->B3($level, $administration);
			$B4 = $this->B4($level, $administration);
			$B5 = $this->B5($gender, $administration);
			
			$C1  = $this->C1($status_type, $gender, $total_boys_enr);
			$C2  = $this->C2($status_type, $gender, $total_girls_enr);
			$C3  = $this->C3($status_type, $gender, $total_enr);
			$C4  = $this->C4($status_type, $repeaters, $absentees);
			
			$D4  = $this->D4($ele_class_four_boys_enr, $repeaters_class_four_boys);
			$D5  = $this->D5($ele_class_five_boys_enr, $repeaters_class_five_boys);
			$D6  = $this->D6($ele_class_six_boys_enr, $repeaters_class_six_boys);
			$D7  = $this->D7($ele_class_seven_boys_enr, $repeaters_class_seven_boys);
			$D8  = $this->D8($ele_class_eight_boys_enr, $repeaters_class_eight_boys);
			$D9  = $this->D9($sec_class_nine_boys_enr, $repeaters_class_nine_boys);
			$D10 = $this->D10($sec_class_ten_boys_enr, $repeaters_class_ten_boys);
			$D11 = $this->D11($hsec_class_eleven_boys_enr, $repeaters_class_eleven_boys);
			$D12 = $this->D12($hsec_class_twelve_boys_enr, $repeaters_class_twelve_boys);
			$D16 = $this->D16($ele_class_four_girls_enr, $repeaters_class_four_girls);
			$D17 = $this->D17($ele_class_five_girls_enr, $repeaters_class_five_girls);
			$D18 = $this->D18($ele_class_six_girls_enr, $repeaters_class_six_girls);
			$D19 = $this->D19($ele_class_seven_girls_enr, $repeaters_class_seven_girls);
			$D20 = $this->D20($ele_class_eight_girls_enr, $repeaters_class_eight_girls);
			$D21 = $this->D21($sec_class_nine_girls_enr, $repeaters_class_nine_girls);
			$D22 = $this->D22($sec_class_ten_girls_enr, $repeaters_class_ten_girls);
			$D23 = $this->D23($hsec_class_eleven_girls_enr, $repeaters_class_eleven_girls);
			$D24 = $this->D24($hsec_class_twelve_girls_enr, $repeaters_class_twelve_girls);

			$E1 = $this->E1($absentees, $ele_enr, $sec_enr, $hsec_enr);
			$E2 = $this->E2($level, $absentees_class_six, $absentees_class_seven, $absentees_class_eight, $absentees_class_nine, $absentees_class_ten, $absentees_class_eleven, $absentees_class_twelve);
			$E3 = $this->E3($level, $absentees_class_ece, $absentees_class_katchi, $absentees_class_one, $absentees_class_two, $absentees_class_three, $absentees_class_four, $absentees_class_five);
			$E4 = $this->E4($level, $absentees_class_eight, $absentees_class_nine, $absentees_class_ten, $absentees_class_eleven, $absentees_class_twelve);
			$E5 = $this->E5($level, $absentees_class_ece, $absentees_class_katchi, $absentees_class_eleven, $absentees_class_twelve);
			//$E6 = $this->E6($level, $absentees_class_ece, $absentees_class_katchi, $absentees_class_eleven, $absentees_class_twelve);
			$E6 = $this->E6($level, $absentees_class_ece, $absentees_class_katchi);

			$F1 = $this->F1($campus, $mergedSchools);
			$F2 = $this->F2($campus, $medium_wise_enrQ9);
			$F3 = $this->F3($campus, $total_teachers, $total_nonteachers);
			$F4 = $this->F4($campus, $total_rooms, $total_classrooms);
			$F5 = $this->F5($campus, $washroom_facility, $functional_washrooms, $nonfunctional_washrooms);
			
			$I1 = $this->I1($branched, $branchedSchoolSemis, $branchedSchoolName);

			$J1  = $this->J1($ownership, $shared_building_semis);
			$J2  = $this->J2($ownership, $nobuilding_specify);
			$J3  = $this->J3($ownership, $building_type);
			$J4  = $this->J4($ownership, $building_condition);
			$J5  = $this->J5($ownership, $total_rooms);
			$J6  = $this->J6($ownership, $building_other_than_learning);
			$J7  = $this->J7($status, $building_establishment_year);
			$J8  = $this->J8($ownership, $building_other_specify);
			$J14 = $this->J14($total_rooms, $total_classrooms);
			$J15 = $this->J15($ownership, $nobuilding_specify, $building_condition, $total_rooms, $total_classrooms, $building_other_than_learning, $building_other_than_learning_rooms);

			$K1 = $this->K1($washroom_facility, $functional_washrooms, $nonfunctional_washrooms);
			$K2 = $this->K2($ownership, $nobuilding_specify, $washroom_facility, $functional_washrooms, $nonfunctional_washrooms);

			$L1 = $this->L1($dp_cnic, $value['Asc201516sTeacher']);
			
			$gender2  = $this->asc201516s_teachers->find('first', array(
				'conditions' => array(
					'teachers_cnic' => $dp_cnic
					),
				'fields' => array(
					'teachers_gender'
					)
				)
			);
			$gender2 = $gender2['asc201516s_teachers']['teachers_gender'];

			$P2 = $this->P2($dp_cnic, $dp_gender, $gender2);

			$U2 = $this->U2($closure_reason, $total_teachers);
			$U3 = $this->U3($closure_reason, $total_enr);

			$W1 = $this->W1($medium, $status, $urdu_medium_enr);
			$W2 = $this->W2($medium, $status, $sindhi_medium_enr);
			$W3 = $this->W3($medium, $status, $english_medium_enr);
			$W4 = $this->W4($level, $medium_wise_enrQ9, $primary_enrollment);
			$W5 = $this->W5($level, $medium_wise_enrQ9, $elementary_enrollment, $secondary_enrollment, $hsecondary_enrollment);
			$W6 = $this->W6($status_type, $status, $medium_wise_enrQ9);

			$Y1   = $this->Y1($total_teachers, $teachers_count);
			$Y2_1 = $this->Y2_1($asi_sch1_semis_code, $asi_sch1_name, $asi_sch1_type, $asi_sch1_distance);
			$Y2_2 = $this->Y2_2($asi_sch2_semis_code, $asi_sch2_name, $asi_sch2_type, $asi_sch2_distance);
			$Y2_3 = $this->Y2_3($asi_sch3_semis_code, $asi_sch3_name, $asi_sch3_type, $asi_sch3_distance);
			$Y2_4 = $this->Y2_4($asi_sch4_semis_code, $asi_sch4_name, $asi_sch4_type, $asi_sch4_distance);

			$Z1 = $this->Z1($girls_stipend, $girls_stipend_enr, $girls_stipend_elig, $girls_stipend_rec);
			$Z2 = $this->Z2($level, $gender, $girls_stipend);
			$Z3 = $this->Z3($level, $gender, $girls_stipend, $girls_stipend_enr, $girls_stipend_elig, $girls_stipend_rec);
			$Z4 = $this->Z4($level, $gender, $girls_stipend, $girls_stipend_enr, $girls_stipend_elig, $girls_stipend_rec);
			$Z5 = $this->Z5($level, $gender, $girls_stipend, $girls_stipend_enr, $girls_stipend_elig, $girls_stipend_rec);
			$Z6 = $this->Z6($sch_upgraded, $sch_upgraded_level);
			$Z7 = $this->Z7($sch_adopted, $sch_adopter_name);
			$Z8 = $this->Z8($sch_cc_ddo_code);			

			foreach ($value['Asc201516sTeacher'] as $key => $v) {
				$teachers_post_type             = $v['teachers_post_type'];
				$teachers_personnel             = $v['teachers_personnel'];
				$bps_appointment                = $v['teachers_appointment_bps'];
				$bps_timescale                  = $v['teachers_time_scale_bps'];
				$bps_actualscale                = $v['teachers_actual_scale_bps'];
				$teachers_designation_type      = $v['teachers_designation'];
				$teachers_highest_qualification = $v['teachers_highest_qualification'];

				$AA2    = $this->AA2($teachers_post_type, $teachers_personnel);
				$AA3    = $this->AA3($teachers_post_type, $teachers_personnel);
				$AA4    = $this->AA4($teachers_personnel, $bps_appointment, $bps_timescale, $bps_actualscale);
				$AA5    = $this->AA5($teachers_designation_type, $teachers_personnel);
				$AA6    = $this->AA6($level, $teachers_designation_type);
				$AA7    = $this->AA7($level, $teachers_post_type);
				$AA8    = $this->AA8($teachers_post_type, $level);
				$AA9    = $this->AA9($level, $teachers_designation_type);
				$AA10   = $this->AA10($level, $teachers_designation_type);
				//$AA10 = $this->AA11($level, $teachers_highest_qualification);
				$AA12   = $this->AA12($teachers_designation_type, $teachers_post_type);				
			}			

			$checksArr[$i]['semiscode']     = $semis_code;
			$checksArr[$i]['errors']['A1']  = $A1; 
			$checksArr[$i]['errors']['A2']  = $A2;
			$checksArr[$i]['errors']['A3']  = $A3;
			$checksArr[$i]['errors']['A4']  = $A4;
			$checksArr[$i]['errors']['A5']  = $A5;
			$checksArr[$i]['errors']['A6']  = $A6;
			$checksArr[$i]['errors']['A7']  = $A7;
			$checksArr[$i]['errors']['A8']  = $A8;
			$checksArr[$i]['errors']['A9']  = $A9;
			$checksArr[$i]['errors']['A10'] = $A10;
			$checksArr[$i]['errors']['B1']  = $B1;
			$checksArr[$i]['errors']['B2']  = $B2;
			$checksArr[$i]['errors']['B3']  = $B3;
			$checksArr[$i]['errors']['B4']  = $B4;
			$checksArr[$i]['errors']['B5']  = $B5;
			$checksArr[$i]['errors']['B6']  = $B6;
			$checksArr[$i]['errors']['B7']  = $B7;
			$checksArr[$i]['errors']['B8']  = $B8;
			$checksArr[$i]['errors']['B9']  = $B9;
			$checksArr[$i]['errors']['B10'] = $B10;					
			$checksArr[$i]['errors']['C1']  = $C1;
			$checksArr[$i]['errors']['C2']  = $C2;
			$checksArr[$i]['errors']['C3']  = $C3;
			$checksArr[$i]['errors']['C4']  = $C4;
			
			$checksArr[$i]['errors']['D4']  = $D4;
			$checksArr[$i]['errors']['D5']  = $D5;
			$checksArr[$i]['errors']['D6']  = $D6;
			$checksArr[$i]['errors']['D7']  = $D7;
			$checksArr[$i]['errors']['D8']  = $D8;
			$checksArr[$i]['errors']['D9']  = $D9;
			$checksArr[$i]['errors']['D10'] = $D10;
			$checksArr[$i]['errors']['D11'] = $D11;
			$checksArr[$i]['errors']['D12'] = $D12;			
			$checksArr[$i]['errors']['D16'] = $D16;
			$checksArr[$i]['errors']['D17'] = $D17;
			$checksArr[$i]['errors']['D18'] = $D18;
			$checksArr[$i]['errors']['D19'] = $D19;
			$checksArr[$i]['errors']['D20'] = $D20;
			$checksArr[$i]['errors']['D21'] = $D21;
			$checksArr[$i]['errors']['D22'] = $D22;
			$checksArr[$i]['errors']['D23'] = $D23;
			$checksArr[$i]['errors']['D24'] = $D24;
			
			$checksArr[$i]['errors']['E1']  = $E1;
			$checksArr[$i]['errors']['E2']  = $E2;
			$checksArr[$i]['errors']['E3']  = $E3;
			$checksArr[$i]['errors']['E4']  = $E4;
			$checksArr[$i]['errors']['E5']  = $E5;
			$checksArr[$i]['errors']['E6']  = $E6;
			//$checksArr[$i]['errors']['E7']  = $E7;
			
			$checksArr[$i]['errors']['F1']  = $F1;
			$checksArr[$i]['errors']['F2']  = $F2;
			$checksArr[$i]['errors']['F3']  = $F3;
			$checksArr[$i]['errors']['F4']  = $F4;
			$checksArr[$i]['errors']['F5']  = $F5;
			
			$checksArr[$i]['errors']['I1']  = $I1;
			
			$checksArr[$i]['errors']['J1']  = $J1;
			$checksArr[$i]['errors']['J2']  = $J2;
			$checksArr[$i]['errors']['J3']  = $J3;
			$checksArr[$i]['errors']['J4']  = $J4;
			$checksArr[$i]['errors']['J5']  = $J5;
			$checksArr[$i]['errors']['J6']  = $J6;
			$checksArr[$i]['errors']['J7']  = $J7;
			$checksArr[$i]['errors']['J8']  = $J8;
			$checksArr[$i]['errors']['J14'] = $J14;
			$checksArr[$i]['errors']['J15'] = $J15;
			
			$checksArr[$i]['errors']['K1']  = $K1;
			$checksArr[$i]['errors']['K2']  = $K2;
			
			$checksArr[$i]['errors']['L1']  = $L1;

			$checksArr[$i]['errors']['P2']  = $P2;

			$checksArr[$i]['errors']['U2']  = $U2;
			$checksArr[$i]['errors']['U3']  = $U3;

			$checksArr[$i]['errors']['W1']  = $W1;
			$checksArr[$i]['errors']['W2']  = $W2;
			$checksArr[$i]['errors']['W3']  = $W3;			
			$checksArr[$i]['errors']['W4']  = $W4;
			$checksArr[$i]['errors']['W5']  = $W5;
			$checksArr[$i]['errors']['W6']  = $W6;

			$checksArr[$i]['errors']['Y1']  = $Y1;
			$checksArr[$i]['errors']['Y2_1']  = $Y2_1;
			$checksArr[$i]['errors']['Y2_2']  = $Y2_2;
			$checksArr[$i]['errors']['Y2_3']  = $Y2_3;
			$checksArr[$i]['errors']['Y2_4']  = $Y2_4;

			$checksArr[$i]['errors']['Z1']  = $Z1;
			$checksArr[$i]['errors']['Z2']  = $Z2;
			$checksArr[$i]['errors']['Z3']  = $Z3;
			$checksArr[$i]['errors']['Z4']  = $Z4;
			$checksArr[$i]['errors']['Z5']  = $Z5;
			$checksArr[$i]['errors']['Z6']  = $Z6;
			$checksArr[$i]['errors']['Z7']  = $Z7;
			$checksArr[$i]['errors']['Z8']  = $Z8;
			
			$checksArr[$i]['errors']['AA2']  = @$AA2;			
			$checksArr[$i]['errors']['AA3']  = @$AA3;			
			$checksArr[$i]['errors']['AA4']  = @$AA4;			
			$checksArr[$i]['errors']['AA5']  = @$AA5;			
			$checksArr[$i]['errors']['AA6']  = @$AA6;			
			$checksArr[$i]['errors']['AA7']  = @$AA7;			
			$checksArr[$i]['errors']['AA8']  = @$AA8;			
			$checksArr[$i]['errors']['AA9']  = @$AA9;			
			$checksArr[$i]['errors']['AA10']  = @$AA10;			
			$checksArr[$i]['errors']['AA12']  = @$AA12;			

		}

		$this->set('checksArr', @$checksArr);		
	}
	
	/**
	 * Function for previous year checks
	 *
	 * @return void
	 * @author PrithviRaj Moorani 
	 **/
	
	public function run_py($did = NULL, $sid = NULL)
	{
		$x = $this->Asc201516->query('SELECT
			a.school_semis_code AS "A.SEMIS",
			b.school_semis_new AS "B.SEMIS",
			a.bi_school_district AS "A.DISTRICT",
			b.bi_school_district AS "B.DISTRICT",
			a.bi_school_taluka AS "A.TALUKA",
			b.bi_school_taluka AS "B.TALUKA",
			a.ss_status AS "A.STATUS",
			b.dsi_status_condition AS "B.STATUS",
			a.dsi_level AS "A.LEVEL",
			b.dsi_level AS "B.LEVEL",
			a.sch_upgraded AS "A.UPGRADED?",
			b.sgi_is_school_upgraded AS "B.UPGRADED?",
			a.sch_upgraded_level AS "A.UPGRADED LEVEL",
			b.sgi_sch_upgraded_level AS "B.UPGRADED LEVEL",
			a.dsi_sch_campus AS "A.CAMPUS",
			b.campus_school AS "B.CAMPUS",
			a.dsi_enrollment_english AS "A.ENGLISH",
			a.dsi_enrollment_urdu AS "A.URDU",
			a.dsi_enrollment_sindhi AS "A.SINDHI",
			a.dsi_enrollment_total AS "A.ENROLLMENT",
			b.dsi_enrollment_english AS "B.ENGLISH",
			b.dsi_enrollment_urdu AS "B.URDU",
			b.dsi_enrollment_sindhi AS "B.SINDHI",
			a.bfi_school_boundarywall AS "A.BOUNDARYWALL",
			b.sbf_condition_bwall AS "B.BOUNDARYWALL",
			a.bfi_school_washroom AS "A.WASHROOM",
			b.sbf_toilets AS "B.WASHROOM",
			a.bfi_school_functional_washrooms AS "A.FUNCTIONAL_WASHROOMS",
			b.sbi_school_toilets_number_func AS "B.FUNCTIONAL_WASHROOMS",
			a.bfi_school_nonfunctional_washrooms AS "A.NONFUNCTIONAL_WASHROOMS",
			b.sbi_school_toilets_number_nfunc AS "B.NONFUNCTIONAL_WASHROOMS",
			a.bfi_school_waterfacility AS "A.WATER_FACILITY",
			b.sbf_water_available AS "B.WATER_FACILITY",
			a.sbi_ownership AS "A.BUILDING",
			b.sbi_ownership AS "B.BUILDING",
			a.sbi_school_building_total_rooms AS "A.ROOMS",
			b.sbi_school_building_total_rooms AS "B.ROOMS",
			a.sti_total_teachers AS "A.TEACHERS",
			b.sti_teacher_mf_total AS "B.TEACHERS"
		FROM
			asc201516s a
		JOIN semis_universal201415s b ON a.school_semis_code = b.school_semis_new
		WHERE
			a.bi_school_district = '.$did);
		//debug($x);
		foreach ($x as $key => $value) {
			$i = $key;
			$semis_py           = $value['b']['B.SEMIS'];
			$semis_cy           = $value['a']['A.SEMIS'];
			$status_py          = $value['b']['B.STATUS'];
			$status_cy          = $value['a']['A.STATUS'];
			$level_py           = $value['b']['B.LEVEL'];
			$level_cy           = $value['a']['A.LEVEL'];
			$upgraded_py        = $value['b']['B.UPGRADED?'];
			$upgraded_cy        = $value['a']['A.UPGRADED?'];			
			$level_upgraded_py  = $value['b']['B.UPGRADED LEVEL'];
			$level_upgraded_cy  = $value['a']['A.UPGRADED LEVEL'];
			$boundarywall_cy    = $value['a']['A.BOUNDARYWALL'];
			$boundarywall_py    = $value['b']['B.BOUNDARYWALL'];
			$washroom_cy        = $value['a']['A.WASHROOM'];
			$washroom_py        = $value['b']['B.WASHROOM'];
			$no_of_washrooms_cy = $value['a']['A.FUNCTIONAL_WASHROOMS'] + $value['a']['A.NONFUNCTIONAL_WASHROOMS'];
			$no_of_washrooms_py = $value['b']['B.FUNCTIONAL_WASHROOMS'] + $value['b']['B.NONFUNCTIONAL_WASHROOMS'];
			$water_facility_cy	= $value['a']['A.WATER_FACILITY'];
			$water_facility_py	= $value['b']['B.WATER_FACILITY'];
			$building_cy 		= $value['a']['A.BUILDING'];
			$building_py 		= $value['b']['B.BUILDING'];
			$rooms_cy 			= $value['a']['A.ROOMS'];
			$rooms_py 			= $value['b']['B.ROOMS'];
			$teachers_cy 		= $value['a']['A.TEACHERS'];
			$teachers_py 		= $value['b']['B.TEACHERS'];
			$campus_py          = $value['b']['B.CAMPUS'];
			$campus_cy          = $value['a']['A.CAMPUS'];
			$total_enr_py       = $value['b']['B.ENGLISH'] + $value['b']['B.URDU'] + $value['b']['B.SINDHI'];
			$total_enr_cy       = $value['a']['A.ENGLISH'] + $value['a']['A.URDU'] + $value['a']['A.SINDHI'];
			$enr_difference     = $total_enr_cy - $total_enr_py;
			$enr_difference     = $enr_difference/$total_enr_py;
			$enr_difference     = $enr_difference * 100;
			$enr_difference     = round($enr_difference);

			if ($semis_py == $semis_cy && $semis_cy == $semis_py){				
				$PY1 = $this->PY1($level_py, $level_cy, $upgraded_cy, $upgraded_py, $level_upgraded_cy, $level_upgraded_py);
				$PY2 = $this->PY2($level_py, $level_cy, $upgraded_cy, $upgraded_py, $level_upgraded_cy, $level_upgraded_py);
				$PY3 = $this->PY3($level_py, $level_cy, $upgraded_cy, $upgraded_py, $level_upgraded_cy, $level_upgraded_py);
				$PY4 = $this->PY4($status_cy, $status_py);
				$PY5 = $this->PY5($status_cy, $status_py);
				$PY6 = $this->PY6($campus_cy, $total_enr_cy, $enr_difference);
				$PY7 = $this->PY7($campus_cy, $total_enr_cy, $enr_difference);
				$PY8 = $this->PY8($boundarywall_cy, $boundarywall_py);
				$PY9 = $this->PY9($washroom_cy, $washroom_py);
				$PY10 = $this->PY10($no_of_washrooms_cy, $no_of_washrooms_py);
				$PY11 = $this->PY11($water_facility_cy, $water_facility_py);
				$PY12 = $this->PY12($building_cy, $building_py);
				$PY13 = $this->PY13($rooms_cy, $rooms_py);
				$PY14 = $this->PY14($teachers_cy, $teachers_py);

				/*echo " ";
				echo $PY1;echo " ";echo $PY2;echo " ";echo $PY3;echo " ";echo $PY4;echo " ";echo $PY5;echo " ";
				echo $PY6;echo " ";echo $PY7;echo " ";echo $PY8;echo " ";echo $PY9;echo " ";echo $PY10;echo " ";
				echo $PY12;echo " ";echo $PY13;echo " ";echo $PY14;echo " ";
				echo "<br>";*/

				$checksArr[$i]['semiscode']      = $semis_cy;
				$checksArr[$i]['errors']['PY1']  = $PY1; 
				$checksArr[$i]['errors']['PY2']  = $PY2; 
				$checksArr[$i]['errors']['PY3']  = $PY3; 
				$checksArr[$i]['errors']['PY4']  = $PY4; 
				$checksArr[$i]['errors']['PY5']  = $PY5; 
				$checksArr[$i]['errors']['PY6']  = $PY6; 
				$checksArr[$i]['errors']['PY7']  = $PY7; 
				$checksArr[$i]['errors']['PY8']  = $PY8; 
				$checksArr[$i]['errors']['PY9']  = $PY9; 
				$checksArr[$i]['errors']['PY10'] = $PY10; 
				$checksArr[$i]['errors']['PY11'] = $PY11; 
				$checksArr[$i]['errors']['PY12'] = $PY12; 
				$checksArr[$i]['errors']['PY13'] = $PY13; 
				$checksArr[$i]['errors']['PY14'] = $PY14; 
				
			}
			$this->set('checksArr', $checksArr);	

		}	
	}

	public function PY1($level_py, $level_cy, $upgraded_cy, $upgraded_py, $level_upgraded_cy, $level_upgraded_py)
	{
		if($upgraded_cy == 1){
			if($level_cy == 1){
				if($level_upgraded_cy == 2 || $level_upgraded_cy == 3){
					return "";
				}else{
					return "PY1";
				}
			}// > $level_upgraded_cy){				
			//	return "Last year level: $level_py, Current year level upgraded: $upgraded_cy, Upgraded level: $level_upgraded_cy";
			//}

		}
	}

	public function PY2($level_py, $level_cy, $upgraded_cy, $upgraded_py, $level_upgraded_cy, $level_upgraded_py)
	{
		if($upgraded_cy == 1){
			if($level_cy == 2 || $level_cy == 3){
				if($level_upgraded_cy == 4){
					return "";
				}else{
					return "PY2";
				}
			}
		}
	}

	public function PY3($level_py, $level_cy, $upgraded_cy, $upgraded_py, $level_upgraded_cy, $level_upgraded_py)
	{
		if($upgraded_cy == 1){
			if($level_cy == 4){
				if($level_upgraded_cy == 5){
					return "";
				}else{
					return "PY3";
				}
			}
		}
	}

	public function PY4($status_cy, $status_py)
	{
		if($status_cy == 2 || $status_cy == 3){
			if($status_py == 1 || $status_py == 2 || $status_py == 3){
				return "PY4";
			}
		}
	}

	public function PY5($status_cy, $status_py)
	{
		if($status_cy == 3){
			if($status_py == 1){
				return "PY5";
			}
		}
	}

	public function PY6($campus_cy, $total_enr_cy, $enr_difference)
	{
		if($campus_cy != 1){
			if($total_enr_cy >=50 && $total_enr_cy <= 500){
				$enr_difference = abs($enr_difference);
				if($enr_difference == 15){
					return "PY6 ($enr_difference%)";
				}
			}
		}
	}

	public function PY7($campus_cy, $total_enr_cy, $enr_difference)
	{
		if($campus_cy == 1){
			if($total_enr_cy > 500){
				if($enr_difference<0){
					return "PY7";
				}
			}
		}
	}

	public function PY8($boundarywall_cy, $boundarywall_py)
	{
		if($boundarywall_cy == 4){
			if($boundarywall_py == 1){
				return "PY8";
			}
		}
	}

	public function PY9($washroom_cy, $washroom_py)
	{
		if($washroom_cy == 2){
			if($washroom_py == 1){
				return "PY9";
			}
		}
	}

	public function PY10($no_of_washrooms_cy, $no_of_washrooms_py)
	{
		if($no_of_washrooms_cy < $no_of_washrooms_py){
			return "PY10";
		}
	}

	public function PY11($water_facility_cy, $water_facility_py)
	{
		if($water_facility_cy == 2 && $water_facility_py == 1){
			return "PY11";
		}
	}

	public function PY12($building_cy, $building_py)
	{
		if($building_cy == 5){
			if($building_py == 1 || $building_py == 2 || $building_py == 3 || $building_py == 4){
				return "PY12";
			}
		}
	}

	public function PY13($rooms_cy, $rooms_py)
	{
		if($rooms_cy < $rooms_py){
			return "PY13";
		}
	}

	public function PY14($teachers_cy, $teachers_py)
	{
		if($teachers_cy < $teachers_py){
			return "PY14";
		}
	}

	//==========================================================================================//
	//-------------------------- PREVIOUS YEAR CHECKS END HERE ---------------------------------//
	//==========================================================================================//

	//==========================================================================================//
	//-------------------------- INCONSISTENCY CHECKS START HERE -------------------------------//
	//==========================================================================================//

	public function A8($semis, $status_type, $status)
	{
		if(($status_type == 1) && (($status == 1) || $status == 2)){			
			$A8 = "";
		}elseif(($status_type == 1) && (($status != 1) || ($status != 2))){
			$A8 = "A8";
		}else{
			$A8 = "";
		}

		return $A8;
	}
	
	public function A9($semis, $status_type, $status)
	{		
		if(($status_type == 2) && ($status == 3)){			
			$A9 = "";
		}elseif(($status_type == 2) && ($status != 3)){
			$A9 = "A9";
		}else{
			$A9 = "";
		}

		return $A9;
	}

	public function A1($status, $total_enr)
	{
		if($status == 1){			
			if($total_enr > 0){
				return $A1 = "";
			}else{
				return $A1 = "A1";
			}
		}
	}

	public function A2($status, $total_enr, $total_teachers)
	{
		if($status == 2){			
			if($total_teachers == 0 || $total_enr == 0){
				return $a2 = "";
			}else{
				return $a2 = "A2";
			}
		}		
	}

	public function A3($status, $total_enr, $total_staff)
	{
		if($status == 3){
			if($total_staff == 0 && $total_enr == 0){
				return $a3 = "";
			}else{
				return $a3 = "A3";
			}
		}
	}

	public function A4($closure_reason, $status)
	{
		if((null != $closure_reason) && ($closure_reason != 0)){
			if($status == 2 || $status == 3){
				return $a4 = "";
			}else{
				return $a4 = "A4";
			}
		}elseif ($status == 2 || $status == 3){
			if((null != $closure_reason) && ($closure_reason != 0)){
				return $a4 = "";
			}else{
				return $a4 = "A4";
			}
		}
	}

	public function A5($status, $closure_date)
	{
		if(null != $closure_date){
			if($status == 2 || $status == 3){
				return $a5 = "";
			}else{
				return $a5 = "A5";
			}
		}elseif ($status == 2 || $status == 3){
			if(null != $closure_date){
				return $a5 = "";
			}else{
				return $a5 = "A5";
			}
		}
	}

	public function A6($status, $dp_name, $dp_cnic, $dp_designation, $dp_gender, $dp_contact, $dp_email)
	{
		if($status == 1){
			if((isset($dp_name) && !empty($dp_name)) 
				&& (isset($dp_designation) && !empty($dp_designation)) 
				&& (isset($dp_gender) && !empty($dp_gender)) 
				&& (isset($dp_contact) && !empty($dp_contact))
				&& (isset($dp_email) && !empty($dp_email))){
				return $a6 = "";
			}else{
				return $a6 = "A6";
			}
		}
	}

	public function A7($status, $total_teachers, $total_nonteachers)
	{
		if($status == 1){
			if(($total_teachers+$total_nonteachers)>0){
				return "";
			}else{
				return "A7";
			}
		}
	}

	public function A10($status, $repeaters, $absentees)
	{
		if($status == 2 || $status == 3){
			if(empty($repeaters) && empty($absentees)){
				return "";
			}else{
				return "A10";
			}
		}
	}

	public function B6($level, $middle_enrollment)
	{
		if(!empty($middle_enrollment) && $middle_enrollment>0){
			if($level == 2){
				return "";
			}else{
				return "B6";
			}
		}
	}

	public function B6_1($level, $ele_class_ece_enr, $ele_class_katchi_enr, $ele_class_one_enr, $ele_class_two_enr, $ele_class_three_enr, $ele_class_four_enr, $ele_class_five_enr, $ele_class_six_enr, $ele_class_seven_enr, $ele_class_eight_enr)
	{
		
		if((isset($ele_class_ece_enr) || isset($ele_class_katchi_enr) || isset($ele_class_one_enr) || isset($ele_class_two_enr) 
			|| isset($ele_class_three_enr) || isset($ele_class_four_enr) || isset($ele_class_five_enr))
			&& (!empty($ele_class_six_enr) || !empty($ele_class_seven_enr) || !empty($ele_class_eight_enr)) ){			
			if($level == 3){
				return "";
			}else{
				return "B6_1";
			}
		}
	}

	public function B7($level, $ele_class_six_enr, $ele_class_seven_enr, $ele_class_eight_enr)
	{
		if($level == 1){
			if(!empty($ele_class_six_enr) || !empty($ele_class_seven_enr) || !empty($ele_class_eight_enr)){
				return "B7";
			}else{
				return "";
			}
		}		
	}

	public function B2($level, $sec_enr)
	{
		if(!empty($sec_enr) && $sec_enr>0){
			if(($level == 4) || ($level == 5)){
				return "";
			}else{
				return "B2";
			}
		}
	}

	public function B1($level, $hsec_enr)
	{
		if(!empty($hsec_enr) && $hsec_enr>0){
			if($level == 5){
				return "";
			}else{
				return "B1";
			}
		}
	}

	public function B8($level, $ele_class_six_enr, $ele_class_seven_enr, $ele_class_eight_enr)
	{
		if($level == 9){
			if((!empty($ele_class_six_enr)) && (empty($ele_class_seven_enr)) && (empty($ele_class_eight_enr))){
				return "";
			}else{
				return "B8";
			}
		}		
	}

	public function B9($level, $ele_class_ece_enr, $ele_class_katchi_enr, $ele_class_one_enr, $ele_class_two_enr, $ele_class_two_enr, $ele_class_three_enr, $ele_class_four_enr, $ele_class_five_enr)
	{
		if($level == 2){
			if((isset($ele_class_ece_enr)) || (isset($ele_class_katchi_enr)) || (isset($ele_class_one_enr))
				|| (isset($ele_class_two_enr)) || (isset($ele_class_three_enr)) || (isset($ele_class_four_enr))
				|| (isset($ele_class_five_enr))){
				return "B9";
			}else{
				return "";
			}
		}
	}

	/*public function B10($level, $ele_class_ece_enr, $ele_class_katchi_enr, $ele_class_one_enr, $ele_class_two_enr, $ele_class_two_enr, $ele_class_three_enr, $ele_class_four_enr, $ele_class_five_enr)
	{
		if($level == 1){
			if((isset($ele_class_ece_enr)) && (isset($ele_class_katchi_enr)) && (isset($ele_class_one_enr))
				&& (isset($ele_class_two_enr)) && (isset($ele_class_three_enr)) && (isset($ele_class_four_enr))
				&& (isset($ele_class_five_enr))){
				return "";
			}else{
				return "B10";
			}
		}		
	}*/

	public function B10($level, $ele_class_ece_enr, $ele_class_katchi_enr, $ele_class_one_enr, $ele_class_two_enr, $ele_class_two_enr, $ele_class_three_enr, $ele_class_four_enr, $ele_class_five_enr)
	{
		$check = $ele_class_ece_enr + $ele_class_one_enr + $ele_class_two_enr + $ele_class_three_enr + $ele_class_four_enr + $ele_class_five_enr; 

		if($check > 0){
			if($level == 1 || $level == 9){
				return "";
			}else{
				return "B10";
			}
		}		
	}

	/*public function B11($level, $ele_enr)
	{
		if(!empty($ele_enr) && $ele_enr>0){
			if(($level == 1) || ($level == 9)){
				return "";
			}else{
				return "B11";
			}
		}
	}*/

	public function B3($level, $administration)
	{
		if($level == 1 || $level == 9){
			if((!empty($administration)) && ($administration <= 5)){
				return "";
			}else{
				return "B3";
			}
		}		
	}

	public function B4($level, $administration)
	{
		if($level == 4 || $level == 5){
			if((!empty($administration)) && ($administration <= 5)){
				return "";
			}else{
				return "B4";
			}
		}		
	}

	public function B5($gender, $administration)
	{
		if($gender == 3){
			if((!empty($administration)) && ($administration == 1)){
				return "";
			}else{
				return "B5";
			}
		}		
	}

	public function C1($status_type, $gender, $total_boys_enr)
	{
		if($status_type == 1 && $gender == 1){
			if($total_boys_enr > 0){
				return "";
			}else{
				return "C1";
			}
		}
	}

	public function C2($status_type, $gender, $total_girls_enr)
	{
		if($status_type == 1 && $gender == 2){
			if($total_girls_enr > 0){
				return "";
			}else{
				return "C2";
			}
		}
	}

	public function C3($status_type, $gender, $total_enr)
	{
		if($status_type == 1 && $gender == 3){
			if($total_enr > 0){
				return "";
			}else{
				return "C3";
			}
		}
	}

	public function C4($status_type, $repeaters, $absentees)
	{
		if($status_type == 1){
			if(($repeaters >= 0) && ($absentees >= 0)){
				return "";
			}else{
				return "C4";
			}
		}
	}

	public function D4($ele_class_four_boys_enr, $repeaters_class_four_boys)
	{
		if($repeaters_class_four_boys > 0){
			if($repeaters_class_four_boys <= $ele_class_four_boys_enr){
				return "";
			}else{
				return "D4";
			}
		}
	}

	public function D5($ele_class_five_boys_enr, $repeaters_class_five_boys)
	{
		if($repeaters_class_five_boys > 0){
			if($repeaters_class_five_boys <= $ele_class_five_boys_enr){
				return "";
			}else{
				return "D5";
			}
		}
	}

	public function D6($ele_class_six_boys_enr, $repeaters_class_six_boys){
		if($repeaters_class_six_boys > 0){
			if($repeaters_class_six_boys <= $ele_class_six_boys_enr){
				return "";
			}else{
				return "D6";
			}
		}
	}

	public function D7($ele_class_seven_boys_enr, $repeaters_class_seven_boys){
		if($repeaters_class_seven_boys > 0){
			if($repeaters_class_seven_boys <= $ele_class_seven_boys_enr){
				return "";
			}else{
				return "D7";
			}
		}
	}

	public function D8($ele_class_eight_boys_enr, $repeaters_class_eight_boys){
		if($repeaters_class_eight_boys > 0){
			if($repeaters_class_eight_boys <= $ele_class_eight_boys_enr){
				return "";
			}else{
				return "D8";
			}
		}
	}

	public function D9($sec_class_nine_boys_enr, $repeaters_class_nine_boys){
		if($repeaters_class_nine_boys > 0){
			if($repeaters_class_nine_boys <= $sec_class_nine_boys_enr){
				return "";
			}else{
				return "D9";
			}
		}
	}

	public function D10($sec_class_ten_boys_enr, $repeaters_class_ten_boys){
		if($repeaters_class_ten_boys > 0){
			if($repeaters_class_ten_boys <= $sec_class_ten_boys_enr){
				return "";
			}else{
				return "D10";
			}
		}
	}

	public function D11($hsec_class_eleven_boys_enr, $repeaters_class_eleven_boys){
		if($repeaters_class_eleven_boys > 0){
			if($repeaters_class_eleven_boys <= $hsec_class_eleven_boys_enr){
				return "";
			}else{
				return "D11";
			}
		}
	}

	public function D12($hsec_class_twelve_boys_enr, $repeaters_class_twelve_boys){
		if($repeaters_class_twelve_boys > 0){
			if($repeaters_class_twelve_boys <= $hsec_class_twelve_boys_enr){
				return "";
			}else{
				return "D12";
			}
		}
	}

	public function D16($ele_class_four_girls_enr, $repeaters_class_four_girls){
		if($repeaters_class_four_girls > 0){
			if($repeaters_class_four_girls <= $ele_class_four_girls_enr){
				return "";
			}else{
				return "D16";
			}
		}
	}

	public function D17($ele_class_four_girls_enr, $repeaters_class_four_girls){
		if($repeaters_class_four_girls > 0){
			if($repeaters_class_four_girls <= $ele_class_four_girls_enr){
				return "";
			}else{
				return "D17";
			}
		}
	}

	public function D18($ele_class_five_girls_enr, $repeaters_class_five_girls){
		if($repeaters_class_five_girls > 0){
			if($repeaters_class_five_girls <= $ele_class_five_girls_enr){
				return "";
			}else{
				return "D18";
			}
		}
	}

	public function D19($ele_class_six_girls_enr, $repeaters_class_six_girls){
		if($repeaters_class_six_girls > 0){
			if($repeaters_class_six_girls <= $ele_class_six_girls_enr){
				return "";
			}else{
				return "D19";
			}
		}
	}

	public function D20($ele_class_seven_girls_enr, $repeaters_class_seven_girls){
		if($repeaters_class_seven_girls > 0){
			if($repeaters_class_seven_girls <= $ele_class_seven_girls_enr){
				return "";
			}else{
				return "D20";
			}
		}
	}

	public function D21($ele_class_eight_girls_enr, $repeaters_class_eight_girls){
		if($repeaters_class_eight_girls > 0){
			if($repeaters_class_eight_girls <= $ele_class_eight_girls_enr){
				return "";
			}else{
				return "D21";
			}
		}
	}

	public function D22($sec_class_nine_girls_enr, $repeaters_class_nine_girls){
		if($repeaters_class_nine_girls > 0){
			if($repeaters_class_nine_girls <= $sec_class_nine_girls_enr){
				return "";
			}else{
				return "D22";
			}
		}
	}

	public function D23($sec_class_ten_girls_enr, $repeaters_class_ten_girls){
		if($repeaters_class_ten_girls > 0){
			if($repeaters_class_ten_girls <= $sec_class_ten_girls_enr){
				return "";
			}else{
				return "D23";
			}
		}
	}

	public function D24($hsec_class_eleven_girls_enr, $repeaters_class_eleven_girls){
		if($repeaters_class_eleven_girls > 0){
			if($repeaters_class_eleven_girls <= $hsec_class_eleven_girls_enr){
				return "";
			}else{
				return "D24";
			}
		}
	}

	public function E1($absentees, $ele_enr, $sec_enr, $hsec_enr)
	{
		if($absentees > 0){
			if($absentees <= (($ele_enr || $sec_enr || $hsec_enr))){
				return "";
			}else{
				return "E1";
			}
		}
	}

	public function E2($level, $absentees_class_six, $absentees_class_seven, $absentees_class_eight, $absentees_class_nine, $absentees_class_ten, $absentees_class_eleven, $absentees_class_twelve)
	{
		$check = $absentees_class_six+ $absentees_class_seven+ $absentees_class_eight+ $absentees_class_nine+ $absentees_class_ten+ $absentees_class_eleven+ $absentees_class_twelve;
		if($level == 1){
			if(empty($check)){
				return "";
			}else{
				return "E2";
			}
		}
	}

	public function E3($level, $absentees_class_ece, $absentees_class_katchi, $absentees_class_one, $absentees_class_two, $absentees_class_three, $absentees_class_four, $absentees_class_five)
	{
		$check = $absentees_class_ece+ $absentees_class_katchi+ $absentees_class_one+ $absentees_class_two+ $absentees_class_three+ $absentees_class_four+ $absentees_class_five;
		if($level == 2){
			if(empty($check)){
				return "";
			}else{
				return "E3";
			}
		}
	}

	public function E4($level, $absentees_class_eight, $absentees_class_nine, $absentees_class_ten, $absentees_class_eleven, $absentees_class_twelve){
		$check = $absentees_class_eight+ $absentees_class_nine+ $absentees_class_ten+ $absentees_class_eleven+ $absentees_class_twelve;
		if($level == 3){
			if(empty($check)){
				return "";
			}else{
				return "E4";
			}

		}
	}

	public function E5($level, $absentees_class_ece, $absentees_class_katchi, $absentees_class_eleven, $absentees_class_twelve)
	{
		$check = $absentees_class_ece+ $absentees_class_katchi+$absentees_class_eleven+ $absentees_class_twelve;
		if($level == 4)
		{
			if(empty($check))
			{
				return "";
			}else{
				return "E5";
			}

		}
	}

	/*public function E6($level, $absentees_class_ece, $absentees_class_katchi, $absentees_class_eleven, $absentees_class_twelve){
		$check = $absentees_class_ece+ $absentees_class_katchi+$absentees_class_eleven+ $absentees_class_twelve;
		if($level == 4){
			if(empty($check)){
				return "";
			}else{
				return "E6";
			}

		}
	}*/

	public function E6($level, $absentees_class_ece, $absentees_class_katchi)
	{
		$check = $absentees_class_ece+ $absentees_class_katchi;
		if($level == 5)
		{
			if(empty($check))
			{
				return "";
			}else{
				return "E7";
			}

		}
	}

	public function F1($campus, $mergedSchools){
		if($campus == 1){
			if(!empty($mergedSchools)){
				return "";
			}else{
				return "F1";
			}
		}
	}

	public function F2($campus, $medium_wise_enrQ9){
		if($campus == 1){
			if(!empty($medium_wise_enrQ9)){
				return "";
			}else{
				return "F2";
			}
		}
	}

	public function F3($campus, $total_teachers, $total_nonteachers){
		if($campus == 1){
			if(!empty($total_teachers) && !empty($total_nonteachers)){
				return "";
			}else{
				return "F3";
			}
		}
	}

	public function F4($campus, $total_rooms, $total_classrooms){
		if($campus == 1){
			if(!empty($total_rooms) && !empty($total_classrooms)){
				return "";
			}else{
				return "F4";
			}
		}
	}
	
	public function F5($campus, $washroom_facility, $functional_washrooms, $nonfunctional_washrooms){
		if($campus == 1 && $washroom_facility == 1){
			if(!empty($functional_washrooms) && !empty($nonfunctional_washrooms)){
				return "";
			}else{
				return "F5";
			}

		}
	}

	public function I1($branched, $branchedSchoolSemis, $branchedSchoolName){
		if($branched == 1){
			if($branchedSchoolSemis>0 && !empty($branchedSchoolName)){
				return "";
			}else{
				return "I1";
			}
		}elseif($branchedSchoolSemis>0 || !empty($branchedSchoolName)){
			if($branched == 1){
				return "";
			}else{
				return "I1";
			}
		}

	}

	public function J1($ownership, $shared_building_semis){
		if($ownership == 2){
			if(!empty($shared_building_semis)){
				return "";
			}else{
				return "J1";
			}
		}elseif (!empty($shared_building_semis)){
			if($ownership == 2){
				return "";
			}else{
				return "J1";
			}
		}

	}

	public function J2($ownership, $nobuilding_specify){
		if($ownership == 5){
			if($nobuilding_specify == 1 || $nobuilding_specify == 2 || $nobuilding_specify == 3){
				return "";
			}else{
				return "J2";
			}
		}elseif ($nobuilding_specify == 1 || $nobuilding_specify == 2 || $nobuilding_specify == 3){
			if($ownership == 5){
				return "";
			}else{
				return "J2";
			}

		}
	}

	public function J3($ownership, $building_type){
		if($ownership == 1 || $ownership == 2 || $ownership == 3 || $ownership == 4){
			if(!empty($building_type)){
				return "";
			}else{
				return "J3";
			}
		}elseif (!empty($building_type)) {
			if($ownership == 1 || $ownership == 2 || $ownership == 3 || $ownership == 4){
				return "";
			}else{
				return "J3";
			}
		}
	}

	public function J4($ownership, $building_condition){
		if($ownership == 1 || $ownership == 2 || $ownership == 3 || $ownership == 4){
			if(!empty($building_condition)){
				return "";
			}else{
				return "J4";
			}
		}elseif (!empty($building_condition)) {
			if($ownership == 1 || $ownership == 2 || $ownership == 3 || $ownership == 4){
				return "";
			}else{
				return "J4";
			}
		}
	}

	public function J5($ownership, $total_rooms){
		if($ownership == 1 || $ownership == 2 || $ownership == 3 || $ownership == 4){
			if(!empty($total_rooms)){
				return "";
			}else{
				return "J5";
			}
		}elseif (!empty($total_rooms)) {
			if($ownership == 1 || $ownership == 2 || $ownership == 3 || $ownership == 4){
				return "";
			}else{
				return "J5";
			}
		}
	}

	public function J6($ownership, $building_other_than_learning){
		if($ownership == 1 || $ownership == 2 || $ownership == 3 || $ownership == 4){
			if(!empty($building_other_than_learning)){
				return "";
			}else{
				return "J6";
			}
		}elseif (!empty($building_other_than_learning)) {
			if($ownership == 1 || $ownership == 2 || $ownership == 3 || $ownership == 4){
				return "";
			}else{
				return "J6";
			}
		}
	}

	public function J7($status, $building_establishment_year){
		if($status == 1 || $status == 2){
			if(!empty($building_establishment_year)){
				return "";
			}else{
				return "J7";
			}
		}elseif (!empty($building_establishment_year)) {
			if($status == 1 || $status == 2){
				return "";
			}else{
				return "J7";
			}
		}
	}

	public function J8($ownership, $building_other_specify){
		if($ownership == 4){
			if(!empty($building_other_specify)){
				return "";
			}else{
				return "J8";
			}
		}elseif (!empty($building_other_specify)) {
			if($ownership == 4){
				return "";
			}else{
				return "J8";
			}
		}
	}

	public function J14($total_rooms, $total_classrooms){
		if($total_rooms >= $total_classrooms){			
			return "";
		}else{
			return "J14";
		}
	}

	public function J15($ownership, $nobuilding_specify, $building_condition, $total_rooms, $total_classrooms, $building_other_than_learning, $building_other_than_learning_rooms)
	{

		if($ownership == 5)
		{			
			if($nobuilding_specify == 1 || $nobuilding_specify == 2 || $nobuilding_specify == 3)
			{
				if(empty($building_condition) && empty($total_rooms) && empty($total_classrooms) && empty($building_other_than_learning) && empty($building_other_than_learning_rooms))
				{
					return "";
				}else{
					return "J15";
				}
			}
		}elseif(empty($building_condition) && empty($total_rooms) && empty($total_classrooms) && empty($building_other_than_learning) && empty($building_other_than_learning_rooms))
		{
			if($nobuilding_specify == 1 || $nobuilding_specify == 2 || $nobuilding_specify == 3)
			{
				if($ownership == 5)
				{
					return "";
				}else{
					return "J15";
				}
			}
		}
	}

	public function K1($washroom_facility, $functional_washrooms, $nonfunctional_washrooms){
		$check = $functional_washrooms + $nonfunctional_washrooms;
		if($washroom_facility == 1){
			if($check > 0){
				return "";
			}else{
				return "K1";
			}
		}
	}

	public function K2($ownership, $nobuilding_specify, $washroom_facility, $functional_washrooms, $nonfunctional_washrooms){
		$check = $functional_washrooms + $nonfunctional_washrooms;
		if($ownership == 5){
			if(($nobuilding_specify == 1 || $nobuilding_specify == 2 || $nobuilding_specify == 3) && ($washroom_facility==2)) {
				if($check == 0){
					return "";
				}else{
					return "K2";
				}
			}
		}		
	}

	public function L1($dp_cnic, $tArr){
		$cnicArr = array();
		foreach ($tArr as $key => $value) {
			$cnicArr[] = $value['teachers_cnic'];
		}

		if(!empty($dp_cnic)){		
			if(!in_array($dp_cnic, $cnicArr)){
				return 'L1';
			}
		}	
	}

	public function P2($dp_cnic, $dp_gender, $gender2){
		if(isset($gender2)){
			if($dp_gender == $gender2){
				return "";
			}else{
				return "P2";
			}	
		}
		
	}

	public function U2($closure_reason, $total_teachers){
		if($closure_reason == 1){
			if(empty($total_teachers)){
				return "";
			}else{
				return "U2";
			}
		}
	}

	public function U3($closure_reason, $total_enr){
		if($closure_reason == 2){
			if(empty($total_enr)){
				return "";
			}else{
				return "U3";
			}
		}
	}

	public function W1($medium, $status, $urdu_medium_enr){
		if($medium == 0 and $status == 1){
			if($urdu_medium_enr > 0){
				return "";
			}else{
				return "W1";
			}
		}
	}

	public function W2($medium, $status, $sindhi_medium_enr){
		if($medium == 1 and $status == 1){
			if($sindhi_medium_enr > 0){
				return "";
			}else{
				return "W2";
			}
		}
	}

	public function W3($medium, $status, $english_medium_enr){
		if($medium == 2 && $status == 1){
			if($english_medium_enr > 0){
				return "";
			}else{
				return "W3";
			}
		}
	}

	public function W4($level, $medium_wise_enrQ9, $primary_enrollment){	
		//echo 'level = '. $level;
		//echo ' and medium_wise_enrQ9 = '.$medium_wise_enrQ9;
		//echo ' primaryEnr = ' . $primary_enrollment;	
		if(($level == 1) && ($medium_wise_enrQ9>0)){
			if($medium_wise_enrQ9 == $primary_enrollment){
				return "";
			}else{
				return "W4";
			}
		} 
	}

	public function W5($level, $medium_wise_enrQ9, $elementary_enrollment, $secondary_enrollment, $hsecondary_enrollment){
		
		$check_enr = $elementary_enrollment + $secondary_enrollment + $hsecondary_enrollment;		
		
		if(($level == 2 || $level == 3 || $level == 4 || $level == 5) && ($medium_wise_enrQ9>0)){
			if($medium_wise_enrQ9 == $check_enr){
				return "";
			}else{
				return "W5";
			}
		}

		/*if((!empty($medium_wise_enrQ9)) && ($medium_wise_enrQ9 == $check_enr)){						
			if($level == 2 || $level == 3 || $level == 4 || $level == 5){				
				return "";
			}else{
				return "W5";
			}
		} */
	}

	public function W6($status_type, $status, $medium_wise_enrQ9){
		if(($status_type == 1) && ($status == 2 || $status == 3)){
			if($medium_wise_enrQ9 == 0){
				return "";
			}else{
				return "W6";
			}
		}

	}
	public function Y1($total_teachers, $teachers_count){
		if (!empty($total_teachers)) {
			if($total_teachers == $teachers_count){
				return "";
			}else{
				return "Y1";
			}
		}
	}

	public function Y2_1($asi_sch1_semis_code, $asi_sch1_name, $asi_sch1_type, $asi_sch1_distance){
		if(!empty($asi_sch1_semis_code)){
			if (empty($asi_sch1_name) || empty($asi_sch1_type) || is_null($asi_sch1_distance)) {
				return "Y2_1";						
			}
		}
	}

	public function Y2_2($asi_sch2_semis_code, $asi_sch2_name, $asi_sch2_type, $asi_sch2_distance){
		if(!empty($asi_sch2_semis_code)){
			if (empty($asi_sch2_name) || empty($asi_sch2_type) || empty($asi_sch2_distance)) {
				return "Y2_2";
			}
		}
	}

	public function Y2_3($asi_sch3_semis_code, $asi_sch3_name, $asi_sch3_type, $asi_sch3_distance){
		if (!empty($asi_sch3_semis_code)) {
			if (empty($asi_sch3_name) || empty($asi_sch3_type) || empty($asi_sch3_distance)) {
				return "Y2_3";
			}
		}
	}

	public function Y2_4($asi_sch4_semis_code, $asi_sch4_name, $asi_sch4_type, $asi_sch4_distance){
		if (!empty($asi_sch4_semis_code)) {
			if (empty($asi_sch4_name) || empty($asi_sch4_type) || empty($asi_sch4_distance)) {
				return "Y2_4";
			}

		}
	}	

	public function Z1($sch_received_girls_stipend, $sch_received_girls_stipend_enr, $sch_received_girls_stipend_elig, $sch_received_girls_stipend_rec){
		if($sch_received_girls_stipend == 1){
			if((empty($sch_received_girls_stipend_enrollment)) || (empty($sch_received_girls_stipend_eligible)) || (empty($sch_received_girls_stipend_received))){
				return "Z1";
			}
		}
	}

	public function Z2($level, $gender, $girls_stipend){
		if($level == 1 && $gender == 1){
			if($girls_stipend == 3){
				return "";
			}else{
				return "Z2";
			}
		}
	}

	public function Z3($level, $gender, $girls_stipend, $girls_stipend_enr, $girls_stipend_elig, $girls_stipend_rec){		
		if($level == 2 || $level == 3 || $level == 4 || $level == 5){
			if($gender == 2 || $gender == 3){			
				if($girls_stipend == 1){
					if((empty($girls_stipend_enr) || empty($girls_stipend_elig) || empty($girls_stipend_rec))){
						return "Z3";
					}
				}
			}			
		} 
	}

	public function Z4($level, $gender, $girls_stipend, $girls_stipend_enr, $girls_stipend_elig, $girls_stipend_rec){
		if($level == 2 || $level == 3 || $level == 4 || $level == 5){
			if($gender == 1){
				if($girls_stipend == 3){
					if(!empty($girls_stipend_enr) || !empty($girls_stipend_elig) || !empty($girls_stipend_rec)){
						return "Z4";	
					}				
				}#else{
				#	return "Z4";
				#}
			}
		}
	}

	public function Z5($level, $gender, $girls_stipend, $girls_stipend_enr, $girls_stipend_elig, $girls_stipend_rec){
		if($level == 1 && $gender == 1){
			if($girls_stipend == 3){
				if(!empty($girls_stipend_enr) || !empty($girls_stipend_elig) || !empty($girls_stipend_rec)){
					return "Z5";	
				}				
			}#else{
			#	return "Z4";
			#}
		}
	}	

	public function Z6($sch_upgraded, $sch_upgraded_level){
		if($sch_upgraded == 1){
			if(empty($sch_upgraded_level)){
				return "Z6";
			}
		}
	}

	public function Z7($sch_adopted, $sch_adopter_name){
		if($sch_adopted == 1){
			if(empty($sch_adopter_name)){
				return "Z7";
			}
		}
	}

	public function Z8($sch_cc_ddo_code){
		if(isset($sch_cc_ddo_code)){
			if(strlen($sch_cc_ddo_code) == 0){
				return "Z8";
			}
		}

	}

	public function AA2($teachers_post_type, $teachers_personnel){
		if($teachers_post_type == 1){
			if(empty($teachers_personnel)){
				return "AA2";
			}
		}
	}
	
	public function AA3($teachers_post_type, $teachers_personnel){
		if($teachers_post_type == 9){
			if(empty($teachers_personnel)){
				return "AA3";
			}
		}
	}
	
	public function AA4($teachers_personnel, $bps_appointment, $bps_timescale, $bps_actualscale){
		if(!empty($teachers_personnel)){
			if(!empty($bps_appointment) || !empty($bps_timescale) || !empty($bps_actualscale)){
				return "";
			}else{
				return " AA4";
			}
		}
	}
	
	public function AA5($teachers_designation_type, $teachers_personnel){
		if($teachers_designation_type == 3 || 
			$teachers_designation_type == 4 ||
			$teachers_designation_type == 5 ||
			$teachers_designation_type == 6 ||
			$teachers_designation_type == 7 || 
			$teachers_designation_type == 8 || 
			$teachers_designation_type == 10){
			if(!empty($teachers_personnel)){
				return " AA5";
			}
		}
	}
	
	public function AA6($level, $teachers_designation_type){
		if($level == 1){
			if($teachers_designation_type != 1){				
				return " AA6";
			}
		}
	}
	
	public function AA7($level, $teachers_post_type){
		if($level == 1){
			if($teachers_post_type != 1 || $teachers_post_type != 9){
				return " AA7";
			}
		}
	}
	
	public function AA8($teachers_post_type, $level){		
		if($teachers_post_type == 4){
			if($level != 1){
				return " AA8";
			}
		}elseif($level == 1){
			if($teachers_post_type != 4){
				return " AA8";
			}
		}
	}
	
	public function AA9($level, $teachers_designation_type){
		if($level == 9){
			if($teachers_designation_type == 1 || $teachers_designation_type == 2){
				return "";
			}else{
				return " AA9";
			}
		}
	}
	
	public function AA10($level, $teachers_designation_type){
		if($level == 2 || $level == 3){
			if($teachers_designation_type == 1 || $teachers_designation_type == 2 || $teachers_designation_type == 4 || $teachers_designation_type == 5 || $teachers_designation_type == 8 || $teachers_designation_type == 9){
				return "";
			}else{
				return " AA10";
			}
		}
	}
	//$AA10 = $this->AA11($level, $teachers_highest_qualification);
	public function AA12($teachers_designation_type, $teachers_post_type){
		if($teachers_designation_type == 10){
			if($teachers_post_type == 3 || $teachers_post_type == 4 || $teachers_post_type == 5 || $teachers_post_type == 6 || $teachers_post_type == 7 || $teachers_post_type == 8){
				return "";
			}else{
				return " AA12";
			}
		}
	}

	




	

}