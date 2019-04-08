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

#Doctor Done With Patient




if(isset($_POST["done"])){

$update = mysqli_query($conn, "UPDATE `patient_for_doctor` SET `status` = '1' WHERE `patient_id` ='$ppatient_id'");
if($update){
                 $_SESSION['report_success'] = "Done With Patient";
    
    
}
}
 $canswered = mysqli_real_escape_string($conn, $canswered);
if(!empty($canswered)){

$update = mysqli_query($conn, "UPDATE `patient_for_pharmacy` SET `answered` = '1' WHERE `id` ='$canswered'");
if($update){
                 $_SESSION['report_success'] = "Drug Prescribed";
    
    
}
}


 $test_result = mysqli_real_escape_string($conn, $test_result);
 $id_result = mysqli_real_escape_string($conn, $id_result);
if(!empty($test_result)){

$update = mysqli_query($conn, "UPDATE `patient_for_lab` SET `result` = '$test_result', `status` = '1' WHERE `id` ='$id_result'");
if($update){
                 $_SESSION['report_success'] = "Test Result Submitted";
    
    
}
}