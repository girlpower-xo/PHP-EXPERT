<?php 
$database_lokatie     = 'localhost';
$database_naam        = 'voetbalclubasd';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$id = $_GET['id'];

$sql = 'SELECT * FROM `gebruikers` WHERE `id` = :id; ';
$statement = $database_connectie->prepare($sql);

$statement->bindParam(":id", $id);

$statement->execute();
$gebruikers = $statement->fetch();

?>

<h3>De gegevens van <?= $gebruikers['voornaam'] ?></h3>
<?php
echo $gebruikers["id"]. "-". $gebruikers["voornaam"] ." ". $gebruikers["achternaam"] ." ". $gebruikers["email"]. " ". $gebruikers["wachtwoord"] ." ". $gebruikers["team"]  ." ". $gebruikers["contributieIsBetaald"]; 
           
?>

