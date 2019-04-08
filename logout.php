<?php
/**
 * Created by PhpStorm.
 * User: bane
 * Date: 08/04/2017
 * Time: 6:04 PM
 */

session_start();
session_unset();
session_destroy();
$ppatient_id = "";

header("Location: index.php");
