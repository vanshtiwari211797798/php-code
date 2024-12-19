<?php
// update file data without deleting previous data of the file
    $res = fopen("hello2.txt",'a');
    fwrite($res, "this is deo file");
    fclose($res);
    ?>