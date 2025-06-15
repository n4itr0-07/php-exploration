<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="07_check_boxes.php" method="post">

        <input type="checkbox" name="pizza" value="Pizza"> Pizza<br>
        <input type="checkbox" name="burger" value="Burger"> Burger<br>
        <input type="checkbox" name="pasta" value="Pasta"> Pasta<br>
        <input type="checkbox" name="salad" value="Salad"> Salad<br>
        <input type="submit" name="Submit">
    </form>
</body>
</html>

<?php

    if(isset($_POST["Submit"])) {
        // Check if the checkboxes are set
        $selected_items = [];
        if (isset($_POST["pizza"])) {
            $selected_items[] = $_POST["pizza"];
            echo"You like Pizza!! <br>";
        }
    
        if (isset($_POST["burger"])) {
            $selected_items[] = $_POST["burger"];
            echo"You like Burger!! <br>";
        }

        if (isset($_POST["pasta"])) {
            $selected_items[] = $_POST["pasta"];
            echo"You like Pasta!! <br>";
        }
        if (isset($_POST["salad"])) {
            $selected_items[] = $_POST["salad"];
            echo"You like Salad!! <br>";
        }

        // Display the selected items
        if (!empty($selected_items)) {
            echo "You have selected: " . implode(", ", $selected_items);
        } else {
            echo "No items selected.";
        }
    }


?>