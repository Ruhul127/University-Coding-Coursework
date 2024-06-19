<?php
// Start the session
session_start();

// Check if the user is logged in and has the role "staff", if not redirect to the login page
if (!isset($_SESSION["username"]) || $_SESSION["role"] !== "staff") {
    header("Location: login.php");
    exit;
}

// Include your database connection file
require 'db_connect.php';

// Fetch all patient details from the database
$sql = "SELECT * FROM patients";
$result = $conn->query($sql);

// Check if any patients are found
if ($result->num_rows > 0) {
    // Patients found, display the details
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
            <h1>Staff Dashboard</h1>

            </div>
            </div>    
        </header>

        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>NHS Number</th>
                        <th>Name</th>
                        <th>Date of Birth</th>
                        <th>Address</th>
                        <th>Mobile Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Loop through each patient record and display the details
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row["nhs_number"]; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["dob"]; ?></td>
                            <td><?php echo $row["address"]; ?></td>
                            <td><?php echo $row["mobile_phone"]; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
             <button onclick="window.location.href='logout.php'" class="btn">Logout</button> 

        </div>
    </body>
    </html>
    <?php
} else {
    // No patients found
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Staff Dashboard - GP Vaccination Tracker</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>
        <header>
            <div class="container">
                <h1>Staff Dashboard</h1>
            </div>    
        </header>

        <div class="container">
            <p>No patients found.</p>
            <a href="logout.php">Logout</a>
        </div>
    </body>
    </html>
    <?php
}
?>
