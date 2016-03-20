<header>

<section style="opacity:0.3">
<?= $this->Html->link('Accueil', '/'); ?> 
<?= $this->Html->link('Mon Profil', array('controller' => 'accounts', 'action' => 'myprofile')); ?> 
<?= $this->Html->link('Liste (membres)', array('controller' => 'accounts', 'action' => 'halloffame')); ?> 
<?= $this->Html->link('Ajouter Membre', array('controller' => 'accounts', 'action' => 'addmember')); ?> 
<?= $this->Html->link('Ajouter Device', array('controller' => 'accounts', 'action' => 'adddevice')); ?> 
<?= $this->Html->link('Ajouter Workout', array('controller' => 'accounts', 'action' => 'addworkout')); ?> 
<?= $this->Html->link('Ajouter Log', array('controller' => 'accounts', 'action' => 'addlog')); ?> 
<?= $this->Html->link('Editer Membre', array('controller' => 'accounts', 'action' => 'editmember')); ?> 
<?= $this->Html->link('Editer Device', array('controller' => 'accounts', 'action' => 'editdevice')); ?> 
<?= $this->Html->link('Editer Workout', array('controller' => 'accounts', 'action' => 'editworkout')); ?> 
<?= $this->Html->link('Valider Device', array('controller' => 'accounts', 'action' => 'trustdevice')); ?> 
<?= $this->Html->link('Supprimer Membre', array('controller' => 'accounts', 'action' => 'deletemember')); ?> 
<?= $this->Html->link('Supprimer Device', array('controller' => 'accounts', 'action' => 'deletedevice')); ?> 
<?= $this->Html->link('Supprimer Workout', array('controller' => 'accounts', 'action' => 'deleteworkout')); ?> 
<?= $this->Html->link('Site Liste', array('controller' => 'accounts', 'action' => 'sitelist')); ?> 
<?= $this->Html->link('API (sans parametres)', array('controller' => 'Apis', 'action' => 'registerobject')); ?> 
</section>


<!-- Real Menu -->
<section>

<?php
// Always Showned
echo $this->Html->link('Home', '/').' ';
echo $this->Html->link('Ranking', '/ranking').' ';

if($authUser){
	// If connected
	echo $this->Html->link('My Profil', array('controller' => 'accounts', 'action' => 'myprofile')).' '; 
	echo $this->Html->link('My Workouts', array('controller' => 'accounts', 'action' => 'myworkouts')).' '; 
	echo $this->Html->link('My Devices', array('controller' => 'accounts', 'action' => 'mydevices')).' '; 		
}

echo $this->Html->link('Contact', '/contact').' '; 	
echo $this->Html->link('Team', '/team').' '; 	
echo $this->Html->link('CNIL', '/cnil').' '; 	
echo $this->Html->link('FAQ', '/faq').' '; 

if(!$authUser){ // If unconnected
	echo $this->Html->link('Sign in/up', '/members/login').' '; 
}else{ 
	echo $this->Html->link('Log Out', '/members/logout').' '; 	
}

?> 

<!-- <?php pr($authUser); ?>  -->

</section>

</header>