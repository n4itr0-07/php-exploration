<?php


    // arrays = "variables" which can hold more than one value at a time
    /*   
    $food_1 = "apple";
    $food_2 = "orange";
    $food_3 = "banana";
    $food_4 = "coconut";

    instead of these long we will use array
    */

    $foods = array("apple", "orange", "banana", "coconut");

    //$foods[0] = "pineapple";
    //array_push($foods, "pineapple", "Mangoes"); // Push at last
    //array_pop($foods) // will remove last one

    /*
    echo"Food at index 0 is : {$foods[0]}\n";
    echo "Food at index 1 is : {$foods[1]}\n";
    echo"Food at index 2 is : {$foods[2]} \n";
    echo "Food at index 3 is : {$foods[3]}";

    ---> Instead of this we will use foreach loop
    */

    foreach($foods as $food /* This is temp name for this mean single food in many foods */ ){
        echo $food . "\n";
    }
?>