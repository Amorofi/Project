<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'amorofio_davprojectuser', '_pt?kBE.j0[i', 'amorofio_davproject');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    // Validate and sanitize data (you can add more validation)
    $name = htmlspecialchars($name);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : null;
    // Add more validation for date and time as needed

    // Get database connection
    $conn = get_db_connection();

    // Check the connection
    if ($conn === false) {
        die("Database connection failed");
    }

    // Insert data into the database
    $sql = "INSERT INTO Appointments (ClientName, ContactEmail, AppointmentDate) VALUES ('$name', '$email', '$date $time')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Appointment booked successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
