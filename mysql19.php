<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "myDBPDO";

try {
    $conn= new PDO("mysql:host=$servername;dbname=$dbname", $username , $password);
    // set the pdo error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // prepare sql and bind prameters
    $stmt->$conn->prepare("INSERT INTO MyGuests (firstname, lastname, email )
    VALUES (:firstname, :lastname, :email) ");
    $stmt->bindParam(':firstname', $fristname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);

    //insert a row 
    $firstname = "John";
    $lastname = "Doe";
    $email = "john@example.com";
    $stmt->excecute();

    // insert another row 
    $firstname = "Marry";
    $lastname = "Moe";
    $email = "marry@example.com";
    $stmt->excecute();

    $firstname = "Juley";
    $lastname = "Dooley";
    $email = "juley@example.com";
    $stmt->excecute();

    echo "New record created successfully";
}
Catch(PDOException $e) 
{
   echo "Error: " . $e->getMessage();
}
$conn = null;
?>