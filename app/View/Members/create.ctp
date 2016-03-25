<h3>Mot de passe perdu ?</h3>

<?php

echo $this->Html->link(
    'Se connecter',
    '/members/login'
);

echo ' ou ';

echo $this->Html->link(
    'mot de passe perdu ?',
    '/members/pswlost'
);

echo $this->Form->Create('CreateMember');

echo $this->Form->input('email', array('type' => 'email', 'required',
		'before' => '<div class="row">',
		'between' => '<div class="col-md-9">',
		'after' => '</div></div>',
		'label' => array('text' => 'Email', 'class' => 'col-md-3', 'style' => 'text-align:center; padding: 5px 12px;'), 
		'required', 'class' => 'form-control', 
		'div' => array('class' => 'form-group')));

echo $this->Form->input('pass1', array('type' => 'password', 'required',
		'before' => '<div class="row">',
		'between' => '<div class="col-md-9">',
		'after' => '</div></div>',
		'label' => array('text' => 'Mot de passe', 'class' => 'col-md-3', 'style' => 'text-align:center; padding: 5px 12px;'), 
		'required', 'class' => 'form-control', 
		'div' => array('class' => 'form-group')));

echo $this->Form->input('pass2', array('type' => 'password', 'required',
		'before' => '<div class="row">',
		'between' => '<div class="col-md-9">',
		'after' => '</div></div>',
		'label' => array('text' => 'Vérifier le mot de passe', 'class' => 'col-md-3', 'style' => 'text-align:center; padding: 5px 12px;'), 
		'required', 'class' => 'form-control', 
		'div' => array('class' => 'form-group')));

echo $this->Form->end(array(
		'label' => 'Créer mon compte', 'class' => 'btn btn-success',
		'div' => array('style' => 'text-align:right;'))); 

?>
