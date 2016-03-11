<?php if(!empty($requests)){ ?>
<h2>Demandes d'Amis</h2>

	<ul>

	<?php foreach ($requests as $request) { 

		if($request['Member']['id'] != $userId){

		?>

		<li><?php
		echo $this->Html->link($request['Member']['email'], array('controller' => 'members', 'action' => 'profil', $request['Member']['id']));
		echo ' - ';
		echo $this->Html->link('Accepter', array('controller' => 'members', 'action' => 'accept', $request['Member']['id']));
		?></li>

	<?php } } ?>

	</ul>
<?php } ?>

<?php if(!empty($awaitings)){ ?>
<h2>En Attente d'Acceptation</h2>

	<ul>

	<?php foreach ($awaitings as $awaiting) { 

		if($awaiting['Member']['id'] != $userId){

		?>

		<li><?php
		echo $this->Html->link($awaiting['Member']['email'], array('controller' => 'members', 'action' => 'profil', $awaiting['Member']['id']));
		echo ' - ';
		echo $this->Html->link('Annuler', array('controller' => 'members', 'action' => 'cancel', $awaiting['Member']['id']));
		?></li>

	<?php } } ?>

	</ul>
<?php } ?>


<h2>Mes Amis</h2>

	<ul>

	<?php foreach ($friends as $friend) { 

		if($friend['Member']['id'] != $userId){

		?>

		<li><?php
		echo $this->Html->link($friend['Member']['email'], array('controller' => 'members', 'action' => 'profil', $friend['Member']['id']));
		echo ' - ';
		echo $this->Html->link('Supprimer', array('controller' => 'members', 'action' => 'delete', $friend['Member']['id']));
		?></li>

	<?php } } ?>

	</ul>






<h2>Autre Utilisateurs</h2>

	<ul>

	<?php foreach ($members as $member) { 

		if($member['Member']['id'] != $userId){

		?>

		<li><?php
		echo $this->Html->link($member['Member']['email'], array('controller' => 'members', 'action' => 'profil', $member['Member']['id']));
		echo ' - ';
		echo $this->Html->link('Ajouter', array('controller' => 'members', 'action' => 'add', $member['Member']['id']));
		?></li>

	<?php } } ?>

	</ul>