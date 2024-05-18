<?php

function conn()
{
	$serverName="localhost";
	$userName="root";
	$pass="";
	$dbName="ds";
	$con=new mysqli($serverName,$userName,$pass,$dbName);
	return $con;

}



?>