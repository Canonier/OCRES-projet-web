<header>




    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?= $this->Html->url('/'); ?>"><i class="fa fa-circle"></i>CRES</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">

<!-- Real Menu -->

<li class="">
	<?= $this->Html->link('Home', '/'); ?>
</li>
<li class="">
	<?= $this->Html->link('Ranking', '/ranking'); ?>
</li>

<?php if($authUser){ // If connected ?>
<li class="">
	<?= $this->Html->link('My Profil', array('controller' => 'accounts', 'action' => 'myprofile')); ?>
</li>
<li class="">
<?= $this->Html->link('My Workouts', array('controller' => 'accounts', 'action' => 'myworkouts')); ?>
</li>
<li class="">
<?= $this->Html->link('My Devices', array('controller' => 'accounts', 'action' => 'mydevices')); ?>
</li> 
<?php } ?>

<li class="dropdown active">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li class="active">
			<?= $this->Html->link('Contact', '/contact'); ?>
			<li>
			<li class="">
			<?= $this->Html->link('Team', '/team'); ?>
			<li>
			<li class="">
			<?= $this->Html->link('CNIL', '/cnil'); ?>
			<li>
			<li class="">
			<?= $this->Html->link('FAQ', '/faq'); ?>
			</li>
		</ul>
	</a>
</li>
<?php if(!$authUser){ // If unconnected ?>
<li class="">
<?= $this->Html->link('Sign in/up', '/members/login'); ?>
</li>
<?php }else{ ?>
<li class="">
<?= $this->Html->link('Log Out', '/members/logout'); ?>
<li>
<?php } ?>



          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>




<!-- 
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
</section> -->

</header>