<?php
require_once "./database.php";
global $db;

$id = $_GET['id'];

$query = "DELETE FROM `products` WHERE id=$id";
$result = $db->query($query);

header("Location: ./listProducts.php");

