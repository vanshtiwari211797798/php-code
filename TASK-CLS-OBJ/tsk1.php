<?php
    class Factorial{
        function fact($n){
            $fact=1;
            for($i=1;$i<=$n;$i++){
                $fact=$fact*$i;
            }
            echo $fact;
        }
    }
    $facts=new Factorial;
    $facts->fact(3);
?>  