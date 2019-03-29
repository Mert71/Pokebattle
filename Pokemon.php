<?php

abstract class Pokemon {
  
  public $EnergyType;
  public $Name;
  public $Hitpoints;
  public $Health;
  public $Attack;
  public $Weakness;
  public $Resistance;

  public function __construct($Name, $Hitpoints, $Energytype) {
    $this->Name = $Name;
  }
}

class Charmeleon extends Pokemon {

  // setup attacks, name, health
  function __construct() {

    parent::__construct("Charmeleon", 100, "Fire" );

    $this->Attacks[] = new Attack();
    $this->Attacks[] = new Attack();
  }


}
