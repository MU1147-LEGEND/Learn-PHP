<?php

namespace Person;

class Person
{
    // Properties
    public $name;
    public $age;
    public $pet;

    // methods
    public function setName($userName)
    {
        $this->name = $userName;
    }
}

class Pet extends Person
{
    public function ownersPet()
    {
        return $this->pet;
    }
}


class PersonWithConstruct
{
    // Properties
    private $name; // privates are not directly accessible from outside of this class.
    private $age;

    public static $nationality = "Bangladeshi";

    // methods
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function setName($userName)
    {
        $this->name = $userName;
    }

    public function getName()
    {
        return $this->name;
    }

    public function __destruct()
    {
        echo "<br/>The class is unloading";
    }

    public static function setNationality ($newNationality){
        self::$nationality = $newNationality;
    }

    public static function getNationality(){
        return self::$nationality;
    }
}
