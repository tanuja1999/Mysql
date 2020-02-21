<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname= $dbname", $username, $password);
    // set the PDO exception 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // begin th transaction 
    $conn->beginTransaction();
    // our sql statements
    $conn->exec("INSERT INTO MyGuest (firstname , lastname, email)
    VALUES ('John','Doe','john@example.com')");
    $conn->exec("INSERT INTO MyGuest (firstname , lastname, email)
    VALUES ('Mary','Moe','Mary@example.com')");
    $conn->exec("INSERT INTO MyGuest (firstname , lastname, email)
    VALUES ('Julie','Dooley','julie@example.com')");
    //commit the transaction
    $conn->commit();
    echo "New records created successfully"; 
}
catch(PDOexception $e)
{
    // Rollback the transaction if something failed
    $conn->rollback();
    echo "Error : " . $e->getMessage(); 
}
$conn = null;
?>