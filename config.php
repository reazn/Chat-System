<?php
	$dbhost = "localhost";
	$dbname = "ChatTest";
	$dbuser = "ChatTest";
	$dbpass = 'khlcQY39cDzO0pW2';
	try{
		$db = new PDO("mysql:dbhost=$dbhost;dbname=$dbname", "$dbuser", "$dbpass");
	}catch(PDOException $e){
		echo $e->getMessage();
	}
?>
