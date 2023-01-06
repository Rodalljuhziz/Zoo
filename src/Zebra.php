<?php
namespace App;
class Zebra extends Animal implements canWalk {

    protected function getNoise():string{
        return "Hiiiiiii";
    }

}