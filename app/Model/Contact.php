<?php

class Contact extends AppModel{

	public $useTable=false; // La classe n'utilise pas de table de BDD

	public function send($d){

		App::uses('CakeEmail', 'Network/Email');

		$mail = new CakeEmail();

		$mail->to('victor.ravenel@gmail.com')
			 ->from($d['email'])
			 ->subject('Contact')
			 ->emailFormat('html')
			 ->template('contact')
			 ->viewVars($d);
		return $mail->send();	 
	}
}