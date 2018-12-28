<?php
	$dbhost = "localhost";
	$dbname = "name";
	$dbuser = "name";
	$dbpass = 'password';
	try{
		$db = new PDO("mysql:dbhost=$dbhost;dbname=$dbname", "$dbuser", "$dbpass");
	}catch(PDOException $e){
		echo $e->getMessage();
	}
?>
