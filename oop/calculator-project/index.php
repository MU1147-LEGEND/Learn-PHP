<?php

declare(strict_types=1);
include './includes/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            text-align: center;
        }

        input,
        select,
        button {
            margin: 10px;
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <h1>My PHP OOP based Calculator</h1>
    <form method="post" action="./includes/calculator.inc.php">
        <input type="number" name="num1" placeholder="First Number" required>
        <select name="operator" required>
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>
        <input type="number" name="num2" placeholder="Second Number" required>
        <button type="submit" name="calculate">Calculate</button>
    </form>
</body>

</html>