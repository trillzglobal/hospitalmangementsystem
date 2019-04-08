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
include "../bin/patient_details.php";
include "../bin/new_report.php";
include '../bin/discharge.php';
include "../bin/search_details.php";
include "../bin/done_with_patient.php";


session_start();


?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="../assets/images/img.ico" rel="icon" type="image/x-icon" />
    <title>MEDICAL CENTER</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">


<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="vertical-align: middle;"><font color="red"> 32 ATILLERY BRIGADE MEDICAL CENTER</font></a>
            <a class="navbar-brand" href="#" style="vertical-align: middle;"><img href="../assets/images/army1.jpg"></a>
		

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            </ul>

            <ul class="nav navbar-nav navbar-right">


                <?php if ($_SESSION["logged"]): ?>
                <li> <a href="#" class="btn btn-sm btn-default navbar-btn"><b><font color="blue"><?php echo "Welcome ". $_SESSION["username"];?></font></b></a>
                    </li>
                    <li> <a href="../logout.php" class="btn btn-sm btn-success navbar-btn">Sign Out</a>
                    </li>
                    <?php else: ?>
                    <li> <a href="../index.php" class="btn btn-sm btn-success navbar-btn">Sign In</a>
                    </li>
                <?php endif; ?>


            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<?php include "sidebar.php"; ?>


        <div class="fullbar" style="padding-top:7em;">
                <?php if ($_SESSION["error"]): ?>
                    <div class="alert alert-success">
                        <?php echo ($_SESSION["error"])."\n" ?>
                        <?php if(!empty($_SESSION["upload_errs"])) "\n".print_r($_SESSION["upload_errs"]);
                        unset($_SESSION["upload_errs"]);
                        ?>
                    </div>
            <?php endif; ?>


<?php if (!empty($ppatient_id)): ?>
<div class="col-lg-3 col-md-2">
</div>
<div style="margin-bottom:2em">
    <img src="<?php echo $pimage_path.$pimage_name ?>" width=150 height=150 class="img-thumbnail">
</div>
<div class="col-lg-offset-3" style="margin-top:-2em; margin-bottom:2em;">
                <h3><?php echo $psurname.', '.$pfirst_name.' '.$pother_name; ?> </h3>
            </div>
            <div class=" bg-info">
            <div class="col-lg-3 col-md-3" style="margin-bottom:0.5px ">
                DATE OF BIRTH: <b><?php echo $pdate_of_birth; ?></b>
                </div>
                        <div class="col-lg-3 col-md-3" style="margin-bottom:0.5px">
                            SEX:<b><?php echo $psex; ?></b>
                </div>
                        <div class="col-lg-3 col-md-3" style="margin-bottom:0.5px">
                            MARITAL STATUS:<b><?php echo $pmarital_status; ?></b>
                </div>
                        <div class="col-lg-3 col-md-3" style="margin-bottom:0.5px">
                            RELIGION:<b><?php echo $preligion; ?></b>
                </div>
                                    <div class="col-lg-6 col-md-6" style=" ">
                                        ADDRESS:<b><?php echo $paddress; ?></b>
                </div>
                
                                    <div class="col-lg-3 col-md-3" style=" ">
                                        PHONE NO:<b><?php echo $pphone_no; ?></b>
                </div>
                                    <div class="col-lg-3 col-md-3" style=" ">
                                        OCCUPATION:<b><?php echo $poccupation; ?></b>
                </div>
                                    <div class="col-lg-3 col-md-3" style=" ">
                                        PATIENT ID:<b><?php echo $ppatient_id; ?></b>
                </div>
                                    <div class="col-lg-3 col-md-3" style=" ">
                                        STATE OF ORIGIN:<b><?php echo $pstate_of_origin; ?></b>
                </div>
                 <div class="col-lg-3 col-md-3" style=" ">
                     TRIBE:<b><?php echo $ptribe; ?></b>
                </div>
                 <div class="col-lg-3 col-md-3" style=" ">
                     BLOOD GROUP:<b><?php echo $pblood_group; ?></b>
                </div>
                 <div class="col-lg-3 col-md-3" style=" ">
                     NHIS CARD:<b><?php echo'<font color="green">'.$pnhis_card.'</font>'; ?></b>
                </div>
                        <div class="col-lg-3 col-md-3" style="">
                            ARMY NO:<b><?php echo $parmy_no; ?></b>
                </div>
                                    <div class="col-lg-3 col-md-3" style=" ">
                                        RANK:<b><?php echo $prank; ?></b>
                </div>
                                    <div class="col-lg-3 col-md-3" style="margin-bottom:2px ">
                                        UNIT:<b><?php echo $punit; ?></b>
                </div>
            </div>
