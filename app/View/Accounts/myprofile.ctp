<?php $this->assign('title', 'Mon Profile');?>

<h3>Mon Email</h3>
<p><?= $raw['Member']['email']; ?></p>

<h3>Mon Avatar</h3>

<h4>Actuel</h4>
<?php 
if( file_exists( WWW_ROOT.'img'.DS.$raw['Member']['id'].'.png' ) ){
	echo $this->Html->image($raw['Member']['id'].'.png', array('alt' => 'Avatar', 'style' => 'max-width:150px;max-height:150px;'));
}else{
	echo $this->Html->image('default.jpg', array('alt' => 'Default Avatar', 'style' => 'max-width:150px;max-height:150px;'));
}

?>
<h4>Le changer</h4>
<p>Seuls les extensions ".jpg", ".jpeg" et ".png" sont autorisées.</p>
<?php 
echo $this->Form->create('Avatar',array('enctype'=>'multipart/form-data')); 
echo $this->Form->input('Upload', array('label' => '', 'type' => 'file', 'required', 'style' => 'font-size: 12px;'));
echo $this->Form->end('Changer mon avatar');
?>


<h3>Changer mon mot de passe</h3>
<?php 
echo $this->Form->Create('Password');

echo $this->Form->input('old', array('type' => 'password', 'label' => 'Ancien mot de passe', 'required'));
echo $this->Form->input('new', array('type' => 'password', 'label' => 'Nouveau mot de passe', 'required'));
echo $this->Form->input('verify', array('type' => 'password', 'label' => 'Vérifier le password', 'required'));

echo $this->Form->end('Changer mon mot de passe');

?>