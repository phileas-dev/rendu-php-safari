<?php
namespace Safari\Animaux;
class Perroquet extends Animal {
    public function crier(): string{
        return "Coco veut un gâteau !  ($this->nom siffle). <br>";
    }
    public function voler(): string{
        return "$this->nom s'envole. <br>";
    }
}
