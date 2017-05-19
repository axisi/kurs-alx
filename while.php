<?php include "bootstrap.php";

$to = download( $mysqli, "select * from while_table ");

include "templates/while.php";