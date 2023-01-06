<?php
namespace App;

class Zoo {

    private static Enclosure $aquarium;
    private static Enclosure $aviary;
    private static Enclosure $fence;

    public function __construct(){
        self::$aquarium = new Enclosure();
        self::$aviary = new Enclosure();
        self::$fence = new Enclosure();
}
    public function getAquarium():Enclosure{
        return self::$aquarium;
    }

    public function getAviary():Enclosure{
        return self::$aviary;  //self:: permet de faire une sorte de $this-> pour des attributs privés statiques
    }

    public function getFence():Enclosure{
        return self::$fence;
    }
    public function addAnimal($Animal):void{

        if($Animal instanceof canSwim){
            $this->getAquarium()->addAnimal($Animal); //vérifie graces au interfaces laquelle est instancier pour lequel animal
        }
        else if ($Animal instanceof canFly){
            $this->getAviary()->addAnimal($Animal);
        }
        else if ($Animal instanceof canWalk){
            $this->getFence()->addAnimal($Animal);
        }

    }

    public function visitTheZoo():void{
        $result = "";
        if(!empty(self::$aquarium)){
            $result = "l'aquarium contient les animaux: \n".self::$aquarium;
        }
        if(!empty(self::$aviary)){
           $result .= "\nla voilière contient les animaux: \n".self::$aviary;
        }
        if(!empty(self::$fence)) {
           $result .= " \nenclos contient les animaux: \n" . self::$fence;
        }
        echo $result;
    }
}