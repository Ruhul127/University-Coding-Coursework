<?php
// Start the session
session_start();

// Check if the user is already logged in, if yes redirect to the appropriate dashboard
if (isset($_SESSION["username"])) {
    $role = $_SESSION["role"];
    if ($role == "doctor") {
        header("Location: doctor_dashboard.php");
    } elseif ($role == "staff") {
        header("Location: home_staff.php");
    }
    exit;
}

// Include your database connection file
require 'db_connect.php';

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Perform input validation
    if (empty($username) || empty($password)) {
        $error = "Please enter username and password";
    } else {
        // Retrieve user information from the database based on the username
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // User found, verify the password
            $row = $result->fetch_assoc();
            $hashed_password = $row["password"];
            if (password_verify($password, $hashed_password)) {
                // Password matched, create session and redirect to the appropriate dashboard
                $_SESSION["username"] = $username;
                $_SESSION["role"] = $row["role"];

                $role = $row["role"];
                if ($role == "doctor") {
                    header("Location: doctor_dashboard.php");
                } elseif ($role == "staff") {
                    header("Location: home_staff.php");
                }
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
    <div class="logo-container">
             <a href="index.php"><img src="images/logo.png" alt="Logo" class="logo"></a>   
                <h1>Login</h1>
            </div> 
    </header>

    <div class="container">
        <div class="form-container">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br>

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
