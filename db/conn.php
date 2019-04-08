<?php

/*
 * Created by
 * Trillz Global
 * For: Hospital Use
 * Date: 28:08:2018
 * Email:trillzglobal@gmail.com
 */

$host = "localhost";
$user = "root";
$pass ="";
$db = "mrs32atbr";

$conn = mysqli_connect($host,$user,$pass,$db);

if(mysqli_connect_error()){
    echo 'could not connect to db';
}else{

}
?>