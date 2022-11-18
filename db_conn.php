<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel pg locator";

$conn = new mysqli($servername, $username, $password, $dbname);
//check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }



/*if (!$conn)
{
die("connection failed: " . mysqli_connect_error());
}*/

?>