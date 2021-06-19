<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
	die("Connection failled".$conn->connect_error);
}

$course_ = $_POST['Course'];
$code_ = $_POST['Code'];
$semester_ = $_POST['Semester'];
$degree_ = $_POST['Degree'];
$date_ = $_POST['Date'];

$query = "UPDATE examdetails SET Course = '$course_',Code = '$code_',Semester = '$semester_',Degree = '$degree_',Date = '$date_', WHERE Code = '$code_'";

$result = $conn->query($query);

if ($result==1) {
	$response = array("status"=>"1","message"=>"Data Updated succesfully");
}
else
	 {
	$response = array("status"=>"1","message"=>"Data not updated succesfully");
	
}

echo json_encode($response);
?>