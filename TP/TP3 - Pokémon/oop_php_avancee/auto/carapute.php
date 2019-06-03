<?php

class Carapute extends Pokemon{

    public function __construct ($life, $level) {
        $this->name = "Carapuce";
        $this->life = $life;
        $this->level = $level;
        $this->type = "Eau";
        $this->strength = 10 + 2 * $level;
        $this->maxLife = 100 + 9 * $level;
    }

    public function level_up($up_life=9,$up_str=2){
        parent::level_up($up_life,$up_str);
    }

    public static function say_hi(){
        echo "Caraaaaaaaa !";
    }

}?>