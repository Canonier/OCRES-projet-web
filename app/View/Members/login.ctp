<h3>Se Connecter</h3>

<?php

echo $this->Html->link(
    'S\'inscrire',
    '/members/create'
);

echo ' ou ';

echo $this->Html->link(
    'mot de passe perdu ?',
    '/members/pswlost'
);


echo $this->Form->Create('Member');

echo $this->Form->input('email', array('required'));
echo $this->Form->input('password', array('required'));

echo $this->Form->end('Se connecter');

?>