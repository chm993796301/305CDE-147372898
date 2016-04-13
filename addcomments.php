<?php
$name = $_POST['name'];
$drug = $_POST['drug'];
$comment = $_POST['comment'];

$sqlconnection = mysqli_connect("localhost", "root", "","drug") ;

$query = "INSERT INTO comments (name, drug_p, comment_p) VALUES ('".$name."', '".$drug."', '".$comment."')";
$result = mysqli_query($sqlconnection, $query);
	echo "succes";



?>