<div class="col-lg-12"><hr></div>
                     <?php if ($_SESSION["report_error"]):?>
        <div class="alert alert-danger">
          <strong>Error:</strong> <?php echo $_SESSION["report_error"] ?>
        </div>
	<?php 	unset($_SESSION["report_error"]);?>
        <?php endif ?>
                
                <?php if ($_SESSION["report_success"]):?>
        <div class="alert alert-success">
          <strong>Success:</strong> <?php echo $_SESSION["report_success"] ?>
        </div>
	<?php 	unset($_SESSION["report_success"]);?>
        <?php endif ?>
            
                                    <!-- Test result position-->
            
            <div class="col-lg-12 col-md-12" style="">
                <div class="col-lg-offset-4 col-md-offset-4" style="margin-bottom:2em;"> </div>
                <table class="table table-striped alert alert-info">
                    <thead>
                    <caption class="col-lg-offset-5 col-md-offset-4"><font color="green"><b>TEST ON PATIENT</b></font></caption>
                        <tr>
                    <th class="col-lg-2 col-md-2">Date</th>
                    <th class="col-lg-8 col-md-4">Test</th>
                    <th class="col-lg-2 col-md-6">Result</th>
                        </tr>
                        
                        
<?php
$lsquare = mysqli_query($conn, "SELECT * FROM `patient_for_lab` WHERE BINARY patient_id = '$ppatient_id'");
$lnum = mysqli_num_rows($lsquare);

if($lnum != 0){
while($row = mysqli_fetch_assoc($lsquare)){
   $id = $row['id']; 
  $ltime = $row['time']; 
  $ltest = $row['lab_test']; 
  $lresult = $row['result'];
  $status =$row['status'];
  
  if($status ==  0){
               echo'           <tr>
                            <td class="col-lg-2 col-md-2"><h5>'.$ltime.'</h5></td>
                            <td class="col-lg-8 col-md-4"><h5>'.$ltest.'</h5></td>
                            <td class="col-lg-2 col-md-6"><h5>';include 'lab_test.php';
                            echo'</h5></td>
  </tr>';}
  else{echo'           <tr>
                            <td class="col-lg-2 col-md-2"><h5>'.$ltime.'</h5></td>
                            <td class="col-lg-8 col-md-4"><h5>'.$ltest.'</h5></td>
                            <td class="col-lg-2 col-md-6"><h5>'.$lresult.'</h5></td>
  </tr>';

}
}
}
?>
                    </thead>
                    
                </table>
                
            </div>            
                        
                                    
                                    
                                    <div class="col-lg-12"><hr></div>
                                    
                             
    
            
            
                                    
                                    <div class="col-lg-12"><hr></div>
  <?php endif ?>

<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/main.js"></script>

    
            <div class="navbar navbar-inverse navbar-fixed-bottom ">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                
                <a class="nav navbar-nav navbar-right" href="www.trillzglobal.com.ng" style="vertical-align: middle; align-content: center"><h6><i>&COPY; Copyright: <font color="white">32 Atillery Brigade (2018) </font><br>Powered by: <font color="white">Trillz Global</font></i></h6></a><p>
                  
		
        </div>
</body>
</html>
