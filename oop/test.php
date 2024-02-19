<?php

class Person
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function setName()
    {
        echo $this->name;
    }
    public function getName($name)
    {
        return $this->name = $name;
    }

    public function __destruct()
    {

    }
}
$aName = new Person("Ali", 12);
$aName->setName();