
<?php

$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$id = $_GET["id"];



$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);



    $sql = "DELETE FROM products WHERE id = :ph_id";
    $stmt = $database_connectie->prepare($sql); //stuur naar mysql.
    $stmt->bindParam(":ph_id", $id );
    $stmt->execute();
    exit();

