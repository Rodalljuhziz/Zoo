<?php
namespace app;
require __DIR__ . '/vendor/autoload.php';

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
    $bloup = new BubbleFish("Bloup"),  // tout ressamblance avec des personnages connus est fortuit et indépendant de notre volonté
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
$value =0 ;
foreach ($Animaux as &$value){
    echo $value->getName()."\n";
    echo $value->noise()."\n";
}