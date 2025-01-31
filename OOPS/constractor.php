<?php
// this is a method, when we create object of the class then constructor automatic will called (it call always first).

class Demo
{
    //this is key form define an construct method syntex-> (__construct) // this id megic method it will automatic called
    // in a class we can not create more then one constructor

    function myName (){
        echo "my name is vansh tiwari";
    }


    function __construct($fname, $lname)
    {
        echo "Hello $fname $lname constructor method, (it called automatic)";
    }

    // this is error because only one constructor we can create in a class (:: is a scope resoulation operator)
    // function __construct($fname, $lname)
    // {
    //     echo "Hello $fname $lname constructor method, (it called automatic)";
    // }
}

echo "<pre/>";
$demo = new Demo('vansh', 'tiwari'); //create the object of the Demo name class;
echo "<pre/>";
$demo->myName();
