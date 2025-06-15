<?php 

    // Associative arrays = arrays with named keys = An array made of key=>value pairs

    // countries => capitals
    // id => username
    // item => price
    // instead of numeric keys


    $capitals = array(
        "Russia" => "Moscow",
        "Pakistan" => "Islamabad",
        "India" => "New Delhi",
        "Bangladesh" => "Dhaka",
        "Nepal" => "Kathmandu",
        "Sri Lanka" => "Colombo"
    );

    // Change value of an item
    $capitals['Russia'] = "Saint Petersburg"; // Change Moscow to Saint Petersburg

    // Add new item
    $capitals['China'] = "Beijing"; // Add China with its capital

    // Remove an item
    unset($capitals['Sri Lanka']); // Remove Sri Lanka from the array

    // Display all keys
    // $keys = array_keys($capitals);

    //$values = array_values($capitals); // Get all values
    //$capitals = array_reverse($capitals); // Reverse the array

    // Single item access
    //echo "Capital of Russia is : {$capitals['Russia']}\n";

    // Loop through associative array
    foreach($capitals as $key => $value) {
        echo "Capital of {$key} is : {$value}\n";
    }
?>