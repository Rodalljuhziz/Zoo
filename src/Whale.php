<?php
namespace App;
class Whale extends Animal implements canSwim {

    protected function getNoise():string{
        return "Splash";
    }

}
