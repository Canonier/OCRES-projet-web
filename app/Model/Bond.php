<?php 

App::uses('AppModel', 'Model');

class Bond extends AppModel {

	public function findFriends($userId, $trusted = array(0,1), $iasked = null){
		// var
		$data1 = $data2 = $friendsId = array();

		if($iasked === null || $iasked === 1){ // if iasked is set to true or unset
			// data1 contains friends' id that according to $trusted are trusted or not or both 
			// where the userId is in the second col 'member_id.
			$data1 = $this->find('all', array(
				'conditions' => array( 'member_id' => $userId, 'trusted' => $trusted),
				'fields' => array('member2_id')
				));
		}

		if($iasked === null || $iasked === 0){ // if iasked is set to false or unset
			// data1 contains friends' id that according to $trusted are trusted or not or both 
			// where the userId is in the third col 'member2_id.
			$data2 = $this->find('all', array(
				'conditions' => array( 'member2_id' => $userId, 'trusted' => $trusted),
				'fields' => array('member_id')
				));

		}
		// Merging results in one array
		$data = array_merge($data1, $data2);
		// filter
		foreach ($data as $friend) {
			if(isset($friend['Bond']['member2_id']))
				$friendsId[] = $friend['Bond']['member2_id'];
			else
				$friendsId[] = $friend['Bond']['member_id'];

		}
		// return ids that respond to params
		return $friendsId;
	}

	public function findBondId($id1, $id2){
		// return the id that correspond to the relation between two ids.
		return $this->find('first', array(
			'conditions' => array(
				'member_id' => array($id1, $id2),
				'member2_id' => array($id1, $id2)
			)));
	}

}

?>