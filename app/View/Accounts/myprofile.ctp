<?php $this->assign('title', 'Mon Profile');?>

<div class="row">
	<h3>Mon Email</h3>
	<div class="col-sm-offset-1 col-sm-11">
		<?= $raw['Member']['email']; ?>
	</div>
</div>

<div class="row">
	<h3>Mon Avatar</h3>
	<div class="col-sm-offset-1 col-sm-5">
		<h4>Actuel</h4>
		<?php 
		if( file_exists( WWW_ROOT.'img'.DS.$raw['Member']['id'].'.png' ) ){
			echo $this->Html->image($raw['Member']['id'].'.png', array('alt' => 'Avatar', 'style' => 'max-width:150px;max-height:150px;'));
		}else{
			echo $this->Html->image('default.jpg', array('alt' => 'Default Avatar', 'style' => 'max-width:150px;max-height:150px;'));
		}
		?>
	</div>

	<div class="cal-sm-5">
		<h4>Le changer</h4>
		<p>Seuls les extensions ".jpg", ".jpeg" et ".png" sont autorisées.</p>
		<?php 
		echo $this->Form->create('Avatar',array('enctype'=>'multipart/form-data')); 
		echo $this->Form->input('Upload', array('label' => '', 'type' => 'file', 'required', 'style' => 'font-size: 12px;')); ?>
		<?= $this->Form->end(array(
		'label' => 'Changer mon avatar', 'class' => 'btn btn-success',
		'div' => array('style' => 'text-align:right;'))); ?>
	</div>
</div>

<div class="row">
	<h3>Changer mon mot de passe</h3>
	<div class="col-sm-offset-1 col-sm-11">
		<?= $this->Form->Create('Password'); ?>

		<?= $this->Form->input('old', array('type' => 'password', 
		'before' => '<div class="row">',
		'between' => '<div class="col-md-9">',
		'after' => '</div></div>',
		'label' => array('text' => 'Ancien mot de passe', 'class' => 'col-md-3', 'style' => 'text-align:center; padding: 5px 12px;'), 
		'required', 'class' => 'form-control', 
		'div' => array('class' => 'form-group'))); ?>

		<?= $this->Form->input('new', array('type' => 'password', 
		'before' => '<div class="row">',
		'between' => '<div class="col-md-9">',
		'after' => '</div></div>',
		'label' => array('text' => 'Nouveau mot de passe', 'class' => 'col-md-3', 'style' => 'text-align:center; padding: 5px 12px;'), 
		'required', 'class' => 'form-control', 
		'div' => array('class' => 'form-group'))); ?>

		<?= $this->Form->input('verify', array('type' => 'password', 
		'before' => '<div class="row">',
		'between' => '<div class="col-md-9">',
		'after' => '</div></div>',
		'label' => array('text' => 'Vérifier le mot de passe', 'class' => 'col-md-3', 'style' => 'text-align:center; padding: 5px 12px;'), 
		'required', 'class' => 'form-control', 
		'div' => array('class' => 'form-group'))); ?>

		<?= $this->Form->end(array(
		'label' => 'Changer mon mot de passe', 'class' => 'btn btn-success',
		'div' => array('style' => 'text-align:right;'))); ?>
	</div>
</div>