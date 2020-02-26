<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection 
$conn = new mysqli($servername , $username , $password , $dbname );
// Check connection 
if ($conn->connect_error)
{
    die("Connection Failed : " . $conn->connect_error);
}
$sql= "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

if ($conn->query($sql)=== TRUE)
{
    echo "Record created successfully";
} 
else
{
echo "Error updating record: " . $conn->error; 
}
$conn->close();
?>