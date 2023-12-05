<?php


function vardic(...$vars)
{
    foreach ($vars as $var) {
        echo $var;
    }

}

vardic("Hello", "hola", "Mingalarpar");