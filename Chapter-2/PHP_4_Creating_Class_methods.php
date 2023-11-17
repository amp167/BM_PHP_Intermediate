<?php
 class PHP_4_Creating_Class_methods{
     function greeting(){
         echo "Hello from MBCCD";
     }
     var $name = "Aung Myo Oo";
 }

 $obj = new PHP_4_Creating_Class_methods();

 $obj->greeting();
 echo $obj->name;