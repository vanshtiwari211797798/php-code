<?php
// access modifier -> yah deside karta hai ki ek property ya method ko kaha kaha use kiya ja sakta hai+
// types -> public, private, protected 
// public -> inside of any class, derive class etc.. (sabhi log)
// private -> only same class (not derive class)
// protected -> us class me aur uske derive class me hi access hoga ye (aap aur beta)
// this -> usi class ki property and method ko usi class me access karna hai to iske liye $this keyword ka use karte hai hum 


// examples of public here --->

class Test
{
    public $name = "vansh";
    public $age = 19;

    public function demo()
    {
        echo $this->name;
        return "Public method and property";
    }
}

$test = new Test;
echo $test->name . "<b/>" . "<del/>", $test->age . "<del>";
echo $test->demo();


class Child extends Test
{
    public function test()
    {
        echo $this->name;
    }
}

$child = new Child;
echo $child->name;
echo $child->demo();
echo "<br/>";
echo $child->test();
