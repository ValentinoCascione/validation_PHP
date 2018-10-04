<?php

// je n'oublie pas de relancer la session pour pas qu'elle ne se ferme toute seule
session_start();

echo "Bienvenue " . $_POST['identifiant'];


?>

<br>

<a href="./onePage.php">Retour sur le site</a>

<br>

<a href="deconnexion.php">Déconnexion</a>