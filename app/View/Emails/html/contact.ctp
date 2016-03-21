<p><?php echo $name; ?> vous a envoyé un message :</p>

<p><?php echo nl2br(h($message)); //La fonction h bloque l'utilisation de balises html dans le formulaire - blindage du format du message et la fonction nl2br permet de garder la mise en page de l'utilisateur (saut de lignes etc...) ?></p>