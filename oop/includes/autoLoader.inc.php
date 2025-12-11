<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($className)
{
    $path = "classes/";
    $extension = ".class.php";
    $fullPathName = $path . $className . $extension;

    if (!file_exists($fullPathName)) {
        return false;
    }

    include_once($fullPathName);
}
