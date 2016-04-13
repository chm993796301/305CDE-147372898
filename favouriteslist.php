<?php
$name = $_GET['name'];

$sqlconnection = mysqli_connect("localhost", "root", "","drug") ;



//$query = "INSERT INTO user (Username, Password, Name, level, exp) VALUES ('".$user."', '".$pass."', 'test', '1', '22')";
//$result = mysqli_query($sqlconnection, $query);
$query = "SELECT * FROM favourites WHERE namef = '".$name. "'";
//$query = "SELECT * FROM user";
$result = mysqli_query($sqlconnection, $query);


if ($result->num_rows == 0){
echo false;
}else {

  $druglist =  array();
  while($row = mysqli_fetch_array($result)){   
  $rows =  array("drugf" => $row[1],
                 "namef" => $row[0],
                 ); 
		 array_push($druglist, $rows);
        }
	
	echo json_encode($druglist);
	//echo $abc; // work 

		//echo "succes";

}


?>