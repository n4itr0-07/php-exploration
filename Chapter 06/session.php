<?php
session_start();

if(isset($_POST["login"])){
    if(!empty($_POST["username"]) && !empty($_POST["password"])){
        $_SESSION["username"] = $_POST["username"]; 
        $_SESSION["password"] = $_POST["password"];
        header("Location: home.php");
        exit(); // Always call exit after header redirect
    } else {
        $error = "Please enter both username and password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Modern CSS Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        /* Body Styling */
        body {
            background-color: #f5f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        
        /* Main Container */
        .login-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 400px;
            animation: fadeIn 0.5s ease-out;
        }
        
        /* Header Styles */
        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 20px;
            font-size: 2rem;
        }
        
        /* Link Styles */
        a {
            color: #3498db;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 20px;
            transition: color 0.3s;
        }
        
        a:hover {
            color: #2980b9;
            text-decoration: underline;
        }
        
        /* Form Styles */
        form {
            display: flex;
            flex-direction: column;
        }
        
        label {
            color: #2c3e50;
            margin-bottom: 5px;
            font-weight: 500;
        }
        
        input[type="text"],
        input[type="password"] {
            padding: 12px 15px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }
        
        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #3498db;
            outline: none;
        }
        
        input[type="submit"] {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }
        
        input[type="submit"]:hover {
            background-color: #2980b9;
        }
        
        /* Error Message */
        .error-message {
            color: #e74c3c;
            margin-bottom: 15px;
            text-align: center;
        }
        
        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Responsive Design */
        @media (max-width: 480px) {
            .login-container {
                padding: 20px;
            }
            
            h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- This is the login page of our website -->
        <h1>Login Page</h1>
        <a href="home.php">This Goes To Home Page!</a>
        
        <?php if(!empty($error)): ?>
            <div class="error-message"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <form action="session.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            
            <input type="submit" name="login" value="Login">
        </form>
    </div>
</body>
</html>


<!--
    // session = SGB (Session Global Block) = used to store information on auser
    //          to be used across multiple pages.
    //          A user is assigned a session-id 
    //          ex. login credentials, shopping cart items, etc.


    //          Sessions are stored on the server and are more secure than cookies.

    //          Sessions are used to store user preferences, session data, and other information.

   // session_start(); // Start the session

-->