<?php



class Person
{
    // Properties
    private $first = "Mohammad";
    private $last = "Ullah";
    private $age = "55";
    protected $pet = "Goat";

    // methods
    public function owner()
    {
        $fullName = $this->first . " " . $this->last;
        return $fullName;
    }
}

class Pet extends Person
{
    public function ownersPet()
    {
        return $this->pet;
    }
}
