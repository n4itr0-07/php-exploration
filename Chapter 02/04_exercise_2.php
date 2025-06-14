<?php

    $age = 25;
    $citizen = true;

    // 2nd example
    $child = false;
    $senior = false;
    $ticket = null;


    // Example 1
    if($age >= 18 && $citizen){
        echo"You can vote";
    }
    else{
        echo"You can vote";
    }

    // Example 2

    if($child || $senior){
        $ticket = 10;
    }
    else{
        $ticket = 15;
    }

    echo"The ticket price is \${$ticket}";

?>