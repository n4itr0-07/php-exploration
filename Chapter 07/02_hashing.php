<?php

    // hashing = transforming sensitive data (password)
    //           into letters, numbers, and/or symbols
    //           via a mathematical process. (similar to encryption)
    //           Hides the original data from 3rd parties.

    // Hashing is a one-way process, meaning you cannot retrieve the original data from the hash.

    // Hashing is commonly used to store passwords securely.

    // Hashing functions in PHP:
    // - password_hash() : creates a hash of a password using a strong one-way hashing
    //   algorithm (e.g., bcrypt, Argon2).
    // - password_verify() : verifies a password against a hash.


    $password = "my_secure_password"; // Example password

    $hash = password_hash($password, PASSWORD_DEFAULT); // Hash the password

    if(password_verify("my_secure_password", $hash)) {
        echo "Password is valid.<br>";
    } else {
        echo "Invalid password.<br>";
    }

    echo "Original Password: $password<br>";
    echo "Hashed Password: $hash<br>";

?>