<?php
class MembersController extends AppController {

	public function login() {

		if($this->request->is('post')){
			pr($this->request->data['Member']['password']);
			// try to log
			if ($this->Auth->login()) {
				pr('Connected');
			}else{
				pr('Bais&eacute;');
			}
		}

	}

	public function logout(){
		$this->redirect($this->Auth->logout());
	}

}