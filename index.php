<?php
require('Ironman.php');
require('IronmanArmor.php');
require('IronmanArmy.php');

// Crea un esercito random di Ironman
$army = new IronmanArmy();

// Tipi di armature disponibili
$armorTypes = ["Mark I", "Mark II", "Mark III", "Mark IV", "Mark V", "Mark L"];

for ($i = 0; $i < 10; $i++) { // Creiamo 10 Ironman casuali
    $name = "Ironman" . ($i + 1);
    $armorType = $armorTypes[array_rand($armorTypes)];
    $armor = new IronmanArmor($armorType);
    $ironman = new Ironman($name, $armor);
    $army->addIronman($ironman);
}

// Stampa il numero di Ironman creati
echo "Numero di Ironman creati: " . $army->getIronmanCount() . PHP_EOL;

// Stampa i dettagli di ogni Ironman creato
foreach ($army->getIronmen() as $ironman) {
    echo "Nome: " . $ironman->getName() . ", Armatura: " . $ironman->getArmor()->getType() . PHP_EOL;
}
?>
