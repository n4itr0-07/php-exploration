<?php

    // cookie = Information about a user stored in a user's web browser.
    //          targeted advertisements, browsing preferences, and 
    //          other non-sensitive data.
    //          Cookies are sent to the server with every request.
    //          Cookies are stored in the user's browser and can be accessed by the server.

    //          Cookies are used to store user preferences, session data, and other information.


    // Syntax:
    // setcookie(name, value, expire, path, domain, secure, httponly);

    // Example:
    setcookie("username", "JohnDoe", time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("user_id", "12345", time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("user_email", "abc@gmail.com", time() + (86400 * 30), "/"); // 86400 = 1 day

    /*
    foreach ($_COOKIE as $key => $value) {
        echo "$key: $value <br>";
    }
    */
    if(isset($_COOKIE["username"])){
        echo "Username: " . $_COOKIE["username"] . "<br>";
    } else {
        echo "Username cookie is not set.<br>";
    }
?>