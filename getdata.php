<?php 
 
 if($_SERVER['REQUEST_METHOD']=='GET'){
 
 $id  = $_GET['id'];
 include_once('db.php');
 $query = "SELECT * FROM exp5 WHERE id between ($id+1) and ($id+500)";
 $result = mysqli_query($conn,$query);
 //$row = mysqli_fetch_array($result);
 	while ($row = mysqli_fetch_assoc($result)) {
		/*$weight=$row["weight"];
		$consumption=.39;
		$prediction=($weight/$consumption);
		//echo $prediction;*/
		$array[] = $row;
		//$array2[]=$prediction;
		//$get = array();
		/*array_push($get,array(
		"id"=>$row['id'],
		"weight"=>$row['weight'],
		"lpg_leakage"=>$row['lpg_leakage'],
		"date_and_time"=>$row['date_and_time'] ) );*/
	}
	header('Content-Type:Application/json');
	echo json_encode($array);
	//echo json_encode($array2);
	mysqli_free_result($result);
	mysqli_close($conn);
 }
 ?>