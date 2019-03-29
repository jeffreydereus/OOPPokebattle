<?php
require __DIR__ . '/vendor/autoload.php';


$pickachu = new Pokemon("Pikachu", new EnergyType("Lightning"), 60, array(new Attack("Pika Punch", 20), new Attack("Electric Ring", 50)), new Weakness("Fire", 1.5), new Resistance("Fighting", 20));
$Charmander = new Pokemon("Charmeleon", new EnergyType("Fire"), 60, array(new Attack("Head Butt", 10), new Attack("Flare", 30)), new Weakness("Water", 2), new Resistance("Lightning", 10));
echo "current health of ".$pickachu->Name." = ".$pickachu->Hitpoints."<br><br>";
echo "current health of ".$Charmander->Name." = ".$Charmander->Hitpoints."<br><br>";
echo $pickachu->Name . " attacks " . $Charmander->Name . " with Electric Ring" . "<br><br>";
$pickachu->Attack($pickachu, "Electring Ring", 50,$Charmander);
echo $Charmander->Name . " attacks " . $pickachu->Name . " with Flare" . "<br><br>";
$Charmander->Attack($Charmander, "Flare", 30,$pickachu);