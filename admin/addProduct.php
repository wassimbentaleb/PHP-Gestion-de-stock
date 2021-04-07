<?php
    require "header.php"
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/addProduct.css">
</head>


<body>

<a href="index.php">
    <h1 style="margin: 20px" >Retourner</h1>
</a>

<br>
<br>
<h1 class="center">Ajouter un produit</h1>
<br>
<form action="addProduct_action.php" method="post">
    <div>
        <label for="nom_produit">Nom produit :</label>
        <input type="text" id="nom_produit" name="nom_produit">
    </div>
    <div>
        <label for="quantite">Quantite :</label>
        <input type="number" id="quantite" name="quantite">
    </div>
    <div>
        <label for="prix">Prix :</label>
        <input type="number" id="prix" name="prix">
    </div>
    <div>
        <label for="tva">TVA :</label>
        <input type="number" id="tva" name="tva">
    </div>
    <div class="button">
        <button type="submit">Ajouter</button>
    </div>
</form>

</body>
</html>

