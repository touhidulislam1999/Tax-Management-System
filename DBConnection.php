<?php

$servername = "localhost";
$username = "root"; #User name
$password = ""; #Password set for the user
$dbname= "CSE370_Lab_Project"; #Database name

// Connection Creation
$conn = new mysqli($servername, $username, $password);

// Connection Checking
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    mysqli_select_db($conn, $dbname);
    //echo "Connection successful";
}

?>