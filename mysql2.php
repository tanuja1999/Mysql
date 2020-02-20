<?php
$servername = "localhost";
$username ="root";
$password = "";

// Create a connection
$conn= mysqli_connect($servername, $username, $password);

// Check connection 
if (!$conn)
{
die("Connection failed:" . $mysql->connect_error());
}
echo "Connect Successfully";
?>
