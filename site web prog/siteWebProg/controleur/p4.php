<!DOCTYPE html>
	<html>
		<head>
			<title>Accueil FulbertSceptique</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../contenu/css.css" />
			<link rel="icon" href="../images/fraise.png"/>
		</head>
		<body>
			<header>
				<?php 
					include('../vue/menu.html');
				?>
			</header>
				
			<footer>
				<?php
					include('../vue/basPage.html');
					include('../modele/conexionBD.php');
				?>
			</footer>
		</body>
</html>