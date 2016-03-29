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
<?php $urlHome = $this->Html->url('/'); ?>
<?php $urlRanking = $this->Html->url('/ranking'); ?>
<?php $urlMembers = $this->Html->url('/members'); ?>
<?php $urlMyProfile = $this->Html->url(array('controller' => 'accounts', 'action' => 'myprofile')); ?>
<?php $urlMyWorkouts = $this->Html->url(array('controller' => 'accounts', 'action' => 'myworkouts')); ?>
<?php $urlMyDevices = $this->Html->url(array('controller' => 'accounts', 'action' => 'mydevices')); ?>
<?php $urlContact = $this->Html->url('/contact'); ?>
<?php $urlTeam = $this->Html->url('/team'); ?>
<?php $urlCnil = $this->Html->url('/cnil'); ?>
<?php $urlFaq = $this->Html->url('/faq'); ?>
<?php $urlLogin = $this->Html->url('/members/login'); ?>
<?php $urlLogout = $this->Html->url('/members/logout'); ?>

<li class="<?= $active = $this->request->here == $urlHome? 'active': false; ?>">
	<a href="<?= $urlHome; ?>">Accueil</a>
</li>

<li class="<?= $active = $this->request->here == $urlRanking? 'active': false; ?>">
	<a href="<?= $urlRanking; ?>">Classement</a>
</li>

<?php if($authUser){ ?>
<li class="<?= $active = $this->request->here == $urlMembers? 'active': false; ?>">
	<a href="<?= $urlMembers; ?>">Mes Amis</a>
</li>
<li class="<?= $active = $this->request->here == $urlMyProfile? 'active': false; ?>">
	<a href="<?= $urlMyProfile; ?>">Mon Profil</a>
</li>
<li class="<?= $active = $this->request->here == $urlMyWorkouts? 'active': false; ?>">
	<a href="<?= $urlMyWorkouts; ?>">Mes Séances</a>
</li>
<li class="<?= $active = $this->request->here == $urlMyDevices? 'active': false; ?>">
	<a href="<?= $urlMyDevices; ?>">Mes Objets</a>
</li> 
<?php } ?>

<li class="dropdown <?= $active = $this->request->here == $urlContact? 'active': false; ?><?= $active = $this->request->here == $urlTeam? 'active': false; ?><?= $active = $this->request->here == $urlCnil? 'active': false; ?><?= $active = $this->request->here == $urlFaq? 'active': false; ?>">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li class="<?= $active = $this->request->here == $urlContact? 'active': false; ?>">
				<a href="<?= $urlContact; ?>">Contact</a>
			<li>
			<li class="<?= $active = $this->request->here == $urlTeam? 'active': false; ?>">
				<a href="<?= $urlTeam; ?>">l'Équipe</a>
			<li>
			<li class="<?= $active = $this->request->here == $urlCnil? 'active': false; ?>">
				<a href="<?= $urlCnil; ?>">C.N.I.L.</a>
			<li>
			<li class="<?= $active = $this->request->here == $urlFaq? 'active': false; ?>">
				<a href="<?= $urlFaq; ?>">F.A.Q.</a>
			</li>
		</ul>
	</a>
</li>
<?php if(!$authUser){ // If unconnected ?>
<li class="<?= $active = $this->request->here == $urlLogin? 'active': false; ?>">
	<a href="<?= $urlLogin; ?>">Connexion</a>
</li>
<?php }else{ ?>
<li class="<?= $active = $this->request->here == $urlLogout? 'active': false; ?>">
	<a href="<?= $urlLogout; ?>">Déconnexion</a>
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