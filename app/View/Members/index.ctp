
<ul>

<?php foreach ($members as $member) { 

	if($member['Member']['username'] != $username){

	?> 

	<li><?=
		$this->Html->link($member['Member']['username'], array('controller' => 'members', 'action' => 'profil', $member['Member']['id']));
	?></li>

<?php }} ?>

</ul>