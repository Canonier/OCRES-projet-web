<?php if($authUser['id'] != $message['Member1']['id']){ $friend = $message['Member1']; }else{ $friend = $message['Member2']; } ?>
<?= $this->Html->link('<- Mes messages', array("controller" => "members", "action" => "index")); ?>
<h2>Votre message de <?= $friend['email'] ?></h2>

<h3><?= $message['Message']['name'] ?></h3>

<p>
	<?= $message['Message']['description'] ?>
</p>

<?= $this->Html->link('Répondre ->', array("controller" => "members", "action" => "send", $friend['id'], $message['Message']['id'])); ?>
