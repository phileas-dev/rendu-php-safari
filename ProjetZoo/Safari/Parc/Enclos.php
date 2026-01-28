<?php
namespace Safari\Parc;
use Safari\Animaux\Animal;
class Enclos {
    private array $animaux = [];
    private int $capaciteMax = 5;
    private string $proprete = "Sale";
    public function __construct($capaciteMax){
        $this->capaciteMax = $capaciteMax;
    }
    public function ajouterAnimal(Animal $nouvelAnimal): string{
        if (count($this->animaux) >= $this->capaciteMax) return "Erreur: Enclos plein! <br>";
        $this->animaux[] = $nouvelAnimal;
        return "Bienvenue à " . $nouvelAnimal->getNom() . "! <br>";
    }
    public function entretenir(): string{
        $this->proprete = "Propre";
        return "Nettoyage en cours... <br>";
    }
    public function visiteGuidee(): void{
        echo "Voici les animaux de l'enclos: <br>";
        foreach ($this->animaux as $animal) {
            echo $animal->crier();
        }
    }
}