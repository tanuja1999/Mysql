<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection 
$conn = new mysqli($servername, $username , $password, $dbname);
// Check connection 
if ($conn->connect_error)
{
    die("Connection failed : " . $conn->connect_error);
}
// sql to delete a records 
$sql = "DELETE FROM MyGuests WHERE ID=3";

if ($conn->query($sql)=== TRUE)
{
    echo "Record deleted successfully";
}
else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>