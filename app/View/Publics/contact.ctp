<?php 

echo $this->Form->Create('Contact');

echo $this->Form->input('Votre nom');
echo $this->Form->input('Votre adresse mail', array('type'=>'email'));
echo $this->Form->input('Votre message');

echo $this->Form->end('Envoyer');

?>


<!-- check mail cake php 2.x pour créer les bons objets, ajouter le uses, envoyer au bon truc etc .... -->