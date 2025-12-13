<?php

/**
 * Abstraction means the abstract class declares a contract (method signatures) 
 * that concrete subclasses must implement.
 */

abstract class Visa {
    public function visaPayment(){
        return "visa payment";
    }

    abstract public function getPayment(); // contract (method signatures)
}

