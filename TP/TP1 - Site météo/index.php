<html>
	<head>
		<?php
		date_default_timezone_set('France/Bordeaux');
		$heure = date('H');
		switch ($heure) {
			case $heure < 7:
				echo("<link rel='stylesheet' href='style.css' type='text/css'>");
				break;
			case 19 < $heure:
				echo("<link rel='stylesheet' href='style.css' type='text/css'>");
				break;
			default:
				break;
		}?>
	</head>
	<body>
	<h1>Super site météo</h1>
	<p>Nous sommes le : <?php echo date('l jS \d\e F Y');?></p>
	<p>Vous voulez la date de quelle ville ?</a>	
	<ul>
		<li><a href="paris.php">Paris</a></li>
		<li><a href="bordeaux.php">Bordeaux</a></li>
	</ul>
</body>
</html>
