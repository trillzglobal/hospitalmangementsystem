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


extract($_GET);

if(isset($_POST["search_id"])){
$patient_id = mysqli_real_escape_string($conn, $search_id);

$square = mysqli_query($conn, "SELECT * FROM `patient_profile` WHERE BINARY patient_id = $patient_id");
$num = mysqli_num_rows($square);

if($num != 0){
while($row = mysqli_fetch_assoc($square)){
    
  global $psurname; 
  global $pfirst_name; 
  global $pother_name;
  global $pdate_of_birth;
  global $psex;
  global $pmarital_status;
  global $preligion;
  global $paddress;
  global $poccupation;
  global $ppatient_id;
  global $pstate_of_origin;
  global $ptribe;
  global $pblood_group;
  global $pnhis_card;
  global $parmy_no;
  global $prank;
  global $punit;
  global $pphone_no;
  global $pimage_path;
  global $pimage_name;

  $psurname = $row['surname']; 
  $pfirst_name = $row['first_name']; 
  $pother_name = $row['other_name'];
  $pdate_of_birth = $row['Date_of_birth'];
  $psex = $row['sex'];
  $pmarital_status = $row['marital_status'];
  $preligion = $row['religion'];
  $paddress = $row['address'];
  $poccupation = $row['occupation'];
  $ppatient_id = $row['patient_id'];
  $pstate_of_origin = $row['state_of_origin'];
  $ptribe = $row['tribe'];
  $pblood_group = $row['blood_group'];
  $pnhis_card = $row['nhis_card'];
  $parmy_no = $row['army_no'];
  $prank = $row['rank'];
  $punit = $row['unit'];
  $pphone_no = $row['phone_no'];
  
  /*to display image*/

$select_path="select * from `patient_image` WHERE BINARY patient_id = '$patient_id'";

$var1 = mysqli_query($conn, $select_path);

while($row = mysqli_fetch_assoc($var1))
{
 $pimage_path = $row["image_path"];
 $pimage_name = $row["imagename"];

}
  
}
}

else{
    $_SESSION['search_error']= "Patient ID does  not Exist";
}

}