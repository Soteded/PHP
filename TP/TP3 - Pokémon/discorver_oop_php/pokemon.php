<?php

class Pokemon_Cara {
    public $name = 'Carapuce';
    public $life = 100;
    public $level = 5;
    public $type = 'eau';
    public $strength = 10;
    public $maxLife = 100;
}

class Pokemon {
    public $name;
    public $life;
    public $level;
    public $type;
    public $strength;
    public $maxLife;
    public $damage;

    public function __construct ($name, $life, $level, $type, $strength, $maxLife) {
        $this->name = $name;
        $this->life = $life;
        $this->level = $level;
        $this->type = $type;
        $this->strength = $strength;
        $this->maxLife = $maxLife;
    }

    public function attak($cible=NULL){
        if ($this->life > 0){
            $this->damage = $this->strength * (rand(900,1100) / 1000);
            $this->damage = ceil($this->damage);
            echo ("$this->name attaque charge, il inflige $this->damage dégats !");
            echo '<br>';
            $this->loss_pv($cible);
        }
    }

    public function loss_pv($cible=NULL){
        $cible->life = $cible->life - $this->damage;
        $cible->life_bar();
        echo '<br>';
    }

    public function life_bar(){
        if ($this->life > 0){
            echo ('Il reste '.$this->life.'/'.$this->maxLife.' PVs à '.$this->name.'.<br>');
            for($i = 0; $i < 100; $i++) {
                if($i < (($this->life * 100)/$this->maxLife)) {
                    echo '<span style="color:green;">|</span>';
                } else {
                    echo '<span style="color:red;">|</span>';
                }
            }
        } else {
            echo ($this->name . " est mis hors combat !");
        }
        echo '<br>';
    }

    public function level_up (){
        $this->level += 1;
        $this->life += 5;
        $this->strength += 2;

        $level_up_text = $this->name . ' passe au niveau ' . $this->level . "\nIl gagne 5 pts de vie et 2 pts de force.\n";

        echo $level_up_text;
        return true;
    }

    public static function say_hi(){
        echo 'Hi !'."\n";
    }
}

class Pokeball{
    public $name;
    public $lvl;

    public function __construct($name, $lvl){
        $this->name = $name;
        $this->lvl = $lvl;
    }

    public function capture($target=NULL){
        if ($target->life > 0){
            echo ('Vous lancez une pokeball !' . "\n");
            $captur_chance = (($target->maxLife - $target->life) / $target->maxLife) * (1 + ($this->lvl - $target->level / 25)) / 1;
            if ($captur_chance >= 1.5){
                echo ($target->name.' a été capturé !');
            } else {
                echo ('O no, '.$target->name.' s\'est échappé !');
            }
        }
        
    }
}

?>