<?php
namespace app;
class CatFish extends Animal{
    protected function getNoise():string{
        return "Miaou eu je voulais dire bloop bloop";
    }

}