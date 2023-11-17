<?php
class PHP_7_This_Variable{
    public $name = "Mg Mg";
    public function changeName(){
        $this->name = "Aung Aung";
    }
}
$aa = new PHP_7_This_Variable();
$aa->changeName();
echo $aa->name;
echo "<br>";

$bb = new PHP_7_This_Variable();
echo $bb->name;