<?php

abstract class Pokemon {
    protected $name;
    protected $life;
    protected $level;
    protected $type;
    protected $strength;
    protected $maxLife;
    protected $damage;

    public function attak($target=NULL){
        if ($this->life > 0){
            $this->damage = ceil($this->strength * (rand(900,1100) / 1000));
            echo ("$this->name attaque charge, il inflige $this->damage dégats !");
            echo '<br>';
            $this->loss_pv($target);
        }
    }

    public function loss_pv($target=NULL){
        $target->life = $target->life - $this->damage;
        $target->life_bar();
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

    public function level_up($up_life,$up_str){
        $this->level += 1;
        $this->life += $up_life;
        $this->maxLife += $up_life;
        $this->strength += $up_str;

        $level_up_text = $this->name . ' passe au niveau ' . $this->level . "\n"."Il gagne $up_life points de vie et $up_str points de force.\n";

        echo $level_up_text;
        return true;
    }

    public static function say_hi(){
        echo 'Hi !'."\n";
    }
}

?>