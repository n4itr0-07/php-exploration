<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🥸</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

    username:<br>
    <input type="text" name="username" id="username" placeholder="Enter your username"><br><br>
    <input type="submit" value="Submit"><br><br>
    </form>
</body>
</html>


<?php

    // $_SERVER = SGB Server Global Variables : that contains headers, paths, and script locations.
    //            The entries in this array are created by the web server and can be used to get information about the request.
    // $_SERVER['REQUEST_METHOD'] = The request method used to access the page (e.g., GET, POST).
    //            Shows nearly everything you need to know about the current web page env.


    foreach($_SERVER as $key => $value) {
        // Display the key and value of each server variable
        echo "<strong>$key</strong>: $value<br>";
    }


    // Check if the form was submitted using the POST method
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Check if the form was submitted using the POST method
        echo "Form submitted successfully!";
    } else {
        // If not, display a message
        echo "Please submit the form.";
    }
?>