<?php
class MembersController extends AppController {

	public $uses = array('Member', 'Bond');

	public function login() {

		if($this->request->is('post')){
			// try to log
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirectUrl());
			}else{
				$this->Flash->error(
		        	__('Log incorrect')
			    );
			}
		}

	}

	public function logout(){
		$this->Auth->logout();
		$this->redirect('/');
	}


	public function index(){
		// Client Id
		$userId = $this->Auth->user('id');
		// My Request
		$awaitingsId = $this->Bond->findFriends($userId, 0, 1);
		$awaitings = $this->Member->findFriendsData($awaitingsId);
		// Get Friends Request
		$requestsId = $this->Bond->findFriends($userId, 0, 0);
		$requests = $this->Member->findFriendsData($requestsId);
		// Get Friends Ids
		$friendsId = $this->Bond->findFriends($userId, 1);
		$friends = $this->Member->findFriendsData($friendsId);
		// all users
		 $members = $this->Member->findMembers(array_merge($friendsId, $requestsId, $awaitingsId));
		// Send data to the view
		$this->set(compact('requests', 'friends', 'userId', 'awaitings', 'members'));

		// Flash Info
		if(empty($requests) && empty($awaitings) && empty($friends)){
			$this->Flash->error(__('No friend yet! :\'('));
		}

	}

	public function profil($id){
		// Get profil data
		$member = $this->Member->findById($id);
		$this->set(compact('member'));
	}

	public function accept($id){
		// Client Id
		$userId = $this->Auth->user('id');
		// Changing bond to trusted
		$bondId = $this->Bond->find('first', array('conditions' => array('member_id' => $id, 'member2_id' => $userId)));
		// Preparing Data to update 
		$bondToUpdate = array('id' => $bondId['Bond']['id'], 'trusted' => 1);
		// update
		if(isset($bondToUpdate['id']))
			$this->Bond->save($bondToUpdate);
		// Redirection
		$this->redirect(array('action' => 'index'));
	}

	public function cancel($id){
		// Client Id
		$userId = $this->Auth->user('id');
		// Changing bond to trusted
		$bondId = $this->Bond->find('first', array('conditions' => array('member2_id' => $id, 'member_id' => $userId)));
		// update
		if(isset($bondId['Bond']['id']))
			$this->Bond->delete($bondId['Bond']['id']);
		// Redirection
		$this->redirect(array('action' => 'index'));
	}

	public function delete($id){
		// Client Id
		$userId = $this->Auth->user('id');

		// Searching for Bond id
		$bondId = $this->Bond->findBondId($userId, $id);
		// Delete
		if(isset($bondId['Bond']['id']))
			$this->Bond->delete($bondId['Bond']['id']);
		// Redirection
		$this->redirect(array('action' => 'index'));
	}

	public function add($id){
		// Client Id
		$userId = $this->Auth->user('id');

		// check if relation exists
		$askedalready = $this->Bond->findBondId($userId, $id);
		// if exists -> redirect accept
		if(!empty($askedalready))
			$this->redirect(array('action' => 'accept'));
		// Else we add a new line in bonds
		else
			$this->Bond->save(array('member_id' => $userId, 'member2_id' => $id));
		// redirect
		$this->redirect(array('action' => 'index'));
	}

}