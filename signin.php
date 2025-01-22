<?php

// Session start
session_start();
        
// Database Connection
require_once('DBConnection.php');

// Checking for empty input fields
if (isset ($_POST['name']) && isset($_POST['nid'])) {

    $name = $_POST['name'];
    $nid = $_POST['nid'];
    
    $_SESSION['name'] = $name;
    $_SESSION['nid'] = $nid;
    
    $sql_user = "SELECT * FROM Person where Name = '$name' and NID = '$nid'";
    $sql_admin = "SELECT * FROM Admin_table where Name = '$name' and NID = '$nid'";
    
    $user_result = mysqli_query($conn, $sql_user);
    $admin_result = mysqli_query($conn, $sql_admin);
    
        
    // Checking for empty sets
    if (mysqli_num_rows($user_result) != 0){
        header("Location: user_home.php");
    }
    else if (mysqli_num_rows($admin_result) != 0){
        header("Location: admin_home.php");
    }
    else{
        echo "Please try again";
        header("Location: login_page1.php");
    }
}

?>