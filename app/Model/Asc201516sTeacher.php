<?php
App::uses('AppModel', 'Model');
/**
 * Asc201516sTeacher Model
 *
 * @property Asc201516 $Asc201516
 */
class Asc201516sTeacher extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Asc201516' => array(
			'className' => 'Asc201516',
			'foreignKey' => 'school_semis_code',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
