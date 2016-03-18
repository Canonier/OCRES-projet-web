<?php 

echo $this->Form->Create('CreateMember');

echo $this->Form->input('email');
echo $this->Form->input('pass1');
echo $this->Form->input('pass2');

echo $this->Form->end('New account');

?>