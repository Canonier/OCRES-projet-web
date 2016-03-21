<?php 

echo $this->Form->Create('Contact');

	echo $this->Form->input('name', array('label'=>'Votre nom'));
	echo $this->Form->input('email', array('label'=>'Votre adresse email','type'=>'email'));
	echo $this->Form->input('message', array('label'=>'Votre message','type'=>'textarea'));

echo $this->Form->end('Envoyer');

?>
