<?php

include 'pokemon.php';

include 'carapute.php';
include 'bulbitruc.php';
include 'salawakbar.php';

include 'usable.php';

include 'potions.php';
include 'ball.php';

$cara = new Carapute(145, 5);
$bulb = new Bulbitruc(130, 5);
$sala = new Salawakbar(120, 5);

$potion = new Potions(25,1,"Potion");
$superPotion = new Potions(50,1,"Superpotion");
$hyperPotion = new Potions(75,1,"Hyperpotion");

$pokeBall = new Balls(1, "Pokeball",1);
$superBall = new Balls(3, "Superball",1);
$hyperBall = new Balls(5, "Hyperball",1);

$whichBall = rand(1,3);

echo "===========================================<br>";
echo "=============== Début du combat ===============<br>";
echo "===========================================<br>";

echo "$cara->name, je te choisis !";
$cara->say_hi();
echo "$bulb->name, je te choisis !";
$bulb->say_hi();

echo "<br><br>";

$yourTurn = true;
$try = false;

while (($cara->life >= 0) && ($bulb->life >= 0) && ($bulb->isCaptured==false)) {
    if ($yourTurn == true) {
        if ((($cara->life*100)/$cara->maxLife) >= 40){
            if ($bulb->life <= 15 && $try == false) {
                switch ($whichBall) {
                    case 1:
                        $pokeBall->usage($bulb);
                        $try = true;
                        break;
                    case 2:
                        $superBall->usage($bulb);
                        $try = true;
                        break;
                    case 3:
                        $hyperBall->usage($bulb);
                        $try = true;
                        break;
                }
            } else {
                $cara->attak($bulb);
            }
            $yourTurn = false;
        } elseif ((40 >= (($cara->life*100)/$cara->maxLife)) && ((($cara->life*100)/$cara->maxLife) >= 30)) {
            $potion->usage($cara);
            $yourTurn = false;
        } elseif ((30 >= (($cara->life*100)/$cara->maxLife)) && ((($cara->life*100)/$cara->maxLife) >= 20)) {
            $superPotion->usage($cara);
            $yourTurn = false;
        } elseif ((20 >= (($cara->life*100)/$cara->maxLife)) && ((($cara->life*100)/$cara->maxLife) >= 10)) {
            $hyperPotion->usage($cara);
            $yourTurn = false;
        } else {
            $cara->attak($bulb);
        }
        
    } else {
        $bulb->attak($cara);
        $yourTurn = true;
    }
}

?>