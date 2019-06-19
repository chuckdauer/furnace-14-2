<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="refresh" content="60" />
		<title>Ember&trade; A Smart Combustion&trade; Solution</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<?php include('zolo-functions.php'); ?>
	<body>
		<div class="row">
				<div id="header" class="col align-items-center">
					<h1>Ember</h1>
					<span class="tradem">&trade;</span>
					<p class="tagline">A Smart Combustion</p><span class="tradem tradem-sm">&trade;</span> <p class="tagline tag-end">Solution</p>
					<a href="burnerdata.php" role="button" class="page-links btn btn-light">BurnerDATA</a><a href="zoloscan.php" role="button" class="page-links btn btn-light">ZoloSCAN</a>
				</div>
			</div>
		<div id="sections" class="row align-items-center">
				<div id="temp" class="col section temp">
					<span class="path-group one">
						<span class="path-color">
							<img src="img/top-path.png" class="path-top" style="<?php echo $tpath14 ?>">
							<img src="img/bottom-path.png" class="path-bottom" style="<?php echo $tpath13 ?>">
							<img src="img/left-path.png" class="path-left" style="<?php echo $tpath01 ?>">
							<img src="img/middle-path.png" class="path-middle" style="<?php echo $tpath02 ?>">
							<img src="img/right-path.png" class="path-right" style="<?php echo $tpath03 ?>">
						</span>
						<!-- path-left, path-middle, path-right, path-bottom, path-top -->
						<span class="value p1"><?php echo $data[0]['path_01_temp']; ?></span>
						<span class="value p2"><?php echo $data[0]['path_02_temp']; ?></span>
						<span class="value p3"><?php echo $data[0]['path_03_temp']; ?></span>
						<span class="value p13"><?php echo $data[0]['path_13_temp']; ?></span>
						<span class="value p14"><?php echo $data[0]['path_14_temp']; ?></span>
					</span>
					<span class="path-group two">
						<span class="path-color">
							<img src="img/top-path.png" class="path-top" style="<?php echo $tpath16 ?>">
							<img src="img/bottom-path.png" class="path-bottom" style="<?php echo $tpath15 ?>">
							<img src="img/left-path.png" class="path-left" style="<?php echo $tpath04 ?>">
							<img src="img/middle-path.png" class="path-middle" style="<?php echo $tpath05 ?>">
							<img src="img/right-path.png" class="path-right" style="<?php echo $tpath06 ?>">
						</span>
						<span class="value p4"><?php echo $data[0]['path_04_temp']; ?></span>
						<span class="value p5"><?php echo $data[0]['path_05_temp']; ?></span>
						<span class="value p6"><?php echo $data[0]['path_06_temp']; ?></span>
						<span class="value p15"><?php echo $data[0]['path_15_temp']; ?></span>
						<span class="value p16"><?php echo $data[0]['path_16_temp']; ?></span>
					</span>
					<span class="path-group three">
						<span class="path-color">
							<img src="img/top-path.png" class="path-top" style="<?php echo $tpath18 ?>">
							<img src="img/bottom-path.png" class="path-bottom" style="<?php echo $tpath17 ?>">
							<img src="img/left-path.png" class="path-left" style="<?php echo $tpath07 ?>">
							<img src="img/middle-path.png" class="path-middle" style="<?php echo $tpath08 ?>">
							<img src="img/right-path.png" class="path-right" style="<?php echo $tpath09 ?>">
						</span>
						<span class="value p7"><?php echo $data[0]['path_07_temp']; ?></span>
						<span class="value p8"><?php echo $data[0]['path_08_temp']; ?></span>
						<span class="value p9"><?php echo $data[0]['path_09_temp']; ?></span>
						<span class="value p17"><?php echo $data[0]['path_17_temp']; ?></span>
						<span class="value p18"><?php echo $data[0]['path_18_temp']; ?></span>
					</span>
					<span class="path-group four">
						<span class="path-color">
							<img src="img/top-path.png" class="path-top" style="<?php echo $tpath20 ?>">
							<img src="img/bottom-path.png" class="path-bottom" style="<?php echo $tpath19 ?>">
							<img src="img/left-path.png" class="path-left" style="<?php echo $tpath10 ?>">
							<img src="img/middle-path.png" class="path-middle" style="<?php echo $tpath11 ?>">
							<img src="img/right-path.png" class="path-right" style="<?php echo $tpath12 ?>">
						</span>
						<span class="value p10"><?php echo $data[0]['path_10_temp']; ?></span>
						<span class="value p11"><?php echo $data[0]['path_11_temp']; ?></span>
						<span class="value p12"><?php echo $data[0]['path_12_temp']; ?></span>
						<span class="value p19"><?php echo $data[0]['path_19_temp']; ?></span>
						<span class="value p20"><?php echo $data[0]['path_20_temp']; ?></span>
					</span>
					<br>
					<hr>
					<p class="accent">°F</p>
					<p>Temperature</p>
					<br>
				</div>
				<div id="oxygen" class="col section o2">
					<span class="path-group one">
						<span class="path-color">
							<img src="img/top-path.png" class="path-top" style="<?php echo $opath14 ?>">
							<img src="img/bottom-path.png" class="path-bottom" style="<?php echo $opath13 ?>">
							<img src="img/left-path.png" class="path-left" style="<?php echo $opath01 ?>">
							<img src="img/middle-path.png" class="path-middle" style="<?php echo $opath02 ?>">
							<img src="img/right-path.png" class="path-right" style="<?php echo $opath03 ?>">
						</span>
						<span class="value p1"><?php echo number_format($data[0]['path_01_o2'], 1, '.', ''); ?></span>
						<span class="value p2"><?php echo number_format($data[0]['path_02_o2'], 1, '.', ''); ?></span>
						<span class="value p3"><?php echo number_format($data[0]['path_03_o2'], 1, '.', ''); ?></span>
						<span class="value p13"><?php echo number_format($data[0]['path_13_o2'], 1, '.', ''); ?></span>
						<span class="value p14"><?php echo number_format($data[0]['path_14_o2'], 1, '.', ''); ?></span>
					</span>
					<span class="path-group two">
						<span class="path-color">
							<img src="img/top-path.png" class="path-top" style="<?php echo $opath16 ?>">
							<img src="img/bottom-path.png" class="path-bottom" style="<?php echo $opath15 ?>">
							<img src="img/left-path.png" class="path-left" style="<?php echo $opath04 ?>">
							<img src="img/middle-path.png" class="path-middle" style="<?php echo $opath05 ?>">
							<img src="img/right-path.png" class="path-right" style="<?php echo $opath06 ?>">
						</span>
						<span class="value p4"><?php echo number_format($data[0]['path_04_o2'], 1, '.', ''); ?></span>
						<span class="value p5"><?php echo number_format($data[0]['path_05_o2'], 1, '.', ''); ?></span>
						<span class="value p6"><?php echo number_format($data[0]['path_06_o2'], 1, '.', ''); ?></span>
						<span class="value p15"><?php echo number_format($data[0]['path_15_o2'], 1, '.', ''); ?></span>
						<span class="value p16"><?php echo number_format($data[0]['path_16_o2'], 1, '.', ''); ?></span>
					</span>
					<span class="path-group three">
						<span class="path-color">
							<img src="img/top-path.png" class="path-top" style="<?php echo $opath18 ?>">
							<img src="img/bottom-path.png" class="path-bottom" style="<?php echo $opath17 ?>">
							<img src="img/left-path.png" class="path-left" style="<?php echo $opath07 ?>">
							<img src="img/middle-path.png" class="path-middle" style="<?php echo $opath08 ?>">
							<img src="img/right-path.png" class="path-right" style="<?php echo $opath09 ?>">
						</span>
						<span class="value p7"><?php echo number_format($data[0]['path_07_o2'], 1, '.', ''); ?></span>
						<span class="value p8"><?php echo number_format($data[0]['path_08_o2'], 1, '.', ''); ?></span>
						<span class="value p9"><?php echo number_format($data[0]['path_09_o2'], 1, '.', ''); ?></span>
						<span class="value p17"><?php echo number_format($data[0]['path_17_o2'], 1, '.', ''); ?></span>
						<span class="value p18"><?php echo number_format($data[0]['path_18_o2'], 1, '.', ''); ?></span>
					</span>
					<span class="path-group four">
						<span class="path-color">
							<img src="img/top-path.png" class="path-top" style="<?php echo $opath20 ?>">
							<img src="img/bottom-path.png" class="path-bottom" style="<?php echo $opath19 ?>">
							<img src="img/left-path.png" class="path-left" style="<?php echo $opath10 ?>">
							<img src="img/middle-path.png" class="path-middle" style="<?php echo $opath11 ?>">
							<img src="img/right-path.png" class="path-right" style="<?php echo $opath12 ?>">
						</span>
						<span class="value p10"><?php echo number_format($data[0]['path_10_o2'], 1, '.', ''); ?></span>
						<span class="value p11"><?php echo number_format($data[0]['path_11_o2'], 1, '.', ''); ?></span>
						<span class="value p12"><?php echo number_format($data[0]['path_12_o2'], 1, '.', ''); ?></span>
						<span class="value p19"><?php echo number_format($data[0]['path_19_o2'], 1, '.', ''); ?></span>
						<span class="value p20"><?php echo number_format($data[0]['path_20_o2'], 1, '.', ''); ?></span>
					</span>
					<br>
					<hr>
					<p class="accent">%</p>
					<p>Oxygen</p>
					<br>
				</div>
				<div id="monoxide" class="col section co">
					<span class="path-group one">
						<span class="path-color">
							<img src="img/top-path.png" class="path-top" style="<?php echo $cmpath14 ?>">
							<img src="img/bottom-path.png" class="path-bottom" style="<?php echo $cmpath13 ?>">
							<img src="img/left-path.png" class="path-left" style="<?php echo $cmpath01 ?>">
							<img src="img/middle-path.png" class="path-middle" style="<?php echo $cmpath02 ?>">
							<img src="img/right-path.png" class="path-right" style="<?php echo $cmpath03 ?>">
						</span>
						<span class="value p1"><?php echo $data[0]['path_01_co2']; ?></span>
						<span class="value p2"><?php echo $data[0]['path_02_co2']; ?></span>
						<span class="value p3"><?php echo $data[0]['path_03_co2']; ?></span>
						<span class="value p13"><?php echo $data[0]['path_13_co2']; ?></span>
						<span class="value p14"><?php echo $data[0]['path_14_co2']; ?></span>
					</span>
					<span class="path-group two">
						<span class="path-color">
							<img src="img/top-path.png" class="path-top" style="<?php echo $cmpath16 ?>">
							<img src="img/bottom-path.png" class="path-bottom" style="<?php echo $cmpath15 ?>">
							<img src="img/left-path.png" class="path-left" style="<?php echo $cmpath04 ?>">
							<img src="img/middle-path.png" class="path-middle" style="<?php echo $cmpath05 ?>">
							<img src="img/right-path.png" class="path-right" style="<?php echo $cmpath06 ?>">
						</span>
						<span class="value p4"><?php echo $data[0]['path_04_co2']; ?></span>
						<span class="value p5"><?php echo $data[0]['path_05_co2']; ?></span>
						<span class="value p6"><?php echo $data[0]['path_06_co2']; ?></span>
						<span class="value p15"><?php echo $data[0]['path_15_co2']; ?></span>
						<span class="value p16"><?php echo $data[0]['path_16_co2']; ?></span>
					</span>
					<span class="path-group three">
						<span class="path-color">
							<img src="img/top-path.png" class="path-top" style="<?php echo $cmpath18 ?>">
							<img src="img/bottom-path.png" class="path-bottom" style="<?php echo $cmpath17 ?>">
							<img src="img/left-path.png" class="path-left" style="<?php echo $cmpath07 ?>">
							<img src="img/middle-path.png" class="path-middle" style="<?php echo $cmpath08 ?>">
							<img src="img/right-path.png" class="path-right" style="<?php echo $cmpath09 ?>">
						</span>
						<span class="value p7"><?php echo $data[0]['path_07_co2']; ?></span>
						<span class="value p8"><?php echo $data[0]['path_08_co2']; ?></span>
						<span class="value p9"><?php echo $data[0]['path_09_co2']; ?></span>
						<span class="value p17"><?php echo $data[0]['path_17_co2']; ?></span>
						<span class="value p18"><?php echo $data[0]['path_18_co2']; ?></span>
					</span>
					<span class="path-group four">
						<span class="path-color">
							<img src="img/top-path.png" class="path-top" style="<?php echo $cmpath20 ?>">
							<img src="img/bottom-path.png" class="path-bottom" style="<?php echo $cmpath19 ?>">
							<img src="img/left-path.png" class="path-left" style="<?php echo $cmpath10 ?>">
							<img src="img/middle-path.png" class="path-middle" style="<?php echo $cmpath11 ?>">
							<img src="img/right-path.png" class="path-right" style="<?php echo $cmpath12 ?>">
						</span>
						<span class="value p10"><?php echo $data[0]['path_10_co2']; ?></span>
						<span class="value p11"><?php echo $data[0]['path_11_co2']; ?></span>
						<span class="value p12"><?php echo $data[0]['path_12_co2']; ?></span>
						<span class="value p19"><?php echo $data[0]['path_19_co2']; ?></span>
						<span class="value p20"><?php echo $data[0]['path_20_co2']; ?></span>
					</span>
					<br>
					<hr>
					<p class="accent">PPM (x1000)</p>
					<p>Carbon Monoxide</p>
					<br>
				</div>
			</div>
	</body>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.bundle.js"></script>
</html>