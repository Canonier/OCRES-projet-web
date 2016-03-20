<?php

App::uses('CakeEmail', 'Network/Email');

class MembersController extends AppController {

	public $uses = array('Member', 'Bond');

	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('create', 'pswlost');
	}

	public function login() {

		if($this->request->is('post')){
			// try to log
			if ($this->Auth->login()) {
				return $this->redirect('/');
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

	public function create(){
		if($this->request->is('post')){
			$data = $this->request->data['CreateMember'];
			// Check if email already exists
			if(!in_array($data['email'], $this->Member->getEmails())){
				// Check if Passwords are identical
				if($data['pass1'] == $data['pass2']){
					$newMember = array(
						'email' => $data['email'],
						'password' => $this->Auth->password($data['pass1']),
						);
					if($this->Member->save($newMember)){
						$this->Flash->success(__(
							'Votre compte à bien été créé! Vous pouvez dès à présent vous y connecter.'
							));
						$this->request->data = null;
					}else{
						$this->Flash->error(__('Une erreur est survenue, merci de réitérer ultérieurement. Si le problème est persistant, merci de contacter le webmaster à admin@ocres.fr.'));
						$this->request->data['CreateMember'] = array('email' => $data['email']);				
					}
				}else{
					$this->Flash->error(__('Vos passwords semblent ne pas correspondre.'));
					$this->request->data['CreateMember'] = array('email' => $data['email']);
				}
			}else{
				$this->Flash->error(__(
					'Cet email est déjà utilisé.'
					));
				$this->request->data = null;
			}
		}
	}

	public function pswlost(){
		if($this->request->is('post')){
			// check if email exist
			$user = $this->Member->findByEmail($this->request->data['Member']['email']);
			if(!empty($user)){
				$to = $user['Member']['email'];
				$pass = $this->generateRandomString(15);
				pr($pass);
				$user['Member']['password'] = $this->Auth->password($pass);
				$this->Member->save($user);
				// send email
				$email = new CakeEmail();
				$email->from(array('no-reply@ocres.fr' => 'OCRES Projet Web'));
				$email->to($to);
				$email->subject('Votre nouveau password!');
				$email->send('Vous pouvez utiliser le password suivant : '.$pass.'. N\'oubiez pas de le changer une fois connecté!');
				// success
				$this->Flash->success(__('Un email de confirmation vient de vous etre envoyé.'));
				$this->request->data = null;
			}else{
				$this->Flash->error(__('Cet email nous est inconnu.'));
			}
		}
	}

	public function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
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