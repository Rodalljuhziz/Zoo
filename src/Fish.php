<?php
namespace App;

class Fish extends Animal implements canSwim {

    protected function getNoise():string{
        return "bloubloublou je me noie";
    }

}