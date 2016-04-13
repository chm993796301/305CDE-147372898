<?php

$user = $_POST['username'];
$pass = $_POST['password'];
$name = $_POST['name'];

$method=$_SERVER["REQUEST_METHOD"];
//echo $method;

$sqlconnection = mysqli_connect("localhost", "root", "","drug") ;

switch ($method) {
	case "POST";
if(isset($user) && isset($pass)){

$query = "SELECT * FROM user WHERE username = '".$user."'";
$result = mysqli_query($sqlconnection, $query);
//echo $query;
$r=mysqli_num_rows($result);
//if ($result->num_rows == 0){
if ($r == 0){
	
$query = "INSERT INTO user (username, password, email) VALUES ('".$user."', '".$pass."', '".$name."')";
$result = mysqli_query($sqlconnection, $query);


//$query = "INSERT INTO userinventory (Username) VALUES ('".$user."')";
//$result = mysqli_query($sqlconnection, $query);
echo "succes";
//echo $r;
}else {
 echo "User have been Register";
}
}
break;

	case "PUT";
	parse_str(file_get_contents("php://input"),$post_vars);

		
		$query = "UPDATE user SET Name = ' ".$post_vars['name']."' WHERE Username= '".$post_vars['username']."'";
		$result = mysqli_query($sqlconnection, $query);
		//$query = "INSERT INTO userinventory (Username) VALUES ('".$user."')";
		//$result = mysqli_query($sqlconnection, $query);
	echo $query;

	
break;
}
?>