<?php
namespace App;
class Elephant extends Animal implements  canWalk {

    protected function getNoise():string{
        return "Tooooot";
    }


}