<?php
class User extends AppModel {
	var $name = 'User';
	var $displayField = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $actsAs = array('Acl' => array('type' => 'requester'));
 	
 	public function beforeSave($options = array()) {
        $this->data['User']['password'] = AuthComponent::password(
          $this->data['User']['password']
        );
        return true;
    }
	function parentNode() {

    	if (!$this->id && empty($this->data)) 
    	{
        	return null;
    	}
    	
    	if (isset($this->data['User']['group_id'])) {
    		$groupId = $this->data['User']['group_id'];
    	} else {
    		$groupId = $this->field('group_id');
    	}
    
    	if (!$groupId) {
			return null;
    	} else {
        	return array('Group' => array('id' => $groupId));
    	}
	}
	
	function bindNode($user) {
		return array('model' => 'Group', 'foreign_key' => $user['User']['group_id']);
	}
	
	
	var $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>