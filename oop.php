<?php

class Calculator
{
    public $num1 = 0; //property/menber veriable
    public $num2 = 0; //property/menber veriable
    public function sum()
    {
        return $this->num1 + $this->num2;
    }
    function subtrac()
    {
        return $this->num1 - $this->num2;
    }
    // function result(){
    //     substr($num);
    //     sum($num);
    // }
}

$obj = new Calculator; //instance of calculator 
$obj->num1 = 33;
$obj->num2 = 30;


echo $obj->sum();
echo "</br>";
echo $obj->subtrac();
