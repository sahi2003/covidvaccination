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
    <form id="bookingForm" action="bookings.php" method="POST">
      <h2>Book Your Vaccination Appointment</h2>

      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" required>

      <label for="age">Age:</label>
      <input type="number" id="age" name="age" placeholder="Enter your age" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>

      <label for="date">Preferred Date:</label>
      <input type="date" id="date" name="date" required>

      <label for="time">Preferred Time:</label>
      <input type="time" id="time" name="time" required>

      <input type="submit" value="Book Now">
    </form>
  </main>

  <footer>
    &copy; <?php echo date("Y"); ?> COVID Vaccination Booking. All rights reserved.
  </footer>
</body>

</html>