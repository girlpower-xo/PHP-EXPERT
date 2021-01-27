<?php 
$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);
//$firstname = "mohamed";
//$lastname = "hadid";
// ik maak een variable aan voor de id.
$id = 1;
// ik maak een sql statement waarbij ik een rij uit de tabel users haal waar de id een bepaald getal is. de :id is een alias. 
$sql = 'SELECT * FROM `users` WHERE `id` = :id; ';
$statement = $database_connectie->prepare($sql);
// hier vertel ik inn code dat de :id word gevuld met de variable $id. 
$statement->bindParam(":id", $id);
//$statement->bindParam(":lastname", $lastname);
$statement->execute();
$user = $statement->fetch();
// hier echo ik de hele rij van id = 1. de kolommen van de tabel zijn : id , firstname, lastname, email, password, role.
echo $user["id"]. "-". $user["firstname"] ."-". $user["lastname"] ."-". $user["email"]. "-". $user["password"] ."-". $user["role"]; 
 //echo print_r($user);  om de hele array op te halen.              
?>