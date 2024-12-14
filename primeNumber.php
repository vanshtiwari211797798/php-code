<?php
function prime($a) {
    if ($a > 1) {
        for ($i=2;$i<=$a/2;$i++) {
            if ($a%$i==0) {
                return 'not prime';
            }
        }
        return 'prime';
    } else {
        return 'not prime';
    }
}

echo prime(10);
?>

