<?php

class Bulbitruc extends Pokemon{

    public function __construct ($life, $level) {
        $this->name = "Bulbizarre";
        $this->life = $life;
        $this->level = $level;
        $this->type = "Plante";
        $this->strength = 10 + 5 * $level;
        $this->maxLife = 100 + 6 * $level;
    }

    public function level_up($up_life=6,$up_str=5){
        parent::level_up($up_life,$up_str);
    }

    public static function say_hi(){
        echo "Bulbiiiiiiiiiii !";
    }

}?>