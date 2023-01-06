<?php
namespace App;
class ClownFish extends Animal implements canSwim {
    protected function getNoise():string{
        return "Je suis nemo";
    }

}