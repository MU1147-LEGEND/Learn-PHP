<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>

<body>
    <h1>PHP OOP</h1>
    <?php
    require("includes/person.inc.php");
    $pet = new Pet();
    echo $pet->ownersPet() . " is " . $pet->owner() . "'s pet";
    ?>
</body>

</html>