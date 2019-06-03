<?php

session_start();

include 'pokemon.php';

include 'carapute.php';
include 'bulbitruc.php';
include 'salawakbar.php';

include 'potion.php';

if (!isset($_SESSION['didit'])) {
    
    $cara = new Carapute(145, 5);
    $bulb = new Bulbitruc(130, 5);
    $sala = new Salawakbar(120, 5);

    $_SESSION['Carapuce']=serialize($cara);
    $_SESSION['Bulbizarre']=serialize($bulb);

    $_SESSION['didit'] = true;
}

$potion = new Potions(25);



?>

<!doctype html>
 
<html lang='fr'>
    <head>
        <meta charset='utf-8'>
        <title>Titre de la page</title>
        <style>
        .btn {
            border: 2px solid gray;
            color: gray;
            background-color: white;
            padding: 8px 20px;
            border-radius: 8px;
            font-size: 20px;
            font-weight: bold;
            margin-right: 10px;
        }
        .btn:hover{
            border: 2px solid gray;
            color: white;
            background-color: grey;
            padding: 8px 20px;
            border-radius: 8px;
            font-size: 20px;
            font-weight: bold;
        }
        .inline {display : inline-block;}
        </style>
    </head>
    <body>
        <div class="inline" role="group" style="display:flex;" aria-label="...">
            <form action="attaque.php" method="post">
                <input type="submit" class="btn" style="position:relative;" value="Attaque">
            </form>
            <form action="soin.php" method="post">
                <input type="submit" class="btn" style="position:relative;" value="Potion">
            </form>
            <form action="capture.php" method="post">
                <input type="submit" class="btn" style="position:relative;" value="Ball">
            </form>
            <form action="destroy.php" method="post">
                <input type="submit" class="btn" style="position:relative;" value="Restart">
            </form>
        </div>
        
    </body>
</html>