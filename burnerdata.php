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
		<script src="js/chart.js"></script>
	</head>
	<?php include('burner-functions.php'); ?>
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
				<div id="burner" class="col section">
					<div id="burner-lg">
						<p id="damper-value" class="set">x</p>
						<p class="value">Damper</p>
						<hr>
						<p id="recommended-value" class="set">x</p>
						<p class="value">Recommended</p>
						<hr>
						<p id="lambda" class="set">x</p>
						<p class="value">Tip Health</p>
					</div>
					<div id="wall-burners">
						<p class="accent single-line">Wall</p>
						<div id="w1" class="wall-burner">
							<a class="accent single-line" onclick="updateValuesw1()">w1</a>
						</div>
						<div id="w2" class="wall-burner">
							<a class="accent single-line" onclick="updateValuesw2()">w2</a>
						</div>
						<div id="w3" class="wall-burner">
							<a class="accent single-line" onclick="updateValuesw3()">w3</a>
						</div>
						<div id="w4" class="wall-burner">
							<a class="accent single-line" onclick="updateValuesw4()">w4</a>
						</div>
					</div>
					<div id="floor-burners">
						<p class="accent single-line">Floor</p>
						<div id="f1" class="floor-burner">
							<a class="accent single-line" onclick="updateValuesf1()">f1</a>
						</div>
						<div id="f2" class="floor-burner">
							<a class="accent single-line" onclick="updateValuesf2()">f2</a>
						</div>
					</div>
					<div class="bottom">	
						<hr>
						<p class="accent">Damper Settings</p>
						<p>Burners</p>
					</div>
					<script>
							function updateValuesw1 () {
								document.getElementById("burner-lg").innerHTML = '';
								var updateDiv = document.createElement("div");
								updateDiv.innerHTML = '<p id="damper-value" class="set">7.5</p><p class="value">Damper</p><hr><p id="recommended-value" class="set">7.5</p><p class="value">Recommended</p><hr><p id="lambda" class="set">2</p><p class="value">Tip Health</p>';
								 document.getElementById('burner-lg').appendChild(updateDiv);
							};
							
							function updateValuesw2 () {
								document.getElementById("burner-lg").innerHTML = '';
								var updateDiv = document.createElement("div");
								updateDiv.innerHTML = '<p id="damper-value" class="set">6.5</p><p class="value">Damper</p><hr><p id="recommended-value" class="set">6.5</p><p class="value">Recommended</p><hr><p id="lambda" class="set">2</p><p class="value">Tip Health</p>';
								 document.getElementById('burner-lg').appendChild(updateDiv);
							};
							
							function updateValuesw3 () {
								document.getElementById("burner-lg").innerHTML = '';
								var updateDiv = document.createElement("div");
								updateDiv.innerHTML = '<p id="damper-value" class="set">7.0</p><p class="value">Damper</p><hr><p id="recommended-value" class="set">6.5</p><p class="value">Recommended</p><hr><p id="lambda" class="set">1</p><p class="value">Tip Health</p>';
								 document.getElementById('burner-lg').appendChild(updateDiv);
							};
							
							function updateValuesw4 () {
								document.getElementById("burner-lg").innerHTML = '';
								var updateDiv = document.createElement("div");
								updateDiv.innerHTML = '<p id="damper-value" class="set">7.0</p><p class="value">Damper</p><hr><p id="recommended-value" class="set">7.5</p><p class="value">Recommended</p><hr><p id="lambda" class="set">1</p><p class="value">Tip Health</p>';
								 document.getElementById('burner-lg').appendChild(updateDiv);
							};
							
							function updateValuesf1 () {
								document.getElementById("burner-lg").innerHTML = '';
								var updateDiv = document.createElement("div");
								updateDiv.innerHTML = '<p id="damper-value" class="set">3.5</p><p class="value">Damper</p><hr><p id="recommended-value" class="set">7.0</p><p class="value">Recommended</p><hr><p id="lambda" class="set">3</p><p class="value">Tip Health</p>';
								 document.getElementById('burner-lg').appendChild(updateDiv);
							};
							
							function updateValuesf2 () {
								document.getElementById("burner-lg").innerHTML = '';
								var updateDiv = document.createElement("div");
								updateDiv.innerHTML = '<p id="damper-value" class="set">7.5</p><p class="value">Damper</p><hr><p id="recommended-value" class="set">7.0</p><p class="value">Recommended</p><hr><p id="lambda" class="set">1</p><p class="value">Tip Health</p>';
								 document.getElementById('burner-lg').appendChild(updateDiv);
							};
					</script>
				</div>
				<div id="zones" class="col section">
					<div class="wall-floor">
						<div class="heatChart">
							<canvas id="wallHeatCanvas"></canvas>
							<p class="accent-sm">Heat Release</p>
						</div>
						<script>
							function getRandomIntHeat(min, max) {
							  min = 1.1;
							  max = 2.0;
							  return Math.floor(Math.random() * (max - min + 1)) + min;
							}

							Chart.defaults.global.defaultFontFamily = "Open Sans Condensed Light";
							var ctx_live = document.getElementById("wallHeatCanvas");
							var wallHeatChart = new Chart(ctx_live, {
							  type: 'line',
							  data: {
							    labels: [],
							    datasets: [{
							      data: [],
							      borderWidth: 1,
								  fill: false, 
							      borderColor:'#fbde7e',
							      label: 'Measured Wall Heat',
							    }, {
							      data: [],
							      borderWidth: 1,
								  fill: false, 
							      borderColor:'#fbb021',
							      label: 'Measured Floor Heat',
								  borderDash: [5]
								}, {
							      data: [],
							      borderWidth: 1,
								  fill: false, 
							      borderColor:'#ee3e32',
							      label: 'Calculated Wall Heat',
								}, {
							      data: [],
							      borderWidth: 1,
								  fill: false, 
							      borderColor:'#ff8c89',
							      label: 'Calculated Floor Heat',
								  borderDash: [5]
								}
								]
							  },
							  options: {
								  responsive: true
							  }
							});

							var getFData = function() {
							    wallHeatChart.data.labels.push(".");
							    wallHeatChart.data.datasets[0].data.push(getRandomIntHeat(1));
								wallHeatChart.data.datasets[1].data.push(getRandomIntHeat(1));
								wallHeatChart.data.datasets[2].data.push(getRandomIntHeat(1));
								wallHeatChart.data.datasets[3].data.push(getRandomIntHeat(1));
								wallHeatChart.update();
							};

							setInterval(getFData, 5000);
						</script>
						<div class="tipChart">
							<canvas id="wallTipCanvas" class="tipCanvas"></canvas>
							<p class="accent-sm">Tip Health</p>
						</div>
						<script>
							function getRandomIntTip(min, max) {
							  min = 1;
							  max = 2;
							  return Math.floor(Math.random() * (max - min + 1)) + min;
							}

							Chart.defaults.global.defaultFontFamily = "Open Sans Condensed Light";
							var ctx_live = document.getElementById("wallTipCanvas");
							var wallTipChart = new Chart(ctx_live, {
							  type: 'line',
							  data: {
							    labels: [],
							    datasets: [{
							      data: [],
							      borderWidth: 1,
								  fill: false, 
							      borderColor:'#1d4877',
							      label: 'Wall Tip Health',
							    },{
							      data: [],
							      borderWidth: 1,
								  fill: false, 
							      borderColor:'#1d88cc',
							      label: 'Floor Tip Health',
								  borderDash: [5]
							    },
								]
							  },
							  options: {
								  responsive: true
							  }
							});

							var getTData = function() {
							    wallTipChart.data.labels.push(".");
							    wallTipChart.data.datasets[0].data.push(getRandomIntTip(1));
								wallTipChart.data.datasets[1].data.push(getRandomIntTip(1));
								wallTipChart.update();
							};

							setInterval(getTData, 5000);
						</script>
					</div>
					<div class="bottom">	
						<hr>
						<p class="accent">Heat Release & Tip Health</p>
						<p>Zones</p>
					</div>
				</div>
				<div id="heater" class="col section">
					<canvas id="o2Canvas"></canvas>
					<p class="accent-sm">Oxygen</p>
					<script>
						function getRandomIntInclusive(min, max) {
						  min = 1.1;
						  max = 2.0;
						  return Math.floor(Math.random() * (max - min + 1)) + min;
						}
					
						Chart.defaults.global.defaultFontFamily = "Open Sans Condensed Light";
						var ctx_live = document.getElementById("o2Canvas");
						var o2Chart = new Chart(ctx_live, {
						  type: 'line',
						  data: {
						    labels: [],
						    datasets: [{
						      data: [],
						      borderWidth: 1,
							  fill: false,
						      borderColor:'#1b8a5a',
						      label: 'Measured O2',
						    }, {
						      data: [],
						      borderWidth: 1,
							  fill: false, 
						      borderColor:'#1bb975',
						      label: 'Expected O2',
							  borderDash: [5]
							}
							]
						  },
						  options: {
						  
						  }
						});

						var getData = function() {
						    o2Chart.data.labels.push(".");
						    o2Chart.data.datasets[0].data.push(getRandomIntInclusive(1));
							o2Chart.data.datasets[1].data.push(getRandomIntInclusive(1));
							o2Chart.update()
						};

						setInterval(getData, 5000);
					</script>
					<div class="bottom">	
						<hr>
						<p class="accent">Oxygen Measured/Expected</p>
						<p>Heater</p>
					</div>
				</div>
		</div>
	</body>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.bundle.js"></script>
</html>