<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the form data (you can add more validation as per your requirements)

    // Connect to the database
    $servername = "localhost";
    $dbUsername = "your_db_username";
    $dbPassword = "your_db_password";
    $dbname = "your_db_name";

    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        // Registration successful, redirect to login page
        header('Location: login.php');
        exit();
    } else {
        // Error occurred, show error message
        $error = 'Error occurred during registration. Please try again.';
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - COVID Vaccination Booking</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>COVID Vaccination Booking</h1>
    </header>

    <main>
        <form id="signupForm" action="signup.php" method="POST">
            <h2>User Signup</h2>

            <?php if (isset($error)) : ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <label for="password">Re-type Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <input type="submit" value="Signup">
  </form>
    </main>

    <footer>
        &copy; <?php echo date("Y"); ?> COVID Vaccination Booking. All rights reserved.
    </footer>
</body>

</html>
