<?php

    // isset() = Returns TRUE if a variable is declared and not null
    // empty() = Returns TRUE if a variable is not declared, false, null, ""


    $username = "Putin";

    if(isset($username)) {
        echo "Username is set to : {$username}\n";
    } else {
        echo "Username is not set\n";
    }

    // Check if a variable is empty
    if(empty($username)) {
        echo "Username is empty\n";
    } else {
        echo "Username is not empty, it is : {$username}\n";
    }

?>