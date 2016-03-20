<h3>Mot de passe perdu ?</h3>

<?php

echo $this->Html->link(
    'Se connecter',
    '/members/login'
);

echo ' ou ';

echo $this->Html->link(
    'mot de passe perdu ?',
    '/members/pswlost'
);

echo $this->Form->Create('CreateMember');

echo $this->Form->input('email', array('required'));
echo $this->Form->input('pass1', array('type' => 'password', 'label' => 'Password', 'required'));
echo $this->Form->input('pass2', array('type' => 'password', 'label' => 'Vérifier le password', 'required'));

echo $this->Form->end('New account');

?>