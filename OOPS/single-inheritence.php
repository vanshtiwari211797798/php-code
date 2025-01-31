<?php
// papa is base, child -> derive class
// jo inherit karta hai wo derive (parent) aur jisse inherit karta hai wo base (child) hai

// single inheritence -> jiske ek hi parent and ek hi child ho use single level inhetitence kahte hai ?
// multilevel -> ek child class ek parent class se inherit karte hai aur wo child class dusre child class ki parent ban jati hai ?
// hirercial inheritence -> ek parent class ke multiple child class hoti hai

// access modifier -> yah deside karta hai ki ek property ya method ko kaha kaha use kiya ja sakta hai+
// example ->

// base class
class Base
{
    function demo()
    {
        echo "this is base class <br/>";
    }

    function hello()
    {
        echo "this is hello method <br/>";
    }
}

// new Base;

// Derive class; (extends is a keyword).
class Derive extends Base
{
    function __construct()
    {
        echo "this is derive class";
    }
}



// task -> accessmodifier and all types of inheritence

echo "<pre/>";
$der = new Derive;
echo "<pre/>";
$der->demo();
echo "<pre/>";
$der->hello();
