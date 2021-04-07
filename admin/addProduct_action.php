<?php
require_once "./database.php";

global $db;

$nom_produit=$_POST["nom_produit"];
$quantite=$_POST["quantite"];
$prix=$_POST["prix"];
$tva=$_POST["tva"];

$query = "INSERT INTO `products` (`name`, `quantity`, `price`, `tva`) VALUES ('$nom_produit', '$quantite', '$prix', '$tva');";
$result = $db->query($query);

header("Location: ./addProduct.php");
