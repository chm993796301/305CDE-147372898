<?php
$find = $_GET['forsearch'];

$sqlconnection = mysqli_connect("localhost", "root", "","drug") ;



//$query = "INSERT INTO user (Username, Password, Name, level, exp) VALUES ('".$user."', '".$pass."', 'test', '1', '22')";
//$result = mysqli_query($sqlconnection, $query);
$query = "SELECT * FROM drug WHERE name LIKE '%".$find."%'";
//$query = "SELECT * FROM user";
$result = mysqli_query($sqlconnection, $query);


if ($result->num_rows == 0){
echo false;
}else {
/*
	 //echo $result->num_rows;
	
	
	//$salt1 = mysql_result($result,0,"Username");
	//$salt2 = mysql_result($result,2,"Username");
	//$salt3 = mysql_result($result,3,"Username");	
	//echo $salt1;
	//echo $salt1."{{".$salt2."{{".$salt3;
	

	
	//$abc = "";

	//for display
	$countdb = $result->num_rows;
	/*
	for ($x = 0; $x < $countdb; $x++) {
	$row= mysqli_fetch_array($result); // fetch the array
	
	$salt1 = $row['Username']; 
	$salt2 = $row['Password']; 
	$salt3 = $row['Name']; 
	$salt4 = $row['level']; 
	$salt5 = $row['place']; 
	$abc .= $salt1."{{".$salt2."{{".$salt3."{{".$salt4."{{".$salt5."\n"; 
	
	}
	*/

	//$row= mysqli_fetch_array($result); // fetch the array
	/*
	//print_r($row);
	//echo json_encode($row);
	//$stringtest = 'level';
	//(int)$numtest = "001";
	//$stringtest2 = 'item'.$numtest;
	
	
	$salt1 = $row['name']; 
	$salt2 = $row['type']; 
	$salt3 = $row['detail']; 

	//$salt6 = $row['place']; 
	//$salt7 = $row['cash']; 
	//$salt8 = $row['gold']; 
	//$abc ="login". $salt1."{{".$salt2."{{".$salt3."{{".$salt4."{{".$salt5."{{".$salt6."!@#  ".$stringtest2."  "; 
	//$abc ="login{{". $salt1."{{".$salt2."{{".$salt3."{{".$salt4."{{".$salt5;
	//."{{".$salt6."{{".$salt7."{{".$salt8;
	 
	//(int)$num = "100";//for add test
	//(int)$num = $num+(int)$salt5;
	// $query = "UPDATE user SET exp = ".$num." WHERE Username = '".$user."'";
	//$result = mysqli_query($sqlconnection, $query);
  */
  $druglist =  array();
  while($row = mysqli_fetch_array($result)){   
  $rows =  array("name" => $row[0],
                 "type" => $row[1],
                 "detail" => $row[2]); 
		 array_push($druglist, $rows);
        }
	
	echo json_encode($druglist);
	//echo $abc; // work 

		//echo "succes";

}


?>