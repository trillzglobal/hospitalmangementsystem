<?php
ob_start();
session_start();
if(!isset($_SESSION["logged"])){
header("Location: ../index.php");
exit(); }

?>


