<?php

class ContactController extends AppController{


	function index(){
		if($this->request->is('post')){
			$this->Contact->send($this->rquest->data['Contact']);
		}


	}

}