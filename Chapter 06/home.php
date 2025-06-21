<?php
session_start();

// Handle logout first (before any output)
if(isset($_POST["logout"])){
    session_destroy();
    header("Location: session.php");
    exit(); // Critical to stop further execution
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        /* Modern CSS Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        /* Beautiful Global Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f5f7fa;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        /* Header Styles */
        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #3498db;
            font-size: 2.5rem;
        }
        
        h2 {
            color: #2980b9;
            margin: 25px 0 15px;
            font-size: 1.8rem;
        }
        
        h3 {
            color: #16a085;
            margin: 20px 0 10px;
            font-size: 1.4rem;
        }
        
        /* Paragraph Styles */
        p {
            margin-bottom: 15px;
            color: #555;
        }
        
        /* Link Styles */
        a {
            color: #3498db;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        a:hover {
            color: #2980b9;
            text-decoration: underline;
        }
        
        /* List Styles */
        ul {
            margin: 15px 0 25px 30px;
        }
        
        li {
            margin-bottom: 8px;
            padding-left: 5px;
        }
        
        /* Horizontal Rule */
        hr {
            border: 0;
            height: 1px;
            background: linear-gradient(to right, transparent, #3498db, transparent);
            margin: 30px 0;
        }
        
        /* User Info Section */
        .user-info {
            background-color: #e8f4fc;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
            border-left: 4px solid #3498db;
        }
        
        /* Logout Form Styles */
        form[action="home.php"] {
            margin: 20px 0;
        }
        
        input[type="submit"] {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }
        
        input[type="submit"]:hover {
            background-color: #c0392b;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            body {
                padding: 15px;
            }
            
            h1 {
                font-size: 2rem;
            }
        }
        
        /* Animation for subtle effects */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        body {
            animation: fadeIn 0.5s ease-out;
        }
    </style>
</head>
<body>
    <!-- This is the Home page of our website -->
    <h1>Welcome to the Home Page</h1>
    <p>This is a simple PHP website to demonstrate various concepts.</p>
    <p>Use the navigation menu to explore different sections.</p>
    <p>Feel free to modify the code and experiment with PHP!</p>

    <h2>Know about us</h2>
    <p>Check out the <a href="https://www.php.net/manual/en/">PHP Manual</a> for more information.</p>
    <p>Happy coding!</p>
    <p>For more examples, visit the <a href="https://github.com">GitHub</a>.</p>
    <h3>Our Top Products</h3>
    <ul>
        <li>Product 1: High-quality item</li>
        <li>Product 2: Affordable and reliable</li>
        <li>Product 3: Best seller of the year</li>
        <li>Product 4: Customer favorite</li>
        <li>Product 5: New arrival</li>
    </ul>
    <hr>
    
    <!-- Only show session info if logged in -->
    <?php if(isset($_SESSION['username'])): ?>
        <div class="user-info">
            <h3>User Info</h3>
            <p>Username: <?php echo htmlspecialchars($_SESSION['username']); ?></p>
            <p>Password: <?php echo htmlspecialchars($_SESSION['password']); ?></p>
        </div>
    <?php endif; ?>
    
    <h3>LogOut</h3>
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
   <!-- <a href="session.php">This Goes To Login Page</a> -->
    <hr>
</body>
</html>