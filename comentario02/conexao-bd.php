<?php
try{
	$pdo = new PDO("mysql:host=localhost;dbname=id5794465_camila","id5794465_root","24682468");
}catch(PDOException $e){
		echo $e - >getMessage();
	}

?>