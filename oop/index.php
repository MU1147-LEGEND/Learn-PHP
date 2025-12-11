<?php

use Person\Person;
use Person\PersonWithConstruct;

include 'includes/autoLoader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>

<body style="background-color: #333; color:#bbb">
    <h1>PHP OOP</h1>

    <?php
    $person1 = new Person();
    $person1->setName("Mohammad Ullah");
    echo "<p>$person1->name</p>";

    $person2 = new Person();
    $person2->setName("Sabbir");
    echo "<p>$person2->name</p>";

    // with constructor method
    $person3 = new PersonWithConstruct("Mohammad", 555);
    echo "<p>" . $person3->getName() . "</p>";
    unset($person3);
    // echo "<p>" . $person3->getName() . "</p>"; // here the object person3 is null. generate an error;

    echo "<p>" . PersonWithConstruct::getNationality() . "</p>"; // accessing static variable
    PersonWithConstruct::setNationality("Bengali"); // setting new static item
    echo "<p>" . PersonWithConstruct::getNationality() . "</p>";
    ?>

</body>

</html>