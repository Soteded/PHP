<?php

session_start();

if(empty($_SESSION['reload'])){
    $_SESSION['reload'] = 1; // Valeur de base pour la $_SESSION
}

include 'pokemon.php';

include 'carapute.php';
include 'bulbitruc.php';
include 'salawakbar.php';

if($_SESSION['reload'] == 1){
 
    $pokemon = new Carapute(145, 5);
    $pokemon_s = new Bulbitruc(130, 5);
    // $sala = new Salawakbar(120, 5);

    $_SESSION['ser_pokemon'] = serialize($pokemon);
    $_SESSION['ser_pokemon_s'] = serialize($pokemon_s);
 
    $_SESSION['reload'] = 2;
}

echo '<h1>El combat pokemon</h1>';

$aled = unserialize($_SESSION['ser_pokemon']);

var_dump($aled);

?>

<!doctype html>
<html lang='fr'>
    <head>
        <meta charset='utf-8'>
        <title>Titre de la page</title>
    </head>
    <body>
        <form action="attaque.php" method="post">
            <input type="submit" value="Attaque">
        </form>
    </body>
</html>