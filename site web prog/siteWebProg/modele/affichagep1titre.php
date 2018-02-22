<?php
	include('conexionBD.php');

	$res = $base->query('SELECT titre FROM article WHERE id=10 AND idsite=8');
	$affiche = $res->fetch();
	echo $affiche['titre'];
?>