<?php 
	function createDBConnection() {
		$host = "localhost";
		$dbname = "dpw";
		$username = "root";
		$password = "";
	    try {
			$db = new PDO ("mysql:host=$host; dbname=$dbname", $username, $password);
			return $db;
		} catch(Exception $e) {
		echo $e->getMessage();
		die;
		}
	}
?>