<?php
		try {
			$base = new PDO('mysql:host=localhost;dbname=G1LEAD;charset=utf8','G1S8','bts1');
			$base->exec('SET NAMES utf8');
		}

		catch(exception $e) {
			die("Erreur, les informations ne sont pas disponible".$e->getMessage());
		}	
?>