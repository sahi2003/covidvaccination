<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the username and password (you can add more validation as per your requirements)

    // Check if the username and password match
    if ($username === 'admin' && $password === 'password') {
        // Redirect to the admin dashboard
        header('Location: dashboard.php');
        exit();
    } else {
        // Invalid credentials, show error message
        $error = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - COVID Vaccination Booking</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>COVID Vaccination Booking</h1>
        </header>

    <main>
        <form id="loginForm" action="login.php" method="POST">
            <h2>Admin Login</h2>

            <?php if (isset($error)) : ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <input type="submit" value="Login">
        </form>
    </main>

    <footer>
        &copy; <?php echo date("Y"); ?> COVID Vaccination Booking. All rights reserved.
    </footer>
</body>

</html>