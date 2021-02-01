<?php

 class Charmeleon extends Pokemon
 {

 public function __construct($Name){
   parent::__construct(60, 60, "Fire") ;

   $this->Name = $Name;
   $this->AddAttack(new Attack("Head Butt", 10));
   $this->AddAttack(new Attack("Flare", 30));
   $this->Weakness = new Weakness("Water", 2);
   $this->Resistance = new Resistance("Fire", 10);

 }

}
 ?>
