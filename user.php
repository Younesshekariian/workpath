<?php

//یونس شکاریان دانشحو ترم یک کاردانی 

$uuid= $_GET['id'];
// connect database
$database=mysqli_connect('localhoste','root','','user');

// Ceart query
$querysql= "SELECT * FORM user  WHERE id= ?    ";
// Execution query
 $resulte=$database -> query($querysql,$uuid) ;

$information=$resulte->fetch_array();

// Conversion Json
json_encode($information);

