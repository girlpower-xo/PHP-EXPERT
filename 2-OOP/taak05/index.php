<?php

class lamp{
    public $kleur;
    public $helderheid;
    public $isAan;

    function setStatus($status){
        $this->isAan = $status;
    }
}
    





$woonKamerLamp = new lamp;
$woonKamerLamp->kleur = "geel";
$woonKamerLamp->helderheid = "zacht";
$woonKamerLamp->isAan = "true";
$woonKamerLamp->setStatus("lamp is aan");
echo $woonKamerLamp->isAan;

echo "<br>";


$keukenLamp = new lamp;
$keukenLamp->kleur = "wit";
$keukenLamp->merk = "vel";
$keukenLamp->inhoudTank = "false";
$keukenLamp->setStatus("lamp is uit");
echo $keukenLamp->isAan;
