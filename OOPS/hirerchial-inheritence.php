<?php

// hirercial inheritence -> ek parent class ke multiple child class hoti hai


class ParentInher
{
    function demo()
    {
        echo "i am parent";
    }
}

class child extends ParentInher
{
    function demo2()
    {
        echo "i am first child";
    }
}
class child2 extends ParentInher
{
    function demo3()
    {
        echo "i am third child";
    }
}

// Note:-> multiple and hybrid hirercial inheritence not supported in php (if we wants use that then we use interface method)

$data = new child;
echo "<pre>";
$data->demo();
echo "<pre>";
$data->demo2();

echo "<pre>";
$data = new child2;
$data->demo();
echo "<pre>";
$data->demo3();