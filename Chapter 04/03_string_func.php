<?php

    $username = "Putin Vladimir";
    $phone = "8-800-555-35-35";

    /*
    1. Use the function `strtoupper()` to convert the username to uppercase.
    2. Use the function `strtolower()` to convert the phone number to lowercase.
    3. Use the function `ucfirst()` to capitalize the first letter of the username.
    4. Use the function `ucwords()` to capitalize the first letter of each word in the username.
    5. Use the function `strlen()` to find the length of the username.
    6. Use the function `strpos()` to find the position of the first occurrence of "Vladimir" in the username.
    7. Use the function `str_replace()` to replace "Putin" with "President" in the username.
    8. Use the function `trim()` to remove any whitespace from the beginning and end of the username.
    9. Use the function `strrev()` to reverse the username.
    10. Use the function 'strlen()' to find the length of the phone number.
    */

    $username_upper = strtoupper($username);
    echo "Username in uppercase: $username_upper\n";

    $phone = str_replace("-", "", $phone);
    echo "Phone number without dashes: $phone\n";

    $username = strrev($username);
    echo "Username reversed: $username\n";
?>