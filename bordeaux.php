<html>
	<head>
		<?php
		$heure = date('H');
		switch ($heure) {
			case $heure < 7:
				include("head.html");
				break;
			case 19 < $heure:
				include("head.html");
				break;
			default:
				break;
		}
		?>
	</head>
	<body>
		<h1>Météo à Bordeaux</h1>
		<h2>Retournez au menu principal <a href="index.php">ici</a>.</h2>
		<?php
			for ($i = 0; $i <= 4; $i++){
				echo "<p>Date pour J+$i :</p>";
				echo "<img src='http://www.prevision-meteo.ch/uploads/widget/bordeaux_$i.png'>";
			}
		?>
	</body>
</html>
