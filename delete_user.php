<?php

// Starting the session
session_start();

// Database Connection
include('DBConnection.php');

$user_nid = $_GET['user_id'];

$sql1 = "SELECT * FROM Person P INNER JOIN Owns O ON P.NID = O.NID WHERE P.NID = '$user_nid'";
$result1 = mysqli_query($conn, $sql1);

$columns = mysqli_fetch_assoc($result1);

$vehicle_id = $columns['Vehicle_Reg_no'];
$p_address = $columns['Property_Address'];
$p_area = $columns['Property_Area'];

$sql2 = "DELETE FROM Person WHERE NID = '$user_nid'";
$result2 = mysqli_query($conn, $sql2);

$sql3 = "DELETE FROM Owns WHERE NID = '$user_nid'";
$result3 = mysqli_query($conn, $sql3);

$sql4 = "DELETE FROM Vehicle WHERE Reg_no = '$vehicle_id'";
$result4 = mysqli_query($conn, $sql4);

$sql5 = "DELETE FROM Property WHERE Property_Address = '$p_address' AND Property_Area = '$p_area'";
$result5 = mysqli_query($conn, $sql5);

$sql6 = "DELETE FROM Job WHERE Person_NID = '$user_nid'";
$result6 = mysqli_query($conn, $sql6);

echo "User Deleted Successfully";
header("Location: show_users.php");

?>