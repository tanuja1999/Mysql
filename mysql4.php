<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// check connectior
if (!$conn)
{
    die ("Connection failed: " . mysqli_connect_error());
}
// Create database 
$sql = "CREATE DATABASE myDB";
if (mysali_query($conn,$sql))
{
    echo "Database created successfully";
}
else 
{
    echo "Error creating database :".mysqle_error($conn);
}
?>