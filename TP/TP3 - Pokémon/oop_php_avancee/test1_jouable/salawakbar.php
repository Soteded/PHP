<?php

class Salawakbar extends Pokemon{

    public function __construct ($life, $level) {
        $this->name = "Salamèche";
        $this->life = $life;
        $this->level = $level;
        $this->type = "Feu";
        $this->strength = 10 + 7 * $level;
        $this->maxLife = 100 + 4 * $level;
    }

    public function level_up($up_life=6,$up_str=5){
        parent::level_up($up_life,$up_str);
    }

}?>