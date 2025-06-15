<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        label {
            display: inline-block;
            width: 100px;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="password"] {
            padding: 5px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            margin-top: 15px;
            padding: 6px 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="05_exercise_2.php" method="post">
        <label for="">username: </label>
        <input type="text" name="username" id="username"><br>
        <label for="">password: </label>
        <input type="password" name="password" id="password"><br>
        <input type="submit" name="login" value="Log in"> <br>
    </form>
</body>
</html>

<?php
    
    foreach($_POST as $key => $value) {
       echo "Key: {$key}, Value: {$value}<br>";
    }

    if(isset($_POST["login"])){

        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo "Username is required.<br>";
        }
        elseif(empty($password)){
            echo "Password is required.<br>";
        } 
        else {
            echo "Hello: {$username}<br>";
        }
    }
?>
