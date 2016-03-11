<?php $this->assign('title', 'Editer Membre');?>

<?php

echo $this->Form->create('Member');

echo $this->Form->input('id');
echo $this->Form->input('email');
echo $this->Form->input('password');

echo $this->Form->end('Modifier');
?>

