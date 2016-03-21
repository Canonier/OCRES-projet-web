<?php
class PublicsController extends AppController{

	
	public $uses = array('Member','Contact');

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

	function contact(){
		if($this->request->is('post')){
			if($this->Contact->send($this->request->data['Contact'])){
				$this->Flash->success('Votre message a bien été envoyé');
				$this->request->data = array();
			} else{
				$this->Flash->error('Un problème est survenu lors de l\'envoi du message');
			}
	 	}
    }
}