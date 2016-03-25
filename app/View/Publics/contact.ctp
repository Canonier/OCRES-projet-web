<?php 

echo $this->Form->Create('Contact');


	echo $this->Form->input('name', array( 
		'before' => '<div class="row">',
		'between' => '<div class="col-md-9">',
		'after' => '</div></div>',
		'label' => array('text' => 'Votre nom', 'class' => 'col-md-3', 'style' => 'text-align:center; padding: 5px 12px;'), 
		'required', 'class' => 'form-control', 
		'div' => array('class' => 'form-group'))); 


	echo $this->Form->input('email', array('label'=>'Votre adresse email','type'=>'email'));
	echo $this->Form->input('message', array('label'=>'Votre message','type'=>'textarea'));

echo $this->Form->end('Envoyer');

?>