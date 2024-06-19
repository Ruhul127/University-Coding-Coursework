<?php
// Start the session
session_start();

// Check if the user is already logged in, if yes redirect to the patient dashboard
if (isset($_SESSION["nhs_number"])) {
    header("Location: home_patient.php");
    exit;
}

// Include your database connection file
require 'db_connect.php';

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from form
    $nhsnumber = mysqli_real_escape_string($conn, $_POST['nhsnumber']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $mobilephone = mysqli_real_escape_string($conn, $_POST['mobilephone']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Perform input validation
    if (empty($nhsnumber) || empty($name) || empty($dob) || empty($address) || empty($mobilephone) || empty($username) || empty($password)) {
        $error = "All fields must be filled out";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare SQL to check if patient already exists
        $check_sql = "SELECT * FROM patients WHERE nhs_number = '$nhsnumber'";
        $check_result = $conn->query($check_sql);

        if ($check_result->num_rows > 0) {
            $error = "A patient with the NHS number already exists";
        } else {
            // Prepare SQL to insert data
            $sql = "INSERT INTO patients (nhs_number, name, dob, address, mobile_phone, username, password) VALUES ('$nhsnumber', '$name', '$dob', '$address', '$mobilephone', '$username', '$hashed_password')";

            if ($conn->query($sql) === TRUE) {
                // Create session and store NHS number
                $_SESSION["nhs_number"] = $nhsnumber;

                // Redirect to patient dashboard page
                header("Location: home_patient.php");
                exit;
            } else {
                $error = "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}

// Redirect to patient dashboard page if user tries to refresh the page after successful submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)) {
    header("Location: patient_details.php");
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
            <h1>Register</h1>
            </div>

        </div>    
    </header>

    <div class="container">
        <div class="form-container" style="    height: auto;">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="nhsnumber">NHS Number:</label><br>
                <input type="number" id="nhsnumber" name="nhsnumber" value="<?php echo isset($_POST['nhsnumber']) ? htmlspecialchars($_POST['nhsnumber']) : ''; ?>"><br>

                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>"><br>

                <label for="dob">Date of Birth:</label><br>
                <input type="date" id="dob" name="dob" value="<?php echo isset($_POST['dob']) ? htmlspecialchars($_POST['dob']) : ''; ?>"><br>

                <label for="address">Address:</label><br>
                <input type="text" id="address" name="address" value="<?php echo isset($_POST['address']) ? htmlspecialchars($_POST['address']) : ''; ?>"><br>

                <label for="mobilephone">Mobile Phone:</label><br>
                <input type="tel" id="mobilephone" name="mobilephone" value="<?php echo isset($_POST['mobilephone']) ? htmlspecialchars($_POST['mobilephone']) : ''; ?>"><br>

                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>"><br>

                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password"><br>

                <input type="submit" value="Register">
            </form>
            <?php if ($error) : ?>
                <p><?php echo $error; ?></p>
            <?php endif; ?>
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
