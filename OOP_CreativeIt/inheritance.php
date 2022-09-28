<?php 

class car{
    function engine(){
        echo "car engine";
    }

    function wheel(){
        echo "car wheel";
    }
    function body()
    {
        echo "car body";
    }
}

class bmw extends car
{
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


class audi extends bmw
{
    function fuelTank()
    {
        echo "audi fuel Tank";
    }

    function lookingGlass()
    {
        echo "audi looking Glass";
    }
    function glass()
    {
        echo "audi glass";
    }
}


$obOfAudi= new audi;

$obOfAudi ->headLight();
echo "<br>";


$obOfAudi->glass();
echo "<br>";


$obOfAudi->break();
echo "<br>";


$obOfAudi->engine();
echo "<br>";













?>