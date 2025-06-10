<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="05_index.php" method="post">  <!-- POST method will not append data in URL-->
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="username"> <br>
        <input type="submit" value="Log in">

    </form> 
</body>
</html>

<?php

    // echo "{$_GET["username"]} <br>";
    // echo "{$_GET["password"]} <br>";

    // POST
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";
?>