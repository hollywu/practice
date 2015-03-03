<?php
class doMath {
    private $num1,
            $num2;
    
    public function __construct($number1, $number2) {
        $this->num1 = $number1;
        $this->num2 = $number2;
    }
    
    public function add ($number1, $number2) {
        return $number1 + $number2;
    }
    
    public function subtract ($number1, $number2) {
        return $number1 - $number2;
    }
    
    public function multiply ($number1, $number2) {
        return $number1 * $number2;
    }
}