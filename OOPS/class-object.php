<?php
// Diff between class and object --> class don't alocate memory and object alocate memory.;
// object is intstence of class
//    echo 'vansh';
class ClassName
{
    //data member , data methods
    //    $name = 'vansh'; //property, it is present in the class, if it is present in the method then called variable;
    //    if we define any property in class the use  public keyword (this is specifier), for ex-
    // we can not print $name inside the class
    public $lname = 'vansh Tiwari';
    //property, method
    function demo()
    {
        // this is method
        $name = 'Hello word from inside of the class and method'; // this is varibale
        // echo $name; //or
        return $name;
    }

    //Note :-> if we make any function in the class then called method, otherwise called function
}


// call the class
$obj = new ClassName; // this id object
$obje = new ClassName;
// access the value of inside the object;
echo "<pre>";
echo $obj->lname;
echo "<pre>";
echo $obje->lname;
echo "<pre>";
echo $obje->demo(); // calling the method of the class;
