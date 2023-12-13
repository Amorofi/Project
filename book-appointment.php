<?php
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

   require_once("util-db.php")

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO Appointments (ClientName, ContactEmail, AppointmentDate) VALUES ('$name', '$email', '$date $time')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Appointment booked successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

 
    $conn->close();
}
?>
