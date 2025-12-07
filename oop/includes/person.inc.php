<?php



class NewClass
{
    // Properties
    private $first = "Mohammad";
    private $last = "Ullah";
    private $age = "55";
    protected $pet = "Goat";

    // Methods
    public function owner()
    {
        $fullName = $this->first . " " . $this->last;
        return $fullName;
    }
}

class Pet extends NewClass
{
    public function ownersPet()
    {
        return $this->pet;
    }
}


class Person
{
    // Properties
    public $name;
    public $age;

    // methods
    public function setName($userName)
    {
        $this->name = $userName;
    }
}
