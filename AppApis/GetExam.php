<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
	die("Connection failled".$conn->connect_error);
}



$query = "Select * FROM examdetails";

$result = $conn->query($query);

$row = $result->fetch_all(MYSQLI_ASSOC);

if (empty($row)) {
	$response = array("status"=>"0","message"=>"Record not available");
}
else
	 {
	$response = array("status"=>"1","message"=>"Record Availalbe"=>$row);
	
}

echo json_encode($response);

?>