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
                <h1>GP Surgery</h1>
            </div>
        </div>
    </header>
    
    <div class="container" style=" display: flex; justify-content: center; align-items: center; ">
        <div class="form-container" style=" display: flex; flex-direction: column; align-items: stretch; ">
        <button onclick="window.location.href='register.php'" class="btn"> Register as a new patient</button> 
        <button onclick="window.location.href='register_staff.php'" class="btn"> Register as a staff</button> 
        <button onclick="window.location.href='login_staff.php'" class="btn"> Login as staff</button> 
        <button onclick="window.location.href='login.php'" class="btn"> Login as patient</button> 
            
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
