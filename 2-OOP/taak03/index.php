<?php

class product{
    public $merk;
    public $prijs;
    public $type;
    public $kleur;
}

$dweil = new product;
$dweil->merk = "hema";
echo $dweil ->merk . "<br>";

$dweil->prijs = "10";
echo $dweil ->prijs . "<br>";

$dweil->type = "lang";
echo $dweil ->type . "<br>";

$dweil->kleur = "rood";
echo $dweil ->kleur . "<br>";


$stofzuiger = new product;
$stofzuiger->merk = "ageon";
echo $stofzuiger ->merk . "<br>";

$stofzuiger->prijs = "50";
echo $stofzuiger ->prijs . "<br>";

$stofzuiger->type = "gfs505";
echo $stofzuiger ->type . "<br>";

$stofzuiger->kleur = "grijs";
echo $stofzuiger ->kleur . "<br>";



