

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./style.css">
	<title>Connexion</title>
</head>
<body>


	<?php session_start(); ?>
        <form class="" action="./admin.php" method="post">
          <input type="text" name="identifiant" value="" placeholder="identifiant">
          <input type="password" name="mdp" value="" placeholder="mdp">
          <input type="submit" value="Connexion">
        </form>







</body>
</html>
