<?php
    $res = fopen("hello.txt","r+");
    $fileData =  fread($res, filesize("hello.txt"));
    fclose($res);
?>  