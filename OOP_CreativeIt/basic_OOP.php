<?php 

class sumClass{


    function sum($num1,$num2){
        $result  = $num1+$num2;

        echo $result;
    }
}

$obOfsumClass= new sumClass;

$obOfsumClass -> sum(90,30);







?>