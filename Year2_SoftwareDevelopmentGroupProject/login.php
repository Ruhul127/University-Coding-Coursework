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
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Perform input validation
    if (empty($nhsnumber) || empty($password)) {
        $error = "Please enter NHS number and password";
    } else {
        // Retrieve user information from the database based on the NHS number
        $sql = "SELECT * FROM patients WHERE nhs_number = '$nhsnumber'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // User found, verify the password
            $row = $result->fetch_assoc();
            $hashed_password = $row["password"];
            if (password_verify($password, $hashed_password)) {
                // Password matched, create session and redirect to the patient dashboard
                $_SESSION["nhs_number"] = $nhsnumber;
                header("Location: home_patient.php");
                exit;
            } else {
                $error = "Invalid password";
            }
        } else {
            $error = "User not found";
        }
    }
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
                <h1>Login</h1>
            </div>
        </div>  
    </header>

    <div class="container">
        <div class="form-container">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="nhsnumber">NHS Number:</label><br>
                <input type="number" id="nhsnumber" name="nhsnumber"><br>

                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password"><br>

                <input type="submit" value="Login">
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
