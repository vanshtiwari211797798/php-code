<?php
    class Fruit{
        function mango(){
            echo "King of the Fruits is the mango";
        }
        function banana(){
            echo "this is banana";
        }
    }

    $fruit = new Fruit;
    echo "<pre>";
    echo $fruit->mango();
    echo "<pre>";
    echo $fruit->banana();

    // Read Constractor and destractor
?>