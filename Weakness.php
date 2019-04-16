<?php

class Weakness
{
    public $EnergyType;
    public $Multiplier;
    
    public function __construct($engtype, $multip)
    {
        $this->EnergyType = $engtype;
        $this->Multiplier = $multip;
    }
}
