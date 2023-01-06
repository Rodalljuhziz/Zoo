<?php
namespace App;
class CatFish extends Animal implements canSwim {
    protected function getNoise():string{
        return "Miaou eu je voulais dire bloop bloop";
    }

}