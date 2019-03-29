<?php

class Pokemon
{
    public $Name;
    public $EnergyType;
    public $Hitpoints;
    public $Attacks = array();
    public $Weakness;
    public $Resistance;


    public function __construct($Name, $EnergyType, $Hitpoints, $Attacks, $Weakness, $Resistance)
    {
        $this->Name = $Name;
        $this->EnergyType = json_decode($EnergyType, true)["TypeName"];
        $this->Hitpoints = $Hitpoints;
        for ($i = 0; $i < count($Attacks); $i++){
            array_push($this->Attacks, json_decode($Attacks[$i], true)["AttackName"]);
            array_push($this->Attacks, json_decode($Attacks[$i], true)["DamageInHitPoints"]);
        }
        $this->Weakness = $Weakness;
        $this->Resistance = $Resistance;
    }

    public function __toString()
    {
        return json_encode($this);
    }

    public function attack($Attacker, $attackName, $Damage, $target){
        $chosenAttack = $attackName;
        $enemyType = $target->energyType;
        $damage = $Damage;
        foreach($target->Resistance as $resist){
            if($Attacker->EnergyType == $resist->TypeName){
                $damage = $damage - $resist->points;
                var_dump("first ".$damage);
            }
        }
        foreach($target->Weakness as $weak){
            if($Attacker->EnergyType == $weak->TypeName){
                $damage = $damage * $weak->multiplier;
                var_dump("second ".$damage);
            }
        }
        $target->takeDamage($damage, $target);
    }

    public function takeDamage($damagePoints, $target){
        $target->Hitpoints = $target->Hitpoints - $damagePoints;
        echo "current health of ".$target->Name." = ".$target->Hitpoints."<br><br>";
    }

}