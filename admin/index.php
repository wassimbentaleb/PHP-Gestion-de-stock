<?php
session_start();
if ($_SESSION["isConnected"] != "true" || $_SESSION["userType"] != "admin") {
    header('Location: ../index.php');
}

require "header.php"
?>

<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion de stock</title>
</head>
<body>
    <div class="center">
        <br><br>
        <h1>Stock</h1>
        <a class="menu" href="addProduct.php">Ajouter un produit</a><br>
        <a class="menu" href="listProducts.php">Consulter le stock</a><br>
<!--        <br>-->
<!--        <h1>Sorties</h1>-->
<!--        <a class="menu" href="consulterSorties.php">Consulter les sorties</a><br>-->
<!--        <a class="menu" href="ajouterSortie.php">Ajouter une nouvelle sortie</a><br>-->
    </div>
</body>

</html>