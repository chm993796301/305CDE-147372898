<?php


$name = $_POST['name'];
$drug = $_POST['drug'];

$method=$_SERVER["REQUEST_METHOD"];
//echo $method;

$sqlconnection = mysqli_connect("localhost", "root", "","drug") ;

switch ($method) {

	case DELETE:
	    parse_str(file_get_contents("php://input"),$post_vars);
            $name = $post_vars['name'];
            $drug = $post_vars['drug'];
	    echo $name;
		echo $drug;
		$query = "DELETE FROM favourites WHERE namef='".$name."' and drugf ='".$drug."'";
		//DELETE FROM `favourites` WHERE namef = '123'and drugf='Midazolam'
		echo $query;
		$result = mysqli_query($sqlconnection, $query);
		
	    break;

	
break;
}
?>