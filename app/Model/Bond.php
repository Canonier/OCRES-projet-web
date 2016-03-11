<?php 

App::uses('AppModel', 'Model');

class Bond extends AppModel {

	public function findFriends($userId, $trusted = array(0,1), $iasked = null){

		$data1 = $data2 = $friendsId = array();

		if($iasked === null || $iasked === 1){

			$data1 = $this->find('all', array(
				'conditions' => array( 'member_id' => $userId, 'trusted' => $trusted),
				'fields' => array('member2_id')
				));

		}


		if($iasked === null || $iasked === 0){

			$data2 = $this->find('all', array(
				'conditions' => array( 'member2_id' => $userId, 'trusted' => $trusted),
				'fields' => array('member_id')
				));

		}


		$data = array_merge($data1, $data2);



		foreach ($data as $friend) {
			if(isset($friend['Bond']['member2_id']))
				$friendsId[] = $friend['Bond']['member2_id'];
			else
				$friendsId[] = $friend['Bond']['member_id'];

		}

		return $friendsId;
	}


	public function findBondId($id1, $id2){

		return $this->find('first', array(
			'conditions' => array(
				'member_id' => array($id1, $id2),
				'member2_id' => array($id1, $id2)
			)));

	}

}

?>