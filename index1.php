<?php
// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['user'])) {
    // User is logged in, redirect to the dashboard page
    header('Location: dashboard.php');
    exit();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the form data (you can add more validation as per your requirements)

    // Check if the credentials are valid (e.g., check against the user table in the database)
    $validUsername = "user";
    $validPassword = "password123";

    if ($username === $validUsername && $password === $validPassword) {
        // Set the session variable to indicate that the user is logged in
        $_SESSION['user'] = true;

        // Redirect to the dashboard page
        header('Location: dashboard.php');
        exit();
    } else {
        // Invalid credentials, show error message
        $error = 'Invalid username or password.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID Vaccination Booking</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>COVID Vaccination Booking</h1>
    </header>

    <main>
        <form id="loginForm" action="index.php" method="POST">
            <h2>User Login</h2>

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