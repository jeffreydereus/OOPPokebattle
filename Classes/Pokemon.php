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
}