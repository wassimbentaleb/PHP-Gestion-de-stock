<?php

require_once "./database.php";
require "header.php";

global $db;
?>

<a href="index.php">
    <h1 style="margin: 20px" >Retourner</h1>
</a>
<div class="center">
    <br>
    <br>
    <br>
    <table class="tableCommune">
        <tr><th>ID</th><th>Nom</th><th>Prix unit. TTC</th><th>Quantite</th><th>TVA</th><th>Action</th></tr>

        <?php
        $sql = "SELECT * FROM `products` order by id";
        $index = 1;
        foreach ($db->query($sql) as $row) {

            $id = $row['id'];
            $name = $row['name'];
            $price = $row['price'];
            $quantity = $row['quantity'];
            $tva = $row['tva'];

            echo "<tr>";
            echo "<td> $index</td>";
            echo "<td> $name </td>";
            echo "<td> $price </td>";
            echo "<td> $quantity </td>";
            echo "<td> $tva </td>";
            echo "<td>
                    <a href='./delete_action.php?id=$id'>
                        <img style='width: 20px' src='assets/img/delete.png'>  
                    </a>
                    
                    <a href='./updateProduct.php?id=$id'>
                        <img style='width: 20px' src='assets/img/edit.png'></td>
                    </a>";
            echo "</tr>";
        $index++;
        }
        ?>
    </table>
</div>

