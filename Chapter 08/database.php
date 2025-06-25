<?php

    $db_server = "localhost";        // Database server
    $db_user = "root";               // MySQL username
    $db_password = " ";           // MySQL password
    $db_name = "business_db";        // Your database name


    try{


        $conn = mysqli_connect($db_server,
                                $db_user,
                                $db_password,
                                $db_name); // Connect
    }
    catch(mysqli_sql_exception){
        echo "Connection failed: " . mysqli_connect_error() . "<br>";
    
    }

    if ($conn) {
        echo "Connected to the database successfully!<br>";
    } 

?>
