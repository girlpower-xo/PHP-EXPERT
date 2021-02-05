<?php include("db-con.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="leden.css">
    <title>Document</title>
</head>
<body>
    
<?php 
$status = "";
$id = "";
if(isset($_GET["status"])) { $status=$_GET["status"];}
if(isset($_GET["id"])) { $id=$_GET["id"];}

if($status=="update"){
    
 $sql = "UPDATE `gebruikers` SET `achternaam` = 'hoi' WHERE `gebruikers`.`id` = :ph_id;";
 $stmt = $database_connectie->prepare($sql); //stuur naar mysql.
 $stmt->bindParam(":ph_id", $id );
 $stmt->execute();
  }
  elseif($status="verwijder"){
    $sql = "DELETE FROM gebruikers WHERE id = :ph_id";
    $stmt = $database_connectie->prepare($sql); //stuur naar mysql.
    $stmt->bindParam(":ph_id", $id );
    $stmt->execute();
  }
?>

<p>Voornaam + Achternaam</p>


<table>
<?php
$stmt = $database_connectie->query('SELECT * FROM gebruikers');
    foreach ($stmt as $row) : ?>

<tr>
    <td><?=$row['voornaam'];?></td>
    <td><?=$row['achternaam'];?></td>
    <td>
        <a href="teamlid.php?id=<?php echo $row['id'] ?>">Bekijk</a>
    </td>
   <td> <a href="leden.php?status=verwijder&id=<?php echo $row['id'];?>"> klik om te verwijderen </a></td>
   <td> <a href="leden.php?status=update&id=<?php echo $row['id']//updateField(1); ?>"> klik om te update </a></td>
</tr>
<?php endforeach;?>
</table>








    
                






