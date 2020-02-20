<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";
 
try
{
    $conn = new PDO("mysql:host=$servername;dbname= $dbname", $username , $password);
    // set the PDO error mode to exception 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO MyGuests(firstname, lastname, email)
    VALUES ('John','Doe','john@example.com')";
    // Use exec() beacause no result are returned 
    $conn->exec($sql);
    echo "New recoed created successfully";
}
catch (PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>