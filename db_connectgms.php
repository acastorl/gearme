<?php
	$username = "dig4530c_group11";
	$password = "knights4321!";
	$database = "dig4530c_group11";

	$connection = mysqli_connect("localhost" , "$username" , "$password", "$database") or die(mysql_error());  //(host,username,password,) Connects to mysql server. Throws error if it cannot connect.
?>
