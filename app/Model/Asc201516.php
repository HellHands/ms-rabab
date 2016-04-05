<?php
App::uses('AppModel', 'Model');
/**
 * Asc201516 Model
 *
 * @property Teacher $Teacher
 */
class Asc201516 extends AppModel {
	
	/*public $validate = array(
	'bi_school_na' => array(
		'na_required' => array(
                'rule' => 'notEmpty',
                'message' => 'This is required field'
                )
		)
	);*/


	//The Associations below have been created with all possible keys, those that are not needed can be removed
	
/**
 * hasAndBelongsToMany associations
 *
 * @var array
 *///public $useTable = false;
	public $hasMany = array(
		'Asc201516sTeacher' => array(
			'className' => 'Asc201516sTeacher',			
			'foreignKey' => 'school_id',//'school_semis_code',
			'associationForeignKey' => 'school_semis_code',
			//'unique' => true			
		)
	);
	
	public $hasOne = array(
		'Asc201516sEnrollment' => array(
			'className' => 'Asc201516sEnrollment',
			'foreignKey' => 'school_id',
			'associationForeignKey' => 'school_semis_code'
			)
		);
}
