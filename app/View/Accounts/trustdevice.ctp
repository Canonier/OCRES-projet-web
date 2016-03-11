<?php $this->assign('title', 'Vérification Device');?>

<?php
echo $this->Form->create('Device');
	
echo $this->Form->input('id');
// // echo $this->Form->input('member_id');
// echo $this->Form->input('serial');
// echo $this->Form->input('description');
echo $this->Form->input('trusted');

echo $this->Form->end('Modifier');
?>

