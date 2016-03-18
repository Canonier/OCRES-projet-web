<h2>Bienvenue dans le cercle OCRES</h2>
<p>Ce site web a pour objectif d'assurer la gestion des activités des membres du cercle sportif OCRES. En accédant à

	<?php if($authUser){ // If connected
	echo $this->Html->link('votre espace personnel', '/labonneadresse'); 
	}else{ 
	echo 'votre espace personnel'; 	
	}?> 

, vous aurez la possibilité de 

	<?php if($authUser){ // If connected
	echo $this->Html->link('consulter les séances', '/Accounts/myworkouts'); 
	}else{ 
	echo 'consulter les séances'; 	
	}?>  

auxquelles vous êtes inscrit(e),

	<?php if($authUser){ // If connected
	echo $this->Html->link('proposer vos propres workouts', '/Accounts/addworkout'); 
	}else{ 
	echo 'proposer vos propres workouts'; 	
	}?>

ou encore

<?php if($authUser){ // If connected
	echo $this->Html->link('ajouter vos différents objets connectés', '/Accounts/adddevice'); 
	}else{ 
	echo 'ajouter vos différents objets connectés'; 	
	}?>

 dédiés au sport.</p>

<?php if(!$authUser){  // If not connected ?>
	<p>Si vous n'avez pas encore de compte, nous vous invitons à accéder à la <?php echo $this->Html->link('page', '/members/create');?> de création de profil :)</p>
<?php } ?>

<h3>by Congard, Lepère, Locchi & Ravenel</h3>

