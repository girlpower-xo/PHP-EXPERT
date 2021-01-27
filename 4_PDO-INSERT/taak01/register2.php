
<?php

$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$firstName  = $_POST['firstname'];
$lastName  = $_POST['lastname'];


$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);


if (empty($firstName) and empty($lastName)){
  header("Location: register.php?error=noInputFilled");
  exit();
}else{
  
  $sql = 'INSERT INTO users (firstname, lastname) VALUES (:firstname, :lastname)';
  $stmt = $database_connectie->prepare($sql);
  $stmt->bindParam(':firstname', $firstName);
  $stmt->bindParam(':lastname', $lastName);

  $stmt->execute();
  header("Location: register.php?registration=succesfull");
  exit;
}