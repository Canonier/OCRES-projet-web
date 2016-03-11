<?php
class MembersController extends AppController {

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
		$this->redirect($this->Auth->logout());
	}


	public function index(){
		$members = $this->Member->find('all');
		$this->set(compact('members'));
		$this->set('username', $this->Auth->user('username'));
	}

	public function profil($id){

	}

}