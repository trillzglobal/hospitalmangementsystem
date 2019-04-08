<?php
/**
 * Created by PhpStorm.
 * User: bane
 * Date: 08/04/2017
 * Time: 5:36 PM
 */
require_once "../db/conn.php";
require_once "../bin/auth.php";
include '../bin/patient_uploader.php';
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
    <title>NEW PATIENT FORM</title>

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
                <li><? echo $_SESSION["error"] ?>  <a href="../logout.php" class="btn btn-sm btn-success navbar-btn">Sign Out</a>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<?php include "sidebar.php" ?>

<div class="fullbar" style="padding-top: 7em;">
    <div class="forms">


        <form action="#" method="post" name ="funkyform" enctype="multipart/form-data">

            <div class="col-md-6" id="col-1" style="display: block">
                <h3>New Registration for Patient</h3>
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
                
                <div class="form-group">
                    <label for="passport_photo">Upload Passport Photo</label>
                    <input type="file" class="form-control" name="file" >
                </div>
                <div class="form-group ">
                    <label for="First Name"> Surname</label>
                    <input type="text" name="surname" id='1' class="form-control" placeholder="Enter Surname">
                </div>

                <div class="form-group ">
                    <label for="Middle Name"> First Name</label>
                    <input type="text" name="first_name" id='2' class="form-control" placeholder="Enter First Name" >
                </div>

                <div class="form-group">
                    <label for="Last Name">Other Name</label>
                    <input type="text" name="other_name" id='3' class="form-control" placeholder="Enter Other Names" >
                </div>
            
                <div class="form-group">
                    <label for="Last Name">AGE:</label>
                    <input type="text" name="age" id='3' class="form-control" placeholder="Enter Age: DD:MM:YYYY" >
                </div>

                <div class="form-group ">
                    <label for="statecode"> Patient ID</label>
                    <input type="text" name="patient_id" id='4' class="form-control" placeholder="Enter Patient ID :XX/XXX/XXXX" >
                </div>
                <div class="form-group">
                    <label for="gsm_no"> NHIS</label>
                    <input type="text" class="form-control" id="13" name="nhis_card" placeholder="NHIS detail">
                </div>
                <div class="form-group ">
                    <label for="callupno"> Address</label>
                    <input type="text" name="address" id='5' class="form-control" placeholder="Enter address" >
                </div>
                <div class="form-group">
                    <label for="gsm_no"> State of Origin</label>
                    <input type="text" class="form-control" id="6" name="state_of_origin" placeholder="State of Origin">
                </div>


            </div>
            
            <div class="col-md-6" id="col-2" style="display: block">
                <h3><hr></h3>
                <div class="form-group ">
                    <label for="institution"> Phone No</label>
                    <input type="text" name="phone_no" id='8' class="form-control" placeholder="Enter Phone No" >
                </div>
                <div class="form-group">
                    <label for="origin"> Tribe</label>
                    <input type="text" class="form-control" id="9" name="tribe" placeholder="Tribe">
                </div>
                <div class="form-group ">
                    <label for="email">Religion</label>
                    <input type="text" name="religion" id='7' class="form-control" placeholder="Enter religion" >
                </div>                
                <div class="form-group col-md-6" style="padding: 0;">
                    <label for="gender"> Gender</label>
                    <select name="sex" id="10" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>


                <div class="form-group col-md-6"  style="padding-right: 0;">
                    <label for="marital_status"> Marital Status</label>
                    <select name="marital_status" id="11" class="form-control">
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Divorced">Divorced</option>
                    </select>

                </div>
                <div class="form-group">
                    <label for="gsm_no"> Army NO</label>
                    <input type="text" class="form-control" id="14" name="army_no" placeholder="Army No">
                </div>
                <div class="form-group">
                    <label for="gsm_no"> Rank</label>
                    <input type="text" class="form-control" id="15" name="rank" placeholder="Enter Occupation">
                </div>
                <div class="form-group">
                    <label for="course"> Unit</label>
                    <input type="text" class="form-control" id="10" name="unit" placeholder="Enter Unit">
                </div>
                <div class="form-group">
                    <label for="gsm_no"> Occupation</label>
                    <input type="text" class="form-control" id="16" name="occupation" placeholder="Enter Occupation">
                </div>
                <div class="form-group">
                    <label for="health_status"> Blood Group</label>
                    <input type="text" class="form-control" id="17"  name="blood_group" placeholder="Blood group">
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





</body>
</html>
