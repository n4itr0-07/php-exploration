<?php

function is_even($number){
    if ($number % 2 == 0) {
        echo "The number is even.\n";
        return true;
    } else {
        echo "The number is odd.\n";
        return false;
    }
}

is_even(40);

?>
