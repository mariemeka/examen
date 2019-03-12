<?php
	$server = "localhost"; 
	$login = "root";
	$motdepasse = "";
	$dbname = "examen";

	/*mysql_connect("localhost", "root", "");
	mysql_select_db("examen");*/


		$conect = new PDO ('mysql: host ='.$server.'; dbname = '.$dbname.';charset = utf-8', $login, $motdepasse);





?>