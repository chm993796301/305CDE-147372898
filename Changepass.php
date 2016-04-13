<?php


$name = $_POST['name'];
$pass = $_POST['pass'];

$method=$_SERVER["REQUEST_METHOD"];
//echo $method;

$sqlconnection = mysqli_connect("localhost", "root", "","drug") ;

switch ($method) {


	case PUT;
	parse_str(file_get_contents("php://input"),$post_vars);

		
		$query = "UPDATE user SET password = '".$post_vars['pass']."' WHERE username= '".$post_vars['name']."'";
		$result = mysqli_query($sqlconnection, $query);
		//$query = "INSERT INTO userinventory (Username) VALUES ('".$user."')";
		//$result = mysqli_query($sqlconnection, $query);
	//echo $query;
	echo "success";
	break;



}
?>