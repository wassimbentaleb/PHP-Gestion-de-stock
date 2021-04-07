<?php
require_once "./database.php";

global $db;

$name=$_POST["name"];
$description=$_POST["description"];
$date=$_POST["date"];

$query = "INSERT INTO `deliveries` (`name`, `description`, `date`, `amount`) VALUES ('$name', '$description', '$date', 0);";
$result = $db->query($query);

header("Location: ./index.php");
