<?php
/*
 * Created by
 * Trillz Global
 * For: Hospital Use
 * Date: 28:08:2018
 * Email:trillzglobal@gmail.com
 */

/* Connect to database*/ 
require_once "db/conn.php";
session_start();
error_reporting('0');
ini_set('error_reporting', 0);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="assets/images/img.ico" rel="icon" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MEDICAL CENTER</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<div class="login-home">
<img src="assets/images/army1.jpg" class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12" style=" margin-bottom:2em;"/>
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">

        
        
        <form action = "bin/process.php" method = "post">
            <div class="form-group">
                <select name="privilege" class="form-control" class='form1'>
                    <option value="1">Doctor</option>
                    <option value="2">Admin</option>
                    <option value="3">Laboratory</option>
                    <option value="4">Pharmarcy</option>
                    <option value="5">Supervisor</option>
                </select> 
            </div>
       
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="username">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="password">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-block btn-success" value="Log In" >
            </div>
        </form>

        <?php if ($_SESSION["login_error_msg"]):?>
        <div class="alert alert-danger">
          <strong>Error:</strong> <?php echo $_SESSION["login_error_msg"] ?>
        </div>
	<?php 	unset($_SESSION["login_error_msg"]);?>
        <?php endif ?>
        
    </div>

</div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script></script>
</body>
</html>
