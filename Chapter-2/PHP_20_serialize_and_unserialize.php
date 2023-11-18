<?php

$ary = [
    ["one","two","three","four","five"],
    ["one","two","three","four","five"],
    ["one","two","three","four","five"],
    ["one","two","three","four","five"],
    ["one","two","three","four","five"]
];
$data = serialize($ary);
echo $data;
echo "<hr>";
$normal = unserialize($data);
echo "<pre>";
print_r($normal);