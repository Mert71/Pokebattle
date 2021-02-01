<?php
 class Pokemon
{
    public $EnergyType;
    public $Name;
    public $Hitpoints;
    public $Health;
    public $Attack;
    public $Weakness;
    public $Resistance;

    public function __construct($healthp, $hitp, $et)
    {
        $this->EnergyType = $et;
        $this->Health = $healthp;
        $this->Hitpoints = $hitp;
        $this->Attack = [];
    }

    public function AddAttack(Attack $a) {
      $this->Attack[] = $a;
    }

    public function GetName() {
      return $this->Name;
    }

    public function GetHealth() {
      return $this->Health;
    }

    function DoAttack($target)
    {
        echo $this->Name . ' will attack ' . $target->Name . ' using ' . $this->Attack[0]->GetName();
        echo '<br>';
        if ($this->EnergyType == $target->Weakness->EnergyType) {
            $target->Health = $this->GetHealth(); - ($this->Attack[0]->AttackPoints * $target->Weakness->Multiplier);
        } else {
            $target->Health = $this->Health - $this->Attack[0]->AttackPoints;
        }

        if ($target->GetHealth() < 1) {
            echo $target->GetName() . " Has Died ";
        } else {
            echo $target->GetName() . " Now Has " . $target->GetHealth() . " HP Left";
        }
    }
}
