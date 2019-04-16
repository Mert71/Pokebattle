<?php

 class Charmeleon extends Pokemon
 {
 public function __construct(){


   parent::__construct("Charmeleon", 60, 60, "Fire") ;

   $this->AddAttack(new Attack("Head Butt", 10));
   $this->AddAttack(new Attack("Flare", 30));
   $this->Weakness = new Weakness("Water", 2);
   $this->Resistance = new Resistance("Fire", 10);

 }

}
 ?>
