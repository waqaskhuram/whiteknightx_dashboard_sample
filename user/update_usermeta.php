<?php
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    // header("location: edit_profile.php");
    exit;
}
$username=$_SESSION["username"];
// Include config file
require_once "..\config.php";
// require_once "fetch_usermeta.php";
var_dump($id);
        $user_id = $_POST['id'];
        $company_name = $_POST['company_name'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email_address = $_POST['email_address'];
        $billing_address = $_POST['billing_address'];
        $cell_phone = $_POST['cell_phone'];
        $office_phone = $_POST['office_phone'];
            
$sql_update_meta = "UPDATE users SET company_name = '$company_name', first_name = '$first_name', last_name = '$last_name', email_address = '$email_address', billing_address = '$billing_address', cell_phone = '$cell_phone', office_phone = '$office_phone' WHERE id='$user_id'";
$result_update= mysqli_query($link,$sql_update_meta);
if($result_update){
    echo "Records updated successfully.";
} else{
    echo "ERROR: Could not able to update $sql_update_meta. " . mysqli_error($link);
}
var_dump($user_id);
echo "Helloe";
echo "<br>";
echo "Helloe";


/*while ($row  = mysqli_fetch_array($result)){
    // if($result){
        $id = $_POST['id'];
        $company_name = $_POST['company_name'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email_address = $_POST['email_address'];
        $billing_address = $_POST['billing_address'];
        $cell_phone = $_POST['cell_phone'];
        $office_phone = $_POST['office_phone'];
    }
    echo $id;
    echo '<br>';
    echo var_dump($company_name);
    // $sql_get_usermeta = "SELECT * FROM users WHERE username = '$username' ";
    
    $sql_update_meta = "UPDATE users SET company_name = '$company_name', first_name = '$first_name', last_name = '$last_name', email_address = '$email_address', billing_address = '$billing_address', cell_phone = '$cell_phone', office_phone = '$office_phone' WHERE id='$id'";
    $result_update= mysqli_query($link,$sql_update_meta);
//    print_r($sql_update_meta);

    if($result_update){
        echo "Records updated successfully.";
    } else{
        echo "ERROR: Could not able to update $sql_update_meta. " . mysqli_error($link);
    }
}    
*/
// Close connection
mysqli_close($link);
?>