<h3>Mot de passe perdu ?</h3>

<?php

echo $this->Html->link(
    'Se connecter',
    '/members/login'
);

echo ' ou ';

echo $this->Html->link(
    's\'inscrire',
    '/members/create'
);


echo $this->Form->Create('Member');


echo $this->Form->input('email', array('type' => 'email', 'required',
		'before' => '<div class="row">',
		'between' => '<div class="col-md-9">',
		'after' => '</div></div>',
		'label' => array('text' => 'Votre email', 'class' => 'col-md-3', 'style' => 'text-align:center; padding: 5px 12px;'), 
		'required', 'class' => 'form-control', 
		'div' => array('class' => 'form-group')));

echo $this->Form->end(array(
		'label' => 'Réinitialiser mon mot de passe', 'class' => 'btn btn-success',
		'div' => array('style' => 'text-align:right;'))); 

?>