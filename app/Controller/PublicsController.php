<?php
class PublicsController extends AppController{

	public $uses = array('Member');

	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow();
	}

	function home(){

	}

	function ranking(){
		$members = $this->Member->find('all');
		$this->set(compact('members'));
	}

}