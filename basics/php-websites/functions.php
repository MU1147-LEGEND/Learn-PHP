<?php

function getUri($value)
{
    return parse_url($_SERVER['REQUEST_URI'])['path'] === $value;
}

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}
