<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="03_exercise_1.php" method="post">
    <label for="">Enter a country  </label>
    <input type="text" name="country" id="country">
    <input type="submit"><br>

    </form>
</body>
</html>

<?php


    $capitals = array(
        "Russia" => "Moscow",
        "Pakistan" => "Islamabad",
        "India" => "New Delhi",
        "Bangladesh" => "Dhaka",
        "Nepal" => "Kathmandu",
        "Sri Lanka" => "Colombo"
    );

    // Check if the form was submitted and 'country' exists
    if (isset($_POST['country'])) {
        $country = $_POST['country'];
        $capital = $capitals[$country] ?? "Not found";

        echo "Capital of {$country} is : {$capital}";
    }

?>
