<?php

/*
 * Created by
 * Trillz Global
 * For: Hospital Use
 * Date: 28:08:2018
 */
include '../db/conn.php';
extract($_POST);

  $last_name = mysqli_real_escape_string($conn, $last_name);  
  $first_name = mysqli_real_escape_string($conn, $first_name);  
  $unit = mysqli_real_escape_string($conn, $unit); 
  $sex = mysqli_real_escape_string($conn, $sex); 
  $username_new = mysqli_real_escape_string($conn, $username_new); 
  $password_new = mysqli_real_escape_string($conn, md5($password_new)); 
  $specialization = mysqli_real_escape_string($conn, $specialization); 
  $email = mysqli_real_escape_string($conn, $email); 
  $address = mysqli_real_escape_string($conn, $address);  
  $phone_no = mysqli_real_escape_string($conn, $phone_no); 
  
  if(!empty($username_new) && !empty($password_new)){
      
      /*Doctors Added*/
      if($unit == 1){
                     $sql = mysqli_query($conn, "SELECT * FROM `doctor_profile` WHERE BINARY username = '$username_new'");
                     $checker = mysqli_num_rows($sql);
                     if($checker ==0){
                         $insert = mysqli_query($conn, "INSERT INTO `doctor_profile` (`first_name`, `last_name`, `sex`, `specialization`, `username`, `password`, `email`, `phone_no`, `address`)   "
                                                                             . "VALUES ('$first_name', '$last_name', '$sex', '$specialization', '$username_new', '$password_new', '$email', '$phone_no', '$address')");
                          $_SESSION['upload_success'] = "Doctor successfully Added";       
                     }
                     else{
                          $_SESSION['upload_error'] = "Username Already Exist"; 
                     }
      }
      
      /*Admin Added*/
            if($unit == 2){
                     $sql = mysqli_query($conn, "SELECT * FROM `admin_profile` WHERE BINARY username = '$username_new'");
                     $checker = mysqli_num_rows($sql);
                     if($checker ==0){
                         $insert = mysqli_query($conn, "INSERT INTO `admin_profile` (`first_name`, `last_name`, `sex`, `username`, `password`, `email`, `phone_no`, `address`)   "
                                                                             . "VALUES ('$first_name', '$last_name', '$sex', '$username_new', '$password_new', '$email', '$phone_no', '$address')");
                          $_SESSION['upload_success'] = "Admin successfully Added";       
                     }
                     else{
                          $_SESSION['upload_error'] = "Username Already Exist"; 
                     }
      
                    }
  
      /*Laboratory Added*/
            if($unit == 3){
                     $sql = mysqli_query($conn, "SELECT * FROM `lab_profile` WHERE BINARY username = '$username_new'");
                     $checker = mysqli_num_rows($sql);
                     if($checker ==0){
                         $insert = mysqli_query($conn, "INSERT INTO `lab_profile` (`first_name`, `last_name`, `sex`, `username`, `password`, `email`, `phone_no`, `address`)   "
                                                                             . "VALUES ('$first_name', '$last_name', '$sex', '$username_new', '$password_new', '$email', '$phone_no', '$address')");
                          $_SESSION['upload_success'] = "Lab Personnel successfully Added";       
                     }
                     else{
                          $_SESSION['upload_error'] = "Username Already Exist"; 
                     }
      
                    }
                    
                    
                    
         /*Pharmacy Added*/
            if($unit == 4){
                     $sql = mysqli_query($conn, "SELECT * FROM `pharmacy_profile` WHERE BINARY username = '$username_new'");
                     $checker = mysqli_num_rows($sql);
                     if($checker ==0){
                         $insert = mysqli_query($conn, "INSERT INTO `pharmacy_profile` (`first_name`, `last_name`, `sex`, `username`, `password`, `email`, `phone_no`, `address`)   "
                                                                             . "VALUES ('$first_name', '$last_name', '$sex', '$username_new', '$password_new', '$email', '$phone_no', '$address')");
                          $_SESSION['upload_success'] = "Pharmacist successfully Added";       
                     }
                     else{
                          $_SESSION['upload_error'] = "Username Already Exist"; 
                     }
      
                    }  
                    
      /*Supervisor Added*/
            if($unit == 5){
                     $sql = mysqli_query($conn, "SELECT * FROM `supervisor_profile` WHERE BINARY username = '$username_new'");
                     $checker = mysqli_num_rows($sql);
                     if($checker ==0){
                         $insert = mysqli_query($conn, "INSERT INTO `supervisor_profile` (`first_name`, `last_name`, `sex`, `username`, `password`, `email`, `phone_no`, `address`)   "
                                                                             . "VALUES ('$first_name', '$last_name', '$sex', '$username_new', '$password_new', '$email', '$phone_no', '$address')");
                          $_SESSION['upload_success'] = "Supervisor successfully Added";       
                     }
                     else{
                          $_SESSION['upload_error'] = "Username Already Exist"; 
                     }
      
                    }
                    
  }
  else{
       $_SESSION['upload_error'] = "A Username Is Needed and Password is Needed"; 
  }
  
  