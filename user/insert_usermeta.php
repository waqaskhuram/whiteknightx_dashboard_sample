<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: profile.php");
    exit;
}

// Include config file
require_once "../config.php";
$username = $_SESSION["username"];
$company = $_POST['company'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$office_phone = $_POST['office_phone'];

$sql_insert_meta = "INSERT INTO user (username, company_name, first_name, last_name, email_address, billing_address, cell_phone, office_phone) 
        VALUES ('$username', '$company', '$first_name','$last_name', '$email', '$address', '$phone', '$office_phone')";
if(mysqli_query($link, $sql_insert_meta)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql_insert_meta. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);

?>