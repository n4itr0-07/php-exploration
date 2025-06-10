<?php

    $name = "Virus";
    $email = "fake123@gmail.com";
    $food = "pizza";

    $age = 50;
    $users = 2;
    $qunatity = 5;

    $gpa = 2.5;
    $price = 5.69;

    $is_online = true;
    $for_sale = false;

    $total = null;

    echo "\nMy name is $name and I am $age years old. <br>";
    echo "Your Email is {$email}<br>";
    echo "\nThere are {$users} online<br>";

    echo"Your GPA is : {$gpa}<br>";
    
    echo"Prizza rate is \${$price}<br>";

    echo"Online status : {$is_online} <br>";

    echo "You have ordered {$quantity} x {$food}s <br>";
    $total = $quantity * $price;
    echo"Your total is \${$total}";

?>

