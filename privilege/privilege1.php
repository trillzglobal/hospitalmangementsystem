<?php

session_start();
 if ($_SESSION["privilege"]!= "1") {
	header("Location: ../dashboard/home.php");
	exit();
	}

