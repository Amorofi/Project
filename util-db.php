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
?>
