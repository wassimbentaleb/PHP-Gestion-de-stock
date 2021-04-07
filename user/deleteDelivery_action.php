<?php
require_once "./database.php";
global $db;

$id = $_GET['id'];

$query = "DELETE FROM `deliveries` WHERE id=$id";
$result = $db->query($query);

header("Location: ./index.php");

