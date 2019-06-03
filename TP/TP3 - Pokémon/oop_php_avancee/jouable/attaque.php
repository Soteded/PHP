<?php

include 'main.php';

$carapuce = unserialize($_SESSION['Carapuce']);
$bulbizarre = unserialize($_SESSION['Bulbizarre']);

if ($bulbizarre->life > 0){
    $carapuce->attak($bulbizarre);
    echo $bulbizarre->getName()." contre-attaque !";
    $bulbizarre->attak($carapuce);
}

$_SESSION['Carapuce'] = serialize($carapuce);
$_SESSION['Bulbizarre'] = serialize($bulbizarre);

?>