<?php
// Start the session
session_start();

// Check if the user is already logged in, if no redirect to login
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit;
}

// If user is logged in, you can fetch more user information if needed
// Include your database connection file
require 'db_connect.php';

// Fetch user information from the database based on the NHS number
$username = $_SESSION["username"];
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User found, retrieve the data
    $row = $result->fetch_assoc();
    $name = $row["name"];
 
} else {
    // User not found, handle the error
    echo "User not found.";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>GP Surgery </title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo-container">
             <a href="index.php"><img src="images/logo.png" alt="Logo" class="logo"></a>   
                <h1>Home</h1>
            </div>
        </div>  
    </header>

    <div class="container">
        <div class="home-content" style=" height: 80vh; display: flex; flex-direction: column; align-items: center; ">
            <p>Welcome back, <?php echo $name ?></p>

            <button onclick="window.location.href='staff_dashboard.php'" class="btn">Patients Details</button>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="footer-content">
                <p>All rights reserved &copy; <?php echo date('Y'); ?> GP Vaccination Tracker</p>
                <img src="images/footer-logo.png" alt="Footer Logo" class="footer-logo">
            </div>
        </div>
    </footer>
</body>
</html>
