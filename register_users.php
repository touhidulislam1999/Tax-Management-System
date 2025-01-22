<?php

session_start();

// Database Connection
require_once('DBConnection.php');

if (isset($_POST['reg_user'])){

    $nid = $_POST['nid'];
    $tin = $_POST['tin'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile_no'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $salary = $_POST['salary'];
    $job_position = $_POST['job_position'];
    $job_type = $_POST['job_type'];
    
    $vehicle_reg_no = $_POST['car_registration_number'];
    $vehicle_make = $_POST['car_make'];
    $vehicle_cc = $_POST['car_cc'];
    
    $propAddress = $_POST['property_address'];
    $propArea = $_POST['property_area'];
    $propLocation = $_POST['property_location'];
    $propDimen = $_POST['property_dimension'];

    //echo $car_own."<br>";

    if (isset($vehicle_reg_no) && isset($vehicle_make) && isset($vehicle_cc)){
        $vehicle_reg_no = $_POST['car_registration_number'];
        $vehicle_make = $_POST['car_make'];
        $vehicle_cc = $_POST['car_cc'];

        //Query for inserting values into Vehicle table
        $sql1 = "INSERT INTO Vehicle VALUES('$vehicle_reg_no', '$vehicle_make', '$vehicle_cc')";
        $result1 = mysqli_query($conn, $sql1);
    }
    else {
        $vehicle_reg_no = NULL;
        $vehicle_make = NULL;
        $vehicle_cc = NULL;
    }

    if (isset($propAddress) && isset($propArea) && isset($propLocation) && isset($propDimen)) {
        $propAddress = $_POST['property_address'];
        $propArea = $_POST['property_area'];
        $propLocation = $_POST['property_location'];
        $propDimen = $_POST['property_dimension'];

        $property_type = $_POST['property_type'];

        $floors = $_POST['number_of_floors_infra'];
        $land_val = $_POST['land_value'];

        if ($property_type == 'land'){
            $sql2 = "INSERT INTO Property VALUES ('$propAddress', '$propArea', '$propLocation', '$propDimen', '$floors', '$land_val', 'Land')";
            $result2 = mysqli_query($conn, $sql2);
        }
        else if ($property_type == 'infrastructure'){
            $sql3 = "INSERT INTO Property VALUES ('$propAddress', '$propArea', '$propLocation', '$propDimen', '$floors', '$land_val', 'Infrastructure')";
            $result3 = mysqli_query($conn, $sql3);
        }
    }
    else {
        $propAddress = NULL;
        $propArea = NULL;
        $propLocation = NULL;
        $propDimen = NULL;
    }
    
    
    // Query for registering a person
    $sql4 = "INSERT INTO Person VALUES ('$name', '$nid', '$tin', '$mobile', '$email', '$address', '$dob', '$salary', '$job_position')";
    $result4 = mysqli_query($conn, $sql4);

    $sql5 = "INSERT INTO Job VALUES ('$nid', '$job_position', '$job_type')";
    $result5 = mysqli_query($conn, $sql5);

    // Query for registering ownership of Vehicle and Property
    $sql6 = "INSERT INTO Owns VALUES ('$nid', '$vehicle_reg_no', '$propAddress', '$propArea')";
    $result6 = mysqli_query($conn, $sql6);
    
    // Checking data insertion in database
    if (mysqli_affected_rows($conn)){
        echo "User registration successful.";
        header("Location: add_users.php");
    }
    else {
        echo "Please try again.";
        header("Location: add_users.php");
    }
}

?>