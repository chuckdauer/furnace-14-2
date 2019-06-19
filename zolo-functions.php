<?php
/*ZoloScan*/
	//Database to JSON
	$servername = "localhost";
	$database = "furnace_14_2";
	$username = "chuck";
	$password = "root";

	try {
		$pdo = new PDO("mysql:dbname=$database;host=$servername", $username, $password);
		$statement = $pdo->prepare("SELECT * FROM zolo ORDER BY date_time_stamp DESC LIMIT 1");
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
	
	$blue = "filter: invert(25%) sepia(6%) saturate(6590%) hue-rotate(173deg) brightness(97%) contrast(93%);";
	$green = "filter: invert(39%) sepia(69%) saturate(439%) hue-rotate(102deg) brightness(97%) contrast(96%);";
	$yellow = "filter: invert(79%) sepia(52%) saturate(3136%) hue-rotate(343deg) brightness(106%) contrast(97%);";
	$red = "filter: invert(27%) sepia(68%) saturate(3737%) hue-rotate(348deg) brightness(106%) contrast(87%);";
	$test_white = "filter: invert(100%) sepia(0%) saturate(0%) hue-rotate(2deg) brightness(100%) contrast(100%);";
	
	/*Path color statements*/
	// Temp
	// Group 01
	// Path 01
	if ($data[0]['path_01_temp'] <= 2125) {$tpath01 = $blue;}
	elseif ($data[0]['path_01_temp'] <= 2250) {$tpath01 = $green;}
	elseif ($data[0]['path_01_temp'] <= 2375) {$tpath01 = $yellow;}
	elseif ($data[0]['path_01_temp'] <= 2500) {$tpath01 = $red;}
	// Path 02
	if ($data[0]['path_02_temp'] <= 2125) {$tpath02 = $blue;}
	elseif ($data[0]['path_02_temp'] <= 2250) {$tpath02 = $green;}
	elseif ($data[0]['path_02_temp'] <= 2375) {$tpath02 = $yellow;}
	elseif ($data[0]['path_02_temp'] <= 2500) {$tpath02 = $red;}
	// Path 03
	if ($data[0]['path_03_temp'] <= 2125) {$tpath03 = $blue;}
	elseif ($data[0]['path_03_temp'] <= 2250) {$tpath03 = $green;}
	elseif ($data[0]['path_03_temp'] <= 2375) {$tpath03 = $yellow;}
	elseif ($data[0]['path_03_temp'] <= 2500) {$tpath03 = $red;}
	// Path 13
	if ($data[0]['path_13_temp'] <= 2125) {$tpath13 = $blue;}
	elseif ($data[0]['path_13_temp'] <= 2250) {$tpath13 = $green;}
	elseif ($data[0]['path_13_temp'] <= 2375) {$tpath13 = $yellow;}
	elseif ($data[0]['path_13_temp'] <= 2500) {$tpath13 = $red;}
	// Path 14
	if ($data[0]['path_14_temp'] <= 2125) {$tpath14 = $blue;}
	elseif ($data[0]['path_14_temp'] <= 2250) {$tpath14 = $green;}
	elseif ($data[0]['path_14_temp'] <= 2375) {$tpath14 = $yellow;}
	elseif ($data[0]['path_14_temp'] <= 2500) {$tpath14 = $red;}
	// Group 02
	// Path 04
	if ($data[0]['path_04_temp'] <= 2125) {$tpath04 = $blue;}
	elseif ($data[0]['path_04_temp'] <= 2250) {$tpath04 = $green;}
	elseif ($data[0]['path_04_temp'] <= 2375) {$tpath04 = $yellow;}
	elseif ($data[0]['path_04_temp'] <= 2500) {$tpath04 = $red;}
	// Path 05
	if ($data[0]['path_05_temp'] <= 2125) {$tpath05 = $blue;}
	elseif ($data[0]['path_05_temp'] <= 2250) {$tpath05 = $green;}
	elseif ($data[0]['path_05_temp'] <= 2375) {$tpath05 = $yellow;}
	elseif ($data[0]['path_05_temp'] <= 2500) {$tpath05 = $red;}
	// Path 06
	if ($data[0]['path_06_temp'] <= 2125) {$tpath06 = $blue;}
	elseif ($data[0]['path_06_temp'] <= 2250) {$tpath06 = $green;}
	elseif ($data[0]['path_06_temp'] <= 2375) {$tpath06 = $yellow;}
	elseif ($data[0]['path_06_temp'] <= 2500) {$tpath06 = $red;}
	// Path 15
	if ($data[0]['path_15_temp'] <= 2125) {$tpath15 = $blue;}
	elseif ($data[0]['path_15_temp'] <= 2250) {$tpath15 = $green;}
	elseif ($data[0]['path_15_temp'] <= 2375) {$tpath15 = $yellow;}
	elseif ($data[0]['path_15_temp'] <= 2500) {$tpath15 = $red;}
	// Path 16
	if ($data[0]['path_16_temp'] <= 2125) {$tpath16 = $blue;}
	elseif ($data[0]['path_16_temp'] <= 2250) {$tpath16 = $green;}
	elseif ($data[0]['path_16_temp'] <= 2375) {$tpath16 = $yellow;}
	elseif ($data[0]['path_16_temp'] <= 2500) {$tpath16 = $red;}
	// Group 03
	// Path 07
	if ($data[0]['path_07_temp'] <= 2125) {$tpath07 = $blue;}
	elseif ($data[0]['path_07_temp'] <= 2250) {$tpath07 = $green;}
	elseif ($data[0]['path_07_temp'] <= 2375) {$tpath07 = $yellow;}
	elseif ($data[0]['path_07_temp'] <= 2500) {$tpath07 = $red;}
	// Path 08
	if ($data[0]['path_08_temp'] <= 2125) {$tpath08 = $blue;}
	elseif ($data[0]['path_08_temp'] <= 2250) {$tpath08 = $green;}
	elseif ($data[0]['path_08_temp'] <= 2375) {$tpath08 = $yellow;}
	elseif ($data[0]['path_08_temp'] <= 2500) {$tpath08 = $red;}
	// Path 09
	if ($data[0]['path_09_temp'] <= 2125) {$tpath09 = $blue;}
	elseif ($data[0]['path_09_temp'] <= 2250) {$tpath09 = $green;}
	elseif ($data[0]['path_09_temp'] <= 2375) {$tpath09 = $yellow;}
	elseif ($data[0]['path_09_temp'] <= 2500) {$tpath09 = $red;}
	// Path 17
	if ($data[0]['path_17_temp'] <= 2125) {$tpath17 = $blue;}
	elseif ($data[0]['path_17_temp'] <= 2250) {$tpath17 = $green;}
	elseif ($data[0]['path_17_temp'] <= 2375) {$tpath17 = $yellow;}
	elseif ($data[0]['path_17_temp'] <= 2500) {$tpath17 = $red;}
	// Path 18
	if ($data[0]['path_18_temp'] <= 2125) {$tpath18 = $blue;}
	elseif ($data[0]['path_18_temp'] <= 2250) {$tpath18 = $green;}
	elseif ($data[0]['path_18_temp'] <= 2375) {$tpath18 = $yellow;}
	elseif ($data[0]['path_18_temp'] <= 2500) {$tpath18 = $red;}
	// Group 04
	// Path 10
	if ($data[0]['path_10_temp'] <= 2125) {$tpath10 = $blue;}
	elseif ($data[0]['path_10_temp'] <= 2250) {$tpath10 = $green;}
	elseif ($data[0]['path_10_temp'] <= 2375) {$tpath10 = $yellow;}
	elseif ($data[0]['path_10_temp'] <= 2500) {$tpath10 = $red;}
	// Path 11
	if ($data[0]['path_11_temp'] <= 2125) {$tpath11 = $blue;}
	elseif ($data[0]['path_11_temp'] <= 2250) {$tpath11 = $green;}
	elseif ($data[0]['path_11_temp'] <= 2375) {$tpath11 = $yellow;}
	elseif ($data[0]['path_11_temp'] <= 2500) {$tpath11 = $red;}
	// Path 12
	if ($data[0]['path_12_temp'] <= 2125) {$tpath12 = $blue;}
	elseif ($data[0]['path_12_temp'] <= 2250) {$tpath12 = $green;}
	elseif ($data[0]['path_12_temp'] <= 2375) {$tpath12 = $yellow;}
	elseif ($data[0]['path_12_temp'] <= 2500) {$tpath12 = $red;}
	// Path 19
	if ($data[0]['path_19_temp'] <= 2125) {$tpath19 = $blue;}
	elseif ($data[0]['path_19_temp'] <= 2250) {$tpath19 = $green;}
	elseif ($data[0]['path_19_temp'] <= 2375) {$tpath19 = $yellow;}
	elseif ($data[0]['path_19_temp'] <= 2500) {$tpath19 = $red;}
	// Path 20
	if ($data[0]['path_20_temp'] <= 2125) {$tpath20 = $blue;}
	elseif ($data[0]['path_20_temp'] <= 2250) {$tpath20 = $green;}
	elseif ($data[0]['path_20_temp'] <= 2375) {$tpath20 = $yellow;}
	elseif ($data[0]['path_20_temp'] <= 2500) {$tpath20 = $red;}
	
	// Oxygen
	// Group 01
	// Path 01
	if ($data[0]['path_01_o2'] <= 2.1) {$opath01 = $blue;}
	elseif ($data[0]['path_01_o2'] <= 2.6) {$opath01 = $green;}
	elseif ($data[0]['path_01_o2'] <= 3.1) {$opath01 = $yellow;}
	elseif ($data[0]['path_01_o2'] <= 7.1) {$opath01 = $red;}
	// Path 02
	if ($data[0]['path_02_o2'] <= 2.1) {$opath02 = $blue;}
	elseif ($data[0]['path_02_o2'] <= 2.6) {$opath02 = $green;}
	elseif ($data[0]['path_02_o2'] <= 3.1) {$opath02 = $yellow;}
	elseif ($data[0]['path_02_o2'] <= 7.1) {$opath02 = $red;}
	// Path 03
	if ($data[0]['path_03_o2'] <= 2.1) {$opath03 = $blue;}
	elseif ($data[0]['path_03_o2'] <= 2.6) {$opath03 = $green;}
	elseif ($data[0]['path_03_o2'] <= 3.1) {$opath03 = $yellow;}
	elseif ($data[0]['path_03_o2'] <= 7.1) {$opath03 = $red;}
	// Path 13
	if ($data[0]['path_13_o2'] <= 2.1) {$opath13 = $blue;}
	elseif ($data[0]['path_13_o2'] <= 2.6) {$opath13 = $green;}
	elseif ($data[0]['path_13_o2'] <= 3.1) {$opath13 = $yellow;}
	elseif ($data[0]['path_13_o2'] <= 7.1) {$opath13 = $red;}
	// Path 14
	if ($data[0]['path_14_o2'] <= 2.1) {$opath14 = $blue;}
	elseif ($data[0]['path_14_o2'] <= 2.6) {$opath14 = $green;}
	elseif ($data[0]['path_14_o2'] <= 3.1) {$opath14 = $yellow;}
	elseif ($data[0]['path_14_o2'] <= 7.1) {$opath14 = $red;}
	// Group 02
	// Path 04
	if ($data[0]['path_04_o2'] <= 2.1) {$opath04 = $blue;}
	elseif ($data[0]['path_04_o2'] <= 2.6) {$opath04 = $green;}
	elseif ($data[0]['path_04_o2'] <= 3.1) {$opath04 = $yellow;}
	elseif ($data[0]['path_04_o2'] <= 7.1) {$opath04 = $red;}
	// Path 05
	if ($data[0]['path_05_o2'] <= 2.1) {$opath05 = $blue;}
	elseif ($data[0]['path_05_o2'] <= 2.6) {$opath05 = $green;}
	elseif ($data[0]['path_05_o2'] <= 3.1) {$opath05 = $yellow;}
	elseif ($data[0]['path_05_o2'] <= 7.1) {$opath05 = $red;}
	// Path 06
	if ($data[0]['path_06_o2'] <= 2.1) {$opath06 = $blue;}
	elseif ($data[0]['path_06_o2'] <= 2.6) {$opath06 = $green;}
	elseif ($data[0]['path_06_o2'] <= 3.1) {$opath06 = $yellow;}
	elseif ($data[0]['path_06_o2'] <= 7.1) {$opath06 = $red;}
	// Path 15
	if ($data[0]['path_15_o2'] <= 2.1) {$opath15 = $blue;}
	elseif ($data[0]['path_15_o2'] <= 2.6) {$opath15 = $green;}
	elseif ($data[0]['path_15_o2'] <= 3.1) {$opath15 = $yellow;}
	elseif ($data[0]['path_15_o2'] <= 7.1) {$opath15 = $red;}
	// Path 16
	if ($data[0]['path_16_o2'] <= 2.1) {$opath16 = $blue;}
	elseif ($data[0]['path_16_o2'] <= 2.6) {$opath16 = $green;}
	elseif ($data[0]['path_16_o2'] <= 3.1) {$opath16 = $yellow;}
	elseif ($data[0]['path_16_o2'] <= 7.1) {$opath16 = $red;}
	// Group 03
	// Path 07
	if ($data[0]['path_07_o2'] <= 2.1) {$opath07 = $blue;}
	elseif ($data[0]['path_07_o2'] <= 2.6) {$opath07 = $green;}
	elseif ($data[0]['path_07_o2'] <= 3.1) {$opath07 = $yellow;}
	elseif ($data[0]['path_07_o2'] <= 7.1) {$opath07 = $red;}
	// Path 08
	if ($data[0]['path_08_o2'] <= 2.1) {$opath08 = $blue;}
	elseif ($data[0]['path_08_o2'] <= 2.6) {$opath08 = $green;}
	elseif ($data[0]['path_08_o2'] <= 3.1) {$opath08 = $yellow;}
	elseif ($data[0]['path_08_o2'] <= 7.1) {$opath08 = $red;}
	// Path 09
	if ($data[0]['path_09_o2'] <= 2.1) {$opath09 = $blue;}
	elseif ($data[0]['path_09_o2'] <= 2.6) {$opath09 = $green;}
	elseif ($data[0]['path_09_o2'] <= 3.1) {$opath09 = $yellow;}
	elseif ($data[0]['path_09_o2'] <= 7.1) {$opath09 = $red;}
	// Path 17
	if ($data[0]['path_17_o2'] <= 2.1) {$opath17 = $blue;}
	elseif ($data[0]['path_17_o2'] <= 2.6) {$opath17 = $green;}
	elseif ($data[0]['path_17_o2'] <= 3.1) {$opath17 = $yellow;}
	elseif ($data[0]['path_17_o2'] <= 7.1) {$opath17 = $red;}
	// Path 18
	if ($data[0]['path_18_o2'] <= 2.1) {$opath18 = $blue;}
	elseif ($data[0]['path_18_o2'] <= 2.6) {$opath18 = $green;}
	elseif ($data[0]['path_18_o2'] <= 3.1) {$opath18 = $yellow;}
	elseif ($data[0]['path_18_o2'] <= 7.1) {$opath18 = $red;}
	// Group 04
	// Path 10
	if ($data[0]['path_10_o2'] <= 2.1 ) {$opath10 = $blue;}
	elseif ($data[0]['path_10_o2'] <= 2.6) {$opath10 = $green;}
	elseif ($data[0]['path_10_o2'] <= 3.1) {$opath10 = $yellow;}
	elseif ($data[0]['path_10_o2'] <= 7.1) {$opath10 = $red;}
	// Path 11
	if ($data[0]['path_11_o2'] <= 2.1) {$opath11 = $blue;}
	elseif ($data[0]['path_11_o2'] <= 2.6) {$opath11 = $green;}
	elseif ($data[0]['path_11_o2'] <= 3.1) {$opath11 = $yellow;}
	elseif ($data[0]['path_11_o2'] <= 7.1) {$opath11 = $red;}
	// Path 12
	if ($data[0]['path_12_o2'] <= 2.1) {$opath12 = $blue;}
	elseif ($data[0]['path_12_o2'] <= 2.6) {$opath12 = $green;}
	elseif ($data[0]['path_12_o2'] <= 3.1) {$opath12 = $yellow;}
	elseif ($data[0]['path_12_o2'] <= 7.1) {$opath12 = $red;}
	// Path 19
	if ($data[0]['path_19_o2'] <= 2.1) {$opath19 = $blue;}
	elseif ($data[0]['path_19_o2'] <= 2.6) {$opath19 = $green;}
	elseif ($data[0]['path_19_o2'] <= 3.1) {$opath19 = $yellow;}
	elseif ($data[0]['path_19_o2'] <= 7.1) {$opath19 = $red;}
	// Path 20
	if ($data[0]['path_20_o2'] <= 2.1) {$opath20 = $blue;}
	elseif ($data[0]['path_20_o2'] <= 2.6) {$opath20 = $green;}
	elseif ($data[0]['path_20_o2'] <= 3.1) {$opath20 = $yellow;}
	elseif ($data[0]['path_20_o2'] <= 7.1) {$opath20 = $red;}
	
	// Carbon Monoxide
	// Group 01
	// Path 01
	if ($data[0]['path_01_co2'] <= 0) {$cmpath01 = $blue;}
	elseif ($data[0]['path_01_co2'] <= 3.4) {$cmpath01 = $green;}
	elseif ($data[0]['path_01_co2'] <= 3.5) {$cmpath01 = $yellow;}
	elseif ($data[0]['path_01_co2'] <= 3.6) {$cmpath01 = $red;}
	// Path 02
	if ($data[0]['path_02_co2'] <= 0) {$cmpath02 = $blue;}
	elseif ($data[0]['path_02_co2'] <= 3.4) {$cmpath02 = $green;}
	elseif ($data[0]['path_02_co2'] <= 3.5) {$cmpath02 = $yellow;}
	elseif ($data[0]['path_02_co2'] <= 3.6) {$cmpath02 = $red;}
	// Path 03
	if ($data[0]['path_03_co2'] <= 0) {$cmpath03 = $blue;}
	elseif ($data[0]['path_03_co2'] <= 3.4) {$cmpath03 = $green;}
	elseif ($data[0]['path_03_co2'] <= 3.5) {$cmpath03 = $yellow;}
	elseif ($data[0]['path_03_co2'] <= 3.6) {$cmpath03 = $red;}
	// Path 13
	if ($data[0]['path_13_co2'] <= 0) {$cmpath13 = $blue;}
	elseif ($data[0]['path_13_co2'] <= 3.4) {$cmpath13 = $green;}
	elseif ($data[0]['path_13_co2'] <= 3.5) {$cmpath13 = $yellow;}
	elseif ($data[0]['path_13_co2'] <= 3.6) {$cmpath13 = $red;}
	// Path 14
	if ($data[0]['path_14_co2'] <= 0) {$cmpath14 = $blue;}
	elseif ($data[0]['path_14_co2'] <= 3.4) {$cmpath14 = $green;}
	elseif ($data[0]['path_14_co2'] <= 3.5) {$cmpath14 = $yellow;}
	elseif ($data[0]['path_14_co2'] <= 3.6) {$cmpath14 = $red;}
	// Group 02
	// Path 04
	if ($data[0]['path_04_co2'] <= 0) {$cmpath04 = $blue;}
	elseif ($data[0]['path_04_co2'] <= 3.4) {$cmpath04 = $green;}
	elseif ($data[0]['path_04_co2'] <= 3.5) {$cmpath04 = $yellow;}
	elseif ($data[0]['path_04_co2'] <= 3.6) {$cmpath04 = $red;}
	// Path 05
	if ($data[0]['path_05_co2'] <= 0) {$cmpath05 = $blue;}
	elseif ($data[0]['path_05_co2'] <= 3.4) {$cmpath05 = $green;}
	elseif ($data[0]['path_05_co2'] <= 3.5) {$cmpath05 = $yellow;}
	elseif ($data[0]['path_05_co2'] <= 3.6) {$cmpath05 = $red;}
	// Path 06
	if ($data[0]['path_06_co2'] <= 0) {$cmpath06 = $blue;}
	elseif ($data[0]['path_06_co2'] <= 3.4) {$cmpath06 = $green;}
	elseif ($data[0]['path_06_co2'] <= 3.5) {$cmpath06 = $yellow;}
	elseif ($data[0]['path_06_co2'] <= 3.6) {$cmpath06 = $red;}
	// Path 15
	if ($data[0]['path_15_co2'] <= 0) {$cmpath15 = $blue;}
	elseif ($data[0]['path_15_co2'] <= 3.4) {$cmpath15 = $green;}
	elseif ($data[0]['path_15_co2'] <= 3.5) {$cmpath15 = $yellow;}
	elseif ($data[0]['path_15_co2'] <= 3.6) {$cmpath15 = $red;}
	// Path 16
	if ($data[0]['path_16_co2'] <= 0) {$cmpath16 = $blue;}
	elseif ($data[0]['path_16_co2'] <= 3.4) {$cmpath16 = $green;}
	elseif ($data[0]['path_16_co2'] <= 3.5) {$cmpath16 = $yellow;}
	elseif ($data[0]['path_16_co2'] <= 3.6) {$cmpath16 = $red;}
	// Group 03
	// Path 07
	if ($data[0]['path_07_co2'] <= 0) {$cmpath07 = $blue;}
	elseif ($data[0]['path_07_co2'] <= 3.4) {$cmpath07 = $green;}
	elseif ($data[0]['path_07_co2'] <= 3.5) {$cmpath07 = $yellow;}
	elseif ($data[0]['path_07_co2'] <= 3.6) {$cmpath07 = $red;}
	// Path 08
	if ($data[0]['path_08_co2'] <= 0) {$cmpath08 = $blue;}
	elseif ($data[0]['path_08_co2'] <= 3.4) {$cmpath08 = $green;}
	elseif ($data[0]['path_08_co2'] <= 3.5) {$cmpath08 = $yellow;}
	elseif ($data[0]['path_08_co2'] <= 3.6) {$cmpath08 = $red;}
	// Path 09
	if ($data[0]['path_09_co2'] <= 0) {$cmpath09 = $blue;}
	elseif ($data[0]['path_09_co2'] <= 3.4) {$cmpath09 = $green;}
	elseif ($data[0]['path_09_co2'] <= 3.5) {$cmpath09 = $yellow;}
	elseif ($data[0]['path_09_co2'] <= 3.6) {$cmpath09 = $red;}
	// Path 17
	if ($data[0]['path_17_co2'] <= 0) {$cmpath17 = $blue;}
	elseif ($data[0]['path_17_co2'] <= 3.4) {$cmpath17 = $green;}
	elseif ($data[0]['path_17_co2'] <= 3.5) {$cmpath17 = $yellow;}
	elseif ($data[0]['path_17_co2'] <= 3.6) {$cmpath17 = $red;}
	// Path 18
	if ($data[0]['path_18_co2'] <= 0) {$cmpath18 = $blue;}
	elseif ($data[0]['path_18_co2'] <= 3.4) {$cmpath18 = $green;}
	elseif ($data[0]['path_18_co2'] <= 3.5) {$cmpath18 = $yellow;}
	elseif ($data[0]['path_18_co2'] <= 3.6) {$cmpath18 = $red;}
	// Group 04
	// Path 10
	if ($data[0]['path_10_co2'] <= 0 ) {$cmpath10 = $blue;}
	elseif ($data[0]['path_10_co2'] <= 3.4) {$cmpath10 = $green;}
	elseif ($data[0]['path_10_co2'] <= 3.5) {$cmpath10 = $yellow;}
	elseif ($data[0]['path_10_co2'] <= 3.6) {$cmpath10 = $red;}
	// Path 11
	if ($data[0]['path_11_co2'] <= 0) {$cmpath11 = $blue;}
	elseif ($data[0]['path_11_co2'] <= 3.4) {$cmpath11 = $green;}
	elseif ($data[0]['path_11_co2'] <= 3.5) {$cmpath11 = $yellow;}
	elseif ($data[0]['path_11_co2'] <= 3.6) {$cmpath11 = $red;}
	// Path 12
	if ($data[0]['path_12_co2'] <= 0) {$cmpath12 = $blue;}
	elseif ($data[0]['path_12_co2'] <= 3.4) {$cmpath12 = $green;}
	elseif ($data[0]['path_12_co2'] <= 3.5) {$cmpath12 = $yellow;}
	elseif ($data[0]['path_12_co2'] <= 3.6) {$cmpath12 = $red;}
	// Path 19
	if ($data[0]['path_19_co2'] <= 0) {$cmpath19 = $blue;}
	elseif ($data[0]['path_19_co2'] <= 3.4) {$cmpath19 = $green;}
	elseif ($data[0]['path_19_co2'] <= 3.5) {$cmpath19 = $yellow;}
	elseif ($data[0]['path_19_co2'] <= 3.6) {$cmpath19 = $red;}
	// Path 20
	if ($data[0]['path_20_co2'] <= 0) {$cmpath20 = $blue;}
	elseif ($data[0]['path_20_co2'] <= 3.4) {$cmpath20 = $green;}
	elseif ($data[0]['path_20_co2'] <= 3.5) {$cmpath20 = $yellow;}
	elseif ($data[0]['path_20_co2'] <= 3.6) {$cmpath20 = $red;}
/*ZoloScan*/
?>