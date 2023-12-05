<?php

class PHP_44_call_back
{
    public function doIt($fun)
    {
        $i = 0;
        $sum = 0;
        while ($i < 10000) {

            $sum += $i;
            $i++;
        }
        $this->$fun($sum);
    }

    public function total($tt)
    {
        echo "Total is " . $tt;
    }
}

$obj = new PHP_44_call_back();
$obj->doIt("total");