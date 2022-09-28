<?php

abstract class car
{
     abstract function engine();
    
    function wheel()
    {
        echo "car wheel";
    }
    function body()
    {
        echo "car body";
    }
}

class bmw extends car
{
    function engine(){
        echo "car Engine";
    }
    function seat()
    {
        echo "bmw seat";
    }

   
    function headLight()
    {
        echo "bmw head Light";
    }
    function break()
    {
        echo "bmw break";
    }
}


$obOfbmw = new bmw;

$obOfbmw->engine();
