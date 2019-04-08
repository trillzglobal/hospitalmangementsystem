<!--/*
 * Created by
 * Trillz Global
 * For: Hospital Use
 * Date: 28:08:2018
 * Email:trillzglobal@gmail.com
 */-->

<div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-top:2em" >
<div class="sidebar" style="overflow: scroll; height: 60vh;" >
    <div class="">
        
                <!--******************************
        *****************************************************
        *****************************************************
        ************Doctor SideBar***********************
        ****************************************************
        *************************************************-->
       
        <?php if ($_SESSION["privilege"]==1): ?>
                <div style="margin-top:-1em; margin-bottom:2px;" class="alert alert-success">
        <?php 
        include "../db/conn.php";
        $sql = mysqli_query($conn, "SELECT * FROM `patient_for_doctor` WHERE BINARY status = 0 ");
 ?>
        <div>
         <ul class="nav nav-pills nav-stacked" style="">
                <li class="active"> 
                 <a href="#"> 
                 <span class="badge pull-right">ID</span>
                 <b>WAITING LIST</b> </a>
                 </li> 
                 <?php
        while ($rows = mysqli_fetch_assoc($sql)) {
 
     $surname=$rows['surname'];
     $first_name = $rows['first_name'];
     $patient_id = $rows['patient_id'];
     echo'
                 <li>
                 <a href="? patient_id='.$patient_id.'"><span class="badge pull-right">'. $patient_id.'</span>'.$surname.' '. $first_name.' </a></li>';
     
        


 }
 ?>
        </ul></div>
        </div>
                <div class="alert alert-success">
                    <form action="home_doctor.php" method="post">
            <div class="form-group">
                <input type="text" name="search_id" placeholder="XXXX" class="form-control">
            </div>
                <?php if (!empty($_SESSION["search_error"])): ?>
                    <div class="alert alert-danger">
                        <?php echo ($_SESSION["search_error"]); ?>
                        <?php 	unset($_SESSION["search_error"]);?>
                    </div>
            <?php endif; ?>
            <div class="form-group">
                <input type="submit" value="Search by Patient ID" class="btn btn-success btn-block">
            </div>

        </form>
                </div>
        <?php endif; ?>
        

        
        <!--******************************
        *****************************************************
        *****************************************************
        ************Adiminstative SideBar***********************
        ****************************************************
        *************************************************-->
       
        <div class="" style="margin-top:1em; ">
            <?php if ($_SESSION["privilege"]== "2"): ?>

            
             <div class="alert " style="margin-bottom:2em">
                                <form action="home_admin.php" method="post">
            <div class="form-group col-lg-6 col-md-6">
                <input type="text" name="search_id" placeholder="Patient ID" class="form-control">
            </div>
            
            <div class="form-group col-lg-6 col-md-6">
                <input type="submit" value="Search" class="btn btn-success btn-block btn-sm">
            </div>


        </form>

                </div>
                                                                     <?php if (!empty($_SESSION["search_error"])): ?>
                    <div class="alert alert-danger">
                        <?php echo ($_SESSION["search_error"]); ?>
                        <?php 	unset($_SESSION["search_error"]);?>
                    </div>
            <?php endif; ?>
            <div class="alert ">
                <a href="new_patient.php" class="btn btn-success btn-block btn-sm">Add New Patient</a>
            </div>
 <div style="margin-top:2em; margin-bottom:2px;" class="alert alert-success">
        <?php
        $sql = mysqli_query($conn, "SELECT * FROM `patient_for_doctor` WHERE BINARY status = 0 ");
 ?>
        <div style=" ">
         <ul class="nav nav-pills nav-stacked" style="">
                <li class="active"> 
                 <a href="#"> 
                 <span class="badge pull-right">ID</span>
                 <b>Waiting List</b> </a>
                 </li> 
                 <?php
        while ($rows = mysqli_fetch_assoc($sql)) {
 
     $surname=$rows['surname'];
     $first_name = $rows['first_name'];
     $patient_id = $rows['patient_id'];
     echo'
                 <li>
                 <a href="home_admin.php?patient_id='.$patient_id.'"><span class="badge pull-right">'. $patient_id.'</span>'.$surname.' '. $first_name.' </a></li>';
     
        


 }
 ?>
        </ul></div>
        </div>
        
        <div style="margin-top:1em; margin-bottom:2em;" class="alert alert-success">
        <?php 
        include "../db/conn.php";
        $sql1 = mysqli_query($conn, "SELECT * FROM `patient_on_admission` WHERE BINARY discharged_status = 0 ");
 ?>
        <div>
         <ul class="nav nav-pills nav-stacked" style="">
                <li class="active"> 
                 <a href="#"> 
                 <span class="badge pull-right">ID</span>
                 <b>On Admission</b> </a>
                 </li> 
                 <?php
        while ($rows = mysqli_fetch_assoc($sql1)) {
 
     $surname=$rows['surname'];
     $first_name = $rows['first_name'];
     $patient_id = $rows['patient_id'];
     echo'
                 <li>
                 <a href="home_admin.php?patient_id='.$patient_id.'"><span class="badge pull-right">'. $patient_id.'</span>'.$surname.' '. $first_name.' </a></li>';
     
        


 }
 ?>
        </ul></div>
        </div>
                    <?php endif; ?>
    </div>
        
        
        
                <!--******************************
        *****************************************************
        *****************************************************
        ************Supervisor SideBar***********************
        ****************************************************
        *************************************************-->
       
        
        <div class="" style="margin-top:2em; margin-bottom:2em;">
            <?php if ($_SESSION["privilege"]== "5"): ?>
             <div class="alert alert-success" >
                 <form action="home_supervisor.php" method="post">
            <div class="form-group">
                <input type="text" name="search_id" placeholder="XXXX" class="form-control">
            </div>
                <?php if (!empty($_SESSION["search_error"])): ?>
                    <div class="alert alert-danger">
                        <?php echo ($_SESSION["search_error"]); ?>
                        <?php 	unset($_SESSION["search_error"]);?>
                    </div>
            <?php endif; ?>
            <div class="form-group">
                <input type="submit" value="Search by Patient ID" class="btn btn-success btn-block btn-sm">
            </div>

        </form>
                </div>
            
            <div class="alert  col-lg-6 col-md-6">
            <a href="new_staff.php" class="btn btn-success btn-sm btn-block" >Create New Staff</a>
                    </div>
            <div class="alert  col-lg-6 col-md-6">
                 <a href="new_patient.php" class="btn btn-success btn-sm btn-block">Add New Patient</a>

            </div>
                <?php endif; ?>

    </div>


            <!--******************************
        *****************************************************
        *****************************************************
        ************Laboratory SideBar***********************
        ****************************************************
        *************************************************-->
            
  <div class="" style="margin-top:-1em; margin-bottom:2em;">
            <?php if ($_SESSION["privilege"]== "3"): ?>

        <div class="alert alert-success">
            <form action="home_lab.php" method="post">
            <div class="form-group">
                <input type="text" name="search_id" placeholder="XXXX" class="form-control">
            </div>
                <?php if (!empty($_SESSION["search_error"])): ?>
                    <div class="alert alert-danger">
                        <?php echo ($_SESSION["search_error"]); ?>
                        <?php 	unset($_SESSION["search_error"]);?>
                    </div>
            <?php endif; ?>
            <div class="form-group">
                <input type="submit" value="Search by Patient ID" class="btn btn-success btn-block">
            </div>

        </form>
                </div>

 
        <?php 
        include "../db/conn.php";
        $sql = mysqli_query($conn, "SELECT * FROM `patient_for_lab` WHERE BINARY status = 0 ");
 ?>
        <div style="margin-top:2em; margin-bottom:2em;" class="alert alert-success">
         <ul class="nav nav-pills nav-stacked" style="">
                <li class="active"> 
                 <a href="#"> 
                 <span class="badge pull-right">ID</span>
                 <b>Laboratory Test</b> </a>
                 </li> 
                 <?php
        while ($rows = mysqli_fetch_assoc($sql)) {
 
     $surname=$rows['surname'];
     $first_name = $rows['first_name'];
     $patient_id = $rows['patient_id'];
     echo'
                 <li>
                 <a href="home_lab.php?patient_id='.$patient_id.'"><span class="badge pull-right">'. $patient_id.'</span>'.$surname.' '. $first_name.' </a></li>';
     
        


 }
 ?>
        </ul></div>

                          <?php endif; ?>
    </div>
                  
            
            
              <!--******************************
        *****************************************************
        *****************************************************
        ************Pharmarcy SideBar***********************
        ****************************************************
        *************************************************-->
            
  <div class="form-group" style="margin-top:-1em; margin-bottom:2em;">
            <?php if ($_SESSION["privilege"]== "4"): ?>
 <div class="alert alert-success">
     <form action="home_pharmacy.php" method="post">
            <div class="form-group">
                <input type="text" name="search_id" placeholder="XXXX" class="form-control">
            </div>
                <?php if (!empty($_SESSION["search_error"])): ?>
                    <div class="alert alert-danger">
                        <?php echo ($_SESSION["search_error"]); ?>
                        <?php 	unset($_SESSION["search_error"]);?>
                    </div>
            <?php endif; ?>
            <div class="form-group">
                <input type="submit" value="Search by Patient ID" class="btn btn-success btn-block">
            </div>

        </form>
                </div>
       

 <div style="margin-top:1em; margin-bottom:2em;" class="alert alert-success">
        <?php 
        
        $sql = mysqli_query($conn, "SELECT * FROM `patient_for_pharmacy` WHERE BINARY answered = 0 ");
 ?>
        <div style="">
         <ul class="nav nav-pills nav-stacked" style="">
                <li class="active"> 
                 <a href="#"> 
                 <span class="badge pull-right">ID</span>
                 <b>Patients Prescription</b> </a>
                 </li> 
                 <?php
        while ($rows = mysqli_fetch_assoc($sql)) {
 
     $surname=$rows['surname'];
     $first_name = $rows['first_name'];
     $patient_id = $rows['patient_id'];
     echo'
                 <li>
                 <a href="?patient_id='.$patient_id.'"><span class="badge pull-right">'. $patient_id.'</span>'.$surname.' '. $first_name.' </a></li>';
     
        


 }
 ?>
        </ul></div>
        </div>
                          <?php endif; ?>
    </div>
                  
    </div>      
            
            
    <div class="alert alert-info" style="margin-bottom: 5em">
        <b><i> A wonderful way of Life</i> </b>
    </div>
            
    </div></div>