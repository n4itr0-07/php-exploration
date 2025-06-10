<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 50px;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        label {
            font-size: 18px;
            font-weight: bold;
        }
        input[type="text"] {
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100px;
            text-align: center;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .result {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

    <form action="06_exercise.php" method="get">
        <label>Quantity:</label><br>
        <input type="text" name="quantity">
        <br>
        <input type="submit" value="Calculate Total">
    </form>

    <?php
    if (isset($_GET["quantity"])) {
        $item = "Pizza";
        $price = 5.99;
        $quantity = $_GET["quantity"];
        $total = $quantity * $price;

        echo "<div class='result'>";
        echo "You ordered <strong>{$quantity} x {$item}s</strong><br>";
        echo "Total cost: <strong>\${$total}</strong>";
        echo "</div>";
    }
    ?>

</body>
</html>
