<?php
$name = $_POST['name'];
$drug = $_POST['drug'];

$sqlconnection = mysqli_connect("localhost", "root", "","drug") ;



//echo "1";
//$query = "INSERT INTO user (Username, Password, Name, level, exp) VALUES ('".$user."', '".$pass."', 'test', '1', '22')";
//$result = mysqli_query($sqlconnection, $query);
$query = "SELECT * FROM favourites WHERE namef = '".$name."' and drugf = '".$drug."'";
//$query = "SELECT * FROM user";
$result = mysqli_query($sqlconnection, $query);
//echo "2";

if ($result->num_rows == 0){
    
	$query = "INSERT INTO favourites (namef, drugf) VALUES ('".$name."', '".$drug."')";
	$result = mysqli_query($sqlconnection, $query);
	echo "succes";
}else {
	echo "User have been added";
}


?>