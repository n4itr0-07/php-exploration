<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        form {
            background: white;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        input[type="radio"] {
            margin-right: 8px;
        }

        input[type="submit"] {
            margin-top: 10px;
            padding: 6px 12px;
            font-size: 14px;
        }
    </style> -->
    
</head>
<body>
   <form action="06_radio_button.php" method="post">
        <input type="radio" name="credit_card" value="Visa"> Visa<br>
        <input type="radio" name="credit_card" value="Mastercard"> Mastercard<br>
        <input type="radio" name="credit_card" value="American Express"> American Express<br>
        <input type="submit" name="confirm" value="Confirm"><br> 
    </form>
</body>
</html>

<?php

    if(isset($_POST["confirm"])){

        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
            echo "You have selected: {$credit_card} as your credit card type.";
        }
        else {
            echo "No credit card type selected.";
        }
    }

?>
