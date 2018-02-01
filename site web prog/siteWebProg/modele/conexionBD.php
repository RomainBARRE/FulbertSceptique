<?php
	try {
	$base = new PDO('mysql:host=localhost; dbname=G1LEAD', 'G1S1', 'bts1');
	$base->exec('SET NAMES utf8');
	$resultat = $base->query('SELECT * FROM organisation ORDER BY id=1');
	}
	catch (exception $e) {
	    die('Erreur '.$e->getMessage());
	}

	echo $resultat
?>