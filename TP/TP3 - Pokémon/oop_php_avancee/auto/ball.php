<?php

class Balls implements Usable {
    protected $level;
    protected $name;

    public function __construct ($level, $name, $nbr_Inventaire) {
        $this->level = $level;
        $this->name = $name;
        $this->nbr_Inventaire = $nbr_Inventaire;
    }

    public function usage($target = null){
        if ($target->life > 0){
            if ($this->nbr_Inventaire > 0) {
                echo ('Vous lancez une pokeball !' . "\n");
                $captur_chance = (($target->maxLife - $target->life) / $target->maxLife) * (1 + ($this->level - $target->level / 25)) / 1;
                if ($captur_chance >= 1.5){
                    echo ($target->name.' a été capturé !');
                    $target->isCaptured==true;
                } else {
                    echo ('O no, '.$target->name.' s\'est échappé !');
                    $target->isCaptured==true;
                }
            } else {
                echo "Je n'ai plus de $this->name !";
            }
        }
    }
}?>