<?php

class Car
{
    public $CarName = "Tata Nano";
    function engine()
    {
        echo "Engine Start";
    }
    function Gear()
    {
        echo "6 Gear";
    }
    function CarCompany()
    {
        echo "Powered By BMW, modified by tata nano";
    }
}

$nano = new Car;
$bmw = new Car;
echo "<Pre>";
echo $nano->CarName;
echo "<Pre>";
$nano->engine();
echo "<Pre>";
$nano->Gear();
echo "<Pre>";
$bmw->CarCompany();
