<?php
class PublicsController extends AppController{

	public $uses = array('Member','Log');

	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow();
	}

	function home(){

	}

	function ranking(){
		$log = $this->Log->query("SELECT member_id, email,  AVG(log_value), log_type  FROM logs l JOIN members m on l.member_id = m.id  GROUP BY log_value ORDER BY AVG(log_value) DESC");
		$this->set(compact('log'));
	}

	function contact(){
		if($this->request->is('post')){
		pr($this->request->data);
		}
	}


}