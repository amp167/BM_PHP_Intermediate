<?php
interface papa{
    public function papa();
}
abstract class mama implements papa{
    const GRANDMOM = "Daw Hla Thaing";
    public function papa()
    {
        echo "papa & mama are married";
    }
    public abstract function baby();
}
class Child extends mama {
    public function baby()
    {
        echo "i am the baby of papa &mama";
    }
}
$kalay = new Child();
echo mama::GRANDMOM;
$kalay->papa();
$kalay->baby();
