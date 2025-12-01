<?php

function getUri($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}
