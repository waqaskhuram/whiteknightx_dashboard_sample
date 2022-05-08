<?php
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    // header("location: edit_profile.php");
    // exit;
}
$username=$_SESSION["username"];
// Include config file
require_once "../config.php";

$sql_fetch_meta = "SELECT * FROM users WHERE username = '$username'";
$result= mysqli_query($link,$sql_fetch_meta);

if($result){
    while ($row = mysqli_fetch_array($result))
                {
                    $id=$row['id'];
                    $username=$row['username'];
                    $company_name = $row['company_name'];
                    $first_name = $row['first_name'];
                    $last_name = $row['last_name'];
                    $billing_address = $row['billing_address'];
                    $email_address = $row['email_address'];
                    $office_phone = $row['office_phone'];
                    $cell_phone = $row['cell_phone'];
            }
            
} else{
    echo "ERROR: Could not able to execute $sql_fetch_meta. " . mysqli_error($link);
}


?>