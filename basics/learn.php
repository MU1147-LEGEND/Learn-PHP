<?php

echo var_dump($_SERVER['REQUEST_URI']);

if ($_SERVER['REQUEST_URI'] === "/") {
    echo "bg-gray-800";
}

echo $_SERVER['REQUEST_URI'] === "/" ? "bg-gray-800 ": "hover:bg-gray-400/50";

