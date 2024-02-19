<?php

class Car
{
    public $chasis_number = 1212;
    public function display_chasis()
    {
        $chasis = $this->chasis_number;
        echo $chasis;
    }
}

class FourWheelers extends Car
{
    // properties
    public $buggati = "Bugatti";
}