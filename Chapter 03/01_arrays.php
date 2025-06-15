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
    // array_shift($foods) // will remove first one
    // array_unshift($foods, "pineapple", "Mangoes"); // will add at first
    // array_reverse($foods); // will not change original array but will return reversed array
    // $foods = array_reverse($foods); // will change original array to reversed array

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

    // Count the number of items in an array
    echo "Number of items in foods array is : " . count($foods) . "\n";
?>