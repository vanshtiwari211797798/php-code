<?php
// ek hi kaam ko karne ka alag alag karika

// types -> method overloading (not Supported in php) , method overriding

// over riding (ek ke uper ek, parent ke paas same aur child ke paas bhi same then parent ke uper child ka (jo new bana hai));
// base aur child ke method name same ho aur argument same ho but body alag ho thats is method overriding (for use )

// class Base{
//     public function firstMethod(){
//         echo "This is the base class method";
//     }
// }

// class Child extends Base{
//     public function firstMethod(){
//         // Base::firstMethod();
//         // or 
//         parent::firstMethod(); //parent or Base::methodName-> this denoted that parent class method otherwise this call own method
//         echo "This is the child class method";
//     }

//     public function base(){
//         parent::firstMethod();
//     }
// }

// $data = new Child; //Overriding the base class into parent class
// $data->firstMethod();




// Method overloading -> isme method name same rahenge but number of arguments are different rahenge(not supported in php (hyper text preprocessor))
// it always search overriding

// Example of method overloading
class Base
{
    public function demo($a)
    {
        echo "Hello base class";
    }
}

class child extends Base
{
    public function demo($a, $b)
    {
        echo "Hello base class";
    }
}

$child = new child;
$child->demo("vansh",'tiwari');