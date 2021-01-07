<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$mysqli = new mysqli('localhost', 'root', '', 'toolsforever');
if ($mysqli->connect_error) {
    die('');
}

$stmt = $mysqli->query('SELECT * FROM users');
    foreach ($stmt as $row){
        echo $row["email"];
    }
                
?>