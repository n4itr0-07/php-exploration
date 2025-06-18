<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="04_sanitze_validate.php" method="post">
        username: <br>
        <input type="text" name="username"> <br>
        age:<br>
        <input type="number" name="age"> <br>
        email: <br>
        <input type="email" name="email"> <br><br>
        <input type="submit" name="login" value="Login"> <br><br>
    </form>
</body>
</html>

<?php

    if(isset($_POST["login"])){

       //  $username = $_POST["username"]; # This is not safe, it can lead to XSS attacks.
        // echo "Username: $username <br>";
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        echo "Age: $age <br>";

        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        echo "Your email is: {$email} <br>";

        // Now Validation Process
        if(empty($username)){
            echo "Username is required <br>";
        } else {
            echo "Username is valid <br>";
        }
        if(empty($age)){
            echo "Age is required <br>";
        } elseif(!filter_var($age, FILTER_VALIDATE_INT)){
            echo "Age must be a valid integer <br>";
        } else {
            echo "Age is valid <br>";
        }

        if(empty($email)){
            echo "Email is required <br>";
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Email must be a valid email address <br>";
        } else {
            echo "Email is valid <br>";
        }

    }
?>