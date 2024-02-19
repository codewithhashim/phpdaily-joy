<?php

class Person
{
    private $name;
    public $age;
    public readonly bool $member;

    public function __construct($name, $age, $member)
    {
        $this->name = $name;
        $this->age = $age;
        $this->member = $member;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getMember()
    {
        return $this->member;
    }

    public function __destruct()
    {
        echo "Object destroyed.\n";
        unset($this->name);
    }
}

$aName = new Person("Ali", 12, true);
echo $aName->getName() . "\n"; // Output: Ali
echo $aName->getMember() ? 'true' : 'false' . "\n"; // Output: 123
unset($aName); // Trigger the __destruct() method
