<?php
    function defaultPara($age=18){ // default paramiter if function calling is blank otherwise take the argument passing in the function calling
        if($age > 18){
            return "eligible for voting";
        }else{
            return 'not eligible';
        }
    }

   echo defaultPara(20); // passing paramiter when function calling
?>  