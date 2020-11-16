<?php 

$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "slotify";

// Create connection
$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName );

//Check connection
if(!$conn){
	die("Connection failed:" .mysqli_connect_error());
}


