<?php
// Retrieve form data
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];

// Validate form data (you can add more validation as per your requirements)

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covid";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL statement
$sql = "INSERT INTO bookings (name, age, email, date, time)
        VALUES ('$name', '$age', '$email', '$date', '$time')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Booking Successful!</h2>";
    echo "<p>Thank you, $name, for booking your COVID vaccination appointment.</p>";
    echo "<p>Your appointment is scheduled for $date at $time.</p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// Close the database connection
$conn->close();
?>