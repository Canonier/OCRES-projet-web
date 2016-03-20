
<h2>Mes Séances</h2>

<?= $this->Html->link('Créer une séance', array('controller' => 'accounts', 'action' => 'addworkout')) ?>


<?php foreach ($workouts as $workout) { ?>

<section>
	<h3>Lieu : <b><?= $workout['Workout']['location_name']; ?></b> — Sport : <b><?= $workout['Workout']['sport']; ?></b></h3>
	<p>du <?= date("d/m/Y H:i:s", strtotime($workout['Workout']['date'])); ?> au <?= date("d/m/Y H:i:s", strtotime($workout['Workout']['end_date'])); ?></p>
	<p><?= $workout['Workout']['description']; ?></p>

	<ul>

	<?php foreach ($workout['Log'] as $log) { ?>

	<li>
		<?= date("d/m/Y H:i:s", strtotime($log['datetime'])); ?>
		=> 
		<?= $log['log_value']; ?>
	</li>

	<?php } ?>

	<li>
<?= $this->Html->link('Ajouter un relevé', array('controller' => 'accounts', 'action' => 'addlog', $workout['Workout']['id'])) ?>
	</li>

	</ul>
</section>

<?php } ?>