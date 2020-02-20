<?php
$servername = "localhost";
$username ="root";
$password = "";

try
{
 $conn = new PDO("mysql:host=$servername", $username , $password);
 // set the PDO error mode exception
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql="CREATE DATABASE MyDBPDO";
 // use exec() beacuse no result are return 
 $conn->exec($sql);
 echo "Database created sucessfully<br>";
}
catch(PDOException $e)
{
echo $sql."<br>" .$e->getmessage();
}
$conn= null;
?>