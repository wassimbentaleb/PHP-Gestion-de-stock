<?php

require_once "./database.php";

global $db;
session_start();

$username=$_POST["username"];
$password=$_POST["password"];

$query = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
$result = $db->query($query);
$user = $result->fetch();

if (is_array($user))  {
    if($user[3] == "admin") {
        $redirectTo = "./admin";
        $_SESSION["userType"] = "admin";
    } else if ($user[3] == "user") {
        $redirectTo = "./user";
        $_SESSION["userType"] = "user";
    }

    $_SESSION["isConnected"] = "true";
}else {
    echo 'empty result!';
    $redirectTo = "./index.php?error=failed";
}

header("Location: $redirectTo");