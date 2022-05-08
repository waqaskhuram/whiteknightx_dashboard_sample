<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    // header("location: profile.php");
    // exit;
}
require_once('fetch_usermeta.php');
require_once('update_usermeta.php');
$message="";
?>


<html>
  <head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </head>

<body>
<h2 class="text-center p-2">Welcome User</h2>
<a class="btn btn-warning float-right mr-5" href="../logout.php"> Logout</a>

<div class="container">
	<div class="row">
		<div class="col-md-3 ">
		     <div class="list-group ">
              <a href="profile.php" class="list-group-item list-group-item-action">Profile</a>
              <a href="edit_profile.php" class="list-group-item list-group-item-action active">Edit Profile</a>
              <a href="order-manage.php" class="list-group-item list-group-item-action">Order Management</a>  
            </div> 
		</div>
		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Your Profile</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
                    <form action="update_usermeta.php" method="POST">
                              <div class="form-group row">
                                <label for="id" class="col-4 col-form-label">ID</label> 
                                <div class="col-8">
                                  <input disabled id="id" name="id" value="<?php echo $id; ?>" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">Username*</label> 
                                <div class="col-8">
                                  <input disabled id="username" name="username" value="<?php echo $_SESSION["username"]; ?>" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="company" class="col-4 col-form-label">Company</label> 
                                <div class="col-8">
                                  <input id="company_name" name="company_name" value="<?php echo $company_name;?>" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="first_name" class="col-4 col-form-label">First Name</label> 
                                <div class="col-8">
                                  <input id="first_name" name="first_name" value="<?php echo $first_name;?>" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="last_name" class="col-4 col-form-label">Last Name</label> 
                                <div class="col-8">
                                  <input id="last_name" name="last_name" value="<?php echo $last_name;?>" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Email*</label> 
                                <div class="col-8">
                                  <input id="email_address" name="email_address" value="<?php echo $email_address;?>" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="address" class="col-4 col-form-label">Address*</label> 
                                <div class="col-8">
                                  <input id="billing_address" name="billing_address" value="<?php echo $billing_address;?>" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="phone" class="col-4 col-form-label">Phone*</label> 
                                <div class="col-8">
                                  <input id="cell_phone" name="cell_phone" value="<?php echo $cell_phone;?>" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="office_phone" class="col-4 col-form-label">Office Phone*</label> 
                                <div class="col-8">
                                  <input id="office_phone" name="office_phone" value="<?php echo $office_phone;?>" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <input type="submit"  name="submit" class="btn btn-primary" value="Update">
                                </div>
                              </div>
                              
                            </form>
                            
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
</div>
</body>
</html>