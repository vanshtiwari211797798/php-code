<?php
$arr = ['name' => 'vansh', 'phone' => '830328'];
echo "<pre>";
$js =  json_encode($arr, JSON_PRETTY_PRINT);
$decode = json_decode($json, true);
print_r($decode);

echo $decode['name'];
