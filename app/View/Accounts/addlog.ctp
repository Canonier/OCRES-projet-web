<?php $this->assign('title', 'Ajouter Log');?>

<?php
echo $this->Form->create('Log');

// echo $this->Form->input('device_id');
// echo $this->Form->input('datetime');
echo $this->Form->input('location_latitude');
echo $this->Form->input('location_longitude');
echo $this->Form->input('log_type');
echo $this->Form->input('log_value');

echo $this->Form->end('Ajouter');
?>

