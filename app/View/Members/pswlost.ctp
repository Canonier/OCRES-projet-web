<h3>Mot de passe perdu ?</h3>

<?php

echo $this->Html->link(
    'Se connecter',
    '/members/login'
);

echo ' ou ';

echo $this->Html->link(
    's\'inscrire',
    '/members/create'
);


echo $this->Form->Create('Member');

echo $this->Form->input('email', array('required'));

echo $this->Form->end('Reset my password');

?>