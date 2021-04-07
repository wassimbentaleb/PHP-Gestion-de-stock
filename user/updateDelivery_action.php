<?php
require_once "./database.php";

global $db;

$id=$_POST["id_livraison"];
$name=$_POST["name"];
$description=$_POST["description"];
$date=$_POST["date"];

$query = "Update `deliveries` SET name='$name', description='$description', date='$date' where id=$id;";
$result = $db->query($query);

header("Location: ./index.php");