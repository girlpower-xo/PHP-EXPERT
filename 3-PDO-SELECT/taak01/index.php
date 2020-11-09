<?php 

$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);


$sql = "SELECT * FROM users";
$stmt = $db_conn->prepare($sql);
$stmt ->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT kolommen FROM table WHERE kolom = :placeholder";
$stmt = $db_conn->prepare($sql);
$stmt ->bindParam(":placeholder", $placeholder_variabele);
$stmt ->execute();
$database_gegevens = $statement->fetch(PDO::FETCH_ASSOC);