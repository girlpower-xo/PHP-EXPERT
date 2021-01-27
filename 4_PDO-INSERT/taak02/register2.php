
<?php

$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$email  = $_POST['email'];



$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);


if (empty($email)){
  header("Location: register.php?error=noInputFilled");
  exit();
}else{
  
  $sql = 'INSERT INTO users (email) VALUES (:email)';
  $stmt = $database_connectie->prepare($sql);
  $stmt->bindParam(':email', $email);
 

  $stmt->execute();
  header("Location: register.php?registration=succesfull");
  exit;
}