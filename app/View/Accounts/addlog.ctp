<?php $this->assign('title', 'Ajouter Log');?>

<?php
echo $this->Form->create('Log');

// echo $this->Form->input('device_id');
// echo $this->Form->input('datetime');

echo $this->Form->input('location_latitude', array( 
		'before' => '<div class="row">',
		'between' => '<div class="col-md-9">',
		'after' => '</div></div>',
		'label' => array('text' => 'Latitude', 'class' => 'col-md-3', 'style' => 'text-align:center; padding: 5px 12px;'), 
		'required', 'class' => 'form-control', 
		'div' => array('class' => 'form-group'))); 

echo $this->Form->input('location_longitude', array( 
		'before' => '<div class="row">',
		'between' => '<div class="col-md-9">',
		'after' => '</div></div>',
		'label' => array('text' => 'Longitude', 'class' => 'col-md-3', 'style' => 'text-align:center; padding: 5px 12px;'), 
		'required', 'class' => 'form-control', 
		'div' => array('class' => 'form-group'))); 

echo $this->Form->input('log_type', array( 
		'before' => '<div class="row">',
		'between' => '<div class="col-md-9">',
		'after' => '</div></div>',
		'label' => array('text' => 'Type de log', 'class' => 'col-md-3', 'style' => 'text-align:center; padding: 5px 12px;'), 
		'required', 'class' => 'form-control', 
		'div' => array('class' => 'form-group'))); 

echo $this->Form->input('log_value', array( 
		'before' => '<div class="row">',
		'between' => '<div class="col-md-9">',
		'after' => '</div></div>',
		'label' => array('text' => 'Valeur de log', 'class' => 'col-md-3', 'style' => 'text-align:center; padding: 5px 12px;'), 
		'required', 'class' => 'form-control', 
		'div' => array('class' => 'form-group'))); 


echo $this->Form->end(array(
		'label' => 'Ajouter', 'class' => 'btn btn-success',
		'div' => array('style' => 'text-align:right;')));

?>


