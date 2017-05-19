<?php


function download($mysqli, $sql){
	//var_dump($mysqli);
	$result=  $mysqli->query($sql);
	//var_dump($res);
	while($row = $result->fetch_array())
	{
		$rows[] = $row;
	}
	//$result = $result->fetch_array(MYSQLI_ASSOC);
	//var_dump($result);
	//$result= (array) $result;
	
	
	$result->close();
	$mysqli->close();
	var_dump($rows);
	return $rows;
}