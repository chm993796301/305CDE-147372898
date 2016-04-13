<?php
$user = $_GET['username'];
$pass = $_GET['password'];
//echo $user;
//echo $pass;

$sqlconnection = mysqli_connect("localhost", "root", "","drug") ;


if(isset($user) && isset($pass)){

//$query = "INSERT INTO user (Username, Password, Name, level, exp) VALUES ('".$user."', '".$pass."', 'test', '1', '22')";
//$result = mysqli_query($sqlconnection, $query);
$query = "SELECT * FROM user WHERE username = '".$user."' AND password = '".$pass."'";
//$query = "SELECT * FROM user";
$result = mysqli_query($sqlconnection, $query);
//echo $query;

if ($result->num_rows == 0){
     echo 0;
}else {
	echo 1;
	session_start();
	    $_SESSION["username"] = $user;
           
	
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
	

	$row= mysqli_fetch_array($result); // fetch the array
	//print_r($row);
	//echo json_encode($row);
	$stringtest = 'level';
	(int)$numtest = "001";
	$stringtest2 = 'item'.$numtest;
	$salt1 = $row['Username']; 
	$salt2 = $row['Password']; 
	$salt3 = $row['Name']; 

	//$salt6 = $row['place']; 
	//$salt7 = $row['cash']; 
	//$salt8 = $row['gold']; 
	//$abc ="login". $salt1."{{".$salt2."{{".$salt3."{{".$salt4."{{".$salt5."{{".$salt6."!@#  ".$stringtest2."  "; 
	//$abc ="login{{". $salt1."{{".$salt2."{{".$salt3."{{".$salt4."{{".$salt5;
	//."{{".$salt6."{{".$salt7."{{".$salt8;
	 
	//(int)$num = "100";//for add test
	//(int)$num = $num+(int)$salt5;
	//   $query = "UPDATE user SET exp = ".$num." WHERE Username = '".$user."'";
 //  $result = mysqli_query($sqlconnection, $query);
   
   $arr = array(
        array(
				
                "Username" => $salt1,
                "Password" => $salt2,
                "Name" => $salt3,
                
				
        )
	);
	echo json_encode($arr);
	//echo $abc; // work 
	
	

	

		//echo "succes";
*/
}
}

?>