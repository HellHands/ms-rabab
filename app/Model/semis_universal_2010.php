<?php

class semisUniversal2010 extends AppModel {
    var $name = 'semisUniversal2010';          
    var $hasOne = array(
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
						)
    );    
}
?>
