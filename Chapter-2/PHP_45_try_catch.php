<?php
error_reporting(0);
try {
    if (fopen('test.txt', 'r')) {
        echo "Aung Tal";
    } else {
        throw new Exception("File not found Sir!");
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
