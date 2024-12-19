<?php

// set the iage in another file
    $res = fopen("topa.webp", "r");
    $photo= fread($res, filesize("topa.webp"));
    $dest = fopen("cap.jpg", 'w');
    fwrite($dest,$photo);
    fclose($res);
    fclose($dest);
?>