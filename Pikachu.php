<?php

 class Pikachu extends Pokemon
 {

   public $Name;

 public function __construct($Name){

   parent::__construct(60, 60, "Lightning") ;

   $this->Name = $Name;
   $this->AddAttack(new Attack("Electric Ring", 50));
   $this->AddAttack(new Attack("Pika Punch", 20));
   $this->Weakness = new Weakness("Fire", 1.5);
   $this->Resistance = new Resistance("Fighting", 20);
 }
}
 ?>
