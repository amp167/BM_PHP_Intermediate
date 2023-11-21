<?php
require_once 'sheinter.php';
require_once 'heInter.php';

class index implements sheinter {
    public $data;
    public function sheGoToSchool($data)
    {
        $this->data = $data;
    }
    public function outPut(){
        echo "<pre>";
        print_r($this->data);
    }
    public function busy(){
        echo "she is busy with ". $this->data[count($this->data)-1];
    }
}
$obj = new index();
$sheary = ['book','toy','hehe','cosmatic'];
$heary = ['book','toy','hehe','apyar'];
$obj->sheGoToSchool($sheary);
$obj->outPut();
$obj->busy();

$bb = new index();
$bb->sheGoToSchool($heary);
$bb->outPut();
$bb->busy();