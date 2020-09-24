<?php

class auto{
   public $merk;
   public $kleur;
   public $type;
   public $uitvoering;
   public $brandstof;
}

$nieuweAuto = new auto;
$nieuweAuto->merk = 'Tesla' ;
echo $nieuweAuto ->merk . "<br>";

$nieuweAuto->kleur = 'rood';
echo $nieuweAuto ->kleur . "<br>";

$nieuweAuto->type = 'model 3';
echo $nieuweAuto ->type . "<br>";

$nieuweAuto->uitvoering = 'cabrio';
echo $nieuweAuto ->uitvoering . "<br>";

$nieuweAuto->brandstof = 'Elkektrisch';
echo $nieuweAuto ->brandstof . "<br>";

