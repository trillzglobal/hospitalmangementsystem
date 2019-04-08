<?php

/*
 * Created by
 * Trillz Global
 * For: Hospital Use
 * Date: 28:08:2018
 */
include '../db/conn.php';
extract($_POST);
extract($_GET);

  $doctor_username = $_SESSION["username"];  
  $report_text = mysqli_real_escape_string($conn, $report_text);  
  $date = date("d-m-Y");  
  $drug_text = mysqli_real_escape_string($conn, $drug_text);
  $test_text = mysqli_real_escape_string($conn, $test_text);
  $new_admission = mysqli_real_escape_string($conn, $new_admission);
        /*Doctors Report*/
  if(!empty($report_text)){
      
   
      $insert = mysqli_query($conn, "INSERT INTO `doctor-report` (`report`, `time`, `doctor`, `patient_id`) VALUES ('$report_text', '$date', '$doctor_username', '$patient_id')");
      if($insert)  {    
                  unset($GLOBALS['report_text']);
             $_SESSION['report_success'] = "New report filed successfully";
        }
  }
 
   
        /*Pharmacy Prescreption*/
  if(!empty($drug_text)){
      
   $select = mysqli_query($conn, "SELECT * FROM `patient_profile` WHERE BINARY patient_id =$patient_id");
    while($row = mysqli_fetch_assoc($select)){
        
        $surname = $row['surname'];
        $first_name = $row['first_name'];
      $insert = mysqli_query($conn, "INSERT INTO `patient_for_pharmacy` (`time`, `surname`, `first_name`, `patient_id`, `drugs`, `answered`) VALUES ('$date', '$surname', '$first_name', '$patient_id', '$drug_text', '0')");
      if($insert)  { 
                    unset($GLOBALS['drug_text']);
             $_SESSION['report_success'] = "New drug filed successfully";
        }

    }
  }
   
        /*Lab Test*/
  if(!empty($test_text)){
      
   $select = mysqli_query($conn, "SELECT * FROM `patient_profile` WHERE BINARY patient_id ='$patient_id'");
    while($row = mysqli_fetch_assoc($select)){
        
        $surname = $row['surname'];
        $first_name = $row['first_name'];
      $insert = mysqli_query($conn, "INSERT INTO `patient_for_lab` (`time`, `surname`, `first_name`, `patient_id`, `lab_test`) VALUES ('$date', '$surname', '$first_name', '$patient_id', '$test_text')");
      if($insert)  {    
                    unset($GLOBALS['test_text']);
             $_SESSION['report_success'] = "New drug filed successfully";
        }
    }
  }
  
          /*Paient on Admission*/
       
    if(isset($_POST['submit_admission'])){
            $patient_id = $new_admission;
      $code = md5(uniqid(rand(), true));
   $select = mysqli_query($conn, "SELECT * FROM `patient_profile` WHERE BINARY patient_id ='$patient_id'");
    while($row = mysqli_fetch_assoc($select)){
        
   
        $surname = $row['surname'];
        $first_name = $row['first_name'];
      $insert = mysqli_query($conn, "INSERT INTO `patient_on_admission` (`code`, `surname`, `first_name`, `patient_id`, `time_admitted`, `time_discharged`, `discharged_status`) "
                                                                . "VALUES ('$code', '$surname', '$first_name', '$patient_id', '$date', ' ', '0')");
      if($insert)  {    
             $_SESSION['report_success'] = "Patient Admitted successfully";
                       unset($GLOBALS['new_admission']);
        }
                  }
  }
  
    if(isset($_POST['send_to_doctor'])){
      $patient_id = $to_doctor;
   $select = mysqli_query($conn, "SELECT * FROM `patient_profile` WHERE BINARY patient_id ='$patient_id'");
    while($row = mysqli_fetch_assoc($select)){
        
        $surname = $row['surname'];
        $first_name = $row['first_name'];
      $insert = mysqli_query($conn, "INSERT INTO `patient_for_doctor` (`status`, `surname`, `first_name`, `patient_id`, `time`) VALUES ('0', '$surname', '$first_name', '$patient_id', '$date')");
      if($insert)  { 
          $to_doctor = "";
          unset($GLOBALS['send_to_doctor']);
             $_SESSION['report_success'] = "Patient Send To Dotor";
        }

    }
  }