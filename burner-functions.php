<?php
/*ZoloScan*/
	//Database to JSON
	$servername = "localhost";
	$database = "furnace_14_2";
	$username = "chuck";
	$password = "root";

	try {
		$pdo = new PDO("mysql:dbname=$database;host=$servername", $username, $password);
		$statement = $pdo->prepare("SELECT * FROM burner ORDER BY date_time_stamp DESC LIMIT 1");
		$statement->execute();
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);
		$json = json_encode($results, JSON_NUMERIC_CHECK);
	  }
	catch(PDOException $e)
	  {
	  	echo "Connection failed: " . $e->getMessage();
	  }

	$conn = null;
	$data = json_decode($json, true);
	
	//print_r($data);
?>