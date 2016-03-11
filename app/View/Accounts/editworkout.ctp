<?php $this->assign('title', 'Editer Workout');?>

<?php

echo $this->Form->create('Workout');

echo $this->Form->input('id');
// echo $this->Form->input('member_id');
echo $this->Form->input('date');
echo $this->Form->input('end_date');
echo $this->Form->input('location_name');
echo $this->Form->input('description');
echo $this->Form->input('sport');
// echo $this->Form->input('contest_id');

echo $this->Form->end('Modifier');
?>

