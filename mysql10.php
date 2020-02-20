<?php
$servername = "localhost";
$username = "root";
$password  = "";
$dbname = "myDB";

//create connection 
$conn = mysqli_connect($servername, $username , $password, $dbname);

//Check connection 
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO MyGuests (firstname , lastname, email)
VALUES ('John','Doe','john@example.com')";
if (mysqli_query($conn, $sql))
{
    echo "New recoed created successfully";
}
else{
    echo "ERROR: " . $sql  . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
