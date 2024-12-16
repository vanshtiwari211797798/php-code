<?php
    function variableLength(...$mylist){ // length variable list argusments
        print_r($mylist);
    }

    variableLength(1,2,3,4,5,6,48,89,9); //passing multiple argument in single argument using spread operator (...)
?>