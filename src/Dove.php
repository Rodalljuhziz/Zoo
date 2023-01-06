<?php
namespace App;
class Dove extends Animal implements canFly {

    protected function getNoise():string{
        return "Rou Rouuuuu";
    }


}
