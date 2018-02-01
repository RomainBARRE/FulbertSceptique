<!DOCTYPE html>
	<html>
		<head>
			<title>Accueil FulbertSceptique</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="contenu/css.css" />
			<link rel="icon" href="images/fraise.png"/>
		</head>
		<body>
			<header>
				<?php 
					include('vue/menuInd.html');
					include('vue/banniere.html');
				?>
			</header>
				<?php 
					include('vue/corps.html');
				?>
			<footer>
				<?php
					include('vue/basPageInd.html');
					include('modele/conexionBD.php');
				?>
			</footer>
		</body>
</html>