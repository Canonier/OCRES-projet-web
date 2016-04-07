<div class="row" style="position:relative">

	<div class="col-md-4">

		<?php if(!empty($friends)){ ?>
		<h2>Mes Amis (<?= count($friends); ?>)</h2>

			<ul>

			<?php foreach ($friends as $friend) { ?>

				<li><?php
				echo $this->Html->link($friend['Member']['email'], array('controller' => 'members', 'action' => 'profil', $friend['Member']['id']));
				echo ' - ';
				echo $this->Html->link('Supprimer', array('controller' => 'members', 'action' => 'delete', $friend['Member']['id']));
				?></li>

			<?php } ?>

			</ul>
		<?php } ?>


		<?php if(!empty($requests)){ ?>
		<h3>Demandes d'Amis</h3>

			<ul>

			<?php foreach ($requests as $request) { ?>

				<li><?php
				echo $this->Html->link($request['Member']['email'], array('controller' => 'members', 'action' => 'profil', $request['Member']['id']));
				echo ' - ';
				echo $this->Html->link('Accepter', array('controller' => 'members', 'action' => 'accept', $request['Member']['id']));
				?></li>

			<?php } ?>

			</ul>
		<?php } ?>

		<?php if(!empty($awaitings)){ ?>
		<h3>En Attente d'Acceptation</h3>

			<ul>

			<?php foreach ($awaitings as $awaiting) { ?>

				<li><?php
				echo $this->Html->link($awaiting['Member']['email'], array('controller' => 'members', 'action' => 'profil', $awaiting['Member']['id']));
				echo ' - ';
				echo $this->Html->link('Annuler', array('controller' => 'members', 'action' => 'cancel', $awaiting['Member']['id']));
				?></li>

			<?php } ?>

			</ul>
		<?php } ?>


		<?php if(!empty($members)){ ?>
		<h2>Autre Utilisateurs</h2>

			<ul>

			<?php foreach ($members as $member) { ?>

				<li><?php
				echo $this->Html->link($member['Member']['email'], array('controller' => 'members', 'action' => 'profil', $member['Member']['id']));
				echo ' - ';
				echo $this->Html->link('Ajouter', array('controller' => 'members', 'action' => 'add', $member['Member']['id']));
				?></li>

			<?php } ?>

			</ul>

		<?php } ?>

	</div>

	<div class="col-md-offset-1 col-md-7">

	<h2>Messagerie</h2>
	<?= $this->Html->link('Envoyer un message', array("controller" => "members", "action" => "send")); ?>

<?php foreach ($messages as $message) { 

	if($authUser['id'] != $message['Member1']['id']){ $friend = $message['Member1']; }else{ $friend = $message['Member2']; }
	if($message['Message']['read'] == 0 && $message['Member1']['id'] != $authUser['id']){ $unread = "unread"; }else{ $unread = ""; }

	?>

	<a href="<?= $this->Html->url(array("controller" => "members", "action" => "message", $message['Message']['id'])); ?>">
		<div class="row mailmessage <?= $unread; ?>" style="margin-top:15px;">
			<div class="col-sm-4"><?= $friend['email'] ?></div>
			<div class="col-sm-8"><?= $message['Message']['name'] ?></div>
		</div>
	</a>

<?php } ?>

	</div>

</div>