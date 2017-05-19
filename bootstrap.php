<?php

include "config.php";
include "library/common.php";
 $mysqli = new mysqli( $config['db_host'] , $config['db_user'], $config['db_password'] , $config['db_dbname']);

 
 if($mysqli->connect_errno){
 	printf("Connect failed: %s\n",$mysqli->connect_error);
 	exit();
 }



// 	"$config['db_host']",
// 	"$config['db_user']",
// 	"$config['db_password']",
// 	"$config['db_dbname']"
// 	);
