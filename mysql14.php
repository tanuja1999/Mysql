<?php
$servername= "localhost";
$username = "root";
$password = "";
$dbname = "MyDBPDO";

try 
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql =  "INSERT INTO MyGuests (firstname, lastname , email)
    VALUES ('John','Doe','john@example.com')";
    // use exec because no result are returned
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    echo "New record created successfully. Last insert ID is :". $last_Id;
}
catch (PDOException $e)
{
     echo $sql ."<br>" .$e->getMessage();
}
$conn = null;
?>