<?php
header('Content-Type: application/json');
include("../conexion.php");
$sqlQuery = "SELECT student_id,student_name,marks FROM tbl_marks ORDER BY student_id";
$result = mysqli_query($conn,$sqlQuery);
$data = array();
foreach ($result as $list) {
	$data[] = $list;
}
mysqli_close($conn);
echo json_encode($data);
?>