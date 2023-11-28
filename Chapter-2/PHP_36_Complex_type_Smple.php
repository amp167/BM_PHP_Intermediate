<?php

class car{
    public $brand , $model , $price , $spares ,$available;
    public function __construct(string $brand,int $model,float $price,array $spares,bool $available){
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
        $this->spares = $spares;
        $this->available = $available;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getModel(): int
    {
        return $this->model;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getSpares(): array
    {
        return $this->spares;
    }

    public function isAvailable(): bool
    {
        return $this->available;
    }
    
}
class Driver{
    public $name, $age , $family , $hourlyRate, $martialStatus ;

    public function setName(string $name){
        $this->name = $name;
    }
    public function getName() : string {
        return $this->name;
    }
    public function setAge(int $age){
        $this->age = $age;
    }
    public function getAge() : int {
        return $this->age;
    }
    public function setfamily(array $family){
        $this->family = $family;
    }
    public function getFamily() : array {
        return $this->family;
    }
    public function setHourlyRate(float $hourlyRate){
        $this->hourlyRate = $hourlyRate;
    }
    public function getHourlyRate() : float {
        return $this->hourlyRate;
    }
    public function setMartialStatus(bool $martialStatus){
        $this->martialStatus = $martialStatus;
    }
    public function getMartialStatus()
    {
        return $this->martialStatus;
    }
}
$dmgmg = new Driver();
$dmgmg->name = "Mg Mg";
$dmgmg->age = 23;
$dmgmg->family = ["Father"=>"U Mya","Mother"=>"Daw Hla","Sister"=>"Nu Nu"];
$dmgmg->hourlyRate = 8.5;
$dmgmg->martialStatus = false;

$dAungAung = new Driver();
$dAungAung->name = "Aung Aung";
$dAungAung->age = 28;
$dAungAung->family = ["Father"=>"U Myint","Mother"=>"Daw Yin","Sister"=>"Su Su"];
$dAungAung->hourlyRate = 9.5;
$dAungAung->martialStatus = true;
