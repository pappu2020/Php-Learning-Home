<?php

class car
{
    protected function engine()
    {
        echo "car engine";
    }

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
    function seat()
    {
        echo "bmw seat";
    }

    function callToEngine(){
        $this->engine();
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

$obOfbmw->callToEngine();

?>