<?php $this->assign('title', 'Ajouter Membre');?>

<?php
echo $this->Form->create('Member');

echo $this->Form->input('email');
echo $this->Form->input('password');

echo $this->Form->end('Ajouter');
?>

