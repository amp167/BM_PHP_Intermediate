<?php
class PHP_21_sleep_wakeup
{
    public function __sleep(){
        echo "You are trying to serialize my object";
        return [];
    }
    public function __wakeup(){
        echo "You are trying to deserialize my object";
    }
}
$obj = new PHP_21_sleep_wakeup();
$aa = serialize($obj);
$aa = unserialize($aa);