<?php

function conn()
{
	$serverName = "localhost";
	$userName = "root";
	$pass = "";
	$dbName = "electronic_shop";
	$con = new mysqli($serverName, $userName, $pass, $dbName);
	return $con;
}
