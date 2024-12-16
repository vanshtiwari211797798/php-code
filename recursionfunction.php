<?php
// recursive function
    function number($num){
        if($num < 0){
            return 0;
        }
        if($num==0){
            return 1;
        }
        return $num* number($num-1);
    }

    echo number(5);
?>