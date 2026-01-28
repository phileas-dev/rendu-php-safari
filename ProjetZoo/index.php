<?php
spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', $class) . '.php';
    if(file_exists($file)) require $file;
});

use Safari\Animaux\Animal;
use Safari\Animaux\Lion;
use Safari\Animaux\Perroquet;
use Safari\Parc\Enclos;

$monEnclos = new Enclos(3);
$simba = new Lion("Simba", 150);
$rio = new Perroquet("Rio", 2);
$jago = new Perroquet("Jago", 3);
$lion = new Lion("Lion", 145);

echo $monEnclos->ajouterAnimal($simba);
echo $monEnclos->ajouterAnimal($rio);
echo $monEnclos->ajouterAnimal($jago);
echo $monEnclos->ajouterAnimal($lion);
$monEnclos->visiteGuidee();
$simba->setMalade(true);