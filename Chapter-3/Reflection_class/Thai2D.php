<?php

$apiData = file_get_contents("https://api.thaistock2d.com/live");
$apiDecode = json_decode($apiData);
print_r($apiDecode);
echo "<hr>";
print_r($apiDecode->live->twod);