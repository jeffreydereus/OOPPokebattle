<?php

class EnergyType
{
    public $TypeName;

    public function __construct($TypeName)
    {
        $this->TypeName = $TypeName;
    }

    public function __toString()
    {
        return json_encode($this);
    }
}