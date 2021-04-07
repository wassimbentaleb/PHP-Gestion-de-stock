<?php

$db_server = "127.0.0.1";
$db_username = "root";
$db_pwd = "";
$db_name = "gestion-stock";


try {
    $db = new PDO("mysql:host=$db_server; dbname=$db_name", $db_username, $db_pwd);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
?>