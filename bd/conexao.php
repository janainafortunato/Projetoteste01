<?php

	$dbname = "camila";
	$usuario="root";
	$senha = "311291cr";
	
try {
	  	$conn = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $senha);
	  	// $conn = new PDO("mysql:host=localhost:3306;dbname=id5794465_camila","id5794465_root","24682468"); //conexão webhost
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}
 
?>