<?php
	$weight =  floatval($_GET['weight']);
	//$weight = floatval($_GET['weight']);
	$lpg_leakage = intval($_GET['lpg_leakage']);
	//$lpg_leakage = floatval($_GET['lpg_leakage']);
	//@ob_start();
	//session_start();
    if(session_status()!=PHP_SESSION_ACTIVE) session_start();
    //$result2=mysql_query("SELECT * FROM `exp1` ORDER BY `id` INSC",$link);
	//create a php timestamp and make it mysql compatible
	date_default_timezone_set("Asia/Kolkata");
	$timestamp = date('Y-m-d H:i:s', time());
 
	//$conn = new mysqli("localhost","id2438630_root","12345","id2438630_iot_hackathon");
	$conn = new mysqli("localhost","root","","iot_hackathon");
	// Check connection
	if (mysqli_connect_errno()) {
		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
 
	//$query = "insert into exp5 values (\"$weight\", \"$lpg_leakage\",\"$timestamp\")";
	//$query = "insert into exp5 (weight,lpg_leakage,date_and_time) values (\"$weight\", \"$lpg_leakage\",\"$timestamp\")";
	$query = "insert into exp5 (weight,lpg_leakage,date_and_time) values (\"$weight\", \"$lpg_leakage\",\"$timestamp\")";
	$result = mysqli_query($conn, $query);
	if(!$result) {
		 echo "Error: " . mysqli_error($conn);
	} else {
		http_response_code(200);
		echo http_response_code() . ": ";
		echo "Data successfully added to db.\n";
	}
?>