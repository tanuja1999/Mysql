<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//Create connection 
$conn = new mysqli($servername, $username , $password, $dbname);
// Check the connection 
if ($conn->connect_error)
{
    die("Connection failed: ". $conn->connect_error);
}
$sql = "INSERT INTO MyGuests(firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .="INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary','Moe', 'mary@e(xample.com');";
$sql .="INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie','Dooley','julie@example.com')";

if ($conn->multi_query($sql)=== TRUE)
{
    echo "New record created successfully";
}
else{
    echo "Error:" .$sql . "<br>" . $conn->error;
}
$conn->close();
?>