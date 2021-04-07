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
<h3 class="center">Nouvelle livraison</h3>
<br>
<form action="addDelivery_action.php" method="post">
    <div>
        <label for="name">Nom livraison :</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="description">Description :</label>
        <input type="text" id="description" name="description">
    </div>
    <div>
        <label for="date">Date :</label>
        <input type="date" id="date" name="date">
    </div>
    <div class="button">
        <button type="submit">Ajouter</button>
    </div>
</form>

</body>
</html>

