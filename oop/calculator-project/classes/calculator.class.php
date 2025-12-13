<?php

class Calculator
{
    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $operator, int $number1, int $number2)
    {
        $this->operator = $operator;
        $this->num1 = $number1;
        $this->num2 = $number2;
    }

    public function calculator()
    {
        switch ($this->operator) {
            case 'add':
                $result = $this->num1 + $this->num2;
                return $result;
                break;
            case 'subtract':
                $result = $this->num1 - $this->num2;
                return $result;
                break;
            case 'multiply':
                $result = $this->num1 * $this->num2;
                return $result;
                break;
            case 'divide':
                $result = $this->num1 / $this->num2;
                return $result;
                break;

            default:
                echo "Error!";
                break;
        }
    }
}
