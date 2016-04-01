
<div class="row centered">
	<br><br>
	<div class="col-lg-4">
		<i class="fa fa-heart"></i>
		<h4>QUI SOMMES-NOUS ?</h4>
		<p>Ce site web a pour objectif d'assurer la gestion des activités des membres du cercle sportif OCRES.</p>
	</div><!-- col-lg-4 -->

	<div class="col-lg-4">
		<i class="fa fa-laptop"></i>
		<h4>SERVICES</h4>
		<p>En accédant à <?php if($authUser){ echo $this->Html->link('votre espace personnel', '/accounts/myprofile'); }else{ echo 'votre espace personnel'; }?>, vous aurez la possibilité de <?php if($authUser){ echo $this->Html->link('consulter les séances', '/accounts/myworkouts'); }else{ echo 'consulter les séances'; }?> auxquelles vous êtes inscrit(e), <?php if($authUser){ echo $this->Html->link('proposer vos propres workouts', '/accounts/addworkout'); }else{ echo 'proposer vos propres workouts'; }?> ou encore <?php if($authUser){ echo $this->Html->link('ajouter vos différents objets connectés', '/accounts/adddevice'); }else{ echo 'ajouter vos différents objets connectés'; }?> dédiés au sport.</p>
	</div><!-- col-lg-4 -->

	<div class="col-lg-4">
		<i class="fa fa-trophy"></i>
		<h4>MON COMPTE</h4>
		<p>Si vous n'avez pas encore de compte, nous vous invitons à accéder à la <?php echo $this->Html->link('page', '/members/create');?> de création de profil :)</p>
	</div><!-- col-lg-4 -->
</div><!-- row -->



