<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
	die("Connection failled".$conn->connect_error);
}

$couse_ = $_POST['Course'];
$code_ = $_POST['Code'];
$semester_ = $_POST['Semester'];
$degree_ = $_POST['Degree'];
$date_ = $_POST['Date'];

$query = "INSERT INTO examdetails(Couuse,Code,Semester,Degree,Date) VALUES ('$couse_','$code_','$semester_','$degree_','$date_')";
$result = $conn->query($query);

if ($result==1) {
	$response = array("status"=>"1","message"=>"Data succesfully inserted");
}
else
	 {
	$response = array("status"=>"1","message"=>"Data not succesfully inserted");
	
}

echo json_encode($response);

?>