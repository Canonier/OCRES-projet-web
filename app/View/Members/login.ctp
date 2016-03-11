<?php 

echo $this->Form->Create('Member');

echo $this->Form->input('username');
echo $this->Form->input('password');

echo $this->Form->end('CoucouToi');

?>