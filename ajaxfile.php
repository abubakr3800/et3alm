<?php

include "config.php";

$condition  = "1";
if(isset($_GET['userid'])){
	$userid = mysqli_real_escape_string($con,trim($_GET['userid']));

	$condition  = " id=".mysqli_real_escape_string($con,$_GET['userid']);
}
$userData = mysqli_query($con,"select * from courses WHERE ".$condition );

$response = array();

while($row = mysqli_fetch_assoc($userData)){

    $response[] = $row;
}

echo json_encode($response);
file_put_contents('myfile.json', json_encode($response));

exit;