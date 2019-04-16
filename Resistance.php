<?php

class Resistance
{
    public $EnergyType;
    public $Value;

    public function __construct($engtype, $val) {
        $this->EnergyType = $engtype;
        $this->Value = $val;
    }
}
