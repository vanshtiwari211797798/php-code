<?php
class table
{
    function pahada($num)
    {
        for ($i = 1; $i <= 10; $i++) {
            echo $num * $i . "<br>";
        }
    }
}

$table = new table;
$table->pahada(5);
// task -> prime number program checking that number is prime or not, factorial,  repeated work unique value like aabbcccdeeffgghi