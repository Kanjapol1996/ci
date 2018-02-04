<?php

class Calculator extends CI_Controller
{
    public function plus($num1 = 25,$num2 = 30){
        $sum = $num1+$num2;
        echo "Number 1 : ".$num1."<br>";
        echo "Number 2 : ".$num2."<br>";
        echo "Total : ".$sum;
    }
}