<?php
    require_once "./database.php";
    require "header.php";

    global $db;

    $id = $_GET['id'];
    $query = "SELECT * FROM deliveries WHERE id = '$id'";
    $result = $db->query($query);
    $delivery = $result->fetch();
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/addProduct.css">
</head>


<body>

<a href="./index.php">
    <h1 style="margin: 20px" >Retourner</h1>
</a>

<br>
<br>
<h2 class="center">Modifier la livaraison</h2>
<br>
<form action="updateDelivery_action.php" method="post">
    <div>
        <label for="id_livraison">Id :</label>
        <input type="text" id="id_livraison" name="id_livraison" value="<?php echo $delivery['id']?>">
    </div>
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" value="<?php echo $delivery['name']?>">
    </div>
    <div>
        <label for="description">Description :</label>
        <input type="text" id="description" name="description" value="<?php echo $delivery['description']?>">
    </div>
    <div>
        <label for="date">date :</label>
        <input type="date" id="date" name="date" value="<?php echo $delivery['date']?>">
    </div>
    <div class="button">
        <button type="submit">Sauvegarder</button>
    </div>
</form>

</body>
</html>

