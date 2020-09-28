<?php

class scooter{
    public $kleur;
    public $merk;
    public $inhoudTank;

    function checkInhoud(){ 
        if($this->inhoudTank == 7){
            echo 'De tank is vol!' . "<br>";
            }
        else{
            echo 'de tank is niet vol' . "<br>";
        }
    }
}



$piago = new scooter;
$piago->kleur = "rood";
$piago->merk = "piago";
$piago->inhoudTank = "6";
$piago->checkInhoud();


$peugeot = new scooter;
$peugeot->kleur = "zwart";
$peugeot->merk = "peugeot";
$peugeot->inhoudTank = "7";
$peugeot->checkInhoud();