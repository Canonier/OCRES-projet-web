<h1><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span> Formulaire de contact</h1>
<p>Si vous rencontrez un problème technique ou tout simplement si vous avez des questions, des commentaires, des suggestions, des remarques, des avis ou des impressions à partager, n'hésitez pas à contacter notre équipe ! Nous vous répondrons dans les plus brefs délais.</p>


<?php 

echo $this->Form->Create('Contact');


	echo $this->Form->input('name', array( 
		'before' => '<div class="row">',
		'between' => '<div class="col-md-9">',
		'after' => '</div></div>',
		'label' => array('text' => 'Votre nom', 'class' => 'col-md-3', 'style' => 'text-align:center; padding: 5px 12px;'), 
		'required', 'class' => 'form-control', 
		'div' => array('class' => 'form-group'))); 

	echo $this->Form->input('email', array( 
		'before' => '<div class="row">',
		'type'=>'email',
		'between' => '<div class="col-md-9">',
		'after' => '</div></div>',
		'label' => array('text' => 'Votre adresse email', 'class' => 'col-md-3', 'style' => 'text-align:center; padding: 5px 12px;'), 
		'required', 'class' => 'form-control', 
		'div' => array('class' => 'form-group'))); 

	echo $this->Form->input('message', array( 
		'before' => '<div class="row">',
		'between' => '<div class="col-md-9">',
		'after' => '</div></div>',
		'label' => array('text' => 'Votre message', 'class' => 'col-md-3', 'style' => 'text-align:center; padding: 5px 12px;'), 
		'type'=>'textarea',
		'required', 'class' => 'form-control', 
		'div' => array('class' => 'form-group')));

	echo $this->Form->end(array(
		'label' => 'Envoyer', 'class' => 'btn btn-success',
		'div' => array('style' => 'text-align:right;')));

?>