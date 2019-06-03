<?php

class Potions implements Usable {
    protected $heal_life;
    protected $nbr_Inventaire;
    protected $name;

    public function __construct ($heal_life,$nbr_Inventaire,$name) {
        $this->heal_life = $heal_life;
        $this->nbr_Inventaire = $nbr_Inventaire;
        $this->name = $name;
    }

    public function usage($target = null){
        if ($this->nbr_Inventaire > 0) {
            echo "$target->name est soigné de $this->heal_life PVs !";
            $target->life += $this->heal_life;
            $this->nbr_Inventaire -= 1 ;
        } else {
            echo "Je n'ai plus de $this->name !";
        }
        
    }
}?>