
<?php

$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$name  = $_POST['name'];
$purchase_price = $_POST['purchase_price'];
$selling_price = $_POST['selling_price'];



$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);


if (empty($name) and empty($purchase_price) and empty($selling_price)){
  header("Location: register.php?error=noInputFilled");
  exit();
}else{
  
  $sql = 'INSERT INTO products (name, purchase_price , selling_price ) VALUES (:name , :purchase_price , :selling_price  )';
  $stmt = $database_connectie->prepare($sql);
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':purchase_price', $purchase_price);
  $stmt->bindParam(':selling_price', $selling_price);
 

  $stmt->execute();
  header("Location: register.php?registration=succesfull");
  exit;
}