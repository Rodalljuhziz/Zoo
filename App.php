<?php
namespace App;
require __DIR__ . '/vendor/autoload.php';

abstract class Animal{
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
        return $this->getNoise();   //méthode qui permet d'aller chercher une autre méthode qui définit le bruit dans les php des animaux
    }
}

interface canSwim{

}

interface canFly{       //les interfaces qui permettent de trier les animaux dans les enclos

}

interface canWalk{

}

$Animals = [
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

$monobjet = new Zoo();

foreach ($Animals as $value){
    $monobjet->addAnimal($value);
}
$monobjet->visitTheZoo();