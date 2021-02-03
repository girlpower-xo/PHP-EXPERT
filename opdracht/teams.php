<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="teams.css">
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

<p>Team namen</p>


<?php
$stmt = $mysqli->query('SELECT * FROM teams');
    foreach ($stmt as $row) : ?>
<table>

<tr>
<td><?=$row['naam'];?></td>
<td>
        <a href="teamgegevens.php?id=<?php echo $row['id'] ?>">Bekijk</a>
    </td>
</tr>


    </table>
<?php endforeach;?>




    
                






