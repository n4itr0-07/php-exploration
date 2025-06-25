<?php

    include("database.php");

    $user = "Rock";
    $password = "Rock@123";
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (user, password)
            VALUES ('$user', '$hash')";
    
    try{
        mysqli_query($conn, $sql);
        echo" ☑️ User created successfully";
    }
    catch(mysqli_sql_exception){
        echo " ❌ Error creating useer";
    }

    mysqli_close($conn);
?>

