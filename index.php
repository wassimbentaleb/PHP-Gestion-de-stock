<?php
$messageLoginIncorrect="";
if (isset($_GET['error'])) {
    $messageLoginIncorrect='<span style="color: #f44336">Login incorrect !</span>';
}
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Gestion de stock</title>
    <link rel="icon" type="image/x-icon" href="assets/img/GSS.ico">
</head>
<body>

<div class="cont">
    <h2>Login Form</h2>

    <form action="./login_action.php" method="post">
        <div class="imgcontainer">
            <img src="assets/img/avatar.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <?php echo $messageLoginIncorrect;?>

            <button type="submit">Login</button>
        </div>
    </form>
</div>


</body>
</html>
