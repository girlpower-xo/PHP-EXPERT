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



ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$mysqli = new mysqli('localhost', 'root', '', 'voetbalclubasd');
if ($mysqli->connect_error) {
    die('');
}
?>

<p>Voornaam + Achternaam</p>


<?php
$stmt = $mysqli->query('SELECT * FROM gebruikers');
    foreach ($stmt as $row) : ?>
<table>

<tr>
    <td><?=$row['voornaam'];?></td>
    <td><?=$row['achternaam'];?></td>
    <td>
        <a href="teamlid.php?id=<?php echo $row['id'] ?>">Bekijk</a>
    </td>
   <td> <a href="leden2.php?id=1"> klik om te verwijderen </a></td>
   <td> <a href="update.php?id=1"> klik om te update </a></td>
</tr>




    </table>
<?php endforeach;?>




    
                






