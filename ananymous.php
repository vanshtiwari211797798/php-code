<?php
    // $a = function (){
    //     echo 'vansh';
    // };

    // $a();


    $a = function ($num){
        $fact = 1;
        for($i=1;$i<=$num;$i++){
            $fact = $fact*$i;
        }
        return $fact;
    };

   echo $a(5);
?>