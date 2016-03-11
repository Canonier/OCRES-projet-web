<?php $this->assign('title', 'Editer Device');?>

<?php
echo $this->Form->create('Device');
	
echo $this->Form->input('id');
echo $this->Form->input('member_id', array('type' => "select", 'label' => 'Member', "options" => $members));
echo $this->Form->input('serial');
echo $this->Form->input('description');
echo $this->Form->input('trusted');

echo $this->Form->end('Modifier');
?>

