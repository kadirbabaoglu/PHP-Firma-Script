<?php

try {
	

	$db = new PDO("mysql:host=localhost;dbname=firma",'root','');
	$db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
	//echo"islem tmm"; 


} catch(PDOException $e){


	echo $e->getMessage();


}


?>