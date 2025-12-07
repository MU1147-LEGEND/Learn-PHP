<?php
include 'includes/person.inc.php';
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

    ?>
</body>

</html>