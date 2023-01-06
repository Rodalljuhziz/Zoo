<?php
namespace App;
class BubbleFish extends Animal implements canSwim {
    protected function getNoise():string{
        return "Bloop Bloop et tu me croiras pas mais bloop";
    }

}