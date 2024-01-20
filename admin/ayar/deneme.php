

<?php 
	
	try {
		
		$db = new PDO("mysql:host=localhost;dbname=vtismi";'root';'');
		$db=exec("SET NAMES 'utf8', SET CHARSET 'utf8'");

	} catch (Exception $e) {

		echo  $e->getMessage();
		
	}

 ?>

 <?php 

 		try{

 			$db = new PDO("myqsl:host=localhost;dbname=deneme";'root','');
 			$db->exec("SET NAMES'utf8',SET CHARSET'utf8'");


 		}catch(PDOexpection $e) {

 			echo $e->getMessage();
 		}


  ?>

 <?php 


 define('', '');
 do {
 	# code...
 } while ( <= 10);


?>

<?php 


	try{

		$databese = new PDO("mysql:host=localhost;dbname=dbismi";'root','');

	$databese->>exec("SET NAMES'utf8',Set NAMES'utf8'");
	}catch(PDOexception $e){

			echo  $e->getMessage();
	}

 ?>

 <?php 

 	try{

 		$db = new PDO("mysql:host=localhost;dbname=dbismi";'roo','');
  	$db->exec("SET NAMES'utf8',SET CHARSET'utf8'");
 	}catch(PDOexpection $e){

 		echo $e->getMessage();
 	}


 	print_r($e->errorInfo());

  ?>