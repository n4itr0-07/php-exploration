<?php

    // Switch = replacement to using many elseif statemetns
    //          more efficient, less code to write

    $grade = "A";

    switch($grade){
        case "A":
            echo"You did great";
            break;
        case "B":
            echo"You did good";
            break;
        case "C":
            echo "You did okay";
            break;
        case "D":
            echo"You did poorly";
            break;
        case "F":
            echo"You did too bad";
            break;
        default:
            echo"{$grade} is not valid";
    }
?>