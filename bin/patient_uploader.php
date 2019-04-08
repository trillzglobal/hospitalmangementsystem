<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../db/conn.php';
extract($_POST);

  $surname = mysqli_real_escape_string($conn, $surname);  
  $first_name = mysqli_real_escape_string($conn, $first_name);  
  $other_name = mysqli_real_escape_string($conn, $other_name); 
  $date_of_birth = mysqli_real_escape_string($conn, $age); 
  $sex = mysqli_real_escape_string($conn, $sex); 
  $marital_status = mysqli_real_escape_string($conn, $marital_status); 
  $religion = mysqli_real_escape_string($conn, $religion); 
  $address = mysqli_real_escape_string($conn, $address); 
  $occupation = mysqli_real_escape_string($conn, $occupation); 
  $patient_id = mysqli_real_escape_string($conn, $patient_id); 
  $state_of_origin = mysqli_real_escape_string($conn, $state_of_origin); 
  $tribe = mysqli_real_escape_string($conn, $tribe); 
  $blood_group = mysqli_real_escape_string($conn, $blood_group); 
  $nhis_card = mysqli_real_escape_string($conn, $nhis_card); 
  $army_no = mysqli_real_escape_string($conn, $army_no); 
  $rank = mysqli_real_escape_string($conn, $rank); 
  $unit = mysqli_real_escape_string($conn, $unit); 
  $phone_no = mysqli_real_escape_string($conn, $phone_no); 
  
  
  if(empty($patient_id)){
                  $_SESSION['upload_error'] = "Every patient Must have unique ID";    
  }
  else{
  $sql = mysqli_query($conn, "SELECT * FROM `patient_profile` WHERE BINARY patient_id = '$patient_id'");
  $checker = mysqli_num_rows($sql); 
  if($checker == 0){
      
       $sql = mysqli_query($conn, "SELECT * FROM `patient_profile` WHERE BINARY nhis_card = '$nhis_card'");
  $checker = mysqli_num_rows($sql);
      if($checker == 0){
     
          
          $upload_image=$_FILES["file"][ "name" ];

            $folder= "../uploads/";
            $temp = explode(".", $_FILES['file' ]['name']);
            $new_name = $patient_id.'.'.end($temp);
            move_uploaded_file($_FILES['file']['tmp_name'], "$folder".$new_name);

            $insert_path="INSERT INTO `patient_image` (image_path, imagename, patient_id) VALUES('$folder','$new_name', '$patient_id')";

            $var = mysqli_query($conn, $insert_path);
       if($var){
          $insert = mysqli_query($conn, "INSERT INTO `patient_profile` (`surname`, `first_name`, `other_name`, `Date_of_birth`, `sex`, `marital_status`, `religion`, `address`, `occupation`, `patient_id`, `state_of_origin`, `tribe`, `blood_group`, `nhis_card`, `army_no`, `rank`, `unit`, `phone_no`) "
                  . "                                          VALUES ('$surname', '$first_name', '$other_name', '$date_of_birth', '$sex', '$marital_status', '$religion', '$address', '$occupation', '$patient_id', '$state_of_origin', '$tribe', '$blood_group', '$nhis_card', '$army_no', '$rank', '$unit', '$phone_no')");
        if($insert){
              $_SESSION['upload_success'] = "Patient has been successfully added";
          }
          else{
              $_SESSION['upload_error'] = "Cant Upload";  
                }
       }

      }
      else{
              $_SESSION['upload_error'] = "The NHIS NUMBER is already in the Database";  
      }
  }
  
  else{
      $_SESSION['upload_error'] = "The Patient ID is already in the Database";
  }
  }