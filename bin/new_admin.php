<?php

/*
 * Created by
 * Trillz Global
 * For: Hospital Use
 * Date: 28:08:2018
 */
include '../db/conn.php';
extract($_GET);

  $doctor_username = $_SESSION["username"];  
  $to_doctor = mysqli_real_escape_string($conn, $to_doctor); 
  $new_admission = mysqli_real_escape_string($conn, $new_admission); 
  $date = date("d-m-Y");  
         $code = md5(uniqid(rand(), true));
  if(!empty($new_admission)){
      
   $select = mysqli_query($conn, "SELECT * FROM `patient_profile` WHERE BINARY patient_id ='$patient_id'");
    while($row = mysqli_fetch_assoc($select)){
        
   
        $surname = $row['surname'];
        $first_name = $row['first_name'];
      $insert = mysqli_query($conn, "INSERT INTO `patient_on_admission` (`code`, `surname`, `first_name`, `patient_id`, `time_admitted`, `time_discharged`, `discharged_status`) "
                                                                . "VALUES ('$code', '$surname', '$first_name', '$patient_id', '$date', ' ', '0')");
      if($insert)  {    
          $new_admission = "";
             $_SESSION['report_success'] = "New patient Admitted  filed successfully";
        }
                else{
             $_SESSION['report_error'] = $surname.$first_name;
        }
    }
  }
  
    if(!empty($to_doctor)){
      
   $select = mysqli_query($conn, "SELECT * FROM `patient_profile` WHERE BINARY patient_id =$patient_id");
    while($row = mysqli_fetch_assoc($select)){
        
        $surname = $row['surname'];
        $first_name = $row['first_name'];
      $insert = mysqli_query($conn, "INSERT INTO `patient_for_doctor` (`status`, `surname`, `first_name`, `patient_id`, `time`) VALUES ('0', '$surname', '$first_name', '$patient_id', '$date')");
      if($insert)  { 
          $drug_text = "";
             $_SESSION['report_success'] = "New drug filed successfully";
        }

    }
  }