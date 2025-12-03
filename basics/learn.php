<?php

// run the file - type in terminal/command-  `php learn.php`

// PHP The global Keyword
$x = 5; /// global variable

function accessGlobal()
{
    global $x; // access global var inside func using keyword

    // echo "$x\n";

    // echo $GLOBALS['x'] . "\n"; // access global var inside func from array.
}

accessGlobal();

// PHP The static Keyword

function staticKey()
{
    static $x = 0;
    // echo $x;
    $x++;
}

staticKey();
staticKey();
staticKey();

// data types

/*
PHP supports the following data types:

string (text values)
int (whole numbers)
float (decimal numbers)
bool (true or false)
array (multiple values)
object (stores data as objects)
null (empty variable)
resource (references external resources) -- not an actual data type
mixed (any value)
 */

// The var_dump() function returns the data type and the value:

$x = 5;
// var_dump($x);

$cars = array("Volvo", "BMW", "Toyota");
// var_dump($cars);

// PHP Object / class - capitalize

class Car
{
    public $color;
    public $model;

    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }

    public function myCar()
    {
        return "My car is $this->color and model is $this->model";
    }
}

$myCar = new Car("Gray White", "BMW");

// var_dump($myCar); // view data type
// echo $myCar->myCar();

////////////-------String Methods------///////////////
// changing data type - casting

$someString = "55";
$someNumber = (int) $someString; // changed to integer.
// var_dump($someNumber);

// String Length --- 
// echo strlen($someString);
// echo str_word_count($someString);

// search for a text in a string - and uppercase
$shortText = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, ipsum!  ";
$lastText = "Lorem ipsum dolor sit amet";
// var_dump(str_contains($shortText, "dolor")); // returns true if found desired text
// echo strtoupper($shortText); // uppercase
// echo "\n\n";
// echo strtolower($shortText); // lowercase
// echo str_replace("adipisicing", "adapter", $shortText); // returns the whole replaced string 
// echo strrev($shortText); // reverse the whole string
// echo trim($shortText); // remove whitespaces
// print_r(explode(" ", $shortText));   //string to array convert - separator required
// echo strtoupper(substr($shortText, 0,5)); // slice and uppercase Lorem -> LOREM
// echo substr($lastText, -5, 3); // get three ch from the position -5;
// echo "Here I'm using \"Escape Character\" !";

////////////-------Number Methods------///////////////
$num = 423;
// var_dump(is_int($num));
// var_dump(is_infinite($num));
// var_dump(is_nan($num));
// var_dump(is_numeric("4444")); // true
// var_dump(is_numeric("444a4")); // false
// $x = 23465.768;
// echo intval($x); // get the integer value only.



