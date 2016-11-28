<?php

include_once 'db-con.php';

$handle = fopen('php://input','r');
$jsonInput = fgets($handle);
$params = json_decode($jsonInput,true);

$humidity = isset($params['humidity'])?$params['humidity']:'';
$temperature = isset($params['temperature'])?$params['temperature']:'';
$nodata = isset($params['nodata'])?$params['nodata']:'';

if($humidity !='')
{

 
$sql = "INSERT INTO data SET humidity='".$humidity ."' ,temperature='".$temperature."' ,datetime='".date("Y-m-d H:i:s")."' ";
 
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

}

else
{
echo $nodata;
}
?>
