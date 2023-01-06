<?php

require __DIR__ . '/vendor/autoload.php';
namespace app;
abstract class Animal
{
    private string $name = "";

    public function __construct($nameOC)// oc = outside class
    {
       $this->name = $nameOC;
    }

    public function getName():string{
        return $this->name;
    }
    protected abstract function getNoise():string;

    public function noise():string
    {
        return $this->getNoise();
    }
}

$Animaux = [
    $joe = new Fish("Joe"),
    $jack= new Fish("Jack"),
    $william = new Fish("William"),
    $averell = new Fish("Averell"),
    $lucky= new Fish("Lucky Luke"),
    $blip = new BubbleFish("Blip"),
    $blop = new BubbleFish("Blop"),
    $bloup = new BubbleFish("Bloup"),
    $felix = new CatFish("Felix the bloop"),
    $kitten = new CatFish("Kitten Mc Kitty"),
    $zappata = new ClownFish("Zappata"),
    $dumbo = new Elephant("Dumbo"),
    $dumber = new Elephant("Dumber"),
    $marty = new Zebra("Marty"),
    $pippin= new Parrot("Pippin"),
    $merry = new Parrot("Merry"),
    $elrond= new Parrot("Elrond"),
    $gimli = new Parrot("Gimli"),
    $legolas = new Parrot("Legolas"),
    $aragorn = new Parrot("Aragorn"),
    $gandalf = new Parrot("Gandalf"),
    $frodon = new Parrot("Frodon"),
    $sam = new Parrot("Samsagace Gamegie"),
    $peregrin= new Parrot("Peregrin Touque"),
    $francis = new Dove("Francis"),
    $lalanne = new Dove("Lalanne")];
;
