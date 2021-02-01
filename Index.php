<?php

require 'Pokemon.php'; require 'Attack.php'; require 'Resistance.php'; require 'Weakness.php'; require 'Pikachu.php'; require 'Charmeleon.php';
?><style><?php include 'CSS/main.css';?> </style>


<?php
  $Pikachu = new Pikachu("pika");
  $Charmeleon = new Charmeleon("charmingCharmi");

?>

<div class="charInfo">
  <?php
  echo $Charmeleon->Name . " HP " . $Charmeleon->Health . "/" . $Charmeleon->Hitpoints;
  ?>
</div>

<img id="charmFoto" src="CSS/charm.png" alt="">
<?php
echo '<br>';
?>

<div class="pikaInfo">
  <img id="pikaFoto" src="CSS/pika.png" alt="">
  <?php
  echo $Pikachu->Name . " HP " . $Pikachu->Health . "/" . $Pikachu->Hitpoints;
  ?>
</div>


<div class="battleInfo">
  <?php
  $Pikachu->DoAttack($Charmeleon);

  echo '<br>';
  $Charmeleon->DoAttack($Pikachu);

  echo '<br>';
  $Pikachu->DoAttack($Charmeleon);
  echo '<br>';
  ?>
</div>
