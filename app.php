<?php

require __DIR__ . '/vendor/autoload.php';

abstract class Animal
{
    private $name;

    public function __construct($name)
    {

    }

    protected abstract function getNoise();

    public function noise()
    {
        return $this->getNoise();
    }
}
$dumbo = new Elephant();
$dumbo->noise();