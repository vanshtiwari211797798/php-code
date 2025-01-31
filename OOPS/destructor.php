<?php
// desctructor-> this is a method that called atleast last when all program execution program is end

class myName
{
    function name()
    {
        echo "My name is vansh tiwari";
    }

    function __destruct()
    {
        echo "this is desctructor";
    }
}

$obj = new myName;
echo "<pre>";
$obj->name();
echo "<pre>";
