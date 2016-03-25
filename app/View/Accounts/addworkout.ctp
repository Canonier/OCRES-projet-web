<?php $this->assign('title', 'Ajouter Workout');?>

<?php

echo $this->Form->create('Workout');

// echo $this->Form->input('id');

echo $this->Form->input('date', array( 
		'before' => '<div class="row">',
		'between' => '<div class="col-md-9">',
		'after' => '</div></div>',
		'label' => array('text' => 'Date de début', 'class' => 'col-md-3', 'style' => 'text-align:center; padding: 5px 12px;'), 
		'required', 'class' => 'form-control', 
		'div' => array('class' => 'form-group')));


echo $this->Form->input('end_date', array( 
		'before' => '<div class="row">',
		'between' => '<div class="col-md-9">',
		'after' => '</div></div>',
		'label' => array('text' => 'Date de fin', 'class' => 'col-md-3', 'style' => 'text-align:center; padding: 5px 12px;'), 
		'required', 'class' => 'form-control', 
		'div' => array('class' => 'form-group')));

echo $this->Form->input('location_name', array( 
		'before' => '<div class="row">',
		'between' => '<div class="col-md-9">',
		'after' => '</div></div>',
		'label' => array('text' => 'Lieu', 'class' => 'col-md-3', 'style' => 'text-align:center; padding: 5px 12px;'), 
		'required', 'class' => 'form-control', 
		'div' => array('class' => 'form-group')));

echo $this->Form->input('description', array( 
		'before' => '<div class="row">',
		'between' => '<div class="col-md-9">',
		'after' => '</div></div>',
		'label' => array('text' => 'Description', 'class' => 'col-md-3', 'style' => 'text-align:center; padding: 5px 12px;'), 
		'type'=>'textarea',
		'required', 'class' => 'form-control', 
		'div' => array('class' => 'form-group')));

echo $this->Form->input('sport', array( 
		'before' => '<div class="row">',
		'between' => '<div class="col-md-9">',
		'after' => '</div></div>',
		'label' => array('text' => 'Sport', 'class' => 'col-md-3', 'style' => 'text-align:center; padding: 5px 12px;'), 
		'required', 'class' => 'form-control', 
		'div' => array('class' => 'form-group')));

echo $this->Form->input('contest_id', array( 
		'before' => '<div class="row">',
		'between' => '<div class="col-md-9">',
		'after' => '</div></div>',
		'label' => array('text' => 'Contest N°', 'class' => 'col-md-3', 'style' => 'text-align:center; padding: 5px 12px;'), 
		'required', 'class' => 'form-control', 
		'div' => array('class' => 'form-group')));

echo $this->Form->end(array(
		'label' => 'Ajouter', 'class' => 'btn btn-success',
		'div' => array('style' => 'text-align:right;')));
?>
<!-- CSS pour forcer l'affichage des select en ligne au format adéquat -->
<style type="text/css"> 
.col-md-9 select{
	display:inline-block;
    min-width: 100px;
    width: 16%;}
</style>

