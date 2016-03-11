<?php 

echo $this->Form->Create('Member');

echo $this->Form->input('email');
echo $this->Form->input('password');

echo $this->Form->end('Se connecter');

?>