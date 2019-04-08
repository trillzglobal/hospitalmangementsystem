<?php

/*
 * Created by
 * Trillz Global
 * For: Hospital Use
 * Date: 28:08:2018
 * Email:trillzglobal@gmail.com
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../db/conn.php';
session_start();

extract($_POST);

$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, md5($password));
$privilege = mysqli_real_escape_string($conn, $privilege);
 $date = date("d-m-Y h:i:s");

/*
 * Doctors login area
 * level 1
 */
if($privilege == 1){
$query = mysqli_query($conn, "SELECT * FROM `doctor_profile` WHERE BINARY username = '$username' AND BINARY password = '$password'");

$result = mysqli_fetch_assoc($query);
$checker = mysqli_num_rows($query);
if ($checker != 0){
        $result = mysqli_query($conn, "SELECT * FROM `doctor_profile` WHERE BINARY username = '$username'" );
   
        while(($row = mysqli_fetch_assoc($result))) {
                $first_name = $row['first_name']; 
                 echo $first_name;
                        $time_stamp = mysqli_query($conn, "INSERT INTO `doctor_login` (`first_name`,`username`, `time`) VALUE ('$first_name', '$username', '$date') ");
 
    if($time_stamp){
    				$_SESSION["logged"] = true;
    				$_SESSION["username"] = $username;
				$_SESSION["privilege"] = $privilege;
				header("Location: ../dashboard/home_doctor.php");
    }
    else{
        echo'dead';
    }
            }

	}
        else{
            
    $_SESSION["login_error_msg"] = 'Either user does not exist or there is a problem with the server connection';
   echo  $_SESSION["login_error_msg"];
    header("Location: ../index.php");
        }
}
/*
 * Admin Login area
 * level 2
 */
elseif ($privilege == 2) {
    $query = mysqli_query($conn, "SELECT * FROM `admin_profile` WHERE BINARY username = '$username' AND BINARY password = '$password'");

$result = mysqli_fetch_assoc($query);
$checker = mysqli_num_rows($query);
if ($checker != 0){
     $result = mysqli_query($conn, "SELECT * FROM `admin_profile` WHERE BINARY username = '$username'" );
   
        while(($row = mysqli_fetch_assoc($result))) {
                $first_name = $row['first_name']; 
                 echo $first_name;
                        $time_stamp = mysqli_query($conn, "INSERT INTO `admin_login` (`first_name`,`username`, `time`) VALUE ('$first_name', '$username', '$date') ");
 
    if($time_stamp){
    				$_SESSION["logged"] = true;
    				$_SESSION["username"] = $username;
				$_SESSION["privilege"] = $privilege;
				header("Location: ../dashboard/home_admin.php");
    }
    else{
        echo'dead';
    }
            }

	}
        else{
            
    $_SESSION["login_error_msg"] = 'Either user does not exist or there is a problem with the server connection';
   echo  $_SESSION["login_error_msg"];
    header("Location: ../index.php");
        }
}
	 
/*
 * Laboratory Login area
 * level 3
 */
elseif ($privilege == 3) {
    $query = mysqli_query($conn, "SELECT * FROM `lab_profile` WHERE BINARY username = '$username' AND BINARY password = '$password'");

$result = mysqli_fetch_assoc($query);
$checker = mysqli_num_rows($query);
if ($checker != 0){$result = mysqli_query($conn, "SELECT * FROM `lab_profile` WHERE BINARY username = '$username'" );
   
        while(($row = mysqli_fetch_assoc($result))) {
                $first_name = $row['first_name']; 
                 echo $first_name;
                        $time_stamp = mysqli_query($conn, "INSERT INTO `lab_login` (`first_name`,`username`, `time`) VALUE ('$first_name', '$username', '$date') ");
 
    if($time_stamp){
    				$_SESSION["logged"] = true;
    				$_SESSION["username"] = $username;
				$_SESSION["privilege"] = $privilege;
				header("Location: ../dashboard/home_lab.php ");
    }
    else{
        echo'dead';
    }
            }

	}
        else{
            
    $_SESSION["login_error_msg"] = 'Either user does not exist or there is a problem with the server connection';
   echo  $_SESSION["login_error_msg"];
    header("Location: ../index.php");
        }
    }


/*
 * Pharmacy Login area
 * level 4
 */
elseif ($privilege == 4) {
    $query = mysqli_query($conn, "SELECT * FROM `pharmacy_profile` WHERE BINARY username = '$username' AND BINARY password = '$password'");

$result = mysqli_fetch_assoc($query);
$checker = mysqli_num_rows($query);
if ($checker != 0){
$result = mysqli_query($conn, "SELECT * FROM `pharmacy_profile` WHERE BINARY username = '$username'" );
   
        while(($row = mysqli_fetch_assoc($result))) {
                $first_name = $row['first_name']; 
                 echo $first_name;
                        $time_stamp = mysqli_query($conn, "INSERT INTO `pharmacy_login` (`first_name`,`username`, `time`) VALUE ('$first_name', '$username', '$date') ");
 
    if($time_stamp){
    				$_SESSION["logged"] = true;
    				$_SESSION["username"] = $username;
				$_SESSION["privilege"] = $privilege;
				header("Location: ../dashboard/home_pharmacy.php ");
    }
    else{
        echo'dead';
    }
            }

	}
        else{
            
    $_SESSION["login_error_msg"] = 'Either user does not exist or there is a problem with the server connection';
   echo  $_SESSION["login_error_msg"];
    header("Location: ../index.php");
        }
}

/*
 * supervisor Login area
 * for commanding officer on level 5
 */
elseif ($privilege == 5) {
    $query = mysqli_query($conn, "SELECT * FROM `supervisor_profile` WHERE BINARY username = '$username' AND BINARY password = '$password'");

$result = mysqli_fetch_assoc($query);
$checker = mysqli_num_rows($query);
if ($checker != 0){
$result = mysqli_query($conn, "SELECT * FROM `supervisor_profile` WHERE BINARY username = '$username'" );
   
        while(($row = mysqli_fetch_assoc($result))) {
                $first_name = $row['first_name']; 
                 echo $first_name;
                        $time_stamp = mysqli_query($conn, "INSERT INTO `supervisor_login` (`first_name`,`username`, `time`) VALUE ('$first_name', '$username', '$date') ");
 
    if($time_stamp){
    				$_SESSION["logged"] = true;
    				$_SESSION["username"] = $username;
				$_SESSION["privilege"] = $privilege;
				header("Location: ../dashboard/home_supervisor.php ");
    }
    else{
        echo'dead';
    }
            }

	}
        else{
            
    $_SESSION["login_error_msg"] = 'Either user does not exist or there is a problem with the server connection';
   echo  $_SESSION["login_error_msg"];
    header("Location: ../index.php");
        }
}

else{

    $_SESSION["login_error_msg"] = 'Either user does not exist or there is a problem with the server connection';
   echo  $_SESSION["login_error_msg"];
    header("Location: ../index.php");

}


