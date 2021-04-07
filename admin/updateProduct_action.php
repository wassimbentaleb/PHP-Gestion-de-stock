<?php
require_once "./database.php";

global $db;

$nom_produit=$_POST["nom_produit"];
$quantite=$_POST["quantite"];
$prix=$_POST["prix"];
$tva=$_POST["tva"];
$id=$_POST["id_produit"];

$query = "Update `products` SET name='$nom_produit', quantity='$quantite', price='$prix', tva='$tva' where id=$id;";
$result = $db->query($query);

header("Location: ./listProducts.php");