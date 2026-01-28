<?php
namespace Safari\Animaux;
class Animal {
    protected string $nom;
    protected int $poids;   //en kg
    protected bool $estMalade = false;
    public function __construct($nom, $poids){
        $this->nom = $nom;
        $this->poids = $poids;
    }
    public function manger(): string{
        return "L'animal mange. <br>";
    }
    public function seSoigner(): void{
        $this->estMalade = false;
    }
    public function crier(): string{
        return "ARGHHHH!! <br>";
    }
    public function getNom(): string{
        return $this->nom;
    }
    public function setMalade(bool $estMalade): void{
        $this->estMalade = $estMalade;
    }
}