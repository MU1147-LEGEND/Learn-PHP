<?php 

class FirstClass {
    const text = "First class initialized";

    public static function getText(){
        return self::text;
    }
}

class SecondClass extends FirstClass {
    public static $staticText = "Second class static property.";
    const text = "Second class constant";

    public static function getProps () {
        echo parent::text . "\n";
        echo self::$staticText;
    }
}

$myClass = SecondClass::getProps(); // we don't need to create "new instance" when we access static props.

// $cls = new SecondClass();
// echo $cls->getProps();

echo $myClass;