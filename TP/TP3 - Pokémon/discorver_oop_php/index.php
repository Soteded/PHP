<?php
include 'pokemon.php';

$start_life = 100;
$start_life_s = 50;

$pokemon = new Pokemon('Carapuce',$start_life,5,'eau',10,$start_life);
$pokemon_s = new Pokemon('Ratata',$start_life_s,3,'normal',12,$start_life_s);

$pokeball = new Pokeball('Pokeball',1);
$superball = new Pokeball('Superball',2);
$hyperball = new Pokeball('Hyperball',3);

while((($pokemon_s->life * 100)/$pokemon_s->maxLife) >= 35){
     $pokemon->attak($pokemon_s);
     $pokemon_s->attak($pokemon);
};

$pokeball->capture($pokemon_s);

?>