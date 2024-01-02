<?php

namespace App;

class Member
{
    private $isAuth = false;
    private $detailInfo = [
        "name" => "Mg Mg",
        "age" => 21,
        "school" => "Yangon"
    ];

    public function getDetailinfo($data)
    {
        return $this->detailInfo;
    }

    public function setAuth($bol)
    {
        $this->isAuth = $bol;
    }

    public function getAuth()
    {
        return $this->isAuth;
    }

}