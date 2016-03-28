<?php 

App::uses('AppModel', 'Model');

class Member extends AppModel {



	public function findAllId(){
		$fetch = $this->find("all", array("fields" => array("id", "email")));
		foreach ($fetch as $f) {
			$members[$f["Member"]["id"]] = $f["Member"]["email"];
		}

		return $members;
	}

	public function findFriendsData($friendsId){

		$data = $this->find('all', array(
			'conditions' => array('id' => $friendsId ),
			'fields' => array('id', 'email')
			));

		return $data;
	}

	public function findMembers($friendsId){
		$members = $this->find('all');
		$i = 0;
		foreach ($members as $member){
			if(in_array($member['Member']['id'], $friendsId) || $member['Member']['id'] == CakeSession::read("Auth.User.id")){
				unset($members[$i]);
			}
			$i++;
		}
		return $members;
	}

	public function getEmails(){
		$emails = $this->find('all', array('fields' => array('email')));
		$emailsList = array();
		foreach ($emails as $email) {
			$emailsList[] = $email['Member']['email'];
		}
		return $emailsList;
	}



}

?>