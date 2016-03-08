<?php

App::uses('AppController', 'Controller');

class MembersController extends AppController {

	public function login(){
		if(!empty($this->request->data)){
			echo $this->Auth->password('admin');
			if($this->Auth->login()){
				die('logged');				
			}
		}
	}

	public function logout(){

	}

}