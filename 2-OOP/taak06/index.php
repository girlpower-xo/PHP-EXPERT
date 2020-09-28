<?php

class robot{
    public $naam;
    public $geluid;
    public $voorstuwing;

    function setsound($status){
        $this->geluid = $status;
    }

    function getsound(){
        return $this->geluid;
    }
}
    





$wally = new robot;
$wally->naam = "wal-e";
$wally->geluid = "beepboop";
$wally->voorstuwing = "rollend";
$wally->setsound("beepboob");
echo $wally->geluid;
echo $wally->getsound();

echo "<br>";


$wolly = new robot;
$wolly->naamr = "wol-e";
$wolly->geluid = "boopbeep";
$wolly->voordstuwing = "lopend";
$wolly->setsound("boopbeep");
echo $wolly->geluid;
echo $wolly->getsound();

