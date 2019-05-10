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
