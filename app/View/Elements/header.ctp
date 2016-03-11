<header>

<?php echo $this->Html->link('Accueil', '/'); ?> 
<?php echo $this->Html->link('Mon Profil', array('controller' => 'Accounts', 'action' => 'myprofile')); ?> 
<?php echo $this->Html->link('Liste (membres)', array('controller' => 'Accounts', 'action' => 'halloffame')); ?> 
<?php echo $this->Html->link('Ajouter Membre', array('controller' => 'Accounts', 'action' => 'addmember')); ?> 
<?php echo $this->Html->link('Ajouter Device', array('controller' => 'Accounts', 'action' => 'adddevice')); ?> 
<?php echo $this->Html->link('Ajouter Workout', array('controller' => 'Accounts', 'action' => 'addworkout')); ?> 
<?php echo $this->Html->link('Ajouter Log', array('controller' => 'Accounts', 'action' => 'addlog')); ?> 
<?php echo $this->Html->link('Editer Membre', array('controller' => 'Accounts', 'action' => 'editmember')); ?> 
<?php echo $this->Html->link('Editer Device', array('controller' => 'Accounts', 'action' => 'editdevice')); ?> 
<?php echo $this->Html->link('Editer Workout', array('controller' => 'Accounts', 'action' => 'editworkout')); ?> 
<?php echo $this->Html->link('Valider Device', array('controller' => 'Accounts', 'action' => 'trustdevice')); ?> 
<?php echo $this->Html->link('Supprimer Membre', array('controller' => 'Accounts', 'action' => 'deletemember')); ?> 
<?php echo $this->Html->link('Supprimer Device', array('controller' => 'Accounts', 'action' => 'deletedevice')); ?> 
<?php echo $this->Html->link('Supprimer Workout', array('controller' => 'Accounts', 'action' => 'deleteworkout')); ?> 
<?php echo $this->Html->link('Site Liste', array('controller' => 'Accounts', 'action' => 'sitelist')); ?> 
<?php echo $this->Html->link('API (sans parametres)', array('controller' => 'Apis', 'action' => 'registerobject')); ?> 


</header>