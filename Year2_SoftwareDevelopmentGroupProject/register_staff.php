<?php
// Start the session
session_start();

// Check if the user is already logged in, if yes redirect to the doctor dashboard
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
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $role = mysqli_real_escape_string($conn, $_POST['role']); // Get the role from form

    // Perform input validation
    if (empty($name) || empty($lastname) || empty($phone) || empty($username) || empty($password) || empty($role)) {
        $error = "All fields must be filled out";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare SQL to check if user already exists
        $check_sql = "SELECT * FROM users WHERE username = '$username'";
        $check_result = $conn->query($check_sql);

        if ($check_result->num_rows > 0) {
            $error = "A user with the username already exists";
        } else {
            // Prepare SQL to insert data
            $sql = "INSERT INTO users (name, last_name, phone, username, password, role) VALUES ('$name', '$lastname', '$phone', '$username', '$hashed_password', '$role')";

            if ($conn->query($sql) === TRUE) {
                // Create session and store username
                $_SESSION["username"] = $username;
                $_SESSION["role"] = $role;
               
               
                 // Redirect based on role
                 if ($role === 'doctor') {
                    header("Location: doctor_dashboard.php");
                } else if ($role === 'staff') {
                    header("Location: home_staff.php");
                }

                exit;
            } else {
                $error = "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}

// Redirect to doctor doctor page if user tries to refresh the page after successful submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)) {
    header("Location: doctor_dashboard.php");
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
        </div>    
    </header>

    <div class="container">
        <div class="form-container" style="    height: auto;">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>"><br>

                <label for="lastname">Last Name:</label><br>
                <input type="text" id="lastname" name="lastname" value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : ''; ?>"><br>

                <label for="phone">Phone:</label><br>
                <input type="tel" id="phone" name="phone" value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>"><br>

                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>"><br>

                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password"><br>

                <label for="role">Role:</label><br> <!-- Add Role field -->
                <select id="role" name="role">
                    <option value="">Select role</option>
                    <option value="doctor">Doctor</option>
                    <option value="staff">Receptionist</option>
                </select><br>

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
