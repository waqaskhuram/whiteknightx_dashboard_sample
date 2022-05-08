<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: profile.php");
    exit;
}

require_once('fetch_usermeta.php');
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
              <a href="profile.php" class="list-group-item list-group-item-action active">Profile</a>
              <a href="edit_profile.php" class="list-group-item list-group-item-action">Edit Profile</a>
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
                            <tr>
                                <td>Username: </td>
                                <td><?php echo $_SESSION["username"];?></td>
                            </tr>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
</div>
</body>
</html>