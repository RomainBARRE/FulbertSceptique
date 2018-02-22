<?php
	fonction getBD()
	{
		$base = new PDO('mysql:host=localhost;dbname=g1lead;charset=utf8','root','');
		$base->exec('SET NAMES utf8');

		return $base;
		echo "Test ok";
	}

	fonction getmenu()
	{
		$base=getBD();

		return ;
	}

	fonction getArticle()
	{
		$base=getBD();

		return ;
	}

	fonction getInfo()
	{
		$base=getBD();

		$res = $base->query('SELECT nom, telephone, adressepostale FROM organisation');

		return $res;
	}


?>