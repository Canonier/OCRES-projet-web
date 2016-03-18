<h3>Se Connecter</h3>

<?php

echo $this->Html->link(
    'S\'inscrire',
    '/members/create',
    array('class' => 'button')
);

echo $this->Html->link(
    'Identifiant Perdu ?',
    '/members/pswlost',
    array('class' => 'button')
);


echo $this->Form->Create('Member');

echo $this->Form->input('email');
echo $this->Form->input('password');

echo $this->Form->end('Se connecter');

?>