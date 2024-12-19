<?php
    $res = fopen("techsima.txt","w+");
    fwrite($res,"techsima ayodhya 224135");
    fseek($res,0);
    echo fread($res,filesize("techsima.txt"));
    fclose($res);
?>