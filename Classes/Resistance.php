<?php

class Resistance extends EnergyType
{
    public $Multiplier;

    public function __construct($TypeName, $Multiplier)
    {
        parent::__construct($TypeName);
        $this->Multiplier = $Multiplier;
    }

    public function __toString()
    {
        return parent::__toString();
    }
}