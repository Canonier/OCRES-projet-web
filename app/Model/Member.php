<?php 

App::uses('AppModel', 'Model');

class Member extends AppModel {

	public function findFriendsData($friendsId){

		$data = $this->find('all', array(
			'conditions' => array('id' => $friendsId ),
			'fields' => array('id', 'email')
			));

		return $data;
	}

}

?>