<?php


class Attack
{
    public $AttackName;
    public $DamageInHitPoints;

    public function __construct($AttackName, $DamageInHitPoints)
    {
        $this->AttackName = $AttackName;
        $this->DamageInHitPoints = $DamageInHitPoints;
    }

    public function __toString()
    {
        return json_encode($this);
    }
}