<?php
namespace App;
class Enclosure
{
    private array $Animals = [];  //crée un tableau vide pour y placer les animaux dans les bon enclos


    public function addAnimal($Animal):void{
        $this->Animals[] = $Animal;
        //array_push($this->Animals, $Animal); fais la meme chose mais sans l'engueulade
    }
    public function getAnimal():array{
        return $this->Animals;
    }

    public function __toString():string{
        $returnTab = "";
        foreach ($this->getAnimal() as $value) {   //censer afficher le nom et le bruit de l'animal en appelant les bonnes méthodes
           $returnTab .= "le nom est: ".$value->getName() ." et sont bruit est : ".$value->noise() . "\n";
        }
        return $returnTab;
    }
}