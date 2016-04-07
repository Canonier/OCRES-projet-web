<?= $this->Form->create('SendMessage'); ?>

<?= $this->Form->input('member2_id', array( 
		'options' => $members,
		'before' => '<div class="row">',
		'between' => '<div class="col-md-9">',
		'after' => '</div></div>',
		'label' => array('text' => 'Destinataire', 'class' => 'col-md-3', 'style' => 'text-align:center; padding: 5px 12px;'), 
		'required', 'class' => 'form-control', 
		'div' => array('class' => 'form-group'))); 
?>

<?= $this->Form->input('name', array( 
		'before' => '<div class="row">',
		'between' => '<div class="col-md-9">',
		'after' => '</div></div>',
		'value' => $title,
		'label' => array('text' => 'Titre', 'class' => 'col-md-3', 'style' => 'text-align:center; padding: 5px 12px;'), 
		'required', 'class' => 'form-control', 
		'div' => array('class' => 'form-group'))); 
?>

<?= $this->Form->input('description', array( 
		'type' => 'textarea',
		'before' => '<div class="row">',
		'between' => '<div class="col-md-9">',
		'after' => '</div></div>',
		'label' => array('text' => 'Votre message', 'class' => 'col-md-3', 'style' => 'text-align:center; padding: 5px 12px;'), 
		'required', 'class' => 'form-control', 
		'div' => array('class' => 'form-group'))); 
?>

<?= $this->Form->end(array(
		'label' => 'Envoyer', 'class' => 'btn btn-success',
		'div' => array('style' => 'text-align:right;')));
?>