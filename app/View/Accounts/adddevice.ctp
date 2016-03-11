<?php $this->assign('title', 'Ajouter Device'); ?>

<?php
echo $this->Form->create('Device');
	
echo $this->Form->input('Device.member_id', array('type' => "select", 'label' => 'Member', "options" => $members));
echo $this->Form->input('Device.serial');
echo $this->Form->input('Device.description');
echo $this->Form->input('Device.trusted');

echo $this->Form->end('Ajouter');
?>

