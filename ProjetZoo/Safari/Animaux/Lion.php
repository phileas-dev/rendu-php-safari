<?php
namespace Safari\Animaux;
class Lion extends Animal {
    public int $niveauAgressivite;
    public function crier(): string{
        return "ROAAAAR ! $this->nom rugit férocement. <br>";
    }
    public function chasser(): string{
        return "$this->nom part en chasse. <br>";
    }
}