<?php

// anonymous class - this doesn't take memory space, it's lightweight, simple.
$anonClass = new class {
    public function hello()
    {
        echo "Hello I'm from anonymous class";
    }
};

$anonClass->hello();
