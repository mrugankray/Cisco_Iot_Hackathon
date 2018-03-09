<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="3">
<meta charset="utf-8">
<title>Database</title>
<link rel="stylesheet" href="index_stylescript.css" type="text/css"/>
</head>
<body>
<header>
		<div class="container">
			<div id="Branding">
				<h1>IOT Squad</h1>
			</div>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li class="current"><a href="data.php" target="_blank">Data</a></li>
				</ul>
			</nav>
		</div>
</header>
<table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">  
			<tr>
				<th>Id</th>
				<th>weight</th>
				<th>lpg_leakage</th>
				<th>date_and_time</th>
			</tr>
			<?php
	  $response = array();
	   //$conn = new mysqli("localhost","id2438630_root","12345","id2438630_iot_hackathon");
	   $conn = new mysqli("localhost","root","","iot_hackathon");
      // Check connection
	       
      if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
	  $query = "SELECT * FROM exp5 ORDER BY date_and_time DESC";
      $result = mysqli_query($conn, $query);
    // looping through all results
    // products node
    //$response["exp3"] = array();
      if(!$result) {
         echo "Error: " . mysqli_error($conn);
      }
      while($row = mysqli_fetch_array($result)) {
		$id=$row['id'];
        $weight = $row["weight"];
        $lpg_leakage = $row["lpg_leakage"];
        $timestamp = $row["date_and_time"];
		/*
		$product = array();
        $product["weight"] = $row["weight"];
        $product["lpg_leakage"] = $row["lpg_leakage"];
        $product["date_and_time"] = $row["date_and_time"];*/
        echo "<tr>";
		echo "<td>$id</td>";
        echo "<td>$weight</td>";
        echo "<td>$lpg_leakage</td>";
        echo "<td>$timestamp</td>";
        echo "</tr>";
      }  
	 /* else {
    // no products found
    $response["success"] = 0;
    $response["message"] = "No products found";
 
    // echo no users JSON
    echo json_encode($response);
}*/
			//header('Content-Type:Application/json');
	        //echo json_encode($array);
			mysqli_free_result($result);
			mysqli_close($conn);
			?>
 </table> 
<div id="z"><footer class="data">IOT Squad,Copyright&copy;2017</footer></div>
</body>
</html>