<?php
    // multilevel -> ek child class ek parent class se inherit karte hai aur wo child class dusre child class ki parent ban jati hai ?

    class Dada{
        function demo(){
            echo "i am Dada";
        }
    }

    class Papa extends Dada{
        function demo1(){
            echo "i am Papa";
        }
    }


    class Beta extends Papa{
        function demo2(){
            echo "i am Beta";
        }
    }


    // This is multilevel inheritence
    $beta = new Beta;
    $beta->demo();
    $beta->demo1();
    $beta->demo2();

?>