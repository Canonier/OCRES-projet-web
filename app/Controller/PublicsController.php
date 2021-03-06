<?php
class PublicsController extends AppController{

	
	public $uses = array('Member','Workout','Contact');

	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow();
	}

	public function home() {
		$members = $this->Member->find('list',array(
			'fields' => array('id', 'email')));
		$this->set(compact('members'));
	}


	function getRanks(){
		$workouts = $this->Workout->getRanks();
		$this->set(compact('workouts', 'types'));
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


    function cnil(){

    }

    function faq(){
    	
    }

    function team(){
    	
    }

	function jqlplot(){

	}
}