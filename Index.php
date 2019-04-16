<?php

require 'Pokemon.php'; require 'Attack.php'; require 'Resistance.php'; require 'Weakness.php'; require 'Pikachu.php'; require 'Charmeleon.php';



$Pikachu = new Pikachu();
$Charmeleon = new Charmeleon();

echo $Charmeleon->Name . " HP " . $Charmeleon->Health . "/" . $Charmeleon->Hitpoints;
echo '<br>';
echo $Pikachu->Name . " HP " . $Pikachu->Health . "/" . $Pikachu->Hitpoints;
echo '<br>';
echo '<br>';
$Pikachu->DoAttack($Charmeleon);
echo '<br>';
$Charmeleon->DoAttack($Pikachu);
echo '<br>';
$Pikachu->DoAttack($Charmeleon);
