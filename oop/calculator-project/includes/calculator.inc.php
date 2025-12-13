<?php

declare(strict_types=1);
include('./autoLoader.inc.php');

$operator = $_POST["operator"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

$calc = new Calculator($operator, (int)$num1, (int)$num2);

try {
    echo $calc->calculator();
} catch (TypeError $err) {
    echo "Error: " . $err->getMessage();
}
