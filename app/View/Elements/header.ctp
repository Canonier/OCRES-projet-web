<header>

<section style="opacity:0.3">
<?= $this->Html->link('Accueil', '/'); ?> 
<?= $this->Html->link('Mon Profil', array('controller' => 'Accounts', 'action' => 'myprofile')); ?> 
<?= $this->Html->link('Liste (membres)', array('controller' => 'Accounts', 'action' => 'halloffame')); ?> 
<?= $this->Html->link('Ajouter Membre', array('controller' => 'Accounts', 'action' => 'addmember')); ?> 
<?= $this->Html->link('Ajouter Device', array('controller' => 'Accounts', 'action' => 'adddevice')); ?> 
<?= $this->Html->link('Ajouter Workout', array('controller' => 'Accounts', 'action' => 'addworkout')); ?> 
<?= $this->Html->link('Ajouter Log', array('controller' => 'Accounts', 'action' => 'addlog')); ?> 
<?= $this->Html->link('Editer Membre', array('controller' => 'Accounts', 'action' => 'editmember')); ?> 
<?= $this->Html->link('Editer Device', array('controller' => 'Accounts', 'action' => 'editdevice')); ?> 
<?= $this->Html->link('Editer Workout', array('controller' => 'Accounts', 'action' => 'editworkout')); ?> 
<?= $this->Html->link('Valider Device', array('controller' => 'Accounts', 'action' => 'trustdevice')); ?> 
<?= $this->Html->link('Supprimer Membre', array('controller' => 'Accounts', 'action' => 'deletemember')); ?> 
<?= $this->Html->link('Supprimer Device', array('controller' => 'Accounts', 'action' => 'deletedevice')); ?> 
<?= $this->Html->link('Supprimer Workout', array('controller' => 'Accounts', 'action' => 'deleteworkout')); ?> 
<?= $this->Html->link('Site Liste', array('controller' => 'Accounts', 'action' => 'sitelist')); ?> 
<?= $this->Html->link('API (sans parametres)', array('controller' => 'Apis', 'action' => 'registerobject')); ?> 
</section>


<!-- Real Menu -->
<section>

<?php
// Always Showned
echo $this->Html->link('Home', '/').' ';
echo $this->Html->link('Ranking', '/ranking').' ';

if(!$authUser){ // If unconnected
	echo $this->Html->link('Log in', '/members/login').' '; 
}else{ // If connected
	echo $this->Html->link('My Profil', array('controller' => 'Accounts', 'action' => 'myprofile')).' '; 
	echo $this->Html->link('My Workouts', array('controller' => 'Accounts', 'action' => 'myworkouts')).' '; 
	echo $this->Html->link('My Devices', array('controller' => 'Accounts', 'action' => 'mydevices')).' '; 
	echo $this->Html->link('Contact', '/contact').' '; 	
	echo $this->Html->link('Team', '/team').' '; 	
	echo $this->Html->link('CNIL', '/cnil').' '; 	
	echo $this->Html->link('FAQ', '/faq').' '; 	
	echo $this->Html->link('Log Out', '/members/logout').' '; 		
}

?> 

<!-- <?php pr($authUser); ?>  -->

</section>

</header>