<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
	die("Connection failled".$conn->connect_error);
}


$code_ = $_POST['Code'];


$query = "DELETE FROM examdetails WHERE Code = '$code_'";

$result = $conn->query($query);

if ($result==1) {
	$response = array("status"=>"1","message"=>"Data Deleted succesfully");
}
else
	 {
	$response = array("status"=>"1","message"=>"Data not Deleted succesfully");
	
}

echo json_encode($response);

?>