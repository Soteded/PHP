<?php

class Potions{
    protected $heal;

    public function __construct ($healed) {
        $this->heal=$healed;
    }

    public function healing($target=null){
        echo "Mes couilles utilisent une potion de soin sur $target->name";
        $target->life += $this->heal;
        $target->life_bar();
    }

}?>