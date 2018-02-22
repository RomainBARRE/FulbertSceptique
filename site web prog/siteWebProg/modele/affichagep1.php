<?php
	include('conexionBD.php');

	$res = $base->query('SELECT contenu FROM article WHERE id=10 AND idsite=8');
	$affiche = $res->fetch();
	echo $affiche['contenu'];
?>