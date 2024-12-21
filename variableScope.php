<?php
    // // variable scopes -> three types local. global, static 
    // // if any variable is access anywhere then call global variable, it defined outside the functopn in 
    // function demo(){
    //     $a=10; //local variable declareing
    //     $b=12;
    //     echo $a,$b;
    // }
    // echo $a; // it will give error because a is local variable
    // // demo();

    // // global variable
    // $b=10;

    // function demo1(){
    //     global $b; // if we want to access the global variable in the function then we have to use global keyword
    //     echo $b; //here we can access the global variable
    // }

    // echo $b; // here we can access the global variable
    // demo1();

    // makeing a static variable
    function demo2(){
        static $a=1; // static variable is used to store the value of the variable _> static keyword is used to store the value of the variable in static variable
        // when execution of the function is completed then the value of the variable is not deleted
        echo $a;
        $a++;
    }
    demo2();    
    
    

    
?>