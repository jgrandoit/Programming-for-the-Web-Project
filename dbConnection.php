<?php
function ConnectToDB()
{
	$server_name = "localhost";
	$username = "root";
	$password = "";
	$db1 = "csloginsys";
    $db2 = "emp_db";
    $db3 = "dbstudent";
	$conn1 = new mysqli($server_name, $username, $password, $db1);
	$conn2 = new mysqli($server_name, $username, $password, $db2);
	$conn3 = new mysqli($server_name, $username, $password, $db3);
	
	if ($conn1->connect_error)
		die("Failed". $conn1->connect_error);
	elseif($conn2->connect_error)
        die("Failed". $conn2->connect_error);
    elseif($conn3->connect_error)
        die("Failed". $conn3->connect_error);
    else
		return array($conn1,$conn2,$conn3);
}
?>


