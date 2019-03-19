<?php
require __DIR__ . '/vendor/autoload.php';

$pickachu = new Pikachu("Pika", new EnergyType("Lightning"), 60, array(new Attack("Pika Punch", 20), new Attack("Electric Ring", 50)), new Weakness("Fire", 1.5), new Resistance("Fighting", 20));
//print_r($pickachu);
var_dump($pickachu);
$Charmander = new Charmeleon("Char", new EnergyType("Fire"), 60, array(new Attack("Head Butt", 10), new Attack("Flare", 30)), new Weakness("Water", 2), new Resistance("Lightning", 10));
echo '<br>';
//print_r($Charmander);
var_dump($Charmander);
