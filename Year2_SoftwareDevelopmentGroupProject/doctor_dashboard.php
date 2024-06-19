<?php
// Start the session
session_start();

// Check if the user is logged in, if not redirect to the login page
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit;
}

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
      
        <header>   
        <div class="container">
            <div class="logo-container">
            <a href="index.php"><img src="images/logo.png" alt="Logo" class="logo"></a>   
                <h1>Doctor Dashboard</h1>
            </div>
        </div>
    </header>   
    </header>

    <div class="home-content" style=" height: 80vh; display: flex; flex-direction: column; align-items: center; ">
        <h2>Welcome, <?php echo $name; ?>!</h2>
      
        <button onclick="window.location.href='logout.php'" class="btn">Logout</button>

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
