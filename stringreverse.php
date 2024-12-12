<?php

    $str = 'hello word';
    $str2="";
    for($i=strlen($str)-1; $i>=6; $i--){
        $str2 .= $str[$i];
    }
    echo str_replace("word",$str2,$str);

?>