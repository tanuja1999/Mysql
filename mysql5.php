<?php
$servername = "localhost";
$username = "root";
$password = "";

try 
{
$conn = new PDO("mysql:host= $servername",$username , $password);
// Set the PDO error mode to exception
$conn->stAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql= "CREATE DATABASE myDBPDO";
// use exec() because no results are returned
$conn->exec($sql);
echo "Database created successfully<br>";
}
catch (PDOException $e)
{
    echo $sql ."<br>" . $e->grtmessage();
}
$conn = null;
?>