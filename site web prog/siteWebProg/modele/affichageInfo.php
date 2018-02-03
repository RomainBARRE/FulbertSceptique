<?php
	include('conexionBD.php');

	$res = $base->query('SELECT nom, telephone, adressepostale FROM organisation');
	$affiche = $res->fetch();
	echo $affiche['nom'].'<br />';
	echo $affiche['telephone'].'<br />';
	echo $affiche['adressepostale'].'<br />';
?>