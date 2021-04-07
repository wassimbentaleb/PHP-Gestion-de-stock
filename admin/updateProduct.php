<?php
    require_once "./database.php";
    require "header.php";

    global $db;

    $id = $_GET['id'];
    $query = "SELECT * FROM products WHERE id = '$id'";
    $result = $db->query($query);
    $product = $result->fetch();
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/addProduct.css">
    <title>Gestion de stock</title>
</head>


<body>

<a href="./listProducts.php">
    <h1 style="margin: 20px" >Retourner</h1>
</a>

<br>
<br>
<h1 class="center">Modifier le produit</h1>
<br>
<form action="updateProduct_action.php" method="post">
    <div>
        <label for="id_produit">Id :</label>
        <input type="text" id="id_produit" name="id_produit" value="<?php echo $product['id']?>">
    </div>
    <div>
        <label for="nom_produit">Nom :</label>
        <input type="text" id="nom_produit" name="nom_produit" value="<?php echo $product['name']?>">
    </div>
    <div>
        <label for="quantite">Quantite :</label>
        <input type="number" id="quantite" name="quantite" value="<?php echo $product['quantity']?>">
    </div>
    <div>
        <label for="prix">Prix :</label>
        <input type="number" id="prix" name="prix" value="<?php echo $product['price']?>">
    </div>
    <div>
        <label for="tva">TVA :</label>
        <input type="number" id="tva" name="tva" value="<?php echo $product['tva']?>">
    </div>
    <div class="button">
        <button type="submit">Sauvegarder</button>
    </div>
</form>

</body>
</html>

