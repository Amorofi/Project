<?php
function get_db_connection(){
    
    $conn = new mysqli('159.89.47.44', 'amorofio_davprojectuser', '_pt?kBE.j0[i', 'amorofio_davproject');
    
  
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    
    $name = htmlspecialchars($name);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : null;
    


    $conn = get_db_connection();


    if ($conn === false) {
        die("Database connection failed");
    }


    $sql = "INSERT INTO Appointments (ClientName, ContactEmail, AppointmentDate) VALUES ('$name', '$email', '$date $time')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Appointment booked successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $conn->close();
}
?>
