<?php

/*
 * Created by
 * Trillz Global
 * For: Hospital Use
 * Date: 28:08:2018
 * Email:trillzglobal@gmail.com
 */

error_reporting('0');
ini_set('error_reporting', 0);
session_start();
if(!isset($_SESSION["logged"])){
header("Location: ../index.php");
exit(); }





?>
