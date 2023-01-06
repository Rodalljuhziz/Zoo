<?php
namespace App;
class Parrot extends Animal implements canFly {

    protected function getNoise():string{
        return "Coco";
    }


}