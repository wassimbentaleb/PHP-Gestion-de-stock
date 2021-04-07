<?php
require_once "./database.php";
require "header.php"

$id=$_GET["id"];

?>

<div class="center">
    <br>
    <a href="addDelivery.php">
        <h1 style="margin: 20px" >Ajouter une livraison</h1>
    </a>
    <br>
    <table class="tableCommune">
        <tr><th>ID</th><th>Nom</th><th>Description</th><th>Date</th><th>Montant</th><th>Action</th></tr>

        <?php
        $sql = "SELECT * FROM `deliveredproducts` where deliveryId=$id order by id";
        $index = 1;
        foreach ($db->query($sql) as $row) {

            $id = $row['id'];
            $name = $row['name'];
            $description = $row['description'];
            $date = $row['date'];
            $amount = $row['amount'];

            echo "<tr>";
            echo "<td> $index</td>";
            echo "<td> $name </td>";
            echo "<td> $description </td>";
            echo "<td> $date </td>";
            echo "<td> $amount DT</td>";
            echo "<td>
                    <a href='./deleteDelivery_action.php?id=$id'>
                        <img style='width: 20px' src='assets/img/delete.png'>  
                    </a>
                    
                    <a href='./updateDelivery.php?id=$id'>
                        <img style='width: 20px' src='assets/img/edit.png'>
                    </a>

                    <a href='./deliveryDetails.php?id=$id'>
                        <img style='width: 20px' src='assets/img/consult.png'>
                    </a> 
                </td>";
            echo "</tr>";
        $index++;
        }
        ?>
    </table>
</div>

