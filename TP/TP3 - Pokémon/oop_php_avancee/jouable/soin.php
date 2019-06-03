<?php

include 'main.php';

$carapuce = unserialize($_SESSION['Carapuce']);
$bulbizarre = unserialize($_SESSION['Bulbizarre']);

$potion->healing($carapuce);
$bulbizarre->attak($carapuce);

$_SESSION['Carapuce'] = serialize($carapuce);
$_SESSION['Bulbizarre'] = serialize($bulbizarre);

?>