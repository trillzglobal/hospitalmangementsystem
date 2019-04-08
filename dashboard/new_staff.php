<?php
/*
 * Created by
 * Trillz Global
 * For: Hospital Use
 * Date: 28:08:2018
 */
require_once "../db/conn.php";
require_once "../bin/auth.php";
include '../bin/newstaff_uploader.php';
/*require_once "../bin/privilege.php";*/
session_start();
if (!$_SESSION["logged"]){
    header("Location: ../index.php");
    $_SESSION["login_error_msg"] = "You Need To Be Logged In";
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link href="../assets/images/img.ico" rel="icon" type="image/x-icon" />
    <title>NEW STAFF FORM</title>

</head>
<body>


<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="vertical-align: middle;"><font color="Blue"> 32 ATILLERY BRIGADE MEDICAL CENTER</font></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            </ul>

            <ul class="nav navbar-nav navbar-right">
                                <?php if ($_SESSION["logged"]): ?>
                <li> <a href="#" class="btn btn-sm btn-default navbar-btn"><b><font color="blue"><?php echo "Welcome ". $_SESSION["username"];?></font></b></a>
                    </li>
                    <li> <a href="../logout.php" class="btn btn-sm btn-success navbar-btn">Sign Out</a>
                    </li>
                    <?php else: ?>
                    <li> <a href="../index.php" class="btn btn-sm btn-success navbar-btn">Sign In</a>
                    </li>
                <?php endif; ?>
                    

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<?php include "sidebar.php" ?>

<div class="fullbar" style="padding-top: 7em;">
    <div class="forms">


        <form action="?insert" method="post" name ="funkyform" enctype="multipart/form-data">

            <div class="col-md-6" id="col-1" style="display: block">
                <h3>New Staff Registration</h3>
                        <?php if ($_SESSION["upload_error"]):?>
        <div class="alert alert-danger">
          <strong>Error:</strong> <?php echo $_SESSION["upload_error"] ?>
        </div>
	<?php 	unset($_SESSION["upload_error"]);?>
        <?php endif ?>
                
                <?php if ($_SESSION["upload_success"]):?>
        <div class="alert alert-success">
          <strong>Success:</strong> <?php echo $_SESSION["upload_success"] ?>
        </div>
	<?php 	unset($_SESSION["upload_success"]);?>
        <?php endif ?>
                <div class="form-group"  style="padding-right: 0;">
                    <label for="marital_status"> Unit</label>
                    <select name="unit" id="11" class="form-control">
                        <option value="1">Doctor</option>
                        <option value="3">Laboratory</option>
                        <option value="4">Pharmarcy</option>
                        <option value="2">Admin</option>
                        <option value="5">Supervisor</option>
                    </select>
                </div>
                <div class="form-group ">
                    <label for="First Name"> Surname</label>
                    <input type="text" name="last_name" id='1' class="form-control" placeholder="Enter Surname">
                </div>

                <div class="form-group ">
                    <label for="Middle Name"> Other Names</label>
                    <input type="text" name="first_name" id='2' class="form-control" placeholder="Enter Other Names" >
                </div>
                               
                <div class="form-group" style="padding: 0;">
                    <label for="gender"> Gender</label>
                    <select name="sex" id="10" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="Last Name">User Name</label>
                    <input type="text" name="username_new" id='3' class="form-control" placeholder="Username" >
                </div>
            
                <div class="form-group">
                    <label for="Last Name">Password:</label>
                    <input type="password" name="password_new" id='3' class="form-control" placeholder="XXXXXXXXXX" >
                </div>

                <div class="form-group ">
                    <label for="specialization"> Specialization<font size="-2">(doctors):</font></label>
                    <input type="text" name="specialization" id='4' class="form-control" placeholder="Doctors Specialization" >
                </div>
                <div class="form-group">
                    <label for="gsm_no"> Email:</label>
                    <input type="text" class="form-control"  name="email" id="13" placeholder="Email address">
                </div>
                <div class="form-group ">
                    <label for="callupno"> Address</label>
                    <input type="text" name="address" id='5' class="form-control" placeholder="Enter address" >
                </div>
                <div class="form-group">
                    <label for="phone_no"> Phone Number</label>
                    <input type="text" class="form-control" id="6" name="phone_no" id="6"  placeholder="State of Origin">
                </div>
                            <div >
                                <button type="submit" class="btn btn-lg btn-success" name="submit">Submit</button>
            </div>

            </div>
           
        </form>

    
</div>



<script>
<!--    --><?//if($_SESSION["has_alert"]): ?>
//        alert("<?// echo $_SESSION["has_alert"] ?>//");
//      <?//  $_SESSION["has_alert"] = "" ?>
<!--    --><?// endif; ?>
</script>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/main.js"></script>

<?php  if(!empty($_SESSION["empty_fields"]) && count($_SESSION["empty_fields"]) > 10 ): ?>
    <script src="../assets/js/modal.js"></script>

<?php
unset($_SESSION["empty_fields"]);
endif;?>

<?php  if(!empty($_SESSION["empty_fields"]) && count($_SESSION["empty_fields"]) < 10 ): ?>
    <script src="../assets/js/modal.js"></script>

    <?php
    unset($_SESSION["empty_fields"]);
endif;?>



</body>
</html>
