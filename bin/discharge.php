<?php

/*
 * Created by
 * Trillz Global
 * For: Hospital Use
 * Date: 28:08:2018
 * Email:trillzglobal@gmail.com
 */

require_once "../db/conn.php";
require_once "../bin/auth.php";


#Doctor's Report Seleting

extract($_POST);
$ccode = mysqli_real_escape_string($conn, $ccode);
$date = date('d-m-Y');
if(!empty($ccode)){


$update = mysqli_query($conn, "UPDATE `patient_on_admission` SET `discharged_status` = '1', `time_discharged` = '$date' WHERE `code` ='$ccode'");
if($update){
                 $_SESSION['report_success'] = "Patient Discharged";
    
    
}
}